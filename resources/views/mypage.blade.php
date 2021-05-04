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
        <div class="myprofile mb40">
          <div class="myprofile_img">
          <span class="material-icons">
            face
          </span>
          </div>
          <div class="myprofile_content">
            <h2 class="myprofile_name">名前：{{ $auths->name }}</h2>
            <p class="myprofile_email">メールアドレス：{{ $auths->email }}</p>
          </div>
        </div>
        <div class="profileArchive">
          <h3 class="heading03">投稿したレビュー</h3>
          <ul class="profileArchive_list">

          @if($posts->isEmpty())
            <p class="error">{{$error_text}}</p>
          @endif

          @foreach($posts as $post)
            <li class="profileArchive_item"><span class="material-icons">navigate_next</span><a class="profileArchive_link" href="/post/detail_{{ $post->id}}">{{ $post->detail_name }}</a></li>
          @endforeach

          </ul>
        </div> 
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