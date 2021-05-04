@extends('layouts/layout')

@section('content')

<main>
  <div class="contentsArea-s">
    <div class="heading02Wrap">
      <h2 class="heading02">{{ $post->detail_name }}</h2>
    </div>
    <p class="detailImg"><img src="../uploads/{{ $post->detail_img }}" alt=""></p>
    <div class="iconArea">
      <p class="commentArea_name d-flex align-items-center mr-5">
          <span class="material-icons mr-1">person</span>
          {{ $post->users->name }}
      </p>
      <p class="d-flex align-items-center mr-5">
        <span class="material-icons mr-1">schedule</span>
        {{ $post->users->created_at->format('Y/m/d') }}
      </p>
      <button class="btn-favo"><span class="material-icons">favorite</span>
        お気に入りに登録する
      </button>
      @auth
        @if ($post->user_id === Auth::user()->id)
        {{ Form::open(['method' => 'delete', 'route' => ['post.destroy', $post->id]]) }}
          {{ Form::submit('投稿を削除する', ['class' => 'btn btn-danger ml-3']) }}
        {{ Form::close() }}
        @endif
      @endauth
    </div>
    <div class="infoArea mt30">

      <table class="table-01">
        <tbody>
          <tr>
            <th>メーカー</th>
            <td>{{ $post->detail_maker }}</td>
          </tr>
          <tr>
            <th>名称</th>
            <td>{{ $post->detail_name }}</td>
          </tr>
          <tr>
            <th>詳細</th>
            <td>{{ $post->detail_detail }}</td>
          </tr>
          <tr>
            <th>投稿者コメント</th>
            <td>{{ $post->detail_comment }}</td>
          </tr>
        </tbody>
      </table>

    </div>
    <h3 class="heading03 mt30">コメント一覧</h3>

    <div class="commentArea">
    @if($comments->isEmpty())
      <p class="error">{{$error_text}}</p>
    @endif

      @foreach($comments as $comment)
      <p class="commentArea_name d-flex align-items-center">
        <span class="material-icons mr-1">face</span>
        {{ $comment->author->name }}
      </p>
      <div class="commentArea_item">
        <div>
          <p>{{ $comment->comment }}</p>
        </div>
      </div>
      @endforeach

    </div>

    <h4 class="heading04">コメント投稿</h4>
    {{ Form::open(['route' => ['post.addComment', $post->id]]) }}
        <textarea class="input-01" name='add_comment' placeholder="コメント入力" cols="30" rows="3" required="">{{ old('add_comment') }}</textarea>
        @foreach ($errors->all() as $error)
        <p class="errorText-02">※{{ $error }}</p>
        @endforeach
        <div class="d-flex justify-content-center mt-5">
          {{ Form::submit('コメントを投稿する', ['class' => 'submitBtn']) }}
        </div>
    {{ Form::close() }}



  </div>
</main>

@endsection