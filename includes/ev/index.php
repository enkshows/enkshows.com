<?php require('../../../bin/ClassMathGuard.php'); ?>
<?php include("../../../includes/ev/ev-header.php"); ?>

<div id="wrapper">
  <!-- Navigation-->  
  <div id="nav-col">
    <div id="nav">
      <?php include("../../../includes/main-nav.php"); ?>
      <?php include("../../../includes/main-nav-social.php"); ?>

    </div>
  </div> <!-- End Navigation -->
  
  <!-- Content--> 
  <div id="main-col">
    
    <!-- Show Hero / Info Container -->
    <?php include("../../../includes/ev/ev-aug2014-header.php"); ?>
    
    <!-- Show Descriptions -->
    <?php include("../../../includes/ev/ev-show-description.php"); ?>
    
    <!-- Info Links/forms -->  
    <?php include("../../../includes/ev/ev-forms.php"); ?>  
    
    <!-- Highlights Module --> 
    <?php include('../../../includes/ev/ev-aug2014-highlights.php'); ?>
    
    <!-- Hotel + Travel Module --> 
    <?php include('../../../includes/ev/ev-aug2014-hotel.php'); ?>              
    
    <!-- Gallery Module -->     
    <?php include('../../../includes/ev/ev-aug2014-gallery.php'); ?>
    
    <!-- BLANK SPACE-->
    <div style="float:left; clear:both; height:300px;"></div>
    <!-- BLANK SPACE-->
    
  </div><!-- end main col-->

</div><!-- end wrapper-->

<?php include("../../../includes/ev/dev-ev-show-footer.php"); ?>