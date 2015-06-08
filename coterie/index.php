<?php 
  $name     = "Coterie";
  $content  = "An International fashion exhibition in the U.S. featuring contemporary to traditional women’s ready-to-wear. Twice a year in NYC, concurrent with Sole Commerce and TMRW";
  $keyword  = "Fashion Coterie, Coterie, womens trade show, womans trade show, international fashion trade show, sole commerce, tmrw, javits fashion, javits";
  include('../includes/variables.php'); 

  include('../includes/fc/2015/fc-feb2015-vars.php');
  include('../includes/show-header.php');
?> 
<body class="coteriePage fc showPage">
<span id="top" class="fc-feb2015-hero"></span>
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
      <!-- Show Hero / Info Container -->
      <?php include('../includes/main-hero-container.php'); ?>
      
      <?php include('../includes/_v2/v2-show-description.php'); ?>

      <!-- Show Descriptions -->
      <!-- <?php //include('../includes/fc/2015/fc-2015-show-description.php'); ?> -->
    
      

      <!-- Info Links/forms -->  
      <?php include('../includes/fc/2015/fc-2015-forms.php'); ?>  

      <!-- video Module --> 
      <?php include('../includes/_partials/partial-video.php'); ?>
    
      <!-- Highlights Module --> 
      <?php include('../includes/fc/2015/fc-feb2015-highlights.php'); ?>

      <!-- Soundcloud Module --> 
      <?php include('../includes/fc/2015/fc-feb2015-soundcloud.php'); ?>

      <!-- Roster Module --> 
      <?php include('../includes/fc/fc-sep2014-roster.php'); ?>

      <!-- Floorplan Module --> 
      <?php include('../includes/fc/2015/fc-feb2015-floorplan.php'); ?>      



      <!-- Hotel + Travel Module --> 
      <?php include('../includes/ac/2015/acic-hotel.php'); ?>  

      <!-- Hotel + Travel Module --> 
      <?php include('../includes/sf-test.php'); ?>  
    
      <!-- BLANK SPACE-->
      <div style="float:left; clear:both; height:300px;"></div>
      <!-- BLANK SPACE-->
    
    </div><!-- end main col-->

</div><!-- end wrapper-->

<?php include('../includes/new-show-footer.php'); ?>