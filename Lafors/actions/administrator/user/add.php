<?php


$user['username'] = input('username');
$user['firstname'] = input('firstname');
$user['lastname'] = input('lastname');
$user['email'] = input('email');
$user['password'] = input('password');
$user['type'] = input('type');
$user['mobile'] = input('mobile');
$user['college'] = input('college');
$user['profession'] = input('profession');
$user['location'] = input('location');
$user['designation'] = input('designation');
$user['course'] = input('course');
$user['sub_course'] = input('sub_course');
$user['experience'] = input('experience');
$user['expertise'] = input('expertise');
$user['yearcollege'] = input('yearcollege');
$user['organization'] = input('organization');
$user['willing']= input('willing');
&user['domain'] = input('domain');



$fields = ossn_user_fields_names();
foreach($fields['required'] as $field){
	$user[$field] = input($field);
}

if (!empty($user)) {
    foreach ($user as $field => $value) {
        if (empty($value)) {
            ossn_trigger_message(ossn_print('fields:require'), 'error');
            redirect(REF);
        }
    }
}
$types = array(
    'normal',
    'admin'
);
if (!in_array($user['type'], $types)) {
    ossn_trigger_message(ossn_print('account:create:error:admin'), 'error');
    redirect(REF);
}

$add = new OssnUser;
$add->username = $user['username'];
$add->first_name = $user['firstname'];
$add->last_name = $user['lastname'];
$add->email = $user['email'];
$add->password = $user['password'];
$add->usertype = $user['type'];
$add->mobile = $user['mobile'];
$add->college  = $user['college'];
$add->profession = $user['profession'];
$add->location  = $user['location'];
$add->designation = $user['designation'];
$add->course  = $user['course'];
$add->sub_course  = $user['sub_course'];
$add->experience  = $user['experience'];
$add->expertise  = $user['expertise'];
$add->yearcollege  = $user['yearcollege'];
$add->organization  = $user['organization'];
$add->willing = $user['willing'];
$add->domain = $user['domain'];
$add->validated = true;

foreach($fields as $items){
	foreach($items as $field){
		$add->{$field} = $user[$field];
	}
}

if (!$add->isUsername($user['username'])) {
    ossn_trigger_message(ossn_print('username:error'), 'error');
    redirect(REF);
}
if (!$add->isPassword()) {
    ossn_trigger_message(ossn_print('password:error'), 'error');
    redirect(REF);
}
if($add->isOssnUsername()){
    ossn_trigger_message(ossn_print('username:inuse'), 'error');
    redirect(REF);
}
if($add->isOssnEmail()){
    ossn_trigger_message(ossn_print('email:inuse'), 'error');
    redirect(REF);
}
//check if email is valid email 
if(!$add->isEmail()){
    ossn_trigger_message(ossn_print('email:invalid'), 'error');
    redirect(REF);	
}
if ($add->addUser()) {
    ossn_trigger_message(ossn_print('account:created'), 'success');
    redirect(REF);
} else {
    ossn_trigger_message(ossn_print('account:create:error:admin'), 'error');
    redirect(REF);
}
