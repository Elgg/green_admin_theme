<?php
/**
 * Elgg administration simple plugin screen
 *
 * Shows an alphabetical list of "simple" plugins.
 *
 * @package adminlayout
 * @author Curverider Ltd
 * @link http://elgg.org/
 */

regenerate_plugin_list();
$installed_plugins = get_installed_plugins();
$plugin_list = array();
$title = elgg_view_title(elgg_echo('admin:plugins'));

foreach ($installed_plugins as $installed_name => $plugin) {
	if (!isset($plugin['manifest']['admin_interface']) || $plugin['manifest']['admin_interface'] == 'advanced') {
		continue;
	}

	$plugin['installed_name'] = $installed_name;

	$plugin_list[$plugin['manifest']['name']] = $plugin;
}

ksort($plugin_list);
$form_body  .= <<<___END
	<div id="content_header" class="clearfloat">
		<div class="content_header_title">$title</div>
	</div>
	<ul class="admin_plugins margin_top">
___END;

foreach ($plugin_list as $name => $info) {
	$manifest = $info['manifest'];
	$version_valid = (isset($manifest['elgg_version'])) ? check_plugin_compatibility($manifest['elgg_version']) : FALSE;
	if ($info['active']) {
		$active_class = 'active';
		$checked = 'checked="checked"';
	} else {
		$active_class = 'not_active';
		$checked = '';
	}

	$form_body .= <<<___END
	<li class="plugin_details $active_class clearfloat">
		<span class="plugin_controls">
			<input type="checkbox" id="{$info['installed_name']}" class="plugin_enabled" $checked name="enabled_plugins[]" value="{$info['installed_name']}"/>
			<label for="{$info['installed_name']}">$name</label>
		</span>

		<span class="plugin_info">
			<span class="plugin_description">
				{$manifest['description']}
			</span>
		</span>
	</li>
___END;
}

$form_body .= '</ul>';
$form_body .= elgg_view('input/submit', array('value' => elgg_echo('save')));
$form_body .= elgg_view('input/reset', array('value' => elgg_echo('reset'), 'class' => 'action_button disabled'));

echo elgg_view('input/form', array(
	'action' => "{$vars['url']}action/admin/plugins/simple_update_states",
	'body' => $form_body,
	'class' => 'admin_plugins_simpleview'
));