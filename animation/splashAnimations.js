function moveDaleks() {
	$(".splashDalek").hide();
	//20%
	//75%
	alert("hi");
	$(".splashDalek").show();
	//$("#dalekRight").animate({left:'+20%;'},2000);
	//$("#dalekLeft").animate({left:'75%;'},2000);
	$("#dalekRight").css({left:'20%'});
	$("#dalekLeft").css({left:'75%'});
}

$(document).ready(function() {
	//hide the daleks, initialize, show, animate 
		$('#daleks').animate({left: '10px'}, 1000, function() {
			$(this).find('div.faceRight').animate({
				top: '0',
				left: '20%'
			}, 2000);
			$(this).find('div.faceLeft').animate({
				top: '0',
				right: '20%'
			}, 2000);
	});
});