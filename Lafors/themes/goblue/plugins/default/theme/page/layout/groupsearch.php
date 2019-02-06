<?php
//unused pagebar skeleton when ads are disabled #628 
if(ossn_is_hook('newsfeed', "sidebar:right")) {
	$newsfeed_right = ossn_call_hook('newsfeed', "sidebar:right", NULL, array());
	$sidebar = implode('', $newsfeed_right);
	$isempty = trim($sidebar);
} 
?>
<div class="newsfeed-middle" >

<div class="row">
<?php $category = $params['lafors'];  ?>
<?php  if($category[lafors_category] == "Student"): ?>
<!--<div class="stud_pic">
<div id="stud1" > -->
<img src="http://localhost/Lafors/themes/goblue/images/Students.jpg" style="width:93%" alt="student">


<?php endif; ?>
</div>
</div>
<div class="newsfeed-middle" >
<div class="row">
<?php $category = $params['lafors'];  ?>
<?php  if($category[lafors_category] == "SME"): ?>
<img src="http://localhost/Lafors/themes/goblue/images/Professionals.jpg" style="width:93%"  alt="SME">
<?php endif; ?>
</div>
</div>

<div class="newsfeed-middle" >
<div class="row">
<?php  if($category[lafors_category] == "Placement Officer"): ?>
<img src="http://localhost/Lafors/themes/goblue/images/Placement.jpg" style="width:93%;" alt="Placement Officer">
<?php endif; ?>
</div>
</div>

<div class="newsfeed-middle" >

<div class="row">
<?php  if($category[lafors_category] == "Human Resource"): ?>
<img src="http://localhost/Lafors/themes/goblue/images/Human.jpg" style="width:93%" alt="Human Resource">
<?php endif; ?>
</div>
</div>


<div class="container">
	<div class="row">
		<?php echo ossn_plugin_view('theme/page/elements/system_messages'); ?>    
		<div class="ossn-layout-newsfeed">
			<div class="col-md-2">
				<!--<div class="coloum-left ossn-page-contents">
					<//?php
						if (ossn_is_hook('search', "left")) {
						   	$searchleft = ossn_call_hook('search', "left", NULL, array());
						  		echo implode('', $searchleft);
						}
						?>   
				</div>-->
			</div>
			<div class="col-md-6">
				<div class="newsfeed-middle ossn-page-contents">
					<?php echo $params['content']; ?>
				</div>
			</div>
			<div class="col-md-3">
            	<?php if(!empty($isempty)){ ?>
				<div class="newsfeed-right">
					<?php
						echo $sidebar;
						?>                            
				</div>
                <?php } ?>
			</div>
		</div>
	</div>
	<?php echo ossn_plugin_view('theme/page/elements/footer');?>
</div>