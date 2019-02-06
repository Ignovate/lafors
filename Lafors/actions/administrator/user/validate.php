<?php

$user = ossn_user_by_guid(input('guid'));
if(!$user){
	ossn_trigger_message(ossn_print('admin:user:validate:error'), 'error');
	redirect(REF);
}
$code = $user->activation;
if($user->ValidateRegistration($code)){
	ossn_trigger_message(ossn_print('admin:user:validated'));
} else {
	ossn_trigger_message(ossn_print('admin:user:validate:error'), 'error');
}
redirect(REF);