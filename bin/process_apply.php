<?php
if ((isset($_POST['showName'])) && (strlen(trim($_POST['showName'])) > 0)) {
	$showName = stripslashes(strip_tags($_POST['showName']));
} else {$showName = 'No showName entered';}
if ((isset($_POST['firstName'])) && (strlen(trim($_POST['firstName'])) > 0)) {
	$firstName = stripslashes(strip_tags($_POST['firstName']));
} else {$firstName = 'No firstName entered';}
if ((isset($_POST['lastName'])) && (strlen(trim($_POST['lastName'])) > 0)) {
	$lastName = stripslashes(strip_tags($_POST['lastName']));
} else {$lastName = 'No lastName entered';}
if ((isset($_POST['contactEmail'])) && (strlen(trim($_POST['contactEmail'])) > 0)) {
	$contactEmail = stripslashes(strip_tags($_POST['contactEmail']));
} else {$contactEmail = 'No contactEmail entered';}
if ((isset($_POST['contactPhone'])) && (strlen(trim($_POST['contactPhone'])) > 0)) {
	$contactPhone = stripslashes(strip_tags($_POST['contactPhone']));
} else {$contactPhone = 'No contactPhone entered';}
if ((isset($_POST['contactFax'])) && (strlen(trim($_POST['contactFax'])) > 0)) {
	$contactFax = stripslashes(strip_tags($_POST['contactFax']));
} else {$contactFax = 'No contactFax entered';}
if ((isset($_POST['companyName'])) && (strlen(trim($_POST['companyName'])) > 0)) {
	$companyName = stripslashes(strip_tags($_POST['companyName']));
} else {$companyName = 'No companyName entered';}
if ((isset($_POST['title'])) && (strlen(trim($_POST['title'])) > 0)) {
	$title = stripslashes(strip_tags($_POST['title']));
} else {$title = 'No title entered';}
if ((isset($_POST['showRoom'])) && (strlen(trim($_POST['showRoom'])) > 0)) {
	$showRoom = stripslashes(strip_tags($_POST['showRoom']));
} else {$showRoom = 'No showRoom entered';}
if ((isset($_POST['website'])) && (strlen(trim($_POST['website'])) > 0)) {
	$website = stripslashes(strip_tags($_POST['website']));
} else {$website = 'No website entered';}
if ((isset($_POST['products'])) && (strlen(trim($_POST['products'])) > 0)) {
	$products = stripslashes(strip_tags($_POST['products']));
} else {$products = 'No products entered';}


ob_start();
?>
<html>
<head>
<style type="text/css">
</style>
</head>
<body>
<table width="550" border="1" cellspacing="2" cellpadding="2">
  <tr bgcolor="#eeffee">
    <td>showName</td>
    <td><?=$showName;?></td>
  </tr>
  <tr bgcolor="#eeffee">
    <td>firstName</td>
    <td><?=$firstName;?></td>
  </tr>
  <tr bgcolor="#eeffee">
    <td>lastName</td>
    <td><?=$lastName;?></td>
  </tr>
  <tr bgcolor="#eeffee">
    <td>contactEmail</td>
    <td><?=$contactEmail;?></td>
  </tr>
  <tr bgcolor="#eeffee">
    <td>contactPhone</td>
    <td><?=$contactPhone;?></td>
  </tr>
  <tr bgcolor="#eeffee">
    <td>contactFax</td>
    <td><?=$contactFax;?></td>
  </tr>
  <tr bgcolor="#eeffee">
    <td>companyName</td>
    <td><?=$companyName;?></td>
  </tr>
  <tr bgcolor="#eeffee">
    <td>title</td>
    <td><?=$title;?></td>
  </tr>
  <tr bgcolor="#eeffee">
    <td>showRoom</td>
    <td><?=$showRoom;?></td>
  </tr>
  <tr bgcolor="#eeffee">
    <td>website</td>
    <td><?=$website;?></td>
  </tr>
  <tr bgcolor="#eeffee">
    <td>products</td>
    <td><?=$products;?></td>
  </tr>
</table>
</body>
</html>

<?
//return;

$body = ob_get_contents();

$toName = 'Rishi Sharma';
$toEmail = 'go.rishi@gmail.com';
$fromName = "ENK Forms";
$fromEmail = "noreply@localhost.com";


require("phpmailer.php");

$mail = new PHPMailer();


$mail->From = $fromEmail;
$mail->FromName = $fromName;
$mail->AddAddress($toEmail, $toName);
//$mail->AddAddress("another_address@example.com","Name 2");


$mail->WordWrap = 50;
$mail->IsHTML(true);

$mail->Subject = "Demo Form: Contact form submitted";
$mail->Body = $body;
$mail->AltBody = "This is the text-only body";

if(!$mail->Send()) {
	$recipient = 'your_email@example.com';
	$subject = 'Contact form failed';
	$content = $body;
	mail($recipient, $subject, $content);
	exit;
}

?>