 //Set up an associative array
 //The keys represent the pre-deadline price and the post deadline price
 //
 
 
 
 //BOOTHSEAL SETUP
 
 var boothseal= new Array();
 boothseal[0] = "Do not want boothseal";
 boothseal[1] = "6' x 10' in-line (1 BoothSeal)";
 boothseal[2] = "10' x 8' in-line (1 BoothSeal)";
 boothseal[3] = "10' x 10' in-line (1 BoothSeal)";
 boothseal[4] = "10' x 13' in-line (1 BoothSeal)";
 boothseal[5] = "10' x 16' in-line (1 BoothSeal)";
 boothseal[6] = "10' x 20' in-line (2 BoothSeal)";
 boothseal[7] = "10' x 8' open corner (2 BoothSeals)";
 boothseal[8] = "10' x 10' open corner (2 BoothSeals)";
 boothseal[9] = "10' x 13' open corner (2 BoothSeals)";
 boothseal[10] = "10' x 16' open corner (2 BoothSeals)";
 boothseal[11] = "10' x 20' open corner (3 BoothSeals)";

 var masterlock_pr= new Array();
 masterlock_pr["pre"]=12;
 masterlock_pr["post"]=12;
 
 var BS6x10in_pr= new Array();
 BS6x10in_pr["pre"]=125;
 BS6x10in_pr["post"]=150;
 
 var BS10x8in_pr= new Array();
 BS10x8in_pr["pre"]=125;
 BS10x8in_pr["post"]=150;

 var BS10x10in_pr= new Array();
 BS10x10in_pr["pre"]=125;
 BS10x10in_pr["post"]=150;

 var BS10x13in_pr= new Array();
 BS10x13in_pr["pre"]=150;
 BS10x13in_pr["post"]=175;

 var BS10x16in_pr= new Array();
 BS10x16in_pr["pre"]=150;
 BS10x16in_pr["post"]=175;

 var BS10x20in_pr= new Array();
 BS10x20in_pr["pre"]=175;
 BS10x20in_pr["post"]=200;
 
 
 var BS10x8cr_pr= new Array();
 BS10x8cr_pr["pre"]=175;
 BS10x8cr_pr["post"]=200;

 var BS10x10cr_pr= new Array();
 BS10x10cr_pr["pre"]=175;
 BS10x10cr_pr["post"]=200;

 var BS10x13cr_pr= new Array();
 BS10x13cr_pr["pre"]=200;
 BS10x13cr_pr["post"]=225;

 var BS10x16cr_pr= new Array();
 BS10x16cr_pr["pre"]=200;
 BS10x16cr_pr["post"]=225;

 var BS10x20cr_pr= new Array();
 BS10x20cr_pr["pre"]=225;
 BS10x20cr_pr["post"]=250;
 
 
 // ELECTRICAL - PORT
 
 //ADDITIONAL TRACKS SET UP
 var add_tracks1_pr= new Array();
 add_tracks1_pr["pre"]=352;
 add_tracks1_pr["post"]=390;
 
 var add_tracks2_pr= new Array();
 add_tracks2_pr["pre"]=390;
 add_tracks2_pr["post"]=428;
 
 var add_tracks3_pr= new Array();
 add_tracks3_pr["pre"]=428;
 add_tracks3_pr["post"]=462;
 
 var add_tracks4_pr= new Array();
 add_tracks4_pr["pre"]=462;
 add_tracks4_pr["post"]=509;
 
 var add_tracks5_pr= new Array();
 add_tracks5_pr["pre"]=488;
 add_tracks5_pr["post"]=549;

 
 //ADDITONAL LIGHTS SET UP
 var add_lights1_pr= new Array();
 add_lights1_pr["pre"]=116;
 add_lights1_pr["post"]=156;
 
 var add_lights2_pr= new Array();
 add_lights2_pr["pre"]=151;
 add_lights2_pr["post"]=188;
 
 var add_lights3_pr= new Array();
 add_lights3_pr["pre"]=180;
 add_lights3_pr["post"]=225;
 
 
 
//SPECIAL LIGHTS SET UP
var spec_lights1_pr= new Array();
spec_lights1_pr["pre"]=170;
spec_lights1_pr["post"]=202;

var spec_lights2_pr= new Array();
spec_lights2_pr["pre"]=601;
spec_lights2_pr["post"]=715;

var spec_lights3_pr= new Array();
spec_lights3_pr["pre"]=221;
spec_lights3_pr["post"]=292;

var spec_lights4_pr= new Array();
spec_lights4_pr["pre"]=601;
spec_lights4_pr["post"]=715;

var spec_lights5_pr= new Array();
spec_lights5_pr["pre"]=221;
spec_lights5_pr["post"]=292;


//ELECTRIC POWER SET UP
var epower1_pr= new Array();
epower1_pr["pre"]=144;
epower1_pr["post"]=192;

var epower2_pr= new Array();
epower2_pr["pre"]=167;
epower2_pr["post"]=239;

var epower3_pr= new Array();
epower3_pr["pre"]=197;
epower3_pr["post"]=286;

