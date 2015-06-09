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

//GES FURNISHINGS
 //draped tables
 var dr_tr_1_pr= new Array();
 dr_tr_1_pr["pre"]=127.15;
 dr_tr_1_pr["post"]=158.85;

 var dr_tr_2_pr= new Array();
 dr_tr_2_pr["pre"]=146.85;
 dr_tr_2_pr["post"]=183.60;
 
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
 tr_1_pr["pre"]=47.70;
 tr_1_pr["post"]=62.00;

 var tr_2_pr= new Array();
 tr_2_pr["pre"]=58.80;
 tr_2_pr["post"]=76.35;
 
 var tr_3_pr= new Array();
 tr_3_pr["pre"]=70.45;
 tr_3_pr["post"]=91.65;
 
 var tr_4_pr= new Array();
 tr_4_pr["pre"]=68.25;
 tr_4_pr["post"]=88.70;
 
 var tr_5_pr= new Array();
 tr_5_pr["pre"]=82.30;
 tr_5_pr["post"]=106.50;
 
 var tr_6_pr= new Array();
 tr_6_pr["pre"]=93.20;
 tr_6_pr["post"]=121.25;
 
 var tr_7_pr= new Array();
 tr_7_pr["pre"]=31.70;
 tr_7_pr["post"]=39.15;
 
 var tr_8_pr= new Array();
 tr_8_pr["pre"]=39.15;
 tr_8_pr["post"]=51.05;
 
 //Table Drape
 var drape4_pr= new Array();
 drape4_pr["pre"]=60.60;
 drape4_pr["post"]=108.95;
 
 var drape6_pr= new Array();
 drape6_pr["pre"]=92.60;
 drape6_pr["post"]=115.70;
 
 //Wall Mounted Items
 var wm1_pr= new Array();
 wm1_pr["pre"]=67.60;
 wm1_pr["post"]=87.90;
 
 var wm2_pr= new Array();
 wm2_pr["pre"]=67.60;
 wm2_pr["post"]=87.90;
 
 var wm3_pr= new Array();
 wm3_pr["pre"]=101.35;
 wm3_pr["post"]=131.80;
 
 var wm4_pr= new Array();
 wm4_pr["pre"]=96.80;
 wm4_pr["post"]=125.80;
 
 var wm5_pr= new Array();
 wm5_pr["pre"]=12.40;
 wm5_pr["post"]=12.40;
 
 //Dressing Room & Additional Wall Panels
 
 var dressing1_pr= new Array();
 dressing1_pr["pre"]=294.25;
 dressing1_pr["post"]=382.45;
  
 var dressing2_pr= new Array();
 dressing2_pr["pre"]=496.10;
 dressing2_pr["post"]=645.25;
     
 var wall_pan1_pr= new Array();
 wall_pan1_pr["pre"]=225.00;
 wall_pan1_pr["post"]=292.60;
 
 var wall_pan2_pr= new Array();
 wall_pan2_pr["pre"]=427.25;
 wall_pan2_pr["post"]=555.40;
 
//EZ-Shelf
var ez1_pr= new Array() ;
ez1_pr["pre"]=122.90;
ez1_pr["post"]=161.20;

var ez2_pr= new Array() ;
ez2_pr["pre"]=248.05;
ez2_pr["post"]=322.60;
 
 //Miscellaneous Furnishings
var misc_furn1_pr= new Array() ;
misc_furn1_pr["pre"]=82.30;
misc_furn1_pr["post"]=106.90;

var misc_furn2_pr= new Array() ;
misc_furn2_pr["pre"]=191.10;
misc_furn2_pr["post"]=248.65;

var misc_furn3_pr= new Array() ;
misc_furn3_pr["pre"]=70.45;
misc_furn3_pr["post"]=91.60;

var misc_furn4_pr= new Array() ;
misc_furn4_pr["pre"]=18.15;
misc_furn4_pr["post"]=23.60;
 
var misc_furn5_pr= new Array() ;
misc_furn5_pr["pre"]=40.00;
misc_furn5_pr["post"]=51.65;

var misc_furn6_pr= new Array() ;
misc_furn6_pr["pre"]=73.25;
misc_furn6_pr["post"]=91.50;

