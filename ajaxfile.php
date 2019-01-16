<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

include "config.php";

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

    '090'  => 'Mobifone',
    '093'  => 'Mobifone',
    '0120' => 'Mobifone',
    '0121' => 'Mobifone',
    '0122' => 'Mobifone',
    '0126' => 'Mobifone',
    '0128' => 'Mobifone',

    '091'  => 'Vinaphone',
    '094'  => 'Vinaphone',
    '0123' => 'Vinaphone',
    '0124' => 'Vinaphone',
    '0125' => 'Vinaphone',
    '0127' => 'Vinaphone',
    '0129' => 'Vinaphone',

    '0993' => 'Gmobile',
    '0994' => 'Gmobile',
    '0995' => 'Gmobile',
    '0996' => 'Gmobile',
    '0997' => 'Gmobile',
    '0199' => 'Gmobile',

    '092'  => 'Vietnamobile',
    '0186' => 'Vietnamobile',
    '0188' => 'Vietnamobile',

    '095'  => 'SFone'
	);
    $number = str_replace(array('-', '.', ' '), '', $number);

    // $number is not a phone number
    if (!preg_match('/^(01[2689]|09)[0-9]{8}$/', $number)) return false;

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
if($request == 2){

  $token = "767334988:AAGcY-DXflkxxeto4cpyWSg3n4bPLCZYTSw";
  $chatid = "-251898214";
  $message = '';
  $result = array();
  $result['err'] = array();
  
  if(!detect_number($data->phone)) {
	  $result['err'][] = 'Số điện thoại không hợp lệ';
  }
  
  $stmt = $con->prepare("SELECT * FROM users WHERE phone = ?");
  $stmt->bind_param("s", $data->phone);
  $stmt->execute();
  $stmt->store_result();
  
  $row_cnt = $stmt->num_rows;
  
  if($row_cnt > 0) {
	  $result['err'][] = 'Số điện thoại đã tồn tại';
  }
  
		
if (!filter_var($data->email, FILTER_VALIDATE_EMAIL)) {
	$result['err'][] = 'Email không đúng định dạng';
} 

  $stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
  $stmt->bind_param("s", $data->email);
  $stmt->execute();
  $stmt->store_result();
  
  $row_cnt = $stmt->num_rows;
  
  if($row_cnt > 0) {
	  $result['err'][] = 'Email đã tồn tại';
  }
  
  if(count($result['err']) > 0) {
	  print_r(json_encode($result));
  } else {
	  $stmt = $con->prepare("INSERT INTO users (name, email, phone, congty, tongdai) VALUES (?, ?, ?, ?, ?)");
	  $stmt->bind_param("sssss", $name, $email, $phone, $congty, $tongdai);
	  
	  $name = $data->name;
	  $email = $data->email;
	  $phone = $data->phone;
	  $congty = $data->congty;
	  $tongdai = $data->tongdai;

	  $sql = $stmt->execute();
	  
	  if ($sql) {
		  $time = date("H:i:s A d-m-Y");
		  $message .= "Thông tin khách hàng đăng ký qua trang chủ \n";
		  $message .= "Thời gian : $time \n \n";
		  $message .= "Tên tổng đài : $tongdai \n";
		  $message .= "Tên công ty : $congty \n";
		  $message .= "Họ tên : $name \n";
		  $message .= "Email : $email \n";
		  $message .= "SĐT : $phone \n";
	  }
	  sendMessage($chatid, $message, $token);
  }
  
  
$stmt->close();
$con->close();
  exit;
}


