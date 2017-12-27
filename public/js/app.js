$('document').ready(function() {
	$('.post').find('.interaction').find('a').eq(2).on('click', function (e) {
		e.preventDefault()
		$('#edit-modal').modal();
	});
});