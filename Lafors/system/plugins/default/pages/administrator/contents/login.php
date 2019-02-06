<?php


echo '<div class="ossn-admin-login">';
echo '<h3>' . ossn_print('administration') . '</h3>';
echo ossn_view_form('admin/login', array(
    'action' => ossn_site_url('action/admin/login'),
    'class' => 'ossn-admin-form ossn-login-form',
));
echo '</div>';
