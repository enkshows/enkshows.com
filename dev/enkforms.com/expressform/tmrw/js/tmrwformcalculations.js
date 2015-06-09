/*
This source is shared under the terms of LGPL 3
www.gnu.org/licenses/lgpl.html

You are free to use the code in Commercial or non-commercial projects
*/

 //Set up an associative array
 //The keys represent the pre-deadline price and the post deadline price
 //
 //Electrical
 
 
 var lights1_pr= new Array();
 lights1_pr["pre"]=381;
 lights1_pr["post"]=381;
 
 var epower1_pr= new Array();
 epower1_pr["pre"]=99;
 epower1_pr["post"]=131;
 
 var epower2_pr= new Array();
 epower2_pr["pre"]=170;
 epower2_pr["post"]=235;
 
 var epower3_pr= new Array();
 epower3_pr["pre"]=202;
 epower3_pr["post"]=282;
 
 var epower4_pr= new Array();
 epower4_pr["pre"]=32;
 epower4_pr["post"]=44;
 
 var epower5_pr= new Array();
 epower5_pr["pre"]=32;
 epower5_pr["post"]=44;
 
var epower6_pr= new Array();
epower6_pr["pre"]=224;
epower6_pr["post"]=314;

var epower7_pr= new Array();
epower7_pr["pre"]=297;
epower7_pr["post"]=404;

 
 //Miscellaneous Furnishings
var misc_furn1_pr= new Array() ;
misc_furn1_pr["pre"]=250;
misc_furn1_pr["post"]=250;

var misc_furn2_pr= new Array() ;
misc_furn2_pr["pre"]=175;
misc_furn2_pr["post"]=175;

var misc_furn3_pr= new Array() ;
misc_furn3_pr["pre"]=250;
misc_furn3_pr["post"]=250;

var misc_furn4_pr= new Array() ;
misc_furn4_pr["pre"]=250;
misc_furn4_pr["post"]=250;

var misc_furn5_pr= new Array() ;
misc_furn5_pr["pre"]=150;
misc_furn5_pr["post"]=150;
 
var misc_furn6_pr= new Array() ;
misc_furn6_pr["pre"]=75;
misc_furn6_pr["post"]=75;

//Mannequins & Hangers
var f_mann_1_pr= new Array() ;
f_mann_1_pr["pre"]=90;
f_mann_1_pr["post"]=90;

var f_mann_2_pr= new Array() ;
f_mann_2_pr["pre"]=90;
f_mann_2_pr["post"]=90;

var f_mann_3_pr= new Array() ;
f_mann_3_pr["pre"]=90;
f_mann_3_pr["post"]=90;

var f_mann_4_pr= new Array() ;
f_mann_4_pr["pre"]=90;
f_mann_4_pr["post"]=90;

var f_mann_5_pr= new Array() ;
f_mann_5_pr["pre"]=90;
f_mann_5_pr["post"]=90;

var f_mann_6_pr= new Array() ;
f_mann_6_pr["pre"]=90;
f_mann_6_pr["post"]=90;

var f_mann_7_pr= new Array() ;
f_mann_7_pr["pre"]=90;
f_mann_7_pr["post"]=90;

var f_mann_8_pr= new Array() ;
f_mann_8_pr["pre"]=90;
f_mann_8_pr["post"]=90;

var m_mann_1_pr= new Array() ;
m_mann_1_pr["pre"]=90;
m_mann_1_pr["post"]=90;

var m_mann_2_pr= new Array() ;
m_mann_2_pr["pre"]=90;
m_mann_2_pr["post"]=90;

var m_mann_3_pr= new Array() ;
m_mann_3_pr["pre"]=90;
m_mann_3_pr["post"]=90;

var m_mann_4_pr= new Array() ;
m_mann_4_pr["pre"]=90;
m_mann_4_pr["post"]=90;

var k_mann_1_pr= new Array() ;
k_mann_1_pr["pre"]=55;
k_mann_1_pr["post"]=55;

