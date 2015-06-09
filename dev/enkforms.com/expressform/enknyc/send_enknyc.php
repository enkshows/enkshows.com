<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>ENKNYC Booth Furnishings Order</title>
</head>
<body>

<!-- Reminder: Add the link for the 'next page' (at the bottom) --> 
<!-- Reminder: Change 'YourEmail' to Your real email --> 

<?php

$ip = $_POST['ip']; 
$httpref = $_POST['httpref']; 
$httpagent = $_POST['httpagent']; 
$visitor = $_POST['visitor']; 
$visitormail = $_POST['visitormail']; 
$notes = $_POST['notes'];
$attn = $_POST['attn'];

$order_type = $_POST['ordertype'];

$catval = $_POST['catval'];
$fixtures = $_POST['fixemail'];
$tables = $_POST['tableemail'];

$swap = $_POST['swap'];
$swapshelves = $_POST['swapshelves'];
$swapracks = $_POST['swapracks'];
$swapone = $_POST['swapone'];

$add_tracks1 = $_POST['add_tracks1'];
$add_tracks2 = $_POST['add_tracks2'];
$add_tracks3 = $_POST['add_tracks3'];

$add_lights1 = $_POST['add_lights1'];
$add_lights2 = $_POST['add_lights2'];
$add_lights3 = $_POST['add_lights3'];

$epower1 = $_POST['epower1'];
$epower2 = $_POST['epower2'];
$epower3 = $_POST['epower3'];
$epower4 = $_POST['epower4'];
$epower5 = $_POST['epower5'];

$misc_furn1 = $_POST['misc_furn1'];
$misc_furn2 = $_POST['misc_furn2'];
$misc_furn3 = $_POST['misc_furn3'];
$misc_furn4 = $_POST['misc_furn4'];
$misc_furn5 = $_POST['misc_furn5'];
$misc_furn6 = $_POST['misc_furn6'];
$misc_furn7 = $_POST['misc_furn7'];
$misc_furn8 = $_POST['misc_furn8'];

$fmann1 = $_POST['f_mann_1'];
$fmann2 = $_POST['f_mann_2'];
$fmann3 = $_POST['f_mann_3'];
$fmann4 = $_POST['f_mann_4'];
$fmann5 = $_POST['f_mann_5'];
$fmann6 = $_POST['f_mann_6'];
$fmann7 = $_POST['f_mann_7'];
$fmann8 = $_POST['f_mann_8'];

$mmann1 = $_POST['m_mann_1'];
$mmann2 = $_POST['m_mann_2'];
$mmann3 = $_POST['m_mann_3'];
$mmann4 = $_POST['m_mann_4'];

$kmann1 = $_POST['k_mann_1'];
$kmann2 = $_POST['k_mann_2'];
$kmann3 = $_POST['k_mann_3'];
$kmann4 = $_POST['k_mann_4'];
$kmann5 = $_POST['k_mann_5'];

$ahang = $_POST['a_hang'];
$ahangclip = $_POST['a_hang_clip'];
$khang = $_POST['k_hang'];
$khangclip = $_POST['k_hang_clip'];

$contact = $_POST['contact'];
$contact_cell = $_POST['contact_cell'];
$company = $_POST['company'];
$street = $_POST['street'];
$city = $_POST['city-st-zip'];
$email = $_POST['email'];
$booth = $_POST['booth'];
$booth_size = $_POST['booth_size'];
$square_feet = $_POST['square_feet'] . " square feet";

$credit = $_POST['credit'];
$exp_date = $_POST['exp_date'];
$cardholder = $_POST['cardholder'];
$ccv = $_POST['ccv'];
$billing_street = $_POST['billing_street'];
$billing_city = $_POST['billing_city'];

