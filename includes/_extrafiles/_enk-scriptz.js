$(document).ready(function(){
   $('.caption, .captionShow').hide();
   
   $('.element').hover(function () {
     $(this).find('.caption, .captionShow').stop(true, true).slideDown("fast");
   },
   // callback
   function(){
     $(this).find('.caption, .captionShow').stop(true, true).slideUp("fast");
   });

   // THIS CREATES THE STRIPING BACKGROUND ON THE ROSTERS
   // USE CSS FOR THIS INSTEAD. 
   $("tr:odd").css("background", "url(../img/stripe-light-bg1.png) repeat");

   // This adds an 'ext' class to any external link for tracking
   // Horrible,  but works for now. 
   $('a').each(function(){
      var reg_exp = new RegExp('/' + window.location.host + '/');
      if (!reg_exp.test($(this).attr('href'))) {
        $(this).addClass("ext");
      }
   });

   // Once that .ext class is applied, we are tracking it here. 
   $(".ext").on("click", function(){
     _gaq.push(['_trackEvent', 'Outbound Links', 'Click', $(this).attr('href')]);
   })

   // Preloaded images for art tiles. 
   // Not sure why this is done via JS. 
   // TODO: Inspect further to see if this is overriding the CSS 
   // var preloads = [
   //     '../img/home/calendar_homeLg.jpg',
   //       '../img/home/calendar_homeLg_over.jpg',
   //       '../img/home/showbox/ccHover.png',
   //       '../img/home/showbox/circuitHover.png',
   //       '../img/home/showbox/coterieHover.png',
   //       '../img/home/showbox/vegasHover.png',
   //       '../img/home/showbox/intermezzoHover.png',
   //       '../img/home/showbox/shanghaiHover.png',
   //       '../img/home/showbox/soleHover.png',
   //       '../img/home/showbox/tmrwHover.png',
   //       '../img/home/showbox/wsaHover.png'
   //     ];

   // $(preloads).each(function(){
   //     $('<img />')[0].src = this;
   // });

   // hover image for calendar box thing .
   // TODO: figure out what calendar box thing is...
   $('#calendarBox').hover(function() {
     $('.showbox-calendar').stop().css('background-image', 'url(../img/home/calendar_homeLg_over.jpg)');
   },
   function() {
     $('.showbox-calendar').stop().css('background-image', 'url(../img/home/calendar_homeLg.jpg)');
   });


   // Create a hover effect on any linked image
   $("a img").hover(function() {
     $(this).stop().animate({opacity: "0.6"}, 'slow');
   },
   function() {
     $(this).stop().animate({opacity: "1"}, 'slow');
   });



   


});


$(document).ready(function(){
$(this).find('.fade2').stop().css({opacity:0}); 
  $(".image-sm").hover( 
        function(){
            $(this).find('.fade2').stop().animate({
              opacity:1
              },250);
        }, 
        
        function(){
             $(this).find('.fade2').stop().animate({
              opacity:0
              },250);
        }
  ); 
  
});




//
// CONCIERGE, EXHIBITOR, FLOOR PLANS, AMENITIES AND INTERNATIONAL MODULE
//


// $(document).ready(function(){

//   var currentSection;
  
//   window.onload = onLoaded;
  
//   // make sure all script is loaded
//   function onLoaded()
//   {
//     window.initExhibitorsList();
//     window.initFloorPlans();
//     window.initConciege();
//     window.initAmenities();
//     window.initVisas();
//   }
  
// ////////////////////
// ///////////////////Exhibitors ("Collections" module)
// //////////////////  
  
//   window.initExhibitorsList = function()
//   {
//     var _self = this;
//     for(var i=1; i<=18; i++) {
//       var content = $("#exhibitors-content"+i);
//       content.css("display", "none")    
//     }
    
//     // assign mouse actions
//     $(".showcol-btn1").mouseover( onBtnRollOver )
//     .mouseout( onBtnRollOut )
//     .click( onBtnClick );
    
//     // show first section as default section
//     toggleSection(1);
//   }
  
//   function onBtnRollOver()
//   {
//     // or do you own rollover
//     //$(this).animate({"opacity":"0.5"}, 200);
//   }
  
//   function onBtnRollOut()
//   {
//     // or do you own rollout
//     //$(this).animate({"opacity":"1"}, 200);
//   }
  
