

//
// Show/Hide Press
//

$(document).ready(function(){
  $('.show-tile:nth-child(odd)').css({'margin-right': '0'});
  $('.caption, .captionShow').hide();
  
  $('.element').hover(
  function () {
    $(this).find('.caption, .captionShow').stop(true, true).slideDown("fast");
  },
  function(){
    $(this).find('.caption, .captionShow').stop(true, true).slideUp("fast");
  });

});




//
// Collections Table odd/even background
//
  $(document).ready(function(){
    $("tr:odd").css("background", "url(../img/stripe-light-bg1.png) repeat");
  
  });


//
// rollover on calendar showbox
//

  $(document).ready(function(){
    var preloads = [
        '../img/home/calendar_homeLg.jpg',
          '../img/home/calendar_homeLg_over.jpg',
          '../img/home/showbox/ccHover.png',
          '../img/home/showbox/circuitHover.png',
          '../img/home/showbox/coterieHover.png',
          '../img/home/showbox/vegasHover.png',
          '../img/home/showbox/intermezzoHover.png',
          '../img/home/showbox/shanghaiHover.png',
          '../img/home/showbox/soleHover.png',
          '../img/home/showbox/tmrwHover.png',
          '../img/home/showbox/wsaHover.png'
        ];

    $(preloads).each(function(){
        $('<img />')[0].src = this;
    });
    
    $('#calendarBox').hover(function() {
      $('.showbox-calendar').stop().css('background-image', 'url(../img/home/calendar_homeLg_over.jpg)');
    },
    function() {
      $('.showbox-calendar').stop().css('background-image', 'url(../img/home/calendar_homeLg.jpg)');
    });

  });


/*
$(document).ready(function() {
  $("div.text-foot").click(function() {               
    $("div.text-foot").toggle(
      function() {
      $("a.more").html("&#8211");
      },
      function() {
      $("a.more").html("+");
      }
    );
  }); 
});

$(this).next(".togglebox").slideToggle("slow");
*/

//
// fade on Image rollovers
//


  $(document).ready(function(){
    $("a img").hover(function() {
      $(this).stop().animate({opacity: "0.6"}, 'slow');
    },
    function() {
      $(this).stop().animate({opacity: "1"}, 'slow');
    });
  });




//
// fade small images
//

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


$(document).ready(function(){

  var currentSection;
  
  window.onload = onLoaded;
  
  // make sure all script is loaded
  function onLoaded()
  {
    window.initExhibitorsList();
    window.initFloorPlans();
    window.initConciege();
    window.initAmenities();
    window.initVisas();
  }
  
////////////////////
///////////////////Exhibitors ("Collections" module)
//////////////////  
  
  window.initExhibitorsList = function()
  {
    var _self = this;
    for(var i=1; i<=18; i++) {
      var content = $("#exhibitors-content"+i);
      content.css("display", "none")    
    }
    
    // assign mouse actions
    $(".showcol-btn1").mouseover( onBtnRollOver )
    .mouseout( onBtnRollOut )
    .click( onBtnClick );
    
    // show first section as default section
    toggleSection(1);
  }
  
  function onBtnRollOver()
  {
    // or do you own rollover
    //$(this).animate({"opacity":"0.5"}, 200);
  }
  
  function onBtnRollOut()
  {
    // or do you own rollout
    //$(this).animate({"opacity":"1"}, 200);
  }
  
  function onBtnClick()     
  {
    $( ".showcol-btn1.active" ).removeClass( "active" );
    $( this ).addClass( "active" );
    toggleSection( this.id.substring(3) );
    
  }
  
  function toggleSection(id)
  {
    if(currentSection != null) {
      currentSection.css("display", "none");
    }
    var newSection = $("#exhibitors-content"+id);
    newSection.css("display", "block");
    currentSection = newSection;
  }


}); 


//////////////
////////////// FLOOR PLANS module
//////////////

