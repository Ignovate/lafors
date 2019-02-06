<?php

if (ossn_is_xhr()) {
    header('Content-Type: application/json');
}
if (ossn_add_friend(ossn_loggedin_user()->guid, input('user'))) {
    if (!ossn_is_xhr()) {
        ossn_trigger_message(ossn_print('ossn:friend:request:submitted'));
        redirect(REF);
    }
    if (ossn_is_xhr()) {
        echo json_encode(array(
                'type' => 1,
                'text' => ossn_print('ossn:notification:are:friends'),
            ));
    }
} else {
    if (!ossn_is_xhr()) {
        ossn_trigger_message(ossn_print('ossn:add:friend:error'));
        redirect(REF);
    }
    if (ossn_is_xhr()) {
        echo json_encode(array(
                'type' => 1,
                'text' => ossn_print('ossn:add:friend:error'),
            ));
    }
}