//   function onBtnClick()     
//   {
//     $( ".showcol-btn1.active" ).removeClass( "active" );
//     $( this ).addClass( "active" );
//     toggleSection( this.id.substring(3) );
    
//   }
  
//   function toggleSection(id)
//   {
//     if(currentSection != null) {
//       currentSection.css("display", "none");
//     }
//     var newSection = $("#exhibitors-content"+id);
//     newSection.css("display", "block");
//     currentSection = newSection;
//   }


// }); 


//////////////
////////////// FLOOR PLANS module
//////////////

// $(document).ready(function(){
  
  
//     var currentSection;
  
//   // make sure all script is loaded
//   window.initFloorPlans = function()
//   {
//     var _self = this;
//     for(var i=1; i<=18; i++) {
//       var content = $("#floorplans-content"+i);
//       content.css("display", "none")    
//     }
    
//     // assign mouse actions
//     $(".showcol-btn2").mouseover( onBtnRollOver )
//     .mouseout( onBtnRollOut )
//     .click( onBtnClick );
    
//     $(".showcolEmpty2").mouseover( onBtnRollOver )
//     .mouseout( onBtnRollOut )
//     .click( onBtnClick );
    
//     // show first section as default section
//     toggleSection(1);
    
//     if( window.location.hash === "#floorplans-venue" )
//     {
//       toggleSection(1);
//     }
//     if( window.location.hash === "#floorplans-javits" )
//     {
//       toggleSection(2);
//     }
//     if( window.location.hash === "#floorplans-pier94" )
//     {
//       toggleSection(3);
//     }   
//   }
  
//   function onBtnRollOver()
//   {
//     // or do you own rollover
//     //$(this).animate({"opacity":"0.5"}, 200);
//   }
  
//   function onBtnRollOut()
//   {
//     // or do you own rollout
//     //$(this).animate({"opacity":"1"}, 200);
//   }
  
//   function onBtnClick()
//   {
//     toggleSection( this.id.substring(3), this );

//   }
  
//   function toggleSection(id)
//   {
//     if(currentSection != null) {
//       currentSection.css("display", "none");
//     }

//     $( ".showcol-btn2.active" ).removeClass( "active" );
//     $( ".floorplans-btn" + id ).addClass( "active" );

//     var newSection = $("#floorplans-content"+id);
//     newSection.css("display", "block");
//     currentSection = newSection;
//   }
  
  
// }); 



////////////////////
/////////////////// CONCIERGE ("Hotel + Travel" Module)
//////////////////

// $(document).ready(function(){
  
//   var currentSection;
  
//   // make sure all script is loaded
//   window.initConciege = function()
//   {
//     var _self = this;
//     for(var i=1; i<=18; i++) {
//       var content = $("#concierge-content"+i);
//       content.css("display", "none")    
//     }
    
//     // assign mouse actions
//     $(".showcol-btn3").mouseover( onBtnRollOver )
//     .mouseout( onBtnRollOut )
//     .click( onBtnClick );
    
//     $(".showcolEmpty3").mouseover( onBtnRollOver )
//     .mouseout( onBtnRollOut )
//     .click( onBtnClick );
    
//     // show first section as default section
//     toggleSection(1);
//   }
  
//   function onBtnRollOver()
//   {
//     // or do you own rollover
//     //$(this).animate({"opacity":"0.5"}, 200);
//   }
  
//   function onBtnRollOut()
//   {
//     // or do you own rollout
//     //$(this).animate({"opacity":"1"}, 200);
//   }
  
//   function onBtnClick()
//   {
//     $( ".showcol-btn3.active" ).removeClass( "active" );
//     $( this ).addClass( "active" );
//     toggleSection( this.id.substring(3) );
//   }
  
//   function toggleSection(id)
//   {
//     if(currentSection != null) {
//       currentSection.css("display", "none");
//     }
//     var newSection = $("#concierge-content"+id);
//     newSection.css("display", "block");
//     currentSection = newSection;
//   }
// });




// ///////////////////////
// ////////////////////// AMENITIES Module
// //////////////////////

// $(document).ready(function(){
  
//   var currentSection;
  
//   // make sure all script is loaded
//   window.initAmenities = function()
//   {
//     var _self = this;
//     for(var i=1; i<=18; i++) {
//       var content = $("#amenities-content"+i);
//       content.css("display", "none")    
//     }
    
//     // assign mouse actions
//     $(".showcol-btn4").mouseover( onBtnRollOver )
//     .mouseout( onBtnRollOut )
//     .click( onBtnClick );
    
