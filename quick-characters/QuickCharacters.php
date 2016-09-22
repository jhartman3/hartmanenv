<?php
/*
Plugin Name: QuickCharacters
Plugin URI: http://quickcharacters.hartmanprogramming.com
Description: Allows special characters to be typed easily using common characters
Version: 0.1
Author: Jacob Hartman
Author URI: http://jacobhartman.hartmanprogramming.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl.html
*/

// function executes all necessary replacements
function replaceChars($content, $post_id){
	if (strpos($content, "^"))
		$content = caratChars($content);
	return $content;
}

// function adds in all characters that are typed with a ^
function caratChars($content){
	$charsCarat = array("!", "?", "*", "A", "E", "I", "O", "U", 
		"a", "e", "i", "o", "u", "TM", "2", "3");
	$idsCarat = array("161", "191", "176", "194", "202", "206", 
		"212", "219", "226", "234", "238", "244", "251", "153", 
		"178", "179");
	for ($i = 0; $i < count($charsCarat); $i++){
		$content = str_replace("^" . $charsCarat[$i], 
			"&#" . $idsCarat[$i], $content);
	}
	return $content;
}

add_filter( 'the_content', 'replaceChars' );
?>