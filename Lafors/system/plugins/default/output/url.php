<?php

	if(isset($params['href'])){
		$url = $params['href'];
	}
	$text = $params['text'];

	
	if(isset($params['action']) && $params['action'] == true){
		$url = ossn_add_tokens_to_url($url);
	}
	unset($params['text']);
	unset($params['action']);
    unset($params['href']);
	
	$params['href'] = $url;
	$attributes = ossn_args($params);
		
	echo "<a {$attributes}>{$text}</a>";