var epower4_pr= new Array();
epower4_pr["pre"]=144;
epower4_pr["post"]=192;

var epower5_pr= new Array();
epower5_pr["pre"]=47;
epower5_pr["post"]=57;

 
 //GES FURNISHINGS SETUP
 //Tables and Risers
 var tr_1_pr= new Array();
 tr_1_pr["pre"]=84.40;
 tr_1_pr["post"]=109.80;

 var tr_2_pr= new Array();
 tr_2_pr["pre"]=84.40;
 tr_2_pr["post"]=109.80;
 
 var tr_3_pr= new Array();
 tr_3_pr["pre"]=84.40;
 tr_3_pr["post"]=109.80;
 
 var tr_4_pr= new Array();
 tr_4_pr["pre"]=84.40;
 tr_4_pr["post"]=109.80;
 
 var tr_5_pr= new Array();
 tr_5_pr["pre"]=84.40;
 tr_5_pr["post"]=109.80;
 
 var tr_6_pr= new Array();
 tr_6_pr["pre"]=84.40;
 tr_6_pr["post"]=109.80;
 
 var tr_7_pr= new Array();
 tr_7_pr["pre"]=31.70;
 tr_7_pr["post"]=41.20;
 
 var tr_8_pr= new Array();
 tr_8_pr["pre"]=39.15;
 tr_8_pr["post"]=51.05;
 
 //Wall Mounted Items
 var wm1_pr= new Array();
 wm1_pr["pre"]=84.40;
 wm1_pr["post"]=109.80;
 
 var wm2_pr= new Array();
 wm2_pr["pre"]=84.40;
 wm2_pr["post"]=109.80;
 
 var wm3_pr= new Array();
 wm3_pr["pre"]=84.40;
 wm3_pr["post"]=109.80;
 
 var wm4_pr= new Array();
 wm4_pr["pre"]=84.40;
 wm4_pr["post"]=109.80;
 
 var wm5_pr= new Array();
 wm5_pr["pre"]=12.40;
 wm5_pr["post"]=12.40;
 
 var dressing1_pr= new Array();
 dressing1_pr["pre"]=294.25;
 dressing1_pr["post"]=382.45;
  
 var dressing2_pr= new Array();
 dressing2_pr["pre"]=496.10;
 dressing2_pr["post"]=645.25;
   
 var dressing3_pr= new Array();
 dressing3_pr["pre"]=427.25;
 dressing3_pr["post"]=555.40;
  
 var dressing4_pr= new Array();
 dressing4_pr["pre"]=225;
 dressing4_pr["post"]=292.60;
 
//EZ-Shelf
var ez1_pr= new Array() ;
ez1_pr["pre"]=122.90;
ez1_pr["post"]=161.20;

var ez2_pr= new Array() ;
ez2_pr["pre"]=248.05;
ez2_pr["post"]=322.60;
 
//Miscellaneous Furnishings
var misc_furn1_pr= new Array() ;
misc_furn1_pr["pre"]=84.40;
misc_furn1_pr["post"]=109.80;

var misc_furn2_pr= new Array() ;
misc_furn2_pr["pre"]=84.40;
misc_furn2_pr["post"]=109.80;

var misc_furn3_pr= new Array() ;
misc_furn3_pr["pre"]=84.40;
misc_furn3_pr["post"]=109.80;

var misc_furn4_pr= new Array() ;
misc_furn4_pr["pre"]=18.15;
misc_furn4_pr["post"]=23.60;
 
var misc_furn5_pr= new Array() ;
misc_furn5_pr["pre"]=84.40;
misc_furn5_pr["post"]=109.80;

var misc_furn6_pr= new Array() ;
misc_furn6_pr["pre"]=84.40;
misc_furn6_pr["post"]=109.80;

var misc_furn7_pr= new Array() ;
misc_furn7_pr["pre"]=75.40;
misc_furn7_pr["post"]=98.10;

var misc_furn8_pr= new Array() ;
misc_furn8_pr["pre"]=336.15;
misc_furn8_pr["post"]=436.90;

var misc_furn9_pr= new Array() ;
misc_furn9_pr["pre"]=273.15;
misc_furn9_pr["post"]=355.50;

//Autopoles
var autopoles1_pr= new Array() ;
autopoles1_pr["pre"]=325.70;
autopoles1_pr["post"]=423.30;

var autopoles2_pr= new Array() ;
autopoles2_pr["pre"]=325.70;
autopoles2_pr["post"]=423.30;

var autopoles3_pr= new Array() ;
autopoles3_pr["pre"]=423.30;
autopoles3_pr["post"]=550.35;

var autopoles4_pr= new Array() ;
autopoles4_pr["pre"]=423.30;
autopoles4_pr["post"]=550.35;

var autopoles5_pr= new Array() ;
autopoles5_pr["pre"]=269.90;
autopoles5_pr["post"]=351.35;

var autopoles6_pr= new Array() ;
autopoles6_pr["pre"]=405.25;
autopoles6_pr["post"]=527.35;

var autopoles7_pr= new Array() ;
autopoles7_pr["pre"]=67.60;
autopoles7_pr["post"]=87.90;

