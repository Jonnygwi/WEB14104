var MIN_LENGTH = 3;
$( document ).ready(function() {
	$("#coursesearch").keyup(function() {
		var keyword = $("#coursesearch").val();
		if (keyword.length >= MIN_LENGTH) {
			$.get( "<?php theActiveThemeDirectory(); ?>auto-complete.php", { keyword: keyword } )
			  .done(function( data ) {
			    console.log(data);
			  });
		}
	});

});