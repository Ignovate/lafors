<?php

$block = new OssnBlock;
$user = input('user');
if ($block->removeBlock(ossn_loggedin_user()->guid, $user)) {
    ossn_trigger_message(ossn_print('user:unblocked'), 'success');
    redirect(REF);
} else {
    ossn_trigger_message(ossn_print('user:unblock:error'), 'error');
    redirect(REF);
}