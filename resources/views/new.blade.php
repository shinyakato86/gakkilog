@extends('layouts/layout')

@section('content')

<main>
  <div class="contentsArea">
    <div class="l-content-lg">
       <div class="heading02Wrap">
        <h2 class="heading02">SIGHTSEEING SPOT</h2>
        <p class="heading02-sub">観光スポット登録</p>
      </div>

      <div class="showFlexArea">

        <div class="registContent">
          {{ Form::open(['route' => 'post.store', 'id' => 'uriage_form','enctype'=>'multipart/form-data']) }}
            <div class="registBlock">
              <div class="registBlock_item">
                <p class="registBlock_text">名称</p>
                <input class="input-01" type="text" name="detail_name" placeholder="" value="{{ old('detail_name') }}" required="">
              </div>

              <div class="registBlock_item">
                <p class="registBlock_text">営業時間</p>
                <input class="input-01" type="text" name="detail_time" placeholder="" value="{{ old('detail_time') }}">
              </div>

              <div class="registBlock_item">
                <p class="registBlock_text">画像</p>
                <input class="input-01" type="file" name="detail_img" placeholder="" value="">
              </div>

            </div>

            <div class="p-form__btn">
              {{ Form::submit('投稿する', ['class' => 'submitBtn']) }}
            </div>
          {{ Form::close() }}
        </div>

        <aside class="sideContent">
          <ul class="p-sideContent">
            <li class="p-sideItem p-sideItem--profile">
              <div class="p-sideItem--profile__box"> <a href="http://gunma-ramenlog.herokuapp.com/users/mypage" class="p-sideItem--profile__link">
          <span class="material-icons">account_box</span>
          マイページ
        </a> </div>
            </li>
            <li class="p-sideItem p-sideItem--profile">
              <div class="p-sideItem--profile__box"> <a href="http://gunma-ramenlog.herokuapp.com/shops/create" class="p-sideItem--profile__link">
          <span class="material-icons">store</span>
          ラーメン屋を登録する
        </a> </div>
            </li>
            <li class="p-sideItem p-sideItem--profile">
              <div class="p-sideItem--profile__box"> <a href="http://gunma-ramenlog.herokuapp.com/review/create" class="p-sideItem--profile__link">
          <span class="material-icons">message</span>
          口コミを投稿する
        </a> </div>
            </li>
            <li class="p-sideItem p-sideItem--profile">
              <div class="p-sideItem--profile__box"> <a href="http://gunma-ramenlog.herokuapp.com/users/mypage/edit" class="p-sideItem--profile__link">
          <i class="material-icons">edit</i>
          プロフィールを編集する
        </a> </div>
            </li>
            <li class="p-sideItem p-sideItem--profile">
              <div class="p-sideItem--profile__box"> <a href="http://gunma-ramenlog.herokuapp.com/password/reset" class="p-sideItem--profile__link">
          <span class="material-icons">vpn_key</span>
          パスワード変更
        </a> </div>
            </li>
            <li class="p-sideItem p-sideItem--profile">
              <div class="p-sideItem--profile__box"> <a href="http://gunma-ramenlog.herokuapp.com/deactive" class="p-sideItem--profile__link">
          <span class="material-icons">follow_the_signs</span>
          退会
        </a> </div>
            </li>
          </ul>
        </aside>
      </div>
    </div>
  </div>
</main>

@endsection