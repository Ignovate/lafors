 <?php

 
?>
<div>
    <?php
    if (!empty($params['menu'])) {
		echo '<a role="button" data-toggle="dropdown" class="btn-action" data-target="#" aria-expanded="true"><i class="fa fa-sort-desc"></i></a>';
		echo '<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">';
        foreach ($params['menu'] as $menu) {
            foreach ($menu as  $link) {
				$class = "profile-menu-extra-".$link['name'];
				if(isset($link['class'])){
					$link['class'] = $class.' '.$link['class'];	
				} else {
					$link['class'] = $class;
				}
				unset($link['name']);
				$link = ossn_plugin_view('output/url', $link);
                echo "<li>{$link}</li>";
            }
        }
		echo "</ul>";
    }
    ?>
</div>