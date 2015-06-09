<?php 
include('../../../includes/variables.php');
$name     = 'ENK Vegas';
$content  = 'An all-women’s exhibition that runs concurrent with Magic Market Week, ENKVEGAS takes place twice a year (February and August) in Las Vegas.';
$keyword  = 'ENKvegas, enk vegas, las vegas, Mens Tradeshow, Womens fashion tradeshow, New york trade show, international trade show, fashion coterie, ENK, Accessories tradeshow, Shoes Tradeshow, sole commerce, fashion trade events';
require($root . '/bin/ClassMathGuard.php');

include($root . '/includes/ev/2015/ev-aug2015-vars.php'); 
include($root . '/includes/show-header.php');
?> 

<body class='vegasPage ev ev-aug2015 showPage'>
<!-- <span id='top' class='ev-aug2015-hero'></span> -->
<div id='wrapper'>

      <!-- Navigation-->  
    <div id='nav-col'>
      <div id='nav'>
          <?php include($root . '/includes/main-nav.php'); ?>
            
            <?php include($root . '/includes/main-nav-social.php'); ?>
        </div>
    </div> <!-- End Navigation -->
    
    <!-- Content--> 
  <div id='main-col' >
    <!-- Hero -->
    <?php include($root . '/includes/template-show-header.php'); ?>
    
    <!-- Show Description -->
    <?php include($root . '/includes/ev/ev-show-description.php'); ?>
    
    <!-- Info Links/forms -->  
      <?php include($root . '/includes/ev/2015/ev-2015-forms.php'); ?> 
         
    <!-- Highlights  -->
    <?php include($root . '/includes/ev/2015/ev-aug2015-highlights.php'); ?>

    <!-- Hotel -->  
    <?php include($root . '/includes//ev/2015/ev-aug2015-hotel-rewrite.php'); ?>
    
    <!-- Video -->
    <?php include($root . '/includes/_partials/partial-video.php'); ?>
    
    <!-- Gallery -->
    <?php include($root . '/includes/ev/2015/ev-aug2015-gallery.php'); ?>
          
  
      <!-- BLANK SPACE-->
            <div style='float:left; clear:both; height:300px;' ></div>
        <!-- BLANK SPACE-->
        
    </div><!-- end main col-->

</div><!-- end wrapper-->

<?php include($root . '/includes/new-show-footer.php'); ?>