//     // show first section as default section
//     toggleSection(1);
//   }
  
//   function onBtnRollOver()
//   {
//     // or do you own rollover
//     //$(this).animate({"opacity":"0.5"}, 200);
//   }
  
//   function onBtnRollOut()
//   {
//     // or do you own rollout
//     //$(this).animate({"opacity":"1"}, 200);
//   }
  
//   function onBtnClick()
//   {
//     $( ".showcol-btn4.active" ).removeClass( "active" );
//     $( this ).addClass( "active" ); 
//     toggleSection( this.id.substring(3) );
//   }
  
//   function toggleSection(id)
//   {
//     if(currentSection != null) {
//       currentSection.css("display", "none");
//     }
//     var newSection = $("#amenities-content"+id);
//     newSection.css("display", "block");
//     currentSection = newSection;
//   }
// });


///////////////////////
////////////////////// International ("Visas" Module)
//////////////////////

// $(document).ready(function(){
  
//   var currentSection;
  
//   // make sure all script is loaded
//   window.initVisas = function()
//   {
//     var _self = this;
//     for(var i=1; i<=18; i++) {
//       var content = $("#visas-content"+i);
//       content.css("display", "none")    
//     }
    
//     // assign mouse actions
//     $(".showcol-btn5").mouseover( onBtnRollOver )
//     .mouseout( onBtnRollOut )
//     .click( onBtnClick );
    
//     // show first section as default section
//     toggleSection(1);
//   }
  
//   function onBtnRollOver()
//   {
//     // or do you own rollover
//     //$(this).animate({"opacity":"0.5"}, 200);
//   }
  
//   function onBtnRollOut()
//   {
//     // or do you own rollout
//     //$(this).animate({"opacity":"1"}, 200);
//   }
  
//   function onBtnClick()
//   {
//     $( ".showcol-btn5.active" ).removeClass( "active" );
//     $( this ).addClass( "active" );   
//     toggleSection( this.id.substring(3) );
//   }
  
//   function toggleSection(id)
//   {
//     if(currentSection != null) {
//       currentSection.css("display", "none");
//     }
//     var newSection = $("#visas-content"+id);
//     newSection.css("display", "block");
//     currentSection = newSection;
//   }
// });







