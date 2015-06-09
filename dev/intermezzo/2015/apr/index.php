<?php 
$name     = "Intermezzo Collections";
$content  = "The perfect opportunity between the major women’s fashion markets for retailers to replenish all classifications of their ready-to-wear inventory -- contemporary, denim, bridge and evening.";
$keyword  = "IC, fashion, tradeshow, intermezzo collections, intermezzo, circuit, fashion tradeshow";
include('../../../includes/variables.php');
require($root .'/bin/ClassMathGuard.php');

include($root . '/includes/ic/2015/ic-may2015-vars.php'); 
include($root . '/includes/show-header.php');
?> 





<body class="ic-08-14 ic showPage" id="showPage">
<?php if($hero) : ?>
  <span id="top" class="<?php echo $hero;?>"></span>
<?php endif;?>
<div id="wrapper">

 <!-- Navigation--> 
  <div id="nav-col">
    <div id="nav">
      <?php include($root . "/includes/main-nav.php"); ?>
      <?php include($root . "/includes/main-nav-social.php"); ?>
      </div>
  </div> <!-- End Navigation -->
    
   <!-- Content --> 
  <div id="main-col">
    <!-- Show Header -->
    <?php if ( $postano ) : ?>
      <?php include($root . '/includes/ic/2015/ic-may2015-postano.php'); ?>
    <?php elseif ( $hero ) : ?>
        <?php include($root . '/includes/main-hero-container.php'); ?>
    <?php else : ?>
        <?php include($root . '/includes/new-template-show-header.php'); ?>
    <?php endif; ?>
          
    <!-- Show Descriptions -->
    <?php include($root . '/includes/ic/2015/ic-2015-show-description.php'); ?>

    <!-- ic Forms -->
    <?php include($root . '/includes/ic/2015/ic-2015-forms.php'); ?>  
    
    <!-- Floorplans -->     
    <?php include($root . '/includes/ic/2015/ic-may2015-highlights.php'); ?> 
    
    <!-- Roster -->
    <?php include($root . '/includes/ic/2015/ic-may2015-roster.php'); ?> 

    <!-- Floorplan -->     
    <?php include($root . '/includes/ac/2015/acic-may2015-floorplan.php'); ?> 

    <!-- Hotel + Travel -->     
    <?php include($root . '/includes/ac/2015/acic-hotel.php'); ?> 
    
    <!-- Video -->
    <?php include($root . '/includes/_partials/partial-video.php'); ?> 

    <!-- Gallery -->     
    <?php include($root . '/includes/_partials/partial-gallery.php'); ?> 

    <!-- BLANK SPicE-->
    <div style="float:left; clear:both; height:300px;" ></div>
        
    </div><!-- end main col-->

</div><!-- end wrapper-->


<?php include($root . "/includes/new-show-footer.php"); ?>