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
      <div class="registContent">
          {{ Form::open(['route' => 'mypage.update']) }}
            <div class="registBlock">
              <div class="registBlock_item">
                <p class="registBlock_text">名前</p>
                <input class="input-01" type="text" name="user_name" placeholder="" value="{{ $auth->name }}" required="">
              </div>
              <div class="registBlock_item">
                <p class="registBlock_text">メールアドレス</p>
                <input class="input-01" type="email" name="user_email" placeholder="" value="{{ $auth->email }}" required="">
              </div>

            </div>

            <div class="d-flex justify-content-center mt40">
              {{ Form::submit('変更する', ['class' => 'submitBtn']) }}
            </div>
          {{ Form::close() }}
        </div>

        <aside class="sideContent">
          <ul class="p-sideContent">
            <li class="sideItem_item">
              <div class="p-sideItem--profile__box">
                <a href="{{ route('mypage') }}" class="sideItem_link">
                <span class="material-icons">account_box</span>
                マイページ</a>
              </div>
            </li>
            <li class="sideItem_item">
              <div class="p-sideItem--profile__box">
                <a href="{{ route('post.new') }}" class="sideItem_link"><span class="material-icons">message</span>
                楽器のレビューを投稿する</a>
              </div>
            </li>
            <li class="sideItem_item">
              <div class="p-sideItem--profile__box">
                  <a href="{{ route('mypage.edit') }}" class="sideItem_link"><i class="material-icons">edit</i>
                  登録情報を編集する
                </a>
              </div>
            </li>
            <li class="sideItem_item">
              <div class="p-sideItem--profile__box">
                <a href="{{ route('mypage.delete_check') }}" class="sideItem_link "><span class="material-icons">follow_the_signs</span>
                退会
                </a>
            </div>
            </li>
          </ul>
        </aside>

        </div>
      </div>
    </div>
  </main>

@endsection