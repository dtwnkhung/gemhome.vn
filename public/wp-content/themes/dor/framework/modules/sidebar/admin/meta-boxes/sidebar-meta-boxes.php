<?php

if ( ! function_exists( 'dor_mikado_map_sidebar_meta' ) ) {
	function dor_mikado_map_sidebar_meta() {
		$mkdf_sidebar_meta_box = dor_mikado_create_meta_box(
			array(
				'scope' => apply_filters( 'dor_mikado_filter_set_scope_for_meta_boxes', array( 'page' ), 'sidebar_meta' ),
				'title' => esc_html__( 'Sidebar', 'dor' ),
				'name'  => 'sidebar_meta'
			)
		);
		
		dor_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_sidebar_layout_meta',
				'type'        => 'select',
				'label'       => esc_html__( 'Sidebar Layout', 'dor' ),
				'description' => esc_html__( 'Choose the sidebar layout', 'dor' ),
				'parent'      => $mkdf_sidebar_meta_box,
                'options'       => dor_mikado_get_custom_sidebars_options( true )
			)
		);
		
		$mkdf_custom_sidebars = dor_mikado_get_custom_sidebars();
		if ( count( $mkdf_custom_sidebars ) > 0 ) {
			dor_mikado_create_meta_box_field(
				array(
					'name'        => 'mkdf_custom_sidebar_area_meta',
					'type'        => 'selectblank',
					'label'       => esc_html__( 'Choose Widget Area in Sidebar', 'dor' ),
					'description' => esc_html__( 'Choose Custom Widget area to display in Sidebar"', 'dor' ),
					'parent'      => $mkdf_sidebar_meta_box,
					'options'     => $mkdf_custom_sidebars,
					'args'        => array(
						'select2' => true
					)
				)
			);
		}
	}
	
	add_action( 'dor_mikado_action_meta_boxes_map', 'dor_mikado_map_sidebar_meta', 31 );
}