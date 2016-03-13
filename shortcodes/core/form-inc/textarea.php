<?php
class UixShortcodesForm_Textarea {
	
	public static function add( $args, $_output ) {
		
		if ( !is_array( $args ) ) return;
			
		$title            = ( isset( $args[ 'title' ] ) ) ? $args[ 'title' ] : '';
		$desc             = ( isset( $args[ 'desc' ] ) ) ? $args[ 'desc' ] : '';
		$default          = ( isset( $args[ 'default' ] ) && !empty( $args[ 'default' ] ) ) ? $args[ 'default' ] : '';
		$value            = ( isset( $args[ 'value' ] ) ) ? $args[ 'value' ] : '';
		$placeholder      = ( isset( $args[ 'placeholder' ] ) ) ? $args[ 'placeholder' ] : '';
		$id               = ( isset( $args[ 'id' ] ) ) ? $args[ 'id' ] : '';
		$type             = ( isset( $args[ 'type' ] ) ) ? $args[ 'type' ] : '';
		$class            = ( isset( $args[ 'class' ] ) && !empty( $args[ 'class' ] ) ) ? ' class="'.UixShortcodes::row_class( $args[ 'class' ] ).'"' : '';
		$toggle           = ( isset( $args[ 'toggle' ] ) && !empty( $args[ 'toggle' ] ) ) ? $args[ 'toggle' ] : '';
		
		$field = '';
		$jscode = '';
		$jscode_vars = '';
		
		
		if ( $type == 'textarea' ) {
			
			$row = 5;
			$format = true;
			$default_value_htmlformat = false;
			$default_value_trigger = '';
			
			if ( is_array( $default ) && !empty( $default ) ) {
				$row = $default[ 'row' ];
				$format = $default[ 'format' ];
				$default_value_htmlformat = ( isset( $default[ 'default_value_htmlformat' ] ) ) ? $default[ 'default_value_htmlformat' ] : false;
				$default_value_trigger = ( isset( $default[ 'default_value_trigger' ] ) ) ? $default[ 'default_value_trigger' ] : '';
				
				
				if ( $format ) {
					$the_var = 'var '.$id.' = uix_formatTextarea( $( "#'.$id.'" ).val() );';
				} else {
					$the_var = 'var '.$id.' = $( "#'.$id.'" ).val();';
				}
			}
			
			$field = '
					<tr'.$class.'>
						<th scope="row"><label>'.$title.'</label></th>
						<td>	
						    <div class="sweet-box">
						
							   '.( !empty( $id ) ? '<textarea rows="'.$row.'"  class="sweet-normal sweet-input-text" id="'.$id.'" placeholder="'.$placeholder.'">'.$value.'</textarea>' : '' ).' 					   	   
							   '.( !empty( $desc ) ? '<p class="info">'.$desc.'</p>' : '' ).' 
							   
							</div>
						</td>
					</tr> 
				'."\n";	
				
			$jscode_vars = '
				'.( !empty( $id ) ? ''.$the_var.''."\n" : '' ).'
			';	
			
			if ( $default_value_htmlformat ) {
				$jscode = '
	
					/*-- Textarea --*/
				   $( document ).uix_enterTextareaValue({
						ID: "#'.$id.'",
						value: "'.preg_replace( '/(<br.*?>)+/', '\\n', str_replace( '"', '\\"', $value ) ).'",
						clearIntervalID :  "#'.$default_value_trigger.'"
					});		
	
				';	
	
			}
			
			
		
		}

			
		//output code
		if ( $_output == 'html' ) return $field;
		if ( $_output == 'js' ) return $jscode;
		if ( $_output == 'js_vars' ) return $jscode_vars;

		
		
	}
	

}
