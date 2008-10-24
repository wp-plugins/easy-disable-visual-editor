<?php
/*
Plugin Name: Easy Disable Visual Editor
Plugin URI: http://sivel.net/wordpress/
Description: Disables the Visual editor globally.
Author: Matt Martz <mdmartz@sivel.net>
Author URI: http://sivel.net/
Version: 1.0

        Copyright (c) 2008 Matt Martz (http://sivel.net)
        Easy Disable Visual Editor is released under the GNU Lesser General Public License (LGPL)
        http://www.gnu.org/licenses/gpl-2.0.txt

*/

if ( is_admin () )
	add_filter ( 'user_can_richedit' , create_function ( '$a' , 'return false;' ) , 50 );
?>
