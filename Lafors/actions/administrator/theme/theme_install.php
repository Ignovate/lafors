<?php

$OssnTheme = new OssnThemes;
if ($OssnTheme->upload()) {
    ossn_trigger_message(ossn_print('theme:installed'));
    redirect(REF);
} else {
    ossn_trigger_message(ossn_print('theme:install:error'), 'error');
    redirect(REF);
}
