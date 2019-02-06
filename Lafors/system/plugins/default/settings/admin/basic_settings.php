<?php

echo ossn_view_form('admin/basic_settings', array(
    'action' => ossn_site_url('action/admin/settings/save/basic'),
    'class' => 'ossn-admin-form'
));?>