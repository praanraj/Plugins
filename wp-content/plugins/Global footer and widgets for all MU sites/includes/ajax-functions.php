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

/**
 * Enqueue and localize our scripts
 */
add_action( 'admin_enqueue_scripts', 'wds_enqueue_ajax_scripts' );
function wds_enqueue_ajax_scripts() {
    global $current_screen;
 
    // Only register these scripts if we're on the widgets page
    if ( $current_screen->id == 'widgets' ) {
        wp_enqueue_script( 'wds_ajax_scripts', get_stylesheet_directory_uri() . 'assets/js/admin-widgets.js', array( 'jquery' ), 1, true );
        wp_localize_script( 'wds_ajax_scripts', 'wds_AJAX', array( 'wds_widget_nonce' => wp_create_nonce( 'widget-update-nonce' ) ) );
    }
}

/**
 * Register our AJAX call
 */
add_action( 'wp_ajax_wds-reset-transient', 'wds_ajax_wds_reset_transient', 1 );
 
/**
 * AJAX Helper to delete our transient when a widget is saved
 */
function wds_ajax_wds_reset_transient() {
 
    // Delete our footer transient.  This runs when a widget is saved or updated.  Only do this if our nonce is passed.
    if ( ! empty( $_REQUEST['wds-widget-nonce'] ) ) {
        delete_site_transient( 'wds_footer_widgets_footer_5' );
        delete_site_transient( 'wds_footer_widgets_footer_6' );
    }
}