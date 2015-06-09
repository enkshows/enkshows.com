<?php 
$name     = "Accessorie Circuit";
$content  = "Established in 1987, CIRCUIT is a comprehensive women’s accessory and footwear exhibition featuring fashion and fine jewelry, handbags, footwear, scarves, belts and gift items.";
$keyword  = "ACIC, fashion, tradeshow, accessory tradeshow, accessories tradeshow, accessorie circuit, intermezzo collections, intermezzo, circuit, fashion tradeshow";
include('../../../includes/variables.php');
require($root . '/bin/ClassMathGuard.php');

include($root . '/includes/ac/2015/ac-jan2015-vars.php'); 
include($root . '/includes/show-header.php');
?> 

<body class="ac-08-14 ac showPage" id="showPage">
<!-- <span id="top" class="ac-jan2015-hero"></span> -->
<div id="wrapper">

 <!-- Navigation--> 
  <div id="nav-col">
    <div id="nav">
        <?php include($root . "/includes/main-nav.php"); ?>
      <?php include($root . "/includes/main-nav-social.php"); ?>
      </div>
  </div> <!-- End Navigation -->
    
   <!-- Content --> 
  <div id="main-col">
    <!-- Show Header -->
    <?php include($root . '/includes/ac/2015/ac-jan2015-postano.php'); ?>
    <!-- <?php //include($root . '/includes/main-hero-container.php'); ?>   -->
    <!-- Show Descriptions -->
    <?php include($root . '/includes/ac/2015/ac-2015-show-description.php'); ?>

    <!-- AC Forms -->
    <?php include($root . '/includes/ac/2015/ac-2015-forms.php'); ?>  
    
    <!-- Floorplans -->     
    <?php include($root . '/includes/ac/2015/ac-jan2015-highlights.php'); ?> 
    
    <!-- Floorplans -->     
    <?php include($root . '/includes/ac/2015/ac-jan2015-roster.php'); ?>

    <!-- Floorplans -->     
    <?php include($root . '/includes/ac/2015/acic-jan2015-floorplan.php'); ?> 

    <!-- Hotel + Travel -->     
    <?php include($root . '/includes/ac/2015/acic-jan2015-hotel.php'); ?> 

    <!-- Video -->     
    <?php include($root . '/includes/ac/2015/ac-jan2015-video.php'); ?> 

    <!-- Gallery -->     
    <?php include($root . '/includes/ac/2015/ac-jan2015-gallery.php'); ?> 

    <!-- BLANK SPACE-->
    <div style="float:left; clear:both; height:300px;" ></div>
        
    </div><!-- end main col-->

</div><!-- end wrapper-->


<?php include($root . "/includes/new-show-footer.php"); ?>
