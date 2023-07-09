<?php

if ( ! function_exists( 'dor_mikado_centered_title_type_options_meta_boxes' ) ) {
	function dor_mikado_centered_title_type_options_meta_boxes( $show_title_area_meta_container ) {
		
		dor_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_subtitle_side_padding_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Subtitle Side Padding', 'dor' ),
				'description' => esc_html__( 'Set left/right padding for subtitle area', 'dor' ),
				'parent'      => $show_title_area_meta_container,
				'args'        => array(
					'col_width' => 2,
					'suffix'    => 'px or %'
				)
			)
		);
	}
	
	add_action( 'dor_mikado_action_additional_title_area_meta_boxes', 'dor_mikado_centered_title_type_options_meta_boxes', 5 );
}