var autopoles8_pr= new Array() ;
autopoles8_pr["pre"]=101.35;
autopoles8_pr["post"]=132.00;

var autopoles9_pr= new Array() ;
autopoles9_pr["pre"]=92.85;
autopoles9_pr["post"]=115.30;

var autopoles10_pr= new Array() ;
autopoles10_pr["pre"]=92.85;
autopoles10_pr["post"]=115.30;

//Wallpaper
var wallpaper_pr= new Array();
wallpaper_pr["pre"]=16.45;
wallpaper_pr["post"]=22.20;

//Carpet
var stan_carpet_pr_10x10= new Array();
stan_carpet_pr_10x10["pre"]=225.40;
stan_carpet_pr_10x10["post"]=293.20;

var stan_carpet_pr_10x20= new Array();
stan_carpet_pr_10x20["pre"]=452.45;
stan_carpet_pr_10x20["post"]=588.25;

var stan_carpet_pr_10x30= new Array();
stan_carpet_pr_10x30["pre"]=679.90;
stan_carpet_pr_10x30["post"]=883.85;

var cc_standard_pr= new Array();
cc_standard_pr["pre"]=5;
cc_standard_pr["post"]=6.55;

var cc_plush_pr= new Array();
cc_plush_pr["pre"]=7.3;
cc_plush_pr["post"]=9.45;

var cc_ultra_pr= new Array();
cc_ultra_pr["pre"]=8.35;
cc_ultra_pr["post"]=10.85;



//D&B RENTAL DISPLAY SETUP
//Mannequins & Hangers
var f_mann_1_pr= new Array() ;
f_mann_1_pr["pre"]=95;
f_mann_1_pr["post"]=95;

var f_mann_2_pr= new Array() ;
f_mann_2_pr["pre"]=95;
f_mann_2_pr["post"]=95;

var f_mann_3_pr= new Array() ;
f_mann_3_pr["pre"]=95;
f_mann_3_pr["post"]=95;

var f_mann_4_pr= new Array() ;
f_mann_4_pr["pre"]=95;
f_mann_4_pr["post"]=95;

var f_mann_5_pr= new Array() ;
f_mann_5_pr["pre"]=95;
f_mann_5_pr["post"]=95;

var f_mann_6_pr= new Array() ;
f_mann_6_pr["pre"]=95;
f_mann_6_pr["post"]=95;

var f_mann_7_pr= new Array() ;
f_mann_7_pr["pre"]=95;
f_mann_7_pr["post"]=95;

var f_mann_8_pr= new Array() ;
f_mann_8_pr["pre"]=95;
f_mann_8_pr["post"]=95;

var m_mann_1_pr= new Array() ;
m_mann_1_pr["pre"]=95;
m_mann_1_pr["post"]=95;

var m_mann_2_pr= new Array() ;
m_mann_2_pr["pre"]=95;
m_mann_2_pr["post"]=95;

var m_mann_3_pr= new Array() ;
m_mann_3_pr["pre"]=95;
m_mann_3_pr["post"]=95;

var m_mann_4_pr= new Array() ;
m_mann_4_pr["pre"]=95;
m_mann_4_pr["post"]=95;

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
deaddate.setFullYear(2012,11,21);
var today = new Date();
var deadline="pre";
if (today > deaddate) {deadline="post";}

