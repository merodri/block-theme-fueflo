<?php

$image_id= 'https://picsum.photos/143/100';

add_filter('age_gate_logo', 'my_logo_filter', 10, 2);

function my_logo_filter($html, $image_id){

  return '<img src="'. wp_get_attachment_url($image_id) .'" srcset="' . wp_get_attachment_image_srcset($image_id) . '" sizes="(max-width: 200px) 100px,
            (max-width: 480px) 150px, 800px">';

}

// Registers pattern categories.
if ( ! function_exists( 'blocktheme_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since Twenty Twenty-Five 1.0
	 *
	 * @return void
	 */
	function blocktheme_pattern_categories() {

		register_block_pattern_category(
			'blocktheme_autoridades',
			array(
				'label'       => __( 'Autoridades', 'block-theme' ),
				'description' => __( 'A collection of full page layouts.', 'block-theme' ),
			)
		);

		register_block_pattern_category(
			'blocktheme_quienesSomos',
			array(
				'label'       => __( 'Quienes Somos', 'block-theme' ),
				'description' => __( 'A collection of post format patterns.', 'block-theme' ),
			)
		);
	}
endif;
add_action( 'init', 'blocktheme_pattern_categories' );

/**
 * Block Styles 
 */

function img_register_block_styles() {
	register_block_style(
		'core/image',
		array(
			'name' => 'image-mega-hover',
			'label' => 'Mega Hover',
			'style_handle' => 'image-mega-hover'
		)
	);
  register_block_style(
		'core/list',
		array(
			'name' => 'list-style1',
			'label' => 'List Check',
			'style_handle' => 'list-style1'
		)
	); 
  register_block_style(
		'core/heading',
		array(
			'name' => 'underline-heading',
			'label' => 'Yellow Underline',
			'style_handle' => 'underline-heading'
		)
	);  
}

add_action('init', 'img_register_block_styles');

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );
