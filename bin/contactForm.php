<?php
require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'form-utils.php');
require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR .  "recaptcha-master/src/ReCaptcha/ReCaptcha.php");

//ReCaptcha Captcha Check
$captcha_secret = "6LfnCQgTAAAAAKEt00Y3qk4YjkoUVsC0VQDPA6h-";
$recaptcha = new \ReCaptcha\ReCaptcha($captcha_secret);
$resp = $recaptcha->verify($_REQUEST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
if(!$resp->isSuccess()) {
    $response = array(
        'status'=>"error",
        'error_message' => "PLEASE CONFIRM THAT YOU ARE NOT A ROBOT.",
    );
    header('Content-type: application/json');
    echo json_encode($response);
    exit;
}

$db_table_name = 'contact_form_entries';

$fields = get_contact_form_fields();

$field_vals = array();
foreach ($fields as $field => $field_data) {
    if ($field == 'id' || $field == 'date') {
        continue;
    }
    $field_vals[$field] = $_POST[$field];
}

ENK_save_submission($field_vals, $db_table_name);

$body = ENK_get_email_notification_body($_POST);

	// This code fragment was inherited from the previous version of the site
	// The result recepient was never used, so this piece is currently commented out

	$another_address = '';
	$recepients = array(
		"CIRCUIT"=>"accessoriecircuit@enkshows.com",
	    "CHILDRENSCLUB"=>"rlevin@enkshows.com",
	    "ENKCHINA"=>"enkchina@enkshows.com",
	    "ENKSHANGHAI"=>"enkchina@enkshows.com",
		"ENKBEIJING"=>"enkchina@enkshows.com",
	    "ENKNYC"=>"enknyc@enkshows.com",
	    "ENKVEGAS"=>"enkvegas@enkshows.com",
	    "WSA"=>"dbertelsen@advanstar.com",
	    "COTERIE"=>"fashioncoterie@enkshows.com",
	    "INTERMEZZO"=>"intermezzocollections@enkshows.com",
	    "SOLE"=>"info@solecommerce.com",
	    "TMRW"=>"tmrw@enkshows.com",
	    "WHITENEWYORK"=>"enkmilan@enkshows.com",
		"CLEARWHITE"=>"clearwhite@enkshows.com",
		"PRESS"=>"press@enkshows.com",
		"BUYER"=>"buyer@enkshows.com",
		"ACCOUNTING"=>"accounting@enkshows.com",
		"OPERATIONS"=>"accounting@enkshows.com",
		"WSASALES"=>"sales@enkshows.com",
		"WSAOPERATIONS"=>"mevans@enkshows.com",
		"ACCOUNTS"=>"emoore@enkshows.com",
	);
	$default_recepient = "enkforms@gmail.com";


//echo "inquiry_type = ".$_POST['InquiryType']."\n";
//echo "recepients[inquiry_type] = ".$recepients[$_POST['InquiryType']]."\n";


	$inquiry_type = $_POST['InquiryType'];
	if (isset($recepients[$inquiry_type])) {
		$recepient = $recepients[$inquiry_type];
	} else {
		$recepient = "enkforms@gmail.com";
	}

//override before launch
$another_address = $recepient;
//$another_address = "enkforms@gmail.com";


$toName = "ENK Forms";
$toEmail = "enkforms@gmail.com";
$toEmail = "alvarez.peter.14@gmail.com";
$fromName = "Contact Form";
$fromEmail = "noreply@localhost.com";
$headers = 'From: enkforms@gmail.com' . "\r\n" .
    		'Reply-To: enkforms@gmail.com' . "\r\n" .
    		'X-Mailer: PHP/' . phpversion();
$theSubject = $_POST['fullName']." from ".$_POST['companyName']." submitted";
$theAltBody = $body;

$mail = new PHPMailer();


$mail->From = $fromEmail;
$mail->FromName = $fromName;
$mail->AddAddress($toEmail, $toName);
$mail->AddAddress($another_address);


$mail->WordWrap = 50;
$mail->IsHTML(true);

$mail->Subject = $theSubject;
$mail->Body = $body;
$mail->AltBody = $theAltBody;


/* debug */
print_r($mail);
/* end debug */


if(!$mail->Send()) {
	$recipient = 'enkforms@gmail.com';
	$subject = 'Contact Form failed';
	$content = $body;
	mail($recipient, $subject, $content, $headers);
	exit;
}

?>

