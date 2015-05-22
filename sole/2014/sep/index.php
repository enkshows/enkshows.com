<?php 
  include('../../../includes/variables.php');
  require($root . '/bin/ClassMathGuard.php');
  include($root . '/includes/sc/sc-header.php');


?>

<?php  ?>

<?php  ?>

<body class="solePage sc showPage">
<span id="top" class="sc-sep2014-hero"> </span>	
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

		<!-- Hero -->
		<?php include($root . "/includes/sc/sc-main-hero-container.php"); ?>
            
		<!-- Description -->
		<?php include($root . "/includes/sc/sc-show-description.php"); ?>
            
        <!-- Forms -->
		 <?php include($root . "/includes/sc/sc-forms.php"); ?>

    	<!-- Highlights -->
   		<?php include($root . "/includes/sc/sc-sep2014-highlights.php"); ?>
		
		<!-- Post Roster -->
   		<?php include($root . "/includes/sc/sc-sep2014-roster.php"); ?>

    <!-- Floor Plan -->
      <?php include($root . "/includes/fc/fc-sep2014-floorplan.php"); ?>
      
   		<!-- Hotel -->
   		<?php include($root . "/includes/fc/fc-sep2014-hotel.php"); ?> 
   		
   		<!-- Gallery -->
   		<?php include($root . "/includes/sc/sc-sep2014-gallery.php"); ?>  

    	<!-- BLANK SPACE-->
		<div style="float:left; clear:both; height:300px;" ></div>
        
    </div><!-- end main col-->

</div><!-- end wrapper-->


<?php include ($root . '/includes/show-footer.php');?>