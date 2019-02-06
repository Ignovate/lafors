<?php

?>
<div>
    <label><?php echo ossn_print('username'); ?> </label>
    <input type="text" name="username"/>
</div>

<div>
    <label> <?php echo ossn_print('password'); ?> </label>
    <input type="password" name="password"/>
</div>

<input type="submit" value="<?php echo ossn_print('site:login');?>" class="ossn-button ossn-button-submit"/>
<br/>
<a href="<?php echo ossn_site_url('resetlogin'); ?>"><?php echo ossn_print('reset:password'); ?></a>
