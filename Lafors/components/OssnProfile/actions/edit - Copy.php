<?php

$entity = ossn_user_by_username(input('username'));
if(!$entity){
	redirect(REF);
}
$user['firstname'] = input('firstname');
$user['lastname'] = input('lastname');
$user['email'] = input('email');
$user['gender'] = input('gender');
$user['username'] = input('username');
$user['mobile'] = input('mobile');
$user['college'] = input('college');
$user['profession'] = input('profession');
$user['location'] = input('location');
$user['designation'] = input('designation');
$user['course'] = input('course');
$user['sub_course'] = input('sub_course');
$user['experience'] = input('experience');
$user['expertise'] = input('expertise');

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
$password = input('password');

$OssnUser = new OssnUser;
$OssnUser->password = $password;
$OssnUser->email = $user['email'];

$OssnDatabase = new OssnDatabase;
$user_get = ossn_user_by_username(input('username'));
if ($user_get->guid !== ossn_loggedin_user()->guid) {
    redirect("home");
}

$params['table'] = 'ossn_users';
$params['wheres'] = array("guid='{$user_get->guid}'");

$params['names'] = array(
    'first_name',
    'last_name',
    'email',
	'mobile',
	'college',
	'profession',
	'location',
	'designation',
	'course',
	'sub_course',
	'experience',
	'expertise'
);
$params['values'] = array(
    $user['firstname'],
    $user['lastname'],
    $user['email'],
	$user['mobile'],
	$user['college'],
	$user['profession'],
	$user['location'],
	$user['designation'],
	$user['course'],
	$user['sub_course'],
	$user['experience'],
	$user['expertise']
);
//check if email is not in user
if($entity->email !== input('email')){
  if($OssnUser->isOssnEmail()){
    ossn_trigger_message(ossn_print('email:inuse'), 'error');
    redirect(REF);
  }
}
//check if email is valid email 
if(!$OssnUser->isEmail()){
    ossn_trigger_message(ossn_print('email:invalid'), 'error');
    redirect(REF);	
}
//check if password then change password
if (!empty($password)) {
    if (!$OssnUser->isPassword()) {
        ossn_trigger_message(ossn_print('password:error'), 'error');
        redirect(REF);
    }
    $salt = $OssnUser->generateSalt();
    $password = $OssnUser->generate_password($password, $salt);
    $params['names'] = array(
        'first_name',
        'last_name',
        'email',
        'password',
        'salt',
		'mobile',
		'college',
		'profession',
	    'location',
	    'designation',
	    'course',
	    'sub_course',
	    'experience',
	    'expertise'
    );
    $params['values'] = array(
        $user['firstname'],
        $user['lastname'],
        $user['email'],
        $password,
        $salt,
		$mobile,
		$college,
		$profession,
	    $location,
	    $designation,
	    $course,
	    $sub_course,
	    $experience,
	    $expertise
    );
}
$language = input('language');
$success  = ossn_print('user:updated');
if(!empty($language) && in_array($language, ossn_get_available_languages())){
	$lang = $language;
} else {
	$lang = 'en';
}
//save
if ($OssnDatabase->update($params)) {
    //update entities
	$user_get->data = new stdClass;
    $guid = $user_get->guid;
    if (!empty($guid)) {
		foreach($fields as $items){
				foreach($items as $field){
						$user_get->data->{$field} = $user[$field];
				}
		}
		$user_get->data->language = $lang;
        $user_get->save();
    }
    ossn_trigger_message($success, 'success');
    redirect(REF);
} 
