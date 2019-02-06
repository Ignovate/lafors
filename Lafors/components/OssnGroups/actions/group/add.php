<?php

$add = new OssnGroup;
$params['owner_guid'] = ossn_loggedin_user()->guid;
$params['name'] = input('groupname');
$params['description'] = input('description');
$params['category'] = input('category');
$params['privacy'] = input('privacy');
if ($add->createGroup($params)) {
    ossn_trigger_message(ossn_print('group:added'), 'success');
    redirect("group/{$add->getGuid()}");
} else {
    ossn_trigger_message(ossn_print('group:add:fail'), 'error');
    redirect(REF);
}