<?php 
  $name     = "Coterie";
  $content  = "An International fashion exhibition in the U.S. featuring contemporary to traditional women’s ready-to-wear. Twice a year in NYC, concurrent with Sole Commerce and TMRW";
  $keyword  = "Fashion Coterie, Coterie, womens trade show, womans trade show, international fashion trade show, sole commerce, tmrw, javits fashion, javits";
  include('../../../includes/variables.php'); 
  require($root . '/bin/ClassMathGuard.php');
  include($root . '/includes/fc/2015/fc-feb2015-vars.php');
  include($root . '/includes/show-header.php');
?> 
<body class="coteriePage fc showPage">
<!-- <span id="top" class="fc-sep2014-hero2"></span> -->
<div id="wrapper">
    <!-- Navigation-->  
    <div id="nav-col">
      <div id="nav">
        <?php include($root . "/includes/main-nav.php"); ?>
        <?php include($root . "/includes/main-nav-social.php"); ?>
      </div>
    </div> <!-- End Navigation --> 
  
    <!-- Content--> 
    <div id="main-col">
      <!-- Show Hero / Info Container -->
      <?php include($root . '/includes/fc/2015/fc-feb2015-header.php'); ?>
    
      <!-- Show Descriptions -->
      <?php include($root . '/includes/fc/2015/fc-2015-show-description.php'); ?>
    
      <!-- Info Links/forms -->  
      <?php include($root . '/includes/fc/2015/fc-2015-archive-forms.php'); ?>  
      
      <!-- video Module --> 
      <?php include($root . '/includes/fc/2015/fc-feb2015-video.php'); ?>

      <!-- Highlights Module --> 
      <?php include($root . '/includes/fc/2015/fc-feb2015-highlights.php'); ?>
      
      <!-- Postano Module --> 
      <?php include($root . '/includes/fc/2015/fc-feb2015-postano.php'); ?>

      <!-- Soundcloud Module --> 
      <?php include($root . '/includes/fc/2015/fc-feb2015-soundcloud.php'); ?>

      <!-- Roster Module --> 
      <?php include($root . '/includes/fc/fc-sep2014-roster.php'); ?>

      <!-- Floorplan Module --> 
      <?php include($root . '/includes/fc/2015/fc-feb2015-floorplan.php'); ?>      

      <!-- Hotel + Travel Module --> 
      <?php include($root . '/includes/sf-test.php'); ?>  
    
      <!-- BLANK SPACE-->
      <div style="float:left; clear:both; height:300px;"></div>
      <!-- BLANK SPACE-->
    
    </div><!-- end main col-->

</div><!-- end wrapper-->

<?php include($root . '/includes/new-show-footer.php'); ?>