<?php 
$name     = "Sole Commerece";
$content  = "A trade show dedicated exclusively to footwear and handbags with the best domestic and international retailers.";
$keyword  = "Sole Commerce, Mens Tradeshow, Womens fashion tradeshow, New york trade show, international trade show, fashion coterie, ENK, Accessories tradeshow, Shoes Tradeshow, sole commerce, fashion trade events";
include('../includes/variables.php');
require('../bin/ClassMathGuard.php');
include('../includes/sc/2015/sc-feb2015-vars.php');
include('../includes/show-header.php');
?>
<body class="solePage sc showPage">
  <span id="top" class="sc-feb2015-hero"></span>
  <div id="wrapper">

   <!-- Navigation--> 
   <div id="nav-col">
    <div id="nav">
      <?php include('../includes/main-nav.php'); ?>
      <?php include('../includes/main-nav-social.php'); ?>
    </div>
  </div> <!-- End Navigation -->

  <!-- Content--> 
  <div id="main-col">

    <!-- Hero -->
    <!-- <div class="info-container enk-live2-parent">
        <?php //include('../../../includes/sc/sc-feb2015-postano.php'); ?>
      </div> -->
      <?php include('../includes/main-hero-container.php'); ?>     
      <!-- Description -->
      <?php include('../includes/sc/2015/sc-2015-show-description.php'); ?>
      <!-- Forms -->
      <?php include('../includes/sc/2015/sc-2015-forms.php'); ?>

      <!-- Highlights -->
      <?php include('../includes/sc/2015/sc-feb2015-highlights.php'); ?>

      <!-- Post Roster -->
      <?php include('../includes/sc/2015/sc-feb2015-roster.php'); ?>
      
      <!-- Floor Plan -->
      <?php include('../includes/fc/2015/fc-feb2015-floorplan.php'); ?>

      <!-- Hotel -->
      <?php include('../includes/ac/2015/acic-hotel.php'); ?>  

      <!-- BLANK SPACE-->
      <div style="float:left; clear:both; height:300px;" ></div>

    </div><!-- end main col-->

  </div><!-- end wrapper-->


  <?php include('../includes/new-show-footer.php'); ?>
