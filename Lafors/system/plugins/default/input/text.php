<?php


$class = 'ossn-text-input';
if(isset($params['class'])){
	$class = $class . $params['class'];
}
$defaults = array(
	'value' => '',
	'disabled' => false,
	'class' => $class,
	'type' => 'text'
);

$params = array_merge($defaults, $params);
$attributes = ossn_args($params);

echo "<input {$attributes} />";