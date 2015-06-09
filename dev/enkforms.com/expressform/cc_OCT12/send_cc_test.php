<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>CC Booth Furnishings Order</title>
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

$chair = $_POST['chair'];
$table4 = $_POST['table4'];
$table6 = $_POST['table6'];
$rack = $_POST['rack'];
$grid = $_POST['grid'];
$shelfst = $_POST['shelfst'];
$shelfsl = $_POST['shelfsl'];
$light_pkg = $_POST['light_pkg'];
$power_pkg = $_POST['power_pkg'];

$BStype = $_POST['BStype'];
$masterlock = $_POST['master'];

$add_tracks1 = $_POST['add_tracks1'];
$add_tracks2 = $_POST['add_tracks2'];
$add_tracks3 = $_POST['add_tracks3'];
$add_tracks4 = $_POST['add_tracks4'];
$add_tracks5 = $_POST['add_tracks5'];

$add_lights1 = $_POST['add_lights1'];
$add_lights2 = $_POST['add_lights2'];
$add_lights3 = $_POST['add_lights3'];

$spec_lights1 = $_POST['spec_lights1'];


$epower1 = $_POST['epower1'];
$epower2 = $_POST['epower2'];
$epower3 = $_POST['epower3'];
$epower4 = $_POST['epower4'];
$epower5 = $_POST['epower5'];
$epower6 = $_POST['epower6'];
$epower7 = $_POST['epower7'];
$elabor = $_POST['elabor'];

$nothing1 = $_POST['donot1'];
$nothing2 = $_POST['donot2'];
$nothing3 = $_POST['donot3'];

$request = $_POST['SpecialReq'];

$dr_tr_1 = $_POST['dr_tr_1'];
$dr_tr_2 = $_POST['dr_tr_2'];
$dr_tr_3 = $_POST['dr_tr_3'];
$dr_tr_4 = $_POST['dr_tr_4'];
$dr_tr_5 = $_POST['dr_tr_5'];
$dr_tr_6 = $_POST['dr_tr_6'];
$dr_tr_7 = $_POST['dr_tr_7'];
$dr_tr_8 = $_POST['dr_tr_8'];
$dr_color = $_POST['dr_color'];

$tr_1 = $_POST['tr_1'];
$tr_2 = $_POST['tr_2'];
$tr_3 = $_POST['tr_3'];
$tr_4 = $_POST['tr_4'];
$tr_5 = $_POST['tr_5'];
$tr_6 = $_POST['tr_6'];
$tr_7 = $_POST['tr_7'];
$tr_8 = $_POST['tr_8'];

$drape4 = $_POST['drape4'];
$drape6 = $_POST['drape6'];
$drape_only_color = $_POST['drape_only_color'];

$wm1 = $_POST['wm1'];
$wm2 = $_POST['wm2'];
$wm3 = $_POST['wm3'];
$wm4 = $_POST['wm4'];
$wm5 = $_POST['wm5'];

$dressing1 = $_POST['dressing1'];
$dressing2 = $_POST['dressing2'];

$wall_panel1 = $_POST['wall_pan1'];
$wall_panel2 = $_POST['wall_pan2'];

$ez1 = $_POST['ez1'];
$ez2 = $_POST['ez2'];

$misc_furn1 = $_POST['misc_furn1'];
$misc_furn2 = $_POST['misc_furn2'];
$misc_furn3 = $_POST['misc_furn3'];
$misc_furn4 = $_POST['misc_furn4'];
$misc_furn5 = $_POST['misc_furn5'];
$misc_furn6 = $_POST['misc_furn6'];
$misc_furn7 = $_POST['misc_furn7'];
$misc_furn8 = $_POST['misc_furn8'];
$misc_furn9 = $_POST['misc_furn9'];

$panel = $_POST['panel'];
$paper = $_POST['wallpaper'];
$wall_color = $_POST['add_wall'];
$wall_length = $_POST['Paper_Feet'];
$wallinfo = $_POST['Wall_Info'];
$install = $_POST['install'];
$EACinstall = $_POST['EACinstall'];

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

$dimensions =  $_POST['dimensions'];

$contact = $_POST['contact'];
$contact_cell = $_POST['contact_cell'];
$company = $_POST['company'];
$company = stripcslashes($company);
$street = $_POST['street'];
$city = $_POST['city-st-zip'];
$email = $_POST['email'];
$booth = $_POST['booth'];
$booth_size = $_POST['booth_size'];

