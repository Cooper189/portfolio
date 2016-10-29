var block = document.querySelectorAll('.mose-over');
var colors = ['#000', '#66cdaa', '#0096b5', '#ff2', '#f00', '#ff4'];
for (var i = 0; i < block.length; i++) {
	block[i].addEventListener('mouseover', function(x){
			return function() {
				document.getElementById('logo').style.backgroundColor = colors[x];
			}
	}(i)
	);
}