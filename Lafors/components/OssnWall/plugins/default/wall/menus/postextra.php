<?php

$postextra = $params['menu'];
if($postextra && ossn_isLoggedin()) {
		if(!empty($postextra)) {
				foreach($postextra as $menu) {
						foreach($menu as $link) {
								$class = "post-control-" . $link['name'];
								if(isset($link['class'])) {
										$link['class'] = $class . ' ' . $link['class'];
								} else {
										$link['class'] = $class;
								}
								unset($link['name']);
								$link = ossn_plugin_view('output/url', $link);
								echo "<li>".$link."</li>";
						}
				}
		}
}
