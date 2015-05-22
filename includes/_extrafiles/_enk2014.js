$(document).ready(function(){

  if ($('body').hasClass('homePage')) {
    $('.trigger').on('click', function(e){
      e.preventDefault();
      var link = $(this).siblings();
      link.toggleClass('hide-content active');

      if (link.hasClass('active')){
        $(this).html('less');
      } else {
        $(this).html('more');
      }
    });
  }
  $(".page-inner-nav").find('a').on('click', function(e){
    e.preventDefault();
    var href =  $(this).attr('href');
    $(href).addClass('active').siblings().removeClass('active');
    $(this).addClass('active').parent().siblings().find('a').removeClass('active');
  });

  // sets up page navigation based on content on the page. 
  var $navlinksModule = [];
  var $link;
  $('.module').each(function(){
      $navlinksModule.push($(this).attr('id'));
  });
  for (var i = 0; i < $navlinksModule.length; i++) {
    var $item = $navlinksModule[i];
    var $link = '#' + $item;
     

     // check class of page
     // depending on page class, assign the links to the appropriate nav
     // if statements per page for now. 
     if ($('body').hasClass('cc')){
      $('.cc-nav').append('<li><a href="' + $link + '">' + $item.replace('-', ' + ') + '</a></li>');
     }

     if ($('body').hasClass('fc')){
      $('.fc-nav').append('<li><a href="' + $link + '">' + $item.replace('-', ' + ') + '</a></li>');
     }

     if ($('body').hasClass('sc')){
      $('.sc-nav').append('<li><a href="' + $link + '">' + $item.replace('-', ' + ') + '</a></li>');
     }

     if ($('body').hasClass('tmrw')){
      $('.tmrw-nav').append('<li><a href="' + $link + '">' + $item.replace('-', ' + ') + '</a></li>');
     }

     if ($('body').hasClass('ac')){
      $('.ac-nav').append('<li><a href="' + $link + '">' + $item.replace('-', ' + ') + '</a></li>');
     }

     if ($('body').hasClass('ic')){
      $('.ic-nav').append('<li><a href="' + $link + '">' + $item.replace('-', ' + ') + '</a></li>');
     }

     if ($('body').hasClass('ev')){
      $('.ev-nav').append('<li><a href="' + $link + '">' + $item.replace('-', ' + ') + '</a></li>');
     }
     if ($('body').hasClass('fwd')){
      $('.fwd-nav').append('<li><a href="' + $link + '">' + $item.replace('-', ' + ') + '</a></li>');
     }
  };

  // local scroll for nav
  $('#nav a[href^="#"]').on('click',function (e) {
      e.preventDefault();
      var target = this.hash,
      $target = $(target);
      $('html, body').stop().animate({
          'scrollTop': $target.offset().top
      }, 600, 'swing', function () {
          window.location.hash = target;
      });
  });

  // tiny scroll stuf
  var oScroll1 = $('#scrollbar1');
  if(oScroll1.length > 0){
      oScroll1.tinyscrollbar({ lockscroll: false });
  }

  //Example 2
  var oScroll2 = $('#scrollbar2');
  if(oScroll2.length > 0){
      oScroll2.tinyscrollbar({ lockscroll: false });
  }


  // Nivo slider
  $('#slider').nivoSlider({
      effect: 'slideInLeft',               // Specify sets like: 'fold,fade,sliceDown'
      animSpeed: 500,                 // Slide transition speed
      pauseTime: 3000,                // How long each slide will show
      startSlide: 0,                  // Set starting Slide (0 index)
      controlNavThumbs: true,        // Use thumbnails for Control Nav
      pauseOnHover: true,             // Stop animation while hovering
      manualAdvance: false,           // Force manual transitions
      // prevText: 'Prev',               // Prev directionNav text
      // nextText: 'Next',               // Next directionNav text
  });



  //
  // from old JS files
  // this performs the hide/show slide down animation 
  // for the forms
    $( ".linkhide" ).each( function( index, link ){
      var target  = $( this ).attr( "data-hide" )
      , $target = $( "#" + target )
      ;

      if( $( this ).attr( "data-hidetype" ) !== "toggle" )
      {
        $target.data( "realHeight", $target.height() );

        $target.addClass( "desc-sm" );
              // #target.css({"height": "500px"});

        $target.data( "cutHeight", $target.height() );  

        $target.css( "height", $target.height() );  
      }
      else
      {
        $target.hide();
      }
    });

      window.location.hash = window.location.hash;

    $( "#wrapper" ).delegate( ".linkhide", "click", function(){
      var target  = $( this ).attr( "data-hide" )
      , $target = $( "#" + target )
      ;

          if( $( this ).hasClass( "active" ) )
          {
              $( this ).removeClass( "active" );
          }
          else
          {
              $( "#wrapper" ).find( ".linkhide.active" ).removeClass( "active" );
              $( this ).addClass( "active" );
          }

      if( $( this ).attr( "data-hidetype" ) !== "toggle" )
      {
        $target.toggleClass( "desc-sm" );

        $target.stop().animate({ "height" : $target.hasClass( "desc-sm" ) ? $target.data( "cutHeight" ) : $target.data( "realHeight" ) });

        $( this ).html( $target.hasClass( "desc-sm" ) ? "more" : "less" );
      }
      else
      {
        $( ".formhide" ).not( $target ).hide();
        $target.slideToggle();
      }

      return false;
    });

    // this applies an opacity to any linked image when hovers. 
    $("a img").hover(function() {
      $(this).stop().animate({opacity: "0.6"}, 'slow');
    },
    function() {
      $(this).stop().animate({opacity: "1"}, 'slow');
    });


    // hides the captions on the press thumbnails
    $('.caption, .captionShow').hide();
    
    // once you hover, 
    // the caption is displayed
    // when you remove the mouse, it dissappears 
    $('.element').hover(
    function () {
      $(this).find('.caption, .captionShow').stop(true, true).slideDown("fast");
    },
    function(){
      $(this).find('.caption, .captionShow').stop(true, true).slideUp("fast");
    });

    $("tr:odd").css("background", "url(../img/stripe-light-bg1.png) repeat");


    // adds class to each external link
    $('a').each(function(){
       var reg_exp = new RegExp('/' + window.location.host + '/');
       if (!reg_exp.test($(this).attr('href'))) {

         $(this).addClass("ext");
       }
    });

    // applies link trakcing to each external link
    $(".ext").on("click", function(){
      _gaq.push(['_trackEvent', 'Outbound Links', 'Click', $(this).attr('href')]);
    })

});

(function(){
  var body = document.getElementById('showPage');
  if (body){
     var map;
     var data = document.getElementById('map-canvas');
     var latLng = new google.maps.LatLng(data.dataset.lat,data.dataset.lng);
     function initialize() {
     var mapOptions = {
      center: latLng,
      zoom: 15
     };

     map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
     var marker = new google.maps.Marker({
       position: latLng,
       map: map,
       animation: google.maps.Animation.DROP
     });

     var styles = [
       {
         "stylers": [
           { "saturation": -100 }
         ]
       },{
         "featureType": "road",
         "stylers": [
           { "lightness": 23 },
           { "saturation": -100 },
           { "gamma": 0.8 }
         ]
       }
     ];
      map.setOptions({styles: styles});
    }

     var el = document.getElementById('hours');
     google.maps.event.addDomListenerOnce(el, 'click', initialize);
  } 

  
})();

