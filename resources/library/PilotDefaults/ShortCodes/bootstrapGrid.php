<?php

/**
 * Usage:
 * [row][/row]
 */
function row_shortcode( $atts, $content = null ) {
	return '<div class="row">' . do_shortcode( $content ) . '</div>';
}

add_shortcode( 'row', 'row_shortcode' );

/**
 * Usage:
 * [column size="col-sm-6 col-md-4"][/column]
 */
function column_shortcode( $attributes, $content = null ) {
	$atts = shortcode_atts( [
		'size' => 'col-sm-12'
	], $attributes );

	return '<div class="' . $atts['size'] . '">' . do_shortcode( $content ) . '</div>';
}

add_shortcode( 'column', 'column_shortcode' );

/**
 * Usage:
 * [columns number="8" offset="2" type="sm"][/column]
 */
function columns_shortcode( $attributes, $content = null ) {
	$atts = shortcode_atts( [
		'number' => '12',   //defaulting to twelve columns
		 'offset'=> 0,
		 'type' =>"md"    //
	], $attributes );
        
	if (intval($att['offset']) === 0 )
	{
		return '<div class=" col-' . $atts['type'] . '-'.$atts['number'] .'">' . do_shortcode( $content ) . '</div>';
	}
	else
	{
		return '<div class=" col-' . $atts['type'] . '-'.$atts['number'] .' col-' . $atts['type'] . '-offset'.'-'.$atts['offset'] .' ">' . do_shortcode( $content ) . '</div>';
	}
}

add_shortcode( 'columns', 'columns_shortcode' );
