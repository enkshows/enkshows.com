<?php   
require('../../../bin/ClassMathGuard.php');
include("../../../includes/variables.php");
include("../../../includes/ac/ac-header.php"); 
?>

<body class="acPage showPage">
  <span id="top" class="ac-may2014-hero"></span>
  <div id="wrapper">

   <!-- Navigation-->   
   <div id="nav-col">
    <div id="nav">
      <?php include("../../../includes/main-nav.php"); ?>
      <?php include("../../../includes/main-nav-social.php"); ?>
    </div>
  </div> <!-- End Navigation -->

  <!-- Content --> 
  <div id="main-col">
    <!-- Show Header -->
    <?php include('../../../includes/main-hero-container.php'); ?>   

    <!-- Show Descriptions -->
    <?php include('../../../includes/ac/ac-show-description.php'); ?>

    <!-- AC Forms -->
    <?php include('../../../includes/ac/ac-forms-archive.php'); ?>  

    <!--  Highlights -->
    <?php include('../../../includes/ac/ac-may2014-highlights-archive.php'); ?>   

    <!-- Rosters -->     
    <?php include('../../../includes/ac/ac-may2014-roster.php'); ?>  

    <!-- Floorplan -->     
    <?php include('../../../includes/ac/acic-may2014-floorplan.php'); ?> 

    <!-- Hotel + Travel -->     
    <?php include('../../../includes/ac/acic-may2014-hotel.php'); ?> 
    
    <!--Video -->     
    <?php include('../../../includes/ac/ac-may2014-video.php'); ?>
    
    <!--Gallery -->     
    <?php include('../../../includes/ac/ac-may2014-gallery.php'); ?>

    <!-- BLANK SPACE-->
    <div style="float:left; clear:both; height:300px;" ></div>

  </div><!-- end main col-->

</div><!-- end wrapper-->


<?php include("../../../includes/show-footer.php"); ?>