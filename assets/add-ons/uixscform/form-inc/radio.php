<?php
class UixSCFormType_Radio {
	
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
		
		
        if ( $type == 'radio' ) {
			
			
			//Toggle for radio options
			$toggle_class = '';
			$target_id = '';
			$toggle_trigger_id = '';
			
			if ( is_array( $toggle ) && !empty( $toggle ) ) {
			 
				foreach ( $toggle as $toggleArr ) {
					
					$toggle_class = ( isset( $toggleArr[ 'toggle_class' ] ) ) ? $toggleArr[ 'toggle_class' ] : '';
					$toggle_trigger_id = ( isset( $toggleArr[ 'trigger_id' ] ) ) ? $toggleArr[ 'trigger_id' ] : '';
					$target_id = '';
					
					if ( isset( $toggleArr[ 'toggle_class' ] ) ) {
						foreach ( $toggleArr[ 'toggle_class' ] as $tid_value ) {
							$target_id .= '.'.$tid_value.','; 	
						}
					}
				}	
				
			}
	
			//inscure browser
			if( UixSCFormCore::is_IE() && UixSCFormCore::is_dynamic_input( $class ) ) {
				$new_class = str_replace( 'dynamic-row', 'isMSIE dynamic-row', $class );
			} else {
				$new_class = $class;
			}
	
		
			
            //Options list
            $optionlist = '';
            if ( is_array( $default ) && !empty( $default ) ) {
                $optionloop = 1;
				$radiofirst = '';
			
                foreach ( $default as $select_key => $select_value ) {
			        
					$selected = ''; 
					
					if ( ( !empty( $value ) && $select_key == $value ) || ( empty( $value ) && $optionloop == 1 )  ) {
                        $selected = '  active'; 
						$radiofirst = $select_key;	
					} 
                 
                    $optionlist .= '<span data-value="'.$select_key.'" id="'.$id.'-'.$select_key.'" class="'.$selected.' '.( !empty( $toggle_trigger_id ) ? 'uixscform_btn_trigger-toggleswitch_radio' : '' ).'" '.( !empty( $toggle_trigger_id ) ? 'data-targetid="'.rtrim( $target_id, ',' ).'" data-list="0" data-targetid-clone="{multID}" data-linked-btnid="'.$toggle_trigger_id.'"' : '' ).'>'.$select_value.'</span>'."\n";	
                    $optionloop ++;
                }	
		
            }
			
            $field = '
                    <tr'.$new_class.'>
                        <th scope="row"><label>'.$title.'</label></th>
                        <td>
						
						    <div class="uixscform-box">
                                  <div class="uixscform-form-clear"></div>
								  <div class="radio uixscform_btn_trigger-radio" data-targetid="'.$id.'">	
								   '.$optionlist.' 
								   </div>
							   
								   '.( !empty( $id ) ? '<input type="hidden" id="'.$id.'" name="'.$name.'" value="'.$radiofirst.'">' : '' ).' 
						   
								   '.( !empty( $desc ) ? '<p class="info">'.$desc.'</p>' : '' ).' 
								  
								
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
