<?php require('../../../bin/ClassMathGuard.php');?>

<?php include("../../../includes/variables.php"); ?>

<?php include("../../../includes/ev/ev-archive-header.php"); ?>
<div id="wrapper">

    <!-- Navigation-->  
    <div id="nav-col">
      <div id="nav">
		 <a class="nav_enk" title="ENK International" href="../">ENK International</a>
            
            <ul class="nav_first">
                <div id="navFirstShow"> </div>
                        <ul class="nav_second" id="navSecondShow"> </ul>
      </ul>
		
        <?php include("../../../includes/main-nav-social.php"); ?>
      </div>
    </div> <!-- End Navigation -->
    
    <!-- Content--> 
  <div id="main-col">

    <!-- Show Hero / Info Container -->
    <?php include("../../../includes/ev/ev-aug2014-header.php"); ?>
          
    <!-- Show Descriptions -->
    <?php include("../../../includes/ev/ev-archive-show-description.php"); ?>
        
     	<!-- Info Links/forms -->  
    	<?php include("../../../includes/ev/ev-archive-forms.php"); ?>  
      
    <!-- Highlights Module --> 
    <?php include('../../../includes/ev/ev-aug2014-highlights-archive.php'); ?>
    
    <!-- Hotel + Travel Module --> 
    <?php include('../../../includes/ev/ev-aug2014-hotel.php'); ?>              
    
    <!-- Gallery Module -->     
    <?php include('../../../includes/ev/ev-aug2014-gallery.php'); ?>
            
    <!-- BLANK SPACE-->
    <div style="float:left; clear:both; height:300px;"></div>

        
    </div><!-- end main col-->

</div><!-- end wrapper-->

<?php include("../../../includes/archive-show-footer.php"); ?>