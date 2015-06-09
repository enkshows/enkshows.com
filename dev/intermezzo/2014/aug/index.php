<?php require('../../../bin/ClassMathGuard.php'); ?>

<?php include("../../../includes/variables.php"); ?>

<?php include("../../../includes/ic/ic-header.php"); ?>

<body class="ic-08-14 showPage">
<span id="top" class="ic-aug2014-hero"></span>
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
    <?php include('../../../includes/ic/ic-show-description.php'); ?>

    <!-- AC Forms -->
    <?php include('../../../includes/ic/ic-forms-archive.php'); ?>  
    
    <!-- Floorplan -->     
    <?php include('../../../includes/ac/acic-aug2014-floorplan.php'); ?> 

    <!-- Hotel + Travel -->     
    <?php include('../../../includes/ac/acic-aug2014-hotel.php'); ?> 

    <!-- Video -->     
    <?php include('../../../includes/ac/ac-may2014-video.php'); ?> 

    <!-- Gallery -->     
    <?php include('../../../includes/ic/ic-aug2014-gallery.php'); ?> 

    <!-- BLANK SPACE-->
      <div style="float:left; clear:both; height:300px;" ></div>
        
    </div><!-- end main col-->

</div><!-- end wrapper-->


<?php include("../../../includes/show-footer.php"); ?>
