/*
This source is shared under the terms of LGPL 3
www.gnu.org/licenses/lgpl.html

You are free to use the code in Commercial or non-commercial projects
*/

 //Set up an associative array
 //The keys represent the pre-deadline price and the post deadline price
 //
 //booth seal
 
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
 
 //additional tracks
 var add_tracks1_pr= new Array();
 add_tracks1_pr["pre"]=351;
 add_tracks1_pr["post"]=458;
 
 var add_tracks2_pr= new Array();
 add_tracks2_pr["pre"]=377.40;
 add_tracks2_pr["post"]=472.40;
 
 var add_tracks3_pr= new Array();
 add_tracks3_pr["pre"]=421;
 add_tracks3_pr["post"]=526.70;

 var add_tracks4_pr= new Array();
 add_tracks4_pr["pre"]=476.30;
 add_tracks4_pr["post"]=595.15;
 
 var add_tracks5_pr= new Array();
 add_tracks5_pr["pre"]=545.40;
 add_tracks5_pr["post"]=681.90; 
 
 //additional lights
 var add_lights1_pr= new Array();
 add_lights1_pr["pre"]=91.30;
 add_lights1_pr["post"]=113.95;
 
 var add_lights2_pr= new Array();
 add_lights2_pr["pre"]=182.15;
 add_lights2_pr["post"]=227.80;
 
 var add_lights3_pr= new Array();
 add_lights3_pr["pre"]=254.70;
 add_lights3_pr["post"]=307.40;
 
 
 
//special lights
var lights1_pr= new Array();
lights1_pr["pre"]=381;
lights1_pr["post"]=381;


//electric power
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
 
 //tables and risers
 var tr_1_pr= new Array();
 tr_1_pr["pre"]=81.15;
 tr_1_pr["post"]=105.55;

 var tr_2_pr= new Array();
 tr_2_pr["pre"]=81.15;
 tr_2_pr["post"]=105.55;
 
 var tr_3_pr= new Array();
 tr_3_pr["pre"]=81.15;
 tr_3_pr["post"]=105.55;
 
 var tr_4_pr= new Array();
 tr_4_pr["pre"]=81.15;
 tr_4_pr["post"]=105.55;
 
 var tr_5_pr= new Array();
 tr_5_pr["pre"]=81.15;
 tr_5_pr["post"]=105.55;
 
 var tr_6_pr= new Array();
 tr_6_pr["pre"]=81.15;
 tr_6_pr["post"]=105.55;
 
 var tr_7_pr= new Array();
 tr_7_pr["pre"]=30.45;
 tr_7_pr["post"]=39.60;
 
 var tr_8_pr= new Array();
 tr_8_pr["pre"]=37.65;
 tr_8_pr["post"]=49.05;
 
 //Wall Mounted Items
 var wm1_pr= new Array();
 wm1_pr["pre"]=81.15;
 wm1_pr["post"]=105.55;
 
 var wm2_pr= new Array();
 wm2_pr["pre"]=81.15;
 wm2_pr["post"]=105.55;
 
 var wm3_pr= new Array();
 wm3_pr["pre"]=81.15;
 wm3_pr["post"]=105.55;
 
 var wm4_pr= new Array();
 wm4_pr["pre"]=81.15;
 wm4_pr["post"]=105.55;
 
 var wm5_pr= new Array();
 wm5_pr["pre"]=11.90;
 wm5_pr["post"]=11.90;
 
 var dressing1_pr= new Array();
 dressing1_pr["pre"]=282.90;
 dressing1_pr["post"]=367.75;
  
 var dressing2_pr= new Array();
 dressing2_pr["pre"]=477;
 dressing2_pr["post"]=620.40;
   
 var dressing3_pr= new Array();
 dressing3_pr["pre"]=410.90;
 dressing3_pr["post"]=534;
  
 var dressing4_pr= new Array();
 dressing4_pr["pre"]=216.35;
 dressing4_pr["post"]=281.35;
 
//EZ-Shelf
var ez1_pr= new Array() ;
ez1_pr["pre"]=118.15;
ez1_pr["post"]=155.00;

var ez2_pr= new Array() ;
ez2_pr["pre"]=238.50;
ez2_pr["post"]=310.15;
 
 //Miscellaneous Furnishings
var misc_furn1_pr= new Array() ;
misc_furn1_pr["pre"]=81.15;
misc_furn1_pr["post"]=105.55;

