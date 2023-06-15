( function( api ) {

	// Extends our custom "fullwidther" section.
	api.sectionConstructor['fullwidther'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
