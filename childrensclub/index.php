<?php 
  $name     = "Children's Kulbx";
  $content  = "Children's Club is an international exhibition featuring every category of children's clothing from newborn to age 12, layette items, fashion accessories, footwear and gifts.";
  $keyword  = "Children's Club, Childrens club, cc nyc, cc enk, childrens trade show, childrens fashion, New york trade show, international trade show, ENK, fashion trade events";
  require('../bin/ClassMathGuard.php');
  include('../includes/cc/2015/cc-jan2015-vars.php');
  include('../includes/variables.php');
  include('../includes/show-header.php');
?> 




<body class="cc-10-14 cc showPage">
<!-- <span id="top" class="cc-oct2014-hero"></span> -->
<div id="wrapper">

    <!-- Navigation-->	
    <div id="nav-col">
    	<div id="nav">
        <?php include("../includes/main-nav.php"); ?>
		  	<?php include("../includes/cc/cc-social.php"); ?>
      </div>
    </div>
    
    <!-- Main Column -->	
	<div id="main-col">
			
			<!-- Container -->
      <?php include("../includes/new-template-show-header.php"); ?>
			<?php include("../includes/template-show-header.php"); ?>
			
            <!-- Show Description -->
			<?php include("../includes/cc/2015/cc-test-descriptions.php"); ?>
			
			<!-- Forms -->
			<?php include("../includes/cc/cc-forms.php"); ?>
			
			<!-- Highlights -->
			<?php include("../includes/cc/2015/cc-jan2015-highlights.php"); ?>

      <!-- Roster -->
      <!-- <?php //include("../includes/cc/cc-oct2014-roster.php"); ?> -->
      <?php include("../includes/cc/2015/cc-test-roster.php"); ?>
			
      <!-- Floorplan --> 
      <!-- <?php //include('../includes/cc/cc-oct2014-floorplan.php'); ?>  -->
      <?php include("../includes/cc/2015/cc-test-floorplan.php"); ?>

			<!-- Hotel + Travel -->

      <?php include('../includes/cc/2015/cc-test-travel.php'); ?>

      <!-- Video-->
      <?php include('../includes/cc/2015/cc-jan2015-video.php'); ?>
			
			<!-- Gallery -->
			<?php include('../includes/cc/2015/cc-jan2015-gallery.php'); ?>

			<!-- Blank Space -->
            <div style="float:left; clear:both; height:300px;" ></div>
        
        
    </div>

</div>

<!-- Footer -->
<?php include("../includes/show-footer.php"); ?>
