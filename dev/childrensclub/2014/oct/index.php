<?php 
$name     = "Children's Club";
$content  = "Children's Club is an international exhibition featuring every category of children's clothing from newborn to age 12, layette items, fashion accessories, footwear and gifts.";
$keyword  = "Children's Club, Childrens club, cc nyc, cc enk, childrens trade show, childrens fashion, New york trade show, international trade show, ENK, fashion trade events";
include('../../../includes/variables.php');
require($root . '/bin/ClassMathGuard.php');

include($root . '/includes/cc/cc-oct2014-vars.php'); 
include($root . '/includes/show-header.php');
?> 


<body class="cc-10-14 cc showPage">
<span id="top" class="cc-oct2014-hero"></span>
<div id="wrapper">

    <!-- Navigation-->  
    <div id="nav-col">
      <div id="nav">
        <?php include($root . '/includes/main-nav.php'); ?>
        <?php include($root . '/includes/cc/cc-social.php'); ?>
      </div>
    </div>
    
    <!-- Main Column -->  
  <div id="main-col">
      
      <!-- Container -->
      <?php include($root . '/includes/cc/cc-oct2014-hero.php'); ?>
      
            <!-- Show Description -->
      <?php include($root . '/includes/cc/cc-show-description.php'); ?>
      
      <!-- Forms -->
      <?php include($root . '/includes/cc/cc-forms.php'); ?>
      
      <!-- Highlights -->
      <?php include($root . '/includes/cc/cc-oct2014-highlights.php'); ?>

      <!-- Roster -->
      <?php include($root . '/includes/cc/cc-oct2014-roster.php'); ?>
      
      <!-- Floorplan --> 
      <?php include($root . '/includes/cc/cc-oct2014-floorplan.php'); ?> 

      <!-- Hotel + Travel -->
      <?php include($root . '/includes/cc/cc-oct2014-hotel-rewrite.php'); ?>
      
      <!-- Gallery -->
      <?php include($root . '/includes/cc/cc-oct2014-gallery.php'); ?>

      <!-- Blank Space -->
            <div style="float:left; clear:both; height:300px;" ></div>
        
        
    </div>

</div>

<!-- Footer -->
<?php include($root . '/includes/new-show-footer.php'); ?>
