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

?>

<?php
//$hash = md5("group"); ?>
 <!-- <ul id="menu-content" class="menu-content collapse out"> 
<li data-toggle="collapse" data-target="#<//?php echo $hash;?>" class="<//?php echo $section;?>collapsed active <//?php echo $expend;?>">
        	<a class="<//?php $item;?>" href="javascript:void(0);"><i class="fa fa-connectdevelop fa-lg" aria-hidden="true"></i><//?php echo ("Lafors Groups");?><span class="arrow"></span></a>
     </li>
<ul class="sub-menu collapse" id="<//?php echo $hash;?>">-->
<form autocomplete="off" method="post" action="http://localhost/Lafors/search" enctype="multipart/form-data">
<li ><i class="sicon fa fa-graduation-cap" aria-hidden="true"></i><button class="btn1" style="" type="submit" value="Student" name="lafors_category">Students Corner</button></li>
<li ><i class="sicon fa fa-empire" aria-hidden="true"></i><button class="btn1" type="submit" value="SME" name="lafors_category">SME Meet</button></li>
<li ><i class="sicon fa fa-user-secret" aria-hidden="true"></i><button class="btn1" type="submit" value="Human Resource" name="lafors_category">HR Groups</button></li>
<li ><i class="sicon fa fa-angellist" aria-hidden="true"></i><button class="btn1" type="submit" value="Placement Officer" name="lafors_category">Placement Officers</button></li>
<li ><i class="sicon1 fa fa-binoculars" aria-hidden="true"></i><button class="btn1" type="submit" value="submit"><?php echo ("Lafors Connect"); ?></button></li>
</form>
<?php 	}
		
	echo "</ul>";
} ?>
       <!-- </ul>-->
    </div>
</div>
