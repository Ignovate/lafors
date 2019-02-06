<?php

 ?>
<div class="ossn-layout-admin">
	<?php echo ossn_plugin_view('theme/page/elements/system_messages', array(
						'admin' => true
	  	  )); 
	?>    
    <div class="row">
		<div class="page-title"><?php echo $params['title']; ?></div>
    	<div class="col-md-12 contents">
    	 	<?php echo $params['contents']; ?>
    	</div>
	</div>
</div>    