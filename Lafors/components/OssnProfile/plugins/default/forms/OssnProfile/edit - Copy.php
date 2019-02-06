<?php

$user = $params['user'];
?>
<div>
	<label> <?php echo ossn_print('first:name'); ?> </label>
	<input type='text' name="firstname" value="<?php echo $user->first_name; ?>"/>
</div>
<div>
	<label> <?php echo ossn_print('last:name'); ?> </label>
	<input type='text' name="lastname" value="<?php echo $user->last_name; ?>"/>
</div>
<div>
	<label> <?php echo ossn_print('username'); ?>  </label>
	<input type='text' name="username" value="<?php echo $user->username; ?>" style="background:#E8E9EA;" readonly="readonly"/>
</div>
<div>
	<label> <?php echo ossn_print('email'); ?> </label>
	<input type='text' name="email" value="<?php echo $user->email; ?>"/>
</div> 
<div>
	<label> <?php echo ossn_print('password'); ?>  </label>
	<input type='password' name="password" value=""/>
</div>   
<div>
	<label> <?php echo ossn_print('mobile'); ?>  </label>
	<input type='text' name="mobile" value="<?php echo $user->mobile; ?>"/>
</div> 
<div>
	<label> <?php echo ossn_print('college'); ?>  </label>
	<input type='text' name="college" value="<?php echo $user->college; ?>"/>
</div> 
<label><span>Please Select Your Profession</span></label>				
				<br>
				<br>
				<div class="row row-set">
				<div class="row">
	    		<div class="col-md-3">
				<input name="profession" type="radio" class="radio-block"  id="std"<?php echo ($user->profession == 'student') ? 'checked':''  ?> value="student" />
				<label>Student</label>
				</div>
				<div class="col-md-3">
				<input name="profession" type="radio" class="radio-block"  id="pro"  <?php echo ($user->profession == 'SME') ? 'checked':''  ?> value="SME" />
				<label>SME</label>
				</div>
				<div class="col-md-3">
				<input name="profession" type="radio" class="radio-block"  id="hr" <?php echo ($user->profession == 'human resource') ? 'checked':''  ?> value="human resource" />
				<label>Human Resource</label>
				</div>
				<div class="col-md-3">
				<input name="profession" type="radio" class="radio-block"  id="po" <?php echo ($user->profession == 'placement officer') ? 'checked':''  ?> value="placement officer" />
				<label>Placement Officer</label>
				</div>
			
				 </div>
				 </div>
                <div>
	              <label> <?php echo ossn_print('location'); ?>  </label>
	               <input type='text' name="location" value="<?php echo $user->location; ?>"/>
                   </div> 
                       <div>
	                <label> <?php echo ossn_print('designation'); ?>  </label>
	              <input type='text' name="designation" value="<?php echo $user->designation; ?>"/>
                 </div> 
                      
                       <div>
	                <label> <?php echo ossn_print('course'); ?>  </label>
	              <input type='text' name="course" value="<?php echo $user->course; ?>"/>
                 </div> 
				 
				 <div>
	                <label> <?php echo ossn_print('sub_course'); ?>  </label>
	              <input type='text' name="designation" value="<?php echo $user->sub_course; ?>"/>
                 </div> 
				 
				  <div>
	                <label> <?php echo ossn_print('experience'); ?>  </label>
	              <input type='text' name="experience" value="<?php echo $user->experience; ?>"/>
                 </div> 
				  <div>
	                <label> <?php echo ossn_print('expertise'); ?>  </label>
	              <input type='text' name="expertise" value="<?php echo $user->expertise; ?>"/>
                 </div> 
				 

<?php
$fields = ossn_prepare_user_fields($user);
if($fields){
			$vars	= array();
			$vars['items'] = $fields;
			$vars['label'] = true;
			echo ossn_plugin_view('user/fields/item', $vars);
}
?>
<!--<div>
<label><//?php echo ossn_print('language');?></label>
<//?php
	//profile edit form shows wrong default language #546
	$userlanguage = ossn_site_settings('language');
	echo ossn_plugin_view('input/dropdown', array(
				'name' => 'language',
				'value' => $userlanguage,
				'options' => ossn_get_installed_translations(false),
	));
?>
</div>-->
<input type="hidden" value="<?php echo $user->username; ?>" name="username"/>
<input type="submit" class="btn btn-primary" value="<?php echo ossn_print('save'); ?>"/>
