<?php

$extra_class = '';
$icon_type = $params['icon_type'];

$extra_class .= ' wd-style-' . $params['style'];

if ( $icon_type == 'custom' ) {
	$extra_class .= ' wd-tools-custom-icon';
}

if ( ! empty( $params['icon_design'] ) ) {
	$extra_class .= ' wd-design-' . $params['icon_design'];
}

$extra_class .= woodmart_get_old_classes( ' woodmart-burger-icon' );

?>
<div class="wd-tools-element wd-header-mobile-nav<?php echo esc_attr( $extra_class ); ?>">
	<a href="#" rel="nofollow" aria-label="<?php esc_html_e( 'Open mobile menu', 'woodmart' ); ?>">
		<span class="wd-tools-icon<?php echo woodmart_get_old_classes( ' woodmart-burger' ); ?>">
			<?php if ( $icon_type == 'custom' ): ?>
				<?php echo whb_get_custom_icon( $params['custom_icon'] ); ?>
			<?php endif; ?>
		</span>
	
		<span class="wd-tools-text"><?php esc_html_e( 'Menu', 'woodmart' ); ?></span>
	</a>
</div><!--END wd-header-mobile-nav-->