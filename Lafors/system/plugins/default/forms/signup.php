<?php

?>
<!--<div>
    <input type="text" name="firstname" placeholder="<?php echo ossn_print('first:name'); ?>"/>
    <input type="text" name="lastname" placeholder="<?php echo ossn_print('last:name'); ?>"/>
</div>-->
<div>
    <input type="text" name="username" placeholder="<?php echo ossn_print('username'); ?>" class="long-input"/>
</div>

<div>
    <input type="password" name="password" placeholder="<?php echo ossn_print('password'); ?>" class="long-input"/>
    	<input type="password" name="repassword" placeholder="<?php echo ossn_print('repassword'); ?>" class="long-input"/>
</div>
<div>
             <input type="text" name="phone"  id="phone"  class="input-text fsize bor" placeholder="Mobile"/>
 </div>
<div>
    <input type="text" name="email" placeholder="<?php echo ossn_print('email'); ?>"/>
</div>
<div class="row">
<div class="input-field col s6 " style="margin:0px;padding:0px;">
				<input name="profession" checked="checked" type="radio" class="" id="stu" value="student"  />
      <label for="pro">Student</label>
	  </div>
     
<div class="input-field col s6 " style="margin:0px;padding:0px;">
				<input name="profession" type="radio" class="" id="pro" value="SME"  />
      <label for="pro">SME</label>
	  </div>
     
	 
		  <div class="input-field col s6" style="margin:0px;padding:0px;">
        
      <input name="profession" type="radio"  id="po" value="placement officer" />
      <label for="po">Placement Officer</label>
	  
        </div>
		  <div class="input-field col s6" style="margin:0px;padding:0px;">
        
      <input name="profession" type="radio"  id="hr" value="human resource"  />
      <label for="hr">Human Resource</label>
	  </div>
	  
          </div>



<!--<div>
    <input type="text" name="mobile" placeholder="<//?php echo ossn_print('mobile'); ?>" class="long-input"/>
</div>
<div>
    <input type="text" name="college" placeholder="<//?php echo ossn_print('college'); ?>" class="long-input"/>
</div>-->


<!--
<//?php
$fields = ossn_default_user_fields();
if($fields){
			$vars	= array();
			$vars['items'] = $fields;
			echo ossn_plugin_view('user/fields/item', $vars);
}
?>-->
<div>
<?php echo ossn_fetch_extend_views('forms/signup/before/submit'); ?>
</div>

<div id="ossn-signup-errors" class="alert alert-danger"></div>

<p>
    <?php echo ossn_print(''); ?>
    <?php //Loosing typed in data when clicking Terms and Conditions link #620 ?>
    <a target="_blank" href="<?php echo ossn_site_url('site/terms'); ?>"><?php echo ossn_print(''); ?></a>
</p>
<div class="ossn-loading ossn-hidden"></div>
<input type="submit" id="ossn-submit-button" class="btn btn-primary" value="<?php echo ossn_print('create:account'); ?>" class=""/><br>
<a class="search2" href="<?php echo ossn_site_url('login'); ?>">Login</a>
