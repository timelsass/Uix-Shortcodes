<?php
class UixSCFormType_Icon {
	
	public static function add( $args, $_output ) {
		
		if ( !is_array( $args ) ) return;
			
		$title            = ( isset( $args[ 'title' ] ) ) ? $args[ 'title' ] : '';
		$desc             = ( isset( $args[ 'desc' ] ) ) ? $args[ 'desc' ] : '';
		$default          = ( isset( $args[ 'default' ] ) && !empty( $args[ 'default' ] ) ) ? $args[ 'default' ] : '';
		$value            = ( isset( $args[ 'value' ] ) ) ? $args[ 'value' ] : '';
		$placeholder      = ( isset( $args[ 'placeholder' ] ) ) ? $args[ 'placeholder' ] : '';
		$id               = ( isset( $args[ 'id' ] ) ) ? $args[ 'id' ] : '';
		$name             = ( isset( $args[ 'name' ] ) ) ? $args[ 'name' ] : '';
		$type             = ( isset( $args[ 'type' ] ) ) ? $args[ 'type' ] : '';
		$class            = ( isset( $args[ 'class' ] ) && !empty( $args[ 'class' ] ) ) ? ' class="'.UixSCFormCore::row_class( $args[ 'class' ] ).'"' : '';
		$toggle           = ( isset( $args[ 'toggle' ] ) && !empty( $args[ 'toggle' ] ) ) ? $args[ 'toggle' ] : '';
		
		$field = '';
		$jscode = '';
		$jscode_vars = '';
		
		$tips = ( !empty( $placeholder ) ) ? $placeholder : __( 'Select from the following list of icons: ', 'uix-shortcodes' );
		$icontype = get_option( 'uix_sc_opt_icontype', 'fontawesome' );
		if ( $icontype == 'fontawesome' ) {
			$iconselector = 'fontawesome/font-awesome-custom.php';
			$iconprefix = 'fa fa-';
		}
		if ( $icontype == 'flaticon' ) {
			$iconselector = 'flaticon/font-flaticon-custom.php';
			$iconprefix = 'flaticon flaticon-';
		}
		
		if ( $type == 'icon' ) {
			
			$social = false;
			$iconlist = '<span contain-id="icon-selector-'.$id.''.( ( $social ) ? '-social' : '' ).'" list-url="'.UixSCFormCore::plug_filepath().'assets/add-ons/uixscform/'.$iconselector.'" target-id="'.$id.'" name="'.$name.'" preview-id="'.$id.'-preview" class="icon-selector" id="icon-selector-'.$id.'"></span>';
			if ( is_array( $default ) && !empty( $default ) ) {
				$social = $default[ 'social' ];
				
				if ( $social ) $iconselector = 'fontawesome/font-awesome-social.php';
				
				if ( $social ) {
					$iconlist = '<span contain-id="icon-selector-'.$id.''.( ( $social ) ? '-social' : '' ).'" list-url="'.UixSCFormCore::plug_filepath().'assets/add-ons/uixscform/'.$iconselector.'" target-id="'.$id.'" name="'.$name.'" preview-id="'.$id.'-preview" class="icon-selector" id="icon-selector-'.$id.'-social"></span>';
				} 
			}
			
			$field = '
					<tr'.$class.'>
						<th scope="row"><label>'.$title.'</label></th>
						<td>
						    <div class="uixscform-box">
						
								<div class="uixscform-icon-selector-label">'.$tips.'<span class="uixscform-loading icon"></span></div>
								<div class="uixscform-icon-selector-icon-preview" id="'.$id.'-preview">'.( ( !empty( $value ) ) ? '<i class="'.$iconprefix.''.$value.'"></i>' : '' ).'</div>
								<a href="javascript:" class="uixscform-icon-clear">&times;</a>
								'.( !empty( $id ) ? '<input type="hidden" id="'.$id.'" name="'.$name.'" class="uixscform-normal uixscform-input-text" value="'.$value.'">' : '' ).'
								'.$iconlist.'
								
							   '.( !empty( $desc ) ? '<p class="info">'.$desc.'</p>' : '' ).' 
							   
							</div>
						</td>
					</tr> 
				'."\n";	
				
				
			$jscode_vars = '
				'.( !empty( $id ) ? 'var '.$id.' = $( "#'.$id.'" ).val();'."\n" : '' ).'
				
			';	
					
		
			
			
		}	
		
		
		//output code
		if ( $_output == 'html' ) return $field;
		if ( $_output == 'js' ) return $jscode;
		if ( $_output == 'js_vars' ) return $jscode_vars;


		
		
	}
	

}
