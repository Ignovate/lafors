<?php

if ($params['groups']) {
	echo "<div class='group-search-items'>";
    foreach ($params['groups'] as $group) {
		$owner = ossn_user_by_guid($group->owner_guid);
        ?>
		
        <div class="row">
        	<div class="col-md-3 col-sm-2 col-xs-4">
	          <?php if($group->coverURL() != ""): ?>
			<img id="draggable" src="<?php echo $group->coverURL(); ?>" width="125" height="130" style="margin-top:13px;"/>
					 <?php endif; ?>
					 <?php if($group->coverURL() == ""): ?>
			 <img src="<?php echo ossn_site_url("components/OssnGroups/images/search_group.png"); ?>" width="100" height="100"/>
					 <?php endif; ?>
            </div>
			<div class="col-md-9 col-sm-10 col-xs-8">
	            <div class="group-search-details">
    	            <a class="group-name" href="<?php echo ossn_site_url(); ?>group/<?php echo $group->guid; ?>"><?php echo $group->title; ?></a>
					 <p class="ossn-group-search-by"><?php echo ucfirst(ossn_print(''));?><?php echo $group->description;?></p>
					  <p class="ossn-group-search-by"><?php echo ossn_print('');?><a href="<?php echo $owner->profileURL();?>"><?php echo $owner->fullname;?></a></p>
           	 	</div>
			</div>

        </div>


    <?php
    }
	echo "</div>";
}
?>