$checknumges = $_POST['checknumges'];
$checkamtges = $_POST['checkamtges'];
$checkdateges = $_POST['checkdateges'];
$checknumjav = $_POST['checknumjav'];
$checkamtjav = $_POST['checkamtjav'];
$checkdatejav = $_POST['checkdatejav'];
$checknumbs = $_POST['checknumbs'];
$checkamtbs = $_POST['checkamtbs'];
$checkdatebs = $_POST['checkdatebs'];
$checknumdnb = $_POST['checknumdnb'];
$checkamtdnb = $_POST['checkamtdnb'];
$checkdatednb = $_POST['checkdatednb'];

$credit = $_POST['credit'];
$exp_date = $_POST['exp_date'];
$cardholder = $_POST['cardholder'];
$ccv = $_POST['ccv'];
$billing_street = $_POST['billing_street'];
$billing_city = $_POST['billing_city'];

$paytype = $_POST['paytype'];
$nothinger = $_POST['nothinger'];

$ez_white = $_POST['ez_white'];
$ez_double_white = $_POST['ez_double_white'];

$subtotal = $_POST['subtotalval'];
$pst = $_POST['pstval'];
$pstsubtotal = $_POST['pstsubtotalval'];
$tax = $_POST['taxval'];
$total = $_POST['totalval'];

$esubtotal = $_POST['esubtotalval'];
$etax = $_POST['etaxval'];
$etotal = $_POST['etotalval'];

$bssubtotal = $_POST['bssubtotalval'];
$bstax = $_POST['bstaxval'];
$bstotal = $_POST['bstotalval'];

$msubtotal = $_POST['msubtotalval'];
$mtax = $_POST['mtaxval'];
$mtotal = $_POST['mtotalval'];

$attn = $attn ; 
$subject = " $company, Booth # $booth, CC Booth Furnishings $order_type"; 
$esubject = " $company, Booth # $booth, CC Electrical Order $order_type";
$bssubject = " $company, Booth # $booth, CC BoothSeal Order $order_type";
$msubject = " $company, Booth # $booth, CC Mannequin Order $order_type";



