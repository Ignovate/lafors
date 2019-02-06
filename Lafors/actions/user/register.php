<?php

header('Content-Type: application/json');

$user['username'] = input('username');
//$user['firstname'] = input('firstname');
//$user['lastname'] = input('lastname');
$user['email'] = input('email');
$user['phone'] =input('phone');
$user['password'] = input('password');
$user['repassword'] = input('repassword');
$user['profession'] = input('profession');
//$user['mobile'] = input('mobile');
//$user['college'] = input('college');

$fields = ossn_user_fields_names();
foreach($fields['required'] as $field){
	$user[$field] = input($field);
}

if (empty($user)) {
    foreach ($user as $field => $value) {
        if (empty($value)) {
            $json['error'] = '1';
        }
    }
}
if (isset($json['error']) && !empty($json['error'])) {
    echo json_encode($json);
    exit;
}
if ($user['repassword'] !== $user['password']) {
    $em['dataerr'] = ossn_print('password:error:matching');
    echo json_encode($em);
    exit;
}



$add = new OssnUser;
$add->username = $user['username'];
$add->mobile=$user['phone'];
//$add->first_name = $user['firstname'];
//$add->last_name = $user['lastname'];
$add->email = $user['email'];
$add->password = $user['password'];
$add->repassword = $user['repassword'];
$add->profession = $user['profession'];
//$add->mobile = $user['mobile'];
//$add->college = $user['college'];
//$add->sendactiviation = true;
if($add->profession == "student"){
	$add->sendactiviation = false;
}
else{
	$add->sendactiviation = true;
}

foreach($fields as $items){
	foreach($items as $field){
		$add->{$field} = $user[$field];
	}
}

if (!$add->isUsername()) {
    $em['dataerr'] = ossn_print('username:error');
    echo json_encode($em);
    exit;
}
if (!$add->isPassword()) {
    $em['dataerr'] = ossn_print('password:error');
    echo json_encode($em);
    exit;
}
if($add->isOssnUsername()){
    $em['dataerr'] = ossn_print('username:inuse');
    echo json_encode($em);
    exit;	
}

