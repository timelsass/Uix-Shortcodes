<?php
class UixSCFormType_Checkbox {
	
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
			
			//Toggle for checkbox
			$toggle_class = '';
			$target_id = '';
			$toggle_trigger_id = '';
			$toggle_no_id = '';
			
			
            if ( is_array( $toggle ) && !empty( $toggle ) ) {
             
			 
				$toggle_class = ( isset( $toggle[ 'toggle_class' ] ) ) ? $toggle[ 'toggle_class' ] : '';
				$toggle_trigger_id = ( isset( $toggle[ 'trigger_id' ] ) ) ? $toggle[ 'trigger_id' ] : '';
				
				if ( isset( $toggle[ 'toggle_class' ] ) ) {
					foreach ( $toggle[ 'toggle_class' ] as $tid_value ) {
						$target_id .= '.'.$tid_value.','; 	
					}	
	
				}
				
				//if this toggle contains another toggle, please specifies "toggle_not_class" in order that default hiding form is still valid
				if ( isset( $toggle[ 'toggle_not_class' ] ) && !empty( $toggle[ 'toggle_not_class' ] ) ) {
					foreach ( $toggle[ 'toggle_not_class' ] as $tid_value2 ) {
						$toggle_no_id .= '.'.$tid_value2.','; 		
					}
						
				}
				
				
            }
			
			//inscure browser
			if( UixSCFormCore::is_IE() && UixSCFormCore::is_dynamic_input( $class ) ) {
				$new_class = str_replace( 'dynamic-row', 'isMSIE dynamic-row', $class );
			} else {
				$new_class = $class;
			}
			
            $field = '
                    <tr'.$new_class.'>
                        <th scope="row"><label>'.$title.'</label></th>
                        <td>
						    <div class="uixscform-box">
                        
                             <span class="uixscform-checkbox">
                              
								 '.( !empty( $toggle_trigger_id ) ? '<div class="onoffswitch uixscform_btn_trigger-toggleswitch_checkbox" data-targetid="'.rtrim( $target_id, ',' ).'" data-list="0" data-targetid-clone="{multID}" data-linked-no-toggleid="'.rtrim( $toggle_no_id, ',' ).'">' : '' ).'
								 
                                 '.( !empty( $id ) ? '<input id="'.$id.'" name="'.$name.'" value="'.$value.'" type="checkbox" class="uixscform-normal uixscform-check '.( !empty( $toggle_trigger_id ) ? 'onoffswitch-checkbox' : '' ).'" '.$checked_txt.'>' : '' ).'
								 
								 '.( !empty( $toggle_trigger_id ) ? '<label class="onoffswitch-label" for="myonoffswitch"></label></div>' : '' ).'


                             </span>
                             
                             '.( !empty( $desc ) ? '<span class="info info-checkbox">'.$desc.'</span>' : '' ).' 
         
                            </div>
                        </td>
                    </tr> 
                '.PHP_EOL;	
                
            $jscode_vars = '
                '.( !empty( $id ) ? 'var '.$id.' = $( "#'.$id.'" ).is( ":checked" );'.PHP_EOL : '' ).'
                
            ';						
                
			$jscode = '';
				

        }
			
		//output code
		if ( $_output == 'html' ) return $field;
		if ( $_output == 'js' ) return $jscode;
		if ( $_output == 'js_vars' ) return $jscode_vars;

		
		
	}
	

}
