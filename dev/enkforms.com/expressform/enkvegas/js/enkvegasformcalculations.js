/*
This source is shared under the terms of LGPL 3
www.gnu.org/licenses/lgpl.html

You are free to use the code in Commercial or non-commercial projects
*/

 //Set up an associative array
 //The keys represent the pre-deadline price and the post deadline price
 //
 
 
 
 //Miscellaneous Furnishings
var misc_furn1_pr= new Array() ;
misc_furn1_pr["pre"]=250;
misc_furn1_pr["post"]=250;

var misc_furn2_pr= new Array() ;
misc_furn2_pr["pre"]=250;
misc_furn2_pr["post"]=250;

var misc_furn3_pr= new Array() ;
misc_furn3_pr["pre"]=150;
misc_furn3_pr["post"]=150;

var misc_furn4_pr= new Array() ;
misc_furn4_pr["pre"]=75;
misc_furn4_pr["post"]=75;


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
var deaddate= new Date();
deaddate.setFullYear(2012,7,6);
var today = new Date();
var deadline="pre";
if (today > deaddate) {deadline="post";}


 var item= new Array() ;
 
 item[0]= "misc_furn1";
 item[1]= "misc_furn2";
 item[2]= "misc_furn3";
 item[3]= "misc_furn4";


 
 
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
 
 
 var boothsize= new Array(8);   
   for (j=0; j<16; j++) {
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
   boothsize [8] [0] = 16;
   boothsize [8] [1] = 20;
   boothsize [8] [2] = 8;
   boothsize [8] [3] = 4;
   boothsize [9] [0] = 1;
   boothsize [9] [1] = 300;
   boothsize [9] [2] = 3;
   boothsize [9] [3] = 1;
   boothsize [10] [0] = 1;
   boothsize [10] [1] = 400;
   boothsize [10] [2] = 4; 
   boothsize [10] [3] = 2;
   boothsize [11] [0] = 1;
   boothsize [11] [1] = 500;
   boothsize [11] [2] = 5; 
   boothsize [11] [3] = 2;
   boothsize [12] [0] = 1;
   boothsize [12] [1] = 600;
   boothsize [12] [2] = 6; 
   boothsize [12] [3] = 3;
   boothsize [13] [0] = 1;
   boothsize [13] [1] = 750;
   boothsize [13] [2] = 8; 
   boothsize [13] [3] = 3; 
   boothsize [14] [0] = 1;
   boothsize [14] [1] = 1000;
   boothsize [14] [2] = 9; 
   boothsize [14] [3] = 4;
   boothsize [15] [0] = 1;
   boothsize [15] [1] = 1200;
   boothsize [15] [2] = 10; 
   boothsize [15] [3] = 4;   
	
function calculateTotal()
{

   //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
	var enkvegasform= document.forms["ENKVEGAS"];
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
  	var mitem_type = mitem[0];
    var mitem_qty= 0;
    var mitem_price=0;
   	var booths=0;
    var boothdims="";
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
	var boothinfo1="";
	var boothinfo2="";
	var boothinfo3="";
	var fixcount=0;
	var fix_email="";
	var table_email="";
	var swap_one="";
	var booth_dims="";
	

	
	//  Product Type
	var product=getCheckedValue(enkvegasform.elements['prodtype']);


	var prodobject= "";
	    prodobject.innerHTML=product;
    document.getElementById('prodval').value=product;	
	
	var boothobject= "";
	    boothobject.innerHTML=product;
    document.getElementById('boothval').value=boothval;
	
	
	// BOOTH SIZE
	booths= enkvegasform.elements["boothsize"].value;
	boothsqft = boothsize [booths] [0] * boothsize [booths] [1];


	var boothval;
	if (booths > 0) {boothval = "assigned";}
	    else {boothval = "";}
		
	var boothobject= "";
	    boothobject.innerHTML=product;
    document.getElementById('boothval').value=boothval;
	
	//Booth Furnishings
    var BoSR = getCheckedValue(enkvegasform.elements['bosr']);
	
	if (BoSR == "booth") 
	    { boothinfo1 = boothinfo1 + boothsize [booths] [0] + "'D x " + boothsize [booths] [1] + "'W, " + boothsqft + " square feet";}
	else
	    {boothinfo1 = boothinfo1 +  boothsqft + " square feet in a Showroom";}

	switch(product) {
	case "1": 
	    racks= boothsize [booths] [2];	     
         fixdescr = "(8' long clothing, dark metal)";
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
	}	
	tables = boothsize [booths] [3];
	tablesets = tables + " table";
	if (tables > 1) {tablesets = tablesets+"s";}
	seating = 2*tables + " chairs";
	
	booth_dims = boothinfo1

    boothinfo1 = "Your booth:" + boothinfo1 + " includes ";
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
	
    enkvegasform.fixcountval.value = fixcount;
	enkvegasform.fixtureval.value = fixture;
	fixturecount = parseInt(fixcount);
	
	swapping = enkvegasform.swap.checked;
	swap_one = enkvegasform.swapone.value;

    if (swapping && swap_one.length < 2) {
	    swapshelvesqty=eval(enkvegasform.swapshelves.value);
		swapracksqty=eval(enkvegasform.swapracks.value);
		if (eval(swapshelvesqty+swapracksqty) > fixturecount) {
		    toomanyfix = "You may only select " + fixturecount + " fixtures.";
			alert("You have chosen too many fixtures"); }
	}
	
	var toomanyobj= document.getElementById('toomanyfixtures');
	    toomanyobj.innerHTML= toomanyfix;
	
// Booth Information
	var divobj= document.getElementById('Boothdims');
	divobj.innerHTML= "Booth Size:  " + boothsqft + " square feet";	
	
	document.getElementById('booth_dims').value=booth_dims;
	document.getElementById('square_feet').value=boothsqft;	
	
   
  	
	//Calculate Mannequin Subtotal
	for (i= 0; i < 21; i++){
	   mitem_type= mitem[i];
	   mitem_qty= enkvegasform.elements[mitem_type].value;	
	   mitem_price= eval(mitem[i]+"_pr[deadline]");	
	   msubtotal= msubtotal + (mitem_qty * mitem_price)};
	
	mtax=0.081 * msubtotal;
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
	   item_qty= enkvegasform.elements[item_type].value;	
	   item_price= eval(item[i]+"_pr[deadline]");	
	   subtotal= subtotal + (item_qty * item_price)};
	
			

	
	subtotal=subtotal;
	pst= subtotal * .030;
	pstsubtotal = subtotal + pst;	
	tax=0.0 * pstsubtotal;
	Total=pstsubtotal+tax;
	
    document.getElementById('subtotal').innerHTML= subtotal.toFixed(2);
	document.getElementById('subtotalval').value= subtotal;
	
	var divobj= document.getElementById('pst');
    divobj.innerHTML= pst.toFixed(2);	
	document.getElementById('pstval').value=pst;
	
	var divobj= document.getElementById('pstsubtotal');
    divobj.innerHTML= pstsubtotal.toFixed(2);	
	document.getElementById('pstsubtotalval').value=pstsubtotal;
	
	
	var divobj= document.getElementById('Total');
	divobj.innerHTML= Total.toFixed(2);		
	document.getElementById('totalval').value=Total;
		



}

