<?php
/*
* Plugin Name: Custom Google Fonts
* Plugin URI: https://seosthemes.com/google-fonts/
* Description: Simple WordPress Google Fonts Plugin.
* Contributors: seosbg
* Author: seosbg
* Author URI: https://seosthemes.com/
* Version: 1.0.2
* License: GPL2
*/

add_action('admin_menu', 'custom_google_fonts_menu');
function custom_google_fonts_menu() {
    add_menu_page('Custom Google Fonts', 'Custom Google Fonts', 'administrator', 'custom-google-fonts-seos-settings', 'custom_google_fonts_settings_page', plugins_url('custom-google-fonts/images/icon.png')
    );

    add_action('admin_init', 'custom_google_fonts_settings');
}

function custom_google_fonts_settings() {
    register_setting('custom-google-fonts-seos-settings', 'custom_google_fonts_option1');
    register_setting('custom-google-fonts-seos-settings', 'custom_google_fonts_option2');
    register_setting('custom-google-fonts-seos-settings', 'custom_google_fonts_option3');
    register_setting('custom-google-fonts-seos-settings', 'custom_google_fonts_option4');
    register_setting('custom-google-fonts-seos-settings', 'custom_google_fonts_option5');
    register_setting('custom-google-fonts-seos-settings', 'custom_google_fonts_option6');


}
			
function custom_google_fonts_wp_admin_style() {
        wp_register_style( 'custom_google_fonts_css', plugin_dir_url(__FILE__)  . 'css/custom-google-fonts.css', false, '1.0.0' );
        wp_enqueue_style( 'custom_google_fonts_css' );
}
add_action( 'admin_enqueue_scripts', 'custom_google_fonts_wp_admin_style' );


