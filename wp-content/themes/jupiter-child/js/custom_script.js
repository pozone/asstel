(function($){
	$('#user_login').attr( 'placeholder', 'Username' );
	$('#user_pass').attr( 'placeholder', 'Password' );
	setTimeout(function() { 
		$('#sfm-sidebar').find('.search-field').attr( 'placeholder', 'Scrivi e cerca' );
	},1000);



})(jQuery);
