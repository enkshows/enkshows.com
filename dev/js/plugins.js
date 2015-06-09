// usage: log('inside coolFunc', this, arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function f(){ log.history = log.history || []; log.history.push(arguments); if(this.console) { var args = arguments, newarr; args.callee = args.callee.caller; newarr = [].slice.call(args); if (typeof console.log === 'object') log.apply.call(console.log, console, newarr); else console.log.apply(console, newarr);}};

// make it safe to use console.log always
(function(a){function b(){}for(var c="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),d;!!(d=c.pop());){a[d]=a[d]||b;}})
(function(){try{console.log();return window.console;}catch(a){return (window.console={});}}());


// place any jQuery/helper plugins in here, instead of separate, slower script files.





//
// Shadowbox
//


$(document).ready(function(){
  Shadowbox.init({
     handleOversize: "resize",
     modal: false
     });
});


//
// Custom Scrollbar
//

$(document).ready(function(){
/*
 * Tiny Scrollbar
 * http://www.baijs.nl/tinyscrollbar/
 *
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.opensource.org/licenses/gpl-2.0.php
 *
 * Date: 13 / 08 / 2012
 * @version 1.81
 * @author Maarten Baijs
 *
 */
( function( $ ) 
{

    $.tiny = $.tiny || { };

    $.tiny.scrollbar = {
        options: {
                axis         : 'y'    // vertical or horizontal scrollbar? ( x || y ).
            ,   wheel        : 40     // how many pixels must the mouswheel scroll at a time.
            ,   scroll       : true   // enable or disable the mousewheel.
            ,   lockscroll   : true   // return scrollwheel to browser if there is no more content.
            ,   size         : 'auto' // set the size of the scrollbar to auto or a fixed number.
            ,   sizethumb    : 40 // set the size of the thumb to auto or a fixed number.
            ,   invertscroll : false  // Enable mobile invert style scrolling
        }
    };

    $.fn.tinyscrollbar = function( params )
    {
        var options = $.extend( {}, $.tiny.scrollbar.options, params );
        
        this.each( function()
        { 
            $( this ).data('tsb', new Scrollbar( $( this ), options ) ); 
        });

        return this;
    };

    $.fn.tinyscrollbar_update = function(sScroll)
    {
        return $( this ).data( 'tsb' ).update( sScroll ); 
    };

    function Scrollbar( root, options )
    {
        var oSelf       = this
        ,   oWrapper    = root
        ,   oViewport   = { obj: $( '.viewport', root ) }
        ,   oContent    = { obj: $( '.overview', root ) }
        ,   oScrollbar  = { obj: $( '.scrollbar', root ) }
        ,   oTrack      = { obj: $( '.track', oScrollbar.obj ) }
        ,   oThumb      = { obj: $( '.thumb', oScrollbar.obj ) }
        ,   sAxis       = options.axis === 'x'
        ,   sDirection  = sAxis ? 'left' : 'top'
        ,   sSize       = sAxis ? 'Width' : 'Height'
        ,   iScroll     = 0
        ,   iPosition   = { start: 0, now: 0 }
        ,   iMouse      = {}
        ,   touchEvents = 'ontouchstart' in document.documentElement
        ;

        function initialize()
        {
            oSelf.update();
            setEvents();

            return oSelf;
        }

        this.update = function( sScroll )
        {
            oViewport[ options.axis ] = oViewport.obj[0][ 'offset'+ sSize ];
            oContent[ options.axis ]  = oContent.obj[0][ 'scroll'+ sSize ];
            oContent.ratio            = oViewport[ options.axis ] / oContent[ options.axis ];

            oScrollbar.obj.toggleClass( 'disable', oContent.ratio >= 1 );

            oTrack[ options.axis ] = options.size === 'auto' ? oViewport[ options.axis ] : options.size;
            oThumb[ options.axis ] = Math.min( oTrack[ options.axis ], Math.max( 0, ( options.sizethumb === 'auto' ? ( oTrack[ options.axis ] * oContent.ratio ) : options.sizethumb ) ) );
        
            oScrollbar.ratio = options.sizethumb === 'auto' ? ( oContent[ options.axis ] / oTrack[ options.axis ] ) : ( oContent[ options.axis ] - oViewport[ options.axis ] ) / ( oTrack[ options.axis ] - oThumb[ options.axis ] );
            
            iScroll = ( sScroll === 'relative' && oContent.ratio <= 1 ) ? Math.min( ( oContent[ options.axis ] - oViewport[ options.axis ] ), Math.max( 0, iScroll )) : 0;
            iScroll = ( sScroll === 'bottom' && oContent.ratio <= 1 ) ? ( oContent[ options.axis ] - oViewport[ options.axis ] ) : isNaN( parseInt( sScroll, 10 ) ) ? iScroll : parseInt( sScroll, 10 );
            
            setSize();
        };

        function setSize()
        {
            var sCssSize = sSize.toLowerCase();

            oThumb.obj.css( sDirection, iScroll / oScrollbar.ratio );
            oContent.obj.css( sDirection, -iScroll );
            iMouse.start = oThumb.obj.offset()[ sDirection ];

            oScrollbar.obj.css( sCssSize, oTrack[ options.axis ] );
            oTrack.obj.css( sCssSize, oTrack[ options.axis ] );
            oThumb.obj.css( sCssSize, oThumb[ options.axis ] );
        }

        function setEvents()
        {
            if( ! touchEvents )
            {
                oThumb.obj.bind( 'mousedown', start );
                oTrack.obj.bind( 'mouseup', drag );
            }
            else
            {
                oViewport.obj[0].ontouchstart = function( event )
                {   
                    if( 1 === event.touches.length )
                    {
                        start( event.touches[ 0 ] );
                        event.stopPropagation();
                    }
                };
            }

            if( options.scroll && window.addEventListener )
            {
                oWrapper[0].addEventListener( 'DOMMouseScroll', wheel, false );
                oWrapper[0].addEventListener( 'mousewheel', wheel, false );
            }
            else if( options.scroll )
            {
                oWrapper[0].onmousewheel = wheel;
            }
        }

        function start( event )
        {
            $( "body" ).addClass( "noSelect" );

            var oThumbDir   = parseInt( oThumb.obj.css( sDirection ), 10 );
            iMouse.start    = sAxis ? event.pageX : event.pageY;
            iPosition.start = oThumbDir == 'auto' ? 0 : oThumbDir;
            
            if( ! touchEvents )
            {
                $( document ).bind( 'mousemove', drag );
                $( document ).bind( 'mouseup', end );
                oThumb.obj.bind( 'mouseup', end );
            }
            else
            {
                document.ontouchmove = function( event )
                {
                    event.preventDefault();
                    drag( event.touches[ 0 ] );
                };
                document.ontouchend = end;        
            }
        }

        function wheel( event )
        {
            if( oContent.ratio < 1 )
            {
                var oEvent = event || window.event
                ,   iDelta = oEvent.wheelDelta ? oEvent.wheelDelta / 120 : -oEvent.detail / 3
                ;

                iScroll -= iDelta * options.wheel;
                iScroll = Math.min( ( oContent[ options.axis ] - oViewport[ options.axis ] ), Math.max( 0, iScroll ));

                oThumb.obj.css( sDirection, iScroll / oScrollbar.ratio );
                oContent.obj.css( sDirection, -iScroll );

                if( options.lockscroll || ( iScroll !== ( oContent[ options.axis ] - oViewport[ options.axis ] ) && iScroll !== 0 ) )
                {
                    oEvent = $.event.fix( oEvent );
                    oEvent.preventDefault();
                }
            }
        }

        function drag( event )
        {
            if( oContent.ratio < 1 )
            {
                if( options.invertscroll && touchEvents )
                {
                    iPosition.now = Math.min( ( oTrack[ options.axis ] - oThumb[ options.axis ] ), Math.max( 0, ( iPosition.start + ( iMouse.start - ( sAxis ? event.pageX : event.pageY ) ))));
                }
                else
                {
                     iPosition.now = Math.min( ( oTrack[ options.axis ] - oThumb[ options.axis ] ), Math.max( 0, ( iPosition.start + ( ( sAxis ? event.pageX : event.pageY ) - iMouse.start))));
                }

                iScroll = iPosition.now * oScrollbar.ratio;
                oContent.obj.css( sDirection, -iScroll );
                oThumb.obj.css( sDirection, iPosition.now );
            }
        }
        
        function end()
        {
            $( "body" ).removeClass( "noSelect" );
            $( document ).unbind( 'mousemove', drag );
            $( document ).unbind( 'mouseup', end );
            oThumb.obj.unbind( 'mouseup', end );
            document.ontouchmove = document.ontouchend = null;
        }

        return initialize();
    }
})(jQuery);

//Initialize

    //Example 1
    var oScroll1 = $('#scrollbar1');
    if(oScroll1.length > 0){
        oScroll1.tinyscrollbar({ lockscroll: false });
    }

    //Example 2
    var oScroll2 = $('#scrollbar2');
    if(oScroll2.length > 0){
        oScroll2.tinyscrollbar({ lockscroll: false });
    }

});



//
// jQuery SmoothScroll | Version 11-09-30
//

$(document).ready(function() {

	$( "#wrapper").delegate( 'a[href*=#]' ,"click", function() {

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

});


//
// jQuery Nivo Slider v2.7.1
// http://nivo.dev7studios.com
//
// Copyright 2011, Gilbert Pellegrom
// Free to use and abuse under the MIT license.
// http://www.opensource.org/licenses/mit-license.php
// 
// March 2010


           // $('#slider').nivoSlider({
                // effect: 'slideInLeft', // Specify sets like: 'fold,fade,sliceDown'
                // animSpeed: 200, // Slide transition speed
                // pauseTime: 3500, // How long each slide will show
                // controlNavThumbs: true, // Use thumbnails for Control Nav
                // controlNavThumbsFromRel: true, // Use image rel for thumbs
				// manualAdvance:false,
				// directionNav: false
           // });


//unhide JS
//Linked to CSS items to show/hide after clicking More btn
//When creating a new function, you must link to its own unique css classes and unique ID

// General usage

	$( ".linkhide" ).each( function( index, link )
	{
		var target  = $( this ).attr( "data-hide" )
		,	$target	= $( "#" + target )
		;

		if( $( this ).attr( "data-hidetype" ) !== "toggle" )
		{
			$target.data( "realHeight", $target.height() );

			$target.addClass( "desc-sm" );

			$target.data( "cutHeight", $target.height() );	

			$target.css( "height", $target.height() );	
		}
		else
		{
			$target.hide();
		}

	});

    window.location.hash = window.location.hash;

	$( "#wrapper" ).delegate( ".linkhide", "click", function()
	{
		var target  = $( this ).attr( "data-hide" )
		,	$target	= $( "#" + target )
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


 $(document).ready(function() {
            $('#slider').nivoSlider({
                 effect: 'slideInLeft', // Specify sets like: 'fold,fade,sliceDown'
                 animSpeed: 200, // Slide transition speed
                 pauseTime: 3500, // How long each slide will show
                 controlNavThumbs: true, // Use thumbnails for Control Nav
                 controlNavThumbsFromRel: true, // Use image rel for thumbs
				 manualAdvance:false,
				 directionNav: false

                });
        });





