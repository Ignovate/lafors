<?php

?>
<div>
	<label><?php echo ossn_print('username'); ?></label>
    <input type="text" name="username" />
</div>

<div>
	<label><?php echo ossn_print('password'); ?></label>
    <input type="password" name="password" />
</div>
<div>
	<?php echo ossn_fetch_extend_views('forms/login2/before/submit'); ?>
<div>
<div>
    <input type="submit" value="<?php echo ossn_print('site:login');?>" class="btn btn-primary"/><br>
    <a href="<?php echo ossn_site_url('resetlogin'); ?>"><?php echo ossn_print('reset:login'); ?> </a><br>
     <a href="<?php echo ossn_site_url(''); ?>">Create New Account</a>
</div>
