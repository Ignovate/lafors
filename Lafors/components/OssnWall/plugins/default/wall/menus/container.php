<?php

if(!empty($params['menu'])){ 
	foreach($params['menu'] as $item){
		$name = OssnTranslit::urlize($item[0]['name']);
?><li class="item ossn-wall-container-menu-<?php echo $name;?>" data-name="<?php echo $name;?>"><?php echo $item[0]['text'];?></li>  
<?php
	}
}