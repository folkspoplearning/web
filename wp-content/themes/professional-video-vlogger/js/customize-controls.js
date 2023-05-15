( function( api ) {

	// Extends our custom "professional-video-vlogger" section.
	api.sectionConstructor['professional-video-vlogger'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );