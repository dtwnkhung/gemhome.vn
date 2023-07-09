<?php

if ( ! function_exists( 'dor_mikado_sidearea_options_map' ) ) {
	function dor_mikado_sidearea_options_map() {

        dor_mikado_add_admin_page(
            array(
                'slug'  => '_side_area_page',
                'title' => esc_html__('Side Area', 'dor'),
                'icon'  => 'fa fa-indent'
            )
        );

        $side_area_panel = dor_mikado_add_admin_panel(
            array(
                'title' => esc_html__('Side Area', 'dor'),
                'name'  => 'side_area',
                'page'  => '_side_area_page'
            )
        );

        dor_mikado_add_admin_field(
            array(
                'parent'        => $side_area_panel,
                'type'          => 'select',
                'name'          => 'side_area_type',
                'default_value' => 'side-menu-slide-from-right',
                'label'         => esc_html__('Side Area Type', 'dor'),
                'description'   => esc_html__('Choose a type of Side Area', 'dor'),
                'options'       => array(
                    'side-menu-slide-from-right'       => esc_html__('Slide from Right Over Content', 'dor'),
                    'side-menu-slide-with-content'     => esc_html__('Slide from Right With Content', 'dor'),
                    'side-area-uncovered-from-content' => esc_html__('Side Area Uncovered from Content', 'dor'),
                ),
            )
        );

        dor_mikado_add_admin_field(
            array(
                'parent'        => $side_area_panel,
                'type'          => 'text',
                'name'          => 'side_area_width',
                'default_value' => '',
                'label'         => esc_html__('Side Area Width', 'dor'),
                'description'   => esc_html__('Enter a width for Side Area (px or %). Default width: 405px.', 'dor'),
                'args'          => array(
                    'col_width' => 3,
                )
            )
        );

        $side_area_width_container = dor_mikado_add_admin_container(
            array(
                'parent'     => $side_area_panel,
                'name'       => 'side_area_width_container',
                'dependency' => array(
                    'show' => array(
                        'side_area_type' => 'side-menu-slide-from-right',
                    )
                )
            )
        );

        dor_mikado_add_admin_field(
            array(
                'parent'        => $side_area_width_container,
                'type'          => 'color',
                'name'          => 'side_area_content_overlay_color',
                'default_value' => '',
                'label'         => esc_html__('Content Overlay Background Color', 'dor'),
                'description'   => esc_html__('Choose a background color for a content overlay', 'dor'),
            )
        );

        dor_mikado_add_admin_field(
            array(
                'parent'        => $side_area_width_container,
                'type'          => 'text',
                'name'          => 'side_area_content_overlay_opacity',
                'default_value' => '',
                'label'         => esc_html__('Content Overlay Background Transparency', 'dor'),
                'description'   => esc_html__('Choose a transparency for the content overlay background color (0 = fully transparent, 1 = opaque)', 'dor'),
                'args'          => array(
                    'col_width' => 3
                )
            )
        );

        dor_mikado_add_admin_field(
            array(
                'parent'        => $side_area_panel,
                'type'          => 'select',
                'name'          => 'side_area_icon_source',
                'default_value' => 'icon_pack',
                'label'         => esc_html__('Select Side Area Icon Source', 'dor'),
                'description'   => esc_html__('Choose whether you would like to use icons from an icon pack or SVG icons', 'dor'),
                'options'       => dor_mikado_get_icon_sources_array()
            )
        );

        $side_area_icon_pack_container = dor_mikado_add_admin_container(
            array(
                'parent'     => $side_area_panel,
                'name'       => 'side_area_icon_pack_container',
                'dependency' => array(
                    'show' => array(
                        'side_area_icon_source' => 'icon_pack'
                    )
                )
            )
        );

        dor_mikado_add_admin_field(
            array(
                'parent'        => $side_area_icon_pack_container,
                'type'          => 'select',
                'name'          => 'side_area_icon_pack',
                'default_value' => 'font_elegant',
                'label'         => esc_html__('Side Area Icon Pack', 'dor'),
                'description'   => esc_html__('Choose icon pack for Side Area icon', 'dor'),
                'options'       => dor_mikado_icon_collections()->getIconCollectionsExclude(array('linea_icons', 'dripicons', 'simple_line_icons'))
            )
        );

        $side_area_svg_icons_container = dor_mikado_add_admin_container(
            array(
                'parent'     => $side_area_panel,
                'name'       => 'side_area_svg_icons_container',
                'dependency' => array(
                    'show' => array(
                        'side_area_icon_source' => 'svg_path'
                    )
                )
            )
        );

        dor_mikado_add_admin_field(
            array(
                'parent'      => $side_area_svg_icons_container,
                'type'        => 'textarea',
                'name'        => 'side_area_icon_svg_path',
                'label'       => esc_html__('Side Area Icon SVG Path', 'dor'),
                'description' => esc_html__('Enter your Side Area icon SVG path here. Please remove version and id attributes from your SVG path because of HTML validation', 'dor'),
            )
        );

        dor_mikado_add_admin_field(
            array(
                'parent'      => $side_area_svg_icons_container,
                'type'        => 'textarea',
                'name'        => 'side_area_close_icon_svg_path',
                'label'       => esc_html__('Side Area Close Icon SVG Path', 'dor'),
                'description' => esc_html__('Enter your Side Area close icon SVG path here. Please remove version and id attributes from your SVG path because of HTML validation', 'dor'),
            )
        );

        $side_area_icon_style_group = dor_mikado_add_admin_group(
            array(
                'parent'      => $side_area_panel,
                'name'        => 'side_area_icon_style_group',
                'title'       => esc_html__('Side Area Icon Style', 'dor'),
                'description' => esc_html__('Define styles for Side Area icon', 'dor')
            )
        );

        $side_area_icon_style_row1 = dor_mikado_add_admin_row(
            array(
                'parent' => $side_area_icon_style_group,
                'name'   => 'side_area_icon_style_row1'
            )
        );

        dor_mikado_add_admin_field(
            array(
                'parent' => $side_area_icon_style_row1,
                'type'   => 'colorsimple',
                'name'   => 'side_area_icon_color',
                'label'  => esc_html__('Color', 'dor')
            )
        );

        dor_mikado_add_admin_field(
            array(
                'parent' => $side_area_icon_style_row1,
                'type'   => 'colorsimple',
                'name'   => 'side_area_icon_hover_color',
                'label'  => esc_html__('Hover Color', 'dor')
            )
        );

        $side_area_icon_style_row2 = dor_mikado_add_admin_row(
            array(
                'parent' => $side_area_icon_style_group,
                'name'   => 'side_area_icon_style_row2',
                'next'   => true
            )
        );

        dor_mikado_add_admin_field(
            array(
                'parent' => $side_area_icon_style_row2,
                'type'   => 'colorsimple',
                'name'   => 'side_area_close_icon_color',
                'label'  => esc_html__('Close Icon Color', 'dor')
            )
        );

        dor_mikado_add_admin_field(
            array(
                'parent' => $side_area_icon_style_row2,
                'type'   => 'colorsimple',
                'name'   => 'side_area_close_icon_hover_color',
                'label'  => esc_html__('Close Icon Hover Color', 'dor')
            )
        );

        dor_mikado_add_admin_field(
            array(
                'parent'      => $side_area_panel,
                'type'        => 'image',
                'name'        => 'side_area_background_image',
                'label'       => esc_html__('Background Image', 'dor'),
                'description' => esc_html__('Choose a background image for Side Area', 'dor')
            )
        );

        dor_mikado_add_admin_field(
            array(
                'parent'      => $side_area_panel,
                'type'        => 'color',
                'name'        => 'side_area_background_color',
                'label'       => esc_html__('Background Color', 'dor'),
                'description' => esc_html__('Choose a background color for Side Area', 'dor')
            )
        );

        dor_mikado_add_admin_field(
            array(
                'parent'      => $side_area_panel,
                'type'        => 'text',
                'name'        => 'side_area_padding',
                'label'       => esc_html__('Padding', 'dor'),
                'description' => esc_html__('Define padding for Side Area in format top right bottom left', 'dor'),
                'args'        => array(
                    'col_width' => 3
                )
            )
        );

        dor_mikado_add_admin_field(
            array(
                'parent'        => $side_area_panel,
                'type'          => 'selectblank',
                'name'          => 'side_area_aligment',
                'default_value' => '',
                'label'         => esc_html__('Text Alignment', 'dor'),
                'description'   => esc_html__('Choose text alignment for side area', 'dor'),
                'options'       => array(
                    ''       => esc_html__('Default', 'dor'),
                    'left'   => esc_html__('Left', 'dor'),
                    'center' => esc_html__('Center', 'dor'),
                    'right'  => esc_html__('Right', 'dor')
                )
            )
        );
    }

    add_action('dor_mikado_action_options_map', 'dor_mikado_sidearea_options_map', dor_mikado_set_options_map_position( 'sidearea' ) );
}