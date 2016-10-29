	var blocks = document.getElementsByClassName('overlay-box');
	for (var i = 0; i < blocks.length; i++) {
		//var block = blocks[i];
		blocks[i].onclick = function () { //alert(blocks[i]);
			document.getElementById('overlay').style.display = 'none';
			var e = document.getElementById('box');
			e.style.display = 'none';
			document.body.style.overflow = 'auto';
		}
	}	