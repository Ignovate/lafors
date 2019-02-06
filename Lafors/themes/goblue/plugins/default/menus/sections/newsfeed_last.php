<?php
$menus = $params['menu'];
?>
<div class="sidebar-menu-nav">
          <div class="sidebar-menu">
                 <ul id="menu-content" class="menu-content collapse out">
<?php                        
foreach ($menus as $name => $menu) {
	$section = 'menu-section-'.OssnTranslit::urlize($name).' ';
	$items = 'menu-section-items-'.OssnTranslit::urlize($name).' ';
	$item = 'menu-section-item-'.OssnTranslit::urlize($menu['text']).' ';
	
	$expend = '';
	$icon = "fa-angle-right";
	if($name == 'links'){
		$expend = 'in';
		$icon = "fa-newspaper-o";
	}
	if($name  == 'groups'){
		$icon = "fa-users";
	}
	$hash = md5($name);
    ?>
      <!-- <li data-toggle="collapse" data-target="#<//?php echo $hash;?>" class="<//?php echo $section;?>collapsed active <//?php echo $expend;?>">
        	<a class="<//?php $item;?>" href="javascript:void(0);"><i class="fa <//?php echo $icon;?> fa-lg"></i><//?php echo ossn_print($name);?><span class="arrow"></span></a>
     </li> -->
	 
	 
	 
	 
	 <!--/* <li data-toggle="collapse" data-target="#<//?php echo $hash;?>" class="<//?php echo $section;?>collapsed active <//?php echo $expend;?>">
        	<a class="<//?php $item;?>" href="javascript:void(0);"><i class="fa <//?php echo $icon;?> fa-lg"></i><//?php if($name == 'links'){echo ucfirst(ossn_print('Menu'));}if($name == 'groups'){echo ucfirst(ossn_print('Groups'));}?><span class="arrow"></span></a>
     </li> */
-->	 
  
	 
	 
    <ul class="sub-menu collapse <?php echo $expend;?>" id="<?php echo $hash;?>" class="<?php echo $items;?>"> 
    <?php
	
	echo "<li></li>";
	
	
	if(is_array($menu)){
	    foreach ($menu as $data) {
			$class = 'menu-section-item-'.OssnTranslit::urlize($data['name']);
			$data['class'] = 'menu-section-item-a-'.OssnTranslit::urlize($data['name']);
			unset($data['name']);
			unset($data['icon']);
			unset($data['section']);
			unset($data['parent']);
		
			$link = ossn_plugin_view('output/url', $data);	
	//print_r($menu);
			echo "<li class='{$class}'>{$link}</li>";
			unset($class);
    	}
	}
			
			/* $data1['name'] => 'addgroup';
				$class = 'menu-section-item-'.OssnTranslit::urlize($data['name']);
				$data1['text'] = ossn_print('add:group');
				$data1['url'] = 'javascript:void(0)';
				$data1['id'] = 'ossn-group-add';
				$data['section'] = 'groups'
				$data1['icon'] = ossn_site_url('components/OssnGroups/images/add.png');
				$link1 = ossn_plugin_view('output/url', $data1);	
			echo "<li class='{$class}'>{$link1}</li>";
	unset($class); */
		
	echo "</ul>";
}
?>

<?php
$hash = md5("group"); ?>
 <ul id="menu-content" class="menu-content collapse out"> 
<li data-toggle="collapse" data-target="#<?php echo $hash;?>" class="<?php echo $section;?>collapsed active <?php echo $expend;?>">
        	<a class="<?php $item;?>" href="javascript:void(0);"><i class="fa fa-connectdevelop fa-lg" aria-hidden="true"></i><?php echo ("Lafors Groups");?><span class="arrow"></span></a>
     </li>
<ul class="sub-menu collapse" id="<?php echo $hash;?>">
<form autocomplete="off" method="post" action="http://melonberries.com/Lafors/search" enctype="multipart/form-data">
<li ><i class="fa fa-graduation-cap" aria-hidden="true"></i><button class="btn1" style="" type="submit" value="Student" name="lafors_category">Students Corner</button></li>
<li ><i class="fa fa-empire" aria-hidden="true"></i><button class="btn1" type="submit" value="Professional" name="lafors_category">Professionals Meet</button></li>
<li ><i class="fa fa-user-secret" aria-hidden="true"></i><button class="btn1" type="submit" value="Human Resource" name="lafors_category">HR Groups</button></li>
<li ><i class="fa fa-angellist" aria-hidden="true"></i><button class="btn1" type="submit" value="Placement Officer" name="lafors_category">Placement Officers</button></li>

</form>

         </ul>
		 <form autocomplete="off" method="post" action="http://melonberries.com/Lafors/search" enctype="multipart/form-data">
		 <li id="menu-content" class="<?php echo $section;?>collapsed active <?php echo $expend;?>">
<a><i class="fa fa-binoculars fa-lg" aria-hidden="true"></i></a>
		 <a><button class="btn1" type="submit" value="submit"  style="margin-left: -10px";><?php echo ("Lafors Connect"); ?></button></a>     	
     </li>
	 </form>
    </div>
</div>