//GES FURNISHINGS INTIALIZE
 var item= new Array() ;
 
 item[0]= "tr_1";
 item[1]= "tr_2";
 item[2]= "tr_3";
 item[3]= "tr_4";
 item[4]= "tr_5";
 item[5]= "tr_6";
 item[6]= "tr_7";
 item[7]= "tr_8";
 item[8]= "wm1";
 item[9]= "wm2";
 item[10]= "wm3";
 item[11]= "wm4";
 item[12]= "wm5";
 item[13]= "dressing1";
 item[14]= "dressing2";
 item[15]= "dressing3";
 item[16]= "dressing4";
 item[17]= "ez1";
 item[18]= "ez2";
 item[19]= "misc_furn1";
 item[20]= "misc_furn2";
 item[21]= "misc_furn3";
 item[22]= "misc_furn4";
 item[23]= "misc_furn5";
 item[24]= "misc_furn6";
 item[25]= "misc_furn7";
 item[26]= "misc_furn8";
 item[27]= "autopoles1";
 item[28]= "autopoles2";	
 item[29]= "autopoles3";
 item[30]= "autopoles4";
 item[31]= "autopoles5";
 item[32]= "autopoles6";
 item[33]= "autopoles7";
 item[34]= "autopoles8";
 item[35]= "autopoles9";
 item[36]= "autopoles10"; 
 

 
 
 //PORT ITEMS INTIALIZE
 var eitem= new Array();
 eitem[0]= "add_tracks1";
 eitem[1]= "add_tracks2";
 eitem[2]= "add_tracks3";
 eitem[3]= "add_tracks4";
 eitem[4]= "add_tracks5";
 eitem[5]= "add_lights1";
 eitem[6]= "add_lights2";
 eitem[7]= "add_lights3";
 eitem[8]= "spec_lights1";
 eitem[9]= "spec_lights2";
 eitem[10]= "spec_lights3";
 eitem[11]= "spec_lights4";
 eitem[12]= "spec_lights5";
 eitem[13]= "epower1";
 eitem[14]= "epower2";
 eitem[15]= "epower3";
 eitem[16]= "epower4";
 eitem[17]= "epower5";
 
 
 //BOOTHSEAL ITEMS INTIALIZE
 var bsitem= new Array();
 bsitem[0]= "NoOrder";
 bsitem[1]= "BS6x10in";
 bsitem[2]= "BS10x8in";
 bsitem[3]= "BS10x10in";
 bsitem[4]= "BS10x13in";
 bsitem[5]= "BS10x16in";
 bsitem[6]= "BS10x20in";
 bsitem[7]= "BS10x8cr";
 bsitem[8]= "BS10x10cr";
 bsitem[9]= "BS10x13cr";
 bsitem[10]= "BS10x16cr";
 bsitem[11]= "BS10x20cr";
 
 //D&B RENTAL INTIALIZE
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
 
 //ENK SET ALL BOOTH SIZES AND PACKAGE INFORMATION
 var boothsize= new Array(30);   
   for (j=0; j<30; j++) {
      boothsize[j]= [0,0,0,0]
	}
   
   boothsize [1] [0] = 5;
   boothsize [1] [1] = 16;
   boothsize [1] [2] = 1;
   boothsize [2] [0] = 5;
   boothsize [2] [1] = 20;
   boothsize [2] [2] = 1;
   boothsize [3] [0] = 6;
   boothsize [3] [1] = 13;
   boothsize [3] [2] = 1;
   boothsize [4] [0] = 6;
   boothsize [4] [1] = 16;
   boothsize [4] [2] = 1;
   boothsize [5] [0] = 6;
   boothsize [5] [1] = 20;
   boothsize [5] [2] = 1;
   boothsize [6] [0] = 6;
   boothsize [6] [1] = 23;
   boothsize [6] [2] = 1;
   boothsize [6] [3] = 1;
   boothsize [7] [0] = 6;
   boothsize [7] [1] = 26;
   boothsize [7] [2] = 1;
   boothsize [7] [3] = 1;
   boothsize [8] [0] = 6;
   boothsize [8] [1] = 30;
   boothsize [8] [2] = 1;
   boothsize [8] [3] = 1;
   boothsize [9] [0] = 6;
   boothsize [9] [1] = 33;
   boothsize [9] [2] = 2;
   boothsize [10] [0] = 6;
   boothsize [10] [1] = 36;
   boothsize [10] [2] = 2;   
   boothsize [11] [0] = 6;
   boothsize [11] [1] = 40;
   boothsize [11] [2] = 2;
   boothsize [12] [0] = 10;
   boothsize [12] [1] = 10;
   boothsize [12] [2] = 1;
   boothsize [13] [0] = 10;
   boothsize [13] [1] = 13;
   boothsize [13] [2] = 1;
   boothsize [13] [3] = 1;
   boothsize [14] [0] = 10;
   boothsize [14] [1] = 16;
   boothsize [14] [2] = 1;
   boothsize [14] [3] = 1;
   boothsize [15] [0] = 10;
   boothsize [15] [1] = 20;
   boothsize [15] [2] = 2;
   boothsize [16] [0] = 10;
   boothsize [16] [1] = 23;
   boothsize [16] [2] = 2;
   boothsize [17] [0] = 10;
   boothsize [17] [1] = 26;
   boothsize [17] [2] = 2;
   boothsize [17] [3] = 1;
   boothsize [18] [0] = 10;
   boothsize [18] [1] = 30;
   boothsize [18] [2] = 3;
   boothsize [19] [0] = 10;
   boothsize [19] [1] = 33;
   boothsize [19] [2] = 3;
   boothsize [20] [0] = 10;
   boothsize [20] [1] = 36;
   boothsize [20] [2] = 3;
   boothsize [20] [3] = 1;   
   boothsize [21] [0] = 10;
   boothsize [21] [1] = 40;
   boothsize [21] [2] = 4;   
   boothsize [22] [0] = 20;
   boothsize [22] [1] = 13;
   boothsize [22] [2] = 2;
   boothsize [22] [3] = 1;
   boothsize [23] [0] = 20;
   boothsize [23] [1] = 16;
   boothsize [23] [2] = 3;
   boothsize [24] [0] = 20;
   boothsize [24] [1] = 20;
   boothsize [24] [2] = 4;
   boothsize [25] [0] = 20;
   boothsize [25] [1] = 23;
   boothsize [25] [2] = 4;
   boothsize [26] [0] = 20;
   boothsize [26] [1] = 26;
   boothsize [26] [2] = 5;
   boothsize [27] [0] = 20;
   boothsize [27] [1] = 30;
   boothsize [27] [2] = 6;
   boothsize [28] [0] = 20;
   boothsize [28] [1] = 40;
   boothsize [28] [2] = 8;
   boothsize [29] [0] = 20;
   boothsize [29] [1] = 50;
   boothsize [29] [2] = 10;   
  
   
function calculateTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
	var acicform=document.forms["ACIC"];
    var Total=0.00;
    var subtotal=0.00;
    var pst=0.0;
	var pstsubtotal=0.00
	var tax=0.0;
    var eTotal=0.00;
    var esubtotal=0.00;
    var etax=0.0;
    var BSTotal=0.00;
	var BSsubtotal=0.00;
	var BStax=0.0;
	var mannTotal=0.00;
	var mannsubtotal=0.00;
	var manntax=0.0;
    var item_type = item[0];
    var item_qty= 0;
    var item_price=tr_1_pr[deadline];
    var eitem_type = eitem[0];
    var eitem_qty = 0;
    var eitem_price=add_tracks1_pr[deadline];
    var BSitem_price=0;
	var BStype=0;
	var mitem_type = mitem[0];
    var mitem_qty= 0;
    var mitem_price=0;
	var masterlock=0;
	var master= 0;
	var booths=0;
    var boothdims="";
    var boothsqft=0;
    var boothlf=0;
	
	var packa=0;
	var packb=0;
	var packc=0;
	var packd=0;
	var packe=0;

	var P_l_wall = 0;
	var P_r_wall = 0;
	var P_b_wall = 0;
	var l_wall = 0;
	var r_wall = 0;
	var b_wall = 0;
	var l_panel = 0;
	var r_panel = 0;
	var b_panel = 0;
	var Paper_lf = 0;
	var add_paper = "";
	var add_paper_lf = ""
	var PackB_LF = "";
	var packb_walls = "";
	var wall_color = "";
	var walltype = "";
	var Paper = false;
	var Panels = false;
    var paperdisc=0;
    var paperprice=0;
	    paperprice=wallpaper_pr[deadline];
    var PackB = acicform.elements["packb"].value;
	var PackBtype = getCheckedValue(acicform.elements['PackageB']);
	var addwallcov = "";
	var addlitem = getCheckedValue(acicform.elements['one_add']);
	

	var carpetgoneprice=0;
	var Nocarpet = false;
	Nocarpet = acicform.elements["remover"];
	if (Nocarpet.checked==true){
        carpetgoneprice=2.3;}
	var carpetpadprice=0;
	var Carpetpad =  "";
	Carpetpad = acicform.elements["adder_padding"];
	var Error = " ";
	if (Carpetpad.checked==true){
        carpetpadprice=2.1;}
	if (Nocarpet.checked && Carpetpad.checked) {
	   Error = "Error - can only choose Add padding OR Remove existing carpet - not both";
	   carpetpadprice=0;
	   carpetgoneprice=0;
	   }
	  
	var carpetprice = 0;
	var stancarpet = '';
	var cc_standard = '';
	var cc_plush = '';
	var cc_ultra = '';
	var carpet_type = '';
	stancarpet = acicform.elements["carpet_color"].value;
	cc_standard = acicform.elements["cc_color"].value;
    cc_plush = acicform.elements["plush_color"].value;
	cc_ultra = acicform.elements["ultra_color"].value;

    var BoothPackages = "";
    

   
   
   //Calculate BoothSeal Subtotal
 	for(var i = 0; i < 12; i++) {
		if(acicform.BStype[i].checked) {
			BStype= acicform.BStype[i].value;}}  
	master = acicform.elements['master'].value;
	masterlock = master * masterlock_pr[deadline];
	if (BStype > 0) {
	    BSitem_price= eval(bsitem[BStype]+"_pr[deadline]");
	    BSsubtotal= BSsubtotal + masterlock + BSitem_price;
	    BStax=0.08875 * BSsubtotal;
	    BSTotal=BSsubtotal+BStax;
		}

	var divobj= document.getElementById('BSsubtotal');
           divobj.innerHTML= BSsubtotal.toFixed(2);
	
	document.getElementById('bssubtotalval').value=BSsubtotal;
	
	var divobj= document.getElementById('BStax');
	   divobj.innerHTML= BStax.toFixed(2);

	document.getElementById('bstaxval').value=BStax;
	
	var divobj= document.getElementById('BSTotal');
	   divobj.innerHTML= BSTotal.toFixed(2);	
	
	document.getElementById('bstotalval').value=BSTotal;
  
   //Calculate Electric Subtotal
	for (i= 0; i < 18; i++){
	eitem_type= eitem[i];	
	eitem_qty= acicform.elements[eitem_type].value;	
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
	   mitem_qty= acicform.elements[mitem_type].value;	
	   mitem_price= eval(mitem[i]+"_pr[deadline]");	
	   mannsubtotal= mannsubtotal + (mitem_qty * mitem_price)};
	manntax=0.08875 * mannsubtotal;
	mannTotal = mannsubtotal+manntax;

	var divobj= document.getElementById('msubtotal');
           divobj.innerHTML= mannsubtotal.toFixed(2);
	
	document.getElementById('msubtotalval').value=mannsubtotal;
	
	var divobj= document.getElementById('mtax');
	   divobj.innerHTML= manntax.toFixed(2);

	document.getElementById('mtaxval').value=manntax;
	
	var divobj= document.getElementById('mTotal');
	   divobj.innerHTML= mannTotal.toFixed(2);	
		
	document.getElementById('mtotalval').value=mannTotal;
	
    //Calculate GES subtotal
	for (i= 0; i < 37; i++){
	item_type= item[i]	
	item_qty= acicform.elements[item_type].value;		
    item_price= eval(item[i]+"_pr[deadline]");	
    subtotal= subtotal + (item_qty * item_price)};
	
			
	booths= acicform.elements["boothsize"].value;
	boothdims = boothsize [booths] [0] + "ft D x " + boothsize [booths] [1] + "ft W";
	boothsqft = boothsize [booths] [0] * boothsize [booths] [1] ;
	
	//Package Count
	var chosen_s="";
	var allowed_s="";
    packa=parseInt(acicform.packa.value); 	
    packb=parseInt(acicform.packb.value); 
	packc=parseInt(acicform.packc.value); 
	packd=parseInt(acicform.packd.value); 
	packe=parseInt(acicform.packe.value); 
	var totalpacks = packa+packb+packc+packd+packe;
	if (totalpacks > 1) {chosen_s="s";}
	if (boothsize [booths] [2] > 1) {allowed_s="s";}
	if (totalpacks > boothsize [booths] [2])
	  {alert("You have chosen "+totalpacks+" Booth Package"+chosen_s+"\nYou may choose only "+ boothsize [booths] [2]+" Booth Package"+allowed_s);
	   acicform.packa.selectedIndex=0;
	   acicform.packa.options[0].selected=true;
	   acicform.packb.selectedIndex=0;
	   acicform.packb.options[0].selected=true;
	   acicform.packc.selectedIndex=0;
	   acicform.packc.options[0].selected=true;
	   acicform.packd.selectedIndex=0;
	   acicform.packd.options[0].selected=true;
	   acicform.packe.selectedIndex=0;
	   acicform.packe.options[0].selected=true;
		}
    if (addlitem != "NO Additional items" && boothsize [booths] [3] == 0)
	   {alert("An additional item is NOT avaiable for your booth size");
        for (var i=0; i<11; i++)
		   {acicform.one_add[i].checked=false;}
        acicform.one_add[11].checked=true;
        }		

	//Package B Wallpaper or Color Panels	 		
	P_l_wall= eval(acicform.elements["P_l_wall"].value);
	P_r_wall= eval(acicform.elements["P_r_wall"].value);
	P_b_wall= eval(acicform.elements["P_b_wall"].value);
	l_wall= parseInt(acicform.l_wall.value);
	r_wall= parseInt(acicform.r_wall.value);
	b_wall= parseInt(acicform.b_wall.value);
    	
	 
	Paper_lf= P_l_wall + P_r_wall + P_b_wall;
	if (Paper_lf == 0) {
		Paper_lf = boothsize [booths] [0] * 2 + boothsize [booths] [1];
	    P_l_wall= boothsize [booths] [0];
	    P_r_wall= boothsize [booths] [0];
	    P_b_wall= boothsize [booths] [1];}
	
	if (PackB > 0) 
	{
		if (PackBtype == "paper")
	      {PackB_LF = Paper_lf + " linear feet for wallpaper.";
		   wall_color = acicform.b_pap_color.value;}
		else if (PackBtype == "panels")
		  {       
	       b_panel = parseInt(P_b_wall/3.2);
	       if (P_l_wall == 5) {l_panel=1.5;}
	          else {l_panel= parseInt(P_l_wall/3);}
	       if (P_r_wall == 5) {r_panel=1.5;}
	          else {r_panel= parseInt(P_r_wall/3);}
		   panel_num = l_panel + b_panel + r_panel;  
		   if (l_panel == 1.5 && r_panel == 1.5) { PackB_LF = panel_num-1 + " panels and 2 half panels";}
		      else {PackB_LF = panel_num + " colored panels (" + Paper_lf + " feet) ";}
           wall_color = acicform.b_pan_color.value;			  
		  }
		paperdisc=.5;
		packb_walls = PackB_LF + " color: " + wall_color;

		var packobj= document.getElementById('PackB_Message');
	        packobj.innerHTML= packb_walls;	
	}
    else {
	   acicform.b_pap_color.selectedIndex=0;
	   acicform.b_pap_color.options[0].selected=true;
	   acicform.b_pan_color.selectedIndex=0;
	   acicform.b_pan_color.options[0].selected=true;
	   acicform.P_l_wall.selectedIndex=0;
	   acicform.P_l_wall.options[0].selected=true;
	   acicform.P_r_wall.selectedIndex=0;
	   acicform.P_r_wall.options[0].selected=true;
	   acicform.P_b_wall.selectedIndex=0;
	   acicform.P_b_wall.options[0].selected=true;
	   packb_walls = "";

	   var packobj= document.getElementById('PackB_Message');
	        packobj.innerHTML= packb_walls;	
 	}
	
	document.getElementById('PackB_Info').value=packb_walls;	  
    
	Paper = acicform.addpaper.checked;
	Panels = acicform.addpanel.checked;
	
	
	if (Paper || Panels)
     	{

		if (Paper) {
		   Paper_lf = l_wall+r_wall+b_wall;
		   AddWallCov_LF = Paper_lf + " linear feet for wallpaper.";
		   wall_color = acicform.add_wall.value;
		}
	    else 
		{
	       Paper_lf = l_wall+r_wall+b_wall;
		   b_panel = parseInt(b_wall/3.2);
	       if (l_wall == 5) {l_panel=1.5;}
	          else {l_panel= parseInt(l_wall/3);}
	       if (r_wall == 5) {r_panel=1.5;}
	          else {r_panel= parseInt(r_wall/3);}
		   panel_num = l_panel + b_panel + r_panel;  
		   if (l_panel == 1.5 && r_panel == 1.5) { AddWallCov_LF = panel_num-1 + " panels and 2 half panels";}
		      else {AddWallCov_LF = panel_num + " colored panels (" + Paper_lf + " feet) ";}
		   wall_color = acicform.add_wall.value;
           if (wall_color == "black" || wall_color == "charcoal" || wall_color == "aluminum" || wall_color == "cream" )		
               {wall_color = acicform.add_wall.value;}
           else {alert("Colored Panels are only available in\nblack, charcoal, aluminum or cream");
                 acicform.add_wall.selectedIndex=0;
	             acicform.add_wall.options[0].selected=true;}		   
		  }

		paperdisc=1;
		addwallcov = AddWallCov_LF + " color: " + wall_color;

		var packobj= document.getElementById('Add_Wall_Cover');
	    packobj.innerHTML= addwallcov;	
		
	
		}
	else 
	    {
		acicform.add_wall.selectedIndex=0;
	    acicform.add_wall.options[0].selected=true;
	    acicform.l_wall.selectedIndex=0;
	    acicform.l_wall.options[0].selected=true;
	    acicform.r_wall.selectedIndex=0;
	    acicform.r_wall.options[0].selected=true;
	    acicform.b_wall.selectedIndex=0;
	    acicform.b_wall.options[0].selected=true;
	    addwallcov = "";
		
		var packobj= document.getElementById('Add_Wall_Cover');
	    packobj.innerHTML= addwallcov;	
		}
	
	acicform.Addl_Wall_Cover.value=addwallcov;		
		
	boothlf = 2 * boothsize [booths] [0] + boothsize [booths] [1];

    BoothPackages = 	"Booth Packages: " + boothsize [booths] [2];
	if (boothsize [booths] [3] > 0) {BoothPackages = BoothPackages + 
	       "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Additional Items: " + boothsize [booths] [3];}
	
	if (stancarpet != '-') {
	     if (booths ==12)carpetprice = stan_carpet_pr_10x10[deadline];
		 else if (booths == 15)  carpetprice = stan_carpet_pr_10x20[deadline];
		      else if (booths == 18) carpetprice = stan_carpet_pr_10x30[deadline]; 
                   else Error = Error + "Must choose Custom Carpet for this booth size";
         carpet_type="Standard - " + stancarpet;}				   
	else if (cc_standard != "-") {carpetprice = boothsqft * cc_standard_pr[deadline]; carpet_type="CC Standard - " + cc_standard}
         else if (cc_plush != "-") {carpetprice = boothsqft * cc_plush_pr[deadline]; carpet_type="CC Plush - " + cc_plush}
              else if (cc_ultra != "-") {carpetprice = boothsqft * cc_ultra_pr[deadline]; carpet_type="CC Ultra Plush - " + cc_ultra}	

	var divobj= document.getElementById('Boothdims');
	divobj.innerHTML= "Booth Size:  " + boothdims;	
	
	var divobj= document.getElementById('SqFt');
	divobj.innerHTML= + boothsqft + " sq ft";	
	
	
	document.getElementById('booth_size').value=boothdims;
	document.getElementById('square_feet').value=boothsqft;

	document.getElementById('Carpet_Type').value=carpet_type;
	
		
    var divobj= document.getElementById('Error');
	divobj.innerHTML= Error;
	
	var divobj= document.getElementById('Packages');
	divobj.innerHTML= BoothPackages; 

	var labortot = laborcost();
	subtotal=subtotal + (paperprice * paperdisc * Paper_lf) + (carpetpadprice * boothsqft) + (carpetgoneprice * boothsqft) + carpetprice;
	pst= (subtotal+labortot) * .030;
	pstsubtotal = subtotal + labortot + pst;	
	tax=0.08875 * pstsubtotal;
	Total=pstsubtotal+tax;
	
    var divobj= document.getElementById('subtotal');
    divobj.innerHTML= subtotal.toFixed(2);
	
	document.getElementById('subtotalval').value=subtotal;
	
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
		
	//Booth Package Only
	if(Total== 0 && mannsubtotal==0 && esubtotal==0 && BSsubtotal==0)
	  {acicform.credit.value = "Package Only - No Credit Card Necessary";
	  acicform.exp_date.value = "---";
	  acicform.cardholder.value = "---";
	  acicform.ccv.value = "---";
	  acicform.billing_street.value = "---";
	  acicform.billing_city.value = "---";}
	else
	{var ccnumb = acicform.credit.value;
	  if (ccnumb == "Package Only - No Credit Card Necessary")
	  {acicform.credit.value = "";
	  acicform.exp_date.value = "";
	  acicform.cardholder.value = "";
	  acicform.ccv.value = "";
	  acicform.billing_street.value = "";
	  acicform.billing_city.value = "";}
     }

}

