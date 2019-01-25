<?php
/**
 * Return trimmed text to certain character length
 *
 * @param $text text to be trimmed
 * @param int $num_char numbber of characters
 * @param null $more more text. default is '...'
 *
 * @return string trimmed text
 */
function wp_trim_content_to_character( $text, $num_char = 50, $more = null ) {

	if ( null === $more ) {
		$more = __( '&hellip;' );
	}

	// remove all html characters
	$text = wp_strip_all_tags( $text );

	if ( strlen( $text ) < $num_char ) {
		$text = $text . $more;
	} else {
		$text = substr( $text, 0, strpos( $text, ' ', $num_char ) );
		$text = $text . $more;
	}
	return $text;
}
