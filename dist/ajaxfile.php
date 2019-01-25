<?php
session_set_cookie_params(600);
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');

include 'functions.php';

$data = json_decode(file_get_contents("php://input"));

$request = $data->request;

function sendMessage($chatID, $messaggio, $token) {
    //echo $messaggio . "\n";

    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
    $url = $url . "&text=" . urlencode($messaggio);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function sendOTPMessage($phone, $messaggio, $token) {
    //echo $messaggio . "\n";
	$url = "https://api-dev.vbeecore.com/api/ezcall/call_out?phone=".$phone."&account_id=16&input_text=".urlencode($messaggio)."&token=".$token;
	//print_r($url); die;
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);

    curl_close($ch);
    return $result;
}

function start_with($needle, $haystack) {
    $length = strlen($needle);
    return (substr($haystack, 0, $length) === $needle);
}

function detect_number($number) {
	$carriers_number = array(
    '096'  => 'Viettel',
    '097'  => 'Viettel',
    '098'  => 'Viettel',
    '0162' => 'Viettel',
    '0163' => 'Viettel',
    '0164' => 'Viettel',
    '0165' => 'Viettel',
    '0166' => 'Viettel',
    '0167' => 'Viettel',
    '0168' => 'Viettel',
    '0169' => 'Viettel',
	'032' => 'Viettel',
    '033' => 'Viettel',
    '034' => 'Viettel',
    '035' => 'Viettel',
    '036' => 'Viettel',
    '037' => 'Viettel',
    '038' => 'Viettel',
    '039' => 'Viettel',
	'086' => 'Viettel',

	'089'  => 'Mobifone',
    '090'  => 'Mobifone',
    '093'  => 'Mobifone',
    '0120' => 'Mobifone',
    '0121' => 'Mobifone',
    '0122' => 'Mobifone',
    '0126' => 'Mobifone',
    '0128' => 'Mobifone',
	'070' => 'Mobifone',
    '079' => 'Mobifone',
    '077' => 'Mobifone',
    '076' => 'Mobifone',
    '078' => 'Mobifone',

	'088'  => 'Vinaphone',
    '091'  => 'Vinaphone',
    '094'  => 'Vinaphone',
    '0123' => 'Vinaphone',
    '0124' => 'Vinaphone',
    '0125' => 'Vinaphone',
    '0127' => 'Vinaphone',
    '0129' => 'Vinaphone',
	'083' => 'Vinaphone',
    '084' => 'Vinaphone',
    '085' => 'Vinaphone',
    '081' => 'Vinaphone',
    '082' => 'Vinaphone',

    '0993' => 'Gmobile',
    '0994' => 'Gmobile',
    '0995' => 'Gmobile',
    '0996' => 'Gmobile',
    '0997' => 'Gmobile',
    '0199' => 'Gmobile',
	'059' => 'Gmobile',

    '092'  => 'Vietnamobile',
    '0186' => 'Vietnamobile',
    '0188' => 'Vietnamobile',
	'056' => 'Vietnamobile',
    '058' => 'Vietnamobile',

    '095'  => 'SFone'
	);
    $number = str_replace(array('-', '.', ' '), '', $number);

    // $number is not a phone number
    if (!preg_match('/^(03|07|08|05|01[2689]|09)[0-9]{8}$/', $number)) return false;

    // Store all start number in an array to search
    $start_numbers = array_keys($carriers_number);
	$arr = array();
    foreach ($start_numbers as $start_number) {
        // if $start number found in $number then return value of $carriers_number array as carrier name
        if (start_with($start_number, $number)) {
            return $carriers_number[$start_number];
        }
    }

    // if not found, return false
    return false;
}

// Add record
if($request == 2) {

  $message = '';
  $result = array();
  $result['err'] = array();
  $checkUserData = "";
  
  if(!detect_number($data->phone)) {
	$result['err'][] = 'Số điện thoại không hợp lệ';
  }
  else if (!filter_var($data->email, FILTER_VALIDATE_EMAIL)) {
	$result['err'][] = 'Email không đúng định dạng';
  }
  $url = "https://cp-dev.aicallcenter.vn/api/check?username=".$data->phone."&email=".$data->email."&phone=".$data->phone;
  $ch = curl_init();
  $optArray = array(
	   CURLOPT_URL => $url,
	   CURLOPT_RETURNTRANSFER => true
  );
  curl_setopt_array($ch, $optArray);
  $check_result = curl_exec($ch);
  curl_close($ch);

  $check_result = json_decode($check_result);

  if ($check_result->error_code != 0) {
  	$result['err'][] = $check_result->error_msg;
  }
  
  if (!empty($result['err'])) {
  	print_r(json_encode($result));
  	exit;
  } else {
  	unset($result['err']);
  	$username = $data->phone;
  	$name = $data->name;
  	$email = $data->email;
  	$phone = $data->phone;
  	$congty = $data->congty;
  	$tongdai = $data->tongdai;
  	$password = $data->password;
  	$time = date("H:i:s A d-m-Y");

  	$otp_key = rand(1000,9999);//tạo random mã OTP với 4 số

  	$token = 'kgtypEVLYLVTHiknplNLpgMob9N2omuMHZkZcfdpZuNaVunyopX10aSZOgPtYTa+LNyHyJe1w4V0Zdyg23YuAw==';
  	$_SESSION['otp_key'] = $otp_key;
  	$otp_key = implode(' ',str_split($otp_key)); 
  	$messaggio = 'Xin cảm ơn '.$name.' đã đăng ký dịch vụ tổng đài AI Call Center. Mã âu ti pi của bạn là: '.$otp_key.' . Nhắc lại : '.$otp_key.', Xin cảm ơn.';
  	sendOTPMessage($phone, $messaggio, $token);
  	print_r(json_encode($result));
  	exit;
  }
}

