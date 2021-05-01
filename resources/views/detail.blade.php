@extends('layouts/layout')

@section('content')

<main>
  <div class="contentsArea-s">
    <div class="heading02Wrap">
      <h2 class="heading02">{{ $post->detail_name }}</h2>
    </div>
    <p class="w-50 mx-auto"><img src="../uploads/{{ $post->detail_img }}" alt=""></p>

    <div class="infoArea mt40">

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
    <h3 class="heading03 mt30">コメント</h3>

    <div class="commentArea">

    <p class="commentArea_name d-flex align-items-center">
      <span class="material-icons mr-1">face</span>投稿者名</p>
      <div class="commentArea_item">
        <div>
          <p>コメントです。</p>
        </div>
      </div>

      <p class="commentArea_name d-flex align-items-center">
      <span class="material-icons mr-1">face</span>投稿者名</p>
      <div class="commentArea_item">
        <div>
          <p>コメントです。</p>
        </div>
      </div>

    </div>

    {{ Form::open(['route' => ['post.addComment', $post->id]]) }}
        <textarea class="form-control mb-3" name='add_comment' placeholder="コメント入力" rows="3">{{ old('add_comment') }}</textarea>
        @foreach ($errors->all() as $error)
        <p class="errorText">※{{ $error }}</p>
        @endforeach
        <button class="btn btn-info btn-block mt-5" type="submit">コメント投稿</button>
    {{ Form::close() }}



  </div>
</main>

@endsection