if($add->isOssnEmail()){
    $em['dataerr'] = ossn_print('email:inuse');
    echo json_encode($em);
    exit;	
}
//check if email is valid email 
if(!$add->isEmail()){
    $em['dataerr'] = ossn_print('email:invalid');
    echo json_encode($em);
    exit;		
}
if ($add->addUser()) {
    $em['success'] = 1;
	if($add->profession != "student"){
    $em['datasuccess'] = ossn_print('account:created:email');
	}
	else
	{
		$em['datasuccess'] = ossn_print('account:created:student');
	}
    echo json_encode($em);
    exit;
} else {
    $em['dataerr'] = ossn_print('account:create:error:admin');
    echo json_encode($em);
    exit;
}
/////////////////////////////////////////////////////////////////////////////
	//      SmsGatewayCenter.com One Time Password (OTP) Example               //
	//      This script executes OTP and sends an SMS to authenticate user     //
	/////////////////////////////////////////////////////////////////////////////
	/////////////////////////////////////////////////////////////////////////////
	//             Lets start the session                                      //
	//             and end it in 6 minutes                                     //
	/////////////////////////////////////////////////////////////////////////////
	session_start();
	session_set_cookie_params(360);
	
	/////////////////////////////////////////////////////////////////////////////
	//   Since we are not using database call, lets create users array         //
	//   with their respective phone numbers to send out OTP to their mobile   //
	/////////////////////////////////////////////////////////////////////////////
	$getuser = array('user1' => '123456','user2' => '234567','user3' => '345678',);
	$getmobile = array('user1' => '9889653634','user2' => '9889653634','user3' => '9889653634',);
	
	/////////////////////////////////////////////////////////////////////////////
	// Function to Initiate SMS Message with SMS Gatewaycenter.com using CURL  //
	/////////////////////////////////////////////////////////////////////////////
	function smsgatewaycenter_com_Send($mobile, $sendmessage, $debug=false){
		$username="RAGHAVENDRARAO";
		$password="raghavendra123@";
		$message=$sendmessage;
		$sender="TESTID"; //ex:INVITE
		$mobile_number=$mobile;
		$url="login.bulksmsgateway.in/sendmessage.php?user=".urlencode($username)."&password=".urlencode($password)."&mobile=".urlencode($mobile)."&message=".urlencode($sendmessage)."&sender=".urlencode($sender)."&type=".urlencode('3');
		#echo $url;exit;
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$curl_scraped_page = curl_exec($ch);
		curl_close($ch);
		
		if ($debug) {
			echo "Response: <br><pre>" . $curl_scraped_page . "</pre><br>";
		}
		return($curl_scraped_page);
	}

	/////////////////////////////////////////////////////////////////////////////
	//      Function to generate and append OTP code within the message        //
	/////////////////////////////////////////////////////////////////////////////
	function smsgatewaycenter_com_OTP($length = 4, $chars = '0123456789'){
		$chars_length = (strlen($chars) - 1);
		$string = $chars{rand(0, $chars_length)};
		for ($i = 1; $i < $length; $i = strlen($string)){
			$r = $chars{rand(0, $chars_length)};
			if ($r != $string{$i - 1}) $string .=  $r;
		}
		return $string;
	}

	/////////////////////////////////////////////////////////////////////////////
	//           If Debug is set to true below, then response from             //
	//         SMSGatewayCenter.com API will be printed on the screen          //
	/////////////////////////////////////////////////////////////////////////////
	$debug = false; //Set to true if you want to see the response
	
	/////////////////////////////////////////////////////////////////////////////
	//     If user has not posted anything, lets load the user login page      //
	/////////////////////////////////////////////////////////////////////////////
	
	if (empty($_POST)){
		$i = 0;
		echo '   
		<html>
			<body>
				<h1>One Time Password Form</h1>
				<form method="POST">
				<table border=1>
					<tr>
						<td>Username:</td>
						<td><input type="text" id="username" name="username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" id="password" name="password"></td>
					</tr>
					<tr>
						<td> </td>
						<td><input type=submit name="sendsms" value="Get OTP" OnClick="smsgatewaycenter_com_Send(this.form);"></td>
					</tr>
				</table>
				</form>
			</body>
		</html>';
	}

	/////////////////////////////////////////////////////////////////////////////
	//   If form has been submitted by the user, lets create OTP or validate   //
	/////////////////////////////////////////////////////////////////////////////
	
	if (isset($_POST['sendsms'])){
		$_SESSION['smsgatewaycenterotp'] = smsgatewaycenter_com_OTP(); //Generate OTP
		/////////////////////////////////////////////////////////////////////////////
		//             Lets validate user credentials with getuserarray            //
		/////////////////////////////////////////////////////////////////////////////
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if ($password != $getuser[$_POST['username']] || ((empty($_POST['username']) && (!empty($_POST['password'])))) || (empty($_POST['password']) && (!empty($_POST['username'])))){
			echo 'Please enter a valid username or password!'; //username and password does not match
		}
		elseif ((!empty($_POST['submit'])) && (empty($_POST['password'])) && (empty($_POST['username']))){
			echo 'No username or password entered'; //Empty form submitted
		}
		elseif ($password == $getuser[$_POST['username']]){
			/////////////////////////////////////////////////////////////////////////////            
			// User has successfully validated credentials, lets append OTP and send   //
			// and send the SMS to recipient's mobile number to authenticate OTP       //
			/////////////////////////////////////////////////////////////////////////////       
			smsgatewaycenter_com_Send($getmobile[$_POST['phone']],'Dear '.$username.'! Please authenticate your OTP. Your One Time password is: '.$_SESSION['smsgatewaycenterotp'],$debug);
			echo '
			<html>
				<body>
					<h1>Authenticate OTP (One Time Password)</h1>
					<p>We have sent an SMS to your registered phone number, please authenticate your one time password entering below.</p>
					<form method="POST">
					<table border=1>
						<tr>
							<td>Your one time password (OTP):</td>
							<td><input type="text" name="getsmsgatewaycenterotp"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type=submit name="submitotp" value="Authenticate OTP"></td>
						</tr>
					</table>
					</form>
				</body>
			</html>';
		}
	}
	elseif (isset($_POST['submitotp'])){
		///////////////////////////////////////////////////////////////////////////// 
		//      Lets validate user's OTP and validate with the stored session      //
		/////////////////////////////////////////////////////////////////////////////
		$sgc_otp = $_POST['getsmsgatewaycenterotp'];
		if($_SESSION['smsgatewaycenterotp'] == $sgc_otp){
			echo '
			<html>
				<body>
					<h2>You\'ve been successfully verified your One-Time Password</h2>
				</body>
			</html>';
		} else { 
			echo'
			<html>
				<body>
					<h2>Wrong Password!</h2>
				</body>
			</html>';
		}
	}
