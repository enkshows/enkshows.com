$(document).ready(function(){
  // Init Shadowbox
  



	// allows for toggle throughout each module
	$(".main--content").each(function(){
		$("div[class^=exhib-]:not(:first)", this).hide();
	});
	$(".main--nav").each(function(){
		$('.main--nav a').click(function(e){
			e.preventDefault();
			var $classAttr = $(this).attr('class');
      $('.exhib-content').hide();
			$('#' + $classAttr).show();


		});
	});

	// hide and show common questions 
	var $faq = $('.faq-content');
	var $faqLink = $('.faq-question');

	$faq.hide();
	$faqLink.on('click', function(e){
		var $this = $(this);
		e.preventDefault();
		if ($this.hasClass('active')) {
			$this.removeClass('active');
			$faq.slideUp();
		} else {
			$faqLink.removeClass('active').next().slideUp();
			$this.addClass('active').next().slideDown();
		}
	});


	// Google Maps
	var javitz 	= new google.maps.LatLng(40.758554,-74.002299);
	var piers 	= new google.maps.LatLng(40.769126,-73.996312);
	var pier92 	= new google.maps.LatLng(40.768809,-73.997245);
	var pier94 	= new google.maps.LatLng(40.76976,-73.996666);
	var myLatLng;
  var marker;
  var mapCenter;
  var map;
  var MY_MAPTYPE_ID = 'custom_style';

  var gMap = $('#map-canvas');

  function initialize() {
  	var featureOpts = [
	    {
	      stylers: [
	         { "saturation": -100 }
	      ]
	    },
	    {
				featureType: 'water',
		    "stylers": [
		      { "lightness": 23 },
		      { "saturation": -100 },
		      { "gamma": 0.8 }
		    ]
	    }
  	 ];
    var mapOptions = {
      zoom: 14,
      center: myLatLng,
      mapTypeControlOptions: {
      	mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
      },
      mapTypeId: MY_MAPTYPE_ID
    };

    map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);

    var styledMapOptions = {name: 'ENK Shows'};
    var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

    map.mapTypes.set(MY_MAPTYPE_ID, customMapType);

    marker = new google.maps.Marker({
      map: map,
      position: mapCenter
    });
  }

  if (gMap.data('location') == 'piers') {
  	myLatLng 	= piers;
  	mapCenter = piers;
  } else if (gMap.data('location') == 'pier92') {
  	myLatLng 	= pier92;
  	mapCenter = pier92;
  } else if (gMap.data('location') == 'pier94') {
		myLatLng 	= pier94;
  	mapCenter = pier94;
  } else if (gMap.data('location') == 'javitz') {
		myLatLng 	= javitz;
  	mapCenter = javitz;
  } else {
  	gMap.hide();
  }

  google.maps.event.addDomListener(window, 'load', initialize);


  //Image opacity 
  $("img").hover(function() {
      $(this).stop().animate({opacity: "0.6"}, 300);
    },
    function() {
      $(this).stop().animate({opacity: "1"}, 300);
    });



  // Booth Dropdown
  $(".booth-select").each(function(){
    $(this).on('change', function(){
      var $this = $(this);
      var src = $(this).val();

      var imgDiv = $('.image-display')
      var imgURL = "../assets/img/booths/";
      var img = "<img src='../assets/img/booths/" + src + "FRONTsm.jpg'>"
      // var url = "<a rel='shadowbox' href='" + imgURL + src + "FRONT.jpg'>" + img + "</a>"
      var url = "<a rel='shadowbox' title='" + src + "'" + "href='" + imgURL + src + "FRONT.jpg'>" + img + "</a>"
      var link = "<p><a rel='shadowbox' href='" + imgURL + src + "FRONT.jpg'>" + src + "</a></p>";
      if (src == "") {

        imgDiv.hide();
        $('.image-display > a').remove();
        $('.image-display > p').text().remove();
      } else {
        imgDiv.hide();
        imgDiv.find('> a, > p').remove();
        $(url).appendTo($this.parent().find('.image-display').show());
        $(link).appendTo($this.parent().find('.image-display').show());
        Shadowbox.init();
        Shadowbox.clearCache();
        Shadowbox.setup();
      }
    });
  });
});
