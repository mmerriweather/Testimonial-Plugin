<?php 
/*
Plugin Name: Financial One Testimonial slider
Description: Customized Financial One Testimonial Slider
*/
add_action('after_setup_theme', 'setup_financialone_testimonials');
function setup_financialone_testimonials(){
 if( !class_exists( 'Super_Custom_Post_Type' ))
 return;
 $testimonials = new Super_Custom_Post_Type('testimonial');
 $testimonials->set_icon( 'quote-left' );
 $testimonials->add_meta_box( 
 array(
 'id' => 'person_details',
 'context' => 'normal',
 'fields' => array(
 'position' => array('type' => 'text'),
 'company' => array('type' => 'text')
 )
 )); 

 add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 200, 200, true ); // Normal post thumbnails
add_image_size( 'single-post-thumbnail', 400, 9999 ); // Permalink thumbnail size
}
?>