@extends('layouts/layout')

@section('content')

<main>
  <div class="contentsArea">

    {{ Form::open(['route' => 'mypage.delete','method' => 'post']) }}
      <div class="heading02Wrap">
        <h2 class="heading02">QUIT</h2>
        <p class="heading02-sub">退会</p>
      </div>
      <p class="ta-center">退会お手続きを行うと、投稿やコメントはすべて削除されます。ご注意ください。</p>

      <div class="d-flex justify-content-center mt40">
        <input class="submitBtn" type="submit" value="退会する">
      </div>
      <a href="{{ route('mypage') }}" class="btn-01 mt50">マイページへ戻る</a>
    {{ Form::close() }}

  </div>
</main>

@endsection