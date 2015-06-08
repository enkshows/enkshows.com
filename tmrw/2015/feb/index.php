<?php 
  $name     = "TMRW";
  $content  = "A select portfolio of emerging contemporary designers in a unique and intimate setting within Coterie, held twice a year in NYC.";
  $keyword  = "tmrw, Mens Tradeshow, Womens fashion tradeshow, New york trade show, international trade show, fashion coterie, ENK, Accessories tradeshow, Shoes Tradeshow, sole commerce, fashion trade events";

  include('../../../includes/variables.php'); 

  include($root . '/includes/tmrw/2015/tmrw-feb2015-vars.php');
  include($root . '/includes/show-header.php');
?>

<body class="tmrwPage tmrw showPage">
<!-- <span id="top" class="tmrw-sep2014"></span> -->
<div id="wrapper">

      <!-- Navigation-->  
    <div id="nav-col">
      <div id="nav">
          <?php include($root . '/includes/main-nav.php'); ?>
           <?php include($root . '/includes/main-nav-social.php'); ?>
        </div>
    </div> <!-- End Navigation -->
    
    <!-- Content--> 
  <div id="main-col">

        <?php include($root . '/includes/template-show-header.php'); ?>
        
        <!-- Show Description -->
        <?php include($root . '/includes/tmrw/2015/tmrw-2015-show-description.php'); ?>
        
        <!-- Forms -->
        <?php include($root . '/includes/tmrw/2015/tmrw-2015-forms.php'); ?>
        
        <!-- Video -->
        <?php include($root . '/includes/tmrw/2015/tmrw-feb2015-video.php'); ?>

        <!-- Highlights -->
        <?php include($root . '/includes/tmrw/2015/tmrw-feb2015-highlights.php'); ?>
     
        <!-- Roster -->
        <?php include($root . '/includes/tmrw/2015/tmrw-feb2015-roster.php'); ?>

        <!-- Floorplan -->
        <?php include($root . '/includes/fc/2015/fc-feb2015-floorplan.php'); ?> 

        <!-- Hotel + Travel -->
        <?php include($root . '/includes/fc/2015/fc-feb2015-hotel-rewrite.php'); ?> 

      
      <!-- BLANK SPACE-->
            <div style="float:left; clear:both; height:300px;" ></div>
        <!-- BLANK SPACE-->
        
    </div><!-- end main col-->

</div><!-- end wrapper-->


<?php include($root . "/includes/new-show-footer.php"); ?>