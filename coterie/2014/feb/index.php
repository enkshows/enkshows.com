<?php 
require('../../../bin/ClassMathGuard.php');
?>


<?php include('../../../includes/fc/fc-archive-header.php'); ?> 

<body class="coterie showPage">
<span id="top" class="coterieHero"> </span> 
<div id="wrapper">

      <!-- Navigation-->	
    <div id="nav-col">
    	<div id="nav">
        	<div id="nav">
        	<?php include("../../../includes/main-nav.php"); ?>
            
			<?php include('../../../includes/main-nav-social.php'); ?>
			
        </div>
        </div>
    </div> <!-- End Navigation -->
    
    <!-- Content-->	
	<div id="main-col">
    
     	<!-- Hero -->
		<?php include('../../../includes/fc/fc-feb2014-hero.php'); ?> 
		
		<!-- Show Info -->
		<?php include('../../../includes/fc/fc-show-description.php'); ?> 
		
		<!-- Coterie Forms-->
		<?php include('../../../includes/fc/fc-archive-forms.php'); ?> 
			
        <!-- Highlights  --> 
		<?php include('../../../includes/fc/fc-feb2014-highlights-archive.php'); ?>  
        
   		<!-- Exhibitor Roster  -->     
        <?php include('../../../includes/fc/fc-feb2014-roster.php'); ?>
        
         <!-- Floorplan   -->     
        <?php include('../../../includes/fc/fc-feb2014-floorplan.php'); ?>
             
		<!-- Hotel   -->     
        <?php include('../../../includes/fc/fc-feb2014-hotel.php'); ?>
        
        <!-- Video   -->     
        <?php include('../../../includes/fc/fc-feb2014-video.php'); ?>
        
        <!-- Gallery   -->     
        <?php include('../../../includes/fc/fc-feb2014-gallery.php'); ?>
             
        

    	<!-- BLANK SPACE-->
            <div style="float:left; clear:both; height:300px;" >
            </div>
        <!-- BLANK SPACE-->
        
    </div><!-- end main col-->

</div><!-- end wrapper-->
  

<!-- Sticky Footer-->
<div id="footerlinks"></div>

<!-- fixed footer-->
<div id="footer">
	<div id="lFoot"></div>
    <div id="rFoot"></div>
</div>
<!-- scripts -->

	<script src="../../../js/libs/modernizr-2.5.2.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
   
	   <!-- plugins/scripts -->
	<script src="../../../js/plugins.js"></script>
	<script src="../../../js/script.js"></script> 
    
   	<!-- Shadowbox -->  
    <script type="text/javascript" src="../../../js/shadowbox.js"></script>
	<!--form links -->
    <!--<script src="../../../js/jquery-1.2.3.pack.js"></script>-->
    <script src="../../../js/runonload.js"></script>
    <script src="../../../js/form.js"></script>
    
	<!-- end scripts-->

	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-21042607-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>

</body>
</html>