$(document).ready(function(){
  
  
    var currentSection;
  
  // make sure all script is loaded
  window.initFloorPlans = function()
  {
    var _self = this;
    for(var i=1; i<=18; i++) {
      var content = $("#floorplans-content"+i);
      content.css("display", "none")    
    }
    
    // assign mouse actions
    $(".showcol-btn2").mouseover( onBtnRollOver )
    .mouseout( onBtnRollOut )
    .click( onBtnClick );
    
    $(".showcolEmpty2").mouseover( onBtnRollOver )
    .mouseout( onBtnRollOut )
    .click( onBtnClick );
    
    // show first section as default section
    toggleSection(1);
    
    if( window.location.hash === "#floorplans-venue" )
    {
      toggleSection(1);
    }
    if( window.location.hash === "#floorplans-javits" )
    {
      toggleSection(2);
    }
    if( window.location.hash === "#floorplans-pier94" )
    {
      toggleSection(3);
    }   
  }
  
  function onBtnRollOver()
  {
    // or do you own rollover
    //$(this).animate({"opacity":"0.5"}, 200);
  }
  
  function onBtnRollOut()
  {
    // or do you own rollout
    //$(this).animate({"opacity":"1"}, 200);
  }
  
  function onBtnClick()
  {
    toggleSection( this.id.substring(3), this );

  }
  
  function toggleSection(id)
  {
    if(currentSection != null) {
      currentSection.css("display", "none");
    }

    $( ".showcol-btn2.active" ).removeClass( "active" );
    $( ".floorplans-btn" + id ).addClass( "active" );

    var newSection = $("#floorplans-content"+id);
    newSection.css("display", "block");
    currentSection = newSection;
  }
  
  
}); 



////////////////////
/////////////////// CONCIERGE ("Hotel + Travel" Module)
//////////////////

$(document).ready(function(){
  
  var currentSection;
  
  // make sure all script is loaded
  window.initConciege = function()
  {
    var _self = this;
    for(var i=1; i<=18; i++) {
      var content = $("#concierge-content"+i);
      content.css("display", "none")    
    }
    
    // assign mouse actions
    $(".showcol-btn3").mouseover( onBtnRollOver )
    .mouseout( onBtnRollOut )
    .click( onBtnClick );
    
    $(".showcolEmpty3").mouseover( onBtnRollOver )
    .mouseout( onBtnRollOut )
    .click( onBtnClick );
    
    // show first section as default section
    toggleSection(1);
  }
  
  function onBtnRollOver()
  {
    // or do you own rollover
    //$(this).animate({"opacity":"0.5"}, 200);
  }
  
  function onBtnRollOut()
  {
    // or do you own rollout
    //$(this).animate({"opacity":"1"}, 200);
  }
  
  function onBtnClick()
  {
    $( ".showcol-btn3.active" ).removeClass( "active" );
    $( this ).addClass( "active" );
    toggleSection( this.id.substring(3) );
  }
  
  function toggleSection(id)
  {
    if(currentSection != null) {
      currentSection.css("display", "none");
    }
    var newSection = $("#concierge-content"+id);
    newSection.css("display", "block");
    currentSection = newSection;
  }
});




///////////////////////
////////////////////// AMENITIES Module
//////////////////////

$(document).ready(function(){
  
  var currentSection;
  
  // make sure all script is loaded
  window.initAmenities = function()
  {
    var _self = this;
    for(var i=1; i<=18; i++) {
      var content = $("#amenities-content"+i);
      content.css("display", "none")    
    }
    
    // assign mouse actions
    $(".showcol-btn4").mouseover( onBtnRollOver )
    .mouseout( onBtnRollOut )
    .click( onBtnClick );
    
    // show first section as default section
    toggleSection(1);
  }
  
  function onBtnRollOver()
  {
    // or do you own rollover
    //$(this).animate({"opacity":"0.5"}, 200);
  }
  
  function onBtnRollOut()
  {
    // or do you own rollout
    //$(this).animate({"opacity":"1"}, 200);
  }
  
  function onBtnClick()
  {
    $( ".showcol-btn4.active" ).removeClass( "active" );
    $( this ).addClass( "active" ); 
    toggleSection( this.id.substring(3) );
  }
  
  function toggleSection(id)
  {
    if(currentSection != null) {
      currentSection.css("display", "none");
    }
    var newSection = $("#amenities-content"+id);
    newSection.css("display", "block");
    currentSection = newSection;
  }
});


///////////////////////
////////////////////// International ("Visas" Module)
//////////////////////

