<?php


$class = 'ossn-radio-input';
if(isset($params['class'])){
	$class = $class . $params['class'];
}
$value = (isset($params['value'])) ? $params['value'] : '';
$values = (isset($params['options'])) ? $params['options'] : array();

$defaults = array(
	'disabled' => false,
	'class' => $class,
	'type' => 'radio',
);

$params = array_merge($defaults, $params);
unset($params['value']);
unset($params['options']);

$attributes = ossn_args($params);

if(empty($values)){
	return;
}
foreach($values as $item => $label){
	$vars			= array();
	$vars['value'] 	  = $item;
	if(!empty($value) && $value === $item){
		$vars['checked'] = 'checked';
	}
	
	$vars = ossn_args($vars);	
	echo  "<div class='radio-block'><input {$attributes} {$vars} /><span>{$label}</span></div>";
}