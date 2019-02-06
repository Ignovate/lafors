<?php

$error = input('error');
?>
<div class="row">
       <div class="col-md-6 col-center ossn-page-contents signup_enter">
    <?php if ($error == 1) { ?>
        <div class="alert alert-danger">
            <strong><?php echo ossn_print('login:error'); ?></strong><br/>
            <p><?php echo ossn_print('login:error:sub'); ?></p>
        </div>
    	<?php } ?>       
    	<?php 
			$contents = ossn_view_form('login2', array(
            		'id' => 'ossn-login',
           			'action' => ossn_site_url('action/user/login'),
        	));
			echo ossn_plugin_view('widget/view', array(
						'title' => ossn_print('site:login'),
						'contents' => $contents,
			));
			?>	       			
       </div>     
</div>	