$checknumges = $_POST['checknumges'];
$checkamtges = $_POST['checkamtges'];
$checkdateges = $_POST['checkdateges'];
$checknumport = $_POST['checknumjj'];
$checkamtport = $_POST['checkamtjj'];
$checkdateport = $_POST['checkdatejj'];
$checknumdnb = $_POST['checknumdnb'];
$checkamtdnb = $_POST['checkamtdnb'];
$checkdatednb = $_POST['checkdatednb'];

$paytype = $_POST['paytype'];
$nothinger = $_POST['nothinger'];

$subtotal = $_POST['subtotalval'];
$pst = $_POST['pstval'];
$pstsubtotal = $_POST['pstsubtotalval'];
$tax = $_POST['taxval'];
$total = $_POST['totalval'];

$esubtotal = $_POST['esubtotalval'];
$etax = $_POST['etaxval'];
$etotal = $_POST['etotalval'];

$msubtotal = $_POST['msubtotalval'];
$mtax = $_POST['mtaxval'];
$mtotal = $_POST['mtotalval'];

$attn = $attn ; 
$subject = " $company, Booth # $booth, ENKNYC BOOTH Furnishings $order_type"; 
$esubject = " $company, Booth # $booth, ENKNYC Electrical Order $order_type";
$msubject = " $company, Booth # $booth, ENKNYC Mannequins & Hangers $order_type";

$notes = stripcslashes($notes); 

$message = "";
$emessage = "";
$mmessage = "";

$category = "";
if ($catval == 1) {$category = "Designer's Collective";}
if ($catval == 2) {$category = "Blue";}
if ($catval == 3) {$category = "TMRW";}

$sfixtures = str_replace(" foot","'",$fixtures);

$boothinfo = "
Booth Size: " . $square_feet ."
Category: " . $category . "
Standard Fixtures: " . $sfixtures ;
$boothinfo .= "
 
Standard Tables: " . $tables . "
";

