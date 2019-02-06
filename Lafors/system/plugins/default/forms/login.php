<div class="form-group">
<div class="row">

		<div class="col-md-3 loginhead">
				<label>&nbsp; </label>
				<input placeholder="Username" class="form-control" style="color:black;" type="text" name="username"/>
			</div>
			<div class="col-md-3">
				<label>&nbsp; </label>
				<input placeholder="Password" class="form-control" style="color:black;" type="password" name="password"/>
			</div>
		<div class="col-md-3 loginheadpassbtn">
			<input type="submit" value="<?php echo ossn_print('site:login');?>" class="btn btn-primary ossn-button ossn-button-submit" style="background-color: #f0ad4e;"/>
			
			<a href="<?php echo ossn_site_url('resetlogin'); ?>" style="color: #ffff;">Forgot Password?</a>
		</div>

	
		
</div>
</div>
