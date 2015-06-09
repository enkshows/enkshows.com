<?php 
$name     = "Intermezzo Collections";
$content  = "The perfect opportunity between the major women’s fashion markets for retailers to replenish all classifications of their ready-to-wear inventory -- contemporary, denim, bridge and evening.";
$keyword  = "IC, fashion, tradeshow, intermezzo collections, intermezzo, circuit, fashion tradeshow";
require('../../../bin/ClassMathGuard.php');
include('../../../includes/variables.php');
include($root . '/includes/ic/2015/ic-aug2015-vars.php'); 
include($root . '/includes/show-header.php');
?> 


<body class="ic-08-14 ic showPage" id="showPage">
<!-- <span id="top" class="ic-aug2014-hero"></span> -->
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
    <!-- Show Hero / Info Container -->
      <?php if ( $postano) : ?>
        <?php include($root . '/includes/ac/2015/ac-feb2015-postano.php'); ?>
      <?php elseif ( $hero) : ?>
        <?php include($root . '/includes/main-hero-container.php'); ?>
      <?php else : ?>
        <?php include($root . '/includes/new-template-show-header.php'); ?>
      <?php endif; ?>  
          
    <!-- Show Descriptions -->
    <?php include($root . '/includes/ic/2015/ic-2015-show-description.php'); ?>

    <!-- ic Forms -->
    <?php include($root . '/includes/ic/2015/ic-2015-forms.php'); ?>  
    
    <!-- Floorplans -->     
    <?php include($root . '/includes/ic/2015/ic-aug2015-highlights.php'); ?> 

    <!-- Floorplans -->     
    <?php include($root . '/includes/ic/2015/ic-may2015-roster-post.php'); ?> 

    <!-- Floorplans -->     
    <?php include($root . '/includes/ac/2015/acic-aug2015-floorplan.php'); ?> 

    <!-- Hotel + Travel -->     
    <?php include($root . '/includes/_partials/partial-hotel.php'); ?> 

    <!-- Gallery -->     
    <?php include($root . '/includes/ic/2015/ic-aug2015-gallery.php'); ?> 

    <!-- BLANK SPicE-->
    <div style="float:left; clear:both; height:300px;" ></div>
        
    </div><!-- end main col-->

</div><!-- end wrapper-->


<?php include($root . "/includes/new-show-footer.php"); ?>
