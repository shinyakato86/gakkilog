@extends('layouts/layout')

@section('content')

<main class="index">
  <div class="section-search">
    <div class="section_inner-search">

      <div class="searchArea">
      <div class="heading02Wrap">
        <h2 class="heading02">SERACH</h2>
        <p class="heading02-sub">検索</p>
      </div>
        <div class="page-searchForm">

          {{ Form::open(['route' => 'post.list','method' => 'get']) }}
            <div class="searchArea_keyword">
              <input type="text" name="keyword" placeholder="キーワードで検索する" class="input-01">
            </div>
            <div class="searchArea_category">
                <p class="searchArea_title">カテゴリーで探す</p>
                <div class="selectWrap">
                  <select name="category_id" class="input-01">
                    <option value="">選択</option>
                      @foreach($categories as $value)
                        <option value="{{ $value->id }}">{{ $value->category_name }}</option>
                      @endforeach
                  </select>
                </div>
            </div>
            <div class="page-searchForm__btn">
              <button type="submit" class="searchBtn">検索する</button> 
            </div>
          {{ Form::close() }}

        </div>
      </div>

    </div>
  </div>

  <section class="section-newPost">
    <div class="section_inner-01">
      <div class="heading02Wrap">
        <h2 class="heading02">NEW</h2>
        <p class="heading02-sub">新着投稿</p>
      </div>
      <div class="newPostArea">

        @foreach($posts as $post)
        <article class="newPostArea_item">
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
      <div class="page-new__btnWrap">
        <a href="{{ route('post.list') }}" class="btn-01 mt-5">一覧を見る</a>
      </div>
    </div>
  </section>

  <section class="section-support">
    <div class="section_inner-01">
      <div class="heading02Wrap">
        <h2 class="heading02">SUPPORT</h2>
        <p class="heading02-sub">できること</p>
      </div>
      <p class="leadText ta-center">レビューや写真で見つけよう！</p>

      <div class="howBlock">

        <div class="howBlock_item">
          <h4 class="heading04">1. 会員登録しよう</h4>
          <span class="material-icons">
          how_to_reg
          </span>
        </div>
        <div class="howBlock_item">

        </div>
        <div class="howBlock_item">

        </div>

      </div>



    </div>
  </section>

</main>

@endsection