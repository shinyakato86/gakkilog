@extends('layouts/layout')

@section('content')

<main>
  <div class="contentsArea">
    <div class="l-content-lg">
      <div class="heading02Wrap">
        <h2 class="heading02">POSTS LIST</h2>
        <p class="heading02-sub">投稿一覧</p>
      </div>
      <div class="showFlexArea">
        <div class="archiveContent">
          <div class="newPostArea">

          @foreach($posts as $post)
            <article class="newPostArea_item-02">
              <a href="{{ route('post.detail', ['id' =>  $post->id]) }}" class="newPostArea_link">
                <div class="newPostArea_img">
                  <img src="../uploads/{{ $post->detail_img }}" alt="image">
                </div>
                <div class="newPostArea_content">
                  <p class="newPostArea_title">{{ htmlspecialchars( str_limit($post->detail_name, $limit = 24, $end = '...') ) }}</p>
                  <p class="newPostArea_text">{{ htmlspecialchars( str_limit($post->detail_detail, $limit = 54, $end = '...') ) }}</p>
                  <div class="newPostArea_catWrap">
                    <p class="newPostArea_cat">{{ $post->category->category_name }}</p>
                  </div>
                </div>
              </a>
            </article>
          @endforeach

          </div>
          <div class="paginationWrap"></div>
        </div>
        <aside class="sideContent">
          {{ Form::open(['route' => 'post.list','method' => 'get']) }}
            <ul class="">
              <li class="p-sideItem p-sideItem--search">
                <p class="p-sideItem__heading"><i class="material-icons">search</i> 検索 </p>
                <div class="p-sideItem--search__keyword">
                  <input type="text" name="keyword" placeholder="キーワードで検索する">
                </div>
              </li>
              <li class="p-sideItem p-sideItem--search">
                <p class="p-sideItem__heading"><span class="material-icons">done_all</span> 好みで探す </p>
                <div class="p-sideItem--search__select">
                  <div class="c-selectBox">
                    <select name="category_id">
                      <option value="">選択</option>
                        @foreach($categories as $value)
                          <option value="{{ $value->id }}">{{ $value->category_name }}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
              </li>
              <li class="p-sideItem p-sideItem--btn"><button type="submit" class="c-primary__btn">検索する</button></li>
            </ul>
          {{ Form::close() }}
        </aside>
      </div>
    </div>
  </div>
</main>

@endsection