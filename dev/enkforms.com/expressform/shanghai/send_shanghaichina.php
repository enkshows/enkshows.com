<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <title>ENK Mode Shanghai Exhibitor Application</title>
  <link rel="stylesheet" type="text/css" href="appstyle.css" />
</head>
<body>



<?php

$ip = $_POST['ip']; 
$httpref = $_POST['httpref']; 
$httpagent = $_POST['httpagent']; 
$visitor = $_POST['visitor']; 
$visitormail = $_POST['visitormail']; 
$notes = $_POST['notes'];
$attn = $_POST['attn'];


//company and contact information
$company = $_POST['company'];
$compphone = $_POST['comp_phone'];
$compfax = $_POST['comp_fax'];
$compaddress = $_POST['comp_address'];
$compcity = $_POST['comp_city'];
$email = $_POST['email'];
$website = $_POST['website'];
$collection = $_POST['collection'];

$contact = $_POST['contact'];
$contphone = $_POST['cont_phone'];
$contfax = $_POST['cont_fax'];
$contemail = $_POST['cont_email'];

$designer = $_POST['designer'];
$despresent = $_POST['designer_present'];

$pragency = $_POST['pr_agency'];
$prcontact = $_POST['pr_agency_contact'];
$premail = $_POST['pr_contact_email'];

$yearestab = $_POST['year_estab'];
$totalsales = $_POST['total_sales'];



$contact_info = "Company and Contact Information
Company: $company
Company Phone: $compphone    Company Fax: $compfax
Company Address: $compaddress
Company City, State, Postal Code, Country: $compcity
Contact Name: $contact
Email: $email
Website: $website
Collection/Brand Name: $collection

Contact Name: $contact
Contact Phone: $contphone     Contact Fax: $contfax
Contact Email: $contemail
Designer Name: $designer   Designer Present: $despresent
PR Agency: $pragency
PR Contact: $prcontact
PR Email: $premail

Year brand was established: $yearestab
Total sales in 2011: $totalsales


";