$(document).ready(function(){
  
  var currentSection;
  
  // make sure all script is loaded
  window.initVisas = function()
  {
    var _self = this;
    for(var i=1; i<=18; i++) {
      var content = $("#visas-content"+i);
      content.css("display", "none")    
    }
    
    // assign mouse actions
    $(".showcol-btn5").mouseover( onBtnRollOver )
    .mouseout( onBtnRollOut )
    .click( onBtnClick );
    
    // show first section as default section
    toggleSection(1);
  }
  
  function onBtnRollOver()
  {
    // or do you own rollover
    //$(this).animate({"opacity":"0.5"}, 200);
  }
  
  function onBtnRollOut()
  {
    // or do you own rollout
    //$(this).animate({"opacity":"1"}, 200);
  }
  
  function onBtnClick()
  {
    $( ".showcol-btn5.active" ).removeClass( "active" );
    $( this ).addClass( "active" );   
    toggleSection( this.id.substring(3) );
  }
  
  function toggleSection(id)
  {
    if(currentSection != null) {
      currentSection.css("display", "none");
    }
    var newSection = $("#visas-content"+id);
    newSection.css("display", "block");
    currentSection = newSection;
  }
});







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


// CHILDRENS CLUB LINKS


      if( $("body").hasClass("childrensClub") == true) 
            { 
              $('#navThirdcc').prev().addClass( "activeLink" );
              $('#navThirdcc').append($floorplan, $concierge, $video, $gallery); }
        else { $('#navThirdcc').append(); }

        
        if( $("body").hasClass("cc-10-14") == true) { 
          $('#navThirdcc').prev().addClass( "activeLink" );
          $('#navThirdcc').append($highlights, $floorplan, $concierge, $gallery); 
        } else { $('#navThirdcc').append(); }

        if( $("body").hasClass("cc-08-14") == true) { 
          $('#navThirdcc').prev().addClass( "activeLink" );
          $('#navThirdcc').append($highlights, $collections, $floorplan, $concierge, $video, $gallery); 
        } else { $('#navThirdcc').append(); }

//CIRCUIT LINKS
    //circuit_jan13 third branch links
    
    if( $("body").hasClass("ac-08-14") == true) 
        { 
          $('#navThirdac').prev().addClass( "activeLink" );
          $('#navThirdac').append($floorplan, $concierge, $video, $gallery); }
    else { $('#navThirdac').append(); } 

      if( $("body").hasClass("acPage") == true) 
          { 
            $('#navThirdac').prev().addClass( "activeLink" );
            $('#navThirdac').append($highlights, $collections, $floorplan, $concierge, $video, $gallery); }
      else { $('#navThirdac').append(); } 

//INTERMEZZO LINKS
   
    if( $("body").hasClass("ic-08-14") == true) { 
          $('#navThirdic').prev().addClass( "activeLink" );
          $('#navThirdic').append($floorplan, $concierge, $video, $gallery); }
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
              $('#navThirdcoterie').append($highlights, $collections, $floorplan, $concierge, $video, $gallery); }
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
          $('#navThirdvegas').append($highlights, $collections, $concierge, $video); }
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






//
// FIXED FOOTER DOM MANIPULATION L + R Content
//

// created element
// var enkFoot = document.createElement("a");
// var infoFoot1 = document.createElement("span");
// var infoFoot2 = document.createElement("span");
// var infoFoot3 = document.createElement("span");
// var emailFoot = document.createElement("a");
// 
// // created child nodes manually
// var enkFootText = document.createTextNode("ENK INTERNATIONAL");
// var infoFoot1Text = document.createTextNode("641 LEXINGTON AVENUE NEW YORK, NY 10022");
// var infoFoot2Text = document.createTextNode("T. 212.759.8055");
// var infoFoot3Text = document.createTextNode("F. 212.758.3403");
// var emailFootText = document.createTextNode("ENKSHOWS@ENKSHOWS.COM");
// 
// // appended attributes to element
// enkFoot.setAttribute("href", "http://www.enkshows.com");
  // enkFoot.setAttribute("class", "redLink2");
// infoFoot1.setAttribute("class", "foot_space");
// infoFoot2.setAttribute("class", "foot_space");
// infoFoot3.setAttribute("class", "foot_space2");
// emailFoot.setAttribute("href", "mailto:enkshows@enkshows.com");
  // emailFoot.setAttribute("class", "greyLink");
    // emailFoot.setAttribute("target", "_blank");
