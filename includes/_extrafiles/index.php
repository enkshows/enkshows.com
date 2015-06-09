<?php 
require('../../../bin/ClassMathGuard.php'); 
include("../../../includes/variables.php"); 
include("../../../includes/cc/2015/cc-jan2015-vars.php"); 
?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>ENK INTERNATIONAL | Children's Club</title>
  <meta name="description" content="Children's Club is an international exhibition featuring every category of children's clothing from newborn to age 12, layette items, fashion accessories, footwear and gifts.">
  
  <meta name="keywords" content="Children's Club, Childrens club, cc nyc, cc enk, childrens trade show, childrens fashion, New york trade show, international trade show, ENK, fashion trade events" />
  <meta name="author" content="ENK International">
  <meta name="viewport" content="width=device-width">
  <meta name="format-detection" content="telephone=no">

  <!-- <link rel="stylesheet" href="../css/style.css"> -->
  <link rel="stylesheet" href="<?php echo BASE; ?>/css/enk.css">
  <link rel="stylesheet" href="<?php echo BASE; ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo BASE; ?>/css/form.css">
  <link rel="stylesheet" href="<?php echo BASE; ?>/css/_enk2014.css">
  <link href="<?php echo BASE; ?>/css/webfonts/ss-social-regular.css" rel="stylesheet" />
</head>


<body class="showPage cc">
  <div id="wrapper">

   <!-- Navigation--> 
   <div id="nav-col">
    <div id="nav">
      <?php include($root . '/includes/main-nav.php'); ?>
      <?php include($root . '/includes/main-nav-social.php'); ?>
    </div>
  </div> <!-- End Navigation -->

  <!-- Content --> 
  <div id="main-col">
    <!-- Show Hero / Info Container -->
    <?php include($root . '/includes/cc/2015/cc-jan2015-header.php'); ?>  

    <!-- Show Descriptions -->
    <?php include($root . '/includes/cc/cc-show-description.php'); ?>

    <!-- CC Forms -->
    <?php include($root . '/includes/cc/2015/cc-2015-archive-forms.php'); ?>   

    <!-- Highlights -->
    <?php include($root . '/includes/cc/2015/cc-jan2015-highlights.php'); ?>

    <!-- Hotel + Travel -->       
    <?php include($root . '/includes/cc/2015/cc-jan2015-hotel-rewrite.php'); ?>
    
    <!-- Video -->     
    <?php include($root . '/includes/cc/2015/cc-jan2015-video.php'); ?> 

    <!-- Gallery -->     
    <?php include($root . '/includes/cc/2015/cc-jan2015-gallery-rewrite.php'); ?> 

    <!-- BLANK SPACE-->
    <div style="float:left; clear:both; height:300px;" ></div>

  </div><!-- end main col-->

</div><!-- end wrapper-->


<!-- Scrolled Footer -->
<div id="footerlinks">
  <div id="footlogo">ENK INTERNATIONAL</div>
  <div id="footbox">
    <div id="footboxShows">
      <a class="show" href="http://www.enkshows.com/childrensclub" title="Children's Club">Children's Club</a>
      <a class="show" href="http://www.enkshows.com/circuit" title="Accessorie Circuit">Circuit</a>
      <a class="show" href="http://www.enkshows.com/coterie" title="Coterie">Coterie</a>
      <a class="show" href="http://www.enkshows.com/enkvegas" title="ENKVegas">ENKVegas</a>
      <a class="show" href="http://www.enkshows.com/intermezzo" title="Intermezzo Collections">Intermezzo</a>
      <a class="show" href="http://www.enkshows.com/sole" title="Sole Commerce">Sole</a>
      <a class="show" href="http://www.enkshows.com/tmrw" title="TMRW">TMRW</a>
      <a></a>
    </div>
    <div id="footboxCompany">
      <a class="company" href="http://www.enkshows.com/company/privacy-policy.html" title="Privacy Policy"> Privacy Policy</a>
      <span class="footLine"> | </span>
      <a class="company" href="http://www.enkshows.com/company/terms" title="Terms &amp; Conditions"> Terms &amp; Conditions</a>
      <span class="footLine"> | </span>
      <a class="company" href="#top" title="Back to top"> Back to top</a>
    </div>
  </div>
</div>

<!-- Fixed Footer -->
<div id="footer">
  <div id="lFoot"><a href="http://www.enkshows.com" class="redLink2">ENK INTERNATIONAL</a><span class="foot_space">641 LEXINGTON AVENUE NEW YORK, NY 10022</span><span class="foot_space">T. 212.951.6600</span><span class="foot_space2">F. 212.758.3403</span></div>
  <div id="rFoot"><a href="mailto:enkshows@enkshows.com" class="greyLink" target="_blank">ENKSHOWS@ENKSHOWS.COM</a></div>
</div>
    
    <!-- JavaScripts -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="<?php echo BASE;?>/js/libs/modernizr-2.5.2.min.js"></script>
    <script src="<?php echo BASE; ?>/css/webfonts/ss-social.js"></script>

    <!-- Plugins & ENK Script -->
    <script src="<?php echo BASE;?>/js/nivo.js"></script>
    
    <!-- <script src="<?php //echo BASE;?>/js/plugins.js"></script> 
    <script src="<?php //echo BASE;?>/js/script.js"></script> -->
  
    <!-- Shadowbox -->  
    <script type="text/javascript" src="<?php echo BASE;?>/js/shadowbox.js"></script>
    <!-- <script src="<?php //echo BASE;?>/js/runonload.js"></script> -->
    <script src="<?php echo BASE;?>/js/form.js"></script>
  

  <!-- Testing!  -->
  <script src="http://dev.enkshows.com/js/jquery.nivo.slider.js"></script>
  <script src="http://dev.enkshows.com/js/_enk-plugins2014.js"></script>
  <script src="http://dev.enkshows.com/js/_enk2014.js"></script>
  <script src="http://dev.enkshows.com/js/_enk-scriptz.js"></script>


  <!-- Google Remarketing -->
  <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 986966421;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
  </script>
  <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
  </script>
  <noscript>
    <div style="display:inline;">
      <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/986966421/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
  </noscript>
  <script>
  // var $collections = '<li><a href="#collections">Collections</a></li>';
  // var $floorplan = '<li><a href="#floorplans">Floor Plans</a></li>';
  // var $concierge = '<li><a href="#hotel-travel">Hotel + Amenities</a></li>';
  // var $gallery = '<li><a href="#gallery">Gallery</a></li>';
  // var $highlights = '<li><a href="#highlights">Highlights</a></li>';
  // var $video = '<li><a href="#video">Video</a></li>';
  // var $amenities = '<li><a href="#amenities">Amenities</a></li>';
  // var $international = '<li><a href="#visas">Visas</a></li>';
  // var $overview = '<li><a href="#overview">Overview</a></li>';

  // if( $("body").hasClass("cc-dev")) { 
  //         $('#navThirdcc').prev().addClass( "activeLink" );
  //         $('#navThirdcc').append($highlights, $concierge, $collections, $video, $gallery); }
  //   else { $('#navThirdcc').append(); }
  </script>

  <!-- Google Analytics -->
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
