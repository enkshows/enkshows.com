<?php require('bin/ClassMathGuard.php');?>
<?php require('includes/main-header.php');?>
<body id="home" class="homePage">
<div id="wrapper">

	<!-- Navigation-->	
    <div id="nav-col">
    	<div id="nav">

            <?php include('includes/main-nav.php'); ?>
            
            <?php include('includes/main-nav-social.php'); ?>
         
        </div>
    </div> <!-- End Navigation-->
    
    <!-- Content -->	
  <div id="main-col">

      <?php include("includes/main/main-postano.php"); ?>
      <!-- Postano -->
    
      <div class="module" id="show-dates">
          <?php include("includes/main/calendar-header.php"); ?>
          <p>hello</p>
          <?php include("includes/_v2/v2-main-show-tiles.php"); ?>
      </div>
      <!-- Show Dates / Calendar -->


  <!-- Attend -->
  <?php include("includes/main/main-attend.php"); ?>

  <!-- About -->
	<?php include("includes/main/main-about.php"); ?>
	
	<!-- Exhibit -->
	<?php include("includes/main/main-exhibit.php"); ?>
	
	<!-- Press -->
	<?php include("includes/main/main-press.php"); ?>
  
  	<!-- Travel -->
	<?php include("includes/main/main-travel.php"); ?>
	
	<!-- Contact -->
	<?php include("includes/main/main-contact.php"); ?>

    

    	<!-- BLANK SPACE-->
    	<div style="float:left; clear:both; height:600px;" ></div>
        <!-- BLANK SPACE-->
        
    </div><!-- end main col-->
</div><!-- end wrapper-->

	<!-- Footer -->
	<?php include("includes/main-footer-2.php"); ?>

