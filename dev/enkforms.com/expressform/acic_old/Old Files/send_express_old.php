<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>ACIC Booth Furnishings Order</title>
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


$packa = $_POST['packa'];
$packb = $_POST['packb'];
$cpanel = $_POST['cpanel'];
$packc = $_POST['packc'];
$packd = $_POST['packd'];
$packe = $_POST['packe'];
$lp_qty = $_POST['lp_qty'];
$pp_qty = $_POST['pp_qty'];

$one_add = $_POST['one_add'];


$add_tracks1 = $_POST['add_tracks1'];
$add_tracks2 = $_POST['add_tracks2'];
$add_tracks3 = $_POST['add_tracks3'];

$nothing1 = $_POST['donot1'];
$nothing2 = $_POST['donot2'];
$nothing3 = $_POST['donot3'];

$tr_1 = $_POST['tr_1'];
$tr_2 = $_POST['tr_2'];
$tr_3 = $_POST['tr_3'];
$tr_4 = $_POST['tr_4'];
$tr_5 = $_POST['tr_5'];
$tr_6 = $_POST['tr_6'];
$tr_7 = $_POST['tr_7'];
$tr_8 = $_POST['tr_8'];

$install = $_POST['install'];
$EACinstall = $_POST['EACinstall'];

$wm1 = $_POST['wm1'];
$wm2 = $_POST['wm2'];
$wm3 = $_POST['wm3'];
$wm4 = $_POST['wm4'];
$wm5 = $_POST['wm5'];

$dressing1 = $_POST['dressing1'];
$dressing2 = $_POST['dressing2'];
$dressing3 = $_POST['dressing3'];
$dressing4 = $_POST['dressing4'];

$ez1 = $_POST['ez1'];
$ez2 = $_POST['ez2'];

$add_lights1 = $_POST['add_lights1'];
$add_lights2 = $_POST['add_lights2'];
$add_lights3 = $_POST['add_lights3'];

$misc_furn1 = $_POST['misc_furn1'];
$misc_furn2 = $_POST['misc_furn2'];
$misc_furn3 = $_POST['misc_furn3'];
$misc_furn4 = $_POST['misc_furn4'];
$misc_furn5 = $_POST['misc_furn5'];
$misc_furn6 = $_POST['misc_furn6'];
$misc_furn7 = $_POST['misc_furn7'];
$misc_furn8 = $_POST['misc_furn8'];

$packb_wall_color = $_POST['b_color'];
$packb_paper_length = $_POST['Paper_Feet'];
$panel_color = $_POST['p_color'];
$add_wall_color = $_POST['add_wall'];
$paper_length = $_POST['Add_Paper_Feet'];

$d_white = $_POST['d_white'];
$e_white = $_POST['e_white'];

$autopoles1 = $_POST['autopoles1'];
$autopoles2 = $_POST['autopoles2'];
$autopoles3 = $_POST['autopoles3'];
$autopoles4 = $_POST['autopoles4'];
$autopoles5 = $_POST['autopoles5'];
$autopoles6 = $_POST['autopoles6'];
$autopoles7 = $_POST['autopoles7'];
$autopoles8 = $_POST['autopoles8'];
$autopoles9 = $_POST['autopoles9'];
$autopoles10 = $_POST['autopoles10'];

$standard_carpet = $_POST['carpet_color'];
$cust_standard_carpet = $_POST['cc_color'];
$plush_carpet = $_POST['plush_color'];
$ultra_carpet = $_POST['ultra_color'];
$carpet_type = $_POST['Carpet_Type'];
$carpet_padding = $_POST['adder_padding'];
$remover = $_POST['remover'];

$dimensions =  $_POST['dimensions'];

$contact = $_POST['contact'];
$contact_cell = $_POST['contact_cell'];
$company = $_POST['company'];
$credit = $_POST['credit'];
$billing = $_POST['billing'];
$email = $_POST['email'];
$booth_size = $_POST['booth_size'];
$booth = $_POST['booth'];
$contact = $_POST['contact'];
$exp_date = $_POST['exp_date'];
$check_num = $_POST['checknum'];
$check_amount = $_POST['checkamt'];
$check_date = $_POST['checkdate'];
$paytype = $_POST['paytype'];
$nothinger = $_POST['nothinger'];

$ez_white = $_POST['ez_white'];
$ez_double_white = $_POST['ez_double_white'];

$subtotal = $_POST['subtotalval'];
$tax = $_POST['taxval'];
$total = $_POST['totalval'];

$attn = $attn ; 
$subject = " $company, Booth # $booth, ACIC BOOTH Furnishings"; 


