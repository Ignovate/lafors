<?php

$sitename = ossn_site_settings('site_name');
if (isset($params['title'])) {
    $title = $params['title'] . ' : ' . $sitename;
} else {
    $title = $sitename;
}
if (isset($params['contents'])) {
    $contents = $params['contents'];
} else {
    $contents = '';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="<?php echo ossn_site_url('themes/goblue/images/afmoi_last.png')?>">
	<?php echo ossn_fetch_extend_views('ossn/endpoint'); ?>
    <?php echo ossn_fetch_extend_views('ossn/site/head'); ?>

    <script>
        <?php echo ossn_fetch_extend_views('ossn/js/head'); ?>
    </script>
</head>

<body>
<div class="ossn-page-loading-annimation">
<div id="loader-wrapper">
<div class="cssload-wrap">
	<div style="margin-top: 86px;">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>
	<div><img src="<?php echo ossn_theme_url();?>images/afmoi_last.png" height="100px" width="100px"></div>
</div>
</div>
</div>

	<div class="ossn-halt ossn-light"></div>
	<div class="ossn-message-box"></div>
	<div class="ossn-viewer" style="display:none"></div>
    
    <div class="opensource-socalnetwork">
    	<?php echo ossn_plugin_view('theme/page/elements/sidebar');?>
    	<!-- <div class="ossn-page-container">
			  <//?php echo ossn_plugin_view('theme/page/elements/topbar');?>
          <div class="ossn-inner-page">    
  	  		  <//?php echo $contents; ?>
          </div>    
		</div>-->
		<div class="ossn-page-container">
			  <?php if(ossn_isLoggedin()){ 
			  			echo ossn_plugin_view('theme/page/elements/topbar');
			  		} else {
			  			echo ossn_plugin_view('theme/page/elements/topbarlogin');
							
					}
			  ?>
          <div class="ossn-inner-page">    
  	  		  <?php echo $contents; ?>
          </div>    
		</div>
    </div>
	
    <?php echo ossn_fetch_extend_views('ossn/page/footer'); ?>           
</body>
</html>
