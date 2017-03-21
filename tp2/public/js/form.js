var url = 'public/images/paysage.jpeg';
var ordre;
var grisC;
var grisR;
var compteur = 0;	
$(document).ready(function(){

var ingame = false;	

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
		var r = $('#rows').val();
		var c = $('#columns').val();
		if (ingame) {
			if (confirm("La partie va être réinitialisée, voulez-vous continuez?")) {

				$('#tablewrapper *').remove();
				compteur=0;
				$('#score').text('0');
				var img = $('#thumbnail').get(0);
				
				var width = Math.round(img.width/c*5)+'px';
				var height= Math.round(img.height/r*5)+'px';
				var back = 'url('+url+')';

				$('#tablewrapper').append(generateGrid(c,r,url));

				$('#tablewrapper td').css({'width':width,
					'height':height,
					'background-image':back});
				$('#tablewrapper span').addClass('hidden');
				$('#tablewrapper table').attr('id', 'gametable')
				shuffle(r, c, r*c*r*c);		
					}
				}
				else {
				compteur=0;
				$('#score').text('0');
				var r = $('#rows').val();
				var c = $('#columns').val();
				shuffle(r, c, r*c*r*c);	
				ingame = true;
			}
		
	});

	$('#afficher').click(function() {
		ingame=true;
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
		//shuffle(r, c, 10);
		// swap(1,4);
		
	});
	
	$(document).keydown(function(e) {
  		console.log(e.which);
  		// 37 left
  		// 38 up
  		// 39 right
  		// 40 down
  		if (e.which >= 37 && e.which <= 40) {
  			move(e.which);
  		}

    });

	$('td').click();
});

	var gameActions = function() {
		/*
		Handler for mouse and keyboards inputs for the game. 
		Possible actions = {'Up', 'Right', 'Down', 'Left'}
		*/
	}
	
	var swap = function(a,b) {
		//a++;
		//b++;
		console.log (" " + a + " " + b +"\n");
		var td1 = $("#" + a);
		var td2 = $("#" + b);
		
		var style1, style2;
		var id1, id2;
		var class1, class2;
		style1 = td1.attr("style");
		style2 = td2.attr("style");

		id1= td1.attr("id");
		id2= td2.attr("id");
		
		class1= td1.attr("class");
		class2= td2.attr("class");
		
		td1.children(span).text(b);
		td2.children(span).text(a);
		
		td1.attr("style", style2);
		td2.attr("style", style1);

		td1.attr("id", id2);
		td2.attr("id", id1);

		td1[0].className = class2;
		td2[0].className = class1;
		console.log(td1.attr("class"), class2, td2.attr("class"), class1);
		
		
		// tmp1 = $("span:contains('" + a + "')").parent().html();
// 		tmp2 = $("span:contains('" + b + "')").parent().html();
//
// 		$("span:contains('" + a + "')").parent().html(tmp2);
// 		$("span:contains('" + b + "')").parent().html(tmp1);
	}
		
		
	var shuffle = function(r,c,v) {
		grisR = r-1;
		grisC = c-1;
		var pos = r*c;
		var gris = $("#" + pos);
		gris.css('background-image','none');
		gris.addClass('grey-tile');
		//gris.attr('id', 'gris');		
		//console.log("allo" + grisR + grisC + "\n");
		
		var tmp, parnt;
		var x;
		ordre = new Array(r);
		var i,j;
		for (i=0; i<r; i++) {
			ordre[i] = new Array(c);
			for (j =0; j<c; j++) {
		 		ordre[i][j] = (j+1) + i*c;
			}
		}
		
		for(var i = 0; i < v; i++) {
			var check = true;
			// 0 = up, 1 = right, 2 = down, 3 = left
			while (check) {
				
				x = Math.floor(Math.random() * 4);
				//console.log(x);
				
				if (x == 0){
					if (grisR - 1 >= 0) {
						check = false;
						
						swap(ordre[grisR][grisC], ordre[grisR-1][grisC]);
						
						tmp = ordre[grisR][grisC];
						ordre[grisR][grisC] = ordre[grisR - 1][grisC];
						ordre[grisR - 1][grisC] = tmp;
						
						//swap(grisC + c*(grisR), grisC + c*(grisR - 1));
						grisR+=-1;
					}
				}
				else if (x == 1){
					if (grisC + 1 < c) {
						check = false;
						
						swap(ordre[grisR][grisC], ordre[grisR][grisC+1]);
						
						tmp = ordre[grisR][grisC];
						ordre[grisR][grisC] = ordre[grisR][grisC + 1];
						ordre[grisR][grisC + 1] = tmp;
						
						//swap(grisC + c*(grisR), grisC + 1 + c*(grisR));
						grisC+=1;
					}
				}
				else if (x == 2){
					if (grisR + 1 < r) {
						check = false;
						
						swap(ordre[grisR][grisC], ordre[grisR+1][grisC]);
						
						tmp = ordre[grisR][grisC];
						ordre[grisR][grisC] = ordre[grisR + 1][grisC];
						ordre[grisR + 1][grisC] = tmp;
						
						//swap(grisC + c*(grisR), grisC + c*(grisR + 1));
						grisR+=1;
					}
				}
				else if (x == 3){
					if (grisC - 1 >= 0) {
						check = false;
						
						swap(ordre[grisR][grisC], ordre[grisR][grisC-1]);
						
						tmp = ordre[grisR][grisC];
						ordre[grisR][grisC] = ordre[grisR][grisC - 1];
						ordre[grisR][grisC - 1] = tmp;
						
						//swap(grisC + c*(grisR), grisC - 1 + c*(grisR));
						grisC+=-1;
					}
				}
			}
		}
	}

	//var shuffle = function(table,r,c, v) {
		/*
		@param table : table that the cells will be shuffled
		@param v : float between 0 and 1 w,hich determines the probability each cell will be shuffled
		return: shuffled table
		*/
	/*	var grisR = r-1;
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
	

		for(var i = 0; i < 1; i++) {
			/*
			x = Math.floor(Math.random() * 2);
			if (x == 0) x--;
			y = Math.floor(Math.random() * 2);
			if (y == 0) x--;
			
			if ((0 <= x + grisR && x + grisR < r) && 0 <= y + grisC && y + grisC < c) {

			tmp = ordre[grisR][grisC];
			ordre[grisR][grisC] = ordre[grisR + x][grisC + y];
			ordre[grisR + x][grisC + y] = tmp;
			
			console.log(table.childNodes[grisR].childNodes[grisC]);
			
			tmp = table.childNodes[grisR].childNodes[grisC];
			
			parnt = table.childNodes[grisR].childNodes[grisC].parentNode;
			parnt.replaceChild(table.childNodes[grisR+x].childNodes[grisC+y], table.childNodes[grisR].childNodes[grisC])
			
			//table.childNodes[grisR].childNodes[grisC] = table.childNodes[grisR+x].childNodes[grisC+y];
			
			tmp = table.childNodes[0].childNodes[0];
			save = table.childNodes[0].childNodes[3];
			tmp = tmp.cloneNode(true);
			
			parnt = table.childNodes[0];
			parnt.replaceChild(table.childNodes[0].childNodes[1], table.childNodes[0].childNodes[0]);
			parnt.insertBefore(tmp, table.childNodes[0].childNodes[0].nextSibling);
			//parnt.replaceChild(tmp, table.childNodes[0].childNodes[1]);
			
			//table.childNodes[grisR+x].childNodes[grisC+y] = tmp;
			//grisR = grisR+x;
			//grisC = grisC+y;
			//}
		}

 		//return table;
	}
	*/


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
				var pos = (j * 100/c - 100/c) + '% ' + (i*100/r - 100/r) + '%';
				
				td.style.backgroundPosition= pos;
				td.id = compteur;
				span=document.createElement('span');
				span.classList.add('case');
				span.appendChild(document.createTextNode(compteur));
				td.appendChild(span);
				compteur++;
				tr.appendChild(td);
			}

		    table.appendChild(tr);

		}
		
		return table
	}


	var move = function (e) {
		var r = $('#rows').val();
		var c = $('#columns').val();
			
		switch (e) {	
			case 37: //left
			if (grisC - 1 >= 0) {
						check = false;
						
						swap(ordre[grisR][grisC], ordre[grisR][grisC-1]);
						
						tmp = ordre[grisR][grisC];
						ordre[grisR][grisC] = ordre[grisR][grisC - 1];
						ordre[grisR][grisC - 1] = tmp;
						
						//swap(grisC + c*(grisR), grisC - 1 + c*(grisR));
						grisC+=-1;
						compteur+=1;
					}
				break;
			case 38: //up
				if (grisR - 1 >= 0) {
						check = false;
						
						swap(ordre[grisR][grisC], ordre[grisR-1][grisC]);
						
						tmp = ordre[grisR][grisC];
						ordre[grisR][grisC] = ordre[grisR - 1][grisC];
						ordre[grisR - 1][grisC] = tmp;
						
						//swap(grisC + c*(grisR), grisC + c*(grisR - 1));
						grisR+=-1;
						compteur+=1;
					}
				break;
			case 39: //right
				if (grisC + 1 < c) {
						check = false;
						
						swap(ordre[grisR][grisC], ordre[grisR][grisC+1]);
						
						tmp = ordre[grisR][grisC];
						ordre[grisR][grisC] = ordre[grisR][grisC + 1];
						ordre[grisR][grisC + 1] = tmp;
						
						//swap(grisC + c*(grisR), grisC + 1 + c*(grisR));
						grisC+=1;
						compteur+=1;
					}
				break;
			case 40: //down
				if (grisR + 1 < r) {
						check = false;
						
						swap(ordre[grisR][grisC], ordre[grisR+1][grisC]);
						
						tmp = ordre[grisR][grisC];
						ordre[grisR][grisC] = ordre[grisR + 1][grisC];
						ordre[grisR + 1][grisC] = tmp;
						
						//swap(grisC + c*(grisR), grisC + c*(grisR + 1));
						grisR+=1;
						compteur+=1;
					}
				break;
			default:
			 break;
		}
		
		$('#score').text(compteur);
	}


window.addEventListener("keydown", function(e) {
    // space, page up, page down and arrow keys:
    if([37, 38, 39, 40].indexOf(e.keyCode) > -1) {
        e.preventDefault();
    }
}, false);