var misc_furn2_pr= new Array() ;
misc_furn2_pr["pre"]=81.15;
misc_furn2_pr["post"]=105.55;

var misc_furn3_pr= new Array() ;
misc_furn3_pr["pre"]=81.15;
misc_furn3_pr["post"]=105.55;

var misc_furn4_pr= new Array() ;
misc_furn4_pr["pre"]=17.45;
misc_furn4_pr["post"]=22.65;
 
var misc_furn5_pr= new Array() ;
misc_furn5_pr["pre"]=81.15;
misc_furn5_pr["post"]=105.55;

var misc_furn6_pr= new Array() ;
misc_furn6_pr["pre"]=81.15;
misc_furn6_pr["post"]=105.55;

var misc_furn7_pr= new Array() ;
misc_furn7_pr["pre"]=72.50;
misc_furn7_pr["post"]=94.30;

var misc_furn8_pr= new Array() ;
misc_furn8_pr["pre"]=323.20;
misc_furn8_pr["post"]=420.10;

var misc_furn9_pr= new Array() ;
misc_furn9_pr["pre"]=263;
misc_furn9_pr["post"]=341.80;

//Autopoles
var autopoles1_pr= new Array() ;
autopoles1_pr["pre"]=313.15;
autopoles1_pr["post"]=407;

var autopoles2_pr= new Array() ;
autopoles2_pr["pre"]=313.15;
autopoles2_pr["post"]=407;

var autopoles3_pr= new Array() ;
autopoles3_pr["pre"]=407;
autopoles3_pr["post"]=529.15;

var autopoles4_pr= new Array() ;
autopoles4_pr["pre"]=407;
autopoles4_pr["post"]=529.15;

var autopoles5_pr= new Array() ;
autopoles5_pr["pre"]=259.50;
autopoles5_pr["post"]=337.80;

var autopoles6_pr= new Array() ;
autopoles6_pr["pre"]=389.65;
autopoles6_pr["post"]=507.05;

var autopoles7_pr= new Array() ;
autopoles7_pr["pre"]=65.00;
autopoles7_pr["post"]=84.50;

var autopoles8_pr= new Array() ;
autopoles8_pr["pre"]=97.45;
autopoles8_pr["post"]=126.90;

var autopoles9_pr= new Array() ;
autopoles9_pr["pre"]=89.25;
autopoles9_pr["post"]=110.85;

var autopoles10_pr= new Array() ;
autopoles10_pr["pre"]=89.25;
autopoles10_pr["post"]=110.85;

//Wallpaper
var wallpaper_pr= new Array();
wallpaper_pr["pre"]=15.80;
wallpaper_pr["post"]=21.35;

//Carpet
var stan_carpet_pr_10x10= new Array();
stan_carpet_pr_10x10["pre"]=216.70;
stan_carpet_pr_10x10["post"]=281.90;

var stan_carpet_pr_10x20= new Array();
stan_carpet_pr_10x20["pre"]=435.05;
stan_carpet_pr_10x20["post"]=565.60;

var stan_carpet_pr_10x30= new Array();
stan_carpet_pr_10x30["pre"]=653.75;
stan_carpet_pr_10x30["post"]=849.85;

var cc_standard_pr= new Array();
cc_standard_pr["pre"]=4.8;
cc_standard_pr["post"]=6.3;

var cc_plush_pr= new Array();
cc_plush_pr["pre"]=7;
cc_plush_pr["post"]=9.1;

