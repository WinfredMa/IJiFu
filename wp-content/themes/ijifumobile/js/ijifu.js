(function ( $ ) {
	var navigationMenu = $('.js-menu-item');
	navigationMenu.on('click', _activeMenu);

	function _activeMenu() {
		navigationMenu.removeClass('active');
		$(this).addClass('active');
		console.log($(this));
		alert(11);
	}
})(jQuery)