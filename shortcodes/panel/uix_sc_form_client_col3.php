<?php
if ( !class_exists( 'UixSCFormCore' ) ) {
    return;
}

$sid     = ( isset( $_POST[ 'sectionID' ] ) ) ? $_POST[ 'sectionID' ] : -1;
$pid     = ( isset( $_POST[ 'postID' ] ) ) ? $_POST[ 'postID' ] : 0;
$cid     = ( isset( $_POST[ 'contentID' ] ) ) ? $_POST[ 'contentID' ] : 'content';
/**
 * Form ID
 */
$form_id = 'uix_sc_form_client_col3';

/**
 * Form Type
 */
$form_type = [
    'list' => false
];


$args = 
	[
	
		array(
			'desc'           => __( 'Note: 3 items per row. Per section insert for a maximum of <strong>3</strong>.', 'uix-shortcodes' ),
			'type'           => 'text'
		
		),
	
	 
		//------list begin
		array(
			'id'             => 'uix_sc_client_col3_list',
			'title'          => __( 'List Item', 'uix-shortcodes' ),
			'desc'           => '',
			'value'          => '',
			'placeholder'    => '',
			'type'           => 'list',
			'default'        => array(
									'btn_text'                  => __( 'click here to add an item', 'uix-shortcodes' ),
									'clone_class'               => [ 
									
										array(
											'id'        => 'dynamic-row-uix_sc_client_col3_listitem_logo',
											'type'      => 'image'
										), 
									
										array(
											'id'        => 'dynamic-row-uix_sc_client_col3_listitem_intro',
											'type'      => 'textarea'
										), 
										

									 ],
									'max'                       => 3
				                )
									
		),
		
		
			array(
				'id'             => 'uix_sc_client_col3_listitem_logo',
				'title'          => '',
				'desc'           => '',
				'value'          => '',
				'class'          => 'dynamic-row-uix_sc_client_col3_listitem_logo', /*class of list item */
				'placeholder'    => __( 'Logo URL', 'uix-shortcodes' ),
				'type'           => 'image',
				'default'        => array(
										'remove_btn_text'  => __( 'Remove image', 'uix-shortcodes' ),
										'upload_btn_text'  => __( 'Upload Logo', 'uix-shortcodes' ),
									)
			
			),	
			
			
			
			array(
				'id'             => 'uix_sc_client_col3_listitem_intro',
				'title'          => '',
				'desc'           => '',
				'value'          => __( 'The Introduction of this member.', 'uix-shortcodes' ),
				'class'          => 'dynamic-row-uix_sc_client_col3_listitem_intro', /*class of list item */
				'placeholder'    => '',
				'type'           => 'textarea',
				'default'        => array(
										'row'     => 5,
										'format'  => true
									)
			
			),
		
	
			
		
		//------list end
		
		


		
	
	]
;


$form_html = UixSCFormCore::add_form( $cid, $sid, $form_id, $form_type, $args, 'html' );
$form_js = UixSCFormCore::add_form( $cid, $sid, $form_id, $form_type, $args, 'js' );
$form_js_vars = UixSCFormCore::add_form( $cid, $sid, $form_id, $form_type, $args, 'js_vars' );





/**
 * Returns actions of javascript
 */

if ( $sid == -1 && is_admin() ) {
	$currentScreen = get_current_screen();
	if( $currentScreen->base === "post" || $currentScreen->base === "widgets" || $currentScreen->base === "customize" || self::inc_str( $currentScreen->base, '_page_' ) ) {
	  	  
		if ( is_admin()) {
			
			echo UixSCFormCore::add_form( $cid, $sid, $form_id, '', '', 'active_btn' );
			?>
			<script type="text/javascript">
			( function($) {
			'use strict';
				$( function() {  
				
					/* List Item ( step 1) */
					var dynamic_append_box_content = '<?php echo UixSCFormCore::dynamic_form_code( 'dynamic-row-uix_sc_client_col3_listitem_logo', $form_html ).UixSCFormCore::dynamic_form_code( 'dynamic-row-uix_sc_client_col3_listitem_intro', $form_html ); ?>';

					<?php echo UixSCFormCore::uixscform_callback( $form_js, $form_id, __( 'Insert Client (3 Column)', 'uix-shortcodes' ) ); ?>					
					<?php echo UixSCFormCore::send_before( $form_js_vars, $form_id ); ?> 
					/*--**************** Custom shortcode begin ****************-- */
						
						/* List Item ( step 2)  */
						var list_num = 3;
						
				
						var show_list_item = '';
						for ( var i=0; i<=list_num; i++ ){
							
							var _uid = ( i == 0 ) ? '#' : '#'+i+'-',
								_logo = $( _uid+'uix_sc_client_col3_listitem_logo' ).val(),
								_desc = $( _uid+'uix_sc_client_col3_listitem_intro' ).val();
								
								
								
								
							var _item_v_logo = ( _logo != undefined ) ? _logo : '',
								_item_v_desc = ( _desc != undefined ) ? uixscform_formatTextarea( _desc ) : '';
								
							
							//last column
							var lastcol = ( i == list_num ) ? " last='1'" : '';
							
							if ( _logo != undefined ) {
								show_list_item += "<br>[uix_client_item col='3' logo='"+_item_v_logo+"' "+lastcol+"]";
								show_list_item += "<br>[uix_client_item_desc]"+ _item_v_desc +"[/uix_client_item_desc]";					
								show_list_item += "<br>[/uix_client_item]";
			
							}
								
							
						}
			
			
						code = "[uix_client]"+show_list_item+"<br>[/uix_client]";

						
					/*--**************** Custom shortcode end ****************-- */
					<?php echo UixSCFormCore::send_after(); ?> 
			} ) ( jQuery );
			</script>
	 
			<?php
	
			
		}
	}
	
}


/**
 * Returns forms with ajax
 */
if ( $sid >= 0 && is_admin() ) {
	echo $form_html;	
}