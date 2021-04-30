$(function(){
	'use strict';
	
	// ヘッダーMENUボタン
	$('.js-headerSpMenuBtn').on('click', function(){

		$(this).toggleClass('is-active');
		$('.js-headerNavList').slideToggle(300);

		if($('.header').hasClass('is-active')) {
			setTimeout(function(){
				$('.header').removeClass('is-active');
			},320);
			}else {
				$('.header').addClass('is-active');
		}

    if($('.js-spHeaderSearch').hasClass('is-active')) {
			$('.js-spHeaderSearch').toggleClass('is-active');
			$('.spHeaderSearch_text').text('検 索');
		
			if($('.js-spHeaderSearch').hasClass('is-active')) {
				$('.spHeaderSearch_text').text('戻 る');
			}

			$('.js-searchBox').slideToggle(300);
    }
	});

	// ウインドウ幅を変えるとメニュー閉じる
	$(window).on('load resize', function(){
		var w = $(window).outerWidth();
		var x = 964;
		if (w > x) {
			$('.js-headerNav').css('display','block');
		}else {
			$('.js-headerNav').removeAttr('style');
	
			if($('.header').hasClass('is-active')) {
				$('.headerDonate').removeClass('is-passive');
				$('.spHeaderSearch').removeClass('is-passive');
				$('.js-headerSpMenuBtn').removeClass('is-active');
				$('.header').removeClass('is-active');
			}
		}
	});

	// pagetopボタン
	const pagetop = $('#js-pagetop');
	pagetop.on('click', function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
	
});

