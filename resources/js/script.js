$(function(){
	'use strict';
	
	// ヘッダーMENUボタン
	$('.js-headerSpMenuBtn').on('click', function(){
		$('.header').toggleClass('is-active');
		$(this).toggleClass('is-active');
		$('.js-headerNav').slideToggle(300);


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


	var dropZone = document.getElementById('drop-zone');
	var preview = document.getElementById('preview');
	var fileInput = document.getElementById('file-input');

	dropZone.addEventListener('dragover', function(e) {
			e.stopPropagation();
			e.preventDefault();
			this.style.background = '#e1e7f0';
	}, false);

	dropZone.addEventListener('dragleave', function(e) {
			e.stopPropagation();
			e.preventDefault();
			this.style.background = '#ffffff';
	}, false);

	fileInput.addEventListener('change', function () {
			previewFile(this.files[0]);
	});

	dropZone.addEventListener('drop', function(e) {
			e.stopPropagation();
			e.preventDefault();
			this.style.background = '#ffffff'; //背景色を白に戻す
			var files = e.dataTransfer.files; //ドロップしたファイルを取得
			if (files.length > 1) return alert('アップロードできるファイルは1つだけです。');
			fileInput.files = files; //inputのvalueをドラッグしたファイルに置き換える。
			previewFile(files[0]);
	}, false);

	function previewFile(file) {
			/* FileReaderで読み込み、プレビュー画像を表示。 */
			var fr = new FileReader();
			fr.readAsDataURL(file);
			fr.onload = function() {
					var img = document.createElement('img');
					img.setAttribute('src', fr.result);
					preview.innerHTML = '';
					preview.appendChild(img);
			};
	}

});

