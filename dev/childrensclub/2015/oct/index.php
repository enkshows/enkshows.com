<?php 
$name     = "Children's Club";
$content  = "Children's Club is an international exhibition featuring every category of children's clothing from newborn to age 12, layette items, fashion accessories, footwear and gifts.";
$keyword  = "Children's Club, Childrens club, cc nyc, cc enk, childrens trade show, childrens fashion, New york trade show, international trade show, ENK, fashion trade events";
include('../../../includes/variables.php');
require($root . '/bin/ClassMathGuard.php');
include($root . '/includes/cc/2015/cc-oct2015-vars.php'); 
include($root . '/includes/show-header.php');
?>

<body class="showPage cc" id="showPage">
  <div id="wrapper">

   <!-- Navigation--> 
   <div id="nav-col">
    <div id="nav">
      <?php include($root . '/includes/main-nav.php'); ?>
      <?php include($root . '/includes/main-nav-social.php'); ?>
    </div>
  </div> <!-- End Navigation -->

  <!-- Content --> 
  <div id="main-col">
    <!-- Show Hero / Info Container -->
    <?php if ( $postano) : ?>
      <?php include($root . '/includes/cc/2015/cc-aug2015-postano.php'); ?>
    <?php elseif ($hero) : ?>
      <?php include($root . '/includes/main-hero-container.php'); ?>
    <?php else : ?>
      <?php include($root . '/includes/new-template-show-header.php'); ?>
    <?php endif; ?>

    <!-- Show Descriptions -->
    <?php include($root . '/includes/cc/cc-show-description.php'); ?>

    <!-- CC Forms -->
    <?php include($root . '/includes/cc/2015/cc-2015-archive-forms.php'); ?>   

    <!-- Highlights -->
    <?php include($root . '/includes/cc/2015/cc-oct2015-highlights.php'); ?>

    <!-- Hotel + Travel -->       
    <?php include($root . '/includes/_partials/partial-hotel.php'); ?>
    
    <!-- Video -->     
    <?php include($root . '/includes/cc/2015/cc-oct2015-video.php'); ?> 

    <!-- Gallery -->     
    <?php include($root . '/includes/cc/2015/cc-oct2015-gallery-rewrite.php'); ?> 

    <!-- BLANK SPACE-->
    <div style="float:left; clear:both; height:300px;" ></div>

  </div><!-- end main col-->

</div><!-- end wrapper-->


<?php include($root . '/includes/new-show-footer.php'); ?> 