var k_mann_2_pr= new Array() ;
k_mann_2_pr["pre"]=55;
k_mann_2_pr["post"]=55;

var k_mann_3_pr= new Array() ;
k_mann_3_pr["pre"]=55;
k_mann_3_pr["post"]=55;

var k_mann_4_pr= new Array() ;
k_mann_4_pr["pre"]=55;
k_mann_4_pr["post"]=55;

var k_mann_5_pr= new Array() ;
k_mann_5_pr["pre"]=55;
k_mann_5_pr["post"]=55;

var a_hang_pr= new Array() ;
a_hang_pr["pre"]=20;
a_hang_pr["post"]=20;

var a_hang_clip_pr= new Array() ;
a_hang_clip_pr["pre"]=20;
a_hang_clip_pr["post"]=20;

var k_hang_pr= new Array() ;
k_hang_pr["pre"]=20;
k_hang_pr["post"]=20;

var k_hang_clip_pr= new Array() ;
k_hang_clip_pr["pre"]=20;
k_hang_clip_pr["post"]=20;


//Deadline
var deadline="pre";


 var item= new Array() ;
 
 item[0]= "misc_furn1";
 item[1]= "misc_furn2";
 item[2]= "misc_furn3";
 item[3]= "misc_furn4";
 item[4]= "misc_furn5";


 
 var eitem= new Array() ;
 eitem[0]= "lights1";
 eitem[1]= "epower1";
 eitem[2]= "epower2";
 eitem[3]= "epower3";
 eitem[4]= "epower4";
 eitem[5]= "epower5";
 eitem[6]= "epower6";
 eitem[7]= "epower7";

 
 var mitem= new Array();
 mitem[0]= "f_mann_1";
 mitem[1]= "f_mann_2";
 mitem[2]= "f_mann_3";
 mitem[3]= "f_mann_4";
 mitem[4]= "f_mann_5";
 mitem[5]= "f_mann_6";
 mitem[6]= "f_mann_7";
 mitem[7]= "f_mann_8";
 mitem[8]= "m_mann_1";
 mitem[9]= "m_mann_2";
 mitem[10]= "m_mann_3";
 mitem[11]= "m_mann_4";
 mitem[12]= "k_mann_1";
 mitem[13]= "k_mann_2";
 mitem[14]= "k_mann_3";
 mitem[15]= "k_mann_4";
 mitem[16]= "k_mann_5";
 mitem[17]= "a_hang";
 mitem[18]= "a_hang_clip";
 mitem[19]= "k_hang";
 mitem[20]= "k_hang_clip";
 
 
var boothsize= new Array();   
   for (j=0; j<9; j++) {
      boothsize[j]= [0,0,0,0]
	}
   
   boothsize [1] [0] = 8;
   boothsize [1] [1] = 5;
   boothsize [1] [2] = 1;
   boothsize [1] [3] = 1;
   boothsize [2] [0] = 5;
   boothsize [2] [1] = 8;
   boothsize [2] [2] = 1;
   boothsize [2] [3] = 1;   
   boothsize [3] [0] = 8;
   boothsize [3] [1] = 10;
   boothsize [3] [2] = 2;
   boothsize [3] [3] = 1;
   boothsize [4] [0] = 8;
   boothsize [4] [1] = 15;
   boothsize [4] [2] = 3;
   boothsize [4] [3] = 1;
   boothsize [5] [0] = 8;
   boothsize [5] [1] = 20;
   boothsize [5] [2] = 4;
   boothsize [5] [3] = 2;
   boothsize [6] [0] = 8;
   boothsize [6] [1] = 30;
   boothsize [6] [2] = 6;
   boothsize [6] [3] = 3;
   boothsize [7] [0] = 8;
   boothsize [7] [1] = 40;
   boothsize [7] [2] = 8;
   boothsize [7] [3] = 4;
   boothsize [8] [0] = 6;
   boothsize [8] [1] = 10;
   boothsize [8] [2] = 2;
   boothsize [8] [3] = 1;
 
	
	
function calculateTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
	var TMRWform= document.forms["TMRW"];
    var Total=0.00;
    var subtotal=0.00;
    var pst=0.0;
	var pstsubtotal=0.00
	var tax=0.0;
    var eTotal=0.00;
    var esubtotal=0.00;
    var etax=0.0;
    var mTotal=0.00;
	var msubtotal=0.00;
	var mtax=0.0;
    var item_type = item[0];
    var item_qty= 0;
    var item_price=0;
    var eitem_type = eitem[0];
    var eitem_qty= 0;
    var eitem_price=0;
	var mitem_type = mitem[0];
    var mitem_qty= 0;
    var mitem_price=0;
   	var booths=0;
    var boothdims="";
	var boothdimens="";
    var boothsqft=0;
	var category="";
	var catname="";
	var tables=0;
	var shelves=0;
	var racks=0;
	var swapshelvesqty=0;
    var swapracksqty=0; 
	var toomanyfix="";
	var racklength="";
	var rackelength="";
	var fixture="";
	var fixdescr="";
    var seating=" chairs";
	var boothinfo1="Your booth: ";
	var boothinfo2="";
	var boothinfo3="";
	var fixcount=0;
	var fix_email="";
	var table_email="";
	var swap_one="";
	
	// Get Category Type and Product Type

	var product=getCheckedValue(TMRWform.elements['prodtype']);
	var boothval;
	if (booths > 0) {boothval = "assigned";}
	    else {boothval = "";}
	
	
	var prodobject= "";
	    prodobject.innerHTML=product;
    document.getElementById('prodval').value=product;	
	
	var boothobject= "";
	    boothobject.innerHTML=product;
    document.getElementById('boothval').value=boothval;
	
	
	// BOOTH SIZE
	booths= TMRWform.elements["boothsize"].value;
	boothsqft = boothsize [booths] [0] * boothsize [booths] [1];
	boothdimens = boothsize [booths] [0] + "'D x " + boothsize [booths] [1] + "'W";
	boothinfo1 = boothinfo1 + boothdimens + ",  " + boothsqft + " square feet in ";

	var boothval;
	if (booths > 0) {boothval = "assigned";}
	    else {boothval = "";}
		
	var boothobject= "";
	    boothobject.innerHTML=product;
    document.getElementById('boothval').value=boothval;
	
	//Booth Furnishings
	
	switch(product) {
	case "1": 
	    racks= boothsize [booths] [2];	     
         fixdescr = "(" + racklength + "long, dark metal)";
		 if (racks > 1) { fixture= " Garment Racks "; }
		    else { fixture= " Garment Rack "; }
		fixcount= racks;
		break;
	case "2":
		shelves= boothsize [booths] [2];
		fixdescr = "(dark wood, 58\" w x 72\" h x 11-3/4\" d, 11\" between shelves)";		    
        if (shelves > 1) { fixture= " EZ Shelves "; }
		    else { fixture= " EZ Shelf "; }
		fixcount= shelves;
		break;
	case "3":
		shelves= boothsize [booths] [2];
        fixdescr = "(dark wood, 58\" w x 72\" h x 11-3/4\" d, 11\" between shelves)"		
         if (shelves > 1) { fixture= " EZ Shelves "; }
		    else { fixture= " EZ Shelf "; }
		fixcount= shelves;
		break;
	}	
	tables = boothsize [booths] [3];
	tablesets = tables + " table";
	if (tables > 1) {tablesets = tablesets+"s";}
	seating = 2*tables + " chairs";

    boothinfo1 = boothinfo1 + " includes: ";
    boothinfo2 = "&emsp;&#8226;&nbsp;" + fixcount + fixture + fixdescr;
    boothinfo3 = "&emsp;&#8226;&nbsp;" + tablesets + " and " + seating;
	
	fix_email = fixcount + rackelength + fixture;
	table_email = tablesets + " and " + seating;

    document.getElementById('boothinfo1').innerHTML=boothinfo1;
    document.getElementById('boothinfo2').innerHTML=boothinfo2;
	document.getElementById('boothinfo3').innerHTML=boothinfo3;

    document.getElementById('boothinfo1val').value=boothinfo1;
    document.getElementById('boothinfo2val').value=boothinfo2;
    document.getElementById('boothinfo3val').value=boothinfo3;
	
	document.getElementById('fixemail').value=fix_email;
    document.getElementById('tableemail').value=table_email;
	
    TMRWform.fixcountval.value = fixcount;
	TMRWform.fixtureval.value = fixture;
	fixturecount = parseInt(fixcount);
	
	swapping = TMRWform.swap.checked;
	swap_one = TMRWform.swapone.value;

    if (swapping && swap_one.length < 2) {
	    swapshelvesqty=eval(TMRWform.swapshelves.value);
		swapracksqty=eval(TMRWform.swapracks.value);
		if (eval(swapshelvesqty+swapracksqty) > fixturecount) {
		    toomanyfix = "You may only select " + fixturecount + " fixtures.";
			 alert("You have chosen too many fixtures"); }
	}
	
	var toomanyobj= document.getElementById('toomanyfixtures');
	    toomanyobj.innerHTML= toomanyfix;
	