$notes = stripcslashes($notes); 

$message = "";

$booth_pack = "";
if ( $packa > 0 ) { $booth_pack = $booth_pack . "
PACKAGE A : qty $packa"; }
if ( $packb > 0 ) { $booth_pack = $booth_pack . "
PACKAGE B $packb_wall_color wallpaper
$packb_paper_length : qty $packb";}
if ( $cpanel > 0 ) { $booth_pack = $booth_pack . "
COLOR PANELS $panel_color colored pannels
$packb_paper_length : qty $cpanel"; }
if ( $packc > 0 ) { $booth_pack = $booth_pack . "
PACKAGE C : qty $packc"; }
if ( $packd > 0 ) { $booth_pack = $booth_pack . "
PACKAGE D $d_white : qty $packd"; }
if ( $packe > 0 ) { $booth_pack = $booth_pack . "
PACKAGE E $e_white : qty $packe"; }
if ( strlen($one_add) > 0 ) { $booth_pack = $booth_pack . "
Additional item (for booth sizes 10'x13', 10'x16', and 10'x26' ONLY) 
" . $one_add;}
if ( strlen($booth_pack) > 0 ) { $booth_pack = "

BOOTH PACKAGE" . $booth_pack;}

$e_pack = "";
if ( $lp_qty > 0 ) { $e_pack = $e_pack . "
LIGHT PACKAGE : qty $lp_qty"; }
if ( $pp_qty > 0 ) { $e_pack = $e_pack . "
POWER PACKAGE : qty $pp_qty"; }
if ( strlen($e_pack) > 0 ) { $e_pack = "

ELECTRICAL PACKAGE" . $e_pack;}

$spec_req = "";
if (strlen($nothing1) > 0) { $spec_req = $spec_req . "
$nothing1 
";}
if (strlen($nothing2) > 0) { $spec_req = $spec_req . "
$nothing2 
";}
if (strlen($nothing3) > 0) { $spec_req = $spec_req . "
$nothing3 
";}
if ( strlen($spec_req) > 0 ) { $spec_req = "

SPECIAL REQUEST" . $spec_req;}

$add_tracks = "";
if ($add_tracks1 > 0) {$add_tracks = $add_tracks . "
1 TRACK 4 HALOGEN LIGHTS : qty $add_tracks1"; }
if ($add_tracks2 > 0) {$add_tracks = $add_tracks . "
1 TRACK 5 HALOGEN LIGHTS : qty $add_tracks2"; }
if ($add_tracks3 > 0) {$add_tracks = $add_tracks . "
1 TRACK 6 HALOGEN LIGHTS : qty $add_tracks3"; }
if ( strlen($add_tracks) > 0 ) { $add_tracks = "

ADDITIONAL TRACKS" . $add_tracks;}

$tables_risers = "";
if ($tr_1 > 0) { $tables_risers = $tables_risers . "
4 ft long x 2 ft wide x 30 in high TABLE : qty $tr_1"; }
if ($tr_2 > 0) { $tables_risers = $tables_risers . "
6 ft long x 2 ft wide x 30in high TABLE : qty $tr_2"; }
if ($tr_3 > 0) {$tables_risers = $tables_risers . "
8 ft long x 2 ft wide x 30in high TABLE : qty $tr_3"; }
if ($tr_4 > 0) {$tables_risers = $tables_risers . "
4 ft long x 2 ft wide x 42in high TABLE : qty $tr_4"; }
if ($tr_5 > 0) {$tables_risers = $tables_risers . "
6 ft long x 2 ft wide x 42in high TABLE : qty $tr_5"; }
if ($tr_6 > 0) {$tables_risers = $tables_risers . "
8 ft long x 2 ft wide x 42in high TABLE : qty $tr_6"; }
if ($tr_7 > 0) {$tables_risers = $tables_risers . "
4 ft long x 1 ft wide x 1 ft high RISER : qty $tr_7"; }
if ($tr_8 > 0) {$tables_risers = $tables_risers . "
6 ft long x 1 ft wide x 1 ft high RISER : qty $tr_8"; }
if ( strlen($tables_risers) > 0 ) { $tables_risers = "

UNDRAPED WOOD TABLES AND RISERS" . $tables_risers;}

$wall_mounted = "";
if ($wm1 > 0) { $wall_mounted = $wall_mounted . "
Flat SHELF 9-3/4 in x 39-3/4 in (1 meter) : qty $wm1"; }
if ($wm2 > 0) { $wall_mounted = $wall_mounted . "
Slanted SHELF 9-3/4 in x 39-3/4 in (1 meter) : qty $wm2"; }
if ($wm3 > 0) { $wall_mounted = $wall_mounted . "
1-meter GARMENT RACK : qty $wm3"; }
if ($wm4 > 0) { $wall_mounted = $wall_mounted . "
1-meter DISPLAY BAR : qty $wm4"; }
if ($wm5 > 0) { $wall_mounted = $wall_mounted . "
Additional Shelf Brackets : qty $wm5"; }
if ( strlen($wall_mounted) > 0 ) { $wall_mounted = "

WALL MOUNTED ITEMS" . $wall_mounted;}

$dressing = "";
if ($dressing1 > 0) { $dressing = $dressing . "
1 wall panel + 1 side draping : qty $dressing1"; }
if ($dressing2 > 0) { $dressing = $dressing . "
2 wall panels + 1 side draping : qty $dressing2"; }
if ($dressing3 > 0) { $dressing = $dressing . "
Lockable DOOR : qty $dressing3";}
if ($dressing4 > 0) { $dressing = $dressing . "
Additional WALL PANELS : qty $dressing4";}
if ( strlen($dressing) > 0 ) { $dressing = "

DRESSING ROOM PANELS" . $dressing;}

$ez_shelf = "";
if ($ez1 > 0) { $ez_shelf = $ez_shelf . "
Single EZ-Shelf 11.75inx31in shelves-72in Tall $ez_white : qty $ez1"; }
if ($ez2 > 0) { $ez_shelf = $ez_shelf . "
Double EZ-Shelf 11.75inx31in shelves-72in Tall $ez_double_white : qty $ez2";}
if ( strlen($ez_shelf) > 0 ) { $ez_shelf = "

EZ-SHELF" . $ez_shelf;}

$add_lights = "";
if ($add_lights1 > 0) { $add_lights = $add_lights . "
1 halogen light fixture (added to existing track) : qty $add_lights1"; }
if ($add_lights2 > 0) { $add_lights = $add_lights . "
2 halogen light fixtures (added to existing track) : qty $add_lights2"; }
if ($add_lights3 > 0) { $add_lights = $add_lights . "
3 halogen light fixtures (added to existing track) : qty $add_lights3"; }
if ( strlen($add_lights) > 0 ) { $add_lights = "

ADDITIONAL LIGHTING" . $add_lights;}

$misc_furn = "";
if ($misc_furn1 > 0) { $misc_furn = $misc_furn . "
White CHAIR : qty $misc_furn1"; }
if ($misc_furn2 > 0) { $misc_furn = $misc_furn . "
30in round TABLE : qty $misc_furn2"; }
if ($misc_furn3 > 0) { $misc_furn = $misc_furn . "
Wall MIRROR 12in x 48in; : qty $misc_furn3"; }
if ($misc_furn4 > 0) { $misc_furn = $misc_furn . "
Waste basket : qty $misc_furn4"; }
if ($misc_furn5 > 0) { $misc_furn = $misc_furn . "
Chrome Clothes Tree : qty $misc_furn5"; }
if ($misc_furn6 > 0) { $misc_furn = $misc_furn . "
Standing GARMENT RACK : qty $misc_furn6"; }
if ($misc_furn7 > 0) { $misc_furn = $misc_furn . "
3-Meter Cross Bar (lighting support) : qty $misc_furn7"; }
if ($misc_furn8 > 0) { $misc_furn = $misc_furn . "
Full Mirror Panel 38in x 86in : qty $misc_furn8"; }
if ($misc_furn9 > 0) { $misc_furn = $misc_furn . "
Additional Wall Panel 38in x 86in : qty $misc_furn9"; }
if ( strlen($misc_furn) > 0 ) { $misc_furn = "

MISCELANEOUS FURNISHINGS" . $misc_furn;}

$autpoles = "";
if ($autopoles1 > 0) { $autopoles = $autopoles . "
5 ft Single Cross Bar Setup : qty $autopoles1"; }
if ($autopoles2 > 0) { $autopoles = $autopoles . "
10 ft Single Cross Bar Setup : qty $autopoles2"; }
if ($autopoles3 > 0) { $autopoles = $autopoles . "
5 ft Double Cross Bar Setup : qty $autopoles3"; }
if ($autopoles4 > 0) { $autopoles = $autopoles . "
10 ft Double Cross Bar Setup : qty $autopoles4"; }
if ($autopoles5 > 0) { $autopoles = $autopoles . "
1M Four Shelf Auto-pole Package : qty $autopoles5"; }
if ($autopoles6 > 0) { $autopoles = $autopoles . "
1.5 M Four Shelf Auto-pole Package : qty $autopoles6"; }
if ($autopoles7 > 0) { $autopoles = $autopoles . "
Additional Flat Shelf 9-3/4in x 1 Meter Shelf : qty $autopoles7"; }
if ($autopoles8 > 0) { $autopoles = $autopoles . "
Additional Flat Shelf 9-3/4in x 1.5 Meter Shelf : qty $autopoles8"; }
if ($autopoles9 > 0) { $autopoles = $autopoles . "
Additional 5in Auto Pole Cross Bar : qty $autopoles9"; }
if ($autopoles10 > 0) { $autopoles = $autopoles . "
Additional 10in Auto Pole Cross Bar : qty $autopoles10"; }
if ( strlen($autopoles) > 0 ) { $autopoles = "

AUTOPOLES" . $autopoles;}

$carpet = "";
if ( strlen($carpet_type) > 0) { $carpet = $carpet . $carpet_type ."
"; }
if ( strlen($carpet_padding) > 0) { $carpet = $carpet . $carpet_padding ."
"; }
if ( strlen($remover) > 0) { $carpet = $carpet . $remover ."
"; }
if ( strlen($carpet) > 0 ) { $carpet = "

CARPET
" . $carpet;}

$wallpaper = "";
if (strlen($add_wall_color) > 0) {$wallpaper = $wallpaper . "Color: " .$add_wall_color . " - " .  $paper_length . " 
";}
if (strlen($install) > 0) {$wallpaper = $wallpaper . $install . " " . $EACinstall;}
if ( strlen($wallpaper) > 0 ) { $wallpaper = "

WALLPAPER
" . $wallpaper;}

$message = $message . $booth_pack .$e_pack . $spec_req . 
$add_tracks . $add_lights . $tables_risers . $wall_mounted . $dressing .
$ez_shelf . $misc_furn . $autopoles . $carpet . $wallpaper . "

COMPANY INFO
COMPANY:\t\t$company
BOOTH NUMBER:\t$booth
CONTACT:\t\t$contact
BOOTH SIZE:\t\t$booth_size
CONTACT CELL:\t\t$contact_cell
BILLING ADRESS:\t$billing 
";

if ($paytype == "cc") { $message = $message ."
Paying by credit card

CREDIT CARD: $credit
EXPIRATION DATE: $exp_date";}

if ($paytype == "check") { $message = $message ."
Paying by check
CHECK #: $check_num
CHECK AMOUNT: $check_amt
CHECK DATE: $check_date";}

$total = "

SUBTOTAL " . number_format($subtotal, 2) . "
TAX      " . number_format($tax, 2) . "
TOTAL    " . number_format($total, 2) 
;



$date = "

Date: " . date("m/d/Y");

$message = $message . $total . $date;

$from = "From: ACIC GES EXPRESS FORM";


mail("enkorders@ges.com, smaria@enkshows.com, mevans@enkshows.com, ", $subject,  $message, $from);

$message = "Thank you for your order - The order below has been submitted to GES and ENK International for Circuit.Intermezzo May 2012

" . $message;


mail($email, "Circuit.Intermezzo Order", $message, $from);

?>

<table align="center" border=0 cellpadding=0 cellspacing=0 width=1131 style='border-collapse:
 collapse'>
 
 <tr>
 <td>
 <img src="IMAGES/ACIC_May12_Header.png"  alt="ACIC" width="1130"  align="middle"></p>
 </td>
 </tr>
 <tr>
 <td>
<p align="left" ><span style="font-size: 18px; font-family: Arial, Helvetica, sans-serif; color:#F00"><br />
<b>This is NOT a confirmation of your order.</b><br /><br /></span><span style="font-size: 14px; font-family: Arial, Helvetica, sans-serif;">Thank you for using the Express Order form.  Your requested order has been sent to GES for processing. If you ordered additional items per the prices listed you will have to coomplete the GES Order & Payment Summary form, please click <a href="/acic/acic_express/pdfs/ACIC_GES_ORDER_PAYMENT_SUMMARY.pdf" target="_blank">here</a> to download the form. Print, complete and fax the form to GES 702.294.8643. &nbsp;<br />
&nbsp;<br />
Once GES reviews and processes your order, you will receive a confirmation from them.  If you do not receive a confirmation within 48 hours, please contact GES at 800.801.0554 or 201.375.9191.<br /><br />
To avoid any discrepancies do  not use the back button and re-submit your order. <br />
<br />
<br />
</span><br />
</p>
</td>
</tr>
</table>
</body>
</html>