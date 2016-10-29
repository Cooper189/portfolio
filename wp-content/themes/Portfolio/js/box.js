var box = document.querySelectorAll('.portfolio-list .button-box');
var way = ['img/game-graphics.jpg','img/wec.jpg','img/EWC.jpg','img/EWC.jpg','img/GP.jpg','img/EWC.jpg']
var lin = ['none','http://webcreative.pe.hu/en/', 'http://ewc.esy.es','http://ewc.esy.es','none','http://ewc.esy.es','none']
for (var i = 0; i < box.length; i++) {

box[i].onclick = function (x) {
		return function () {
			document.getElementById('overlay').style.display = 'block';
			var i = document.getElementById('box');
			i.style.display = 'block';
			document.body.style.overflow = 'hidden';
			if ( lin[x] != 'none') { 
			i.innerHTML = '';
			i.innerHTML = '<a target="_blank" href="' + lin[x] + '">get on website</a><img src= "' + way[x] + '">';
			}
			else {
			i.innerHTML = '';
			i.innerHTML = '<img src= "' + way[x] + '">';
				}	
			}
		}(i);
}		