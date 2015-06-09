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

  //draped tables
 var dr_tr_1_pr= new Array();
 dr_tr_1_pr["pre"]=122.25;
 dr_tr_1_pr["post"]=152.70;

 var dr_tr_2_pr= new Array();
 dr_tr_2_pr["pre"]=141.20;
 dr_tr_2_pr["post"]=176.50;
 
 var dr_tr_3_pr= new Array();
 dr_tr_3_pr["pre"]=165.50;
 dr_tr_3_pr["post"]=206.70;
 
 var dr_tr_4_pr= new Array();
 dr_tr_4_pr["pre"]=159.35;
 dr_tr_4_pr["post"]=198.20;
 
 var dr_tr_5_pr= new Array();
 dr_tr_5_pr["pre"]=179.05;
 dr_tr_5_pr["post"]=223.95;
 
 var dr_tr_6_pr= new Array();
 dr_tr_6_pr["pre"]=206.40;
 dr_tr_6_pr["post"]=260.45;
 
 var dr_tr_7_pr= new Array();
 dr_tr_7_pr["pre"]=64.90;
 dr_tr_7_pr["post"]=84.40;
 
 var dr_tr_8_pr= new Array();
 dr_tr_8_pr["pre"]=97.35;
 dr_tr_8_pr["post"]=121.90;
 
 
 //undraped tables and risers
 var tr_1_pr= new Array();
 tr_1_pr["pre"]=45.85;
 tr_1_pr["post"]=59.60;

 var tr_2_pr= new Array();
 tr_2_pr["pre"]=56.50;
 tr_2_pr["post"]=73.40;
 
 var tr_3_pr= new Array();
 tr_3_pr["pre"]=67.70;
 tr_3_pr["post"]=88.10;
 
 var tr_4_pr= new Array();
 tr_4_pr["pre"]=65.60;
 tr_4_pr["post"]=85.25;
 
 var tr_5_pr= new Array();
 tr_5_pr["pre"]=79.10;
 tr_5_pr["post"]=102.75;
 
 var tr_6_pr= new Array();
 tr_6_pr["pre"]=89.60;
 tr_6_pr["post"]=116.55;
 
 var tr_7_pr= new Array();
 tr_7_pr["pre"]=30.45;
 tr_7_pr["post"]=39.60;
 
 var tr_8_pr= new Array();
 tr_8_pr["pre"]=37.65;
 tr_8_pr["post"]=49.05;
 
 //Table Drape
 var drape4_pr= new Array();
 drape4_pr["pre"]=58.25;
 drape4_pr["post"]=73;
 
 var drape6_pr= new Array();
 drape6_pr["pre"]=89.90;
 drape6_pr["post"]=111.25;
 
 //Wall Mounted Items
 var wm1_pr= new Array();
 wm1_pr["pre"]=65.00;
 wm1_pr["post"]=84.50;
 
 var wm2_pr= new Array();
 wm2_pr["pre"]=65.00;
 wm2_pr["post"]=84.50;
 
 var wm3_pr= new Array();
 wm3_pr["pre"]=97.45;
 wm3_pr["post"]=126.70;
 
 var wm4_pr= new Array();
 wm4_pr["pre"]=93.05;
 wm4_pr["post"]=120.95;
 
 var wm5_pr= new Array();
 wm5_pr["pre"]=11.90;
 wm5_pr["post"]=11.90;
 
 //Dressing Room & Additional Wall Panels
 
 var dressing1_pr= new Array();
 dressing1_pr["pre"]=282.90;
 dressing1_pr["post"]=367.75;
  
 var dressing2_pr= new Array();
 dressing2_pr["pre"]=477;
 dressing2_pr["post"]=620.40;
     
 var wall_pan1_pr= new Array();
 wall_pan1_pr["pre"]=216.35;
 wall_pan1_pr["post"]=281.35;
 
 var wall_pan2_pr= new Array();
 wall_pan2_pr["pre"]=410.90;
 wall_pan2_pr["post"]=534;
 
//EZ-Shelf
var ez1_pr= new Array() ;
ez1_pr["pre"]=118.15;
ez1_pr["post"]=155.00;

