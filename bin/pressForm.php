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


$db_table_name = 'press_form_entries';



$fields = get_press_form_fields();



$field_vals = array();

foreach ($fields as $field => $field_data) {

    if ($field == 'id' || $field == 'date') {

        continue;

    }

    $field_vals[$field] = $_POST[$field];

}



ENK_save_submission($field_vals, $db_table_name);



$body = ENK_get_email_notification_body($_POST);





$toName = "ENK Forms";

$toEmail = "enkforms@gmail.com";

$fromName = "Press Form";

$fromEmail = "noreply@localhost.com";

$headers = 'From: enkforms@gmail.com' . "\r\n" .

    		'Reply-To: enkforms@gmail.com' . "\r\n" .

    		'X-Mailer: PHP/' . phpversion();

$theSubject = $_POST['firstName']." from ".$_POST['companyName']." submitted";

$theAltBody = $body;





$mail = new PHPMailer();



$mail->From = $fromEmail;

$mail->FromName = $fromName;

$mail->AddAddress($toEmail, $toName);

//override before launch
//$mail->AddAddress("press@enkshows.com","PRESS");





$mail->WordWrap = 50;

$mail->IsHTML(true);



$mail->Subject = $theSubject;

$mail->Body = $body;

$mail->AltBody = $theAltBody;



if(!$mail->Send()) {

	$recipient = 'enkforms@gmail.com';

	$subject = 'Press Form failed';

	$content = $body;

	mail($recipient, $subject, $content, $headers);

	exit;

}



?>



