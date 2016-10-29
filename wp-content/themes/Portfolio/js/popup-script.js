jQuery(document).ready(function() {
	var flag = true;
	$('.contact').click(function(){
		$('.popup').slideToggle(400);
		 if (flag == true) {
        $('.contact').css('color', '#4380D3'); 
        flag = false;
    }
   		 else {
        $('.contact').css('color', '#fff'); 
        flag = true;
    }
	});
});
