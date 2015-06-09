// usage: log('inside coolFunc', this, arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function f(){ log.history = log.history || []; log.history.push(arguments); if(this.console) { var args = arguments, newarr; args.callee = args.callee.caller; newarr = [].slice.call(args); if (typeof console.log === 'object') log.apply.call(console.log, console, newarr); else console.log.apply(console, newarr);}};

// make it safe to use console.log always
(function(a){function b(){}for(var c="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),d;!!(d=c.pop());){a[d]=a[d]||b;}})
(function(){try{console.log();return window.console;}catch(a){return (window.console={});}}());


//
// Show/Hide Caption
//
$(document).ready(function()
{
    $('.element').hover(
    function ()
    {
        $(this).find('.caption').stop(true, true).slideDown("fast");
    },
    function()
    {
        $(this).find('.caption').stop(true, true).slideUp("fast");
    });

    $(this).find(".exhibitor").mouseover(function() 
    { 
        $(this).find("a.select:link").stop(true, true).animate({ color: "#181818" }, 200); 
        
        $(this).find(".solid").stop(true, true).animate({ 
        backgroundColor: "#ffffff",
        color: "#181818",
        width: "100%"
        }, 200); 
    }); 
    
    $(this).find(".exhibitor").mouseout(function()
    { 
        $(this).find("a.select:link").stop(true, true).animate({ 
            color: "#ffffff"
        }, 200); 
        $(this).find(".solid").stop(true, true).animate({ 
        backgroundColor: "#252525",
        color: "#ffffff",
        width: "0%"
        }, 200); 
    }); 

    $('body a').click(function ()
    {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
    });
    
    var $container = $('#container');
        // toggle variable sizes of all elements
    $('#toggle-sizes a').click(function(){
      $container
        .toggleClass('variable-sizes')
        .isotope('reLayout');
      return false;
    });  
    
    // add randomish size classes
    $container.find('.element').each(function(){
    var $this = $(this),
        number = parseInt( $this.find('.number').text(), 10 );
    if ( number % 7 % 2 === 1 ) {
      $this.addClass('width2');
    }
    if ( number % 3 === 0 ) {
      $this.addClass('height2');
    }
    });
    
    $container.isotope({
      itemSelector : '.element, .text',
      masonry : {
        columnWidth : 5
      },
      masonryHorizontal : {
        rowHeight: 120
      },
      cellsByRow : {
        columnWidth : 240,
        rowHeight : 240
      },
      cellsByColumn : {
        columnWidth : 240,
        rowHeight : 240
      }
  ,   onLayout: function() 
      {
        $( window ).trigger( "scrollstart" );
        $( window ).trigger( "scrollstop" );
      }
    });
    
    var $optionSets = $('.option-set'),
    $optionLinks    = $optionSets.find('a');

    $optionLinks.click(function()
    {
        var $this = $(this);

        $.bbq.pushState( { "view" : $this[0].id } )
 
        return false;
    });

    $( window ).bind( "hashchange", function( event )
    {
        $link = $('#' + $.bbq.getState( "view" ) );

        var $optionSet = $('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $link.addClass('selected');
   
        var options = {},
        key = $optionSet.attr('data-option-key'),
        value = $link.attr('data-option-value')

        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( $this, options )
        } else {
          // otherwise, apply new options
          $container.isotope( options );
        }
    });
    
    // change layout
    var isHorizontal = false;
    function changeLayoutMode( $link, options ) 
    {
        var wasHorizontal = isHorizontal;
        isHorizontal = $link.hasClass('horizontal');

        if ( wasHorizontal !== isHorizontal ) {
          // orientation change
          // need to do some clean up for transitions and sizes
          var style = isHorizontal ? 
            { height: '80%', width: $container.width() } : 
            { width: 'auto' };
          // stop any animation on container height / width
          $container.filter(':animated').stop();
          // disable transition, apply revised style
          $container.addClass('no-transition').css( style );
          setTimeout(function(){
            $container.removeClass('no-transition').isotope( options );
          }, 100 )
        } else {
          $container.isotope( options );
        }
    }

    // change size of clicked element
    $container.delegate( '.element', 'click', function(){
    $(this).toggleClass('large');
    $container.isotope('reLayout');
    });

    // toggle variable sizes of all elements
    $('#toggle-sizes').find('a').click(function(){
    $container
      .toggleClass('variable-sizes')
      .isotope('reLayout');
    return false;
    });

    $(window).trigger( 'hashchange' );

    $("img").lazyload( { failure_limit : 200, treshold: 400, event: "scrollstop"  } );

    $('#insert a').click(function()
    {
        var $newEls = $( fakeElement.getGroup() );
        $container.isotope( 'insert', $newEls );

        return false;
    });

    $('#append a').click(function(){
    var $newEls = $( fakeElement.getGroup() );
    $container.append( $newEls ).isotope( 'appended', $newEls );

    return false;
    });

    var $sortBy = $('#sort-by');
    $('.shuffle a').click(function(){
      $container.isotope('shuffle');
      $sortBy.find('.selected').removeClass('selected');
      $sortBy.find('[data-option-value="random"]').addClass('selected');
      return false;
    });


  });
  
