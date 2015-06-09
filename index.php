<?php require('bin/ClassMathGuard.php');?>
<?php include("includes/variables.php"); ?>
<?php include("includes/_v2/main-header-speed-test.php"); ?>

 
<body id="home" class="homePage">
<div id="wrapper">

  <!-- Navigation-->  
    <?php include("includes/_v2/v2-main-nav.php"); ?>
    
    <!-- Content--> 
  <div id="main-col">
    
      <!-- Calendar -->
        <div class="module" id="show-dates">
            <?php include("includes/main/calendar-header.php"); ?>
            <!-- Show Col Left -->
            <?php //include("includes/main/main-show-tiles.php"); ?>
            <?php include("includes/_v2/v2-main-show-tiles.php"); ?>
        </div>
      

        <!-- Attend -->
        <?php include("includes/_v2/v2-main-attend.php"); ?>
    
    <!-- About -->
    <?php include("includes/_v2/v2-main-about.php"); ?>
    
    
    
    <!-- Exhibit -->
        <?php include("includes/_v2/v2-main-exhibit.php"); ?>
        
    <!-- Press -->
        <?php include("includes/_v2/v2-main-press.php"); ?>  
        
        <!-- Travel -->
        <?php include("includes/_v2/v2-main-travel.php"); ?> 
        
    <!-- Contact -->   
    <?php include("includes/main/main-contact.php"); ?>

    </div><!-- end main col-->
</div><!-- end wrapper-->




<?php include("includes/_v2/v2-footer.php"); ?>