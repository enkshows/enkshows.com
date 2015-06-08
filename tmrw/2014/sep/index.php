<?php 
    include('../../../includes/variables.php');
    require($root . '/bin/ClassMathGuard.php');
    
    include($root . '/includes/tmrw/tmrw-header.php'); 
?>

<body class="tmrwPage tmrw showPage">
<!-- <span id="top" class="tmrw-sep2014"></span> -->
<div id="wrapper">

      <!-- Navigation-->    
    <div id="nav-col">
        <div id="nav">
            <?php include($root . '/includes/main-nav.php'); ?>
           <?php include($root . '/includes/main-nav-social.php'); ?>
        </div>
    </div> <!-- End Navigation -->
    
    <!-- Content--> 
    <div id="main-col">
            
            <!-- Hero -->
                    <div class="info-container enk-live2-parent">
                        <?php include($root . '/includes/tmrw/tmrw-sep2014-postano.php'); ?>
                    </div>
            
            <!-- Show Description -->
            <?php include($root . '/includes/tmrw/tmrw-show-description.php'); ?>
            
            <!-- Forms -->
            <?php include($root . '/includes/tmrw/tmrw-forms-archive.php'); ?>
            
            <!-- Highlights -->
            <?php include($root . '/includes/tmrw/tmrw-sep2014-highlights-archive.php'); ?>
     
            <!-- Roster -->
            <?php include($root . '/includes/tmrw/tmrw-sep2014-roster.php'); ?>

            <!-- Floorplan -->
            <?php include($root . '/includes/fc/fc-sep2014-floorplan.php'); ?> 

            <!-- Hotel + Travel -->
            <?php include($root . '/includes/fc/fc-sep2014-hotel.php'); ?> 
            
            <!-- Gallery -->
            <?php include($root . '/includes/tmrw/tmrw-feb2014-gallery.php'); ?> 

        
        <!-- BLANK SPACE-->
            <div style="float:left; clear:both; height:300px;" ></div>
        <!-- BLANK SPACE-->
        
    </div><!-- end main col-->

</div><!-- end wrapper-->


<?php include($root . '/includes/show-footer.php');?>
