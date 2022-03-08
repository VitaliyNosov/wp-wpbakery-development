<p align="center">
    <img width="140" height="140"  src="https://i.ibb.co/MgLwYwP/Wordpress-logo-8-1.png">
</p>
 
# WPBakery development chortcode

<img src="https://i.ibb.co/5WYRdRg/WPBakary-baner.png">

A brief description of the steps to develop your own shortcodes - templates on WPBakery for WordPress.

* You must have a plugin, it is in the archive. Install it on your site.
* In the theme folder of the site, create a folder     called: vc_templates.
* Create a file named: vc.php
* Connect file to file: function.php

```php 

// wpbakery setings add file 

require_once( dirname(__FILE__) . '/vc.php');

```

* File content: vc.php This is a simple example to understand how the plugin logic works and how you can interact with it.

```php 

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


```

* The array has a name: base These are the names of the template from which we will receive data from the admin panel. 

* Template example: 

```php 

<?php 

// WPBakery custom template

$args = array(
    'title' => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts ); 

?>

<h1><?php echo $title; ?></h1>

```
* All parameters can be found in the official documentation: 

[WPBakery - vc_map](https://kb.wpbakery.com/docs/inner-api/vc_map/)

