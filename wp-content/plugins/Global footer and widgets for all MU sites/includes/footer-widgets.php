<?php
/**
@package     Global footer and widgets for all MU sites
Global footer and widgets for all MultiUser sites
Copyright (C) 2018 TechBrise Solutions
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Exit if disabled via Customizer
if ( ! wprt_get_mod( 'footer_widgets', true ) ) return false;

// Get options
$classes = '';
$columns = wprt_get_mod( 'footer_columns', '2' );
$grid_cls = 'span_1_of_'. $columns;
$gutter = wprt_get_mod( 'footer_column_gutter', '30' );

if ( $gutter )
	$classes .= ' gutter-'. $gutter; ?>


<?php
// Display our stored footer widgets
$show_footer_sidebar_footer_5 = get_site_transient( 'wds_footer_widgets_footer_5' );
$show_footer_sidebar_footer_6 = get_site_transient( 'wds_footer_widgets_footer_6' );

global $blog_id;
if( $blog_id != 1 ) {
	?>
	<footer id="footer">
	<div id="footer-widgets" class="wprt-container">
		<div class="wprt-row <?php echo esc_attr( $classes ); ?>">
			<?php
			// Footer widget 1 ?>
			<div class="<?php echo esc_attr( $grid_cls ); ?> col">
				<?php echo $show_footer_sidebar_footer_5; ?>
			</div>

			<div class="<?php echo esc_attr( $grid_cls ); ?> col">
				<?php echo $show_footer_sidebar_footer_6; ?>
			</div>
		</div>
	</div><!-- /#footer-widgets -->
	</footer>
<?php
} else {
	if ( is_active_sidebar( 'sidebar-footer-5' ) || is_active_sidebar( 'sidebar-footer-6' ) ) {
	?>
	<footer id="footer">
	<div id="footer-widgets" class="wprt-container">
		<div class="wprt-row <?php echo esc_attr( $classes ); ?>">
			<?php
			// Footer widget 1 ?>
			<div class="<?php echo esc_attr( $grid_cls ); ?> col">
				<?php if ( is_active_sidebar( 'sidebar-footer-5' ) ) dynamic_sidebar( 'sidebar-footer-5' ); ?>
			</div>

			<?php
			// Footer widget 2
			if ( $columns > '1' ) : ?>
				<div class="<?php echo esc_attr( $grid_cls ); ?> col">
					<?php if ( is_active_sidebar( 'sidebar-footer-6' ) ) dynamic_sidebar( 'sidebar-footer-6' ); ?>
				</div>
			<?php endif; ?>
			
		</div>
	</div><!-- /#footer-widgets -->
	</footer>
<?php } 
} ?>