<?php

$type = input('cache');
if ($type == 1) {
    if (ossn_create_cache()) {
        ossn_trigger_message(ossn_print('cache:enabled'), 'success');
        redirect(REF);
    }
} elseif ($type == 0) {
    if (ossn_disable_cache()) {
        ossn_trigger_message(ossn_print('cache:disabled'), 'success');
        redirect(REF);
    }
}