var misc_furn7_pr= new Array() ;
misc_furn7_pr["pre"]=97.85;
misc_furn7_pr["post"]=127.25;

var misc_furn8_pr= new Array() ;
misc_furn8_pr["pre"]=75.40;
misc_furn8_pr["post"]=98.10;

var misc_furn9_pr= new Array() ;
misc_furn9_pr["pre"]=2.85;
misc_furn9_pr["post"]=2.85;


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
autopoles6_pr["pre"]=425.25;
autopoles6_pr["post"]=527.35;

var autopoles7_pr= new Array() ;
autopoles7_pr["pre"]=67.60;
autopoles7_pr["post"]=87.90;

var autopoles8_pr= new Array() ;
autopoles8_pr["pre"]=101.32;
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
deaddate.setFullYear(2012,11,28);
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
 eitem[11]= "epower1";
 eitem[12]= "epower2";
 eitem[13]= "epower3";
 eitem[14]= "epower4";
 eitem[15]= "epower5";
 
 //BOOTHSEAL ITEMS INITIALIZE
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
 
 //D&B RENTAL ITEMS INITIALIZE 
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
   for (j=0; j<43; j++) {
      booth[j]= [0,0,0,0,0]
	}
   
   booth [1] [0] = 5;
   booth [1] [1] = 15;
   booth [1] [2] = 4;
   booth [1] [3] = 1;
   booth [1] [4] = 3;
   booth [1] [5] = 500;
   booth [2] [0] = 5;
   booth [2] [1] = 16;
   booth [2] [2] = 4;
   booth [2] [3] = 1;
   booth [2] [4] = 3;
   booth [2] [5] = 500;
   booth [3] [0] = 5;
   booth [3] [1] = 20;
   booth [3] [2] = 6;
   booth [3] [3] = 1;
   booth [3] [4] = 4;
   booth [3] [5] = 1000;
   booth [4] [0] = 6;
   booth [4] [1] = 6;
   booth [4] [2] = 2;
   booth [4] [3] = 1;
   booth [4] [4] = 2;
   booth [4] [5] = 500;
   booth [5] [0] = 6;
   booth [5] [1] = 10;
   booth [5] [2] = 3;
   booth [5] [3] = 1;
   booth [5] [4] = 2;
   booth [5] [5] = 500;
   booth [6] [0] = 6;
   booth [6] [1] = 13;
   booth [6] [2] = 4;
   booth [6] [3] = 1;
   booth [6] [4] = 3;
   booth [6] [5] = 500;
   booth [7] [0] = 6;
   booth [7] [1] = 15;
   booth [7] [2] = 4;
   booth [7] [3] = 1;
   booth [7] [4] = 3;
   booth [7] [5] = 1000;
   booth [8] [0] = 6;
   booth [8] [1] = 16;
   booth [8] [2] = 4;
   booth [8] [3] = 1;
   booth [8] [4] = 3;
   booth [8] [5] = 1000;
   booth [9] [0] = 6;
   booth [9] [1] = 20;
   booth [9] [2] = 6;
   booth [9] [3] = 1;
   booth [9] [4] = 4;
   booth [9] [5] = 1000;
   booth [10] [0] = 6;
   booth [10] [1] = 23;
   booth [10] [2] = 7;
   booth [10] [3] = 1;
   booth [10] [4] = 5;
   booth [10] [5] = 1000;
   booth [11] [0] = 6;
   booth [11] [1] = 26;
   booth [11] [2] = 8;
   booth [11] [3] = 1;
   booth [11] [4] = 6;
   booth [11] [5] = 1500;
   booth [12] [0] = 6;
   booth [12] [1] = 30;
   booth [12] [2] = 2;
   booth [12] [3] = 1;
   booth [12] [4] = 6;
   booth [12] [5] = 1500;   
   booth [13] [0] = 6;
   booth [13] [1] = 33;
   booth [13] [2] = 10;
   booth [13] [3] = 2;
   booth [13] [4] = 7;
   booth [13] [5] = 2000;
   booth [14] [0] = 6;
   booth [14] [1] = 36;
   booth [14] [2] = 11;
   booth [14] [3] = 2;
   booth [14] [4] = 8;
   booth [14] [5] = 2000;
   booth [15] [0] = 6;
   booth [15] [1] = 40;
   booth [15] [2] = 12;
   booth [15] [3] = 2;
   booth [15] [4] = 8;
   booth [15] [5] = 2000;
   booth [16] [0] = 8;
   booth [16] [1] = 10;
   booth [16] [2] = 4;
   booth [16] [3] = 1;
   booth [16] [4] = 3;
   booth [16] [5] = 500;
   booth [17] [0] = 10;
   booth [17] [1] = 6;
   booth [17] [2] = 3;
   booth [17] [3] = 1;
   booth [17] [4] = 2;
   booth [17] [5] = 500;
   booth [18] [0] = 10;
   booth [18] [1] = 8;
   booth [18] [2] = 4;
   booth [18] [3] = 1;
   booth [18] [4] = 3;
   booth [18] [5] = 500;
   booth [19] [0] = 10;
   booth [19] [1] = 10;
   booth [19] [2] = 6;
   booth [19] [3] = 1;
   booth [19] [4] = 4;
   booth [19] [5] = 1000;
   booth [20] [0] = 10;
   booth [20] [1] = 13;
   booth [20] [2] = 9;
   booth [20] [3] = 1;
   booth [20] [4] = 5;
   booth [20] [5] = 1000;
   booth [21] [0] = 10;
   booth [21] [1] = 15;
   booth [21] [2] = 9;
   booth [21] [3] = 1;
   booth [21] [4] = 5;
   booth [21] [5] = 1000;
   booth [22] [0] = 10;
   booth [22] [1] = 16;
   booth [22] [2] = 9;
   booth [22] [3] = 1;
   booth [22] [4] = 6;
   booth [22] [5] = 1500;
   booth [23] [0] = 10;
   booth [23] [1] = 20;
   booth [23] [2] = 12;
   booth [23] [3] = 2;
   booth [23] [4] = 8;
   booth [23] [5] = 2000;
   booth [24] [0] = 10;
   booth [24] [1] = 23;
   booth [24] [2] = 12;
   booth [24] [3] = 2;
   booth [24] [4] = 4;
   booth [24] [5] = 2000;
   booth [25] [0] = 10;
   booth [25] [1] = 26;
   booth [25] [2] = 12;
   booth [25] [3] = 2;
   booth [25] [4] = 10;
   booth [25] [5] = 2500;
   booth [26] [0] = 10;
   booth [26] [1] = 30;
   booth [26] [2] = 18;
   booth [26] [3] = 3;
   booth [26] [4] = 12;
   booth [26] [5] = 3000;   
   booth [27] [0] = 10;
   booth [27] [1] = 33;
   booth [27] [2] = 18; 
   booth [27] [3] = 3;
   booth [27] [4] = 12;
   booth [27] [5] = 3000;    
   booth [28] [0] = 10;
   booth [28] [1] = 36;
   booth [28] [2] = 18;
   booth [28] [3] = 3;
   booth [28] [4] = 15;
   booth [28] [5] = 3500; 
   booth [29] [0] = 10;
   booth [29] [1] = 40;
   booth [29] [2] = 24;
   booth [29] [3] = 4;
   booth [29] [4] = 16;
   booth [29] [5] = 4000; 
   booth [30] [0] = 13;
   booth [30] [1] = 10;
   booth [30] [2] = 9;
   booth [30] [3] = 1;
   booth [30] [4] = 5;
   booth [30] [5] = 1000;
   booth [31] [0] = 15;
   booth [31] [1] = 20;
   booth [31] [2] = 18;
   booth [31] [3] = 3;
   booth [31] [4] = 12;
   booth [31] [5] = 3000; 
   booth [32] [0] = 16;
   booth [32] [1] = 10;
   booth [32] [2] = 9;
   booth [32] [3] = 3;
   booth [32] [4] = 12;
   booth [32] [5] = 3000;
   booth [33] [0] = 20;
   booth [33] [1] = 13;
   booth [33] [2] = 13;
   booth [33] [3] = 2;
   booth [33] [4] = 10;
   booth [33] [5] = 2500; 
   booth [34] [0] = 20;
   booth [34] [1] = 16;
   booth [34] [2] = 19;
   booth [34] [3] = 3;
   booth [34] [4] = 12;
   booth [34] [5] = 3000;
   booth [35] [0] = 20;
   booth [35] [1] = 20;
   booth [35] [2] = 24;
   booth [35] [3] = 4;
   booth [35] [4] = 16;
   booth [35] [5] = 4000; 
   booth [36] [0] = 20;
   booth [36] [1] = 23;
   booth [36] [2] = 25;
   booth [36] [3] = 4;
   booth [36] [4] = 16;
   booth [36] [5] = 4000; 
   booth [37] [0] = 20;
   booth [37] [1] = 26;
   booth [37] [2] = 27;
   booth [37] [3] = 5;
   booth [37] [4] = 20;
   booth [37] [5] = 4500; 
   booth [38] [0] = 20;
   booth [38] [1] = 30;
   booth [38] [2] = 36;
   booth [38] [3] = 6;
   booth [38] [4] = 24;
   booth [38] [5] = 6000;  
   booth [39] [0] = 20;
   booth [39] [1] = 40;
   booth [39] [2] = 48;
   booth [39] [3] = 8;
   booth [39] [4] = 32;
   booth [39] [5] = 8000; 
   booth [40] [0] = 20;
   booth [40] [1] = 50;
   booth [40] [2] = 60;
   booth [40] [3] = 10;
   booth [40] [4] = 40;
   booth [40] [5] = 8000;    
   booth [41] [0] = 16;
   booth [41] [1] = 16;
   booth [41] [2] = 12;
   booth [41] [3] = 2;
   booth [41] [4] = 10;
   booth [41] [5] = 2500;
   booth [42] [0] = 16;
   booth [42] [1] = 26;
   booth [42] [2] = 24;
   booth [42] [3] = 4;
   booth [42] [4] = 16;
   booth [42] [5] = 4000; 
   
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
        carpetgoneprice=2.3;}
	var carpetpadprice=0;
	var Carpetpad =  "";
	Carpetpad = ccform.elements["adder_padding"];
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
	stancarpet = ccform.elements["carpet_color"].value;
	cc_standard = ccform.elements["cc_color"].value;
    cc_plush = ccform.elements["plush_color"].value;
	cc_ultra = ccform.elements["ultra_color"].value;


   
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
	for (i= 0; i < 16; i++){

	  eitem_type = eitem[i];
	  eitem_qty = ccform.elements[eitem_type].value;	
	  
	  eitem_price = eval(eitem[i]+"_pr[deadline]");	
	  esubtotal= esubtotal + (eitem_qty * eitem_price);}
	
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
	for (i= 0; i < 56; i++){
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
	if (powerpackage == "elec") {
	    boothinfo4 = "You have chosen the Electrical Package";
	    document.getElementById('power_pkg').value="ELECTRICAL PACKAGE with " + ewatts + " watts of power";
		}
	else if (powerpackage == "light") {
	     boothinfo4 = "You have chosen the Light Package";
		 document.getElementById('power_pkg').value="LIGHT PACKAGE with " + etracks + " track" + plural + ", and " + elights + " total lights";
		 }
		 else {boothinfo4 = "You have not chosen a Power Package";
		       document.getElementById('power_pkg').value="No Power Package Chosen";}
	
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
    var l_wall = 0;
	var r_wall = 0;
	var b_wall = 0;
	var l_panel = 0;
	var r_panel = 0;
	var b_panel = 0;
	var Paper_lf = 0;
	var add_paper = "";
	var add_paper_lf = ""
	var wall_color = "";
	var walltype = "";
	var Paper = false;
	var Panels = false;
    var paperdisc=0;
    var paperprice=0;
	    paperprice=wallpaper_pr[deadline];
	var addwallcov = "";

    var PaperInstall = ccform.install.checked;
	
	l_wall= parseInt(ccform.l_wall.value);
	r_wall= parseInt(ccform.r_wall.value);
	b_wall= parseInt(ccform.b_wall.value);
	
   
	Paper = ccform.addpaper.checked;
	Panels = ccform.addpanel.checked;
	

	if (Paper || Panels)
     	{

		if (Paper) {
		   Paper_lf = l_wall+r_wall+b_wall;
		   AddWallCov_LF = Paper_lf + " linear feet for wallpaper.";
		   wall_color = ccform.add_wall.value;
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
		   wall_color = ccform.add_wall.value;
           if (wall_color == "black" || wall_color == "charcoal" || wall_color == "aluminum" || wall_color == "cream" )		
               {wall_color = ccform.add_wall.value;}
           else {alert("Colored Panels are only available in\nblack, charcoal, aluminum or cream");
                 ccform.add_wall.selectedIndex=0;
	             ccform.add_wall.options[0].selected=true;}		   
		  }

		paperdisc=1;
		addwallcov = AddWallCov_LF + " color: " + wall_color;

		var packobj= document.getElementById('Add_Wall_Cover');
	    packobj.innerHTML= addwallcov;	
		
	
		}
	else 
	    {

		ccform.add_wall.selectedIndex=0;
	    ccform.add_wall.options[0].selected=true;
	    ccform.l_wall.selectedIndex=0;	   
	    ccform.l_wall.options[0].selected=true;
	    ccform.r_wall.selectedIndex=0;
	    ccform.r_wall.options[0].selected=true;
	    ccform.b_wall.selectedIndex=0;
	    ccform.b_wall.options[0].selected=true;		
	    addwallcov = "";		
        var packobj=document.getElementById('Add_Wall_Cover');
	    packobj.innerHTML= addwallcov;		
		}
		
	ccform.Addl_Wall_Cover.value=addwallcov;	


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
	
	var labortot = laborcost();
	subtotal=subtotal + (paperprice * paperdisc * Paper_lf) + (carpetpadprice * boothsqft) + (carpetgoneprice * boothsqft) + carpetprice;
	pst= subtotal * .030;
	pstsubtotal = subtotal + labortot + pst;	
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
		
	//Both Package Only
	if(pstsubtotal== 0 && mannsubtotal==0 && esubtotal==0 && BSsubtotal==0)
	  {ccform.credit.value = "Package Only - No Credit Card Necessary";
	  ccform.exp_date.value = "---";
	  ccform.cardholder.value = "---";
	  ccform.ccv.value = "---";
	  ccform.billing_street.value = "---";
	  ccform.billing_city.value = "---";}
	else 
	  {var ccnumb = ccform.credit.value;
	  if (ccnumb == "Package Only - No Credit Card Necessary")
	     {ccform.credit.value = "";
	      ccform.exp_date.value = "";
	      ccform.cardholder.value = "";
	      ccform.ccv.value = "";
	      ccform.billing_street.value = "";
	      ccform.billing_city.value = "";}	
		 }

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
 //Calculate cost of labor   
function laborcost()
{
   var lday = new Array(5);
   var ccform= document.forms["CC"];
   
   for (j=0; j<3; j++) { lday[j]= [0,0,0,0,0,0,0,0];}
   
 //Day [0] left at 0, element [0] straight time day=0, overtime day=1,  double time day=2
 //Element [1] start time, element [2] stop time, element [3] number of workers 
 //Day element [4] straight time hours, [5] overtime hours, [6] double time hours
 
   lday [1] [0] = 1;
   lday [1] [1] = ccform.elements['in_start1'].value;
   lday [1] [2] = ccform.elements['in_stop1'].value;
   lday [1] [3] = ccform.elements['in_workers1'].value;
   lday [1] [7] = ccform.elements['in_day1'].checked;

   lday [2] [0] = 0; 
   lday [2] [1] = ccform.elements['out_start1'].value;
   lday [2] [2] = ccform.elements['out_stop1'].value;
   lday [2] [3] = ccform.elements['out_workers1'].value;
   lday [2] [7] = ccform.elements['out_day1'].checked;


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
 
   var super_type=getCheckedValue(ccform.elements['supervised']);
 
 //Calculate number of hours and ST, OT and DT
    for (var i=1; i<3; i++)
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
    for (var i=1; i<3; i++)
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
 
