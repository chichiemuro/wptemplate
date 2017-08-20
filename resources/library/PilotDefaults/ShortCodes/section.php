<?php
/**
 * Usage: [section_container class="custom-class"]Go here[/section_container]
 * Attribute Class: btn is added by default. Just add any other classes.
 * 
 */
function section_container_shortcode( $attributes, $content = null ) {
	$atts = shortcode_atts( [
		'class' => '',		
	], $attributes );
        if ($atts['class'] !== '')
	{
		return '<section class="' . $atts['class'] . '" > <div class="container" >' . do_shortcode($content) . '</div></section>';
	
	}
	else
	{	return '<section> <div class="container" >' . do_shortcode($content) . '</div></section>';}
}
add_shortcode( 'section_container', 'section_container_shortcode' );

/**
 * Usage: [section_container class="custom-class"]Go here[/section_container]
 * Attribute Class: btn is added by default. Just add any other classes.
 * 
 */
function section_fullwidth_shortcode( $attributes, $content = null ) {
	$atts = shortcode_atts( [
		'class' => '',		
	], $attributes );
         if ($atts['class'] !== '')
	 {
		 return '<section class="' . $atts['class'] . '" > <div class="container-fluid" >' . do_shortcode($content) . '</div></section>';
	 }
	else
	{
		return '<section> <div class="container-fluid" >' . do_shortcode($content) . '</div></section>';

	}
}
add_shortcode( 'section_fullwidth', 'section_fullwidth_shortcode' );
