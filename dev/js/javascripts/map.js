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

    //Mixed / Ajax Example
    var mixed = new Maplace({
      map_div: '#gmap',
      controls_div: '#controls',
      controls_type: 'list',
      controls_on_map: false
    });
    
    
    console.log('ready');
    
    
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
    $('#mixed a').click(function(e) {
      e.preventDefault();
      var index = $(this).attr('data-load');
      showGroup(index);
    });

    $('#dmixed').one('inview', function(event, isInView) {
      if (isInView) {
        showGroup(0);
      } 
    }); 

  });//ready

})(jQuery, this);