//                         
//                         
// // appended info to element
// enkFoot.appendChild(enkFootText);
// infoFoot1.appendChild(infoFoot1Text);
// infoFoot2.appendChild(infoFoot2Text);
// infoFoot3.appendChild(infoFoot3Text);
// emailFoot.appendChild(emailFootText);
// 
// // appended the element to the document!
// document.getElementById("lFoot").appendChild(enkFoot);
// document.getElementById("lFoot").appendChild(infoFoot1);
// document.getElementById("lFoot").appendChild(infoFoot2);
// document.getElementById("lFoot").appendChild(infoFoot3);
// document.getElementById("rFoot").appendChild(emailFoot);
// 
// 
// 
// //
// // Sticky Footer container DIV's
// //
// 
// // created element
// var logoSticky = document.createElement("div");
// var footboxSticky = document.createElement("div");
// var footboxShowsSticky = document.createElement("div");
// var footboxCompanySticky = document.createElement("div");
// 
// // created child nodes manually
// var logoStickyText = document.createTextNode("ENK INTERNATIONAL");
// var footboxStickyText = document.createTextNode("");
// var footboxShowsStickyText = document.createTextNode("");
// var footboxCompanyStickyText = document.createTextNode("");
// 
// 
// // appended attributes to element
// logoSticky.setAttribute("id", "footlogo");
// footboxSticky.setAttribute("id", "footbox");
// footboxShowsSticky.setAttribute("id","footboxShows");
// footboxCompanySticky.setAttribute("id","footboxCompany");
// 
// 
// // appended info to element
// logoSticky.appendChild(logoStickyText);
// footboxSticky.appendChild(footboxStickyText);
// footboxShowsSticky.appendChild(footboxShowsStickyText);
// footboxCompanySticky.appendChild(footboxCompanyStickyText);
// 
// // appended the element to the document!
// document.getElementById("footerlinks").appendChild(logoSticky);
// document.getElementById("footerlinks").appendChild(footboxSticky);
// document.getElementById("footbox").appendChild(footboxShowsSticky);
// document.getElementById("footbox").appendChild(footboxCompanySticky);
// 
// 
// //
// // Sticky Footer SHOW Links
// //
// 
// // created element
// var footAc = document.createElement("a");
// var footIc = document.createElement("a");
// var footCc = document.createElement("a");
// var footBeijing = document.createElement("a");
// var footNyc = document.createElement("a");
// var footWsa = document.createElement("a");
// var footFc = document.createElement("a");
// var footSole = document.createElement("a");
// var footTmrw = document.createElement("a");
// var footWhite = document.createElement("a");
// var footShanghai = document.createElement("a");
// var footVegas = document.createElement("a");
// 
// 
// 
// // created child nodes manually
// var footAcText = document.createTextNode("Circuit");
// var footIcText = document.createTextNode("Intermezzo");
// var footCcText = document.createTextNode("Children's Club");
// var footWsaText = document.createTextNode("WSA");
// var footFcText = document.createTextNode("Coterie");
// var footSoleText = document.createTextNode("Sole");
// var footTmrwText = document.createTextNode("TMRW");
// var footVegasText = document.createTextNode("ENKVegas");
// 
// 
// 
// // appended attributes to element
// footAc.setAttribute("class", "show");
  // footAc.setAttribute("href", "http://www.enkshows.com/circuit");
      // footAc.setAttribute("title", "Accessorie Circuit");
// 
// footIc.setAttribute("class", "show");
  // footIc.setAttribute("href", "http://www.enkshows.com/intermezzo");
      // footIc.setAttribute("title", "Intermezzo Collections");
//             
// footCc.setAttribute("class", "show");
  // footCc.setAttribute("href", "http://www.enkshows.com/childrensclub");
      // footCc.setAttribute("title", "Children's Club");  
// 
// footFc.setAttribute("class", "show");
  // footFc.setAttribute("href", "http://www.enkshows.com/coterie");
      // footFc.setAttribute("title", "Coterie");
// 
// footSole.setAttribute("class", "show");
  // footSole.setAttribute("href", "http://www.enkshows.com/sole");
      // footSole.setAttribute("title", "Sole Commerce");  
//       
// footTmrw.setAttribute("class", "show");
  // footTmrw.setAttribute("href", "http://www.enkshows.com/tmrw");
      // footTmrw.setAttribute("title", "TMRW");   
//       
// footVegas.setAttribute("class", "show");
  // footVegas.setAttribute("href", "http://www.enkshows.com/enkvegas");
      // footVegas.setAttribute("title", "ENKVegas");                  
