<?php
/**
 * Elgg Admin Area Canvas
 *
 * @package Elgg
 * @subpackage Core
 * @author Curverider Ltd
 * @link http://elgg.org/
 */
?>

<div id="admin_header">
	<span class="network_title"><h2>
	<a href="<?php echo $vars['url']; ?>">
	<?php echo $vars['config']->sitename; echo " ".elgg_echo('admin'); ?></a>
	<a class="return_to_network" href="<?php echo $vars['url']; ?>">&lt;&lt; Return to network</a>
	</h2></span>
</div>

<div id="elgg_content" class="clearfloat admin_area">
	<div id="elgg_sidebar" class="clearfloat">
		<?php
			echo elgg_view('page_elements/elgg_sidebar', $vars);
		?>
	</div>	
	<div id="elgg_page_contents" class="clearfloat">
		<?php 
			if (isset($vars['area1'])) echo $vars['area1'];
		?>
	</div>
</div>
<div id="admin_footer"></div>