<?php
class UixSCFormType_Color {
	
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
		
        if ( $type == 'color' ) {
            
            $colorlist = '';
            if ( is_array( $default ) && !empty( $default ) ) {
                foreach ( $default as $color_value ) {
					
					( $value == $color_value ) ? $active = ' class="active"' : $active = '' ;
					
                    $colorlist .= '<span '.$active.' style="background:'.$color_value.'" data-value="'.$color_value.'"></span>'.PHP_EOL;	
                }	
            }
            
            $field = '
                    <tr'.$class.'>
                        <th scope="row"><label>'.$title.'</label></th>
                        <td>		
						    
							<div class="uixscform-box">
								  <div class="uixscform-color-selector uixscform_btn_trigger-radio" data-targetid="'.$id.'">	
								   '.$colorlist.' 
								   </div>
								   '.( !empty( $id ) ? '<input type="hidden" id="'.$id.'" name="'.$name.'" value="'.$value.'">' : '' ).' 
	
								   '.( !empty( $desc ) ? '<p class="info">'.$desc.'</p>' : '' ).' 
							 </div> 
                        </td>
                    </tr> 
                '.PHP_EOL;	
                
                
                
            $jscode_vars = '
                '.( !empty( $id ) ? 'var '.$id.' = $( "#'.$id.'" ).val();'.PHP_EOL : '' ).'
            ';
            $jscode = '';

        }
			
		//output code
		if ( $_output == 'html' ) return $field;
		if ( $_output == 'js' ) return $jscode;
		if ( $_output == 'js_vars' ) return $jscode_vars;

		
		
	}
	

}
