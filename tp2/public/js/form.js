
var url = $('#url').val();
	
$(document).ready(function(){
	
	

	$('#url').on('change', function() {
		url = $('#url').val();
		$('.thumbnail').attr('src', url );
	});

	$('#afficher').click(function() {

		$('#tablewrapper *').remove();
		
		var r = $('#rows').val();
		var c = $('#columns').val();

		var divtable = document.getElementById('#tablewrapper');
		var table = document.createElement('table');
		var compteur=1;
		for (var i = 1; i <= r; i++) {

		    var tr = document.createElement('tr');  

			for (var j = 1; j <= c; j++) {
				var td = document.createElement('td');
				td.appendChild(document.createTextNode(compteur));
				compteur++;
				tr.appendChild(td);
			}

		    table.appendChild(tr);

		}
		$('#tablewrapper').append(table);
		var width = 780/c+'px';
		var height=380/r+'px';
		var back = 'url('+url+')';
		$('#tablewrapper td').css({'width':width});

		$('#tablewrapper td').css({'min-height':height});
		$('#tablewrapper').css({'background-image':url});
		
	});

	//$('#columns').on('change', genGrid());

});