var cc_ultra_pr= new Array();
cc_ultra_pr["pre"]=8;
cc_ultra_pr["post"]=10.40;

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
 item[27]= "misc_furn9";
 item[28]= "autopoles1";
 item[29]= "autopoles2";	
 item[30]= "autopoles3";
 item[31]= "autopoles4";
 item[32]= "autopoles5";
 item[33]= "autopoles6";
 item[34]= "autopoles7";
 item[35]= "autopoles8";
 item[36]= "autopoles9";
 item[37]= "autopoles10"; 
 item[38]= "add_tracks1";
 item[39]= "add_tracks2";
 item[40]= "add_tracks3";
 item[41]= "add_tracks4";
 item[42]= "add_tracks5";
 item[43]= "add_lights1";
 item[44]= "add_lights2";
 item[45]= "add_lights3";
 
 
 var eitem= new Array();
 eitem[0]= "lights1";
 eitem[1]= "epower1";
 eitem[2]= "epower2";
 eitem[3]= "epower3";
 eitem[4]= "epower4";
 eitem[5]= "epower5";
 eitem[6]= "epower6";
 eitem[7]= "epower7";
  
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
 
 
 var boothsize= new Array(30);   
   for (j=0; j<32; j++) {
      boothsize[j]= [0,0,0,0,0,0,0]
	}
   
   boothsize [1] [0] = 5;
   boothsize [1] [1] = 16;
   boothsize [1] [2] = 1;
   boothsize [1] [3] = 1;
   boothsize [1] [4] = 3;
   boothsize [1] [5] = 500;
   boothsize [2] [0] = 5;
   boothsize [2] [1] = 20;
   boothsize [2] [2] = 1;
   boothsize [2] [3] = 1;
   boothsize [2] [4] = 4;
   boothsize [2] [5] = 1000;
   boothsize [3] [0] = 6;
   boothsize [3] [1] = 6;
   boothsize [3] [2] = 1;
   boothsize [3] [3] = 1;
   boothsize [3] [4] = 2;
   boothsize [3] [5] = 500;
   boothsize [4] [0] = 6;
   boothsize [4] [1] = 10;
   boothsize [4] [2] = 1;
   boothsize [4] [3] = 1;
   boothsize [4] [4] = 2;
   boothsize [4] [5] = 500;
   boothsize [5] [0] = 6;
   boothsize [5] [1] = 13;
   boothsize [5] [2] = 1;
   boothsize [5] [3] = 1;
   boothsize [5] [4] = 3;
   boothsize [5] [5] = 500;
   boothsize [6] [0] = 6;
   boothsize [6] [1] = 16;
   boothsize [6] [2] = 1;
   boothsize [6] [3] = 1;
   boothsize [6] [4] = 3;
   boothsize [6] [5] = 1000;
   boothsize [7] [0] = 6;
   boothsize [7] [1] = 20;
   boothsize [7] [2] = 1;
   boothsize [7] [3] = 1;
   boothsize [7] [4] = 4;
   boothsize [7] [5] = 1000;
   boothsize [8] [0] = 6;
   boothsize [8] [1] = 23;
   boothsize [8] [2] = 1;
   boothsize [8] [3] = 1;
   boothsize [8] [4] = 5;
   boothsize [8] [6] = 1;
   boothsize [9] [0] = 6;
   boothsize [9] [1] = 26;
   boothsize [9] [2] = 1;
   boothsize [9] [3] = 1;
   boothsize [9] [4] = 6;
   boothsize [9] [5] = 1500;
   boothsize [9] [6] = 1;
   boothsize [10] [0] = 6;
   boothsize [10] [1] = 30;
   boothsize [10] [2] = 1;
   boothsize [10] [3] = 1;
   boothsize [10] [4] = 6;
   boothsize [10] [5] = 1500;
   boothsize [10] [6] = 1;   
   boothsize [11] [0] = 6;
   boothsize [11] [1] = 33;
   boothsize [11] [2] = 2;
   boothsize [11] [3] = 2;
   boothsize [11] [4] = 8;
   boothsize [11] [5] = 2000;
   boothsize [12] [0] = 6;
   boothsize [12] [1] = 36;
   boothsize [12] [2] = 2;
   boothsize [12] [3] = 2;
   boothsize [12] [4] = 8;
   boothsize [12] [5] = 2000;
   boothsize [13] [0] = 6;
   boothsize [13] [1] = 40;
   boothsize [13] [2] = 2;
   boothsize [13] [3] = 2;
   boothsize [13] [4] = 8;
   boothsize [13] [5] = 2000;
   boothsize [14] [0] = 10;
   boothsize [14] [1] = 10;
   boothsize [14] [2] = 1;
   boothsize [14] [3] = 1;
   boothsize [14] [4] = 4;
   boothsize [14] [5] = 1000;
   boothsize [15] [0] = 10;
   boothsize [15] [1] = 13;
   boothsize [15] [2] = 1;
   boothsize [15] [3] = 1;
   boothsize [15] [4] = 5;
   boothsize [15] [5] = 1000;
   boothsize [15] [6] = 1;
   boothsize [16] [0] = 10;
   boothsize [16] [1] = 16;
   boothsize [16] [2] = 1;
   boothsize [16] [3] = 1;
   boothsize [16] [4] = 6;
   boothsize [16] [5] = 1500;
   boothsize [16] [6] = 1;
   boothsize [17] [0] = 10;
   boothsize [17] [1] = 20;
   boothsize [17] [2] = 2;
   boothsize [17] [3] = 2;
   boothsize [17] [4] = 8;
   boothsize [17] [5] = 2000;
   boothsize [18] [0] = 10;
   boothsize [18] [1] = 23;
   boothsize [18] [2] = 2;
   boothsize [18] [3] = 2;
   boothsize [18] [4] = 4;
   boothsize [18] [5] = 2000;
   boothsize [19] [0] = 10;
   boothsize [19] [1] = 26;
   boothsize [19] [2] = 2;
   boothsize [19] [3] = 2;
   boothsize [19] [4] = 10;
   boothsize [19] [5] = 2500;
   boothsize [19] [6] = 1;
   boothsize [20] [0] = 10;
   boothsize [20] [1] = 30;
   boothsize [20] [2] = 3;
   boothsize [20] [3] = 3;
   boothsize [20] [4] = 12;
   boothsize [20] [5] = 3000;   
   boothsize [21] [0] = 10;
   boothsize [21] [1] = 33;
   boothsize [21] [2] = 3; 
   boothsize [21] [3] = 3;
   boothsize [21] [4] = 12;
   boothsize [21] [5] = 3000;    
   boothsize [22] [0] = 10;
   boothsize [22] [1] = 36;
   boothsize [22] [2] = 3;
   boothsize [22] [3] = 3;
   boothsize [22] [4] = 15;
   boothsize [22] [5] = 3500;
   boothsize [22] [6] = 1;   
   boothsize [23] [0] = 10;
   boothsize [23] [1] = 40;
   boothsize [23] [2] = 4;
   boothsize [23] [3] = 4;
   boothsize [23] [4] = 16;
   boothsize [23] [5] = 4000; 
   boothsize [24] [0] = 20;
   boothsize [24] [1] = 13;
   boothsize [24] [2] = 2;
   boothsize [24] [3] = 2;
   boothsize [24] [4] = 10;
   boothsize [24] [5] = 2500;
   boothsize [24] [6] = 1;   
   boothsize [25] [0] = 20;
   boothsize [25] [1] = 16;
   boothsize [25] [2] = 3;
   boothsize [25] [3] = 3;
   boothsize [25] [4] = 12;
   boothsize [25] [5] = 3000; 
   boothsize [26] [0] = 20;
   boothsize [26] [1] = 20;
   boothsize [26] [2] = 4;
   boothsize [26] [3] = 4;
   boothsize [26] [4] = 16;
   boothsize [26] [5] = 4000; 
   boothsize [27] [0] = 20;
   boothsize [27] [1] = 23;
   boothsize [27] [2] = 4;
   boothsize [27] [3] = 4;
   boothsize [27] [4] = 16;
   boothsize [27] [5] = 4000; 
   boothsize [28] [0] = 20;
   boothsize [28] [1] = 26;
   boothsize [28] [2] = 5;
   boothsize [28] [3] = 5;
   boothsize [28] [4] = 20;
   boothsize [28] [5] = 4500; 
   boothsize [29] [0] = 20;
   boothsize [29] [1] = 30;
   boothsize [29] [2] = 6;
   boothsize [29] [3] = 6;
   boothsize [29] [4] = 24;
   boothsize [29] [5] = 6000;  
   boothsize [30] [0] = 20;
   boothsize [30] [1] = 40;
   boothsize [30] [2] = 8;
   boothsize [30] [3] = 8;
   boothsize [30] [4] = 32;
   boothsize [30] [5] = 8000; 
   boothsize [31] [0] = 20;
   boothsize [31] [1] = 50;
   boothsize [31] [2] = 10;
   boothsize [31] [3] = 10;
   boothsize [31] [4] = 40;
   boothsize [31] [5] = 8000;   
  
   
function calculateTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
	var coterieform= document.forms["COTERIE"];
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
    var paperdisc=1;
    var paperprice=0;
    var packageB = 0;
    PackageB= coterieform.elements["packb"].value;
	var CPanel= coterieform.elements["cpanel"].value;
	if (PackageB > 0 || CPanel > 0){
        paperdisc=.5;
		paperprice=wallpaper_pr[deadline];}
    var PPChoice = "";
	var etracks = 0;
	var elights = 0;
	var ewatts = 0;
		

	var carpetgoneprice=0;
	var Nocarpet = false;
	Nocarpet = coterieform.elements["remover"];
	if (Nocarpet.checked==true){
        carpetgoneprice=2.2;}
	var carpetpadprice=0;
	var Carpetpad =  "";
	Carpetpad = coterieform.elements["adder_padding"];
	var Error = " ";
	if (Carpetpad.checked==true){
        carpetpadprice=2;}
	if (Nocarpet.checked && Carpetpad.checked) {
	   Error = "Error - can only choose Add padding OR Remove existing carpet - not both";
	   carpetpadprice=0;
	   carpetgoneprice=0;
	   }
	var Wallpaper = "-";
	Wallpaper = coterieform.elements["add_wall"].value;
	if (Wallpaper!="-"){
        paperprice=wallpaper_pr[deadline];}
  
	var carpetprice = 0;
	var stancarpet = '';
	var cc_standard = '';
	var cc_plush = '';
	var cc_ultra = '';
	var carpet_type = '';
	stancarpet = coterieform.elements["carpet_color"].value;
	cc_standard = coterieform.elements["cc_color"].value;
    cc_plush = coterieform.elements["plush_color"].value;
	cc_ultra = coterieform.elements["ultra_color"].value;

    var BoothPackages = "";
   	
	var P_l_wall = 0;
	var P_r_wall = 0;
	var P_b_wall = 0;
	var l_wall = 0;
	var r_wall = 0;
	var b_wall = 0;
	var Paper_lf = 0;
	var add_paper = "";
	var add_paper_lf = ""
	var PackB_LF = "";
	var walltype = "";
   
   //Calculate BoothSeal Subtotal
 	for(var i = 0; i < 12; i++) {
		if(coterieform.BStype[i].checked) {
			BStype= coterieform.BStype[i].value;}}  
	master= coterieform.elements['master'].value;
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
	for (i= 0; i < 7; i++){
	eitem_type= eitem[i];	
	eitem_qty= coterieform.elements[eitem_type].value;	
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
	   mitem_qty= coterieform.elements[mitem_type].value;	
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
	
    //Calculate subtotal
	for (i= 0; i < 46; i++){
	item_type= item[i]	
	item_qty= coterieform.elements[item_type].value;		
    item_price= eval(item[i]+"_pr[deadline]");	
    subtotal= subtotal + (item_qty * item_price)};

	//Booth Info

	var powerpackage=getCheckedValue(coterieform.elements['powerpack']);
	if (powerpackage == "elec") {PPChoice = "I want the Power Package";}
	else if (powerpackage == "light") {PPChoice = "I want the Light Package";}
	else if (powerpackage == "none") {PPChoice = "I DO NOT want an ENK light or power package";}
	

	
	booths = coterieform.elements["boothsize"].value;
	boothdims = boothsize [booths] [0] + "ft D x " + boothsize [booths] [1] + "ft W";
	boothsqft = boothsize [booths] [0] * boothsize [booths] [1] ;
	
	var plural ="";
	etracks = boothsize [booths] [3];
	if (etracks > 1) {plural = "s";}
	elights = boothsize [booths] [4];
	ewatts = boothsize [booths] [5];	
	
	var lightobj= document.getElementById("PowerPackages");
	lightobj.innerHTML = "Choose either a LIGHT PACKAGE with " + etracks + " track" + plural + ", and " + elights + " total lights OR Choose a POWER PACKAGE with " + ewatts + " watts of power.";
	
	var choiceobj= document.getElementById("PowerChoice");
	choiceobj.innerHTML = PPChoice;
	
	
	P_l_wall= coterieform.elements["P_l_wall"].value;
	P_r_wall= coterieform.elements["P_r_wall"].value;
	P_b_wall= coterieform.elements["P_b_wall"].value;
	l_wall= coterieform.elements["l_wall"].value;
	r_wall= coterieform.elements["r_wall"].value;
	b_wall= coterieform.elements["b_wall"].value;
	add_paper= coterieform.elements["add_wall"].value

		
	if (PackageB > 0 || CPanel > 0) {Paper_lf= eval(P_l_wall) + eval(P_r_wall) + eval(P_b_wall);
	                   if (Paper_lf == 0) {Paper_lf = boothsize [booths] [0] * 2 + boothsize [booths] [1];}
	                   PackB_LF = Paper_lf + " linear feet for wallpaper / colored panels";}
	   else if (coterieform.paperpanel[0].checked || coterieform.paperpanel[1].checked) {
	            Paper_lf = eval(l_wall) + eval(r_wall) + eval(b_wall);
				if (coterieform.paperpanel[0].checked) {walltype = "wallpaper";}
				    else {walltype = "colored panels";}
	            add_paper_lf = Paper_lf + " linear feet for " + walltype;}
	
	document.getElementById('Wall_Type').value = walltype;	
		
	boothlf = 2 * boothsize [booths] [0] + boothsize [booths] [1];

    BoothPackages = 	"Booth Packages: " + boothsize [booths] [2];
	if (boothsize [booths] [6] > 0) {BoothPackages = BoothPackages + 
	       "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Additional Items: " + boothsize [booths] [6];}
	
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
	
	var divobj= document.getElementById('Paper_LF');
	divobj.innerHTML= PackB_LF;	
	
	var divobj= document.getElementById('Add_Paper_lf');
	divobj.innerHTML= add_paper_lf;
	
	document.getElementById('booth_size').value=boothdims;
	document.getElementById('square_feet').value=boothsqft;
	document.getElementById('Paper_Feet').value=PackB_LF;
	document.getElementById('Add_Paper_Feet').value=add_paper_lf;
	document.getElementById('Carpet_Type').value=carpet_type;
	
		
    var divobj= document.getElementById('Error');
	divobj.innerHTML= Error;
	
	var divobj= document.getElementById('Packages');
	divobj.innerHTML= BoothPackages; 

	
	
	subtotal=subtotal + (paperprice * paperdisc * Paper_lf) + (carpetpadprice * boothsqft) + (carpetgoneprice * boothsqft) + carpetprice;
	pst= subtotal * .030;
	pstsubtotal = subtotal + pst;	
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
		
	
return false;

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
   
function paymentinfo()
{
//Payment Information Function
var payinfo="";
var coterieform= document.forms["COTERIE"];
var pay_type=getCheckedValue(coterieform.elements['paytype']);


payinfo = "<table align=\"center\" border=0 cellpadding=0 cellspacing=0 style='border-collapse:collapse'>\r\n";
payinfo = payinfo + "<col width=1153> <tr> <td class=xl171>\r\n<br /><br />";

if (pay_type == "cc") {

payinfo = payinfo + "Credit Card Number: <input type='text'  name='credit' size='43' class='xl171'  style=' border:none; border-bottom:solid windowtext .75pt;'>&emsp;&emsp;\r\n";
payinfo = payinfo + "Expiration Date:<input type='text' name='exp_date' size='20' class='xl171'  style=' border:none; border-bottom:solid windowtext .75pt;'><br />"
payinfo = payinfo + "Cardholder Name:<input type='text' name='cardholder' size='45' class='xl171'  style=' border:none; border-bottom:solid windowtext .75pt;'>&emsp;&emsp;CCV: <input type='text' name='ccv' size='15' class='xl171'  style=' border:none; border-bottom:solid windowtext .75pt;'><br />"
payinfo = payinfo + "Billing Street Address:<input type='text' name='billing_street' size='80' class='xl171'  style=' border:none; border-bottom:solid windowtext .75pt;'><br />"
payinfo = payinfo + "Billing City, State Zip, Country:<input type='text' name='billing_city' size='80' class='xl171'  style=' border:none; border-bottom:solid windowtext .75pt;'>"; 
	}
	
if (pay_type == "check") {
payinfo = payinfo +  "\r\nCheck # <input type='text' name='checknumges' size='20' class='xl171'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Date: <input type='text' name='checkdateges' size='25' class='xl171'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Amount US$ <input type='text' name='checkamtges' size='20' class='xl171'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp;GES PAYMENT<br />";
payinfo = payinfo +  "\r\nCheck # <input type='text' name='checknumjj' size='20' class='xl171'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Date: <input type='text' name='checkdatejj' size='25' class='xl171'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Amount US$ <input type='text' name='checkamtjj' size='20' class='xl171'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp;JAVITS PAYMENT<br />";
payinfo = payinfo + "\r\nCheck # <input type='text' name='checknumbs' size='20' class='xl171'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Date: <input type='text' name='checkdatebs' size='25' class='xl171'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Amount US$ <input type='text' name='checkamtbs' size='20' class='xl171'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp;BOOTHSEAL PAYMENT<br />";
payinfo = payinfo + "\r\nCheck # <input type='text' name='checknumdnb' size='20' class='xl171'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Date: <input type='text' name='checkdatednb' size='25' class='xl171'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Amount US$ <input type='text' name='checkamtdnb' size='20' class='xl171'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp;D&B RENTAL PAYMENT<br /><br />";
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