$message = "";
$emessage = "";
$bsmessage = "";

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
if ($request <> "Enter any special requests or other comments here") { $spec_req = $spec_req . "

" . $request ."
";}
if ( strlen($spec_req) > 0 ) { $spec_req = "

SPECIAL REQUEST" . $spec_req;}

$included_furn = "";
if ($chair > 0) {$included_furn = $included_furn . "
White Chair : qty $chair"; }
if ($table4 > 0) {$included_furn = $included_furn . "
4' Undraped Table : qty $table4"; }
if ($table6 > 0) {$included_furn = $included_furn . "
6' Undraped Table : qty $table6"; }
if ($rack > 0) {$included_furn = $included_furn . "
Free Standing Garment Rack : qty $rack"; }
if ($grid > 0) {$included_furn = $included_furn . "
Grid (2' wide x 8' high) : qty $grid"; }
if ($shelfst > 0) {$included_furn = $included_furn . "
Shelf straight white : qty $shelfst"; }
if ($shelfsl > 0) {$included_furn = $included_furn . "
Shelf slanted white : qty $shelfsl"; }
if ( strlen($included_furn) > 0 ) { $included_furn = "

BOOTH PACKAGE FURNITURE" . $included_furn;}

$boothseal = "";

switch ($BStype) {
    case 0:
	    $boothseal = "";
		break;
	case 1:
        $boothseal = "6' x 10' in-line (1 BoothSeal)";
        break;
	case 2:
        $boothseal = "10' x 8' in-line (1 BoothSeal)";
        break;
	case 3:
        $boothseal = "10' x 10' in-line (1 BoothSeal)";
        break;
	case 4:
        $boothseal = "10' x 13' in-line (1 BoothSeal)";
        break;
	case 5:
        $boothseal = "10' x 16' in-line (1 BoothSeal)";
        break;
	case 6:
        $boothseal = "10' x 20' in-line (2 BoothSeal)";
        break;
	case 7:
        $boothseal = "10' x 8' open corner (2 BoothSeals)";
        break;		
	case 8:
        $boothseal = "10' x 10' open corner (2 BoothSeals)";
        break;
	case 9:
        $boothseal = "10' x 13' open corner (2 BoothSeals)";
        break;
	case 10:
        $boothseal = "10' x 16' open corner (2 BoothSeals)";
        break;
	case 11:
        $boothseal = "10' x 20' open corner (3 BoothSeals)";
        break;		
    default:
        $boothseal = "";}
	
	if ($masterlock > 0) {
  	    $boothseal = $boothseal . "	
Masterlock Padlock : qty " . $masterlock;}
	
	if (strlen($boothseal > 0)) {$boothseal =  "
	
BOOTHSEAL:  " . $boothseal;}
	


$add_tracks = "";
if ($add_tracks1 > 0) {$add_tracks = $add_tracks . "
1 Track 2 Halogen Lights : qty $add_tracks1"; }
if ($add_tracks2 > 0) {$add_tracks = $add_tracks . "
1 Track 3 Halogen Lights : qty $add_tracks2"; }
if ($add_tracks3 > 0) {$add_tracks = $add_tracks . "
1 Track 4 Halogen Lights : qty $add_tracks3";}
if ($add_tracks3 > 0) {$add_tracks = $add_tracks . "
1 Track 5 Halogen Lights : qty $add_tracks4";}
if ($add_tracks3 > 0) {$add_tracks = $add_tracks . "
1 Track 6 Halogen Lights : qty $add_tracks5"; }
if ( strlen($add_tracks) > 0 ) { $add_tracks = "

ADDITIONAL TRACKS" . $add_tracks;}

$add_lights = "";
if ($add_lights1 > 0) { $add_lights = $add_lights . "
1 Halogen Light Fixture (added to existing track) : qty $add_lights1"; }
if ($add_lights2 > 0) { $add_lights = $add_lights . "
2 Halogen Light Fixtures (added to existing track) : qty $add_lights2"; }
if ($add_lights3 > 0) { $add_lights = $add_lights . "
3 Halogen Light Fixtures (added to existing track) : qty $add_lights3"; }
if ( strlen($add_lights) > 0 ) { $add_lights = "

ADDITIONAL LIGHTING" . $add_lights;}

$spec_lights = "";
if ($spec_lights1 > 0) {$spec_lights = $spec_lights . " 
1000w Par Can Light (suspended 20' above booth) : qty $spec_lights1"; }
if ( strlen($spec_lights) > 0 ) { $spec_lights = "

SPECIAL LIGHTS" . $spec_lights;}

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
2000 watts of power for electrical equipment: qty $epower6"; }
if ($epower7 > 0) {$epower = $epower . "
2500 watts of power for electrical equipment: qty $epower7"; }
if (strlen($elabor) > 0) {$epower = $epower . "
$elabor";}
if ( strlen($epower) > 0 ) { $epower = "

ELECTRIC POWER" . $epower;}

$dr_tables = "";
if ($dr_tr_1 > 0) { $dr_tables = $dr_tables . " 
4' long x 2' wide x 30\" high DRAPED TABLE : qty $dr_tr_1"; }
if ($dr_tr_2 > 0) { $dr_tables = $dr_tables . " 
6' long x 2' wide x 30\" high DRAPED TABLE : qty $dr_tr_2"; }
if ($dr_tr_3 > 0) {$dr_tables = $dr_tables . " 
8ft long x 2ft wide x 30\" high DRAPED TABLE : qty $dr_tr_3"; }
if ($dr_tr_4 > 0) {$dr_tables = $dr_tables . " 
4' long x 2' wide x 42\" high DRAPED COUNTER : qty $dr_tr_4"; }
if ($dr_tr_5 > 0) {$dr_tables = $dr_tables . " 
6' long x 2' wide x 42\" high DRAPED COUNTER : qty $dr_tr_5"; }
if ($dr_tr_6 > 0) {$dr_tables = $dr_tables . " 
8' long x 2' wide x 42\" high DRAPED COUNTER : qty $dr_tr_6"; }
if ($dr_tr_7 > 0) {$dr_tables = $dr_tables . " 
30\" 4th side table drape : qty $dr_tr_7"; }
if ($dr_tr_8 > 0) {$dr_tables = $dr_tables . " 
30\" 4th side table drape : qty $dr_tr_8"; }
if ( strlen($dr_tables) > 0 ) { $dr_tables = "

DRAPED WOOD TABLES " . $dr_tables . "

Drape color: " . $dr_color;}

$drape_only = "";
if ($table4 > 0) { $drape_only = $drape_only . " 
4' long x 2' wide x 30\" DRAPE ONLY : qty $table4"; }
if ($table6 > 0) { $drape_only = $drape_only . " 
6' long x 2' wide x 30\" high DRAPE ONLY : qty $table6"; }
if ( strlen($drape_only) > 0 ) { $drape_only = "

DRAPED WOOD TABLES " . $drape_only . "
Drape color: " . $drape_only_color;}

$tables_risers = "";
if ($tr_1 > 0) { $tables_risers = $tables_risers . " 
4' long x 2' wide x 30\" high TABLE : qty $tr_1"; }
if ($tr_2 > 0) { $tables_risers = $tables_risers . " 
6' long x 2' wide x 30\" high TABLE : qty $tr_2"; }
if ($tr_3 > 0) {$tables_risers = $tables_risers . " 
8ft long x 2ft wide x 30\" high TABLE : qty $tr_3"; }
if ($tr_4 > 0) {$tables_risers = $tables_risers . " 
4' long x 2' wide x 42\" high COUNTER : qty $tr_4"; }
if ($tr_5 > 0) {$tables_risers = $tables_risers . " 
6' long x 2' wide x 42\" high COUNTER : qty $tr_5"; }
if ($tr_6 > 0) {$tables_risers = $tables_risers . " 
8' long x 2' wide x 42\" high COUNTER : qty $tr_6"; }
if ($tr_7 > 0) {$tables_risers = $tables_risers . " 
4' long x 1' wide x 1' high RISER : qty $tr_7"; }
if ($tr_8 > 0) {$tables_risers = $tables_risers . " 
6' long x 1' wide x 1' high RISER : qty $tr_8"; }
if ( strlen($tables_risers) > 0 ) { $tables_risers = "

UNDRAPED WOOD TABLES AND RISERS" . $tables_risers;}

$wall_mounted = "";
if ($wm1 > 0) { $wall_mounted = $wall_mounted . "
Flat SHELF 14\" x 39-3/4\" (1 M) : qty $wm1"; }
if ($wm2 > 0) { $wall_mounted = $wall_mounted . "
Slanted SHELF 9-3/4\" x 39-3/4\" (1 M) : qty $wm2"; }
if ($wm3 > 0) { $wall_mounted = $wall_mounted . "
1-M GARMENT RACK : qty $wm3"; }
if ($wm4 > 0) { $wall_mounted = $wall_mounted . "
1-M DISPLAY BAR : qty $wm4"; }
if ($wm5 > 0) { $wall_mounted = $wall_mounted . "
Additional Shelf Brackets : qty $wm5"; }
if ( strlen($wall_mounted) > 0 ) { $wall_mounted = "

WALL MOUNTED ITEMS" . $wall_mounted;}

$dressing = "";
if ($dressing1 > 0) { $dressing = $dressing . "
1 Dressing Room WALL PANEL + 1 Side Draping : qty $dressing1"; }
if ($dressing2 > 0) { $dressing = $dressing . "
2 Dressing Room WALL PANEL + 1 Side Draping : qty $dressing2"; }
if ($wall_panel1 > 0) { $dressing = $dressing . "

Additional WALL PANELS : qty $wall_panel1";}
if ($wall_panel2 > 0) { $dressing = $dressing . "

Lockable DOOR : qty $wall_panel2";}
if ( strlen($dressing) > 0 ) { $dressing = "

DRESSING ROOM PANELS and ADDITIONAL WALL PANELS" . $dressing;}

$ez_shelf = "";
if ($ez1 > 0) { $ez_shelf = $ez_shelf . "
Single EZ-Shelf 11.75\"x31\" shelves-72\" Tall $ez_white : qty $ez1"; }
if ($ez2 > 0) { $ez_shelf = $ez_shelf . "
Double EZ-Shelf 11.75\"x58\" shelves-72\" Tall $ez_double_white : qty $ez2";}
if ( strlen($ez_shelf) > 0 ) { $ez_shelf = "

EZ-SHELF" . $ez_shelf;}


$misc_furn = "";
if ($misc_furn1 > 0) { $misc_furn = $misc_furn . " 
White CHAIR : qty $misc_furn1"; }
if ($misc_furn2 > 0) { $misc_furn = $misc_furn . " 
30\" round TABLE : qty $misc_furn2"; }
if ($misc_furn3 > 0) { $misc_furn = $misc_furn . " 
Wall MIRROR 12\" x 48\" : qty $misc_furn3"; }
if ($misc_furn4 > 0) { $misc_furn = $misc_furn . " 
WASTE BASKET : qty $misc_furn4"; }
if ($misc_furn5 > 0) { $misc_furn = $misc_furn . " 
Chrome CLOTHES TREE : qty $misc_furn5"; }
if ($misc_furn6 > 0) { $misc_furn = $misc_furn . " 
Chrome GRID 2' x 8' : qty $misc_furn6"; }
if ($misc_furn7 > 0) { $misc_furn = $misc_furn . " 
Standing GARMENT RACK : qty $misc_furn7"; }
if ($misc_furn8 > 0) { $misc_furn = $misc_furn . " 
3-M CROSS BAR (lighting support) : qty $misc_furn8"; }
if ($misc_furn9 > 0) { $misc_furn = $misc_furn . " 
GRID HOOKS : qty $misc_furn9"; }
if ( strlen($misc_furn) > 0 ) { $misc_furn = "

MISCELLANEOUS FURNISHINGS" . $misc_furn;}

$autpoles = "";
if ($autopoles1 > 0) { $autopoles = $autopoles . "
5' Single Cross Bar Setup : qty $autopoles1"; }
if ($autopoles2 > 0) { $autopoles = $autopoles . "
10' Single Cross Bar Setup : qty $autopoles2"; }
if ($autopoles3 > 0) { $autopoles = $autopoles . "
5' Double Cross Bar Setup : qty $autopoles3"; }
if ($autopoles4 > 0) { $autopoles = $autopoles . "
10' Double Cross Bar Setup : qty $autopoles4"; }
if ($autopoles5 > 0) { $autopoles = $autopoles . "
1M Four Shelf Auto-pole Package : qty $autopoles5"; }
if ($autopoles6 > 0) { $autopoles = $autopoles . "
1.5 M Four Shelf Auto-pole Package : qty $autopoles6"; }
if ($autopoles7 > 0) { $autopoles = $autopoles . "
Additional Flat Shelf 9-3/4\" x 1 M Shelf : qty $autopoles7"; }
if ($autopoles8 > 0) { $autopoles = $autopoles . "
Additional Flat Shelf 9-3/4\" x 1.5 M Shelf : qty $autopoles8"; }
if ($autopoles9 > 0) { $autopoles = $autopoles . "
Additional 5' Auto Pole Cross Bar : qty $autopoles9"; }
if ($autopoles10 > 0) { $autopoles = $autopoles . "
Additional 10' Auto Pole Cross Bar : qty $autopoles10"; }
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

$wallpaperinfo = "";
if (strlen($wallinfo) > 0) {$wallpaperinfo = $wallinfo . " 
";}
if ( strlen($wallpaperinfo) > 0 ) { $wallpaperinfo = "

WALLPAPER and COLOR PANELS
" . $wallpaperinfo;}

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

$boothnumber = "";
if (strlen($booth) > 0) {$boothnumber = "Booth # " . $booth;}

$boothsizetop = "CHILDREN'S CLUB OCTOBER 2012
EHIBITING COLLECTION NAME:\t$company
BOOTH SIZE:\t\t\t$booth_size
";


$boothsizetopges = "CHILDREN'S CLUB OCTOBER 2012
GES Show # 81002660
EHIBITING COLLECTION NAME:\t$company
BOOTH SIZE:\t\t\t$booth_size
";


$boothsizetopjavits = "CHILDREN'S CLUB OCTOBER 2012 - Event # 14964
EHIBITING COLLECTION NAME:\t$company
BOOTH SIZE:\t\t\t$booth_size
";



$companyinfo = "

CONTACT INFORMATION
EXHIBITING COLLECTION NAME:\t$company
BOOTH NUMBER:\t\t\t$booth
CONTACT:\t\t\t\t$contact
BOOTH SIZE:\t\t\t\t$booth_size
CONTACT CELL:\t\t\t\t$contact_cell
CONTACT EMAIL:\t\t\t$email
STREET ADDRESS:\t\t\t$street 
CITY, STATE, ZIP:\t\t\t$city

I agree in placing this order that I have accepted the Payment Policy and Contract Terms and Conditions of GES, Javits, BoothSeal and D&B Display Rental as appropriate.

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
";
$ccinfoges =  "
Credit Card # $credit 
Exp Date: $exp_date
Card Holder: $cardholder
Billing Street Address: $billing_street
Billing City, State, Zip: $billing_city
";
}


$checkinfoges = "";
if (strlen($checknumges) > 0) { $checkinfoges = "
Check # $checknumges
Check Date: $checkdateges
Check Amount \$$checkamtges

Send check to: Global Experience Specialists Inc., Bank of America, P.O. Box 96174, Chicago IL 60693
 ";

}

$checkinfojav = "";
if (strlen($checknumjav) > 0) { $checkinfojav = "
Check # $checknumjav
Check Date: $checkdatejav
Check Amount \$$checkamtjav

Send check to: Javits Electrical Services, 655 West 34th Street, NY, NY 10001
include Show ID # 14964";

}

$checkinfobs = "";
if (strlen($checknumbs) > 0) { $checkinfobs = "
Check # $checknumbs
Check Date: $checkdatebs
Check Amount \$$checkamtbs

Send check to: BoothSeal, 8 West 38th Street, Suite 202, NY, NY 10018
 ";

}

$checkinfodnb = "";
if (strlen($checknumdnb) > 0) { $checkinfodnb = "
Check # $checknumdnb
Check Date: $checkdatednb
Check Amount \$$checkamtdnb

Send check to: D&B Rental Displays, 521 F.D.R.Drive, STE 7D, New York, NY 10002
 ";

}

$totalq = "

ITEM SUBTOTAL\t" . number_format($subtotal, 2) . "
PSP\t\t\t" . number_format($pst, 2) . "
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

$bstotalq = "

SUBTOTAL\t" . number_format($bssubtotal, 2) . "
TAX\t\t" . number_format($bstax, 2) . "
TOTAL\t\t" . number_format($bstotal, 2) ." 


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

$message = $order_type . $message . $spec_req . $e_pack . $add_lights . $add_tracks . $included_furn . $dr_tables . $tables_risers . $wall_mounted . $dressing . $ez_shelf . $misc_furn . $autopoles . $carpet . $wallpaperinfo . $companyinfo . $mop . $totalq . $date;



$from = "From: CC EXPRESS FORM - GES";

mail("mevans@wsashow.com", $subject, "$boothsizetopges $message \f $companyinfo $ccinfoges $checkinfoges", $from);
//mail("mevans@wsashow.com, smaria@enkshows.com", $subject,  $message, $from);
//mail("enkorders@ges.com", $subject, "$boothsizetopges $message \f $companyinfo $ccinfoges $checkinfoges", $from);

$message = $order_type . "
Thank you for your request. This is a summary of what you have requested which has been submitted to GES for the October 2012 Children's Club. THIS IS NOT A CONFIRMATION. 

If you do not receive an order confirmation from GES within 4 business days please contact the GES office at 800.801.0554 OR 201.375.9191.

Orders received without full payment will not be processed until GES receives payment by either check, wire transfer or credit card.

Reminder:  Do not duplicate your order by either resubmitting the Express Order form or by completing similar forms from the GuideBook.  If you do so, your order will be duplicated and your will be charged twice. 

" . $message;


mail($email, "Children's Club GES Order", "$message $checkinfoges", $from);

$emessage = $emessage . $spec_lights . $epower ;


$efrom = "From: CC EXPRESS FORM - ELECTRICAL";


if (strlen($emessage) > 0) { 
$emessage = $order_type . $emessage . $companyinfo . $mop .  $etotalq . $edate;

//mail("mevans@wsashow.com, smaria@enkshows.com", $esubject, "$boothsizetopjavits $emessage $ccinfo $checkinfojav", $efrom);
//mail("mevans@wsashow.com, smaria@enkshows.com", $esubject, $emessage, $efrom);
//mail("services@javitscenter.com", $esubject, "$boothsizetopjavits $emessage $ccinfo $checkinfojav", $efrom);

$emessage = $order_type . "
Thank you for your request. This is a summary of your electrical request which has been submitted to Javits Electrical Services for the October 2012 Children's Club. THIS IS NOT A CONFIRMATION. 

If you do not receive an order confirmation from JAVITS ELECTRICAL within 4 business days please contact the JAVITS ELECTRICAL SERVICES OFFICE AT 877-452-8487.

Orders received without full payment will not be processed until The Javits Center receives payment by either check, or credit card.   

Reminder:  Do not duplicate your order by either resubmitting the Express Order form or by completing similar forms from the GuideBook.  If you do so, your order will be duplicated and your will be charged twice. 

" . $emessage ; 
mail($email, "Children's Club Electrical Order", "$emessage $checkinfojav", $efrom); }

$bsmessage = $boothseal;
$bsfrom = "From: CC EXPRESS FORM - BOOTHSEAL";
if (strlen($bsmessage) > 0) { 
$bsmessage = $order_type . $bsmessage . $companyinfo . $mop . $bstotalq . $bsdate;

//mail("mevans@wsashow.com, smaria@enkshows.com", $bssubject, "$boothsizetop $bsmessage $ccinfo $checkinfobs", $bsfrom);
//mail("mevans@wsashow.com,smaria@enkshows.com", $bssubject, $bsmessage, $bsfrom);
//mail("dmendoza@boothseal.com, joel@cckevents.com", $bssubject, "$boothsizetop $bsmessage $ccinfo $checkinfobs", $bsfrom);

$bsmessage = $order_type . "
Thank you for your request. This is a summary of your BoothSeal request which has been submitted to BoothSeal LLC for the October 2012 Children's Club. THIS IS NOT A CONFIRMATION. 

If you do not receive an order confirmation from BoothSeal LLC within 4 business days please contact the BoothSeal office, 646-243-0811.

Orders received without full payment will not be processed until BoothSeal LLC receives payment by either check, or credit card. 

Reminder:  Do not duplicate your order by either resubmitting the Express Order form or by completing similar forms from the GuideBook.  If you do so, your order will be duplicated and your will be charged twice. 

" . $bsmessage ; 

mail($email, "Children's Club BoothSeal", "$bsmessage $checkinfobs", $bsfrom); 
}

$mmessage = $mmessage . $fmannequin . $mmannequin . $kmannequin . $hangers;
$mfrom = "From: CC EXPRESS FORM - MANNEQUINS/HANGERS";


if (strlen($mmessage) > 0) { 
$mmessage = $order_type . $mmessage . $companyinfo . $mop .  $mtotalq . $mdate;


//mail("mevans@wsashow.com, smaria@enkshows.com", $msubject, "$boothsizetop $mmessage $ccinfo $checkinfodnb", $mfrom);
//mail("mevans@wsashow.com,smaria@enkshows.com", $msubject, $mmessage, $mfrom);
//mail("orders@dbrentaldisplays.com", $msubject, "$boothsizetop $mmessage $ccinfo $checkinfodnb", $mfrom);

$mmessage = $order_type . "
Thank you for your request. This is a summary of your mannequin & hanger request which has been submitted to D&B Rental Displays for the October 2012 Children's Club. THIS IS NOT A CONFIRMATION. 

If you do not receive an order confirmation from D&B RENTAL DISPLAYS within 4 business days please contact the D&B RENTAL DISPLAYS OFFICE AT 239.263.7167.

Orders received without full payment will not be processed until D&B Rental Displays receives payment by either check, wire transfer or credit card.

Reminder:  Do not duplicate your order by either resubmitting the Express Order form or by completing similar forms from the GuideBook.  If you do so, your order will be duplicated and you will be charged twice. 

" . $mmessage ; 
mail($email, "Children's Club Mannequin/Hanger Order", "$mmessage $checkinfodnb", $mfrom);

}

?>

<table align="center" border=0 cellpadding=0 cellspacing=0 width=1131 style='border-collapse:
 collapse'>
 
 <tr>
 <td>
 <img src="images/cc_header_oct12.jpg"  alt="CC" width="1150"  align="middle"></p>
 </td>
 </tr>
<tr>
<td>
 <?php
   print("<p style=\"font-size: 14.0pt; font-family: Arial, Helvetica, sans-serif; text-align:center\"> $company&emsp;$boothnumber</p>");
?>
</td>
</tr>
<tr>
 <td>
<p align="center" ><span style="font-size: 20.0pt; font-family: Arial, Helvetica, sans-serif; color:#F00"><br />
<b>This is NOT a confirmation of your request.</b><br /><br /></span><span style="font-size: 14.0pt; font-family: Arial, Helvetica, sans-serif;">Thank you for your request. This is your web confirmation only. Please allow 4 business days for requests to be processed. When your request is processed you will receive an order confirmation via email or fax. Orders received without full payment will not be processed until payment by either check, wire transfer or credit card is received and posted by the respective supplier.<br />
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