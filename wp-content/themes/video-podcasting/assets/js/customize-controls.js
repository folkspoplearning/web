( function( api ) {

	// Extends our custom "video-podcasting" section.
	api.sectionConstructor['video-podcasting'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );