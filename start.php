<?php

	function adminlayout_init(){
		elgg_extend_view('overview/extend', 'adminlayout/overview');
		elgg_extend_view('metatags', 'adminlayout/analytics');
		elgg_extend_view('twittersettings/extend', 'adminlayout/twittersettings');
		elgg_extend_view('sitepages/extend', 'adminlayout/sitepages');
	}
	register_elgg_event_handler('init','system','adminlayout_init');