var ez2_pr= new Array() ;
ez2_pr["pre"]=238.50;
ez2_pr["post"]=310.15;
 
 //Miscellaneous Furnishings
var misc_furn1_pr= new Array() ;
misc_furn1_pr["pre"]=79.10;
misc_furn1_pr["post"]=102.75;

var misc_furn2_pr= new Array() ;
misc_furn2_pr["pre"]=183.75;
misc_furn2_pr["post"]=239.05;

var misc_furn3_pr= new Array() ;
misc_furn3_pr["pre"]=67.70;
misc_furn3_pr["post"]=88.05;

var misc_furn4_pr= new Array() ;
misc_furn4_pr["pre"]=17.45;
misc_furn4_pr["post"]=22.65;
 
var misc_furn5_pr= new Array() ;
misc_furn5_pr["pre"]=38.45;
misc_furn5_pr["post"]=49.65;

var misc_furn6_pr= new Array() ;
misc_furn6_pr["pre"]=70.40;
misc_furn6_pr["post"]=87.95;

var misc_furn7_pr= new Array() ;
misc_furn7_pr["pre"]=94.05;
misc_furn7_pr["post"]=122.35;

var misc_furn8_pr= new Array() ;
misc_furn8_pr["pre"]=72.50;
misc_furn8_pr["post"]=94.30;

