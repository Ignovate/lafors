<?php

$postcontrols = $params['menu'];
if($postcontrols){
?>
<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-link" data-target="#">
	<i class="fa fa-sort-desc"></i>
</a>
<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
            <?php
                foreach ($postcontrols as $menu) {
                    foreach ($menu as $link) {
					 	$class = "post-control-".$link['name'];
					 	if(isset($link['class'])){
							$link['class'] = $class.' '.$link['class'];	
						} else {
							$link['class'] = $class;
						}						
						unset($link['name']);
						$link = ossn_plugin_view('output/url', $link);						
                        ?>
                        <li><?php echo $link; ?></li>
                    <?php
                    }
                }
            ?>
    </ul>
<?php 
}
