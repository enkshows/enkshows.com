$(document).ready(function(){
  $(".showcol-l.show-nav li > a").on('click', function(e){
    e.preventDefault();
    var href =  $(this).attr('href');
    $(href).addClass('active').siblings().removeClass('active');
    $(this).addClass('active').parent().siblings().find('a').removeClass('active');
  });

  $('.show-nav a').on('click', function(e){
    e.preventDefault();
    if ($('#show-hours').hasClass('active')){
      
  })






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


  // if the element you clicked on has the idea of the location
  // then initilaize the map and show it!


  // if ($('#show-hours')){
  //   alert('active');
  //   function initialize() {
  //     var mapOptions = {
  //       center: { lat: -34.397, lng: 150.644},
  //       zoom: 8
  //     };
  //     var map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
  //   }
  //   google.maps.event.addDomListener(window, 'load', initialize);
  // }
  // var $show = $('a').attr('href','#show-hours');
  // $show.on('click', function(){
  //   alert('yup!');
    
  // })
  
        

});

var map;
function initialize() {
  var mapOptions = {
    zoom: 8,
    center: new google.maps.LatLng(-34.397, 150.644)
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);