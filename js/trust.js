$(document).ready(function() {
	'use strict';

	// Load Editor
	$('#postContent').Editor();


	// Load Tag-it
	$('#postTags').tagit();

});

$(document).submit(function() {
	$('#postContent').val($('.Editor-editor').html());
});