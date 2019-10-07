<?php
/**
 * Plugin Name: Trader test plugin
 * Description: Test plugin for Trader
 * Version: 1.0
 * Author: Boogiestrat
 */

if ( !function_exists( 'add_action' ) ) {
	echo 'No use here!';
	exit;
}

function insert_sentence_after_post( $content ) {
    if ( is_single() ) {
        $content .= '<h3>This is additional content from the test plugin</h3>';
    }
    return $content;
}

add_filter( "the_content", "insert_sentence_after_post" );