function NoBoothSize()
{
    var divobj= document.getElementById('Boothdims');
	
    divobj.innerHTML= "Enter your booth size at top of page";

}
	//Booth or Showroom
	function BoothorShow() {
	
	var Showroom="";
	
	if (document.getElementById('bosr').checked) 
	 {    Showroom = "<select name=\"boothsize\" id=\"boothsize\" size=\"1\" onChange=\"calculateTotal();ShowDiv('checkswap')\">\n";
          Showroom = Showroom + "<option value=\"0\">-</option>\n";
          Showroom = Showroom + "<option value=\"1\">8'D x 5'W</option>\n";
		  Showroom = Showroom + "<option value=\"2\">5'D x 8'W</option>\n";
          Showroom = Showroom + "<option value=\"3\">8'D x 10'W</option>\n";
          Showroom = Showroom + "<option value=\"4\">8'D x 15'W</option>\n";
          Showroom = Showroom + "<option value=\"5\">8'D x 20'W</option>\n";
          Showroom = Showroom + "<option value=\"6\">8'D x 30'W</option>\n";
          Showroom = Showroom + "<option value=\"7\">8'D x 40'W</option>\n";
		  Showroom = Showroom + "<option value=\"8\">16'D x 20'W</option>\n";
          Showroom = Showroom + "</select>\n";
	  }
	else {
	      Showroom = "<select name=\"boothsize\" id=\"boothsize\" size=\"1\" onChange=\"calculateTotal();ShowDiv('checkswap')\">\n";
          Showroom = Showroom + "<option value=\"0\">-</option>\n";
		  Showroom = Showroom + "<option value=\"9\">300 square feet</option>\n";
          Showroom = Showroom + "<option value=\"10\">400 square feet</option>\n";
          Showroom = Showroom + "<option value=\"11\">500 square feet</option>\n";
          Showroom = Showroom + "<option value=\"12\">600 square feet</option>\n";
          Showroom = Showroom + "<option value=\"13\">750 square feet</option>\n";
          Showroom = Showroom + "<option value=\"14\">1000 square feet</option>\n";
          Showroom = Showroom + "<option value=\"15\">1200 square feet</option>\n";
          Showroom = Showroom + "</select>\n";
		  }
   
	var srobj= document.getElementById('ShowRoom');
    srobj.innerHTML= Showroom;
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
   document.getElementById(DivId).style.display = 'inline';
  }
