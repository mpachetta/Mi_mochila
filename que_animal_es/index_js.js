$(document).ready(function () {
	var altura = $('#barraNav').offset().top;

	$(window).on('scroll', function () {
		if ($(window).scrollTop() > altura) {
			$('#barraNav').addClass('menu-fixed');
		} else {
			$('#barraNav').removeClass('menu-fixed');
		}
	});

	$('#buscador').keyup(function () {

		var nombres = $('.titulos');
		var buscando = $(this).val();
		var item = '';
		for (var i = 0; i < nombres.length; i++) {
			item = $(nombres[i]).html().toLowerCase();
			for (var x = 0; x < item.length; x++) {
				if (buscando.length == 0 || item.indexOf(buscando) > -1) {
					$(nombres[i]).parents('.publicaciones').show();

				} else {
					$(nombres[i]).parents('.publicaciones').hide();

				}
			}
		}
	});

	$("#buscador").focus(() => {
		$("#buscador").css({
			backgroundImage: "none"
		})

	}).focusout(() => {
		$("#buscador").css({
			backgroundImage: "url('search.png')",

		});

		$("#buscador").val("")
	});







});