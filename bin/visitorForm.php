<?php
require(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'form-utils.php');
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

$db_table_name = 'visitor_form_entries';

$fields = get_visitor_form_fields();

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
        "Exhibitor"=>"kshkreli@enkshows.com",
        "Press"=>"enkpress@enkshows.com",
        "Retail"=>"enkpress@enkshows.com",
        "Other"=>"kshkreli@enkshows.com",
        
		
        "ccExhibitor"=>"rlevin@enkshows.com",
        "chinaExhibitor"=>"enkchina@enkshows.com",
        "vegasExhibitor"=>"enkvegas@enkshows.com",
        "wsaExhibitor"=>"dbertelsen@advanstar.com",
        "whiteExhibitor"=>"clearwhite@enkshows.com",
        "nycExhibitor"=>"mike@projectshow.com",
        
        "ccOther"=>"rlevin@enkshows.com",
        "chinaOther"=>"enkchina@enkshows.com",
        "vegasOther"=>"enkvegas@enkshows.com",
        "wsaOther"=>"dbertelsen@advanstar.com",
        "whiteOther"=>"clearwhite@enkshows.com",
        "nycOther"=>"mike@projectshow.com",
		
        "WSAPress"=>"dbertelsen@advanstar.com",
    );
    $default_recepient = "enkforms@gmail.com";


//echo "visitory_type = ".$_POST['visitorType']."\n";
//echo "recepients[visitory_type] = ".$recepients[$_POST['visitorType']]."\n";


    $visitory_type = $_POST['visitorType'];
    if (isset($recepients[$visitory_type])) {
        $recepient = $recepients[$visitory_type];
    } else {
        $recepient = "enkforms@gmail.com";
    }

//override before launch
$another_address = $recepient;
//$another_address = "enkforms@gmail.com";


$toName = "ENK Forms";
$toEmail = "enkforms@gmail.com";
$toEmail = "alvarez.peter.14@gmail.com";
$fromName = "Visitor Form";
$fromEmail = "noreply@localhost.com";
$headers = 'From: enkforms@gmail.com' . "\r\n" .
    		'Reply-To: enkforms@gmail.com' . "\r\n" .
    		'X-Mailer: PHP/' . phpversion();
$theSubject = $_POST['companyName']." ".$_POST['showName']." Tour Request";
$theAltBody = $body;


//require("phpmailer.php");

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
	$subject = 'Visitor Form failed';
	$content = $body;
	mail($recipient, $subject, $content, $headers);
	exit;
}

?>

