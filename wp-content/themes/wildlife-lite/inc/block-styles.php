<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Wildlife Lite 1.0
	 *
	 * @return void
	 */
	function wildlife_lite_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'wildlife-lite-columns-overlap',
				'label' => esc_html__( 'Overlap', 'wildlife-lite' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'wildlife-lite-border',
				'label' => esc_html__( 'Borders', 'wildlife-lite' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'wildlife-lite-border',
				'label' => esc_html__( 'Borders', 'wildlife-lite' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'wildlife-lite-border',
				'label' => esc_html__( 'Borders', 'wildlife-lite' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'wildlife-lite-image-frame',
				'label' => esc_html__( 'Frame', 'wildlife-lite' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'wildlife-lite-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'wildlife-lite' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'wildlife-lite-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'wildlife-lite' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'wildlife-lite-border',
				'label' => esc_html__( 'Borders', 'wildlife-lite' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'wildlife-lite-separator-thick',
				'label' => esc_html__( 'Thick', 'wildlife-lite' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'wildlife-lite-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'wildlife-lite' ),
			)
		);
	}
	add_action( 'init', 'wildlife_lite_register_block_styles' );
}
