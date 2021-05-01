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


  let tabs = $(".tabBtn");
  $(".tabBtn").on("click", function() {
    $(".is-active").removeClass("is-active");
    $(this).addClass("is-active");
    const index = tabs.index(this);
    $(".tabContent_item").removeClass("show").eq(index).addClass("show");
  })


	const dropzone = document.getElementById('js-dropzone');
	const overlayText = document.getElementById('js-overlay-text');
	const overlayArea = document.getElementById('js-overlay-area');
	const fileInput = document.getElementById('file_upload');
	const selectedFile = document.getElementById('js-selected-file');
	
	// ドロップ可能エリアに入った時
	dropzone.addEventListener('dragenter', () => {
			overlayArea.classList.add('overlay');
			overlayText.classList.add('overlay-text');
			overlayText.classList.remove('no-active');
	});
	
	// ドロップ可能エリアを出た時
	overlayArea.addEventListener('dragleave', () => {
			overlayArea.classList.remove('overlay');
			overlayText.classList.remove('overlay-text');
			overlayText.classList.add('no-active');
	});
	
	// ドロップ可能エリアにカーソルがある時
	overlayArea.addEventListener('dragover', (e) => {
			e.preventDefault();
	});
	
	// ファイルをドロップした時
	overlayArea.addEventListener('drop', (e) => {
			e.preventDefault();
			var fileName = e.dataTransfer.files[0].name;
			selectedFile.innerText = fileName;
			selectedFile.classList.remove('no-active');
			overlayArea.classList.remove('overlay');
			overlayText.classList.remove('overlay-text');
			overlayText.classList.add('no-active');
	});
	
	fileInput.addEventListener('change', () => {
			var fileName = fileInput.files[0].name;
			selectedFile.classList.remove('no-active');
			selectedFile.innerText = fileName;
	});

});
