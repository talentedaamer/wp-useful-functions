<?php
/**
 * Return trimmed text to certain character length
 *
 * @param $text
 * @param int $num_char
 * @param null $more
 *
 * @return bool|string
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
		$offset  = ( $num_char - strlen( $more ) ) - strlen( $content );
		$text = substr( $text, 0, strrpos( $text, ' ', $offset ) );
		$text = $text . $more;
	}
	return $text;
}