// 
// NAVIGATION DOM MANIPULATION
//
$(document).ready(function(){


// Main Nav Links on CURRENT Show Page
  //var $newsHome = '<li><a href="#recent-news" title="Recent News">Recent News</a></li>'
  var $companyShow = '<li><a href="../#about" title="About">About</a></li>'
  var $attendShow = '<li><a href="../#attend" title="Attendee/Press Registration">Attend</a></li>'
  var $exhibitShow = '<li><a href="../#exhibit" title="Exhibitor Application">Exhibit</a></li>'
  var $pressShow = '<li><a href="../#press" title="Press">Press</a></li>'
  var $enktravelShow = '<li><a href="../#travel" title="Travel">Travel</a></li>'
  var $contactShow = '<li><a href="../#contact" title="Contact">Contact</a></li>'
  var $theshowsShow = '<li><a href="../#home" title="Shows">Shows</a>'
// Change around the order of the shows below to change order of Main Nav links on Show page Navigation 

  $('#navFirstShow').append( $companyShow, $attendShow, $exhibitShow, $pressShow, $enktravelShow, $contactShow, $theshowsShow );  
  
  
// Show Links on Current Show Pages 
  var $acShow = '<li><a href="http://www.enkshows.com/circuit" title="Accessorie Circuit">Circuit</a> <ul class="nav_third" id="navThirdac"> </ul> </li>'
  var $icShow = '<li><a href="http://www.enkshows.com/intermezzo" title="Intermezzo Collections" >Intermezzo</a> <ul class="nav_third" id="navThirdic"> </ul> </li>'
  var $ccShow = '<li><a href="http://www.enkshows.com/childrensclub" title="Childrens Club">Childrens Club</a> <ul class="nav_third" id="navThirdcc"> </ul> </li>'
  var $vegasShow = '<li><a href="http://www.enkshows.com/enkvegas" title="ENKVegas" >ENKVEGAS</a><ul class="nav_third" id="navThirdvegas"> </ul> </li>'
  var $wsaShow = '<li><a href="http://www.magiconline.com/wsa" target="_blank" title="WSA" >WSA</a> <ul class="nav_third" id="navThirdwsa"> </ul> </li>'
  var $coterieShow = '<li><a href="http://www.enkshows.com/coterie" title="Fashion Coterie" >Coterie</a><ul class="nav_third" id="navThirdcoterie"> </ul> </li>'
  var $soleShow = '<li><a href="http://www.enkshows.com/sole" title="Sole Commerce" >Sole Commerce</a><ul class="nav_third" id="navThirdsole"> </ul> </li>'
  var $tmrwShow = '<li><a href="http://www.enkshows.com/tmrw" title="TMRW" >TMRW</a><ul class="nav_third" id="navThirdtmrw"> </ul> </li>'
// Change around the order of the shows below to change order of show links on Show page Navigation 
  // $('#navSecondShow').append( $ccShow, $acShow, $coterieShow, $vegasShow, $icShow, $soleShow, $tmrwShow );  
  
  
// Main Nav Links on ARCHIVE Show Page 
  //var $newsHome = '<li><a href="#recent-news" title="Recent News">Recent News</a></li>'
  var $companyExhibitor = '<li><a href="../../../#about" title="About">About</a></li>'
  var $attendExhibitor = '<li><a href="../../../#attend" title="Attendee/Press Registration">Attend</a></li>'
  var $exhibitExhibitor = '<li><a href="../../../#exhibit" title="Exhibitor Application">Exhibit</a></li>'
  var $pressExhibitor = '<li><a href="../../../#press" title="Press">Press</a></li>'
  var $enktravelExhibitor = '<li><a href="../../../#travel" title="Travel">Travel</a></li>'
  var $contactExhibitor = '<li><a href="../../../#contact" title="Contact">Contact</a></li>'
  var $theshowsExhibitor = '<li><a href="../../../#home" title="Shows">Shows</a>'
// Change around the order of the shows below to change order of Main Nav links on Home page Navigation   
  $('#navFirstArchive').append( $companyExhibitor, $attendExhibitor, $exhibitExhibitor, $pressExhibitor, $enktravelExhibitor, $contactExhibitor, $theshowsExhibitor );
  


// Module Links on Show pages (Nav Third) (add more vars to create new links)
  var $collections = '<li><a href="#collections">Collections</a></li>'
  var $floorplan = '<li><a href="#floorplans">Floor Plans</a></li>'
  var $concierge = '<li><a href="#hotel-travel">Hotel + Amenities</a></li>'
  var $gallery = '<li><a href="#gallery">Gallery</a></li>'
  var $highlights = '<li><a href="#highlights">Highlights</a></li>'
  var $video = '<li><a href="#video">Video</a></li>'
  var $amenities = '<li><a href="#amenities">Amenities</a></li>'
  var $international = '<li><a href="#visas">Visas</a></li>'
  var $overview = '<li><a href="#overview">Overview</a></li>'
    //var $contact = '<li><a href="#contact">Contact</a></li>'

    // extra 
    var $music = '<li><a href="#music">Music</a></li>';
    var $sponsors = '<li><a href="#sponsors">Sponsors</a></li>';


// CHILDRENS CLUB LINKS


      // if( $("body").hasClass("childrensClub") == true) 
      //       { 
      //         $('#navThirdcc').prev().addClass( "activeLink" );
      //         $('#navThirdcc').append($floorplan, $concierge, $video, $gallery); }
      //   else { $('#navThirdcc').append(); }

        
      //   if( $("body").hasClass("cc-10-14") == true) { 
      //     $('#navThirdcc').prev().addClass( "activeLink" );
      //     $('#navThirdcc').append($highlights, $floorplan, $concierge, $gallery); 
      //   } else { $('#navThirdcc').append(); }

      //   if( $("body").hasClass("cc-08-14") == true) { 
      //     $('#navThirdcc').prev().addClass( "activeLink" );
      //     $('#navThirdcc').append($highlights, $collections, $floorplan, $concierge, $video, $gallery); 
      //   } else { $('#navThirdcc').append(); }

//CIRCUIT LINKS
    //circuit_jan13 third branch links
    
    if( $("body").hasClass("ac-08-14") == true) 
        { 
          $('#navThirdac').prev().addClass( "activeLink" );
          $('#navThirdac').append($highlights, $collections, $floorplan, $concierge, $video, $gallery); }
    else { $('#navThirdac').append(); } 

    if( $("body").hasClass("ac-01-15") == true) { 
          $('#navThirdic').prev().addClass( "activeLink" );
          $('#navThirdic').append($highlights, $collections, $floorplan, $concierge, $gallery); }
    else { $('#navThirdic').append(); } 

      if( $("body").hasClass("acPage") == true) 
          { 
            $('#navThirdac').prev().addClass( "activeLink" );
            $('#navThirdac').append($highlights, $collections, $floorplan, $concierge, $video, $gallery); }
      else { $('#navThirdac').append(); } 

//INTERMEZZO LINKS
   
    if( $("body").hasClass("ic-08-14") == true) { 
          $('#navThirdic').prev().addClass( "activeLink" );
          $('#navThirdic').append($highlights, $collections, $floorplan, $concierge, $video, $gallery); }
    else { $('#navThirdic').append(); } 

    if( $("body").hasClass("ic-01-15") == true) { 
          $('#navThirdic').prev().addClass( "activeLink" );
          $('#navThirdic').append($highlights, $collections, $floorplan, $concierge, $gallery); }
    else { $('#navThirdic').append(); } 


    if( $("body").hasClass("icPage") == true) 
        { 
          $('#navThirdic').prev().addClass( "activeLink" );
            $('#navThirdic').append($highlights, $collections, $floorplan, $concierge, $video, $gallery); }
        else { $('#navThirdic').append(); } 
    
  
//COTERIE Links
      //coterie_sept13 third branch links 
        if( $("body").hasClass("coterie") == true) 
            { 
              $('#navThirdcoterie').prev().addClass( "activeLink" );
              $('#navThirdcoterie').append($music, $highlights, $collections, $floorplan, $concierge, $sponsors, $gallery); }
        else { $('#navThirdcoterie').append(); }
        
      //coterie_feb14 third branch links  
        if( $("body").hasClass("coterieFeb14Page") == true) 
            { 
              $('#navThirdcoterie').prev().addClass( "activeLink" );
              $('#navThirdcoterie').append($concierge); }
        else { $('#navThirdcoterie').append(); }  


    
    
//SOLE links    
      //sole third branch links 
        if( $("body").hasClass("solePage") == true) 
            { 
              $('#navThirdsole').prev().addClass( "activeLink" );
              $('#navThirdsole').append($highlights, $collections, $floorplan, $concierge, $gallery); }
        else { $('#navThirdsole').append(); }
        
      //sole_feb14 third branch links 
        if( $("body").hasClass("soleFeb14Page") == true) 
            { 
              $('#navThirdsole').prev().addClass( "activeLink" );
              $('#navThirdsole').append($concierge); }
        else { $('#navThirdsole').append(); }
  
//TMRW Links                  
      //tmrw third branch links 
        if( $("body").hasClass("tmrwPage") == true) 
            { 
              $('#navThirdtmrw').prev().addClass( "activeLink" );
              $('#navThirdtmrw').append($highlights, $collections, $floorplan, $concierge, $gallery); }
        else { $('#navThirdtmrw').append(); }
        
      //tmrw third branch links 
        if( $("body").hasClass("tmrwFeb14Page") == true) 
            { 
              $('#navThirdtmrw').prev().addClass( "activeLink" );
              $('#navThirdtmrw').append($concierge); }
        else { $('#navThirdtmrw').append(); } 
              

//VEGAS links
    if( $("body").hasClass("enkVegas") == true) 
        { 
          $('#navThirdvegas').prev().addClass( "activeLink" );
          $('#navThirdvegas').append($highlights, $collections, $floorplan, $concierge, $video); }
    else { $('#navThirdvegas').append(); }

    if( $("body").hasClass("ev-feb2015") == true) 
        { 
          $('#navThirdvegas').prev().addClass( "activeLink" );
          $('#navThirdvegas').append($highlights, $collections, $floorplan, $video, $gallery); }
    else { $('#navThirdvegas').append(); }
    



//wsa third branch links  
  if( $("body").hasClass("wsaPage") == true) 
      { 
        $('#navThirdwsa').prev().addClass( "activeLink" );
        $('#navThirdwsa').append($highlights, $collections, $floorplan, $concierge, $amenities, $international, $gallery); }
  else { $('#navThirdwsa').append(); }
  
  //wsa third branch links  
  if( $("body").hasClass("wsaPageAug") == true) 
      { 
        $('#navThirdwsa').prev().addClass( "activeLink" );
        $('#navThirdwsa').append($highlights, $collections, $concierge, $gallery); }
  else { $('#navThirdwsa').append(); }

// Social links
  var $calendar = '<a id="calendar" target="_blank" href="http://www.enkshows.com/company/calendar.html" title="All Shows Calendar"><span>http://www.enkshows.com/company/calander.html</span></a>'
  var $fb = '<a id="fb" target="_blank" href="https://www.facebook.com/ENKInternational" title="Facebook"><span>https://www.facebook.com/ENKInternational</span></a>'
  var $twit = '<a id="twit" target="_blank" href="https://twitter.com/ENKSHOWS" title="Twitter"><span>https://twitter.com/ENKSHOWS</span></a>'
  var $instagram = '<a id="instagram" target="_blank" href="http://instagram.com/enkshows" title="Instagram"><span>http://instagram.com/enkshows</span></a>'
  
// $('.socialNav').append($calendar, $fb, $twit, $instagram);


// Social links CC
  var $fbCC = '<a id="fb" target="_blank" href="https://www.facebook.com/Childrens.Club" title="Facebook"><span>https://www.facebook.com/Childrens.Club</span></a>'
  var $twitCC = '<a id="twit" target="_blank" href="https://twitter.com/ChildrensClub" title="Twitter"><span>https://twitter.com/ChildrensClub</span></a>'
  var $instagramCC = '<a id="instagram" target="_blank" href="http://instagram.com/childrensclub" title="Instagram"><span>http://instagram.com/childrensclub</span></a>'

$('.socialCC').append($calendar, $fbCC, $twitCC, $instagramCC);


// Social links FC
  // var $fbFC = '<a id="fb" target="_blank" href="https://www.facebook.com/ENKcoterie" title="Facebook"><span>https://www.facebook.com/ENKcoterie</span></a>'
  // var $twitFC = '<a id="twit" target="_blank" href="https://twitter.com/ENKCoterie" title="Twitter"><span>https://twitter.com/ENKCoterie</span></a>'
  // var $instagramFC = '<a id="instagram" target="_blank" href="http://instagram.com/enkcoterie/" title="Instagram"><span>http://instagram.com/enkcoterie/</span></a>'
// 
// $('.socialFC').append($calendar, $fbFC, $twitFC, $instagramFC);


// Social links AC
  var $fbAC = '<a id="fb" target="_blank" href="https://www.facebook.com/ENKaccessoriecircuit" title="Facebook"><span>https://www.facebook.com/ENKaccessoriecircuit</span></a>'
  var $twitAC = '<a id="twit" target="_blank" href="https://twitter.com/ENKCircuit" title="Twitter"><span>https://twitter.com/ENKCircuit</span></a>'
  var $instagramAC = '<a id="instagram" target="_blank" href="http://instagram.com/enkcircuit" title="Instagram"><span>http://instagram.com/enkcircuit</span></a>'

$('.socialAC').append($calendar, $fbAC, $twitAC, $instagramAC);


// Social links IC
  var $fbIC = '<a id="fb" target="_blank" href="https://www.facebook.com/EnkIntermezzoCollections" title="Facebook"><span>https://www.facebook.com/EnkIntermezzoCollections</span></a>'
  var $twitIC = '<a id="twit" target="_blank" href="https://twitter.com/ENKIntermezzo" title="Twitter"><span>https://twitter.com/ENKIntermezzo</span></a>'
  var $instagramIC = '<a id="instagram" target="_blank" href="http://instagram.com/enkintermezzo" title="Instagram"><span>http://instagram.com/enkintermezzo</span></a>'

$('.socialIC').append($calendar, $fbIC, $twitIC, $instagramIC);

// Social links Vegas
  var $fbVegas = '<a id="fb" target="_blank" href="https://www.facebook.com/ENKVEGAS" title="Facebook"><span>https://www.facebook.com/ENKVEGAS</span></a>'
  var $twitVegas = '<a id="twit" target="_blank" href="https://twitter.com/ENK_vegas" title="Twitter"><span>https://twitter.com/ENKIntermezzo</span></a>'
  var $instagramVegas = '<a id="instagram" target="_blank" href="http://instagram.com/enkvegas" title="Instagram"><span>http://instagram.com/enkvegas</span></a>'

$('.socialVegas').append($calendar, $fbVegas, $twitVegas, $instagramVegas);


});