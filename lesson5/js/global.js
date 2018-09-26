$(document).ready(function(){
	$('#lesson5_gallery img').on('click', function(){
		let img_id = $(this).attr("id");
		$('.lesson5_wrapper').load('photo.php?img_id=' + img_id + '#lesson5_full_image');
		$('.lesson5_wrapper').css('display', 'block');	
		$('body').css('opacity', '.7');
	});
	$('.lesson5_wrapper').on('click', function(){
		$('.lesson5_wrapper').css('display', 'none');
		$('body').css('opacity', '1.0');
		location.reload();
	});
});

function like_plus(id) {
		let img_id = id;
		$.get( "ajax/likes.php?img_id=" + img_id , function( data ) {
			$( '#like_' + img_id ).next().html( data );
		});
}