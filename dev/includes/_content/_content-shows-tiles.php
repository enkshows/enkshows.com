<?php 
// this config file powers the home page.
// enter in the show information and it generates
// the necessary mark up for the tiles
// and the attend modules
$shows = array(
    // each `array` can be thought about as a 'show tile'
    // within each 'show tile' all displayed information is necessary
    // to power the tile. 

    // name: the name of the show - this should match the $showname variable in each show speficic vars.php file
    // abbreviation: this sets the background image for each tile
    // dates: sets the h1 tag within each show tile
    // location: sets the h2 tag within each show tile
    // year: not currently being set anywhere
    // attend: set to true to display a tile in the 'attend' section 
          // NOTE: the only tile that should not be set is the Shop The Floor tile
    // link: links the showtile to its respective show

    array(
      // show information
      "name" => "Children's Club",
      "abbreviation" => "cc",
      "dates" => "August 2.3.4",
      "location" => "Javits.NYC",
      "year" => "2015",
      "attend" => true,
      "link" => "http://www.enkshows.com/childrensclub"
    ),
    array(
      // show information
      "name" => "Accessorie Circuit",
      "abbreviation" => "ac",
      "dates" => "August 2.3.4",
      "location" => "Javits.NYC",
      "year" => "2015",
      "attend" => true,
      "link" => "http://www.enkshows.com/circuit"
    ),
    array(
      // show information
      "name" => "Intermezzo Collections",
      "abbreviation" => "ic",
      "dates" => "August 2.3.4",
      "location" => "Javits.NYC",
      "year" => "2015",
      "attend" => true,
      "link" => "http://www.enkshows.com/intermezzo"
    ),
    array(
      // show information
      "name" => "FWD",
      "abbreviation" => "fwd",
      "dates" => "August 2.3.4",
      "location" => "Javits.NYC",
      "year" => "2015",
      "attend" => true,
      "link" => "http://www.enkshows.com/fwd"
    ),   
    array(
      // show information
      "name" => "Project Womens",
      "abbreviation" => "ev",
      "dates" => "August 17.18.19",
      "location" => "Mandalay Bay.LV",
      "year" => "2015",
      "attend" => true,
      "link" => "http://www.enkshows.com/enkvegas"
    ),
    array(
      // show information
      "name" => "Coterie",
      "abbreviation" => "fc",
      "dates" => "September 19.20.21",
      "location" => "Javits.NYC",
      "year" => "2015",
      "attend" => true,
      "link" => "http://www.enkshows.com/coterie"
    ),
    array(
      // show information
      "name" => "TMRW",
      "abbreviation" => "tmrw",
      "dates" => "September 19.20.21",
      "location" => "Javits.NYC",
      "year" => "2015",
      "attend" => true,
      "link" => "http://www.enkshows.com/tmrw"
    ),
    array(
      // show information
      "name" => "Sole Commerce",
      "abbreviation" => "sc",
      "dates" => "September 19.20.21",
      "location" => "Javits.NYC",
      "year" => "2015",
      "attend" => true,
      "link" => "http://www.enkshows.com/sole"
    ),
    array(
      // show information
      "name" => "Children's Club",
      "abbreviation" => "cc",
      "dates" => "October 18.19.20",
      "location" => "Javits.NYC",
      "year" => "2015",
      "attend" => true,
      "link" => "http://www.enkshows.com/childrensclub/2015/oct"
    ),
    array(
      // show information
      // this should never have the "attend" value
      "name" => "Shop The Floor",
      "abbreviation" => "stf",
      "dates" => "24/7 . 365 Days",
      "location" => "www.shopethefloor.com",
      "link" => "http://www.shopethefloor.com"
    ),
    
);

?>

