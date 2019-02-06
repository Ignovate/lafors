<?php

$user = $params['user'];

$content = $params['course'];
//print_r($user);
//print_r($user->email);

?>

<script>

jQuery(function(){
		  jQuery('.showSingle').click(function(){
			   $('#will').show();
               $('.targetdivs').hide();
		  jQuery('#div'+$(this).attr('target')).show();
		  jQuery('#divs'+$(this).attr('target')).show();
		
        });
});
 $(document).ready(function(){
 if($('[name="profession"]:checked').val() == "student"){
       $('#div1').show();
	    $('#divs1').show();
	   $('#div2').hide();
	   $('#divs2').hide();
	  
	   
	
	}
	else if($('[name="profession"]:checked').val() == "professional"){
       $('#div1').hide();
	   $('#div2').show();
	   $('#divs2').show();
	     $('#divs1').hide();
	  
	
	}
	else if($('[name="profession"]:checked').val() == "placement officer"){
      $('#div1').hide();
	   $('#div2').show();
	    $('#divs2').show();
		  $('#divs1').hide();
	

	}
	else if($('[name="profession"]:checked').val() == "human resource"){
       $('#div1').hide();
	   $('#div2').show();
	    $('#divs2').show();
		  $('#divs1').hide();
		  
	 
	}
 }); 
 </script>

<?php if($user->guid == ossn_loggedin_user()->guid): ?>

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

			<label><span>Please Select Your Profession</span></label>	
				
				<div class="row row-set">
				<div class="row">
	    		<div class="col-md-3">
				
				<input name="profession" type="radio" class="showSingle radio-block" target="1"  id="std"<?php echo ($user->profession == 'student') ? 'checked':''  ?> value="student" />
				<label>Student</label>
				</div>
				<div class="col-md-3">
				<input name="profession" type="radio" class="showSingle radio-block" target="2"   id="pro"  <?php echo ($user->profession == 'professional') ? 'checked':''  ?> value="professional" />
				<label>Professional</label>
				</div>
				<div class="col-md-3">
				<input name="profession" type="radio" class="showSingle radio-block" target="2"  id="hr" <?php echo ($user->profession == 'human resource') ? 'checked':''  ?> value="human resource" />
				<label>Human Resource</label>
				</div>
				<div class="col-md-3">
				<input name="profession" type="radio" class="showSingle radio-block" target="2"   id="po" <?php echo ($user->profession == 'placement officer') ? 'checked':''  ?> value="placement officer" />
				<label>Placement Officer</label>
				</div>
				
				 </div>
				 </div>
				<div  class="targetdivs" id="div1" style="display:none;">
				  <div>
	              <label> <?php echo ossn_print('college'); ?>  </label>
	             <input type='text' name="college" value="<?php echo $user->college; ?>"/>
                     </div> 
				    <div>
	              <label> Course </label>
	             
				  <select name="course">
				 
				 <?php foreach($content['course']as $pros): ?>
							<option value="<?php echo $pros->corname; ?>" <?php echo ($user->course == $pros->corname)? 'selected': '' ?>><?php echo $pros->corname; ?></option>	
                         <?php endforeach; ?> 	
				  </select>
                  </div> 
				    <div>
	              <label> Sub_course  </label>
				  <select name="sub_course">
				 <?php foreach($content['sub_course']as $pros): ?>
							<option value="<?php echo $pros->subname; ?>" <?php echo ($user->sub_course == $pros->subname)? 'selected': '' ?> ><?php echo $pros->subname; ?></option>	
                         <?php endforeach; ?> 	
				  </select>
                  </div> 
				   <div>
	              <label> Year in College  </label>
	              <select name="yearcollege">
				 <option  value="">-Select Year In College-</option>
				 	 <option value="First Year" <?php echo ($user->yearcollege == "First Year")? 'selected': '' ?>>First Year</option>
				 	  <option value="Second Year"<?php echo ($user->yearcollege == "Second Year")? 'selected': '' ?>>Second Year</option>
				 	   <option value="Pre-Final Year"<?php echo ($user->yearcollege == "Pre-Final Year")? 'selected': '' ?>>Pre-Final Year</option>
				 	    <option value="Final Year"<?php echo ($user->yearcollege == "Final Year")? 'selected': '' ?>>Final Year</option>
				  </select>
                  </div>
				  </div>
				  
				  <div class=" targetdivs" id="div2" style="display:none;" >
				
				  
				  
				     <div>
	              <label> Industry </label>
	             
				  <select name="industry">
				 <option  value="">-Select Industry-</option>
				 <?php foreach($content['industry']as $pros): ?>
							<option value="<?php echo $pros->iname; ?>" <?php echo ($user->industry == $pros->iname)? 'selected': '' ?>><?php echo $pros->iname; ?></option>	
                         <?php endforeach; ?> 	
				  </select>
                  </div> 
				  
				   <div>
	              <label> Functional Area </label>
	             <?php echo $user->role; ?>
				  <select name="functional">
				 	 <option name="null" value="">-Select Functional Area-</option>
				 <?php foreach($content['functional']as $pros): ?>
				 
							<option value="<?php echo $pros->fname; ?>" <?php echo ($user->functional == $pros->fname)? 'selected': '' ?>><?php echo $pros->fname; ?></option>	
                         <?php endforeach; ?> 	
				  </select>
                  </div> 
				  
				  
				   <div>
	              <label> Role </label>
				  <select name="role">
				 <option  value="">-Select Role-</option>
				 <?php foreach($content['role']as $pros): ?>
							<option value="<?php echo $pros->rname; ?>" <?php echo ($user->role == $pros->rname)? 'selected': '' ?>><?php echo $pros->rname; ?></option>	
                         <?php endforeach; ?> 	
				  </select>
                  </div> 
				  
				   <?php $a=explode('-',$user->experience);
				   ?>
				   
				  <div class="row">
				  <div class="col-md-3">
				  
	              <label> Total Experience  </label>
				   <select  name="year[]">
				 <option value="null">-Year-</option>
				 <?php foreach($content['yer']as $pros): ?>
							<option value="<?php echo $pros->yr; ?>" <?php echo ($pros->yr == $a[0])? 'selected': '' ?>><?php echo $pros->yr; ?></option>	
                         <?php endforeach; ?> 	
				  </select>
				 
				  </div>
					  <div class="col-md-3">
	              <label> &nbsp;</label>
				    <select type='text' name="year[]">
				 <option value="null">-Month-</option>
				 <?php foreach($content['months']as $pros): ?>
				 
							<option value="<?php echo $pros->mon; ?>" <?php echo ($pros->mon == $a[1])? 'selected': '' ?>><?php echo $pros->mon; ?></option>	
                         <?php endforeach; ?> 	
				  </select>
				 
				  </div>
				  </div>
				  
				  
                   <div>
	              <label> Organization </label>
	              <input type='text' name="organization" value="<?php echo $user->organization; ?>"/>
                  </div>
				 </div>
				  
                    <div>
	              <label> State </label>
				  <select type='text' name="state">
				 	 <option name="null" value="">-Select State-</option>
				 <?php foreach($content['state']as $pros): ?>
				 
							<option value="<?php echo $pros->states; ?>" <?php echo ($user->state == $pros->states)? 'selected': '' ?>><?php echo $pros->states; ?></option>	
                         <?php endforeach; ?> 	
				  </select>
                  </div> 
				    <div>
	              <label> City  </label>
				  <select name="city">
				      	 <option value="">-Select City-</option>
				 <?php foreach($content['city']as $pros): ?>
							<option value="<?php echo $pros->cities; ?>" <?php echo ($user->city == $pros->cities)? 'selected': '' ?> ><?php echo $pros->cities; ?></option>	
                         <?php endforeach; ?> 	
				  </select>
                  </div> 
				 <label> Willing</label>
				<div class="row row-set">
				<div class="row">
				<div class="col-md-3">
				<input type="radio" class="radio-block" name="willing"  id="yes" <?php echo ($user->willing == 'Yes')? 'checked': '' ?> value="Yes"/>
				<label> Yes</label>
				</div>
				<div class="col-md-3">
				<input type="radio" class="radio-block" name="willing" id="no" <?php echo ($user->willing == 'No')? 'checked': '' ?> value="No">
				<label>No</label>
				</div>
				</div>
				</div>
				<div>
				<label><span>About Me</span></label>
				<textarea rows="4" cols="50" name="description"><?php echo $user->description; ?>
				</textarea>
				</div>
				<div>
				<label><span>Summary</span></label>
				<textarea rows="4" cols="30" name="summary" ><?php echo $user->summary; ?>
				</textarea>
				</div>
			  <div  class="targetdivs" id="divs2" style="display:none;">
			   <div>
				<label><span>Professional Background</span></label>
				<input type='text' name="professional_background" value="<?php echo $user->professional_background; ?>"/>
				</textarea>
				</div>
				
				  <div>
				<label><span>Expertised</span></label>
				<input type='text' name="expertised" value="<?php echo $user->expertised; ?>"/>
				</textarea>
				</div>
				</div>
				  <div  class="targetdivs" id="divs1" style="display:none;">
			    <div>
				<label><span>Educational Background</span></label>
				<input type='text' name="educational_background" value="<?php echo $user->educational_background; ?>"/>
				</textarea>
				</div>
			  
				<div>
				<label><span>Key Skills</span></label>
				<textarea rows="1" cols="30" name="keyskills" ><?php echo $user->keyskills; ?>
				</textarea>
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
<?php endif; ?>
<?php if($user->guid != ossn_loggedin_user()->guid): ?>
				
				<div class="col-md-11">
