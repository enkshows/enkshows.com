<?php 
  $name     = "TMRW";
  $content  = "A select portfolio of emerging contemporary designers in a unique and intimate setting within Coterie, held twice a year in NYC.";
  $keyword  = "tmrw, Mens Tradeshow, Womens fashion tradeshow, New york trade show, international trade show, fashion coterie, ENK, Accessories tradeshow, Shoes Tradeshow, sole commerce, fashion trade events";

  include('../includes/variables.php'); 
  require('../bin/ClassMathGuard.php');
  include('../includes/tmrw/2015/tmrw-feb2015-vars.php');
  include('../includes/show-header.php');
?>

<body class="tmrwPage tmrw showPage">
<span id="top" class="tmrw-feb2015-hero"></span>
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

        <?php include('../includes/main-hero-container.php'); ?>
        
        <!-- Show Description -->
        <?php include('../includes/tmrw/2015/tmrw-2015-show-description.php'); ?>
        
        <!-- Forms -->
        <?php include('../includes/tmrw/2015/tmrw-2015-forms.php'); ?>
        <!-- Video -->
        <?php include('../includes/tmrw/2015/tmrw-feb2015-video.php'); ?>
        <!-- Highlights -->
        <?php include('../includes/tmrw/2015/tmrw-feb2015-highlights.php'); ?>
     
        <!-- Roster -->
        <?php include('../includes/tmrw/2015/tmrw-feb2015-roster.php'); ?>

        <!-- Floorplan -->
        <?php include('../includes/fc/2015/fc-feb2015-floorplan.php'); ?> 

        <!-- Hotel + Travel -->
        <?php include('../includes/ac/2015/acic-hotel.php'); ?>  

      
      <!-- BLANK SPACE-->
            <div style="float:left; clear:both; height:300px;" ></div>
        <!-- BLANK SPACE-->
        
    </div><!-- end main col-->

</div><!-- end wrapper-->


<?php include("../includes/new-show-footer.php"); ?>