//category information
$cat_womwear = $_POST['cat_womwear'];
$cat_menwear = $_POST['cat_menwear'];
$cat_unisex = $_POST['cat_unisex'];
$cat_design = $_POST['cat_design'];
$cat_womcas = $_POST['cat_womcas'];
$cat_mencas = $_POST['cat_mencas'];
$cat_access = $_POST['cat_access'];
$cat_access_type = $_POST['cat_access_type'];
$cat_other = $_POST['cat_other'];
$cat_other_text = $_POST['cat_other_text'];
$category_info = "Category Information";
if (strlen($cat_womwear)>0) {$category_info = $category_info . "
" . $womwear;}
if (strlen($cat_menwear)>0) {$category_info = $category_info . "
" . $cat_menwear;}
if (strlen($cat_unisex)>0) {$category_info = $category_info . "
" . $cat_unisex;}
if (strlen($cat_design)>0) {$category_info = $category_info . "
" . $cat_design;}
if (strlen($cat_womcas)>0) {$category_info = $category_info . "
" . $cat_womcas;}
if (strlen($cat_mencas)>0) {$category_info = $category_info . "
" . $cat_mencas;}
if (strlen($cat_access_type)>0) {$category_info = $category_info . "
Accessories - Type:" . $cat_access_type;}
if ($cat_other) {$category_info = $category_info . "
Other:" . $cat_other_text;}
$category_info = $category_info . "
";




//age demographics information
$age_junior = $_POST['age_junior'];
$age_teen = $_POST['age_teen'];
$age_18 = $_POST['age_18'];
$age_25 = $_POST['age_25'];
$age_35 = $_POST['age_35'];
$age_45 = $_POST['age_45'];
$age_55 = $_POST['age_55'];
$age_info = "

Target Age Demographics";
if (strlen($age_junior)>0) {$age_info = $age_info . "
" . $age_junior;}
if (strlen($age_teen)>0) {$age_info = $age_info . "
" . $age_teen;}
if (strlen($age_18)>0) {$age_info = $age_info . "
" . $age_18;}
if (strlen($age_25)>0) {$age_info = $age_info . "
" . $age_25;}
if (strlen($age_35)>0) {$age_info = $age_info . "
" . $age_35;}
if (strlen($age_45)>0) {$age_info = $age_info . "
" . $age_45;}
if (strlen($age_55)>0) {$age_info = $age_info . "
" . $age_55;}
$age_info = $age_info . "

";

//average price point information
$avg_pants_20 = $_POST['avg_pants_20'] . "  ";
$avg_pants_50 = $_POST['avg_pants_50'] . "  ";
$avg_pants_75 = $_POST['avg_pants_75'] . "  ";
$avg_pants_100 = $_POST['avg_pants_100'] . "  ";
$avg_pants_200 = $_POST['avg_pants_200'];
$pants = $avg_pants_20 . $avg_pants_50 . $avg_pants_75 . $avg_pants_100 . $avg_pants_200;
if (strlen($pants) > 9) {$avg_price = $pants . "
";}

$avg_tops_20 = $_POST['avg_tops_20'] . "  ";
$avg_tops_50 = $_POST['avg_tops_50'] . "  ";
$avg_tops_75 = $_POST['avg_tops_75'] . "  ";
$avg_tops_100 = $_POST['avg_tops_100'] . "  ";
$avg_tops_200 = $_POST['avg_tops_200'];
$tops = $avg_tops_20 . $avg_tops_50 . $avg_tops_75 . $avg_tops_100 . $avg_tops_200;
if (strlen($tops) > 9) {$avg_price = $avg_price . $tops . "
";}

$avg_dresses_20 = $_POST['avg_dresses_20'] . "  ";
$avg_dresses_50 = $_POST['avg_dresses_50'] . "  ";
$avg_dresses_75 = $_POST['avg_dresses_75'] . "  ";
$avg_dresses_100 = $_POST['avg_dresses_100'] . "  ";
$avg_dresses_200 = $_POST['avg_dresses_200'];
$dresses = $avg_dresses_20 . $avg_dresses_50 . $avg_dresses_75 . $avg_dresses_100 . $avg_dresses_200;
if (strlen($dresses) > 9) {$avg_price = $avg_price . $dresses . "
";}

$avg_denim_20 = $_POST['avg_denim_20'] . "  ";
$avg_denim_50 = $_POST['avg_denim_50'] . "  ";
$avg_denim_75 = $_POST['avg_denim_75'] . "  ";
$avg_denim_100 = $_POST['avg_denim_100'] . "  ";
$avg_denim_200 = $_POST['avg_denim_200'];
$denim = $avg_denim_20 . $avg_denim_50 . $avg_denim_75 . $avg_denim_100 . $avg_denim_200;
if (strlen($denim) > 9) {$avg_price = $avg_price . $denim . "
";}

$avg_knits_20 = $_POST['avg_knits_20'] . "  ";
$avg_knits_50 = $_POST['avg_knits_50'] . "  ";
$avg_knits_75 = $_POST['avg_knits_75'] . "  ";
$avg_knits_100 = $_POST['avg_knits_100'] . "  ";
$avg_knits_200 = $_POST['avg_knits_200'];
$knits = $avg_knits_20 . $avg_knits_50 . $avg_knits_75 . $avg_knits_100 . $avg_knits_200;
if (strlen($knits) > 9) {$avg_price = $avg_price . $knits . "
";}

$avg_outerwear_20 = $_POST['avg_outerwear_20'] . "  ";
$avg_outerwear_50 = $_POST['avg_outerwear_50'] . "  ";
$avg_outerwear_75 = $_POST['avg_outerwear_75'] . "  ";
$avg_outerwear_100 = $_POST['avg_outerwear_100'] . "  ";
$avg_outerwear_200 = $_POST['avg_outerwear_200'];
$outerwear = $avg_outerwear_20 . $outerwear_50 . $avg_outerwear_75 . $avg_outerwear_100 . $avg_outerwear_200;
if (strlen($outerwear) > 9) {$avg_price = $avg_price . $outerwear . "
";}

$avg_footwear_20 = $_POST['avg_footwear_20'] . "  ";
$avg_footwear_50 = $_POST['avg_footwear_50'] . "  ";
$avg_footwear_75 = $_POST['avg_footwear_75'] . "  ";
$avg_footwear_100 = $_POST['avg_footwear_100'] . "  ";
$avg_footwear_200 = $_POST['avg_footwear_200'];
$footwear = $avg_footwear_20 . $avg_footwear_50 . $avg_footwear_75 . $avg_footwear_100 . $avg_footwear_200;
if (strlen($footwear) > 9) {$avg_price = $avg_price . $footwear . "
";}

$avg_hats_20 = $_POST['avg_hats_20'] . "  ";
$avg_hats_50 = $_POST['avg_hats_50'] . "  ";
$avg_hats_75 = $_POST['avg_hats_75'] . "  ";
$avg_hats_100 = $_POST['avg_hats_100'] . "  ";
$avg_hats_200 = $_POST['avg_hats_200'];
$hats = $avg_hats_20 . $avg_hats_50 . $avg_hats_75 . $avg_hats_100 . $avg_hats_200;
if (strlen($hats) > 9) {$avg_price = $avg_price . $hats . "
";}

$avg_jewelry_20 = $_POST['avg_jewelry_20'] . "  ";
$avg_jewelry_50 = $_POST['avg_jewelry_50'] . "  ";
$avg_jewelry_75 = $_POST['avg_jewelry_75'] . "  ";
$avg_jewelry_100 = $_POST['avg_jewelry_100'] . "  ";
$avg_jewelry_200 = $_POST['avg_jewelry_200'];
$jewelry = $avg_jewelry_20 . $avg_jewelry_50 . $avg_jewelry_75 . $avg_jewelry_100 . $avg_jewelry_200;
if (strlen($jewelry) > 9) {$avg_price = $avg_price . $jewelry . "
";}

$avg_other_20 = $_POST['avg_other_20'] . "  ";
$avg_other_50 = $_POST['avg_other_50'] . "  ";
$avg_other_75 = $_POST['avg_other_75'] . "  ";
$avg_other_100 = $_POST['avg_other_100'] . "  ";
$avg_other_200 = $_POST['avg_other_200'];
$other = $avg_other_20 . $avg_other_50 . $avg_other_75 . $avg_other_100 . $avg_other_200;
if (strlen($other) > 9) {$avg_price = $avg_price . $other . "
";}

$avg_price = "Average Price Point
" . $avg_price . "

";
//Contemporaries
$contemp = $_POST['contemporaries'];
if (strlen($contemp)>0) {$contemporaries = "
List 3 to 4 collections that are your contemporaries:
    $contemp";}
	
//Domestic or Imported
$produced = $_POST['produced'];
$importedfrom = $_POST['imported_from'];
$locations = $_POST['locations'];
$locations2 = $_POST['locations2'];
$domorimp = "

Collection produced domestically or imported? $produced
";
if ($produced == "Imported") {$domorimp = $domorimp . "Imported from: $importedfrom

";}

//eco friendly?
$ecofriendly = $_POST['eco_friendly'];
$ecofriendlytxt = $_POST['eco_friendly_txt'];
$eco = "
Is the collection eco friendly? $ecofriendly
";
if ($ecofriendly == "yes") {$eco = $eco . "Please explain: $ecofriendlytxt

";}

//New Collection or New Launch?
$newlaunch = $_POST['new_launch'];
$launch = "
Is this a new collection / new launch? $newlaunch
";


//number of retail outlets
$retail_loc_yn = $_POST['retail_loc_yn'];
$numdomstores = $_POST['num_dom_stores'];
$numintstores = $_POST['num_int_stores'];
$retail_locations = "
Retail Locations
Any retail locations? $retail_loc_yn
";
if ($retail_loc_yn == "yes") {$retail_locations = $retail_locations . "Number of domestic stores: $numdomstores   Number of domestic stores:  $numintstores

";}




//Retail Locations
$retailoutlets1 = $_POST['retail_outlets_1'];
$retailoutlets2 = $_POST['retail_outlets_2'];
$intretailoutlets1 = $_POST['int_retail_outlets_1'];
$intretailoutlets2 = $_POST['int_retail_outlets_2'];
$ecommoutlets1 = $_POST['ecomm_outlets_1'];
$ecommoutlets2 = $_POST['ecomm_outlets_2'];
$retail_places = "
Where is collection sold?
Retail Outlets 
    $retailoutlets1
    $retailoutlets2
			   
International Retail Outlets
    $intretailoutlets1
	$intretailoutlets2
	
Ecommerce Sites
    $ecommoutlets1
	$ecommoutlets2

";



//trade show participation information
$futureshows1 = $_POST['upcoming_shows_1'];
$futureshows2 = $_POST['upcoming_shows_2'];
$pastshows1 = $_POST['past_shows_1'];
$pastshows2 = $_POST['past_shows_2'];
$tradeshow = "
Which other tradeshows will collection appear?
    $futureshows1
	$futureshows2
	
Which other tradeshows has collection appeared in the past?
    $pastshows1
	$pastshows2	
";

//china distribution information
$dist_reg_part = $_POST['dist_reg_part'];
$dist_ecomm = $_POST['dist_ecomm'];
$dist_retail_store = $_POST['dist_retail_store'];
$dist_retail_mall = $_POST['dist_retail_mall'];
$dist_multi = $_POST['dist_multi'];
$dist_license = $_POST['dist_license'];
$current_dist_yn = $_POST['current_dist_yn'];
$china_distr = "
Desired Method of Distribution in China
   $dist_reg_part  $dist_ecomm  $dist_retail_store  $dist_retail_mall  $dist_multi  $dist_license

";

//Ideal Clients
$id_retail = $_POST['ideal_retailers'];
$id_dept_store = $_POST['ideal_dept_stores'];
$id_agents = $_POST['ideal_agents'];
$id_man =  $_POST['ideal_man'];
$id_whole =  $_POST['ideal_whole'];
$id_dept_imp = $_POST['ideal_dept_import'];
$id_other =  $_POST['ideal_other']; 
$idealclients = "
Ideal Clients
   $id_retail  $id_dept_store  $id_agents  $id_man  $id_whole  $id_dept_imp  $id_other
	";
	

//publicity information
$publicity = $_POST['publicty'];
$publicity = "
Noteworthy Projects, Celebrity Partnerships, Collaborations, Charities, etc.
" . $publicity . "
";


//additional information
$add_info = $_POST['add_info'];
$add_info = "
Additional Info to assist Jury make their decision:
" . $add_info . "
";



$response = "ENK has received your information.
Thank You for your interest in ENK Mode Shanghai. A member from our team will be in touch with you shortly.
For immediate assistance kindly contact Matt Nastos, Show Coordinator, at mnastos@enkshows.com, T: 646.841.1447
";

$message = $contact_info . $participation_info . $category_info . $coll_change_info . $age_info . $avg_pric . $contemporaries . $domorimp . $eco . $launch . $retail_locations . $retail_places . $tradeshow .  $china_distr . $idealclients . $publicity . $add_info;
$message = stripcslashes($message);

mail("mnastos@enkshows.com, sswimmer@enkshows.com, mevans@wsashow.com", "Shanghai Application $company", $message, "From: Matt Nastos");
mail($email, "ENK Mode Shanghai Application", $response, "From: mnastos@enkshows.com");


?>

<table align="center" border=0 cellpadding=0 cellspacing=0 width=1220 style='border-collapse: collapse'>
 <col width=10>
 <col width=200>
 <col width=200>
 <col width=200>
 <col width=200>
 <col width=200>
 <col width=200>
 <col width=5>
 
 <tr height=130>
    <td height=130 colspan=8><img src="header_shanghai.jpg" width=1219></td>
  </tr>
 <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr height=50>
    <td height=50>&nbsp;</td>
        <td colspan=6 class=itemhead>Thank you for submitting an application for ENK Mode Shanghai. You will be contacted by ENK with further information.</td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
	<td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>

  </tr>
    <tr>
    <td>&nbsp;</td>
	<td class=itemhead colspan=2>For questions, please feel free to contact:</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>

  </tr>
  <tr height=7>
    <td height=7>&nbsp;</td>
	<td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>

  </tr>
  <tr>
    <td>&nbsp;</td>
	<td class=itemhead>Show Director</td>
    <td class=itemhead>Show Coordinator</td>
    <td class=itemhead></td>
    <td class=itemhead></td>
    <td class=item>&nbsp;</td>
    <td class=item>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
	<td class=item>Stephanie Swimmer</td>
    <td class=item>Matt Nastos</td>
    <td class=item></td>
    <td class=item></td>
    <td class=item>&nbsp;</td>
    <td class=item>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
	<td class=item>646.841.1464</td>
    <td class=item>646.841.1447</td>
    <td class=item></td>
    <td class=item></td>
    <td class=item>&nbsp;</td>
    <td class=item>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
	<td class=item>sswimmer@enkshows.com</td>
    <td class=item>mnastos@enkshows.com</td>
    <td class=item></td>
    <td class=item></td>
    <td class=item>&nbsp;</td>
    <td class=item>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
 
</body>
</html>
