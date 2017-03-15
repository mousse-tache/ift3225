
$(document).ready(function(){

	$('#url').on('change', function() {
		var url = $('#url').val();
		$('#thumbnail').attr('src', url );
	});
});


