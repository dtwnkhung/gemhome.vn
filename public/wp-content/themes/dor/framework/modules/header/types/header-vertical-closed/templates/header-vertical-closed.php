<?php do_action('dor_mikado_action_before_page_header'); ?>

<aside class="mkdf-vertical-menu-area <?php echo esc_attr($holder_class); ?>">
    <div class="mkdf-vertical-menu-area-inner">
		<a href="#" <?php dor_mikado_class_attribute( $vertical_closed_icon_class ); ?>>
			<span class="mkdf-vertical-area-close-icon">
				<?php echo dor_mikado_get_icon_sources_html( 'vertical_closed', true ); ?>
			</span>
			<span class="mkdf-vertical-area-opener-icon">
				<?php echo dor_mikado_get_icon_sources_html( 'vertical_closed' ); ?>
			</span>
		</a>
        <div class="mkdf-vertical-area-background"></div>
        <?php if(!$hide_logo) {
			dor_mikado_get_logo();
        } ?>
        <?php dor_mikado_get_header_vertical_closed_main_menu(); ?>
        <div class="mkdf-vertical-area-widget-holder">
			<?php dor_mikado_get_header_widget_area_one(); ?>
        </div>
    </div>
</aside>
<div class="mkdf-vertical-area-bottom-logo">
	<div class="mkdf-vertical-area-bottom-logo-inner">
		<?php if(!$hide_logo) {
			dor_mikado_get_logo();
		} ?>
	</div>
</div>

<?php do_action('dor_mikado_action_after_page_header'); ?>