<?php

echo ossn_view_form('admin/adduser', array(
    'action' => ossn_site_url('action/admin/add/user'),
    'class' => 'ossn-admin-form',
));?>