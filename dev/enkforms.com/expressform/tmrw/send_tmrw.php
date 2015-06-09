<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>TMRW Booth Furnishings Order</title>
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

$request = $_POST['SpecialReq'];

$lights1 = $_POST['lights1'];


$epower1 = $_POST['epower1'];
$epower2 = $_POST['epower2'];
$epower3 = $_POST['epower3'];
$epower4 = $_POST['epower4'];
$epower5 = $_POST['epower5'];
$epower6 = $_POST['epower6'];
$epower7 = $_POST['epower7'];

$misc_furn1 = $_POST['misc_furn1'];
$misc_furn2 = $_POST['misc_furn2'];
$misc_furn3 = $_POST['misc_furn3'];
$misc_furn4 = $_POST['misc_furn4'];
$misc_furn5 = $_POST['misc_furn5'];


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
$subject = " $company, Booth # $booth, COTERIE/SOLE/TMRW BOOTH Furnishings $order_type"; 
$esubject = " $company, Booth # $booth, COTERIE/SOLE/TMRW Electrical Order $order_type";
$msubject = " $company, Booth # $booth, COTERIE/SOLE/TMRW Mannequins & Hangers $order_type";

$notes = stripcslashes($notes);
$booth_dims = stripcslashes($booth_size); 

$message = "";
$emessage = "";
$mmessage = "";


$sfixtures = str_replace(" foot","'",$fixtures);

$boothinfo = "
Booth Size: " . $square_feet ."
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



