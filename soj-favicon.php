<?php
/*
Plugin Name: SoJ Favicon
Plugin URI: http://journalism.indiana.edu/apps/mediawiki-1.10.1/index.php/Wp_favicon
Description: Changes the Favicon for WordPress admin pages
Author: Jeff Johnson
Version: 1.0.1
*/

function favicon()
{
	$u = get_bloginfo('siteurl');
	echo '
    <link rel="shortcut icon" href="'.$u.'/wp-content/plugins/soj-favicon/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="icon" href="'.$u.'/wp-content/plugins/soj-favicon/favicon.ico" type="image/vnd.microsoft.icon"> 
';
}

add_action('admin_head', 'favicon');

?>