$swapinfo = "";
$shelves = "";
$racks = "";
if ($swap == "on") {
   if ($swapone == "EZ" || $swapshelves == 1) {$shelves = " 1  EZ Shelf ";}   
   if ($swapone == "GR" || $swapracks == 1) {$racks = " 1  8' Garment Rack ";}
   if ($swapshelves > 1) {$shelves = " $swapshelves  EZ Shelves";}
   if ($swapracks > 1) {$racks = " $swapracks  8' Gartment Racks";}
   $swapinfo = "
Swap Standard Fixtures for:
" . $shelves . "
" . $racks . "
";}


$add_tracks = "";
if ($add_tracks1 > 0) {$add_tracks = $add_tracks . "
1 Track 4 Halogen Lights : qty $add_tracks1"; }
if ($add_tracks2 > 0) {$add_tracks = $add_tracks . "
1 Track 5 Halogen Lights : qty $add_tracks2"; }
if ($add_tracks3 > 0) {$add_tracks = $add_tracks . "
1 Track 6 Halogen Lights : qty $add_tracks3"; }
if ( strlen($add_tracks) > 0 ) { $add_tracks = "

ADDITIONAL TRACKS" . $add_tracks;}

$add_lights = "";
if ($add_lights1 > 0) { $add_lights = $add_lights . "
2 Halogen Light Fixture (added to existing track) : qty $add_lights1"; }
if ($add_lights2 > 0) { $add_lights = $add_lights . "
3 Halogen Light Fixtures (added to existing track) : qty $add_lights2"; }
if ($add_lights3 > 0) { $add_lights = $add_lights . "
4 Halogen Light Fixtures (added to existing track) : qty $add_lights3"; }
if ( strlen($add_lights) > 0 ) { $add_lights = "

ADDITIONAL LIGHTING" . $add_lights;}


$epower = "";
if ($epower1 > 0) {$epower = $epower . "
500 watts of power : qty $epower1"; }
if ($epower2 > 0) {$epower = $epower . "
1000 watts of power : qty $epower2"; }
if ($epower3 > 0) {$epower = $epower . "
1500 watts of power : qty $epower3"; }
if ($epower4 > 0) {$epower = $epower . "
1500 watts of power (FOR STEAMER ONLY) : qty $epower4"; }
if ($epower5 > 0) {$epower = $epower . "
6-plug multi strip : qty $epower5"; }
if ( strlen($epower) > 0 ) { $epower = "

ELECTRIC POWER" . $epower;}




$misc_furn = "";
if ($misc_furn1 > 0) { $misc_furn = $misc_furn . " 
Garment Rack - 8' long by 68\" high, steel, freestanding : qty $misc_furn1"; }
if ($misc_furn2 > 0) { $misc_furn = $misc_furn . " 
Garment Rack - 4' long by 68\" high, steel, freestanding : qty $misc_furn2"; }
if ($misc_furn3 > 0) { $misc_furn = $misc_furn . " 
EZ Shelf - 58\" wide by 72\" high by 11 3/4\" deep (11\" between shelves) : qty $misc_furn3"; }
if ($misc_furn4 > 0) { $misc_furn = $misc_furn . " 
Ottoman - 40\" wide by 48\" long, wood base with black velvet cushion : qty $misc_furn4"; }
if ($misc_furn5 > 0) { $misc_furn = $misc_furn . " 
Table - 48\" wide x 23\" deep x 30\" high, black : qty $misc_furn5"; }
if ($misc_furn6 > 0) { $misc_furn = $misc_furn . " 
Lucite Chair : qty $misc_furn6"; }
if ( strlen($misc_furn) > 0 ) { $misc_furn = "

MISCELLANEOUS FURNISHINGS" . $misc_furn;}

$fmannequin = "";
if ($fmann1 > 0) { $fmannequin = $fmannequin . "
Size: 4/6,  Black Dress Form, Wood Base, item # JF-F2/4B+BS-02 - $90.00 each : qty $fmann1"; }
if ($fmann2 > 0) { $fmannequin .= "
Size: 4/6,  Beige Dress Form, Wood Base, item # JF-F2/4W+BS-01 - $90.00 each : qty $fmann2"; }
if ($fmann3 > 0) { $fmannequin .= "
Size: 6/8,  Black Dress Form, Wood Base, item # JF-F6/8BK+BS-02 - $90.00 each : qty $fmann3"; }
if ($fmann4 > 0) { $fmannequin .= "
Size: 6/8  Beige Dress Form, Wood Base, item # JF-F6/8W+BS-01 - $90.00 each : qty $fmann4"; }
if ($fmann5 > 0) { $fmannequin .= "
Size: 4/6,  Black Dress Form, Round Metal Base, item # JF-F2/4BK+BS-04 - $90.00 each : qty $fmann5"; }
if ($fmann6 > 0) { $fmannequin .= "
Size: 4/6,  Beige Dress Form, Round Metal Base, item # JF-F2/4W+BS-04 - $90.00 each : qty $fmann6"; }
if ($fmann7 > 0) { $fmannequin .= "
Size: 6/8,  Black Dress Form, Round Metal Base, item # JF-F6/8BK+BS-04 - $90.00 each : qty $fmann7"; }
if ($fmann8 > 0) { $fmannequin .= "
Size: 6/8  Beige Dress Form, Round Metal Base, item # JF-F6/8W+BS-04 - $90.00 each : qty $fmann8"; }
if ( strlen($fmannequin) > 0 ) { $fmannequin = "

FEMALE MANNEQUINS" . $fmannequin;}

$mmannequin = "";
if ($mmann1 > 0) { $mmannequin .= "
Size: 40,  Black Dress Form, Wood Base, item #SF38B- $90.00 each : qty $mmann1"; }
if ($mmann2 > 0) { $mmannequin .= "
Size: 40,  Beige Dress Form, Wood Base, item #SF38N - $90.00 each : qty $mmann2"; }
if ($mmann3 > 0) { $mmannequin .= "
Size: 40, Black Dress Form, Round Metal Base, item #JF-33M02+BS-04 - $90.00 each : qty $mmann3"; }
if ($mmann4 > 0) { $mmannequin .= "
Size: 40, Beige Dress Form, Round Metal Base, item #JF-33M01+BS-04 - $90.00 each : qty $mmann4"; }
if ( strlen($mmannequin) > 0 ) { $mmannequin = "

MALE MANNEQUINS" . $mmannequin;}

$kmannequin = "";
if ($kmann1 > 0) { $kmannequin .= "
Size: 6 mo, Beige w/Shoulder, Wood Base, item #JF-11C6M - $55.00 each : qty $kmann1"; }
if ($kmann2 > 0) { $kmannequin .= "
Size: 1-2 yr, Beige w/Shoulder, Wood Base, item #JF-11C2T - $55.00 each : qty $kmann2"; }
if ($kmann3 > 0) { $kmannequin .= "
Size: 3-4 yr, Beige w/Shoulder, Wood Base, item #JF-11C4T - $55.00 each : qty $kmann3"; }
if ($kmann4 > 0) { $kmannequin .= "
Size: 6-8 yr, Beige w/Shoulder, Wood Base, item #JF-11C7T - $55.00 each : qty $kmann4"; }
if ($kmann5 > 0) { $kmannequin .= "
Size: 10-12 yr, Beige w/Shoulder, Wood Base, item #JF-11C12T - $55.00 each : qty $kmann5"; }
if ( strlen($kmannequin) > 0 ) { $kmannequin = "

KIDS MANNEQUINS" . $kmannequin;}

$hangers = "";
if ($ahang > 0) { $hangers .= "
Adult Hangers, Natural Wood/Chrome without clips, item #HA-600NA - $20.00 per pack of 10 : qty $ahang"; }
if ($ahangclip > 0) { $hangers .= "
Adult Hangers, Natural Wood/Chrome with clips, item #HD200204 - $20.00 per pack of 10 : qty $ahangclip"; }
if ($khang > 0) { $hangers .= "
Kids Hangers, Natural Wood/Chrome without clips, item #HD700602 - $20.00 per pack of 10 : qty $khang"; }
if ($khangclip > 0) { $hangers .= "
Kids Hangers, Natural Wood/Chrome with clips, item #HD700601 - $20.00 per pack of 10 : qty $khangclip"; }
if ( strlen($hangers) > 0 ) { $hangers = "

HANGERS" . $hangers;}

$companyinfo = "

CONTACT INFORMATION
EXHIBITING COLLECTION NAME:\t$company
BOOTH NUMBER:\t\t\t$booth
CONTACT:\t\t\t\t$contact
BOOTH SIZE:\t\t\t\t$square_feet
CONTACT CELL:\t\t\t$contact_cell
CONTACT EMAIL:\t\t\t$email
STREET ADDRESS:\t\t\t$street 
CITY, STATE, ZIP:\t\t\t$city
";

$mop = "";
if ($paytype == "cc") { $mop = "
METHOD OF PAYMENT: Credit Card
 
";}
if ($paytype == "check") { $mop = "
METHOD OF PAYMENT: check
 
 ";}
if ($paytype == "wire") { $mop = "
METHOD OF PAYMENT: wire transfer
 
 ";}

$ccinfo = "";
if (strlen($credit) > 0) { 
$ccinfo =  "
Credit Card # $credit 
Exp Date: $exp_date
CCV: $ccv
Card Holder: $cardholder
Billing Street Address: $billing_street
Billing City, State, Zip: $billing_city
";}

$ccinfoges = "";
if (strlen($credit) > 0) { 
$ccinfo =  "
Credit Card # $credit 
Exp Date: $exp_date
Card Holder: $cardholder
Billing Street Address: $billing_street
Billing City, State, Zip: $billing_city
";}

$checkinfoges = "";
if (strlen($checknumges) > 0) { $checkinfoges = "
Check # $checknumges
Check Date: $checkdateges
Check Amount \$$checkamtges
";

}


$checkinfoport = "";
if (strlen($checknumport) > 0) { $checkinfoport = "
Check # $checknumport
Check Date: $checkdateport
Check Amount \$$checkamtport
";

}

$checkinfodnb = "";
if (strlen($checknumdnb) > 0) { $checkinfodnb = "
Check # $checknumdnb
Check Date: $checkdatednb
Check Amount \$$checkamtdnb
";

}



$totalq = "

ITEM SUBTOTAL\t" . number_format($subtotal, 2) . "
PST\t\t\t" . number_format($pst, 2) . "
SUBTOTAL\t\t" . number_format($pstsubtotal, 2) . "
TAX\t\t\t" . number_format($tax, 2) . "
TOTAL\t\t\t" . number_format($total, 2) ." 

Totals are estimates only and subject to change. Actual totals will be verified on your order confirmation

";

$etotalq = "

SUBTOTAL\t" . number_format($esubtotal, 2) . "
TAX\t\t" . number_format($etax, 2) . "
TOTAL\t\t" . number_format($etotal, 2) ." 


Totals are estimates only and subject to change. Actual totals will be verified on your order confirmation.

";

$mtotalq = "

SUBTOTAL\t" . number_format($msubtotal, 2) . "
TAX\t\t" . number_format($mtax, 2) . "
TOTAL\t\t" . number_format($mtotal, 2) ." 


Totals are estimates only and subject to change. Actual totals will be verified on your order confirmation.

";

$date = " 
Date: " . date("m/d/Y");

$message = $order_type . $boothinfo . $swapinfo . $misc_furn . $companyinfo . $mop . $totalq . $date;

$from = "From: ENKNYC EXPRESS FORM - GES";


mail("mevans@wsashow.com, smaria@enkshows.com", $subject,  $message, $from);
mail("enkorders@ges.com", $subject, "$message \f $companyinfo $ccinfoges $checkinfoges", $from);


$message = $order_type . "
Thank you for your request. This is a summary of what you have requested which has been submitted to GES for the July 2012 ENKNYC. THIS IS NOT A CONFIRMATION. 

If you do not receive an order confirmation from GES within 4 business days please contact the GES office at 800.801.0554 OR 201.375.9191.

Orders received without full payment will not be processed until GES receives payment by either check, wire transfer or credit card.  If you have not done so already, go to http://www.enkforms.com/expressform/enknyc/pdfs/GES_CC_AUTHORIZATION.pdf to download the GES credit card authorization form for your convenience. 

Reminder:  Do not duplicate your order by either resubmitting the Express Order form or by completing similar forms from the GuideBook.  If you do so, your order will be duplicated and you will be charged twice. 

" . $message;


mail($email, "ENKNYC GES Order", $message, $from);

$emessage = $add_tracks . $add_lights . $epower ;
$efrom = "From: ENKNYC EXPRESS FORM - ELECTRICAL";


if (strlen($emessage) > 0) { 
$emessage = $order_type . $emessage . $companyinfo . $mop .  $etotalq . $edate;

mail("mevans@wsashow.com, smaria@enkshows.com", $esubject, $emessage, $efrom);
mail("enk@portparties.com", $esubject, "$emessage $ccinfo $checkinfoport", $efrom);

$emessage = $order_type . "
Thank you for your request. This is a summary of your electrical request which has been submitted to Port Electrical Services for the July 2012 ENKNYC. THIS IS NOT A CONFIRMATION. 

If you do not receive an order confirmation from PORT ELECTRICAL within 4 business days please contact the PORT ELECTRICAL SERVICES OFFICE AT 212.977.7414.

Orders received without full payment will not be processed until Port Electrical Services receives payment by either check, wire transfer or credit card.  If you have not done so already, go to  http://www.enkforms.com/expressform/enknyc/pdfs/ENKNYC_Guide_P23.pdf to download the Port Electrical Services credit card authorization form for your convenience. 

Reminder:  Do not duplicate your order by either resubmitting the Express Order form or by completing similar forms from the GuideBook.  If you do so, your order will be duplicated and you will be charged twice. 

" . $emessage ; 
mail($email, "ENKNYC Electrical Order", $emessage, $efrom); }

$mmessage = $mmessage . $fmannequin . $mmannequin . $kmannequin . $hangers;
$mfrom = "From: ENKNYC EXPRESS FORM - MANNEQUINS/HANGERS";


if (strlen($mmessage) > 0) { 
$mmessage = $order_type . $mmessage . $companyinfo . $mop .  $mtotalq . $mdate;

mail("mevans@wsashow.com, smaria@enkshows.com", $msubject, $mmessage, $mfrom);
mail("enkorders@dbrentaldisplays.com", $msubject, "$mmessage $ccinfo $checkinfodnb", $mfrom);

$mmessage = $order_type . "
Thank you for your request. This is a summary of your mannequin & hanger request which has been submitted to D&B Rental Displays for the July 2012 ENKNYC. THIS IS NOT A CONFIRMATION. 

If you do not receive an order confirmation from D&B RENTAL DISPLAYS within 4 business days please contact the D&B RENTAL OFFICE AT 239.263.7167.

Orders received without full payment will not be processed until D&B Rental Displays receives payment by either check, wire transfer or credit card. If you have not done so already, go to  http://www.enkforms.com/expressform/enknyc/pdfs/ENKNYC_Guide_P36.pdf to download the D&B Rental Display's payment authorization form for your convenience. 

Reminder:  Do not duplicate your order by either resubmitting the Express Order form or by completing similar forms from the GuideBook.  If you do so, your order will be duplicated and you will be charged twice. 

" . $mmessage ; 
mail($email, "ENKNYC Mannequin/Hanger Order", $mmessage, $mfrom); }

?>

<table align="center" border=0 cellpadding=0 cellspacing=0 width=1131 style='border-collapse:
 collapse'>
 
 <tr>
 <td>
 <img src="images/ENKNYCheader.png"  alt="ENKNYC"  width=1150 height=325 align="middle"></p>
 </td>
 </tr>
 <tr>
 <td>
<p align="center" ><span style="font-size: 20.0pt; font-family: Arial, Helvetica, sans-serif; color:#F00"><br />
<b>This is NOT a confirmation of your request.</b><br /><br /></span><span style="font-size: 14.0pt; font-family: Arial, Helvetica, sans-serif;">Thank you for your request to GES and/or Port Parties. This is your web request acknowledgement. Please allow 4 business days for requests to be processed. When your request is processed you will receive an order confirmation via email or fax.<br />
&nbsp;<br />
IF YOU DO NOT RECEIVE AN ORDER CONFIRMATION WITHIN 4 BUSINESS DAYS, PLEASE CONTACT THE GES OFFICE AT 800.801.0554 OR 201.375.9191.<br />
<br />
IF YOU ORDERED ELECTRICAL AND DO NOT RECEIVE AN ORDER CONFIRMATION WITHIN 4 BUSINESS DAYS, PLEASE CONTACT THE PORT PARTIES OFFICE AT 212.977.7414<br />
<br />
IF YOU ORDERED MANNEQUINS/HANGERS AND DO NOT RECEIVE AN ORDER CONFIRMATION WITHIN 4 BUSINESS DAYS, PLEASE CONTACT THE D&B DISPLAYS OFFICE AT 239.263.7167
<br />
<br />
Orders received without full payment will not be processed until payment by either check, wire transfer, or credit card is received and posted.
<br />
<br />
<br />
</span><br />
</p>
</td>
</tr>
</table>
</body>
</html>