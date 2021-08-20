
<?php 

add_theme_support( 'title-tag' ); 
add_theme_support( 'post-thumbnails' );
add_action( 'wp_enqueue_scripts', 'dreamscape_theme_enqueue' );

function dreamscape_theme_enqueue() {
    wp_enqueue_style( 'dreamscape_theme', get_stylesheet_uri() );
}

// =========================================================================
// For The Logo
// =========================================================================
//checkbox  
function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


// =========================================================================
// For the Contact Details
// =========================================================================
function themename_customize_register($wp_customize){
   
    $wp_customize->add_setting( 'custom_field_contact' , array(
        'default' => '+1234 5657',
        'type' => 'theme_mod',
        'sanitize_callback' => 'our_sanitize_function',
    ) );
    $wp_customize->add_control( 'custom_field_contact', array(
        'label' => __( 'Contact Number', 'placeholderfortextdomain' ),
        'section' => 'title_tagline',
        'settings' => 'custom_field_contact',
        'type' => 'text',
    ) );
 // =========================================================================
 // For Email Address
 // =========================================================================
 $wp_customize->add_setting( 'custom_field_email' , array(
     'default' => 'mail@crazydomains.com',
     'type' => 'theme_mod',
     'sanitize_callback' => 'our_sanitize_function',
 ) );
 $wp_customize->add_control( 'custom_field_email', array(
     'label' => __( 'Email Address', 'placeholderfortextdomain' ),
     'section' => 'title_tagline',
     'settings' => 'custom_field_email',
     'type' => 'text'
 ) );
 // =========================================================================
//  FOR TOUR IMAGE GALLERY
 // =========================================================================
    $wp_customize->get_setting( 'image_control_one' )->transport = 'postMessage';

    $wp_customize->add_section('imageoner', array(
    "title" => 'Home Page Images',
    "priority" => 28,
    "description" => __( 'Upload images to display on the homepage.', 'theme-slug' )
    ));
    $wp_customize->add_setting('image_control_one', array(
    'default' =>'',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_control_one', array(
    'label' => __( 'Featured Home Page Image One', 'theme-slug' ),
    'section' => 'imageoner',
    'settings' => 'image_control_one',
    ))
    );
    
// 2
    $wp_customize->get_setting( 'image_control_two' )->transport = 'postMessage';

    $wp_customize->add_section('imageoner', array(
    "title" => 'Home Page Images',
    "priority" => 28,
    "description" => __( 'Upload images to display on the homepage.', 'theme-slug' )
    ));
    $wp_customize->add_setting('image_control_two', array(
    'default' =>'',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_control_two', array(
    'label' => __( 'Featured Home Page Image Two', 'theme-slug' ),
    'section' => 'imageoner',
    'settings' => 'image_control_two',
    ))
    );
// 3
    $wp_customize->get_setting( 'image_control_3' )->transport = 'postMessage';

    $wp_customize->add_section('imageoner', array(
    "title" => 'Home Page Images',
    "priority" => 28,
    "description" => __( 'Upload images to display on the homepage.', 'theme-slug' )
    ));
    $wp_customize->add_setting('image_control_3', array(
    'default' =>'',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_control_3', array(
    'label' => __( 'Featured Home Page Image Three', 'theme-slug' ),
    'section' => 'imageoner',
    'settings' => 'image_control_3',
    ))
    );
// 4
    $wp_customize->get_setting( 'image_control_4' )->transport = 'postMessage';

    $wp_customize->add_section('imageoner', array(
    "title" => 'Home Page Images',
    "priority" => 28,
    "description" => __( 'Upload images to display on the homepage.', 'theme-slug' )
    ));
    $wp_customize->add_setting('image_control_4', array(
    'default' =>'',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_control_4', array(
    'label' => __( 'Featured Home Page Image Four', 'theme-slug' ),
    'section' => 'imageoner',
    'settings' => 'image_control_4',
    ))
    );
}
function our_sanitize_function( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}
add_action('customize_register', 'themename_customize_register');
add_action( 'customize_register', 'somename_customize_register' );
 // =========================================================================
 // For Email Address
 // =========================================================================
 function add_font_awesome()
 {
 wp_enqueue_style( 'style', get_stylesheet_uri() );
 wp_enqueue_style( 'font-awesome', get_template_directory_uri().'images/fontawesome/css/font-awesome.min.css' );
 }
 add_action( 'wp_enqueue_scripts', 'add_font_awesome' );
 // =========================================================================
 // For IMG
 // =========================================================================  
if( !defined(THEME_IMG_PATH)){
    define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/images/ds_img_png' );
   }
if( !defined(THEME_IMG_PATH_2)){
    define( 'THEME_IMG_PATH_2', get_stylesheet_directory_uri() . '/images/ds_img_png' );
   }
// =========================================================================
 // For GALLERY
 // =========================================================================  

 
?>