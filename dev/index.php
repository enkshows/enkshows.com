<?php 
  $name     = "FWD";
  $content  = "A fashion forward juniors trade show showcasing the most sought-after juniors and young contemporary ready-to-wear during New York market week. With the addition of FWD, buyers now get exclusive access to the entire women’s marketplace in one location.";
  $keyword  = "FWD Trade Show, FWD, junior trade show, juniors trade show, international fashion trade show,javits fashion, javits";

  // This MUST be included for all other files to work
  // This 'variables.php' file is global utility variables
  // to help with file paths and URLS
  // directory path will change if this is a main show page or 
  // archived show page (EX: enkshows.com/coterie VS enkshows.com/coterie/2015/feb)
  include('../includes/variables.php'); 

  // MathGaurd powers our form Captcha. Must be included
  require($root . '/bin/ClassMathGuard.php');

  // Show specific variables
  include($root . '/includes/fwd/2015/fwd-aug2015-vars.php');

  // General show header with all relevant script/link tags
  include($root . '/includes/show-header.php');
?> 

<!-- 
  The body must have three things
  1. Show abbreviation as a class name
    - This is a trigger to build the sidebar nagivation items with the show page modules
  2. 'showPage' class as this provides showpage based stylings that are not apart of the home page
  3. 'showPage' id for JS triggers
 -->
<body class="fwd showPage" id="showPage">
<!-- 
The '$hero' statement checks to see if there is a hero variable available
if so, it generate embeds the hero class name from the show-specific variables document
into the span tag and creatse the hero image for the background. 
 -->
<?php if ($hero) : ?>
    <span id="top" class="<?php echo $hero; ?>"></span>
<?php endif; ?>
<div id="wrapper">
    <!-- Navigation-->  
    <div id="nav-col">
      <div id="nav">
        <?php include($root . "/includes/main-nav.php"); ?>
        <?php include($root . "/includes/main-nav-fwd-social.php"); ?>
      </div>
    </div> <!-- End Navigation --> 
  
    <!-- Content--> 
    <div id="main-col">
      <?php if ($hero) : ?>
        <?php include($root . '/includes/main-hero-container.php'); ?>
      <?php else : ?>
        <?php include($root . '/includes/new-template-show-header.php'); ?>
      <?php endif; ?>

      <?php include($root . '/includes/_v2/v2-show-description.php'); ?>

      <?php include($root . '/includes/fwd/2015/fwd-forms.php'); ?>  

      <?php include($root . '/includes/fwd/2015/fwd-aug2015-floorplan.php'); ?>      

      <?php include($root . '/includes/_partials/partial-hotel.php'); ?>  

      <?php include($root . '/includes/_partials/partial-gallery.php'); ?>  
    
      <!-- BLANK SPACE-->
      <div style="float:left; clear:both; height:300px;"></div>
      <!-- BLANK SPACE-->
    
    </div><!-- end main col-->

</div><!-- end wrapper-->

<?php 

// This footer houses all the footer markup
// and all the javascript scripts included on the page
// as well as tracking scripts
include($root . '/includes/new-show-footer.php'); ?>