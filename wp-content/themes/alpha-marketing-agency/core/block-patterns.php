<?php
/**
 * Alpha Marketing Agency: Block Patterns
 *
 * @since Alpha Marketing Agency 1.0
 */

function alpha_marketing_agency_register_block_patterns() {

	$patterns = array();

	$block_pattern_categories = array(
		'alpha-marketing-agency' => array( 'label' => __( 'Alpha Marketing Agency', 'alpha-marketing-agency' ) )
	);
	$block_pattern_categories = apply_filters( 'alpha_marketing_agency_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'alpha_marketing_agency_register_block_patterns', 9 );