<?php
class UixShortcodesForm_ColorMap {
	
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
	
        if ( $type == 'colormap' ) {
       
			$swatches = 1;
			if ( is_array( $default ) && !empty( $default ) ) {
				$swatches = ( isset( $default[ 'swatches' ] ) ) ? $default[ 'swatches' ] : 1;

			}
	        
			$field = '';
            $field .= '
                    <tr'.$class.'>
                        <th scope="row"><label>'.$title.'</label></th>
                        <td>	
						
						    <div class="sweet-box">
								
			';
			
			if ( $swatches == 1 ) {
				$field .= ' 
				                <div class="sweet-color-selector-onlybutton">
								        
										<div class="sweet-color-selector-toggles">
											<input type="text" class="wp-color-input" id="'.$id.'" value="'.$value.'">
										</div>	
										<span class="sweet-color-selector-label">'.( !empty( $desc ) ? $desc : __( 'Add Custom Color', 'uix-shortcodes' ) ).'</span>		
								
								</div>

								
									 
				';	
			} else {
			
				$field .= ' 
				                <div class="sweet-input-text-short">
				
									   '.( !empty( $id ) ? '<input type="text" id="'.$id.'" class="sweet-normal sweet-input-text color" '.( !empty( $value ) ? 'style="background:'.$value.';color:'.UixShortcodes::readable_color( $value ).'"' : '' ).' value="'.$value.'" placeholder="'.$placeholder.'">' : '' ).' 
									   
									  
								</div>
								
								'.( !empty( $desc ) ? '<p class="info">'.$desc.'</p>' : '' ).'
				';	
			}

			
			
			$field .= '
			 
								
							</div>
                        </td>
                    </tr> 
                '."\n";	
                
				
          
                
            $jscode_vars = '
                '.( !empty( $id ) ? 'var '.$id.' = $( "#'.$id.'" ).val();'."\n" : '' ).'
            ';
			
			$jscode = '';


        }
			
		//output code
		if ( $_output == 'html' ) return $field;
		if ( $_output == 'js' ) return $jscode;
		if ( $_output == 'js_vars' ) return $jscode_vars;

		
		
	}
	

}
