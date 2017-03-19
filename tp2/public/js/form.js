var url = 'public/images/paysage.jpeg';
	
$(document).ready(function(){
	

	$('#affichernumero').on('change', function() {
		if ($('#affichernumero').is(':checked')) {
			
		$('#tablewrapper span').removeClass('hidden');
		}
		else {

		$('#tablewrapper span').addClass('hidden');
		}
	});

	$('#url').on('change', function() {
		url = $('#url').val();
		$('.thumbnail').attr('src', url );
	});


	$('#brassertuiles').click(function() {
		var table = getElementById('gametable');
		
	});

	$('#afficher').click(function() {

		$('#tablewrapper *').remove();
		
		var r = $('#rows').val();
		var c = $('#columns').val();
		
		
		var width = Math.round(780/c)+'px';
		var height=Math.round(380/r)+'px';
		var back = 'url('+url+')';
		
		$('#tablewrapper').append(generateGrid(c,r,url));

		$('#tablewrapper td').css({'width':width,
			'height':height,
			'background-image':back});
		$('#tablewrapper span').addClass('hidden');



		$('#tablewrapper table').attr('id', 'gametable')
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
				var pos = ((j)*100/(c)-(100/c)+'% ')+((i)*100/(r)-(100/r)+'%');
				td.style.backgroundPosition= pos;
				span=document.createElement('span');
				span.appendChild(document.createTextNode(compteur));
				td.appendChild(span);
				compteur++;
				tr.appendChild(td);
			}

		    table.appendChild(tr);

		}
		return table
	}


});