var misc_furn9_pr= new Array() ;
misc_furn9_pr["pre"]=2.70;
misc_furn9_pr["post"]=2.70;


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
var deaddate= new Date();
deaddate.setFullYear(2012,8,28);
var today = new Date();
var deadline="pre";
if (today > deaddate) {deadline="post";}


 var item= new Array() ;
 
 item[0]= "dr_tr_1";
 item[1]= "dr_tr_2";
 item[2]= "dr_tr_3";
 item[3]= "dr_tr_4";
 item[4]= "dr_tr_5";
 item[5]= "dr_tr_6";
 item[6]= "dr_tr_7";
 item[7]= "dr_tr_8";
 item[8]= "tr_1";
 item[9]= "tr_2";
 item[10]= "tr_3";
 item[11]= "tr_4";
 item[12]= "tr_5";
 item[13]= "tr_6";
 item[14]= "tr_7";
 item[15]= "tr_8";
 item[16]= "wm1";
 item[17]= "wm2";
 item[18]= "wm3";
 item[19]= "wm4";
 item[20]= "wm5";
 item[21]= "dressing1";
 item[22]= "dressing2";
 item[23]= "wall_pan1";
 item[24]= "wall_pan2";
 item[25]= "ez1";
 item[26]= "ez2";
 item[27]= "misc_furn1";
 item[28]= "misc_furn2";
 item[29]= "misc_furn3";
 item[30]= "misc_furn4";
 item[31]= "misc_furn5";
 item[32]= "misc_furn6";
 item[33]= "misc_furn7";
 item[34]= "misc_furn8";
 item[35]= "misc_furn9";
 item[36]= "autopoles1";
 item[37]= "autopoles2";	
 item[38]= "autopoles3";
 item[39]= "autopoles4";
 item[40]= "autopoles5";
 item[41]= "autopoles6";
 item[42]= "autopoles7";
 item[43]= "autopoles8";
 item[44]= "autopoles9";
 item[45]= "autopoles10"; 
 item[46]= "drape4";
 item[47]= "drape6";
 item[48]= "add_tracks1";
 item[49]= "add_tracks2";
 item[50]= "add_tracks3";
 item[51]= "add_tracks4";
 item[52]= "add_tracks5";
 item[53]= "add_lights1";
 item[54]= "add_lights2";
 item[55]= "add_lights3";
 
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
 
 var booth= new Array(30);   
   for (j=0; j<32; j++) {
      booth[j]= [0,0,0,0,0]
	}
   
   booth [1] [0] = 5;
   booth [1] [1] = 16;
   booth [1] [2] = 4;
   booth [1] [3] = 1;
   booth [1] [4] = 3;
   booth [1] [5] = 1000;
   booth [2] [0] = 5;
   booth [2] [1] = 20;
   booth [2] [2] = 6;
   booth [2] [3] = 1;
   booth [2] [4] = 4;
   booth [2] [5] = 1000;
   booth [3] [0] = 6;
   booth [3] [1] = 6;
   booth [3] [2] = 2;
   booth [3] [3] = 1;
   booth [3] [4] = 2;
   booth [3] [5] = 500;
   booth [4] [0] = 6;
   booth [4] [1] = 10;
   booth [4] [2] = 3;
   booth [4] [3] = 1;
   booth [4] [4] = 2;
   booth [4] [5] = 500;
   booth [5] [0] = 6;
   booth [5] [1] = 13;
   booth [5] [2] = 4;
   booth [5] [3] = 1;
   booth [5] [4] = 3;
   booth [5] [5] = 500;
   booth [6] [0] = 6;
   booth [6] [1] = 16;
   booth [6] [2] = 4;
   booth [6] [3] = 1;
   booth [6] [4] = 3;
   booth [6] [5] = 1000;
   booth [7] [0] = 6;
   booth [7] [1] = 20;
   booth [7] [2] = 6;
   booth [7] [3] = 1;
   booth [7] [4] = 4;
   booth [7] [5] = 1000;
   booth [8] [0] = 6;
   booth [8] [1] = 23;
   booth [8] [2] = 7;
   booth [8] [3] = 1;
   booth [8] [4] = 5;
   booth [8] [5] = 1000;
   booth [9] [0] = 6;
   booth [9] [1] = 26;
   booth [9] [2] = 8;
   booth [9] [3] = 1;
   booth [9] [4] = 6;
   booth [9] [5] = 1500;
   booth [10] [0] = 6;
   booth [10] [1] = 30;
   booth [10] [2] = 2;
   booth [10] [3] = 1;
   booth [10] [4] = 6;
   booth [10] [5] = 1500;   
   booth [11] [0] = 6;
   booth [11] [1] = 33;
   booth [11] [2] = 10;
   booth [11] [3] = 2;
   booth [11] [4] = 7;
   booth [11] [5] = 2000;
   booth [12] [0] = 6;
   booth [12] [1] = 36;
   booth [12] [2] = 11;
   booth [12] [3] = 2;
   booth [12] [4] = 8;
   booth [12] [5] = 2000;
   booth [13] [0] = 6;
   booth [13] [1] = 40;
   booth [13] [2] = 12;
   booth [13] [3] = 2;
   booth [13] [4] = 8;
   booth [13] [5] = 2000;
   booth [14] [0] = 10;
   booth [14] [1] = 10;
   booth [14] [2] = 6;
   booth [14] [3] = 1;
   booth [14] [4] = 4;
   booth [14] [5] = 1000;
   booth [15] [0] = 10;
   booth [15] [1] = 13;
   booth [15] [2] = 9;
   booth [15] [3] = 1;
   booth [15] [4] = 5;
   booth [15] [5] = 1000;
   booth [16] [0] = 10;
   booth [16] [1] = 16;
   booth [16] [2] = 9;
   booth [16] [3] = 1;
   booth [16] [4] = 6;
   booth [16] [5] = 1500;
   booth [17] [0] = 10;
   booth [17] [1] = 20;
   booth [17] [2] = 12;
   booth [17] [3] = 2;
   booth [17] [4] = 8;
   booth [17] [5] = 2000;
   booth [18] [0] = 10;
   booth [18] [1] = 23;
   booth [18] [2] = 12;
   booth [18] [3] = 2;
   booth [18] [4] = 4;
   booth [18] [5] = 2000;
   booth [19] [0] = 10;
   booth [19] [1] = 26;
   booth [19] [2] = 12;
   booth [19] [3] = 2;
   booth [19] [4] = 10;
   booth [19] [5] = 2500;
   booth [20] [0] = 10;
   booth [20] [1] = 30;
   booth [20] [2] = 18;
   booth [20] [3] = 3;
   booth [20] [4] = 12;
   booth [20] [5] = 3000;   
   booth [21] [0] = 10;
   booth [21] [1] = 33;
   booth [21] [2] = 18; 
   booth [21] [3] = 3;
   booth [21] [4] = 12;
   booth [21] [5] = 3000;    
   booth [22] [0] = 10;
   booth [22] [1] = 36;
   booth [22] [2] = 18;
   booth [22] [3] = 3;
   booth [22] [4] = 15;
   booth [22] [5] = 3500; 
   booth [23] [0] = 10;
   booth [23] [1] = 40;
   booth [23] [2] = 24;
   booth [23] [3] = 4;
   booth [23] [4] = 16;
   booth [23] [5] = 4000; 
   booth [24] [0] = 20;
   booth [24] [1] = 13;
   booth [24] [2] = 13;
   booth [24] [3] = 2;
   booth [24] [4] = 10;
   booth [24] [5] = 2500; 
   booth [25] [0] = 20;
   booth [25] [1] = 16;
   booth [25] [2] = 19;
   booth [25] [3] = 3;
   booth [25] [4] = 12;
   booth [25] [5] = 3000; 
   booth [26] [0] = 20;
   booth [26] [1] = 20;
   booth [26] [2] = 24;
   booth [26] [3] = 4;
   booth [26] [4] = 16;
   booth [26] [5] = 4000; 
   booth [27] [0] = 20;
   booth [27] [1] = 23;
   booth [27] [2] = 25;
   booth [27] [3] = 4;
   booth [27] [4] = 16;
   booth [27] [5] = 4000; 
   booth [28] [0] = 20;
   booth [28] [1] = 26;
   booth [28] [2] = 27;
   booth [28] [3] = 5;
   booth [28] [4] = 20;
   booth [28] [5] = 4500; 
   booth [29] [0] = 20;
   booth [29] [1] = 30;
   booth [29] [2] = 36;
   booth [29] [3] = 6;
   booth [29] [4] = 24;
   booth [29] [5] = 6000;  
   booth [30] [0] = 20;
   booth [30] [1] = 40;
   booth [30] [2] = 48;
   booth [30] [3] = 8;
   booth [30] [4] = 32;
   booth [30] [5] = 8000; 
   booth [31] [0] = 20;
   booth [31] [1] = 50;
   booth [31] [2] = 60;
   booth [31] [3] = 10;
   booth [31] [4] = 40;
   booth [31] [5] = 8000;    
   
   
