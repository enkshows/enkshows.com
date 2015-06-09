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


//contact information
$company = $_POST['company'];
$showroom = $_POST['showroom'];
$contact = $_POST['contact'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$website = $_POST['website'];
$contact_info = "Contact Information
Collection:\t$company
Showroom:\t$showroom
Contact Name:\t$contact
Phone:\t\t$phone
Email:\t\t$email
Website:\t$website

";

//participation information
$part_AC = $_POST['part_AC'];
$part_NYC = $_POST['part_NYC'];
$part_FC = $_POST['part_FC'];
$part_CC = $_POST['part_CC'];
$part_IC = $_POST['part_IC'];
$part_VEGAS = $_POST['part_VEGAS'];
$part_CHIC = $_POST['part_CHIC'];
$part_WSA = $_POST['part_WSA'];
$participation_info = "Participation in ENK Events";
if (strlen($part_AC)>0) {$participation_info = $participation_info . "
" . $part_AC;}
if (strlen($part_NYC)>0) {$participation_info = $participation_info . "
" . $part_NYC;}
if (strlen($part_FC)>0) {$participation_info = $participation_info . "
" . $part_FC;}
if (strlen($part_CC)>0) {$participation_info = $participation_info . "
" . $part_CC;}
if (strlen($part_IC)>0) {$participation_info = $participation_info . "
" . $part_IC;}
if (strlen($part_VEGAS)>0) {$participation_info = $participation_info . "
" . $part_VEGAS;}
if (strlen($part_CHIC)>0) {$participation_info = $participation_info . "
" . $part_CHIC;}
if (strlen($part_WSA)>0) {$participation_info = $participation_info . "
" . $part_WSA;}
$participation_info = $participation_info . "

";
$participation_info = stripcslashes($participation_info);

//category information
$cat_bridge = $_POST['cat_bridge'];
$cat_casual = $_POST['cat_casual'];
$cat_cont = $_POST['cat_cont'];
$cat_design = $_POST['cat_design'];
$cat_evening = $_POST['cat_evening'];
$cat_footwear = $_POST['cat_footwear'];
$cat_young = $_POST['cat_young'];
$cat_other = $_POST['cat_other'];
$cat_other_text = $_POST['cat_other_text'];
$cat_access_jewelry = $_POST['cat_access_jewelry'];
$cat_access_scarves = $_POST['cat_access_scarves'];
$cat_access_hb = $_POST['cat_access_hb'];
$cat_access_other = $_POST['cat_access_other'];
$category_info = "Category Information";
if (strlen($cat_bridge)>0) {$category_info = $category_info . "
" . $cat_bridge;}
if (strlen($cat_casual)>0) {$category_info = $category_info . "
" . $cat_casual;}
if (strlen($cat_cont)>0) {$category_info = $category_info . "
" . $cat_cont;}
if (strlen($cat_design)>0) {$category_info = $category_info . "
" . $cat_design;}
if (strlen($cat_evening)>0) {$category_info = $category_info . "
" . $cat_evening;}
if (strlen($cat_footwear)>0) {$category_info = $category_info . "
" . $cat_footwear;}
if (strlen($cat_young)>0) {$category_info = $category_info . "
" . $cat_young;}
if ($cat_other) {$category_info = $category_info . "
Other:" . $cat_other_text;}
if (strlen($cat_access_jewelry)>0) {$category_info = $category_info . "
" . $cat_access_jewelry;}
if (strlen($cat_access_scarves)>0) {$category_info = $category_info . "
" . $cat_access_scarves;}
if (strlen($cat_access_hb)>0) {$category_info = $category_info . "
" . $cat_access_hb;}
if ($cat_access_other) {$category_info = $category_info . "
Accessories Other: $cat_access_other_text";}
$category_info = $category_info . "
";


//collection changed information
$coll_change = $_POST['coll_change'];
$coll_change_explain = $_POST['coll_change_explain'];
$coll_change_info = "Change in Collection? $coll_change";
if ($coll_change == "yes") { $coll_change_info = $coll_change_info . "
Explanation: $coll_change_explain

";}


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

$avg_jackets_20 = $_POST['avg_jackets_20'] . "  ";
$avg_jackets_50 = $_POST['avg_jackets_50'] . "  ";
$avg_jackets_75 = $_POST['avg_jackets_75'] . "  ";
$avg_jackets_100 = $_POST['avg_jackets_100'] . "  ";
$avg_jackets_200 = $_POST['avg_jackets_200'];
$jackets = $avg_jackets_20 . $avg_jackets_50 . $avg_jackets_75 . $avg_jackets_100 . $avg_jackets_200;
if (strlen($jackets) > 9) {$avg_price = $avg_price . $jackets . "
";}

$avg_outerwear_20 = $_POST['avg_outerwear_20'] . "  ";
$avg_outerwear_50 = $_POST['avg_outerwear_50'] . "  ";
$avg_outerwear_75 = $_POST['avg_outerwear_75'] . "  ";
$avg_outerwear_100 = $_POST['avg_outerwear_100'] . "  ";
$avg_outerwear_200 = $_POST['avg_outerwear_200'];
$outerwear = $avg_outerwear_20 . $outerwear_50 . $avg_outerwear_75 . $avg_outerwear_100 . $avg_outerwear_200;
if (strlen($outerwear) > 9) {$avg_price = $avg_price . $outerwear . "
";}

$avg_price = "Average Price Point
" . $avg_price . "

";




//retail locations
$retail_loc_yn = $_POST['retail_loc_yn'];
$num_stores = $_POST['num_stores'];
$locations = $_POST['locations'];
$locations2 = $_POST['locations2'];
$retail_locations = "Retail Locations
Any retail locations? $retail_loc_yn
";
if ($retail_loc_yn == "yes") {$retail_locations = $retail_locations . "Number of stores: $num_stores   Locations:  $locations
$locations2

";}

//trade show participation information
$other_shows_yn = $_POST['other_shows_yn'];
$other_shows = $_POST['other_shows'];
$tradeshow = "
Participate in Other Trade Shows? $other_shows_yn
";
if ($other_shows_yn == "yes") {$tradeshow = $tradeshow . "$other_shows
";}


//china distribution information
$dist_reg_part = $_POST['dist_reg_part'];
$dist_ecomm = $_POST['dist_ecomm'];
$dist_retail_store = $_POST['dist_retail_store'];
$dist_retail_mall = $_POST['dist_retail_mall'];
$dist_multi = $_POST['dist_multi'];
$dist_license = $_POST['dist_license'];
$current_dist_yn = $_POST['current_dist_yn'];
$china_distr = "
METHOD OF DISTRIBUTION IN CHINA
$dist_reg_part  $dist_ecomm  $dist_retail_store  $dist_retail_mall  $dist_multi  $dist_license

Currently any distibution in China? $current_dist_yn
";
if ($current_dist_yn == "yes") {$china_distr = $china_distr . "Where and How Many Seasons: $current_dist

";}


//publicity information
$publicity = $_POST['publicty'];
$publicity = "
Noteworthy Projects, Celebrity Partnerships, Collaborations, Charities, etc.
" . $publicity . "
";

//booth size information
$type_first = $_POST['type_first'];
$type_second = $_POST['type_second'];
$type_third = $_POST['type_third'];
$size_first = $_POST['size_first'];
$size_second = $_POST['size_second'];
$size_third = $_POST['size_third'];

$booth_size="
Booth Type Requested
1st Choice: $type_first
2nd Choice: $type_second
3rd Choice: $type_third

Booth Size Requested
1st Choice: $size_first

2nd Choice: $size_second

3rd Choice: $size_third

";
$booth_size = stripcslashes($booth_size);

//store and buyer information
$store1 = $_POST['store1'];
$store1_phone = $_POST['store1_phone'];
$store1_website = $_POST['store1_website'];
$store1_name = $_POST['store1_name'];
$store1_title = $_POST['store1_title'];
$store1_email = $_POST['store1_email'];
$store1_address = $_POST['store1_address'];
$store1_percent = $_POST['store1_percent'];
$store2 = $_POST['store2'];
$store2_phone = $_POST['store2_phone'];
$store2_website = $_POST['store2_website'];
$store2_name = $_POST['store2_name'];
$store2_title = $_POST['store2_title'];
$store2_email = $_POST['store2_email'];
$store2_address = $_POST['store2_address'];
$store2_percent = $_POST['store2_percent'];
$store3 = $_POST['store3'];
$store3_phone = $_POST['store3_phone'];
$store3_website = $_POST['store3_website'];
$store3_name = $_POST['store3_name'];
$store3_title = $_POST['store3_title'];
$store3_email = $_POST['store3_email'];
$store3_address = $_POST['store3_address'];
$store3_percent = $_POST['store3_percent'];
$store_info="
Store and Buyer Information
Store 1
Store: $store1
Buyer's Phone: $store1_phone
Website: $store1_website
Buyer's Name: $store1_name
Title: $store1_title
Email: $store1_email
Buyer's Address: $store1_address

Percentage of collection carried by store: $store1_percent

Store 2
Store: $store2
Buyer's Phone: $store2_phone
Website: $store2_website
Buyer's Name: $store2_name
Title: $store2_title
Email: $store2_email
Buyer's Address: $store2_address

Percentage of collection carried by store: $store2_percent

Store 3
Store: $store3
Buyer's Phone: $store3_phone
Website: $store3_website
Buyer's Name: $store3_name
Title: $store3_title
Email: $store3_email
Buyer's Address: $store3_address

Percentage of collection carried by store: $store3_percent

";


//additional information
$add_info = $_POST['add_info'];
$add_info = "
Additional Information or Comments
" . $add_info;

$response = "ENK has received your information.
Thank You for your interest in ENK Mode Shanghai. A member from our team will be in touch with you shortly.
For immediate assistance kindly contact Matt Nastos, Show Coordinator, at mnastos@enkshows.com, T: 646.841.1447
";

$message = $contact_info . $participation_info . $category_info . $coll_change_info . $age_info . $avg_price . $retail_locations . $tradeshow . 
$china_distr . $publicity . $booth_size . $store_info . $add_info;

mail("mnastos@enkshows.com, mevans@wsashow.com", "Shanghai Application $company", $message, "From: Matt Nastos");
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
	<td class=itemhead>Women's</td>
    <td class=itemhead>Men's</td>
    <td class=itemhead>Footwear</td>
    <td class=itemhead>Show Coordinator</td>
    <td class=item>&nbsp;</td>
    <td class=item>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
	<td class=item>Lee Rosenbaum</td>
    <td class=item>Mike Sampson</td>
    <td class=item>David Kahan</td>
    <td class=item>Matt Nastos</td>
    <td class=item>&nbsp;</td>
    <td class=item>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
	<td class=item>646.841.1464</td>
    <td class=item>646.841.1446</td>
    <td class=item>646.841.1461</td>
    <td class=item>646.841.1447</td>
    <td class=item>&nbsp;</td>
    <td class=item>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
	<td class=item>lrosenbaum@enkshows.com</td>
    <td class=item>msampson@enkshows.com</td>
    <td class=item>dkahan@enkshows.com</td>
    <td class=item>mnastos@enkshows.com</td>
    <td class=item>&nbsp;</td>
    <td class=item>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
 
</body>
</html>
