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
		$('#tablewrapper *').remove();
		
		var img = $('#thumbnail').get(0);

		var r = $('#rows').val();
		var c = $('#columns').val();
		
		
		var width = Math.round(img.width/c*5)+'px';
		var height= Math.round(img.height/r*5)+'px';
		var back = 'url('+url+')';
		var table = generateGrid(c,r,url);
		shuffle(table, r, c, 15);
		$('#tablewrapper').append(table);

		$('#tablewrapper td').css({'width':width,
			'height':height,
			'background-image':back});
		$('#tablewrapper span').addClass('hidden');



		$('#tablewrapper table').attr('id', 'gametable')
		
	});

	$('#afficher').click(function() {

		$('#tablewrapper *').remove();
		
		var img = $('#thumbnail').get(0);

		var r = $('#rows').val();
		var c = $('#columns').val();
		
		
		var width = Math.round(img.width/c*5)+'px';
		var height= Math.round(img.height/r*5)+'px';
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
	

	var shuffle = function(table,r,c, v) {
		/*
		@param table : table that the cells will be shuffled
		@param v : float between 0 and 1 w,hich determines the probability each cell will be shuffled
		return: shuffled table
		*/
		var grisR = r-1;
		var grisC = c-1;
		var ordre = new Array(r);
		var x, y;
		var tmp, parnt;
		var i,j;
		for (i=0; i<r; i++) {
			ordre[i] = new Array(c);
		}
		for (i=0; i<r; i++) {
			for (j =0; j<c; j++) {
		 		ordre[i][j] = (j+1) + i*c;
			};
		};


		for(var i = 0; i < 15; i++) {
			x = Math.floor(Math.random() * 2);
			if (x == 0) x--;
			y = Math.floor(Math.random() * 2);
			if (y == 0) x--;
			
			if (0 < x + grisR || x + grisR <= r || 0 < y + grisC || y + grisC <= c) {continue;}

			tmp = ordre[grisR][grisC];
			ordre[grisR][grisC] = ordre[grisR + x][grisC + y];
			ordre[grisR + x][grisC + y] = tmp;
			
			console.log(table.childNodes[grisR].childNodes[grisC]);
			
			tmp = table.childNodes[grisR].childNodes[grisC];
			
			parnt = table.childNodes[grisR].childNodes[grisC].parentNode;
			parnt.replaceChild(table.childNodes[grisR+x].childNodes[grisC+y], table.childNodes[grisR].childNodes[grisC])
			
			table.childNodes[grisR].childNodes[grisC] = table.childNodes[grisR+x].childNodes[grisC+y];
			
			parnt = table.childNodes[grisR+x].childNodes[grisC+y].parentNode
			parnt.replaceChild(tmp, table.childNodes[grisR+x].childNodes[grisC+y])
			
			table.childNodes[grisR+x].childNodes[grisC+y] = tmp;
			grisR = grisR+x;
			grisC = grisC+y;
		}

 		//return table;
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


