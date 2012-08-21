<?php
/*
Plugin Name: CodeHighlighterPlus
Plugin URI: http://ideathinking.com/wiki/index.php/WordPress:CodeHighlighterPlugin
Description: Syntax highlighter for source code using GeSHi
Version: 1.0
Author: Bob Beaty and Wongoo Lee
Author URI: http://ideathinking.com/

Copyright 2012  Bob Beaty   (email : drbobbeaty_at_gmail_dot_com)
Copyright 2008  Wongoo Lee  (email : iwongu_at_gmail_dot_com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

include_once('geshi.php');

define('CODEHIGHLIGHTERPLUS_NAME', 'bobbeaty_codehighlighterplus');
define('CODEHIGHLIGHTERPLUS_DESC', __('bobbeaty_codehighlighterplus_configuration_data'));

function bobbeaty_codehighlighterplus_preg_callback($matches) {
	$lang = $matches[2];
	$line = $matches[4];

	if ($lang != null) {
		$tabstop = 2;

		$code = trim($matches[5], '\r\n');
		$code = str_replace('< /pre>', '</pre>', $code);
		$code = str_replace('&lt;', '<', $code);
		$code = str_replace('&gt;', '>', $code);

		$geshi =& new GeSHi($code, $lang);
		$geshi->set_tab_width($tabstop);

		if ($line != null) {
			$geshi->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS);
			$geshi->start_line_numbers_at($line); 
		}

		return $geshi->parse_code();
	}

	return $matches[0];
}

function bobbeaty_codehighlighterplus($content) {
	$pattern = '/<pre(\s*lang="([^"]*)")?(\s*lineno="([^"]*)")?>((\\n|.)*)<\/pre>/U';
	$content = preg_replace_callback($pattern, 'bobbeaty_codehighlighterplus_preg_callback', $content);
	return $content;
}

remove_filter('the_content', 'wptexturize');
remove_filter('the_content', 'convert_chars');

add_filter('the_content', 'bobbeaty_codehighlighterplus');

?>
