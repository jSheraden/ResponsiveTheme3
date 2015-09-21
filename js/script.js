/*
$( document ).ready( function() {
	jQuery.event.add( window, 'load', resizeFrame );
	jQuery.event.add( window, 'resize', resizeFrame );

	function resizeFrame() {
		var hideElement = {
			visibility: 'hidden',
			position: 'absolute',
			clear: 'both'
		};
		
		var showElement = {
			visibility: 'visible',
			position: 'relative',
			clear: 'none'
		};
		
		var hideIfSmallScreen = $( window ).width() < 970 ? hideElement : showElement;
		var showIfSmallScreen = $( window ).width() < 970 ? showElement : hideElement;
		
		$( '.sidebar' ).css( hideIfSmallScreen );
	}
} );
*/
