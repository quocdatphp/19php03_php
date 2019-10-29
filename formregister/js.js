$('#signup').click(function(){
	$('.pinkbox').css('transform', 'translateX(95%)');
	$('.signin').addClass('nodisplay');
	$('.signup').removeClass('nodisplay');
});
$('#signin').click(function(){
	$('.pinkbox').css('transform', 'translateX(0%)');
	$('.signup').addClass('nodisplay');
	$('.signin').removeClass('nodisplay');
})
// $('.city').ready(function(){
// 	$('.dropdown').click(function(){
// 		$('.select-menu').slideToggle("slow");
// 	});
// });
