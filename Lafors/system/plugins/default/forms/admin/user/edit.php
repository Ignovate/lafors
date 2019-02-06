<?php

$user = $params['user'];
//$course=$params['content'];
print_r($user);
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
				<label>Professional</label>
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
	             
				  <select type='text' name="course">
				 
				 <?php foreach($content['course']as $pros): ?>
							<option value="<?php echo $pros->corname; ?>" <?php echo ($user->course == $pros->corname)? 'selected': '' ?>><?php echo $pros->corname; ?></option>	
                         <?php endforeach; ?> 	
				  </select>
                  </div> 
				    <div>
	              <label> Sub_course  </label>
				  <select type='text' name="sub_course">
				 <?php foreach($content['sub_course']as $pros): ?>
							<option value="<?php echo $pros->subname; ?>" <?php echo ($user->sub_course == $pros->subname)? 'selected': '' ?> ><?php echo $pros->subname; ?></option>	
                         <?php endforeach; ?> 	
				  </select>
                  </div> 
				    <div>
	              <label> Experience  </label>
	              <input type='text' name="experience" value="<?php echo $user->experience; ?>"/>
                  </div> 
				    <div>
	              <label> Expertise  </label>
	              <input type='text' name="expertise" value="<?php echo $user->expertise; ?>"/>
                  </div> 
				   <div>
	              <label> Year in College  </label>
	              <input type='text' name="yearcollege" value="<?php echo $user->yearcollege; ?>"/>
                  </div> 
				    <div>
	              <label> Organization  </label>
	              <input type='text' name="organization" value="<?php echo $user->organization; ?>"/>
                  </div> 
				   <div>
	              <label> Domain  </label>
	              <input type='text' name="domain" value="<?php echo $user->domain; ?>"/>
                  </div> 
			<label>Willing </label >
			<div class="row-set">
			<div class="row">
			<div class="col-md-3">
			<input type="radio" class="radio-block" name="willing" id="yes" <?php echo ($user->willing =='Yes') ? 'checked' : ''?> value="Yes" >
            <label>Yes </label>
            </div>
            <div class="col-md-3">
            <input type="radio" class="radio-block" name="willing" id="no" <?php echo($user->willing == 'No') ? 'checked' : ''?> value="No">
            </div>
			</div>
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
<div>
	<label> <?php echo ossn_print('type'); ?> </label>
	<select name="type">
    <?php
    if ($user->type == 'normal') {
        $normal = 'selected';
        $admin = '';
    }
    if ($user->type == 'admin') {
        $admin = 'selected';
        $normal = '';
    }
    ?>
    	<option value="normal" <?php echo $normal; ?>> <?php echo ossn_print('normal'); ?></option>
    	<option value="admin" <?php echo $admin; ?>> <?php echo ossn_print('admin'); ?> </option>
	</select>
</div>

<div>
	<input type="hidden" value="<?php echo $user->username; ?>" name="username"/>
	<input type="submit" class="ossn-admin-button button-dark-blue" value="<?php echo ossn_print('save'); ?>"/>
</div>