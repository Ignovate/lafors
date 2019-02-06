<?php
	if(ossn_isLoggedin()){		
		$hide_loggedin = "hidden-xs hidden-sm";
	}
?>
<!-- ossn topbar -->
<div class="topbar">
	<div class="container">
		<div class="row">
			<?php if(ossn_isLoggedin()){ ?>
			<div class="col-md-1 left-side left">
				
				<div class="topbar-menu-left">
					<li id="sidebar-toggle" data-toggle='0'>
						<a role="button" data-target="#"> <i class="fa fa-th-list"></i></a>
					</li>
				</div>
				
			</div>
			<?php } ?>
			<div class="col-md-3 site-name text-right logoimg<?php echo $hide_loggedin;?>">
				<span><!--<a href="<//?php echo ossn_site_url();?>"><//?php echo ossn_site_settings('site_name');?>-->
				<a href="<?php echo ossn_site_url();?>"><img height="50px" src="<?php echo ossn_site_url('logo.png');?>" alt="Lafors Logo"/></a></span>
			</div>
			<?php if(ossn_isLoggedin()){ ?>
			<div class="col-md-3 text-right right-side">
				<div class="topbar-menu-right">
					<li class="ossn-topbar-dropdown-menu">
						<div class="dropdown">
						<?php
							if(ossn_isLoggedin()){						
								echo ossn_plugin_view('output/url', array(
									'role' => 'button',
									'data-toggle' => 'dropdown',
									'data-target' => '#',
									'text' => '<i class="fa fa-sort-desc"></i>',
								));									
								echo ossn_view_menu('topbar_dropdown'); 
							}
							?>
							
						</div>
					</li>                
					<?php
						if(ossn_isLoggedin()){
							echo ossn_plugin_view('notifications/page/topbar');
						}
						?>
				</div>
				</div>
				<?php } ?>
				<?php if(!ossn_isLoggedin()){ ?>
				  <div class="col-md-9 mobileview">
            	<?php echo ossn_view_form('login', array(
            			'id' => 'ossn-login',
           				'action' => ossn_site_url('action/user/login'),
 		 	      	));
				?>
            </div>
			<?php } ?>
		</div>
	</div>
</div>
<!-- ./ ossn topbar -->