// Booth Information
	var divobj= document.getElementById('Boothdims');
	divobj.innerHTML= "Booth Size:  " + boothsqft + " square feet";	
	
	document.getElementById('booth_size').value=boothdimens;
	document.getElementById('square_feet').value=boothsqft;	
	
   
   //Calculate Electric Subtotal
	for (i= 0; i < 8; i++){
	   eitem_type= eitem[i];
	   eitem_qty= TMRWform.elements[eitem_type].value;
	   eitem_price= eval(eitem[i]+"_pr[deadline]");
	   esubtotal= esubtotal + (eitem_qty * eitem_price)};
	
	etax=0.08875 * esubtotal;
	eTotal=esubtotal+etax;
	
	var divobj= document.getElementById('esubtotal');
           divobj.innerHTML= esubtotal.toFixed(2);
	
	document.getElementById('esubtotalval').value=esubtotal;
	
	var divobj= document.getElementById('etax');
	   divobj.innerHTML= etax.toFixed(2);

	document.getElementById('etaxval').value=etax;
	
	var divobj= document.getElementById('eTotal');
	   divobj.innerHTML= eTotal.toFixed(2);	
	
	document.getElementById('etotalval').value=eTotal;
	


	
	//Calculate Mannequin Subtotal
	for (i= 0; i < 21; i++){
	   mitem_type= mitem[i];
	   mitem_qty= TMRWform.elements[mitem_type].value;	
	   mitem_price= eval(mitem[i]+"_pr[deadline]");	
	   msubtotal= msubtotal + (mitem_qty * mitem_price)};
	
	mtax=0.08875 * msubtotal;
	mTotal=msubtotal+mtax;
	
	var divobj= document.getElementById('msubtotal');
           divobj.innerHTML= msubtotal.toFixed(2);
	
	document.getElementById('msubtotalval').value=msubtotal;
	
	var divobj= document.getElementById('mtax');
	   divobj.innerHTML= mtax.toFixed(2);

	document.getElementById('mtaxval').value=mtax;
	
	var divobj= document.getElementById('mTotal');
	   divobj.innerHTML= mTotal.toFixed(2);	
	
	document.getElementById('mtotalval').value=mTotal;
	
    //Calculate subtotal
	for (i= 0; i < 4; i++){
	   item_type= item[i];
	   item_qty= TMRWform.elements[item_type].value;	
	   item_price= eval(item[i]+"_pr[deadline]");	
	   subtotal= subtotal + (item_qty * item_price)};
				
	
	subtotal=subtotal;
	pst= subtotal * .030;
	pstsubtotal = subtotal + pst;	
	tax=0.08875 * pstsubtotal;
	Total=pstsubtotal+tax;
	
    document.getElementById('subtotal').innerHTML= subtotal.toFixed(2);
	document.getElementById('subtotalval').value= subtotal;
	
	var divobj= document.getElementById('pst');
    divobj.innerHTML= pst.toFixed(2);	
	document.getElementById('pstval').value=pst;
	
	var divobj= document.getElementById('pstsubtotal');
    divobj.innerHTML= pstsubtotal.toFixed(2);	
	document.getElementById('pstsubtotalval').value=pstsubtotal;
	
	var divobj= document.getElementById('tax');
	divobj.innerHTML= tax.toFixed(2);	
	document.getElementById('taxval').value=tax;
	
	var divobj= document.getElementById('Total');
	divobj.innerHTML= Total.toFixed(2);		
	document.getElementById('totalval').value=Total;
		
	

}

