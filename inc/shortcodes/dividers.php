<?php

// Shortcode Clear Tag [clear]

function clear_divider($atts, $content = null) {
	return '<div class="sc-divider clear"></div>';
}
add_shortcode("clear", "clear_divider");

// Shortcode Divider [divider]

function default_divider($atts, $content = null) {
	return '<div class="sc-divider"></div>';
}
add_shortcode("divider", "default_divider");

?>