function paymentinfo()
{
//Payment Information Function
var payinfo="";
var enkvegasform= document.forms["ENKVEGAS"];
var pay_type=getCheckedValue(enkvegasform.elements['paytype']);


payinfo = "<table align=\"center\" border=0 cellpadding=0 cellspacing=0 style='border-collapse:collapse'>\r\n";
payinfo = payinfo + "<col width=1153> <tr> <td class=item>\r\n<br /><br />";

if (pay_type == "cc") {

payinfo = payinfo + "Credit Card Number: <input type='text'  name='credit' size='43' class='item'  style=' border:none; border-bottom:solid windowtext .75pt;'>&emsp;&emsp;\r\n";
payinfo = payinfo + "Expiration Date:<input type='text' name='exp_date' size='20' class='item'  style=' border:none; border-bottom:solid windowtext .75pt;'><br />"
payinfo = payinfo + "Cardholder Name:<input type='text' name='cardholder' size='45' class='item'  style=' border:none; border-bottom:solid windowtext .75pt;'>&emsp;&emsp;CCV: <input type='text' name='ccv' size='15' class='item'  style=' border:none; border-bottom:solid windowtext .75pt;'><br />"
payinfo = payinfo + "Billing Street Address:<input type='text' name='billing_street' size='80' class='item'  style=' border:none; border-bottom:solid windowtext .75pt;'><br />"
payinfo = payinfo + "Billing City, State Zip, Country:<input type='text' name='billing_city' size='80' class='item'  style=' border:none; border-bottom:solid windowtext .75pt;'>"; 
	}
	
if (pay_type == "check") {
payinfo = payinfo +  "\r\nCheck # <input type='text' name='checknumges' size='20' class='item'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Date: <input type='text' name='checkdateges' size='25' class='item'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Amount US$ <input type='text' name='checkamtges' size='25' class='item'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp;GES PAYMENT<br />";
payinfo = payinfo +  "\r\nCheck # <input type='text' name='checknumedlen' size='20' class='item'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Date: <input type='text' name='checkdateedlen' size='25' class='item'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Amount US$ <input type='text' name='checkamtedlen' size='25' class='item'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp;EDLEN PAYMENT<br />";
payinfo = payinfo + "\r\nCheck # <input type='text' name='checknumdnb' size='20' class='item'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Date: <input type='text' name='checkdatednb' size='25' class='item'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Amount US$ <input type='text' name='checkamtdnb' size='25' class='item'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp;D&B RENTAL PAYMENT<br /><br />";
payinfo = payinfo + "\r\n&emsp;&emsp;&emsp;Send Checks to:<br /><br />&emsp;&emsp;&emsp;Global Experience Specialists Inc., Bank of America, P.O. Box 96174, Chicago IL 60693<br /><br />";
payinfo = payinfo + "\r\n&emsp;&emsp;&emsp;Edlen Electrical Services, 3010 Builders Ave., Las Vegas, NV 89101<br /><br />";
payinfo = payinfo + "\r\n&emsp;&emsp;&emsp;D&B Rental Displays, 521 F.D.R.Drive, STE 7D, New York, NY 10002<br /><br />";
payinfo = payinfo + "\r\n&emsp;&emsp;&emsp;BE SURE TO INCLUDE <i>ENKVEGAS</i>, YOUR COMPANY NAME AND BOOTH NUMBER (if available)<br /><br />";
}
if (pay_type == "wire") {
payinfo = payinfo + "&emsp;&emsp;&emsp;WIRE TRANSFER INFORMATION - GES<br />&emsp;&emsp;&emsp;Beneficiary: Global Experience Specialists<br />\r\n&emsp;&emsp;&emsp;c/o Bank of America, 901 Main Street, Dallas, TX 75202-3714<br />\r\n&emsp;&emsp;&emsp;Telephone: 1-800-657-9533 ext. 59248<br />\r\n&emsp;&emsp;&emsp;Account #: 7188-1-01819&emsp;ABA Routing #: 0260-0959-3&emsp;SWIFT Address: BOFAUS3N&emsp;CHIPS Address: 0959<br />\r\n";
payinfo = payinfo + "<br /><br />\r\n&emsp;&emsp;&emsp;WIRE TRANSFER INFORMATION - D&B Rental Displays<br />\r\n&emsp;&emsp;&emsp;Beneficiary: D&B Rental Displays Corp.<br />\r\n&emsp;&emsp;&emsp;c/o Bank of America, NA 2412 Pine Ridge Rd, Naples, FL, 34109-2007<br />\r\n&emsp;&emsp;&emsp;Account #: 2290-1704-2505 ABA Routing #: 026009593&emsp;<br />\r\n&emsp;&emsp;&emsp;R# SWIFT Code BOFAUS3N<br /><br />";

}
payinfo = payinfo + "<br /><br /></td></tr></table>";
var payobj= document.getElementById('Payment');
	payobj.innerHTML= payinfo;
}  