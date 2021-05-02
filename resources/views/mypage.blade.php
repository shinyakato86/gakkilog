@extends('layouts/layout')

@section('content')

<main>
  <div class="contentsArea">
    <div class="l-content-lg">
      <div class="heading02Wrap">
        <h2 class="heading02">MY PAGE</h2>
        <p class="heading02-sub">マイページ</p>
      </div>
      <div class="showFlexArea">
      <div class="profileContent">
        <div class="c-profile">
          <div class="c-profile__img">
            <img src="/images/noimage.jpg" alt="image" class="noimage">
          </div>
          <div class="c-profile__content">
            <h2 class="c-profile__name">こんにちは</h2>
            <p class="c-profile__email">test@co.jp</p>
          </div>
        </div>
        <div class="c-profileArchive">
          <div class="c-secondary__heading">投稿した口コミ</div>
          <ul class="c-list__block"></ul>
        </div> <div class="c-profileArchive">
          <div class="c-secondary__heading">登録したお店</div>
          <ul class="c-list__block"></ul>
        </div>
        <div class="c-profileArchive">
          <div class="c-secondary__heading">お気に入りのお店</div>
          <div class="l-cardWrap"></div>
        </div>
      </div>
      <aside class="sideContent">
        <ul class="p-sideContent">
          <li class="sideItem_item">
            <div class="p-sideItem--profile__box">
              <a href="http://gunma-ramenlog.herokuapp.com/users/mypage" class="sideItem_link">
              <span class="material-icons">account_box</span>
          マイページ</a>
        </div>
        </li>
        <li class="sideItem_item"><div class="p-sideItem--profile__box">
          <a href="http://gunma-ramenlog.herokuapp.com/shops/create" class="sideItem_link"><span class="material-icons">store</span>
          ラーメン屋を登録する
        </a></div></li>
        <li class="sideItem_item">
          <div class="p-sideItem--profile__box">
            <a href="http://gunma-ramenlog.herokuapp.com/review/create" class="sideItem_link"><span class="material-icons">message</span>
            口コミを投稿する</a>
          </div>
        </li>
        <li class="sideItem_item"><div class="p-sideItem--profile__box">
          <a href="http://gunma-ramenlog.herokuapp.com/users/mypage/edit" class="sideItem_link"><i class="material-icons">edit</i>
          プロフィールを編集する
        </a></div>
        </li>
        <li class="sideItem_item"><div class="p-sideItem--profile__box">
          <a href="http://gunma-ramenlog.herokuapp.com/password/reset" class="sideItem_link"><span class="material-icons">vpn_key</span>
          パスワード変更
        </a></div></li> <li class="sideItem_item"><div class="p-sideItem--profile__box">
          <a href="http://gunma-ramenlog.herokuapp.com/deactive" class="sideItem_link "><span class="material-icons">follow_the_signs</span>
          退会
        </a></div></li></ul>
      </aside>
      </div>
    </div>
  </div>
</main>

@endsection