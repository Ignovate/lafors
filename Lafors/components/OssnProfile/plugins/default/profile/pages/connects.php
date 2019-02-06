<?php

echo '<div style="margin-left:3px;">';
$users['users'] = $params['user']->getFriends(false, array(
		'page_limit' => 10
));
$count          = $params['user']->getFriends(false, array(
		'count' => true
));
echo ossn_plugin_view("output/users", $users);
echo ossn_view_pagination($count);
echo '</div>';
