<?php

 
function ossn_themes_init(){
	ossn_register_plugins_by_path(ossn_default_theme() . 'plugins/');
}
ossn_register_callback('ossn', 'init', 'ossn_themes_init');
