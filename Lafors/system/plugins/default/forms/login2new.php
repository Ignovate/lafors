<div class="form-group">
<div class="row">
		<div class="col-md-3">
			<label><?php echo ossn_print('username'); ?></label>
			<input style="color:black;" type="text" name="username" />
		</div>

		<div class="col-md-3">
			<label><?php echo ossn_print('password'); ?></label>
			<input style="color:black;" type="password" name="password" />
		</div>
		<div>
			<?php echo ossn_fetch_extend_views('forms/login2/before/submit'); ?>
		<div>
		<div class="col-md-3" style="margin-top:3%;">
			<input type="submit" value="<?php echo ossn_print('site:login');?>" class="btn btn-primary"/>
			<a href="<?php echo ossn_site_url('resetlogin'); ?>"><?php echo ossn_print('reset:login'); ?> </a>
		</div>
</div>
</div>


