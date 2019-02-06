<?php

$block = new OssnBlock;
$user = input('user');
$user = ossn_user_by_guid($user);

//Admin profiles should be unblockable by 'normal' members #625
if(!$user || $user->isAdmin()){
    ossn_trigger_message(ossn_print('user:block:error'), 'error');
    redirect(REF);	
}
if ($block->addBlock(ossn_loggedin_user()->guid, $user->guid)) {
    ossn_trigger_message(ossn_print('user:blocked'), 'success');
    redirect(REF);
} else {
    ossn_trigger_message(ossn_print('user:block:error'), 'error');
    redirect(REF);
}