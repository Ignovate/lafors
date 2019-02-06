<?php

echo '<div class="user-activity">';
$params['post']->full_view = true;
$user = ossn_user_by_guid($params['post']->poster_guid);
if ($params['post']->type == 'user') {
	$vars = ossn_wallpost_to_item($params['post']);
    echo ossn_wall_view_template($vars);
}
if ($params['post']->type == 'group') {
	$vars = ossn_wallpost_to_item($params['post']);
	$vars['show_group'] = true;
    echo ossn_wall_view_template($vars);
}

echo '</div>';