$lights = "";
if ($lights1 > 0) { $lights = $lights . "
1000 w Par Can Light : qty $lights1"; }

if ( strlen($lights) > 0 ) { $lights = "

ADDITIONAL LIGHTING" . $lights;}


$epower = "";
if ($epower1 > 0) {$epower = $epower . "
500 watts of power : qty $epower1"; }
if ($epower2 > 0) {$epower = $epower . "
1000 watts of power : qty $epower2"; }
if ($epower3 > 0) {$epower = $epower . "
1500 watts of power : qty $epower3"; }
if ($epower4 > 0) {$epower = $epower . "
Multi Box (4 Outlets) : qty $epower4"; }
if ($epower5 > 0) {$epower = $epower . "
Plug-in strip (8 Outlets): qty $epower5"; }
if ($epower6 > 0) {$epower = $epower . "
2000 watts of power: qty $epower6";}
if ($epower7 > 0) {$epower = $epower . "
2500 watts of power: qty $epower7";}

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
Table - 48\" wide x 23\" deep x 30\" high, black : qty $misc_furn4"; }
if ($misc_furn5 > 0) { $misc_furn = $misc_furn . " 
Lucite Chair : qty $misc_furn5"; }
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

$spec_req = "";
if ($request <> "Enter any special requests or other comments here") { $spec_req = $spec_req . "

" . $request ."
";}
if ( strlen($spec_req) > 0 ) { $spec_req = "

SPECIAL REQUEST" . $spec_req;}

$boothsizetop = "TMRW SEPTEMBER 2012
EHIBITING COLLECTION NAME:\t$company
BOOTH SIZE:\t\t\t$booth_size
";

$boothsizetopges = "TMRW SEPTEMBER 2012
GES Show # 018002663
EHIBITING COLLECTION NAME:\t$company
BOOTH SIZE:\t\t\t$booth_size
";


$boothsizetopjavits = "TMRW SEPTEMBER 2012 - Event # 14942
EHIBITING COLLECTION NAME:\t$company
BOOTH SIZE:\t\t\t$booth_size
";



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

$message = $order_type . $boothinfo . $swapinfo . $misc_furn . $spec_req . $companyinfo . $mop . $totalq . $date;

$from = "From: COTERIE/SOLE/TMRW EXPRESS FORM - GES";

//mail("mevans@wsashow.com, smaria@enkshows.com, pmonte@ges.com", $subject, "$boothsizetopges $message \f $companyinfo $ccinfoges $checkinfoges", $from);
mail("mevans@wsashow.com, smaria@enkshows.com", $subject,  $message, $from);
mail("enkorders@ges.com, pmonte@ges.com", $subject, "$message \f $companyinfo $ccinfoges $checkinfoges", $from);


$message = $order_type . "
Thank you for your request. This is a summary of what you have requested which has been submitted to GES for the September 2012 COTERIE/SOLE/TMRW. THIS IS NOT A CONFIRMATION. 

If you do not receive an order confirmation from GES within 4 business days please contact the GES office at 800.801.0554 OR 201.375.9191.

Orders received without full payment will not be processed until GES receives payment by either check, wire transfer or credit card.   

Reminder:  Do not duplicate your order by either resubmitting the Express Order form or by completing similar forms from the GuideBook.  If you do so, your order will be duplicated and you will be charged twice. 

" . $message;


mail($email, "COTERIE/SOLE/TMRW GES Order", $message, $from);

$emessage =  $lights . $epower ;
$efrom = "From: COTERIE/SOLE/TMRW EXPRESS FORM - ELECTRICAL";


if (strlen($emessage) > 0) { 
$emessage = $order_type . $emessage . $companyinfo . $mop .  $etotalq . $edate;

//mail("mevans@wsashow.com, smaria@enkshows.com", $esubject, "$boothsizetopjavits $emessage $ccinfo $checkinfoport", $efrom);
mail("mevans@wsashow.com, smaria@enkshows.com", $esubject, $emessage, $efrom);
mail("services@javitscenter.com", $esubject, "$boothsizetopjavits $emessage $ccinfo $checkinfoport", $efrom);

$emessage = $order_type . "
Thank you for your request. This is a summary of your electrical request which has been submitted to Javits Electrical Services for the September 2012 COTERIE/SOLE/TMRW. THIS IS NOT A CONFIRMATION. 

If you do not receive an order confirmation from JAVITS ELECTRICAL within 4 business days please contact the JAVITS ELECTRICAL SERVICES OFFICE AT 877-452-8487.

Orders received without full payment will not be processed until The Javits Center receives payment by either check, wire transfer or credit card.   

Reminder:  Do not duplicate your order by either resubmitting the Express Order form or by completing similar forms from the GuideBook.  If you do so, your order will be duplicated and your will be charged twice. 

" . $emessage ; 
mail($email, "COTERIE/SOLE/TMRW Electrical Order", "$emessage $checkinfojj", $efrom); }

$mmessage = $mmessage . $fmannequin . $mmannequin . $kmannequin . $hangers;
$mfrom = "From: COTERIE/SOLE/TMRW EXPRESS FORM - MANNEQUINS/HANGERS";


if (strlen($mmessage) > 0) { 
$mmessage = $order_type . $mmessage . $companyinfo . $mop .  $mtotalq . $mdate;

//mail("mevans@wsashow.com, smaria@enkshows.com", $msubject, "$boothsizetop $mmessage $ccinfo $checkinfodnb", $mfrom);
mail("mevans@wsashow.com, smaria@enkshows.com", $msubject, $mmessage, $mfrom);
mail("enkorders@dbrentaldisplays.com", $msubject, "$boothsizetop $mmessage $ccinfo $checkinfodnb", $mfrom);

$mmessage = $order_type . "
Thank you for your request. This is a summary of your mannequin & hanger request which has been submitted to D&B Rental Displays for the September 2012 COTERIE/SOLE/TMRW. THIS IS NOT A CONFIRMATION. 

If you do not receive an order confirmation from D&B RENTAL DISPLAYS within 4 business days please contact the D&B RENTAL OFFICE AT 239.263.7167.

Orders received without full payment will not be processed until D&B Rental Displays receives payment by either check, wire transfer or credit card. 

Reminder:  Do not duplicate your order by either resubmitting the Express Order form or by completing similar forms from the GuideBook.  If you do so, your order will be duplicated and you will be charged twice. 

" . $mmessage ; 
mail($email, "COTERIE/SOLE/TMRW Mannequin/Hanger Order", $mmessage, $mfrom); }

?>

<table align="center" border=0 cellpadding=0 cellspacing=0 width=1131 style='border-collapse: collapse'>
 <tr>
 <td><img src="images/COTERIE_SOLE_TMRW_HEADER_SEP12.jpg"  alt="COTERIE" width="1130"  align="middle"></td>
 </tr>
 <tr>
 <td>
<p align="center" ><span style="font-size: 20.0pt; font-family: Arial, Helvetica, sans-serif; color:#F00"><br />
<b>This is NOT a confirmation of your request.</b><br /><br /></span><span style="font-size: 14.0pt; font-family: Arial, Helvetica, sans-serif;">Thank you for your request to GES. This is your web confirmation only. Please allow 4 business days for requests to be processed. When your request is processed you will receive an order confirmation via email or fax. Orders received without full payment will not be processed until payment by either check, wire transfer or credit card is received and posted by the respective supplier.<br />
&nbsp;<br /></span></p>
</td>
</tr>
<tr><td>
<span style="font-size: 14.0pt; font-family: Arial, Helvetica, sans-serif; text-align:left">IF YOU DO NOT RECEIVE AN ORDER CONFIRMATION WITHIN 4 BUSINESS DAYS, PLEASE CONTACT:<br /><br />
&bull;&ensp;FURNISHINGS/LIGHTS:<br />
&emsp;GES: 800.801.0554 OR 201.375.9191<br /><br />

&bull;&ensp;ELECTRICAL:<br />
&emsp;JAVITS CENTER OFFICE: 877-452-8487<br /><br />

&bull;&ensp;BOOTHSEAL: 646.243.0811<br /><br />

&bull;&ensp;MANNEQUINS / HANGERS:<br />
&emsp;D&B RENTAL DISPLAYS: 239-263-7167<br /></span></td></tr>
</table>
</body>
</html>