function calculateTotal()
{
    //Here we get the total price by calling our function
  
	var ccform = document.forms["CC"];
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
	var mTotal=0.00;
	var mannsubtotal=0.00;
	var mtax=0.0;
    var item_type = item[0];
    var item_qty= 0;
    var item_price=tr_1_pr[deadline];
    var eitem_type = eitem[0];
    var eitem_qty= 0;
    var eitem_price=add_tracks1_pr[deadline];
    var BSitem_price=0;
	var BStype=0;
	var mitem_type = mitem[0];
    var mitem_qty= 0;
    var mitem_price=0;
	var masterlock=0;
	var master= 0;
	var boothtype=0;
    var boothdims="";
    var boothsqft=0;
    var boothlf=0;
    var paperprice=0;
	var furnallowed=0;
	var furntotal=0;
	var ewatts=0;
	var etracks=0;
	var elights=0;
	var boothinfo4="";
    

	var carpetgoneprice=0;
	var Nocarpet = false;
	Nocarpet = ccform.elements["remover"];
	if (Nocarpet.checked==true){
        carpetgoneprice=2.2;}
	var carpetpadprice=0;
	var Carpetpad =  "";
	Carpetpad = ccform.elements["adder_padding"];
	var Error = " ";
	if (Carpetpad.checked==true){
        carpetpadprice=2;}
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
	stancarpet = ccform.elements["carpet_color"].value;
	cc_standard = ccform.elements["cc_color"].value;
    cc_plush = ccform.elements["plush_color"].value;
	cc_ultra = ccform.elements["ultra_color"].value;

	var l_wall = 0;
	var r_wall = 0;
	var b_wall = 0;
	var l_panel = 0;
	var r_panel = 0;
	var b_panel = 0;
	var Paper_lf = 0;
	var PaperPanel = "";
	var PaperPanelCost = 0;
	var PaperInfo = "";
	var wall_type="";
	var wall_color="";
	var WallInfo="";
	var wall_print="";
	var Wallpaper = false;
	   Wallpaper = ccform.wallpaper.checked;
	var Colorpanel = false;
	   Colorpanel = ccform.panel.checked;
	var PaperInstall = ccform.install.checked;
   
   //Calculate BoothSeal Subtotal
 	for(var i = 0; i < 12; i++) {
		if(ccform.BStype[i].checked) {
			BStype= ccform.BStype[i].value;}}  
	master= ccform.elements['master'].value;
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
	for (i= 0; i < 8; i++){
	eitem_type= eitem[i]	
	eitem_qty= ccform.elements[eitem_type].value;	
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
	   mitem_qty= ccform.elements[mitem_type].value;	
	   mitem_price= eval(mitem[i]+"_pr[deadline]");	
	    mannsubtotal= mannsubtotal + (mitem_qty * mitem_price)};
	mtax=0.08875 * mannsubtotal;
	mannTotal = mannsubtotal+mtax;

	var divobj= document.getElementById('msubtotal');
           divobj.innerHTML= mannsubtotal.toFixed(2);
	
	document.getElementById('msubtotalval').value=mannsubtotal;
	
	var divobj= document.getElementById('mtax');
	   divobj.innerHTML= mtax.toFixed(2);

	document.getElementById('mtaxval').value=mtax;
	
	var divobj= document.getElementById('mTotal');
	   divobj.innerHTML= mannTotal.toFixed(2);	
		
	document.getElementById('mtotalval').value=mannTotal;

    //Calculate GES Subtotal
	for (i= 0; i < 55; i++){
	item_type= item[i]	
	item_qty= ccform.elements[item_type].value;	
	item_price= eval(item[i]+"_pr[deadline]");	
	subtotal= subtotal + (item_qty * item_price)};
	
	//Booth Info		
	boothtype= ccform.elements["boothsizer"].value;
	boothdims = booth [boothtype] [0] + "ft D x " + booth [boothtype] [1] + "ft W";
	boothsqft = booth [boothtype] [0] * booth [boothtype] [1] ;
	furnallowed = booth [boothtype] [2];
	var plural ="";
	etracks = booth [boothtype] [3];
	if (etracks > 1) {plural = "s";}
	elights = booth [boothtype] [4];
	ewatts = booth [boothtype] [5];
	
	var powerpackage=getCheckedValue(ccform.elements['powerpack']);
	if (powerpackage == "elec") {boothinfo4 = "You have chosen the Electrical Package";}
	else if (powerpackage == "light") {boothinfo4 = "You have chosen the Light Package";}
	
    var sizeobj= document.getElementById('Boothinfo1');
	   sizeobj.innerHTML= "Your booth size is " + boothdims + ", " + boothsqft + " square feet";
    var furnobj= document.getElementById('Boothinfo2');
	   furnobj.innerHTML= "Please choose " + furnallowed + " items of furniture from the list at the right. ";	   
    var lightobj= document.getElementById('Boothinfo3');
	   lightobj.innerHTML= "Choose either a LIGHT PACKAGE with " + etracks + " track" + plural + ", and " + elights + " total lights OR ";
    var elecobj=document.getElementById('Boothinfo3a');
       elecobj.innerHTML= "Choose a POWER PACKAGE with "	+ ewatts + " watts of power.";
	var packageobj= document.getElementById('Boothinfo4');
	   packageobj.innerHTML= boothinfo4;
    document.getElementById('furnallowed').value=furnallowed;
	  

    //Wallpaper or Color Panels	   
	l_wall= eval(ccform.elements["l_wall"].value);
	r_wall= eval(ccform.elements["r_wall"].value);
	b_wall= eval(ccform.elements["b_wall"].value);
    Paper_lf = l_wall + r_wall + b_wall;
	b_panel = parseInt(b_wall/3.2);
	if (l_wall == 5) {l_panel=1.5;}
	   else {l_panel= parseInt(l_wall/3);}
	if (r_wall == 5) {r_panel=1.5;}
	   else {r_panel= parseInt(r_wall/3);}
	
	if (Wallpaper || Colorpanel) { 
	    wall_color = ccform.add_wall.value;
		if (Colorpanel) {
		   wall_type = "";
		   
		   var panel_num = l_panel + b_panel + r_panel;
		   if (l_panel == 1.5 && r_panel == 1.5) { wall_print = panel_num-1 + " panels and 2 half panels";}
		   else {wall_print = panel_num + " panels";}
		   }
		 else 
		   {
		    wall_print = Paper_lf + " linear feet of ";
 			wall_type = "wallpaper";
			}
	    PaperPanel = wall_print + wall_type;
	    PaperPanelCost = Paper_lf * wallpaper_pr[deadline];
		WallInfo = PaperPanel + ", color: " + wall_color;
		}
	
	if (PaperInstall) {WallInfo = ccform.install.value + " " + ccform.EACinstall.value;}
    document.getElementById('Wall_Info').value=WallInfo;	
	
    document.getElementById('PPInfo').value=PaperPanel;
	
    var wallobj= document.getElementById('Paper_Panel_Info');
	wallobj.innerHTML= PaperPanel;	


	//Carpet
	if (stancarpet != '-') {
	     if (boothtype ==12)carpetprice = stan_carpet_pr_10x10[deadline];
		 else if (boothtype == 15)  carpetprice = stan_carpet_pr_10x20[deadline];
		      else if (boothtype == 18) carpetprice = stan_carpet_pr_10x30[deadline]; 
                   else Error = Error + "Must choose Custom Carpet for this booth size";
         carpet_type="Standard - " + stancarpet;}
		 
	else if (cc_standard != "-") {carpetprice = boothsqft * cc_standard_pr[deadline]; carpet_type="CC Standard - " + cc_standard}
         else if (cc_plush != "-") {carpetprice = boothsqft * cc_plush_pr[deadline]; carpet_type="CC Plush - " + cc_plush}
              else if (cc_ultra != "-") {carpetprice = boothsqft * cc_ultra_pr[deadline]; carpet_type="CC Ultra Plush - " + cc_ultra}	

	var divobj= document.getElementById('Boothdims');
	divobj.innerHTML= "Booth Size:  " + boothdims;	
	

	document.getElementById('booth_size').value=boothdims;
	document.getElementById('square_feet').value=boothsqft;
	document.getElementById('Carpet_Type').value=carpet_type;
	
	
    var divobj= document.getElementById('Error');
	divobj.innerHTML= Error;
	
	
	
	subtotal=subtotal + PaperPanelCost + (carpetpadprice * boothsqft) + (carpetgoneprice * boothsqft) + carpetprice;
	pst= subtotal * .030;
	pstsubtotal = subtotal + pst;	
	tax=0.08875 * pstsubtotal;
	Total=pstsubtotal+tax;

	
    var divobj= document.getElementById('gsubtotal');
    divobj.innerHTML= subtotal.toFixed(2);

	
	document.getElementById('subtotalval').value=subtotal;
	
	var divobj= document.getElementById('gpst');
    divobj.innerHTML= pst.toFixed(2);
	
	document.getElementById('pstval').value=pst;
	
	var divobj= document.getElementById('gpstsubtotal');
    divobj.innerHTML= pstsubtotal.toFixed(2);
	
	document.getElementById('pstsubtotalval').value=pstsubtotal;
	
	var divobj= document.getElementById('gtax');
	divobj.innerHTML= tax.toFixed(2);
	
	document.getElementById('taxval').value=tax;
	
	var divobj= document.getElementById('gTotal');
	divobj.innerHTML= Total.toFixed(2);	
	
	document.getElementById('totalval').value=Total;
		
		

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
function NoBoothSize()
{
    var divobj= document.getElementById('Boothdims');
    divobj.innerHTML= "Enter your booth size at top of page";
}
function paymentinfo()
{
//Payment Information Function
var payinfo="";
var validinfo="";
var ccform= document.forms["CC"];
var pay_type=getCheckedValue(ccform.elements['paytype']);
payinfo = "<p class=address>";

if (pay_type == "cc") {

{
myWindow=window.open('CC_WIN.html','','left=100, width=900, height=500, top=100, menubar=no');
myWindow.focus();
}
	}
if (pay_type == "check") {
payinfo = payinfo +  "\r\nCheck # <input type='text' name='checknumges' size='20' class='address'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Date: <input type='text' name='checkdateges' size='25' class='address'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Amount US$ <input type='text' name='checkamtges' size='22' class='address'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp;GES PAYMENT<br />";
payinfo = payinfo +  "\r\nCheck # <input type='text' name='checknumjav' size='20' class='address'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Date: <input type='text' name='checkdatejav' size='25' class='address'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Amount US$ <input type='text' name='checkamtjav' size='22' class='address'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp;JAVITS PAYMENT<br />";
payinfo = payinfo + "\r\nCheck # <input type='text' name='checknumbs' size='20' class='address'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Date: <input type='text' name='checkdatebs' size='25' class='address'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Amount US$ <input type='text' name='checkamtbs' size='22' class='address'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp;BOOTHSEAL PAYMENT<br />";
payinfo = payinfo + "\r\nCheck # <input type='text' name='checknumdnb' size='20' class='address'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Date: <input type='text' name='checkdatednb' size='25' class='address'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp; Check Amount US$ <input type='text' name='checkamtdnb' size='22' class='address'  style=' border:none; border-bottom:solid windowtext .75pt'>\r\n&emsp;&emsp;D&B RENTAL PAYMENT<br /><br >";
payinfo = payinfo + "\r\n&emsp;Send Checks to:<br /><br />&emsp;Global Experience Specialists Inc., Bank of America, P.O. Box 96174, Chicago IL 60693<br /><br />";
payinfo = payinfo + "\r\n&emsp;Javits Electrical Services, 655 West 34th Street, NY, NY 10001<br /><br />";
payinfo = payinfo + "\r\n&emsp;BoothSeal, 8 West 38th Street, Suite 202, NY, NY 10018<br /><br />";
payinfo = payinfo + "\r\n&emsp;D&B Rental Displays, 521 F.D.R.Drive, STE 7D, New York, NY 10002<br /><br />";
payinfo = payinfo + "\r\n&emsp;BE SURE TO INCLUDE <i>CHILDREN'S CLUB</i>, YOUR COMPANY NAME AND BOOTH NUMBER (if available)<br /><br />";
}
if (pay_type == "wire") {
payinfo = payinfo + "&emsp;&emsp;&emsp;WIRE TRANSFER INFORMATION - GES<br />&emsp;&emsp;&emsp;Beneficiary: Global Experience Specialists<br />\r\n&emsp;&emsp;&emsp;c/o Bank of America, 901 Main Street, Dallas, TX 75202-3714<br />\r\n&emsp;&emsp;&emsp;Telephone: 1-800-657-9533 ext. 59248<br />\r\n&emsp;&emsp;&emsp;Account #: 7188-1-01819&emsp;ABA Routing #: 0260-0959-3&emsp;SWIFT Address: BOFAUS3N&emsp;CHIPS Address: 0959<br />\r\n<br /><br />\r\n";
payinfo = payinfo + "&emsp;&emsp;&emsp;WIRE TRANSFER INFORMATION - Jacob K Javits Convention Center<br />\r\n&emsp;&emsp;&emsp;Beneficiary: Jacob K Javits Convention Center<br />\r\n&emsp;&emsp;&emsp;c/o The Chase Manhattan Bank, 12 Corporate Wood Blvd., Albany, New York 12211<br />\r\n&emsp;&emsp;&emsp;Contact: Ms. Kris Young&emsp;&emsp;&emsp;Telephone:(518)433-2535<br />\r\n&emsp;&emsp;&emsp;Account #: 573-804249&emsp;&emsp;&emsp;ABA Routing #: 021000021\r\n&emsp;&emsp;&emsp;SWIFT Code CHASUS33<br /><br />\r\n";
payinfo = payinfo + "&emsp;&emsp;&emsp;WIRE TRANSFER INFORMATION - D&B Rental Displays<br />\r\n&emsp;&emsp;&emsp;Beneficiary: D&B Rental Displays Corp.<br />\r\n&emsp;&emsp;&emsp;c/o Bank of America, NA 2412 Pine Ridge Rd, Naples, FL, 34109-2007<br />\r\n&emsp;&emsp;&emsp;Account #: 2290-1704-2505&emsp;&emsp;&emsp;ABA Routing #: 026009593&emsp;&emsp;&emsp;SWIFT Code BOFAUS3N<br /><br />\r\n"
}
payinfo = payinfo + "</p>";
var payobj= document.getElementById('Payment');
	payobj.innerHTML= payinfo;
}
