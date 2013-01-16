<?php
/*
Plugin Name: Custom Login Css
Description: With this plugin you add the header and footer to your login page
Version: 1.0.0
Author: GraphicEdit
Author URI: http://graphicedit.com/

	Copyright 2011  GraphicEdit  (email : contact@graphicedit.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

function custom_login_css_footer() {
	
	if ( ! is_admin() ) {
	
	$style = get_option('custom_login_css_style'); 
	echo $style;
	return;
     
	} else {
     return;
	}

}


function custom_login_css_options() {
	
		add_options_page('Custom Login Css', 'Custom Login Css', 'manage_options', 'custom-login-css/options.php');
	
}	
	
		
add_action( 'login_footer', 'custom_login_css_footer' );
add_action( 'admin_menu', 'custom_login_css_options');

