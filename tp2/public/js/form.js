var url = 'public/images/paysage.jpeg';
	
$(document).ready(function(){
	
	

	$('#url').on('change', function() {
		url = $('#url').val();
		$('.thumbnail').attr('src', url );
	});

	$('#afficher').click(function() {

		$('#tablewrapper *').remove();
		
		var r = $('#rows').val();
		var c = $('#columns').val();
		
		
		var width = 780/c+'px';
		var height=380/r+'px';
		var back = 'url('+url+')';
		
		$('#tablewrapper').append(generateGrid(c,r,url));

		$('#tablewrapper td').css({'width':width,
			'min-height':height,
			'background-image':back});
		
	});

	var gameActions = function() {
		/*
		Handler for mouse and keyboards inputs for the game. 
		Possible actions = {'Up', 'Right', 'Down', 'Left'}
		*/
	}

	var shuffle = function(table, v) {
		/*
		@param table : table that the cells will be shuffled
		@param v : float between 0 and 1 which determines the probability each cell will be shuffled
		return: shuffled table
		*/
	}

	var winCheck = function(table) {
		//Iterates over cells. If they're in the right order, returns true else false
	}

	var generateGrid = function(c,r,url)  {
		
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
		return table
	}


});


