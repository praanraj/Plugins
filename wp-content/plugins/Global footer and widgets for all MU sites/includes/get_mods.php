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
// Define globals
global $wprt_theme_mods;
$wprt_theme_mods = get_theme_mods();

// Returns theme mod from global var
function wprt_get_mod( $id, $default = '' ) {

	// Return get_theme_mod on customize_preview
	if ( is_customize_preview() ) {
		return get_theme_mod( $id, $default );
	}
   
	// Get global object
	global $wprt_theme_mods;

	// Return data from global object
	if ( ! empty( $wprt_theme_mods ) ) {

		// Return value
		if ( isset( $wprt_theme_mods[$id] ) ) {
			return $wprt_theme_mods[$id];
		}

		// Return default
		else {
			return $default;
		}
	}

	// Global object not found return using get_theme_mod
	else {
		return get_theme_mod( $id, $default );
	}
}

// Returns global mods
function wprt_get_mods() {
	global $wprt_theme_mods;
	return $wprt_theme_mods;
}