// Booth size not entered
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

 //Calculate cost of labor   
function laborcost()
{
 var lday = new Array(5);
 var acicform= document.forms["ACIC"];
   
   for (j=0; j<5; j++) { lday[j]= [0,0,0,0,0,0,0,0];}
   
 //Day [0] left at 0, element [0] straight time day=0, overtime day=1,  double time day=2
 //Element [1] start time, element [2] stop time, element [3] number of workers 
 //Day element [4] straight time hours, [5] overtime hours, [6] double time hours
 
 lday [1] [0] = 0;
 lday [1] [1] = acicform.elements['in_start1'].value;
 lday [1] [2] = acicform.elements['in_stop1'].value;
 lday [1] [3] = acicform.elements['in_workers1'].value;
 lday [1] [7] = acicform.elements['in_day1'].checked;
 lday [2] [0] = 1; 
 lday [2] [1] = acicform.elements['in_start2'].value;
 lday [2] [2] = acicform.elements['in_stop2'].value;
 lday [2] [3] = acicform.elements['in_workers2'].value;
 lday [2] [7] = acicform.elements['in_day2'].checked;
 lday [3] [0] = 0; 
 lday [3] [1] = acicform.elements['out_start1'].value;
 lday [3] [2] = acicform.elements['out_stop1'].value;
 lday [3] [3] = acicform.elements['out_workers1'].value;
 lday [3] [7] = acicform.elements['out_day1'].checked;
 lday [4] [0] = 1; 
 lday [4] [1] = acicform.elements['out_start2'].value;
 lday [4] [2] = acicform.elements['out_stop2'].value;
 lday [4] [3] = acicform.elements['out_workers2'].value; 
 lday [4] [7] = acicform.elements['out_day2'].checked;

 //GES Labor Rates
var rate_st=new Array();
rate_st["pre"]=175;
rate_st["post"]=227.25;

var rate_ot=new Array();
rate_ot["pre"]=245.60;
rate_ot["post"]=319.75;

var rate_dt=new Array();
rate_dt["pre"]=295.30;
rate_dt["post"]=383.95;
  
var stcost=0;
var otcost=0;
var dtcost=0;
var lcost=0;
var scost=0;

 var super_type=getCheckedValue(acicform.elements['supervised']);
 
 for (var i=1; i<5; i++)
	{
	if (lday [i] [7])
	    if (parseInt(lday [i] [1]) > parseInt(lday [i] [2]))  alert("Stop time " + lday [i] [2] + " is before start time " + lday [i] [1]);
		else if (parseInt(lday[i] [0]) == 0)
	            if (parseInt(lday [i] [1]) < 17)
	                if (parseInt(lday [i] [2]) < 17) {lday [i] [4] = lday [i] [2] - lday [i] [1];}
		            else
		               {
		                lday [i] [4] = 16 - lday [i] [1];
			            lday [i] [5] = lday [i] [2] - 17;
		               }
	            else lday [i] [5] = lday [i] [2] - lday [i] [1];
	        else if  (parseInt(lday [i] [0]) == 1) lday [i] [5] = lday [i] [2] - lday [i] [1];
	             else lday [i] [6] = lday [i] [2] - lday [i] [1];
 
		
    }  

 //Calculate Total Labor Cost
 for (var i=1; i<5; i++)
	     {stcost = stcost + lday [i] [4] * rate_st[deadline] * lday [i] [3];
		  otcost = otcost + lday [i] [5] * rate_ot[deadline] * lday [i] [3];
		  dtcost = dtcost + lday [i] [6] * rate_dt[deadline] * lday [i] [3];
		 }
		  
lcost = stcost+otcost+dtcost;
if (super_type === "GES") {
        scost = lcost * .30;
		if (scost < 65.50) scost = 65.50;
		}
else
     scost = 0;
	 
lcost = lcost + scost;


var costobj= document.getElementById('STCost');
	costobj.innerHTML= stcost.toFixed(2);	
	
var divobj= document.getElementById('OTCost');
	divobj.innerHTML= otcost.toFixed(2);
	
var divobj= document.getElementById('DTCost');
	divobj.innerHTML= dtcost.toFixed(2);
	
var divobj= document.getElementById('Super');
	divobj.innerHTML= scost.toFixed(2);
	
var divobj= document.getElementById('Labor');
	divobj.innerHTML= lcost.toFixed(2);	
	
var divobj= document.getElementById('LaborSub');
	divobj.innerHTML= lcost.toFixed(2);


document.getElementById('laborsubtotal').value=lcost;

return lcost;



 }
  


