$(document).ready(function(){
  // 2n+1
  $('.show-tile:nth-child(odd),.attend-tile:nth-child(even)').css({'margin-right': '0'});
  // $('.attend-tile:nth-child(even)').css({'margin-right': '0'});
  $('.showcol-l.show-nav li > a, #hotel-travel nav a').on('click', function(e){
    e.preventDefault();
    var href =  $(this).attr('href');
    $(href).addClass('active').siblings().removeClass('active');
    $(this).addClass('active').parent().siblings().find('a').removeClass('active');
  });


  // $("#hotel-travel nav a").on('click', function(){
  //   var link = $(this).attr('href');
  //   console.log(link);
  //   $('#hote-travel .item--content').removeClass('active');
  //   $(link).add
  // });

  $('#hotel-travel nav a').on('click', function(e){
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

    $(".show-roster").tinyscrollbar();

});
var map;
var data = document.getElementById('map-canvas');
// var latLng = new google.maps.LatLng(data.dataset.lat,data.dataset.lng);
function initialize() {
  var mapOptions = {
   center: latLng,
   zoom: 15
  };

  // marker isn't loading!
  // why isnt' the marker loading?

  map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);

  var marker = new google.maps.Marker({
        position: latLng,
        map: map,
        animation: google.maps.Animation.DROP,
        title: 'Hello World!'
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



/*! tinyscrollbar - v2.2.4 - 2014-12-19
 * http://www.baijs.com/tinyscrollbar
 *
 * Copyright (c) 2014 Maarten Baijs <wieringen@gmail.com>;
 * Licensed under the MIT license */

!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):jQuery)}(function(a){"use strict";function b(b,e){function f(){return o.update(),h(),o}function g(){t.css(y,o.thumbPosition),q.css(y,-o.contentPosition),r.css(x,o.trackSize),s.css(x,o.trackSize),t.css(x,o.thumbSize)}function h(){u?p[0].ontouchstart=function(a){1===a.touches.length&&(a.stopPropagation(),k(a.touches[0]))}:(t.bind("mousedown",function(a){a.stopPropagation(),k(a)}),s.bind("mousedown",function(a){k(a,!0)})),a(window).resize(function(){o.update("relative")}),o.options.wheel&&window.addEventListener?b[0].addEventListener(v,l,!1):o.options.wheel&&(b[0].onmousewheel=l)}function i(){return o.contentPosition>0}function j(){return o.contentPosition<=o.contentSize-o.viewportSize-5}function k(b,c){a("body").addClass("noSelect"),z=c?t.offset()[y]:w?b.pageX:b.pageY,u?(document.ontouchmove=function(a){(o.options.touchLock||i()&&j())&&a.preventDefault(),m(a.touches[0])},document.ontouchend=n):(a(document).bind("mousemove",m),a(document).bind("mouseup",n),t.bind("mouseup",n),s.bind("mouseup",n)),m(b)}function l(c){if(o.contentRatio<1){var d=c||window.event,e=-(d.deltaY||d.detail||-1/3*d.wheelDelta)/40,f=1===d.deltaMode?o.options.wheelSpeed:1;o.contentPosition-=e*f*o.options.wheelSpeed,o.contentPosition=Math.min(o.contentSize-o.viewportSize,Math.max(0,o.contentPosition)),o.thumbPosition=o.contentPosition/o.trackRatio,b.trigger("move"),t.css(y,o.thumbPosition),q.css(y,-o.contentPosition),(o.options.wheelLock||i()&&j())&&(d=a.event.fix(d),d.preventDefault())}}function m(a){if(o.contentRatio<1){var c=w?a.pageX:a.pageY,d=c-z;u&&(d=z-c);var e=Math.min(o.trackSize-o.thumbSize,Math.max(0,o.thumbPosition+d));o.contentPosition=e*o.trackRatio,b.trigger("move"),t.css(y,e),q.css(y,-o.contentPosition)}}function n(){o.thumbPosition=parseInt(t.css(y),10)||0,a("body").removeClass("noSelect"),a(document).unbind("mousemove",m),a(document).unbind("mouseup",n),t.unbind("mouseup",n),s.unbind("mouseup",n),document.ontouchmove=document.ontouchend=null}this.options=a.extend({},d,e),this._defaults=d,this._name=c;var o=this,p=b.find(".viewport"),q=b.find(".overview"),r=b.find(".scrollbar"),s=r.find(".track"),t=r.find(".thumb"),u="ontouchstart"in document.documentElement,v="onwheel"in document.createElement("div")?"wheel":void 0!==document.onmousewheel?"mousewheel":"DOMMouseScroll",w="x"===this.options.axis,x=w?"width":"height",y=w?"left":"top",z=0;return this.contentPosition=0,this.viewportSize=0,this.contentSize=0,this.contentRatio=0,this.trackSize=0,this.trackRatio=0,this.thumbSize=0,this.thumbPosition=0,this.update=function(a){var b=x.charAt(0).toUpperCase()+x.slice(1).toLowerCase();switch(this.viewportSize=p[0]["offset"+b],this.contentSize=q[0]["scroll"+b],this.contentRatio=this.viewportSize/this.contentSize,this.trackSize=this.options.trackSize||this.viewportSize,this.thumbSize=Math.min(this.trackSize,Math.max(this.options.thumbSizeMin,this.options.thumbSize||this.trackSize*this.contentRatio)),this.trackRatio=(this.contentSize-this.viewportSize)/(this.trackSize-this.thumbSize),r.toggleClass("disable",this.contentRatio>=1),a){case"bottom":this.contentPosition=Math.max(this.contentSize-this.viewportSize,0);break;case"relative":this.contentPosition=Math.min(Math.max(this.contentSize-this.viewportSize,0),Math.max(0,this.contentPosition));break;default:this.contentPosition=parseInt(a,10)||0}return this.thumbPosition=this.contentPosition/this.trackRatio,g(),o},f()}var c="tinyscrollbar",d={axis:"y",wheel:!0,wheelSpeed:40,wheelLock:!0,touchLock:!0,trackSize:!1,thumbSize:!1,thumbSizeMin:20};a.fn[c]=function(d){return this.each(function(){a.data(this,"plugin_"+c)||a.data(this,"plugin_"+c,new b(a(this),d))})}});