<?php
/**
 * @package     Global footer and widgets for all MU sites
 * Plugin Name: Global footer and widgets for all MU sites
 * Plugin URI: https://techbrise.com
 * Description: A plugin to create a global footer and widgets for all MultiUser sites.
 * Version: 1.0.0
 * Author: TechBrise Solutions
 * Author URI: https://techbrise.com/
 * License: GPLv2 or later
 */

/**
Global footer and widgets for all MU sites
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
require_once( 'includes/get_mods.php' );
require_once( 'includes/footer-widgets.php' );
require_once( 'includes/footer-inc.php' );
require_once( 'includes/ajax-functions.php' );

/**
 * Generate sidebar for footer across all sites
 */
add_action( 'init', 'wds_footer_widgets_all_sites_footer_5' );
add_action( 'init', 'wds_footer_widgets_all_sites_footer_6' );

function wds_footer_widgets_all_sites_footer_5() {
 
    if ( ! is_main_site() )
        return;
 
    if ( ! ( $wds_footer_widgets = get_site_transient( 'wds_footer_widgets_footer_5' ) ) ) {
        // start output buffer
        ob_start();
 
        // Display our footer sidebars
        if ( ! dynamic_sidebar( 'sidebar-footer-5' ) ) :
                endif; // end sidebar widget area
 
        // grab the data from the output buffer and put it in our variable
        $wds_footer_widgets = ob_get_contents();
        ob_end_clean();
 
        // Put sidebar into a transient for 4 hours
        set_site_transient( 'wds_footer_widgets_footer_5', $wds_footer_widgets, 4*60*60 );
    }
}  
function wds_footer_widgets_all_sites_footer_6() {
 
    if ( ! is_main_site() )
        return;
 
    if ( ! ( $wds_footer_widgets = get_site_transient( 'wds_footer_widgets_footer_6' ) ) ) {
        // start output buffer
        ob_start();
 
        if ( ! dynamic_sidebar( 'sidebar-footer-6' ) ) :
        endif; // end sidebar widget area
 
        // grab the data from the output buffer and put it in our variable
        $wds_footer_widgets = ob_get_contents();
        ob_end_clean();
 
        // Put sidebar into a transient for 4 hours
        set_site_transient( 'wds_footer_widgets_footer_6', $wds_footer_widgets, 4*60*60 );
    }
}