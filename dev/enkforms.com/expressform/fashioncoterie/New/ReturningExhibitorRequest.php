<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>EXHIBITOR APPLICATION - RETURNING EXHIBITOR REQUEST</title>
  <script language="JavaScript" src="gen_validatorv31.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="appstyle.css" />
</head>

<body>
<form name= "appform" id= "Shanghai" onSubmit="checkform()" method="post" action="send.php" >

<table align="center" border=0 cellpadding=0 cellspacing=0 style='border-collapse: collapse'>
 <col width=10>
 <col width=200>
 <col width=200>
 <col width=200>
 <col width=200>
 <col width=200>
 <col width=200>
 <col width=5>
 
 <tr height="230px">
    <td  height="230px" colspan=8><img src="coterie_feb2013_headers22.jpg" width=1275px height="230px"></td>
  </tr>
 <tr>
    <td colspan="8"><img src="ReturningExhibitorRequest.png" width="1219" height="109" /></td>   
  </tr>
 
 <tr>
 	<td colspan="8">&nbsp;</td>
 </tr>
 
 
<!-- CONTACT INFORMATION SECTION -->
 <tr height=25>
   <td height=25></td>
   <td class=itemhead colspan=6>Contact  Information</td>
   <td></td>
 </tr>
 <tr height=25>
   <td height=25></td>
   <td class=address colspan=6>Collection Name:
       <input type="text" name="company" size="35" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
   <td></td>
  </tr> 
  <tr height=25>
   <td height=25></td>
   <td class=address colspan=6>Showroom (if applicable):
    <input type="text" name="showroom" size="35" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
   <td></td>
  </tr>
  <tr height=25>
   <td height=25></td>
   <td colspan=6 class=address>Contact Name:
    <input type="text" name="contact" size="35" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
   <td></td>
  </tr>
  <tr height=25>
   <td height=25></td>
   <td class=address colspan=6>Phone:
    <input type="text" name="phone" size="35" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
   <td></td>
  </tr>
  <tr height=23>
   <td height=23></td>
   <td class=address colspan=6>Website: 
    <input type="text" name="website" size="45" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt">
   </td>
   <td></td>
 </tr>
 <tr height=25>
   <td></td>  
   <td class=address colspan=6>Login: 
    <input type="text" name="login" size="30" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt">
   </td>
   <td></td>
 </tr>
 <tr height=25>
   <td></td>  
   <td class=address colspan=6>Password: 
    <input type="text" name="pwd" size="30" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt">
   </td>
   <td></td>
 </tr>
 <tr height=25>
   <td></td>  
   <td class=address colspan=6>Twitter Name (if applicable): 
    <input type="text" name="twitter_name" size="30" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt">
   </td>
   <td></td>
 </tr>
 <tr height=25>
   <td></td>  
   <td class=address colspan=6>Facebook (if applicable): 
    <input type="text" name="facebook_name" size="30" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt">
   </td>
   <td></td>
 </tr>
 <tr height=23>
   <td height=23></td>
   <td></td>
   <td></td>
 </tr>
 
 
 
 <!--PARTICIPATION INFORMATION SECTION -->
 <tr height=23>
   <td height=23></td>
   <td class=itemhead colspan=6>Please indicate which shows you participate (Please check all that apply) </td>
   <td></td>
 </tr>
  <tr height=23>
   <td height=23></td>
   <td class=item colspan=2>&emsp;<input type="checkbox" name="two[]" value="Bridge" />&emsp;Both February and September shows</td>
   <td class=item colspan=2>&emsp;<input type="checkbox" name="two[]" value="Casual" />
   &emsp;Only February shows (Fall/Winter collections)</td>
   <td class=item colspan=2>&emsp;<input type="checkbox" name="two[]" value="Fashion Coterie" />
   &emsp;Only September shows (Spring/Summer collections)</td>
   <td></td>
  </tr>

 
 
 
 
 <!-- CATEGORY INFORMATION SECTION -->
 <tr height=23>
   <td height=23></td>
   <td class=itemhead colspan=6></td>
   <td></td>
 </tr>
  <tr height=23>
   <td height=23></td>
   <td class=itemhead colspan=6>Which of the following categories best defines your collection? (Please check all that apply)</td>
   <td></td>
 </tr>
  <tr height=23>
   <td height=23></td>
  <td class=item>&emsp;<input type="checkbox" name="one[]" value="Bridge" />&ensp;Bridge</td>
   <td class=item>&emsp;<input type="checkbox" name="one[]" value="Casual" /> &ensp;Casual</td>
   <td class=item>&emsp;<input type="checkbox" name="one[]" value="Contemporary" /> &ensp;Contemporary</td>
   <td class=item>&emsp;<input type="checkbox" name="one[]" value="Designer" /> &ensp;Designer</td>   
   <td></td>
   <td></td>
   <td></td>
  </tr>
  <tr height=23>
   <td height=23></td>
   
   <td class=item>&emsp;<input type="checkbox" name="one[]" value="Eveningwear" /> &ensp;Eveningwear</td>
   <td class=item>&emsp;<input type="checkbox" name="one[]" value="Footwear" /> &ensp;Footwear</td>
   <td class=item>&emsp;<input type="checkbox" name="one[]" value="Jewelry" />&ensp;Jewelry</td>
   <td class=item>&emsp;<input type="checkbox" name="one[]" value="Young Contemporary" /> &ensp;Young Contemporary</td>
   
   <td></td>
  </tr>
 
  <tr height=23>
     <td height=23>&nbsp;</td>    
    <td class=item colspan=2>&emsp;<input type="checkbox" name="one[]" value="Accessories - type" /> &ensp;Accessories - Type: 
        <input type="text" name="answer_type" size="32" style=" border:none; border-bottom:solid windowtext .75pt"></td>
    <td class=item colspan=2>&emsp;<input type="checkbox" name="one[]" value="Other" /> &ensp;Other: 
      <input type="text" name="other" size="32" style=" border:none; border-bottom:solid windowtext .75pt"></td>
	<td></td>
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
  
  
  <!-- share a parent company, representative, distributor, etc. INFORMATION SECTION -->
  <tr height=23>
   <td height=23></td>
   <td class=itemhead colspan=6>Do you share a parent company, representative, distributor, etc. with any other companies within the show? If so, please specify and whether or not you would like to be merchandised together, if possible.</td>
   <td></td>
 </tr>
  <!--<tr height=23>
    <td height=23>&nbsp;</td> 
    <td class=item><input type="radio" name="coll_change" value="yes"/>Yes&emsp;&emsp;<input type="radio" name="coll_change" value="no"/>No</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>   
  </tr>-->
  <tr height=40>
    <td height=40>&nbsp;</td>    
    <td class=note colspan=5>**We cannot guarantee locations based on your request, but will do our best to accommodate them. </td>
    <td></td>
  </tr>
  <tr height=23>
    <td height=23>&nbsp;</td>
    <td class=item colspan=5><input type="text" name="share_a_parent_company_details" size="180" style=" border:none; border-bottom:solid windowtext .75pt"/></td>
    <td>&nbsp;</td>
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
  
  
  
  <!-- targeted age INFORMATION SECTION -->
  <tr height=23>
   <td height=23></td>
   <td class=itemhead colspan=6>What is the targeted age demographic? </td>
   <td></td>
 </tr>  
  <tr height=23>
    <td height=23>&nbsp;</td>
    <td class=item colspan=5><input type="text" name="targeted_age" size="180" style=" border:none; border-bottom:solid windowtext .75pt"/></td>
    <td>&nbsp;</td>
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
  
 <!-- WHOLESALE PRICE INFORMATION SECTION -->
  <tr height=23>
   <td height=23></td>
   <td class=itemhead colspan=6>What are your average wholesale price points?</td>
   <td></td>
 </tr> 
  <tr height=40>
    <td height=40>&nbsp;</td>    
    <td class=note colspan=5>**Please note a range for all categories you sell. i.e. pants, tops, knits, dresses, denim, etc.</td>
    <td></td>
  </tr>
  <tr height=23>
    <td height=23>&nbsp;</td>
    <td class=item colspan=5><input type="text" name="wholesale_price_points" size="180" style=" border:none; border-bottom:solid windowtext .75pt"/></td>
    <td>&nbsp;</td>
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
  
  
  
  <!-- RETAIL LOCATION INFORMATION SECTION -->
  <tr height=23>
   <td height=23></td>
   <td class=itemhead colspan=6>Do you have any retail locations? If so, please specify where and the quantity of stores. </td>
   <td></td>
 </tr>    
  <tr height=23>
    <td height=23>&nbsp;</td>
    <td class=item colspan=5><input type="text" name="retail_locations" size="180" style=" border:none; border-bottom:solid windowtext .75pt"/></td>
    <td>&nbsp;</td>
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
  
  
   <!-- projects, celebrity partnerships, collaborations, charities, etc. INFORMATION SECTION -->
  <tr height=23>
   <td height=23></td>
   <td class=itemhead colspan=6>Are there any noteworthy projects, celebrity partnerships, collaborations, charities, etc. that the line is involved with for this season? </td>
   <td></td>
 </tr>    
  <tr height=23>
    <td height=23>&nbsp;</td>
    <td class=item colspan=5><input type="text" name="noteworthy" size="180" style=" border:none; border-bottom:solid windowtext .75pt"/></td>
    <td>&nbsp;</td>
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
  
  
  
  
  <!-- PUBLICITY INFORMATION SECTION -->
  <tr height=46>
   <td height=46></td>
   <td class=itemhead colspan=6>Please explain whether or not you were satisfied with last season’s merchandising of this collection.</td>
   <td></td>
 </tr>
 <tr>
 	<td></td>       
    <td class=note colspan=6>**Specifically your direct adjacencies and section (i.e. Contemporary, Denim, Eveningwear, Bridge, etc).</td>
  </tr>
  <tr>
    <td></td><td class=item colspan=6><textarea name="publicty" rows=6 cols=140></textarea></td>
    <td>&nbsp;</td>
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
 
 
 
 <!-- BOOTH SIZE INFORMATION SECTION -->
  <tr height=46>
   <td height=46></td>
   <td class=itemhead colspan=6>Please specify 1st, 2nd and 3rd choice booth size and type, if accepted to the upcoming show:</td>
   <td></td>
 </tr>
  <tr height=25>
    <td height=25 >&nbsp;</td>
    <td class=dropdown align="left"><select id="type_first" name='type_first' size="1">
          <option value="In-line">In_line</option>
          <option value="Corner">Corner</option>
          <option value="Peninsula">Peninsula (2 corners)</option>
          <option value="Interior Peninsula">Interior Peninsula (No corners)</option>
        </select></td>
    <td class=item>Booth Type - 1st Choice</td>
    <td class=dropdown align="left"><select id="type_second" name='type_second' size="1">
          <option value="In-line">In_line</option>
          <option value="Corner">Corner</option>
          <option value="Peninsula">Peninsula (2 corners)</option>
          <option value="Interior Peninsula">Interior Peninsula (No corners)</option>
        </select></td>
    <td class=item>Booth Type - 2nd Choice</td>
    <td class=dropdown align="left"><select id="type_third" name='type_third' size="1">
          <option value="In-line">In_line</option>
          <option value="Corner">Corner</option>
          <option value="Peninsula">Peninsula (2 corners)</option>
          <option value="Interior Peninsula">Interior Peninsula (No corners)</option>
        </select></td>
    <td class=item>Booth Type - 3rd Choice</td>
    <td>&nbsp;</td>
  </tr>
  <tr height=25>
    <td height=25 >&nbsp;</td>
    <td class=dropdown align="left">
	    <select id="size_first" name='size_first' size="1">
          <option value="10'deep x 10'wide / 3x3 meters">10'deep x 10'wide / 3x3 meters</option>
          <option value="10'deep x 13'wide / 3x4 meters">10'deep x 13'wide / 3x4 meters</option>
          <option value="10'deep x 16'wide / 3x5 meters">10'deep x 16'wide / 3x5 meters</option>
          <option value="10'deep x 20'wide / 3x6 meters">10'deep x 20'wide / 3x6 meters</option>
		  <option value="20'deep x 20'wide / 3x6 meters">20'deep x 20'wide / 6x6 meters</option>
        </select></td>
    <td class=item>Booth Size - 1st Choice</td>
    <td class=dropdown align="left">
	    <select id="size_second" name='size_second' size="1">
          <option value="10'deep x 10'wide / 3x3 meters">10'deep x 10'wide / 3x3 meters</option>
          <option value="10'deep x 13'wide / 3x4 meters">10'deep x 13'wide / 3x4 meters</option>
          <option value="10'deep x 16'wide / 3x5 meters">10'deep x 16'wide / 3x5 meters</option>
          <option value="10'deep x 20'wide / 3x6 meters">10'deep x 20'wide / 3x6 meters</option>
		  <option value="20'deep x 20'wide / 3x6 meters">20'deep x 20'wide / 6x6 meters</option>
        </select></td>
    <td class=item>Booth Size - 2nd Choice</td>
    <td class=dropdown align="left">
	    <select id="size_third" name='size_third' size="1">
          <option value="10'deep x 10'wide / 3x3 meters">10'deep x 10'wide / 3x3 meters</option>
          <option value="10'deep x 13'wide / 3x4 meters">10'deep x 13'wide / 3x4 meters</option>
          <option value="10'deep x 16'wide / 3x5 meters">10'deep x 16'wide / 3x5 meters</option>
          <option value="10'deep x 20'wide / 3x6 meters">10'deep x 20'wide / 3x6 meters</option>
		  <option value="20'deep x 20'wide / 3x6 meters">20'deep x 20'wide / 6x6 meters</option>
        </select></td>
    <td class=item>Booth Size - 3rd Choice</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height=35></td>
    <td class=item>Other size (please specify)</td>
    <td colspan="4"> <input type="text" name="other_Size" size="50" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
  </tr>
  <tr height=35>
    <td height=35>&nbsp;</td>
    <td class=item colspan=6>&nbsp;**Please be advised that ENK will try to fulfill your request, but it will be contingent on whether the Booth size, type and/or location are available.</td>
    <td>&nbsp;</td>
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
  
  
  
 <!-- STORE AND BUYER INFORMATION SECTION -->
 <tr height=46>
   <td height=46></td>
   <td class=itemhead colspan=6>Store and Buyer Information</td>
   <td></td>
 </tr>
  <tr>
    <td>&nbsp;</td>
    <td class=item colspan=6>**Below, please list the top 3 department or specialty stores you are currently selling.</td>
    <td>&nbsp;</td>
  </tr>
 <tr height=25>
   <td height=25></td>
   <td class=address colspan=2><b>1. Store:&ensp;</b>
       <input type="text" name="store1" size="45" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
   <td class=address colspan=2><b>Buyer's Phone:&ensp;</b>
    <input type="text" name="store1_phone" size="30" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
   <td colspan=2 class=address><b>Website:&ensp;</b>
    <input type="text" name="store1_website" size="45" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
   <td></td>
  </tr>
 <tr height=25>
   <td height=25></td>
   <td class=address colspan=2>Buyer Name:
       <input type="text" name="store1_name" size="45" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
   <td class=address colspan=2>Title
    <input type="text" name="store1_title" size="45" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
   <td colspan=2 class=address>Email:
    <input type="text" name="store1_email" size="45" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
   <td></td>
  </tr>
  <tr height=25>
    <td height=25>&nbsp;</td>
   <td class=address colspan=6>Buyer Address:
     <input type="text" name="store1_address" size="160" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
    <td>&nbsp;</td>
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
<tr height=25>
   <td height=25></td>
   <td class=address colspan=2><b>2. Store:&ensp;</b>
       <input type="text" name="store2" size="45" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
   <td class=address colspan=2><b>Buyer's Phone:&ensp;</b>
    <input type="text" name="store2_phone" size="30" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
   <td colspan=2 class=address><b>Website:&ensp;</b>
    <input type="text" name="store2_website" size="45" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
   <td></td>
  </tr>
 <tr height=25>
   <td height=25></td>
   <td class=address colspan=2>Buyer Name:
       <input type="text" name="store2_name" size="45" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
   <td class=address colspan=2>Title
    <input type="text" name="store2_title" size="45" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
   <td colspan=2 class=address>Email:
    <input type="text" name="store2_email" size="45" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
   <td></td>
  </tr>
  <tr height=25>
    <td height=25>&nbsp;</td>
   <td class=address colspan=6>Buyer Address:
     <input type="text" name="store2_address" size="160" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
    <td>&nbsp;</td>
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
<tr height=25>
   <td height=25></td>
   <td class=address colspan=2><b>3. Store:&ensp;</b>
       <input type="text" name="store3" size="45" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
   <td class=address colspan=2><b>Buyer's Phone:&ensp;</b>
    <input type="text" name="store3_phone" size="30" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
   <td colspan=2 class=address><b>Website:&ensp;</b>
    <input type="text" name="store3_website" size="45" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
   <td></td>
  </tr>
 <tr height=25>
   <td height=25></td>
   <td class=address colspan=2>Buyer Name:
       <input type="text" name="store3_name" size="45" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
   <td class=address colspan=2>Title
    <input type="text" name="store3_title" size="45" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
   <td colspan=2 class=address>Email:
    <input type="text" name="store3_email" size="45" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
   <td></td>
  </tr>
  <tr height=25>
    <td height=25>&nbsp;</td>
   <td class=address colspan=6>Buyer Address:
     <input type="text" name="store3_address" size="160" class="BodyCopy"  style=" border:none; border-bottom:solid windowtext .75pt"></td>
    <td>&nbsp;</td>
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
  
  
  
  <!-- ADDITIONAL INFORMATION SECTION -->
  <tr height=46>
   <td height=46></td>
   <td class=itemhead colspan=6>Please provide any additional information or comments below that you feel may assist the Jury in making their decision. </td>
   <td></td>
 </tr>
  <tr>
    <td></td><td class=item colspan=6><textarea name="add_info" rows=6 cols=140></textarea></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
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
  <tr height=25>
    <td height=25>&nbsp;</td>
   <td class=itemhead colspan=6>Note: Completing this application does not guarantee acceptance into ENK Mode 2013, nor does particpation in past ENK shows.</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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
	<td><input type="submit" name="rer_submit" value="Submit Form"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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
   

<tr height=23>
   <td height=23></td>
   <td class=itemhead colspan=6></td>
   <td></td>
 </tr>
 
 </table>
</body>
</html>
