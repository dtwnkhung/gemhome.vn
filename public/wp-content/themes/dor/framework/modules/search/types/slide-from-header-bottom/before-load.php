<?php

if ( ! function_exists( 'dor_mikado_set_search_slide_from_hb_global_option' ) ) {
    /**
     * This function set search type value for search options map
     */
    function dor_mikado_set_search_slide_from_hb_global_option( $search_type_options ) {
        $search_type_options['slide-from-header-bottom'] = esc_html__( 'Slide From Header Bottom', 'dor' );

        return $search_type_options;
    }

    add_filter( 'dor_mikado_filter_search_type_global_option', 'dor_mikado_set_search_slide_from_hb_global_option' );
}