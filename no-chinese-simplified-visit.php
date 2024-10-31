<?php
/*

**************************************************************************

Plugin Name:  No Chinese Simplified Visit
Plugin URI:   http://www.arefly.com/no-chinese-simplified-visit/
Description:  Disallow Chinese Simplified Visitors in Your Blog. 在你的部落格中禁止簡體中文的訪客
Version:      1.1.2
Author:       Arefly
Author URI:   http://www.arefly.com/
Text Domain:  no-chinese-simplified-visit
Domain Path:  /lang/

**************************************************************************

	Copyright 2014  Arefly  (email : eflyjason@gmail.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as 
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

**************************************************************************/

define("NO_CHINESE_SIMPLIFIED_VISIT_PLUGIN_URL", plugin_dir_url( __FILE__ ));
define("NO_CHINESE_SIMPLIFIED_VISIT_FULL_DIR", plugin_dir_path( __FILE__ ));
define("NO_CHINESE_SIMPLIFIED_VISIT_TEXT_DOMAIN", "no-chinese-simplified-visit");

/* Plugin Localize */
function no_chinese_simplified_visit_load_plugin_textdomain() {
	load_plugin_textdomain(NO_CHINESE_SIMPLIFIED_VISIT_TEXT_DOMAIN, false, dirname(plugin_basename( __FILE__ )).'/lang/');
}
add_action('plugins_loaded', 'no_chinese_simplified_visit_load_plugin_textdomain');

include_once NO_CHINESE_SIMPLIFIED_VISIT_FULL_DIR."options.php";

/* Add Links to Plugins Management Page */
function no_chinese_simplified_visit_action_links($links){
	$links[] = '<a href="'.get_admin_url(null, 'options-general.php?page='.NO_CHINESE_SIMPLIFIED_VISIT_TEXT_DOMAIN.'-options').'">'.__("Settings", NO_CHINESE_SIMPLIFIED_VISIT_TEXT_DOMAIN).'</a>';
	return $links;
}
add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'no_chinese_simplified_visit_action_links');

function no_chinese_simplified_visit(){
	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 5);
	if($lang == "zh-CN"){
		if( (!is_admin()) && (!in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'))) ){
			$message = nl2br(get_option("no_chinese_simplified_visit_notice"));
			header("Content-type: text/html; charset=utf-8");
			wp_die($message);
			exit;
		}
	}
}
add_action('init', 'no_chinese_simplified_visit');
