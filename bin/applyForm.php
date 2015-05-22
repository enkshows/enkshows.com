<?php
require(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'form-utils.php');
require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'ClassMathGuard.php');

// Captcha check
if (!MathGuard::checkResult(@$_REQUEST['mathguard_answer'], @$_REQUEST['mathguard_code'])) {
    $response = array(
        'status'=>"error",
        'error_message' => "SORRY, ANSWER IS INCORRECT. PLEASE TRY AGAIN AND CLICK SUBMIT",
    );
    header('Content-type: application/json');
    echo json_encode($response);
    exit;
}

$db_table_name = 'apply_form_entries';

$fields = get_apply_form_fields();

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
        "CIRCUIT_JAN"=>"accessoriecircuit@enkshows.com",
        "CIRCUIT_MAY"=>"accessoriecircuit@enkshows.com",
        "CIRCUIT_AUG"=>"accessoriecircuit@enkshows.com",
        "CHILDRENSCLUB"=>"rlevin@enkshows.com",
        "CHILDRENSCLUB_JAN"=>"rlevin@enkshows.com",
        "CHILDRENSCLUB_MAR"=>"rlevin@enkshows.com",
        "CHILDRENSCLUB_AUG"=>"rlevin@enkshows.com",
        "CHILDRENSCLUB_OCT"=>"rlevin@enkshows.com",
        "FRAICHE"=>"accessoriecircuit@enkshows.com",
        "ENKCHINA"=>"enkchina@enkshows.com",
        "ENKSHANGHAI"=>"enkchina@enkshows.com",
        "ENKBEIJING"=>"enkchina@enkshows.com",
        "ENKNYC"=>"enknyc@enkshows.com",
        "ENKVEGAS"=>"enkvegas@enkshows.com",
        "WSA"=>"dbertelsen@advanstar.com",
        "COTERIE"=>"coterieinquires@enkshows.com",
        "INTERMEZZO"=>"intermezzocollections@enkshows.com",
        "INTERMEZZO_JAN"=>"intermezzocollections@enkshows.com",
        "INTERMEZZO_MAY"=>"intermezzocollections@enkshows.com",
        "INTERMEZZO_AUG"=>"intermezzocollections@enkshows.com",
        "SOLE"=>"kheneghan@advanstar.com",
        "TMRW"=>"tmrw@enkshows.com",
        "WHITENEWYORK"=>"enkmilan@enkshows.com",
        "CLEARWHITE"=>"clearwhite@enkshows.com",
        "RISHI"=>"go.rishi@gmail.com",
    );
    $default_recepient = "enkforms@gmail.com";


//echo "showName = ".$_POST['showName']."\n";
//echo "recepients[showName] = ".$recepients[$_POST['showName']]."\n";


    $showName = $_POST['showName'];
    if (isset($recepients[$showName])) {
        $recepient = $recepients[$showName];
    } else {
        $recepient = "enkforms@gmail.com";
    }

//override before launch
$another_address = $recepient;
//$another_address = "enkforms@gmail.com";


$toName = "ENK Forms";
$toEmail = "enkforms@gmail.com";
$fromName = "Apply Form";
$fromEmail = "noreply@localhost.com";
$headers = 'From: enkforms@gmail.com' . "\r\n" .
    		'Reply-To: enkforms@gmail.com' . "\r\n" .
    		'X-Mailer: PHP/' . phpversion();
$theSubject = $_POST['firstName']." from ".$_POST['companyName']." for ".$_POST['showName']." submitted";
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
	$subject = 'Apply Form failed';
	$content = $body;
	mail($recipient, $subject, $content, $headers);
	exit;
}

?>

