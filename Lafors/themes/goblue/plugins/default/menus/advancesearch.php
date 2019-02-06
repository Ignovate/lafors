<?php

$menus = $params['menu'];
echo "<div class='ossn-menu-advancesearch'>";
echo '<div class="title">' . ossn_print('result:type') . '</div>';
foreach ($menus as $menu => $val) {
    foreach ($val as $link) {
        $text = ossn_print($link['text']);
		$link = $link['href'];
		$class = OssnTranslit::urlize($menu);
        echo "<li class='ossn-menu-advancesearch-{$class}'>
				<a href='{$link}'>
					<div class='text'>{$text}</div>
				</a>
			</li>";
    }
}
echo '</div>';