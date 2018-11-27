<?php
/**
 * The sidebar containing the footer widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zakra
 */

if ( ! is_active_sidebar( 'footer-sidebar-1' ) &&
	! is_active_sidebar( 'footer-sidebar-2' ) &&
	! is_active_sidebar( 'footer-sidebar-3' ) &&
	! is_active_sidebar( 'footer-sidebar-4' ) ) {
	return;
}
?>

<div class="tg-footer-widget-container <?php zakra_footer_widget_cotainer_class(); ?>">
	<?php for ( $i = 1; $i <= 4; $i++ ) { ?>
		<div class="tg-footer-widget-area footer-sidebar-<?php echo esc_attr( $i ); ?>">
			<?php if ( is_active_sidebar( 'footer-sidebar-' . $i ) ) : ?>
				<?php dynamic_sidebar( 'footer-sidebar-' . $i ); ?>
			<?php endif; ?>
		</div>
	<?php } ?>
</div> <!-- footer-widgets -->
