$(function() {

	nice();

	if (!Modernizr.svgasimg) {
		$('img').each(function() {
			var src = $(this).attr('src');
			if (src.indexOf('svg') > 0) {
				src = src.replace('svg', 'png');
				$(this).attr('src', src);
			}
		});
	}

	$('input[type="tel"]').mask('+38 (000) 999-99-99');

	$('table').each(function() {
		if (!$(this).is('.noresponsive')) {
			$(this).wrap('<div class="responsive-table"></div>');
		}
	});

	$('p img').each(function() {
		var alt = $(this).attr('alt'),
			title = $(this).attr('title'),
			float = $(this).css('float'),
			float_class = '';

		var imgtitle = '';

		if (title) {
			imgtitle = title;
		} else if (alt) {
			imgtitle = alt;
		}

		var w = parseInt($(this).css('width'));
		if (!w) {
			w = parseInt($(this).attr('width'));
			if (!w) {
				w = parseInt($(this).width());
			}
		}
		w += 'px';

		if (float == 'left' || float == 'right') {
			if (float == 'left') {
				float_class = ' pimg_left';
			} else if (float == 'right') {
				float_class = ' pimg_right';
			}
		} else {
			float_class = ' pimg_center';
		}

		$(this).wrap('<div class="pimg' + float_class + '" title="' + imgtitle + '" style="width: ' + w + '"></div>');
		$(this).css({
			float: 'none',
			height: 'auto',
			margin: 0,
			width: '100%'
		});

		if (imgtitle) {
			$(this).parent('.pimg').append('<span>' + alt + '</span>');
		}
	});


	$('.mobile-switch').on('click', function() {
		$('.mobile-menu').slideDown();
	});
	$('.mobile-close').on('click', function() {
		$('.mobile-menu').slideUp();
	})


	$(window).on('load resize scroll', function() {
		var window_pos = $(this).scrollTop();

		if (window_pos >= $('header').outerHeight()) {
			$('body, header').addClass('active');
		} else {
			$('body, header').removeClass('active');
		}
	});


 if ($('.article-slider .item').length > 1) {
		$('.article-slider').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			asNavFor: '.article-slider-nav',
			//fade: true,
			autoplay: false,
			autoplaySpeed: 6000,
			//infinite: true,
			arrows: false,
			dots: false,
			adaptiveHeight: true
    });
	}

    $('.article-slider-nav').slick({
        variableWidth: true,
		 slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.article-slider',
        nextArrow: '<a data-role="none" class="slick-next" aria-label="" tabindex="0" role="button"></a>',
        prevArrow: '<a data-role="none" class="slick-prev" aria-label="" tabindex="0" role="button"></a>',
        dots: false,
        centerMode: true,
        focusOnSelect: true
    });

    $('.list_partners_slider').slick({
  
				slidesToShow: 8,
        slidesToScroll: 1,
        nextArrow: '<a data-role="none" class="slick-next" aria-label="" tabindex="0" role="button"></a>',
        prevArrow: '<a data-role="none" class="slick-prev" aria-label="" tabindex="0" role="button"></a>',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
				responsive: [
					{
						breakpoint: 768,
						settings: {
							variableWidth: false,
							slidesToShow: 2
						}
					}
				]
    });


    $('.bottom-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        nextArrow: '<a data-role="none" class="slick-next" aria-label="" tabindex="0" role="button"></a>',
        prevArrow: '<a data-role="none" class="slick-prev" aria-label="" tabindex="0" role="button"></a>',
        dots: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }
		]
	});
 


    $('[data-modal]').on('click', function() {
		var modal_window = $(this).attr('data-modal');
		closeModals();
		showModal(modal_window);
	});
	$('.modal-close').on('click', function() {
		var modal_window = $(this).closest('modal-form').attr('id');
		closeModals();
		$('#' + modal_window).trigger('modal_window:off');
	});
	$('.modal-form').on('modal_window:on', function() {
		$(document).on('mouseup', function(e) {
			var container = $('.modal-form, #ui-datepicker-div');
			if (!container.is(e.target) && container.has(e.target).length === 0) {
				closeModals();
				container.trigger('modal_window:off');
			}
		});
	});

}); // eo ready


function showModal(id) {
	if ($('#' + id).length) {
		$('#modal-back').addClass('active');
		$('#' + id).addClass('active').trigger('modal_window:on');
	}
}
function closeModals() {
	$('#modal-back, .modal-form').removeClass('active');
}


function resetForm(el) {
	$('input[type="text"], input[type="tel"], input[type="email"], input[type="file"], input[type="url"], input[type="number"], textarea', el).val('');
	$('input[type="checkbox"], input[type="radio"]', el).removeAttr('checked');
	$('select option', el).removeAttr('selected');
	$('select option:first', el).attr('selected', 'selected');
	$('.autoplace', el).each(function() {
		var rel = $(this).attr('rel');
		$(this).val(rel);
	});
}


function validate_form(id) {
	var
		url  = window.location.href,
		name = $('#' + id + ' .form-name'),
		tel  = $('#' + id + ' .form-tel'),

		f_tel = false,

		error_class = 'has-error';

	var tel_check = tel.val();
	tel_check = tel_check.replace(/\s/g, '');
	if (tel_check === '') {
		tel.addClass(error_class);
		f_tel = false;
	} else {
		tel.removeClass(error_class);
		f_tel = true;
	}

	if (!f_tel) {
		return;
	}

	$('#' + id + ' .btn').css({ 'visibility': 'hidden' });

	$.ajax({
		url: '/feedback',
		type: 'post',
		data: {
			"_token": $('meta[name="_token"]').attr('content'),
			type_form: 'call',
			url: url,
			name: name.val(),
			tel: tel.val()
		},
		dataType: 'json',
		success: function(json) {
			if (json.success) {
				resetForm($('#' + id));
				closeModals();
				swal({ title: 'Отправлено', text: 'Заявка отправлена!', type: 'success' });
			} else {
				swal({ title: 'Ошибка', text: 'Попробуйте еще раз!', type: 'error' });
			}

			$('#' + id + ' .btn').css({ 'visibility': 'visible' });
		}
	});
}


/**** nice inputs ****/
function nice() {
	$.each($('.nicecheck, .niceradio'), function() {
		if ($('input', this).is(':checked')) {
			$(this).addClass('checked');
		} else {
			$(this).removeClass('checked');
		}

		if ($('input', this).is(':disabled')) {
			$(this).addClass('disabled');
		} else {
			$(this).removeClass('disabled');
		}
	});

	$('.nicecheck input').on('change', function() {
		var
			input = $(this),
			input_label = input.closest('label');

		if (!input.is(':checked')) {
			input.attr('checked', false);
			input_label.removeClass('checked');
		} else {
			input.attr('checked', true);
			input_label.addClass('checked');
		}
	});

	$('.niceradio input').on('change', function() {
		var
			input = $(this),
			name  = input.attr('name');

		$('input[name="' + name + '"]').removeAttr('checked');
		input.attr('checked', 'checked');

		$('input[name="' + name + '"]').closest('label').removeClass('checked');
		input.closest('label').addClass('checked');
	});
}