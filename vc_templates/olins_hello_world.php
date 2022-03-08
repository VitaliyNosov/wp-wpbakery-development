<?php 

// WPBakery custom template

$args = array(
    'title' => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts ); 

?>

<h1><?php echo $title; ?></h1>


