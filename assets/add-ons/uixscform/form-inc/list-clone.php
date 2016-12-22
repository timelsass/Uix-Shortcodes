<?php
class UixSCFormType_ListClone {
	
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
		
		
        if ( $type == 'list' ) {
			
            //Enqueue the media scripts
            wp_enqueue_media();
			
            
            $btn_text = '';
            $max = 3;
            $append_box_id = 'appendwrapper-'.$id;
			$clone_id = '';
			$clone_content_js_var = $id.'_clone_vars.value';
			$toggle_target_id = ''; //Toggle id
			
			
			
            if ( is_array( $default ) && !empty( $default ) ) {
                $btn_text = $default[ 'btn_text' ];
                $max = $default[ 'max' ];
				
				
				//clone id
                foreach ( $default[ 'clone_class' ] as $tid_value ) {
					
					$clone_id .= '".'.$tid_value[ 'id' ].'",'; 
					$loop_trigger_id = str_replace( 'dynamic-row-', '', $tid_value[ 'id' ] );
					
					
					//-----
					if ( $tid_value[ 'type' ] == 'toggle' ) {
						
						foreach ( $tid_value[ 'toggle_class' ] as $tid_value ) {
							$tid_value = str_replace( 'dynamic-row-', '', $tid_value );
							$toggle_target_id .= '#{dataID}'.$tid_value.','; 	
							
						}	
						
						$toggle_target_id = rtrim( $toggle_target_id, ',' );
					}						
					
					
                }
         
				
            }
			
			
            
            $field = '
            
		
                <tr'.$class.'>
                    <th scope="row"><label>'.$title.'</label></th>
                    <td>
					
						<div class="uixscform-box">
						   <a href="javascript:" class="addrow table-link-m uixscform_btn_trigger-clone" data-targetid="'.$id.'" data-max="'.$max.'" data-clonecontent="'.$clone_content_js_var.'" data-removeclass="delrow-'.$id.'" data-appendid="'.$append_box_id.'" data-toggle-targetid="'.$toggle_target_id.'"  data-index="2" title="'.esc_attr( $btn_text ).'"><i class="fa fa-plus"></i></a>
						 </div>
					
					    <div class="uixscform-box">
                   
								'.( !empty( $desc ) ? '<p class="info">'.$desc.'</p>' : '' ).' 
							  
						</div>
                         
                    </td>
                </tr>  
				
	            <tr>
                    <th scope="row"></th>
                    <td>
					
						<div class="dynamic-append-wrapper" id="'.$append_box_id.'"></div>
                         
                    </td>
                </tr>  
				

                '.PHP_EOL;	
				
			 
            $jscode = '';	
                

        }
		
		
		//output code
		if ( $_output == 'html' ) return $field;
		if ( $_output == 'js' ) return $jscode;
		if ( $_output == 'js_vars' ) return $jscode_vars;


		
		
	}
	

}
