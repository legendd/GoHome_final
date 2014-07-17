$(document).ready(function(){
	$('#hottest').mouseover(function(){
		$('#hottest').css('-moz-box-shadow','0 0 5px 5px #888');
 		$('#hottest').css('-webkit-box-shadow','0 0 5px 5px#888');
 		$('#hottest').css('box-shadow','0 0 2px 2px #888');		
	})
	$('#hottest').mouseout(function(){
		$('#hottest').css('box-shadow','none');		
	})
	$('#latest').mouseover(function(){
		$('#latest').css('-moz-box-shadow','0 0 5px 5px #888');
 		$('#latest').css('-webkit-box-shadow','0 0 5px 5px#888');
 		$('#latest').css('box-shadow','0 0 2px 2px #888');			
	})
	$('#latest').mouseout(function(){
		$('#latest').css('box-shadow','none');		
	})

	$('#hottest').click(function(){
		$('.hottestpage').fadeIn();
		$('.latestpage').fadeOut();
		$('#hottest').css('background-color','#f38a8d');
		$('#latest').css('background-color','white');
	});

	$('#latest').click(function(){
		$('.hottestpage').fadeOut();
		$('.latestpage').fadeIn();
		$('#latest').css('background-color','#f38a8d');
		$('#hottest').css('background-color','white');
	});
});

