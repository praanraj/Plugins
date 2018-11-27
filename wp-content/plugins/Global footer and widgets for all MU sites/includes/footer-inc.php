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

/** Add the admin options page */
add_action( 'admin_menu', 'plugin_admin_add_page' );

/** This function will add the submenu for user role menu */
function plugin_admin_add_page() {
    add_options_page( 'Global widget for MUsites', 'Global widget for MUsites', 'manage_options', 'plugin', 'wprt_widgets_init' );
}

// Registers a widget area.
add_action( 'after_setup_theme', 'wprt_widgets_init' );
function wprt_widgets_init() {
	
	// 3 Sidebars for Footer
	register_sidebar( array(
		'name'			=> esc_html__( 'Sidebar Footer 5', 'zakra' ),
		'id'			=> 'sidebar-footer-1',
		'description'	=> esc_html__( 'Add widgets here to appear in Sidebar Footer 1', 'twentyseventeen' ),
		'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h2 class="widget-title"><span>',
		'after_title'	=> '</span></h2>'
	) );
	register_sidebar( array(
		'name'			=> esc_html__( 'Sidebar Footer 6', 'zakra' ),
		'id'			=> 'sidebar-footer-2',
		'description'	=> esc_html__( 'Add widgets here to appear in Sidebar Footer 2', 'twentyseventeen' ),
		'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h2 class="widget-title"><span>',
		'after_title'	=> '</span></h2>'
	) );
	
}

