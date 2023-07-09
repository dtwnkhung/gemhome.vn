<?php do_action( 'dor_mikado_action_before_site_logo' ); ?>

<?php

if(!function_exists('dor_mikado_generate_logo_text_output')){
    function dor_mikado_generate_logo_text_output($output){
        if(!empty($output)){
            return $output;
        }
    }
}

$styles = array();
if($logo_text_color != '') {
    $styles[] =  'color: ' . $logo_text_color;
}
if($logo_text_font_size != '') {
    $styles[] =  'font-size:' . dor_mikado_filter_px( $logo_text_font_size ) . 'px';
}

?>

    <div class="mkdf-logo-wrapper mkdf-text-logo">
        <a itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php if($logo_text !== '') { ?>
                <span class="mkdf-text-logo-left-wrap">
                    <span class="mkdf-text-logo-left" <?php dor_mikado_inline_style($styles); ?>>
                    <?php print dor_mikado_generate_logo_text_output($logo_text); ?>
                    </span>
                </span>
            <?php } ?>
        </a>
    </div>
<?php do_action( 'dor_mikado_action_after_site_logo' ); ?>