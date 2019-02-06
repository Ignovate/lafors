<?php

$friend = input('fid');
if (!empty($friend)) {
    ossn_chat()->markViewed($friend, ossn_loggedin_user()->guid);
}