<label>About Me</label>
				<div class="row module-title">
				<div class="col-md-8">
					     <h3><?php echo (" "); ?> <?php echo $user->first_name; ?> <?php echo $user->last_name; ?></h3>
					<p><?php echo (" "); ?><?php echo $user->designation; ?></p>
					<p><?php echo (" "); ?><?php echo $user->city; ?>&nbsp;,&nbsp;<?php echo $user->state; ?></p>
					<p><?php echo (""); ?><?php echo $user->yearcollege; ?>&nbsp;&nbsp;<?php echo $user->college; ?></p>
					<p><?php echo (" "); ?><?php echo $user->course; ?>&nbsp;&nbsp;<?php echo $user->sub_course; ?></p>
					</div>
				</div>
				<br>
				<label>Professional Summary</label>
				<div class="row module-title">
				<div class="col-md-8">
				
				<h4><?php echo $user->summary; ?></h4>
				<h4><?php echo $user->professional_background; ?></h4>
				<div id="edu1">
				
				</div>
				<h4><?php echo $user->expertised; ?></h4>
				</div>
				</div>
				<?php if($user->educational_background != "") : ?>
				<br>
				<label>Educational Background</label>
				<div class="row module-title">
				<div class="col-md-8">
				<h4><?php echo $user->educational_background; ?></h4>
				</div>
				</div>
				<?php endif;?>
				<br>
				<label>Keyskills</label>
				<div class="row module-title">
				<div class="col-md-8">
				<h4>  <?php echo (" "); ?><?php echo $user->keyskills; ?></h4>
				</div>
				</div>
				<!--<hr class="style7"></strong>
				<//?php echo $user->description; ?>-->
							
                </div>
				
				

<?php endif;?>

