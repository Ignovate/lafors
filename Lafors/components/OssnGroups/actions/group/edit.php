<?php
$name = input('groupname');
$desc = input('groupdesc');
$memb = input('membership');
$category = input('category');
$group = ossn_get_group_by_guid(input('group'));
if ($group->owner_guid !== ossn_loggedin_user()->guid && !ossn_isAdminLoggedin()) {
    ossn_trigger_message(ossn_print('group:update:fail'), 'error');
    redirect(REF);
}

$edit = new OssnGroup;
$access = array(
    OSSN_PUBLIC,
    OSSN_PRIVATE
);

if (in_array($memb, $access)) {
    $edit->data = new stdClass;
    $edit->data->membership = $memb;
}

if ($edit->updateGroup($name, $desc, $category, $group->guid)) {
    ossn_trigger_message(ossn_print('group:updated'));
    redirect("group/{$group->guid}");
} else {
    ossn_trigger_message(ossn_print('group:update:fail'), 'error');
    redirect(REF);
}
