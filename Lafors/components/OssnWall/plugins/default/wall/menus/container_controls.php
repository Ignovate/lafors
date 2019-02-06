<?php

if(!empty($params['menu'])){ 
	foreach($params['menu'] as $item){
		$name = OssnTranslit::urlize($item[0]['name']);
?><li class="<?php echo $item[0]['class'];?> ossn-wall-container-control-menu-<?php echo $name;?>"><?php echo $item[0]['text'];?></li>  
<?php
	}
}