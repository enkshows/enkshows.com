/*
This source is shared under the terms of LGPL 3
www.gnu.org/licenses/lgpl.html

You are free to use the code in Commercial or non-commercial projects
*/

 //Set up an associative array
 //The keys represent the pre-deadline price and the post deadline price
 //
 //Electrical
 
 
 //additional tracks
 var add_tracks1_pr= new Array();
 add_tracks1_pr["pre"]=342;
 add_tracks1_pr["post"]=379;
 
 var add_tracks2_pr= new Array();
 add_tracks2_pr["pre"]=379;
 add_tracks2_pr["post"]=416;
 
 var add_tracks3_pr= new Array();
 add_tracks3_pr["pre"]=416;
 add_tracks3_pr["post"]=449;
 
 //additional lights
 var add_lights1_pr= new Array();
 add_lights1_pr["pre"]=112;
 add_lights1_pr["post"]=151;
 
 var add_lights2_pr= new Array();
 add_lights2_pr["pre"]=147;
 add_lights2_pr["post"]=183;
 
 var add_lights3_pr= new Array();
 add_lights3_pr["pre"]=175;
 add_lights3_pr["post"]=218;
 

//electric power
var epower1_pr= new Array();
epower1_pr["pre"]=140;
epower1_pr["post"]=186;

var epower2_pr= new Array();
epower2_pr["pre"]=162;
epower2_pr["post"]=232;

var epower3_pr= new Array();
epower3_pr["pre"]=191;
epower3_pr["post"]=278;

var epower4_pr= new Array();
epower4_pr["pre"]=140;
epower4_pr["post"]=186;

var epower5_pr= new Array();
epower5_pr["pre"]=46;
epower5_pr["post"]=55;
 
 
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
var deadline="post";


 var item= new Array() ;
 
 item[0]= "misc_furn1";
 item[1]= "misc_furn2";
 item[2]= "misc_furn3";
 item[3]= "misc_furn4";
 item[4]= "misc_furn5";
 item[5]= "misc_furn6";

 
 var eitem= new Array() ;
 eitem[0]= "add_tracks1";
 eitem[1]= "add_tracks2";
 eitem[2]= "add_tracks3";
 eitem[3]= "add_lights1";
 eitem[4]= "add_lights2";
 eitem[5]= "add_lights3";
 eitem[6]= "epower1";
 eitem[7]= "epower2";
 eitem[8]= "epower3";
 eitem[9]= "epower4";
 eitem[10]= "epower5";
 
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
   for (j=0; j<9; j++) {
      boothsize[j]= [0,0,0,0]
	}
   
   boothsize [1] [0] = 40;
   boothsize [1] [1] = 1;
   boothsize [1] [2] = 1;
   boothsize [2] [0] = 80;
   boothsize [2] [1] = 2;
   boothsize [2] [2] = 1;
   boothsize [3] [0] = 120;
   boothsize [3] [1] = 3;
   boothsize [3] [2] = 1;
   boothsize [4] [0] = 160;
   boothsize [4] [1] = 4;
   boothsize [4] [2] = 2;
   boothsize [5] [0] = 240;
   boothsize [5] [1] = 6;
   boothsize [5] [2] = 3;
   boothsize [6] [0] = 320;
   boothsize [6] [1] = 8;
   boothsize [6] [2] = 4;
   boothsize [7] [0] = 400;
   boothsize [7] [1] = 9;
   boothsize [7] [2] = 4; 
   boothsize [8] [0] = 640;
   boothsize [8] [1] = 16;
   boothsize [8] [2] = 8; 
 
	
	
function calculateTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
	var enknycform= document.forms["ENKNYC"];
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
	var catnumber=getCheckedValue(enknycform.elements['cattype']);
		var product=getCheckedValue(enknycform.elements['prodtype']);
	var boothval;
	if (booths > 0) {boothval = "assigned";}
	    else {boothval = "";}
	

    document.getElementById('catval').value=catnumber;
	
	var prodobject= "";
	    prodobject.innerHTML=product;
    document.getElementById('prodval').value=product;	
	
	var boothobject= "";
	    boothobject.innerHTML=product;
    document.getElementById('boothval').value=boothval;
	
	
	// BOOTH SIZE
	booths= enknycform.elements["boothsize"].value;
	boothsqft = boothsize [booths] [0];
	boothinfo1 = boothinfo1 + boothsqft + " square feet in ";

	var boothval;
	if (booths > 0) {boothval = "assigned";}
	    else {boothval = "";}
		
	var boothobject= "";
	    boothobject.innerHTML=product;
    document.getElementById('boothval').value=boothval;
	
	//Booth Furnishings
	switch(catnumber) {
	case "1": 
	    catname= "Designer's Collective ";
		racklength ="8' ";
		rackelength ="  8 foot";
		break;
	case "2":
		catname= "Blue ";
		racklength ="8' ";
		rackelength ="  8 foot";
		break;
	case "3":
		catname= "TMRW ";
		racklength ="4' ";
		rackelength ="  4 foot";
		break;
	}
	switch(product) {
	case "1": 
	    racks= boothsize [booths] [1];	     
         fixdescr = "(" + racklength + "long, dark metal)";
		 if (racks > 1) { fixture= " Garment Racks "; }
		    else { fixture= " Garment Rack "; }
		fixcount= racks;
		break;
	case "2":
		shelves= boothsize [booths] [1];
		fixdescr = "(dark wood, 58\" w x 72\" h x 11-3/4\" d, 11\" between shelves)";		    
        if (shelves > 1) { fixture= " EZ Shelves "; }
		    else { fixture= " EZ Shelf "; }
		fixcount= shelves;
		break;
	case "3":
		shelves= boothsize [booths] [1];
        fixdescr = "(dark wood, 58\" w x 72\" h x 11-3/4\" d, 11\" between shelves)"		
         if (shelves > 1) { fixture= " EZ Shelves "; }
		    else { fixture= " EZ Shelf "; }
		fixcount= shelves;
		break;
	}	
	tables = boothsize [booths] [2];
	tablesets = tables + " table";
	if (tables > 1) {tablesets = tablesets+"s";}
	seating = 2*tables + " chairs";

    boothinfo1 = boothinfo1 + catname + " includes: ";
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
	
    enknycform.fixcountval.value = fixcount;
	enknycform.fixtureval.value = fixture;
	fixturecount = parseInt(fixcount);
	
	swapping = enknycform.swap.checked;
	swap_one = enknycform.swapone.value;

    if (swapping && swap_one.length < 2) {
	    swapshelvesqty=eval(enknycform.swapshelves.value);
		swapracksqty=eval(enknycform.swapracks.value);
		if (eval(swapshelvesqty+swapracksqty) > fixturecount) {
		    toomanyfix = "You may only select " + fixturecount + " fixtures.";
			alert("You have chosen too many fixtures"); }
	}
	
	var toomanyobj= document.getElementById('toomanyfixtures');
	    toomanyobj.innerHTML= toomanyfix;
	
// Booth Information
	var divobj= document.getElementById('Boothdims');
	divobj.innerHTML= "Booth Size:  " + boothsqft + " square feet";	
	
	document.getElementById('booth_size').value=boothsize;
	document.getElementById('square_feet').value=boothsqft;	
	
   
   //Calculate Electric Subtotal
	for (i= 0; i < 11; i++){
	   eitem_type= eitem[i];
	   eitem_qty= enknycform.elements[eitem_type].value;
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
	   mitem_qty= enknycform.elements[mitem_type].value;	
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
	for (i= 0; i < 6; i++){
	   item_type= item[i];
	   item_qty= enknycform.elements[item_type].value;	
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
		
	//Wire Transfer
	var wireinfo="";
	var paymenttype=getCheckedValue(enknycform.elements['paytype']);
	if (paymenttype == "wire") {wireinfo = wireinfo + "WIRE TRANSFER INFORMATION - GES<br />Beneficiary: Global Experience Specialists<br />c/o Bank of America, 901 Main Street, Dallas, TX 75202-3714<br />Telephone: 1-800-657-9533 ext. 59248<br />Account #: 7188-1-01819&emsp;ABA Routing #: 0260-0959-3&emsp;SWIFT Address: BOFAUS3N&emsp;CHIPS Address: 0959<br /><br />WIRE TRANSFER INFORMATION - D&B Rental Displays<br />Beneficiary: D&B Rental Displays Corp.<br />c/o Bank of America, NA 2412 Pine Ridge Rd, Naples, FL, 34109-2007<br />Account #: 2290-1196-1951 ABA Routing #: 026009593&emsp;SWIFT Address: BOFAUS3N<br />";
	}
	
	var wireobj= document.getElementById('wiretransfer'	);
    wireobj.innerHTML= wireinfo;


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