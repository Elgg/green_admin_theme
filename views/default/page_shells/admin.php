<?php
/**
 * Elgg pageshell for the admin area
 *
 * @package Elgg
 * @subpackage Core
 * @author Curverider Ltd
 * @link http://elgg.org/
 *
 * @uses $vars['config'] The site configuration settings, imported
 * @uses $vars['title'] The page title
 * @uses $vars['body'] The main content of the page
 * @uses $vars['messages'] A 2d array of various message registers, passed from system_messages()
 */

// Set the content type
header("Content-type: text/html; charset=UTF-8");

// Set title
if (empty($vars['title'])) {
	$title = $vars['config']->sitename;
} else if (empty($vars['config']->sitename)) {
	$title = $vars['title'];
} else {
	$title = $vars['config']->sitename . ": " . $vars['title'];
}

echo elgg_view('page_elements/admin_html_begin', $vars);
echo elgg_view('page_elements/admin_elgg_topbar', $vars);
echo elgg_view('messages/list', array('object' => $vars['sysmessages']));
echo elgg_view('page_elements/elgg_content', $vars);
echo elgg_view('page_elements/html_end', $vars);