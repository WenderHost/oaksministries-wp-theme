<?php

// Shortcode Justify Text [justify]

function justify_text($atts, $content = null) {
	return '<div class="justify">' . do_shortcode($content) . '</div>';
}
add_shortcode("justify", "justify_text");

?>