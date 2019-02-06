<?php


$component = new OssnComponents;

$com   = input('com');
$cache = ossn_site_settings('cache');

if($component->DISABLE($com)) {
		ossn_trigger_message(ossn_print('com:disabled'));
		if($cache == false) {
				redirect(REF);
		} else {
				//redirect and flush cache
				$action = ossn_add_tokens_to_url("action/admin/cache/flush");
				redirect($action);
		}
}