function custom_google_fonts_settings_page() {
?>

    <div class="wrap google-fonts-form">
        <form action="options.php" method="post" role="form" name="google-fonts-form">
		
			<?php settings_fields( 'custom-google-fonts-seos-settings' ); ?>
			<?php do_settings_sections( 'custom-google-fonts-seos-settings' ); ?>
		
		<a target="_blank" href="http://seosthemes.com/google-fonts/">
			<div class="btn s-red">
				 <?php _e('Buy Premium' . ' <img class="ss-logo" src="' . plugins_url( 'images/logo.png' , __FILE__ ) . '" alt="logo" />' . ' Only €8.00', 'custom-google-fonts-premium'); ?>
			</div>
		</a>
		<h1><?php _e('Custom Google Fonts', 'custom-google-fonts'); ?></h1>
		<h2><?php _e('Copy the font name. ', 'custom-google-fonts'); ?><a target="_blank" href="https://fonts.google.com/"><?php _e('All Google Fonts:', 'custom-google-fonts'); ?></a></h2>
								
			<div class="form-group">
				<label><?php _e('H1 Elements. ', 'custom-google-fonts'); ?><a target="_blank" href="https://fonts.google.com/"><?php _e('Copy the font name', 'custom-google-fonts'); ?></a></label>
				<div  style="position: relative;">
					<input class="seos-gfonts" style="width: 200px;" type="text" name="custom_google_fonts_option1" value="<?php if (esc_html(get_option( 'custom_google_fonts_option1'))) : echo esc_html(get_option( 'custom_google_fonts_option1')); endif; ?>"/>
				</div>
			</div>
			<hr />
			
			<div class="form-group">
				<label><?php _e('H2 Elements ', 'custom-google-fonts'); ?><a target="_blank" href="https://fonts.google.com/"><?php _e('Copy the font name', 'custom-google-fonts'); ?></a></label>
				<div  style="position: relative;">
					<input class="seos-gfonts" style="width: 200px;" type="text" name="custom_google_fonts_option2" value="<?php if (esc_html(get_option( 'custom_google_fonts_option2'))) : echo esc_html(get_option( 'custom_google_fonts_option2')); endif; ?>"/>
				</div>
			</div>
			<hr />
			
			<div class="form-group">
				<label><?php _e('H3 Elements. ', 'custom-google-fonts'); ?><a target="_blank" href="https://fonts.google.com/"><?php _e('Copy the font name', 'custom-google-fonts'); ?></a></label>
				<div  style="position: relative;">
					<input class="seos-gfonts" style="width: 200px;" type="text" name="custom_google_fonts_option3" value="<?php if (esc_html(get_option( 'custom_google_fonts_option3'))) : echo esc_html(get_option( 'custom_google_fonts_option3')); endif; ?>"/>
				</div>
			</div>
			<hr />
			
			<div class="form-group">
				<label><?php _e('H4 Elements. ', 'custom-google-fonts'); ?><a target="_blank" href="https://fonts.google.com/"><?php _e('Copy the font name', 'custom-google-fonts'); ?></a></label>
				<div  style="position: relative;">
					<input class="seos-gfonts" style="width: 200px;" type="text" name="custom_google_fonts_option4" value="<?php if (esc_html(get_option( 'custom_google_fonts_option4'))) : echo esc_html(get_option( 'custom_google_fonts_option4')); endif; ?>"/>
				</div>
			</div>
			<hr />
			
			<div class="form-group">
				<label><?php _e('H5 Elements. ', 'custom-google-fonts'); ?><a target="_blank" href="https://fonts.google.com/"><?php _e('Copy the font name', 'custom-google-fonts'); ?></a></label>
				<div  style="position: relative;">
					<input class="seos-gfonts" style="width: 200px;" type="text" name="custom_google_fonts_option5" value="<?php if (esc_html(get_option( 'custom_google_fonts_option5'))) : echo esc_html(get_option( 'custom_google_fonts_option5')); endif; ?>"/>
				</div>
			</div>
			<hr />
			
			<div class="form-group">
				<label><?php _e('H6 Elements. ', 'custom-google-fonts'); ?><a target="_blank" href="https://fonts.google.com/"><?php _e('Copy the font name', 'custom-google-fonts'); ?></a></label>
				<div  style="position: relative;">
					<input class="seos-gfonts" style="width: 200px;" type="text" name="custom_google_fonts_option6" value="<?php if (esc_html(get_option( 'custom_google_fonts_option6'))) : echo esc_html(get_option( 'custom_google_fonts_option6')); endif; ?>"/>
				</div>
			</div>
			<hr />

			
		<div style="margin-top: 19px;"><?php submit_button(); ?></div>
			
		</form>	
	</div>
	
	<?php } 
	
	function custom_google_fonts_language_load() {
	  load_plugin_textdomain('custom_google_fonts_language_load', FALSE, basename(dirname(__FILE__)) . '/languages');
	}
	add_action('init', 'custom_google_fonts_language_load');
	
    if( get_option('custom_google_fonts_option1') ) :
	
	function custom_google_fonts_styles_method1() {
	
		wp_enqueue_style( 'custom_google_fonts_font1', 'https://fonts.googleapis.com/css?family=' . get_option( 'custom_google_fonts_option1') );

        wp_enqueue_style(
		
		'custom_google_fonts_style1', get_template_directory_uri() . '/my-google.css');
				
        $color = get_option( 'custom_google_fonts_option1' );
        $custom_css = "h1 {font-family: '{$color}', sans-serif !important;}";
		
        wp_add_inline_style( 'custom_google_fonts_style1', $custom_css );
	}
	
	add_action( 'wp_enqueue_scripts', 'custom_google_fonts_styles_method1' );
		
 	endif;
	 
    if( get_option('custom_google_fonts_option2') ) :
	
	function custom_google_fonts_styles_method2() {
	
		wp_enqueue_style( 'custom_google_fonts_font2', 'https://fonts.googleapis.com/css?family=' . get_option( 'custom_google_fonts_option2') );

        wp_enqueue_style(
		
		'custom_google_fonts_style2', get_template_directory_uri() . '/my-google.css');
				
        $color = get_option( 'custom_google_fonts_option2' );
        $custom_css = "h2 {font-family: '{$color}', sans-serif !important;}";
		
        wp_add_inline_style( 'custom_google_fonts_style2', $custom_css );
	}
	
	add_action( 'wp_enqueue_scripts', 'custom_google_fonts_styles_method2' );
		
 	endif;
	
    if( get_option('custom_google_fonts_option3') ) :
	
	function custom_google_fonts_styles_method3() {
	
		wp_enqueue_style( 'custom_google_fonts_font3', 'https://fonts.googleapis.com/css?family=' . get_option( 'custom_google_fonts_option3') );

        wp_enqueue_style(
		
		'custom_google_fonts_style3', get_template_directory_uri() . '/my-google.css');
				
        $color = get_option( 'custom_google_fonts_option3' );
        $custom_css = "h3 {font-family: '{$color}', sans-serif !important;}";
		
        wp_add_inline_style( 'custom_google_fonts_style3', $custom_css );
	}
	
	add_action( 'wp_enqueue_scripts', 'custom_google_fonts_styles_method3' );
		
 	endif;
	
    if( get_option('custom_google_fonts_option4') ) :
	
	function custom_google_fonts_styles_method4() {
	
		wp_enqueue_style( 'custom_google_fonts_font4', 'https://fonts.googleapis.com/css?family=' . get_option( 'custom_google_fonts_option4') );

        wp_enqueue_style(
		
		'custom_google_fonts_style4', get_template_directory_uri() . '/my-google.css');
				
        $color = get_option( 'custom_google_fonts_option4' );
        $custom_css = "h4 {font-family: '{$color}', sans-serif !important;}";
		
        wp_add_inline_style( 'custom_google_fonts_style4', $custom_css );
	}
	
	add_action( 'wp_enqueue_scripts', 'custom_google_fonts_styles_method4' );
		
 	endif;
	
    if( get_option('custom_google_fonts_option5') ) :
	
	function custom_google_fonts_styles_method5() {
	
		wp_enqueue_style( 'custom_google_fonts_font5', 'https://fonts.googleapis.com/css?family=' . get_option( 'custom_google_fonts_option5') );

        wp_enqueue_style(
		
		'custom_google_fonts_style5', get_template_directory_uri() . '/my-google.css');
				
        $color = get_option( 'custom_google_fonts_option5' );
        $custom_css = "h5 {font-family: '{$color}', sans-serif !important;}";
		
        wp_add_inline_style( 'custom_google_fonts_style5', $custom_css );
	}
	
	add_action( 'wp_enqueue_scripts', 'custom_google_fonts_styles_method5' );
		
 	endif;
	
    if( get_option('custom_google_fonts_option6') ) :
	
	function custom_google_fonts_styles_method6() {
	
		wp_enqueue_style( 'custom_google_fonts_font6', 'https://fonts.googleapis.com/css?family=' . get_option( 'custom_google_fonts_option6') );

        wp_enqueue_style(
		
		'custom_google_fonts_style6', get_template_directory_uri() . '/my-google.css');
				
        $color = get_option( 'custom_google_fonts_option6' );
        $custom_css = "h6 {font-family: '{$color}', sans-serif !important;}";
		
        wp_add_inline_style( 'custom_google_fonts_style6', $custom_css );
	}
	
	add_action( 'wp_enqueue_scripts', 'custom_google_fonts_styles_method6' );
		
 	endif;