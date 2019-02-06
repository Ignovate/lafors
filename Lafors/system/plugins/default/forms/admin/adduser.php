<?php

?>
<div>
	<label> <?php echo ossn_print('first:name'); ?> </label>
	<input type='text' name="firstname" placeholder=''/>
</div>
<div>
	<label> <?php echo ossn_print('last:name'); ?> </label>
	<input type='text' name="lastname" placeholder=''/>
</div>
<div>
	<label> <?php echo ossn_print('username'); ?> </label>
	<input type='text' name="username" placeholder=''/>
</div>
<div>
	<label> <?php echo ossn_print('email'); ?> </label>
	<input type='text' name="email" placeholder=''/>
</div>
<div>
	<label> <?php echo ossn_print('password'); ?> </label>
	<input type='password' name="password" placeholder=''/>
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
	              <label> Location </label>
	              <input type='text' name="location" value="<?php echo $user->location; ?>"/>
                  </div> 
				   <div>
	              <label> Designation  </label>
	              <input type='text' name="designation" value="<?php echo $user->designation; ?>"/>
                  </div> 
				    <div>
	              <label> Course </label>
	              <input type='text' name="course" value="<?php echo $user->course; ?>"/>
                  </div> 
				    <div>
	              <label> Sub_course  </label>
	              <input type='text' name="sub_course" value="<?php echo $user->sub_course; ?>"/>
                  </div> 
				    <div>
	              <label> Experience  </label>
	              <input type='text' name="experience" value="<?php echo $user->experience; ?>"/>
                  </div> 
				    <div>
	              <label> Expertise  </label>
	              <input type='text' name="expertise" value="<?php echo $user->expertise; ?>"/>
                  </div> 



<?php
$fields = ossn_default_user_fields();
if($fields){
			$vars	= array();
			$vars['items'] = $fields;
			echo ossn_plugin_view('user/fields/item', $vars);
}
?>
<div>
	<label> <?php echo ossn_print('type'); ?> </label>

	<select name="type">
    	<option value="normal"><?php echo ossn_print('normal'); ?></option>
    	<option value="admin"> <?php echo ossn_print('admin'); ?> </option>
	</select>
</div>
<div>
	<input type="submit" class="btn btn-primary" value="<?php echo ossn_print('save'); ?>"/>
</div>