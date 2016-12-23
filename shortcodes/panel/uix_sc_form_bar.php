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
$form_id = 'uix_sc_form_bar';

/**
 * Form Type
 */
$form_type = [
    'list' => false
];


$args = 
	[
	
		array(
			'id'             => 'uix_sc_bar_shape',
			'title'          => __( 'Choose Style', 'uix-shortcodes' ),
			'desc'           => '',
			'value'          => 'circular',
			'placeholder'    => '',
			'type'           => 'radio',
			'default'        => array(
									'circular'  => 'circular',
									'square'  => 'square'
								),
			/* If the toggle of switch with radio is enabled, the target id require class like "toggle-row" */
			'toggle'        => array(
			                        array(
										'trigger_id'           => 'uix_sc_bar_shape-circular', /* {item id}-{option id} */
										'toggle_class'         => [ 'uix_sc_bar_circular_size_toggle_class' ],
										'toggle_remove_class'  => [ 'uix_sc_bar_square_size_toggle_class' ]

									),
			                        array(
										'trigger_id'           => 'uix_sc_bar_shape-square', /* {item id}-{option id} */
										'toggle_class'         => [ 'uix_sc_bar_square_size_toggle_class' ],
										'toggle_remove_class'  => [ 'uix_sc_bar_circular_size_toggle_class' ]

									),
						
									
				                )		
								
		),
		
			array(
				'id'             => 'uix_sc_bar_circular_size',
				'title'          => __( 'Bar Size', 'uix-shortcodes' ),
				'desc'           => '',
				'value'          => '120',
				'class'          => 'toggle-row uix_sc_bar_circular_size_toggle_class', /*class of toggle item */
				'placeholder'    => '',
				'type'           => 'short-text',
				'default'        => array(
										'units'  => 'px'
									)
			
			),
			
			array(
				'id'             => 'uix_sc_bar_square_size',
				'title'          => __( 'Bar Size', 'uix-shortcodes' ),
				'desc'           => '',
				'value'          => '100',
				'class'          => 'toggle-row uix_sc_bar_square_size_toggle_class', /*class of toggle item */
				'placeholder'    => '',
				'type'           => 'short-units-text',
				'default'        => array(
										'units'  => [ '%', 'px' ],
										'units_id'  => 'uix_sc_bar_square_size_units'
									)
			
			),	
			
		
	
		array(
			'id'             => 'uix_sc_bar_percent',
			'title'          => __( 'Percent', 'uix-shortcodes' ),
			'desc'           => '',
			'value'          => 75,
			'placeholder'    => '',
			'type'           => 'short-text',
			'default'        => array(
									'units'  => '%'
								)
		
		),
	
		
		array(
			'id'             => 'uix_sc_bar_perc_icons_size',
			'title'          => __( 'Percentage & Icon Size', 'uix-shortcodes' ),
			'desc'           => '',
			'value'          => '12',
			'placeholder'    => '',
			'type'           => 'short-text',
			'default'        => array(
									'units'  => 'px'
								)
		
		),	
		
		array(
			'id'             => 'uix_sc_bar_linewidth',
			'title'          => __( 'Line Width', 'uix-shortcodes' ),
			'desc'           => '',
			'value'          => 3,
			'placeholder'    => '',
			'type'           => 'short-text',
			'default'        => array(
									'units'  => 'px'
								)
		
		),
		
		array(
			'id'             => 'uix_sc_bar_icon_toggle',
			'title'          => __( 'Icon', 'uix-shortcodes' ),
			'desc'           => __( 'Using Icon instead of percentage.', 'uix-shortcodes' ),
			'value'          => '',
			'placeholder'    => '',
			'type'           => 'checkbox',
			'default'        => array(
									'checked'  => false
				                ),
			/* If the toggle of switch with checkbox is enabled, the target id require class like "toggle-row" */
			'toggle'        => array(
									'trigger_id'  => 'uix_sc_bar_icon_toggle', /* {item id}-{option id} */
									'toggle_class'  => [ 'uix_sc_bar_icon_toggle_class', 'uix_sc_bar_iconsize_toggle_class' ]
				                )	
		
		
		),	
		
			array(
				'id'             => 'uix_sc_bar_icon',
				'title'          => '',
				'desc'           => '',
				'value'          => '',
				'class'          => 'toggle-row uix_sc_bar_icon_toggle_class', /*class of toggle item */
				'placeholder'    => '',
				'type'           => 'icon',
				'default'        => array(
										'social'  => false
									)
			
			),	
			
		array(
			'id'             => 'uix_sc_bar_color',
			'title'          => __( 'Bar Color', 'uix-shortcodes' ),
			'desc'           => '',
			'value'          => '#a2bf2f',
			'placeholder'    => '',
			'type'           => 'color',
			'default'        => [ '#fffff0', '#f5f5dc', '#f5deb3', '#d2b48c', '#c3b091', '#c0c0c0', '#808080', '#464646', '#333333', '#000080', '#084c9e', '#007fff', '#0E90D2', '#4BB1CF', '#5F9EA0', '#00ffff', '#7fffd4', '#008080', '#228b22', '#808000', '#a2bf2f', '#7fff00', '#bfff00', '#ffd700', '#daa520', '#ff7f50', '#fa8072', '#fc0fc0', '#ff77ff', '#e0b0ff', '#b57edc', '#843179', '#E1A0A1', '#D84F51', '#dc143c', '#990002' ,'#800000' ]
		
		),
		
		
	
	
		array(
			'id'             => 'uix_sc_bar_trackcolor',
			'title'          => __( 'Track color', 'uix-shortcodes' ),
			'desc'           => '',
			'value'          => '#f1f1f1',
			'placeholder'    => '',
			'type'           => 'color',
			'default'        => [ '#ffffff', '#473f3f',  '#bebebe', '#dcdcdc', '#f1f1f1' ]
		
		),
	
	
		array(
			'id'             => 'uix_sc_bar_percent_icon_color',
			'title'          => __( 'Percentage & Icon Color', 'uix-shortcodes' ),
			'desc'           => '',
			'value'          => '#473f3f',
			'placeholder'    => '',
			'type'           => 'color',
			'default'        => [ '#ffffff', '#473f3f',  '#bebebe', '#dcdcdc', '#f1f1f1' ]
		
		),
		
	
	    array(
			'id'             => 'uix_sc_bar_title',
			'title'          => __( 'Title', 'uix-shortcodes' ),
			'desc'           => '',
			'value'          => __( 'Title', 'uix-shortcodes' ),
			'placeholder'    => '',
			'type'           => 'text'
		),	
		
		
	    array(
			'id'             => 'uix_sc_bar_desc',
			'title'          => __( 'Description', 'uix-shortcodes' ),
			'desc'           => '',
			'value'          => '',
			'placeholder'    => '',
			'type'           => 'textarea',
			'default'        => array(
									'row'     => 2,
									'format'  => true
								)
		),	
		

		array(
			'id'             => 'uix_sc_bar_show_units',
			'title'          => __( 'Displayed Units', 'uix-shortcodes' ),
			'desc'           => '',
			'value'          => '%',
			'placeholder'    => '',
			'type'           => 'text'
		
		),
		

	
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
	if( $currentScreen->base === "post" || $currentScreen->base === "widgets" || $currentScreen->base === "customize" || UixSCFormCore::inc_str( $currentScreen->base, '_page_' ) ) {
 
		
		?>
		<script type="text/javascript">
		( function($) {
		'use strict';
			$( function() {  
				<?php echo UixSCFormCore::uixscform_callback( $form_js, $form_id, __( 'Add a Progress Bar', 'uix-shortcodes' ) ); ?>					<?php echo UixSCFormCore::send_before( $form_js_vars, $form_id ); ?> 
				/*--**************** Custom shortcode begin ****************-- */
					
					var  uix_sc_bar_result_color = uix_sc_bar_color,
						 uix_sc_bar_result_trackcolor = uix_sc_bar_trackcolor,
						 uix_sc_bar_result_percent_icon_color = uix_sc_bar_percent_icon_color,
						 uix_sc_bar_result_icon = ( uix_sc_bar_icon != '' ) ? "icon='"+uix_sc_bar_icon+"'" : '',
						 uix_sc_bar_result_size = ( uix_sc_bar_shape == 'circular' ) ? "size='"+uixscform_floatval( uix_sc_bar_circular_size )+"px'" : "size='"+uixscform_floatval( uix_sc_bar_square_size )+""+uix_sc_bar_square_size_units+"'";
					
		
					code = "[uix_progress_bar barcolor='"+uix_sc_bar_result_color+"' trackcolor='"+uix_sc_bar_result_trackcolor+"' preccolor='"+uix_sc_bar_result_percent_icon_color+"' "+uix_sc_bar_result_size+" shape='"+uix_sc_bar_shape+"' percent='"+uixscform_floatval( uix_sc_bar_percent )+"' units='"+uix_sc_bar_show_units+"' linewidth='"+uixscform_floatval( uix_sc_bar_linewidth )+"' precsize='"+uixscform_floatval( uix_sc_bar_perc_icons_size )+"px' title='"+uixscform_shortcodeHTMLEcode( uix_sc_bar_title )+"' "+uix_sc_bar_result_icon+"]"+uix_sc_bar_desc+"[/uix_progress_bar]";
					

					
				/*--**************** Custom shortcode end ****************-- */
				<?php echo UixSCFormCore::send_after(); ?> 
		} ) ( jQuery );
		</script>
 
		<?php
	
	}
	
}


/**
 * Returns forms with ajax
 */
if ( $sid >= 0 && is_admin() ) {
	echo $form_html;	
}
