<?php



$class = 'ossn-textarea-input';
if(isset($params['class'])){
	$class = $class . $params['class'];
}
$value = (isset($params['value'])) ? $params['value'] : '';

$defaults = array(
	'disabled' => false,
	'class' => $class,
);
$params = array_merge($defaults, $params);
$attributes = ossn_args($params);

echo "<textarea {$attributes}>{$value}</textarea>";