<?php


$class = 'ossn-dropdown-input';
if(isset($params['class'])){
	$class = $class . $params['class'];
}
$value = (isset($params['value'])) ? $params['value'] : '';
$values = (isset($params['options'])) ? $params['options'] : array();

$options = array();
foreach($values as $item => $val){
	$vars			= array();
	$vars['value'] 	= $item;
	
	if(!empty($value) && $value === $item){
		$vars['selected'] = 'selected';
	}
	$options[] = "<option ".ossn_args($vars).">{$val}</option>";
}
$defaults = array(
	'disabled' => false,
	'class' => $class,
);

$params = array_merge($defaults, $params);
unset($params['options']);
$attributes = ossn_args($params);

$values = implode('', $options);
echo "<select {$attributes}>{$values}</select>";
