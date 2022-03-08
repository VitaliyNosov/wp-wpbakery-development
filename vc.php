<?php 


/* Shop Categofies shortcode */

if( class_exists ( "WPBakeryShortCode" )) {
    class WPBakeryShortCode_Olins_Hello_World extends  WPBakeryShortCode {}
}

if(function_exists('vc_map')) {

    vc_map( array(
        'name' => esc_html__('Hello World', 'olins'),
        'base' => "olins_hello_world",
        'category' => esc_html__('Test', 'olins'),
        'description' => 'Какое то описание',
        'show_settings_on_create' => true,
        'icon' => '',
        'widget' => -5,
        'params' => array(
            array(
                "type" => "textfield",
                "heading" => esc_html__('Title', 'olins'),
                "param_name" => "title",
                "value" => '',
                "description" => esc_html__('Description', 'olins')

               
            ),

        ) 
    ) );

}

