<?php 
$name     = 'ENK Vegas';
$content  = 'An all-women’s exhibition that runs concurrent with Magic Market Week, ENKVEGAS takes place twice a year (February and August) in Las Vegas.';
$keyword  = 'ENKvegas, enk vegas, las vegas, Mens Tradeshow, Womens fashion tradeshow, New york trade show, international trade show, fashion coterie, ENK, Accessories tradeshow, Shoes Tradeshow, sole commerce, fashion trade events';
include('../includes/variables.php');
require($root . '/bin/ClassMathGuard.php');

include($root . '/includes/ev/2015/ev-feb2015-vars.php'); 
include($root . '/includes/show-header.php');
?> 

<body class='vegasPage ev ev-feb2015 showPage' id="showPage">
<?php if ($hero) : ?>
    <span id='top' class="<?php echo $hero; ?>"></span>
<?php endif; ?>


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
    <?php if ( $postano) : ?>
      <?php include($root . '/includes/ev/2015/ev-feb2015-postano.php'); ?>
    <?php elseif ( $hero) : ?>
      <?php include($root . '/includes/main-hero-container.php'); ?>
    <?php else : ?>
      <?php include($root . '/includes/new-template-show-header.php'); ?>
    <?php endif; ?>
    
    <!-- Show Description -->
    <?php include($root . '/includes/ev/ev-show-description.php'); ?>
    
    <!-- Info Links/forms -->  
      <?php include($root . '/includes/ev/2015/ev-2015-forms.php'); ?> 
         
    <!-- Highlights  -->
    <?php include($root . '/includes/ev/2015/ev-feb2015-highlights.php'); ?>
    
        <!-- Rosters -->
    <?php include($root . '/includes/ev/2015/ev-feb2015-roster.php'); ?>
    
    <!-- Floorplan -->  
    <?php include($root . '/includes/ev/2015/ev-feb2015-floorplan.php'); ?>

    <!-- Floorplan -->  
    <?php include($root . '/includes/ev/2015/ev-feb2015-hotel.php'); ?>
    
    <!-- Video -->
    <?php include($root . '/includes/_partials/partial-video.php'); ?>
    
    <!-- Gallery -->
    <?php include($root . '/includes/_partials/partial-gallery.php'); ?>
        	
	
    	<!-- BLANK SPACE-->
            <div style='float:left; clear:both; height:300px;' ></div>
        <!-- BLANK SPACE-->
        
    </div><!-- end main col-->

</div><!-- end wrapper-->

<?php include($root . '/includes/new-show-footer.php'); ?>