//       
//     
//   
//       
// 
// // appended info to element
// footAc.appendChild(footAcText);
// footIc.appendChild(footIcText);
// footCc.appendChild(footCcText);
// // footWsa.appendChild(footWsaText);
// footFc.appendChild(footFcText);
// footSole.appendChild(footSoleText);
// footTmrw.appendChild(footTmrwText);
// footVegas.appendChild(footVegasText);
// 
// 
// 
// // appended the element to the document!
// document.getElementById("footboxShows").appendChild(footCc);
// document.getElementById("footboxShows").appendChild(footAc);
// document.getElementById("footboxShows").appendChild(footFc);
// document.getElementById("footboxShows").appendChild(footVegas);
// document.getElementById("footboxShows").appendChild(footIc);
// document.getElementById("footboxShows").appendChild(footSole);
// document.getElementById("footboxShows").appendChild(footTmrw);
// document.getElementById("footboxShows").appendChild(footWsa);



//
// Sticky Footer COMPANY Links
//

// created element
// var footSiteMap = document.createElement("a");
// var footCareers = document.createElement("a");
// var footFaq = document.createElement("a");
// var footPp = document.createElement("a");
// var footTc = document.createElement("a");
// var footTop = document.createElement("a");
// 
// var footLine1 = document.createElement("span");
// var footLine2 = document.createElement("span");
// var footLine3 = document.createElement("span");
// var footLine4 = document.createElement("span");
// var footLine5 = document.createElement("span");
// 
// 
// // created child nodes manually
// var footSiteMapText = document.createTextNode("Site Map");
// var footCareersText = document.createTextNode(" Careers");
// var footFaqText = document.createTextNode(" F.A.Q.");
// var footPpText = document.createTextNode(" Privacy Policy");
// var footTcText = document.createTextNode(" Terms & Conditions");
// var footTopText = document.createTextNode(" Back to top");
// 
// var footLineText1 = document.createTextNode(" | ");
// var footLineText2 = document.createTextNode(" | ");
// var footLineText3 = document.createTextNode(" | ");
// var footLineText4 = document.createTextNode(" | ");
// var footLineText5 = document.createTextNode(" | ");
// 
// // appended attributes to element
// footSiteMap.setAttribute("class", "company");
  // footSiteMap.setAttribute("href", "http://www.enkshows.com/company/site-map.html");
      // footSiteMap.setAttribute("title", "Site Map");
//       
// footCareers.setAttribute("class", "company");
  // footCareers.setAttribute("href", "http://www.enkshows.com/company/careers.html");
      // footCareers.setAttribute("title", "Careers");     
// 
// footFaq.setAttribute("class", "company");
  // footFaq.setAttribute("href", "http://www.enkshows.com/company/faq.html");
      // footFaq.setAttribute("title", "F.A.Q.");
// 
// footPp.setAttribute("class", "company");
  // footPp.setAttribute("href", "http://www.enkshows.com/company/privacy-policy.html");
      // footPp.setAttribute("title", "Privacy Policy");
//       
// footTc.setAttribute("class", "company");
  // footTc.setAttribute("href", "http://www.enkshows.com/company/terms-conditions.html");
      // footTc.setAttribute("title", "Terms & Conditions");
// 
// footTop.setAttribute("class", "company");
  // footTop.setAttribute("href", "#top");
      // footTop.setAttribute("title", "Back to top");
// 
// footLine1.setAttribute("class", "footLine");  
// footLine2.setAttribute("class", "footLine");  
// footLine3.setAttribute("class", "footLine");  
// footLine4.setAttribute("class", "footLine");  
// footLine5.setAttribute("class", "footLine");  
// 
// // appended info to element
// footSiteMap.appendChild(footSiteMapText);
// footCareers.appendChild(footCareersText);
// footFaq.appendChild(footFaqText);
// footPp.appendChild(footPpText);
// footTc.appendChild(footTcText);
// footTop.appendChild(footTopText);
// 
// footLine1.appendChild(footLineText1);
// footLine2.appendChild(footLineText2);
// footLine3.appendChild(footLineText3);
// footLine4.appendChild(footLineText4);
// footLine5.appendChild(footLineText5);



// appended the element to the document!
//document.getElementById("footboxCompany").appendChild(footSiteMap);
//document.getElementById("footboxCompany").appendChild(footLine1);
// document.getElementById("footboxCompany").appendChild(footCareers);
// document.getElementById("footboxCompany").appendChild(footLine2);
//document.getElementById("footboxCompany").appendChild(footFaq);
//document.getElementById("footboxCompany").appendChild(footLine3);
// document.getElementById("footboxCompany").appendChild(footPp);
// document.getElementById("footboxCompany").appendChild(footLine4);
// document.getElementById("footboxCompany").appendChild(footTc);
// document.getElementById("footboxCompany").appendChild(footLine5);
// document.getElementById("footboxCompany").appendChild(footTop);
