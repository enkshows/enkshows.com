<?php 
// EACH SHOW PAGE HAS ITS OWN VARIABLES FILE
// THIS TEMPLATE IS A STARTER FILE TO GENERATE A UNIQUE VARIABLES FILE FOR EACH SHOW
// THESE VARIABLES ARE HELPERS TO AUTOMATE CONTENT IN MODULES THROUGHOUT THE PAGES

// - NOTE - some general show information could be partialed out
// - NOTE - into a global file to be included 

// The show name is used throughout the file 
$showname   = //  'Coterie';

// show venue - usually Javitts or Piers 92/94
$venue      = //  'Javits Center';

// This is used to generate the content within the show header
$city       = //  'NYC';

// this determines which google map is displayed and which 
// and which hotel/travel module to display
$map        = //  'javits';

// google maps latitude
$lat        = //  '40.757859';
// google maps longitude
$long       = //  '-74.002561';

// Date string to use in header text
$dates      = //  'September 19.20.21';

// Month string to use throughout document - like the roster
$month      = //  'September';

// year text to use for roster
$year       = //  '2015';

// Show span string to use for the 'dates' module
$showspan   = //  'Saturday/Sunday, 9am - 6pm • Monday, 9am - 5pm';

// Locations string to use for the header module
$location   = //  'September 19.20.21 @ Javits Center . NYC';

// Day 1,2,3 strings are used for the travel module
$dayone     = //  'Saturday, September 19 / 9am-6pm';
$daytwo     = //  'Sunday, September 20 / 9am-6pm';
$daythree   = //  'Monday, September 21 / 9am-5pm';

// Parking coupons link for the hotel/travel section
// Parking coupon is only valid for the Javits Location
// This will automatically generate in the hotel/travel module
// if the map is set to Javits
$parking    = //  'https://mpsparking.com/view_special_coupon?coupon=88';

// Hotel link for our Hudson Hotel partner
$coupon     = //  'https://www.morganshotelgroup.com/special/COTERIE-September2015';
// Hotel link for our general Travel Partners partner
$hotel      = //  'https://compass.onpeak.com/e/71cof15';

// Vimeo link for show video that gets embedded into the video partial
$video      = //  '//player.vimeo.com/video/112816633?title=0&amp;byline=0&amp;portrait=0&amp;color=ff3333';

// Genrates a string that is the url location for the gallery images
// The 'IMG_FC' variable is a shorthand utilities for the proper show image folder
// refer to the global 'variables.php' document fo rother shorthand utilities variables
$gallery    = //  IMG_FC . '2015/sep/fc-sep2015-gallery';

// Postano variable is used to trigger the postano module at the top of the page
// the postano module is only pushed to the top of the page the day prior to a show
// turning on this flag you must comment out the '$hero' and '$header' variables
// The template will generate all other aspects of code to remove the postano module
// from the highlights section and display it at the top of the page, while removing
// the hero or header from the top of the page
$postano    =   //true;
// The $hero varialbe adds a class to the '<span>' tag in the template to trigger
// a full bleed hero image
// make sure to comment out the '$postano' and '$header' variables to ensure the 
// hero is displayed without error. 
$hero       =   //'fc-feb2015-hero';
// This adds the approrpaite class name to the header module 
// Applying this class name should generate a background image 
// on the header module
$header     = //  'fc-sep2015-header';

// Address array that gets embedded into the hotel/travel module
$address    = // array(
  //'11th Ave @ 37th St.',
  //'NYC 10019'
  //);
?>