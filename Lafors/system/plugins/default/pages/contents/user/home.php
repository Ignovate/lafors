<?php

if (osw_is_hook('route', 'home')) {
    echo osw_call_hook('route', 'home');
}