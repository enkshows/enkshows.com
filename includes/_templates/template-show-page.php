<?php 
  $name     = "Coterie";
  $content  = "An International fashion exhibition in the U.S. featuring contemporary to traditional women’s ready-to-wear. Twice a year in NYC, concurrent with Sole Commerce and TMRW";
  $keyword  = "Fashion Coterie, Coterie, womens trade show, womans trade show, international fashion trade show, sole commerce, tmrw, javits fashion, javits";

  // This MUST be included for all other files to work
  // This 'variables.php' file is global utility variables
  // to help with file paths and URLS
  // directory path will change if this is a main show page or 
  // archived show page (EX: enkshows.com/coterie VS enkshows.com/coterie/2015/feb)
  include('../includes/variables.php'); 

  // MathGaurd powers our form Captcha. Must be included
  require($root . '/bin/ClassMathGuard.php');

  // Show specific variables
  include($root . '/includes/fc/2015/fc-sep2015-vars.php');

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
<body class="fc showPage" id="showPage">
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
        <?php include($root . "/includes/main-nav-social.php"); ?>
      </div>
    </div> <!-- End Navigation --> 
  
    <!-- Content--> 
    <div id="main-col">
      <!-- Show Hero / Info Container 
        This if/else statement includes the appropriate file based on 
        the show specific variables folder. It will display a file bsaed 
        on which variable is displayed (not commented out)

        The only file name that will need to change is the file being included in the $postano section
        Since this file changes per show, per event we must create a new file for any variances and 
        include it here. 
      -->
      <?php if ( $postano) : ?>
        <?php include($root . '/includes/fc/2015/fc-feb2015-postano.php'); ?>
      <?php elseif ( $hero) : ?>
        <?php include($root . '/includes/main-hero-container.php'); ?>
      <?php else : ?>
        <?php include($root . '/includes/new-template-show-header.php'); ?>
      <?php endif; ?>


      <!-- Show Descriptions 
        This file generates the markup/content from the 
        'includes/_content/_content-show-descriptions.php' file. If 
        any content changes need to happen - they should happen in this folder. 

        The file 
        '/includes/_v2/v2-show-description.php' is strictly a 
        configuration file that only outputs code. 
      -->
      <?php include($root . '/includes/_v2/v2-show-description.php'); ?>
    
      <!-- Info Links/forms 
        Houses the FC forms. The 2015 forms file is strictly a partial that houses 
        other partials to include into the document. 
      -->  
      <?php include($root . '/includes/fc/2015/fc-2015-forms.php'); ?>  

      <!-- Soundcloud Module 
        Coterie is the only show that includes soundcloud. 
      --> 
      <?php include($root . '/includes/fc/2015/fc-sep2015-soundcloud.php'); ?>

      <!-- Roster Module 
        Each show has its own Roster module as the content varies every show. 
        The roster file leverages a few variables like $month / $year to generate the 
        module header 
      --> 
      <?php include($root . '/includes/fc/2015/fc-feb2015-roster-post.php'); ?>

      <!-- Floorplan Module 
        Houses the floor plan module. 
        This file gets changed to update the image of the floorplan and the floorplan PDF links
      --> 
      <?php include($root . '/includes/fc/2015/fc-sep2015-floorplan.php'); ?>      

      <!-- Hotel + Travel Module 
        This file holds other partials that generate markup based on the show-specific 
        variables file. This fiel relies on the $map, $hotel, $coupon, $address, $showdates variables
      --> 
      <?php include($root . '/includes/_partials/partial-hotel.php'); ?>  

      <!-- Gallery 
        This file outputs markup to create the gallery images. 
        This file relies on the $gallery variable in the show-specific variables file. 
      --> 
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