function NoBoothSize()
{
    var divobj= document.getElementById('Boothdims');
    divobj.innerHTML= "Enter your booth size at top of page";
}

// Get Radio Buttons
	function getCheckedValue(radioObj) {
	if(!radioObj)
		return "";
	var radioLength = radioObj.length;
	if(radioLength == undefined)
		if(radioObj.checked)
			return radioObj.value;
		else
			return "";
	for(var i = 0; i < radioLength; i++) {
		if(radioObj[i].checked) {
			return radioObj[i].value;
		}
	}
	return "";
   }

// Show Div
function ShowDiv(DivId)
{
   document.getElementById(DivId).style.display = 'block';
  } 
  
  function paymentinfo()
{
//Payment Information Function

var payinfo="";
var TMRWform= document.forms["TMRW"];
var pay_type=getCheckedValue(TMRWform.elements['paytype']);



payinfo = "<table align=\"center\" border=0 cellpadding=0 cellspacing=0 style='border-collapse:collapse'>\r\n";
payinfo = payinfo + "<col width=1153> <tr> <td class=address>\r\n<br /><br />";

if (pay_type == "cc") {

payinfo = payinfo + "Credit Card Number: <input type='text'  name='credit' size='43' class='address'  style=' border:none; border-bottom:solid windowtext .75pt;'>&emsp;&emsp;\r\n";
payinfo = payinfo + "Expiration Date:<input type='text' name='exp_date' size='20' class='address'  style=' border:none; border-bottom:solid windowtext .75pt;'><br />"
payinfo = payinfo + "Cardholder Name:<input type='text' name='cardholder' size='45' class='address'  style=' border:none; border-bottom:solid windowtext .75pt;'>&emsp;&emsp;CCV: <input type='text' name='ccv' size='15' class='address'  style=' border:none; border-bottom:solid windowtext .75pt;'><br />"
payinfo = payinfo + "Billing Street Address:<input type='text' name='billing_street' size='80' class='address'  style=' border:none; border-bottom:solid windowtext .75pt;'><br />"
payinfo = payinfo + "Billing City, State Zip, Country:<input type='text' name='billing_city' size='80' class='address'  style=' border:none; border-bottom:solid windowtext .75pt;'>"; 
	}
	
if (pay_type == "check") {
payinfo = payinfo +  "\r\nCheck # <input type='text' name='checknumges' size='20' class='address'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Date: <input type='text' name='checkdateges' size='25' class='address'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Amount US$ <input type='text' name='checkamtges' size='20' class='address'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp;GES PAYMENT<br />";
payinfo = payinfo +  "\r\nCheck # <input type='text' name='checknumjj' size='20' class='address'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Date: <input type='text' name='checkdatejj' size='25' class='address'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Amount US$ <input type='text' name='checkamtjj' size='20' class='address'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp;JAVITS PAYMENT<br />";
payinfo = payinfo + "\r\nCheck # <input type='text' name='checknumbs' size='20' class='address'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Date: <input type='text' name='checkdatebs' size='25' class='address'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Amount US$ <input type='text' name='checkamtbs' size='20' class='address'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp;BOOTHSEAL PAYMENT<br />";
payinfo = payinfo + "\r\nCheck # <input type='text' name='checknumdnb' size='20' class='address'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Date: <input type='text' name='checkdatednb' size='25' class='address'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Amount US$ <input type='text' name='checkamtdnb' size='20' class='address'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp;D&B RENTAL PAYMENT<br /><br />";
payinfo = payinfo + "\r\n&emsp;&emsp;&emsp;Send Checks to:<br /><br />&emsp;&emsp;&emsp;Global Experience Specialists Inc., Bank of America, P.O. Box 96174, Chicago IL 60693<br /><br />";
payinfo = payinfo + "\r\n&emsp;&emsp;&emsp;Javits Electrical Services, 655 West 34th Street, NY, NY 10001<br /><br />";
payinfo = payinfo + "\r\n&emsp;&emsp;&emsp;BoothSeal, 8 West 38th Street, Suite 202, NY, NY 10018<br /><br />";
payinfo = payinfo + "\r\n&emsp;&emsp;&emsp;D&B Rental Displays, 521 F.D.R.Drive, STE 7D, New York, NY 10002<br /><br />";
payinfo = payinfo + "\r\n&emsp;&emsp;&emsp;BE SURE TO INCLUDE <i>COTERIE</i>, YOUR COMPANY NAME AND BOOTH NUMBER (if available)<br /><br />";
}
if (pay_type == "wire") {
payinfo = payinfo + "&emsp;&emsp;&emsp;WIRE TRANSFER INFORMATION - GES<br />&emsp;&emsp;&emsp;Beneficiary: Global Experience Specialists<br />\r\n&emsp;&emsp;&emsp;c/o Bank of America, 901 Main Street, Dallas, TX 75202-3714<br />\r\n&emsp;&emsp;&emsp;Telephone: 1-800-657-9533 ext. 59248<br />\r\n&emsp;&emsp;&emsp;Account #: 7188-1-01819&emsp;ABA Routing #: 0260-0959-3&emsp;SWIFT Address: BOFAUS3N&emsp;CHIPS Address: 0959<br />\r\n";
payinfo = payinfo + "<br /><br />\r\n&emsp;&emsp;&emsp;WIRE TRANSFER INFORMATION - D&B Rental Displays<br />\r\n&emsp;&emsp;&emsp;Beneficiary: D&B Rental Displays Corp.<br />\r\n&emsp;&emsp;&emsp;c/o Bank of America, NA 2412 Pine Ridge Rd, Naples, FL, 34109-2007<br />\r\n&emsp;&emsp;&emsp;Account #: 2290-1704-2505 ABA Routing #: 026009593&emsp;<br />\r\n&emsp;&emsp;&emsp;R# SWIFT Code BOFAUS3N<br /><br />";
payinfo = payinfo + "&emsp;&emsp;&emsp;WIRE TRANSFER INFORMATION - Javits Electrical<br />\r\n&emsp;&emsp;&emsp;Jacob K Javits Convention Center<br />\r\n&emsp;&emsp;&emsp;c/o The Chase Manhattan Bank\r\n&emsp;ATTN: Ms. Kris Young<br />\r\n&emsp;&emsp;&emsp;12 Corporate Wood Blvd., Albany, New York 12211<br />\r\n&emsp;&emsp;&emsp;Bank Account Number:  573  804249&emsp;&emsp;Routing Number  Federal Reserve: ABA 021000021&emsp;&emsp;Routing Number  SWIFT:  CHAS US 33<br />\r\n&emsp;&emsp;&emsp;Telephone Number: (518) 433  2535";
}
payinfo = payinfo + "<br /><br /></td></tr></table>";
var payobj= document.getElementById('Payment');
	payobj.innerHTML= payinfo;
}