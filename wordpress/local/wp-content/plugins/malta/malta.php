<?php

/*
Plugin Name: Malta
Version: 1.0.0
Author: Fizzes Rocks
License: GPLv2 or later
Text Domain: malta
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define( 'MALTA_VERSION', '1.0.0' );
define( 'MALTA__MINIMUM_WP_VERSION', '4.0' );
define( 'MALTA__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'MALTA_DELETE_LIMIT', 100000 );

register_activation_hook( __FILE__, array( 'Malta', 'plugin_activation' ) );
register_deactivation_hook( __FILE__, array( 'Malta', 'plugin_deactivation' ) );

