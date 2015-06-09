$(document).ready(function(){
  // Image Opacity on hover
  $("a img").hover(function() {
      $(this).stop().animate({opacity: "0.6"}, 'slow');
    },
    function() {
      $(this).stop().animate({opacity: "1"}, 'slow');
    });

  // Add striping to roster rows
  $("tr:odd").css("background", "url(../img/stripe-light-bg1.png) repeat");

  // Press Caption Show and Hide
  var caption = $('.caption, .captionShow').hide();
    $('.element').hover(
    function () {
    $(this).find(caption).stop(true, true).slideDown("fast");
    },
    function(){
    $(this).find(caption).stop(true, true).slideUp("fast");
  });


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

// // Apply third level navs on each show page
  if ($("body").hasClass("childrensClub")) {
    // nav links for CC show page
    $("#navThirdcc").prev().addClass("activeLink");
    $("#navThirdcc").append($highlights, $collections,$concierge, $gallery);
  } else if ($("body").hasClass("aCircuit")) {
    // nav links for AC show page
    $("#navThirdac").prev().addClass("activeLink");
    $("#navThirdac").append($highlights, $collections);
  } else if ($("body").hasClass("iCircuit")) {
    // nav links for IC show page
    $("#navThirdic").prev().addClass("activeLink");
    $("#navThirdic").append($highlights, $collections);
  } else if ($("body").hasClass("aCircuit")) {
    // nav links for EV show page
    $("#navThirdvegas").prev().addClass("activeLink");
    $("#navThirdvegas").append($highlights, $collections);
  } else if ($("body").hasClass("aCircuit")) {
    // nav links for FC show page
    $("#navThirdcoterie").prev().addClass("activeLink");
    $("#navThirdcoterie").append($highlights, $collections);
  } else if ($("body").hasClass("aCircuit")) {
    // nav links for SC show page
    $("#navThirdsole").prev().addClass("activeLink");
    $("#navThirdsole").append($highlights, $collections);
  } else if ($("body").hasClass("aCircuit")) {
    // nav links for TM show page
    $("#navThirdtmrw").prev().addClass("activeLink");
    $("#navThirdtmrw").append($highlights, $collections);
  } else {
    $("#navThirdcc, #navThirdac, #navThirdic, #navThirdvegas, #navThirdcoterie, #navThirdsole, #navThirdtmrw").remove();
  }

  $("#wrapper").delegate( 'a[href*=#]' ,"click", function() {
    // skip SmoothScroll on links inside sliders or scroll boxes also using anchors or if there is a javascript call
    if($(this).parent().hasClass('scrollable_navigation') || $(this).attr('href').indexOf('javascript')>-1) return;

    // duration in ms
    var duration=200;

    // easing values: swing | linear
    var easing='swing';

    // get / set parameters
    var newHash=this.hash;
    var oldLocation=window.location.href.replace(window.location.hash, '');
    var newLocation=this;

    // make sure it's the same location   
    if(oldLocation+newHash==newLocation)
    {
      // get target
      var target=$(this.hash+', a[name='+this.hash.slice(1)+']').offset().top;

            $( "#nav" ).find( ".activeLink" ).removeClass( "activeLink" );
            $( this ).addClass( "activeLink" );

      // adjust target for anchors near the bottom of the page
      if(target > $(document).height()-$(window).height()) target=$(document).height()-$(window).height();      

      // set selector
      if($.browser.safari) var animationSelector='body:not(:animated)';
      else var animationSelector='html:not(:animated)';

      // animate to target and set the hash to the window.location after the animation
      $(animationSelector).animate({ scrollTop: target }, duration, easing, function() {

        // add new hash to the browser location
        window.location.href=newLocation;
      });

      // cancel default click action
      return false;
    }
  });


  $('#slider').nivoSlider({
    effect: 'slideInLeft',          // Specify sets like: 'fold,fade,sliceDown'
    animSpeed: 200,                 // Slide transition speed
    pauseTime: 3500,                // How long each slide will show
    controlNavThumbs: true,         // Use thumbnails for Control Nav
    controlNavThumbsFromRel: true,  // Use image rel for thumbs
    manualAdvance:false,
    directionNav: false
  });  
});/// end of doc ready