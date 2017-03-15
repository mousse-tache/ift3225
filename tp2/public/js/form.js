
$(document).ready(function(){
	/*
	var score = 0

	function() scorechange {
		score++;
		$('#score').val(score);
	}
	*/

	$('#url').on('change', function() {
		var url = $('#url').val();
		$('#thumbnail').attr('src', url );
	});

	$('#afficher').click(function() {

		$('#tablewrapper *').remove();
		
		var r = $('#rows').val();
		var c = $('#columns').val();

		var divtable = document.getElementById('#tablewrapper');
		var table = document.createElement('table');

		for (var i = 1; i <= r; i++) {

		    var tr = document.createElement('tr');  

			for (var j = 1; j <= c; j++) {
				var td = document.createElement('td');
				td.id = 'r'+i+'c'+j;
				tr.appendChild(td);
			}

		    table.appendChild(tr);

		}
		$('#tablewrapper').append(table);

		$('#tablewrapper td').attr('width', 99/c+'%');

	});

	//$('#columns').on('change', genGrid());

});


