;(function ($, window, undefined) {
  'use strict';

  var $doc = $(document),
      Modernizr = window.Modernizr,
      lt_ie9 = false;

  $(document).ready(function() {
    
    $.fn.foundationMediaQueryViewer ? $doc.foundationMediaQueryViewer() : null;
    $.fn.foundationTabs             ? $doc.foundationTabs() : null;

    if (Modernizr.touch && !window.location.hash) {
      $(window).load(function () {
        setTimeout(function () {
          window.scrollTo(0, 1);
        }, 0);
      });
    }

    $("body").iealert({
      support: 'ie7'
    });

    prettyPrint();

    if($('html').hasClass('lt-ie9')) {
      lt_ie9 = true;
    }



    //Mixed / Ajax Example
    var mixed = new Maplace({
      map_div: '#gmap-mixed',
      controls_div: '#controls-mixed',
      controls_type: 'list',
      controls_on_map: false
    });
    function showGroup(index) {
      var el = $('#g'+index);
      $('#mixed li').removeClass('active');
      $(el).parent().addClass('active');
      $.getJSON('data/ajax.php', { type: index }, function(data) {
        mixed.Load({
          locations: data.points,
          view_all_text: data.title,
          type: data.type,
          force_generate_controls: true
        });
      });
    }

    
    $('#tabs a').click(function(e) {
	e.preventDefault();
	var index = $(this).attr('data-load');
	showGroup(index);
	
	$(".fuckit").showGroup(index);
});

    
    $('#dmixed').one('inview', function(event, isInView) {
      if (isInView) {
        showGroup(0);
      } 
    }); 
    
    


    if(lt_ie9) {
      simple.Load();
      dropdown.Load();
      ullist.Load();
      menu.Load();
      tabs.Load();
      polyline.Load();
      polygon.Load();
      directions.Load();
      styled.Load();
      showGroup(0);
      fusion.Load();
    }



  });//ready

})(jQuery, this);
