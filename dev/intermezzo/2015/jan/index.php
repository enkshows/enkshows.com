<?php 
$name     = "Intermezzo Collections";
$content  = "The perfect opportunity between the major women’s fashion markets for retailers to replenish all classifications of their ready-to-wear inventory -- contemporary, denim, bridge and evening.";
$keyword  = "IC, fashion, tradeshow, intermezzo collections, intermezzo, circuit, fashion tradeshow";
include('../../../includes/variables.php');
require($root . '/bin/ClassMathGuard.php');
include($root . '/includes/ic/2015/ic-jan2015-vars.php'); 
include($root . '/includes/show-header.php');
?> 

<body class="ic-01-15 ic showPage" id="showPage">
<!-- <span id="top" class="ic-jan2015-hero"></span> -->

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
    <?php include($root . '/includes/ic/2015/ic-jan2015-postano.php'); ?> 
    <!-- <?php //include($root . '/includes/main-hero-container.php'); ?>       -->
          
    <!-- Show Descriptions -->
    <?php include($root . '/includes/ic/2015/ic-2015-show-description.php'); ?>

    <!-- ic Forms -->
    <?php include($root . '/includes/ic/2015/ic-2015-forms.php'); ?>  
    
    <!-- Highlighs -->     
    <?php include($root . '/includes/ic/2015/ic-jan2015-highlights.php'); ?> 
    
    <!-- Roster -->     
    <?php include($root . '/includes/ic/2015/ic-jan2015-roster.php'); ?> 

    <!-- Floorplan -->     
    <?php include($root . '/includes/ac/2015/acic-jan2015-floorplan.php'); ?> 

    <!-- Floorplan -->     
    <?php include($root . '/includes/ac/2015/acic-hotel.php'); ?> 

    <!-- Gallery -->     
    <?php include($root . '/includes/_partials/partial-gallery.php'); ?> 

    <!-- BLANK Space-->
    <div style="float:left; clear:both; height:300px;" ></div>
        
    </div><!-- end main col-->

</div><!-- end wrapper-->


<?php include($root . "/includes/new-show-footer.php"); ?>