<?php
class UixShortcodesForm_Checkbox {
	
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
		
        if ( $type == 'checkbox' ) {
            
            $checked = false;
					
            if ( is_array( $default ) && !empty( $default ) ) {
                $checked = $default[ 'checked' ];
			
				
                if ( $checked ) {
                    $checked_txt = 'checked';
                } else {
                    $checked_txt = '';
                }
				
	
				
            }
			
			//Toggle
			$toggle_class = '';
			$target_id = '';
			$toggle_trigger_id = '';
			
            if ( is_array( $toggle ) && !empty( $toggle ) ) {
             
				$toggle_class = ( isset( $toggle[ 'toggle_class' ] ) ) ? $toggle[ 'toggle_class' ] : '';
				$toggle_trigger_id = ( isset( $toggle[ 'trigger_id' ] ) ) ? $toggle[ 'trigger_id' ] : '';
				
				if ( isset( $toggle[ 'toggle_class' ] ) ) {
					foreach ( $toggle[ 'toggle_class' ] as $tid_value ) {
						$target_id .= '.'.$tid_value.','; 	
					}	
	
				}
				
            }
			
			//inscure browser
			if( UixShortcodes::is_IE() && UixShortcodes::is_dynamic_input( $class ) ) {
				$new_class = str_replace( 'dynamic-row', 'isMSIE dynamic-row', $class );
			} else {
				$new_class = $class;
			}
			
            
            $field = '
                    <tr'.$new_class.'>
                        <th scope="row"><label>'.$title.'</label></th>
                        <td>
						    <div class="sweet-box">
                        
                             <span class="sweet-checkbox">
                                 
                                 '.( !empty( $id ) ? '<input id="'.$id.'" value="'.$value.'" type="checkbox" class="sweet-normal sweet-check" '.$checked_txt.'>' : '' ).' 

                             </span>
                             
                             '.( !empty( $desc ) ? '<p class="info">'.$desc.'</p>' : '' ).' 
         
                            </div>
                        </td>
                    </tr> 
                '."\n";	
                
            $jscode_vars = '
                '.( !empty( $id ) ? 'var '.$id.' = $( "#'.$id.'" ).is( ":checked" );'."\n" : '' ).'
                
            ';						
                
			$jscode_tog = '';
			if ( !empty( $toggle_class ) ) {
				$jscode_tog = '
					/*-- Toggle for checkbox  --*/
					$( document ).uix_divToggle( { checkbox: 1, btnID: "#'.$toggle_trigger_id.'", targetID: "'.rtrim( $target_id, ',' ).'" } );
				';	
				
				//inscure browser
				if( UixShortcodes::is_IE() && UixShortcodes::is_dynamic_input( $class ) ) {
					$jscode_tog = '';
				}
						
	
			}	
				
			$jscode = $jscode_tog;
				

        }
			
		//output code
		if ( $_output == 'html' ) return $field;
		if ( $_output == 'js' ) return $jscode;
		if ( $_output == 'js_vars' ) return $jscode_vars;

		
		
	}
	

}
