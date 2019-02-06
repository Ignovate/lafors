<?php

header('Content-Type: application/json');
$pos = new OssnProfile;
if ($pos->repositionCOVER(ossn_loggedin_user()->guid, input('top'), input('left'))) {
    $params = $pos->coverParameters(ossn_loggedin_user()->guid);
    echo json_encode(array(
            'top' => $params[0],
            'left' => $params[1]
        ));
}
