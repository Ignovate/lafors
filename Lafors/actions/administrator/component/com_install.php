<?php


$OssnCom = new OssnComponents;
if ($OssnCom->upload()) {
    ossn_trigger_message(ossn_print('com:installed'), 'success');
    redirect(REF);
} else {
    ossn_trigger_message(ossn_print('com:install:error'), 'error');
    redirect(REF);
}