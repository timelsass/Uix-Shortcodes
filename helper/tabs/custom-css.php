<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}


// variables for the field and option names 
$hidden_field_name = 'submit_hidden_customcss';

//---
$uix_sc_opt_cssnewcode = 'uix_sc_opt_cssnewcode';
$style_code_uix_shortcodes = get_option( $uix_sc_opt_cssnewcode );
	
// If they did, this hidden field will be set to 'Y'
if( isset($_POST[ $hidden_field_name ]) && $_POST[ $hidden_field_name ] == 'Y' ) {
	// Read their posted value
	$style_code_uix_shortcodes = $_POST[ 'uix_sc_opt_cssnewcode' ];
	

	// Save the posted value in the database
	update_option( $uix_sc_opt_cssnewcode, $style_code_uix_shortcodes );


	// Put a "settings saved" message on the screen
	echo '<div class="updated"><p><strong>'.__('Settings saved.', 'uix-shortcodes' ).'</strong></p></div>';

 }  


if( isset( $_GET[ 'tab' ] ) && $_GET[ 'tab' ] == 'custom-css' ) {
	

?>

    <form name="form1" method="post" action="">
    
        <input type="hidden" name="<?php echo $hidden_field_name; ?>" value="Y">
        
        <h4><?php _e( 'You can overview the original styles to overwrite it. It will be on creating new styles to your website, without modifying original <code>.css</code> files.', 'uix-shortcodes' ); ?></h4>
            
        <table class="form-table">
          <tr>
            <th scope="row">
              <?php _e( 'Paste your CSS code', 'uix-shortcodes' ); ?>
            </th>
            <td>
              <textarea name="uix_sc_opt_cssnewcode" class="regular-text" rows="25" style="width:98%;"><?php echo $style_code_uix_shortcodes; ?></textarea>
            </td>
          </tr>
        </table> 
        
          
<?php

	
	$newFilePath = get_stylesheet_directory() . '/uix-shortcodes-style.css';

	if ( file_exists( $newFilePath ) ) {
		$org_cssname_uix_shortcodes = 'uix-shortcodes-style.css';
		$org_csspath_uix_shortcodes = get_template_directory_uri() .'/'. $org_cssname_uix_shortcodes;
		$filesystype = 'theme';
		$filesyspath = '';
	} else {
		$org_cssname_uix_shortcodes = 'shortcodes.css';
		$org_csspath_uix_shortcodes = UixShortcodes::plug_directory() .'assets/css/'. $org_cssname_uix_shortcodes;
		$filesystype = 'plugin';
		$filesyspath = 'assets/css/';
	}
		

	
	wp_nonce_field( 'css-filesystem-nonce' );
	
	// capture output from WP_Filesystem
	ob_start();
	
		UixShortcodes::wpfilesystem_read_file( 'css-filesystem-nonce', 'edit.php?post_type='.UixShortcodes::get_slug().'&page='.UixShortcodes::CUSPAGE.'&tab=custom-css', $filesyspath, $org_cssname_uix_shortcodes, $filesystype );
		$filesystem_uix_shortcodes_out = ob_get_contents();
	ob_end_clean();
	
	if ( empty( $filesystem_uix_shortcodes_out ) ) {
		
		$style_org_code_uix_shortcodes = UixShortcodes::wpfilesystem_read_file( 'css-filesystem-nonce', 'edit.php?post_type='.UixShortcodes::get_slug().'&page='.UixShortcodes::CUSPAGE.'&tab=custom-css', $filesyspath, $org_cssname_uix_shortcodes, $filesystype );
		
		echo '
		
		         <p>'.__( 'CSS file root directory:', 'uix-shortcodes' ).' 
				     <a href="javascript:" id="uix_shortcodes_view_css" >'.$org_csspath_uix_shortcodes.'</a>
					 <div class="uix-shortcodes-dialog-mask"></div>
					 <div class="uix-shortcodes-dialog" id="uix-shortcodes-view-css-container">  
						<textarea rows="15" style=" width:95%;" class="regular-text">'.$style_org_code_uix_shortcodes.'</textarea>
						<a href="javascript:" id="uix_shortcodes_close_css" class="close button button-primary">'.__( 'Close', 'uix-shortcodes' ).'</a>  
					</div>
				 </p><hr />
				<script type="text/javascript">
					
				( function($) {
					
					"use strict";
					
					$( function() {
						
						var dialog_uix_shortcodes = $( "#uix-shortcodes-view-css-container, .uix-shortcodes-dialog-mask" );  
						
						$( "#uix_shortcodes_view_css" ).click( function() {
							dialog_uix_shortcodes.show();
						});
						$( "#uix_shortcodes_close_css" ).click( function() {
							dialog_uix_shortcodes.hide();
						});
					
			
					} );
					
				} ) ( jQuery );
				
				</script>
		
		';	

	} else {
		
		echo '
		         <p>'.__( 'CSS file root directory:', 'uix-shortcodes' ).' 
				     <a href="'.$org_csspath_uix_shortcodes.'" target="_blank">'.$org_csspath_uix_shortcodes.'</a>
				 </p><hr />

		';	
		
		
	}
?>
        
        
        <?php submit_button(); ?>

    
    </form>


    
<?php } ?>