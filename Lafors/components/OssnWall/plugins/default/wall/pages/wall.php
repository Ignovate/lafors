<?php

if(!isset($params['user'])) {
		$params['user'] = '';
}
echo '<div class="ossn-wall-container">';
echo ossn_view_form('home/container', array(
		'action' => ossn_site_url() . 'action/wall/post/a',
		'component' => 'OssnWall',
		'id' => 'ossn-wall-form',
		'enctype' => 'multipart/form-data',
		'params' => array(
				'user' => $params['user']
		)
), false);

echo '</div>';
echo '<div class="user-activity">';
echo ossn_plugin_view('wall/siteactivity');
echo '</div>';
