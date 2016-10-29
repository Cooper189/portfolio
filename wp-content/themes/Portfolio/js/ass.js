(function($){
	jQuery.fn.responsiveBlock = function(options){
			var u = this;
		 function make(){
			var l = 0;
			$(u).find('.slide:eq(' + l + ')').css({
				zIndex: 99,
				opacity: 1
			});
			// console.log($(u).find('.left'));
			u.find('.left').on('click', function(event) {
				event.preventDefault();
				if(l < ($(u).find('.slide').length - 1)) {
					$(u).find('.slide').eq(l).animate({zIndex: 0, opacity: 0}, 500, function() {$(u).find('.slide').eq(++l).animate({zIndex: 999, opacity: 1}, 500);});
					/*l++;
					$('.slide:eq(' + l + ')')
					alert($('.slide').length);*/
					console.log($(u).find('.slide').length);
				} else {
					$(u).find('.slide').eq(l).animate({zIndex: 0, opacity: 0}, 500, function() {$(u).find('.slide:eq(' + (l = 0)+ ')').animate({zIndex: 999, opacity: 1}, 500);});
					// alert(l);
				}
			});
			  };
			  return make();
			  };
})(jQuery);