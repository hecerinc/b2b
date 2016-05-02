<?php
require_once 'ViewBlock.php';

$Block = new ViewBlock();
function get_header($title = "", $keywords = "", $css = array()){
	global $bg_color;
	global $Block;
	include('header.php');
}
function get_footer(){
	global $Block;
	include('footer.php');
}
function get_css($css){
	$cssfiles = "";
	if(!is_array($css))
		$css = [$css];
	foreach ($css as $file_name)
		$cssfiles .= "<link type=\"text/css\" rel=\"stylesheet\" href=\"css/$file_name\" >";
	return $cssfiles;
}
global $tabs;
$tabs = [false, false, false, false, false];

?>
