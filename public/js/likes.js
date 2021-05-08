/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/likes.js ***!
  \*******************************/
$(function () {
  var like = $('.like-toggle');
  var likePostId;
  like.on('click', function () {
    var $this = $(this);
    likePostId = $this.data('post-id'); //ajax処理スタート

    $.ajax({
      headers: {
        //HTTPヘッダ情報をヘッダ名と値のマップで記述
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      //↑name属性がcsrf-tokenのmetaタグのcontent属性の値を取得
      url: '/like',
      //通信先アドレスで、このURLをあとでルートで設定します
      method: 'POST',
      //HTTPメソッドの種別を指定します。1.9.0以前の場合はtype:を使用。
      data: {
        //サーバーに送信するデータ
        'post_id': likePostId //いいねされた投稿のidを送る

      }
    }) //通信成功した時の処理
    .done(function (data) {
      $this.toggleClass('liked'); //likedクラスのON/OFF切り替え。

      $this.find('.like-counter').html(data.post_likes_count);
    }) //通信失敗した時の処理
    .fail(function () {
      console.log('fail');
    });
  });
});
$(function () {
  $('.like-guest').on('click', function () {
    alert('いいね機能はログイン中のみ使用できます。');
  });
});
/******/ })()
;