if($request == 3){
	$otp_status = 0;
	$otp_code = $data->otp_code;
	if (isset($_SESSION['otp_key'])) {
		if(intval($_SESSION['otp_key']) === $otp_code) {
			//print_r($_SESSION['otp_key']);
			$otp_status = 1; // otp is right
			$name = $data->name;
			$email = $data->email;
			$phone = $data->phone;
			$congty = $data->congty;
			$tongdai = $data->tongdai;
			$password = $data->password;
			$time = date("H:i:s A d-m-Y");
			$url = "https://cp-dev.aicallcenter.vn/api/register?username=".$phone."&password=".$password."&re_password=".$password."&name=".$name."&email=".$email."&phone=".$phone;
			
			$ch = curl_init();
			  $optArray = array(
				   CURLOPT_URL => $url,
				   CURLOPT_RETURNTRANSFER => true
			  );
  			curl_setopt_array($ch, $optArray);
  			$save_result = curl_exec($ch);
  			curl_close($ch);

  			$save_result = json_decode($save_result);

  			if ($save_result->error_code == 0) {
  				// insert user successs, then send message to telegram
			  $message = "Thông tin khách hàng đăng ký qua trang chủ \n";
			  $message .= "Thời gian : $time \n \n";
			  $message .= "Tên tổng đài : $tongdai \n";
			  $message .= "Tên công ty : $congty \n";
			  $message .= "Họ tên : $name \n";
			  $message .= "Email : $email \n";
			  $message .= "SĐT : $phone \n";
				$token = "767334988:AAGcY-DXflkxxeto4cpyWSg3n4bPLCZYTSw";
				$chatid = "-251898214";
			  sendMessage($chatid, $message, $token);
  			}
		
		} else {
			$otp_status = 0; // wrong otp
		}
	} else {
		$otp_status = 3; //expri session otp
	}
	echo $otp_status;
	exit;
}

if($request == 4){
	$retry_status = 0;
	
	$name = $data->name;
	$username = $data->phone;
  	$email = $data->email;
  	$phone = $data->phone;
  	$congty = $data->congty;
  	$tongdai = $data->tongdai;
  	$password = $data->password;
	  
	$otp_key = rand(1000,9999);//tạo random mã OTP với 4 số
	  
	 $allow_send = 0;
	  
	  //retry first send
	  if (!isset($_SESSION['RETRY'])) {
		  $_SESSION['RETRY'] = time() + 60;
		  $allow_send = 1;
		  $token = 'kgtypEVLYLVTHiknplNLpgMob9N2omuMHZkZcfdpZuNaVunyopX10aSZOgPtYTa+LNyHyJe1w4V0Zdyg23YuAw==';
		  $_SESSION['otp_key'] = $otp_key;
		  $otp_key = implode(' ',str_split($otp_key)); 
  	$messaggio = 'Xin cảm ơn '.$name.' đã đăng ký dịch vụ tổng đài AI Call Center. Mã âu ti pi của bạn là: '.$otp_key.' . Nhắc lại : '.$otp_key.', Xin cảm ơn.';
		  $sendOTPStatus = sendOTPMessage($phone, $messaggio, $token);
  		  $sendOTPStatus = json_decode($sendOTPStatus);


		  if(isset($sendOTPStatus->call_id)) {
  			$retry_status = 1;
  		  } else {
  			$retry_status = 2;
  		  }
	  } else { // check time to re-send after 60 seconds
		  if (time() - $_SESSION['RETRY'] <= 0) {
			$allow_send = 0;
		  } else {
			$allow_send = 1;
			unset ($_SESSION["RETRY"]);
		  }
	  }
	  
	
	  echo $retry_status;
	  exit;
	  
}



