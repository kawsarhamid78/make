<?php
/**
 * @package Make
 */
ttfmake_load_section_header();

global $ttfmake_section_data, $ttfmake_is_js_template;
// $section_name  = ttfmake_get_section_name( $ttfmake_section_data, $ttfmake_is_js_template );
// $title         = ( isset( $ttfmake_section_data['data']['title'] ) ) ? $ttfmake_section_data['data']['title'] : '';
// $hide_arrows   = ( isset( $ttfmake_section_data['data']['hide-arrows'] ) ) ? $ttfmake_section_data['data']['hide-arrows'] : 0;
// $hide_dots     = ( isset( $ttfmake_section_data['data']['hide-dots'] ) ) ? $ttfmake_section_data['data']['hide-dots'] : 0;
// $autoplay      = ( isset( $ttfmake_section_data['data']['autoplay'] ) ) ? $ttfmake_section_data['data']['autoplay'] : 1;
// $transition    = ( isset( $ttfmake_section_data['data']['transition'] ) ) ? $ttfmake_section_data['data']['transition'] : 'scrollHorz';
// $delay         = ( isset( $ttfmake_section_data['data']['delay'] ) ) ? $ttfmake_section_data['data']['delay'] : 6000;
// $height        = ( isset( $ttfmake_section_data['data']['height'] ) ) ? $ttfmake_section_data['data']['height'] : 600;
// $responsive    = ( isset( $ttfmake_section_data['data']['responsive'] ) ) ? $ttfmake_section_data['data']['responsive'] : 'balanced';
// $section_order = ( ! empty( $ttfmake_section_data['data']['banner-slide-order'] ) ) ? $ttfmake_section_data['data']['banner-slide-order'] : array();
?>
<div class="ttfmake-banner-slides">
	<div class="ttfmake-banner-slides-stage"></div>
	<a href="#" class="ttfmake-add-slide ttfmake-banner-add-item-link" title="<?php esc_attr_e( 'Add new slide', 'make' ); ?>">
		<div class="ttfmake-banner-add-item">
			<span>
				<?php esc_html_e( 'Add Item', 'make' ); ?>
			</span>
		</div>
	</a>
</div>

<?php ttfmake_load_section_footer();