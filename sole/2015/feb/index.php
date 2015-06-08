<?php 
$name     = "Sole Commerece";
$content  = "A trade show dedicated exclusively to footwear and handbags with the best domestic and international retailers.";
$keyword  = "Sole Commerce, Mens Tradeshow, Womens fashion tradeshow, New york trade show, international trade show, fashion coterie, ENK, Accessories tradeshow, Shoes Tradeshow, sole commerce, fashion trade events";
include('../../../includes/variables.php');

include($root . '/includes/sc/2015/sc-feb2015-vars.php');
include($root . '/includes/show-header.php');
?>
<body class="solePage sc showPage">
  <span id="top" class="sc-feb2015-hero"></span>
  <div id="wrapper">

   <!-- Navigation--> 
   <div id="nav-col">
    <div id="nav">
      <?php include("../../../includes/main-nav.php"); ?>
      <?php include("../../../includes/main-nav-social.php"); ?>
    </div>
  </div> <!-- End Navigation -->

  <!-- Content--> 
  <div id="main-col">

    <!-- Hero -->
    <!-- <div class="info-container enk-live2-parent">
        <?php //include('../../../includes/sc/sc-feb2015-postano.php'); ?>
      </div> -->
      <?php include($root . '/includes/main-hero-container.php'); ?>        
      <!-- Description -->
      <?php include($root . '/includes/sc/2015/sc-2015-show-description.php'); ?>
      <!-- Forms -->
      <?php include($root . '/includes/sc/2015/sc-2015-forms.php'); ?>

      <!-- Highlights -->
      <?php include($root . '/includes/sc/2015/sc-feb2015-highlights.php'); ?>

      <!-- Post Roster -->
      <?php include($root . '/includes/sc/2015/sc-feb2015-roster.php'); ?>
      
      <!-- Floor Plan -->
      <?php include($root . '/includes/fc/2015/fc-feb2015-floorplan.php'); ?>

      <!-- Hotel -->
      <?php include($root . '/includes/fc/2015/fc-feb2015-hotel-rewrite.php'); ?> 

      <!-- BLANK SPACE-->
      <div style="float:left; clear:both; height:300px;" ></div>

    </div><!-- end main col-->

  </div><!-- end wrapper-->


  <?php include($root . '/includes/new-show-footer.php'); ?>
