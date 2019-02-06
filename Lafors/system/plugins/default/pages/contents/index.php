<?php

?>
		<div class="col-md-6 home-left-contents">
			<!--<div class="logo">
            	<img src="<//?php echo ossn_theme_url();?>images/logo.png" />
            </div>	-->
            <div class="description">
            	<?php echo ossn_print('', array(ossn_site_settings('site_name'))); ?>
				<img src="<?php echo ossn_site_url('themes/goblue/images/login1.png'); ?>" class="imglogin" width="500px" height="400px"/>
            </div>
              <!--   <div class="buttons">
            	<a href="<//?php echo ossn_site_url('login');?>" class="btn btn-primary"><//?php echo ossn_print('site:login'); ?></a>
                <a href="<//?php echo ossn_site_url('resetlogin');?>" class="btn btn-warning"><//?php echo ossn_print('reset:login'); ?></a>
            </div>-->
           <!--	 <ul  class="some-icons">
                	<li> <img src="<//?php echo ossn_theme_url();?>images/graduate.png" /></li>
                	<li> <img src="<//?php echo ossn_theme_url();?>images/manager.png" /></li>
                	<li><img src//php echo ossn_theme_url();?>images/meeting.png" /></li>
                	<li><img src="<//?php echo ossn_theme_url();?>images/phone.png" /></li>
					<!--<li><i class="fa fa-globe"></i></li>
                	
             </ul>-->
			 
 	   </div>   
       <div class="col-md-6 signup_enter">
    	<?php 
			$contents = ossn_view_form('signup', array(
        					'id' => 'ossn-home-signup',
        				'action' => ossn_site_url('action/user/register')
	   	 	));
			$heading = "<p>".ossn_print('')."</p>";
			echo ossn_plugin_view('widget/view', array(
						'title' => ossn_print('create:account'),
						'contents' => $heading.$contents,
			));
			?>	       			
       </div>     

</div>