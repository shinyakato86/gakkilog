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
      <div class="page-new__btnWrap mt-5">
        <a href="{{ route('post.list') }}" class="btn-01">一覧を見る</a>
      </div>
    </div>
  </section>

  <section class="section-support">
    <div class="section_inner-01">
      <div class="heading02Wrap">
        <h2 class="heading02">ABOUT</h2>
        <p class="heading02-sub">できること</p>
      </div>
      <p class="leadText ta-center">みんなが使用している楽器の情報を共有しよう！</p>

      <div class="howBlock mt30">

        <div class="howBlock_item">
          <h5 class="heading05">1. 会員登録しよう</h5>
          <span class="material-icons index">
          how_to_reg
          </span>
          <p class="howBlock_text">会員登録するとレビューが<br>投稿できるようになります。</p>
        </div>
        <div class="howBlock_item">
          <h5 class="heading05">2. レビューを投稿しよう</h5>
          <span class="material-icons index">
          post_add
          </span>
          <p class="howBlock_text">あなたが使用している<br>楽器のレビューを投稿しよう。</p>
        </div>
        <div class="howBlock_item">
          <h5 class="heading05">3. コメントを投稿しよう</h5>
          <span class="material-icons index">
          chat
          </span>
          <p class="howBlock_text">他の人が投稿したレビューに<br>コメントをつけて共有しよう。</p>
        </div>

      </div>

      <div class="page-new__btnWrap mt-5">
        @guest
        <a href="{{ route('login') }}" class="btn-01">ログイン</a>
        @else
        <a href="{{ route('post.new') }}" class="btn-01">レビュー投稿</a>
        @endguest
      </div>

    </div>
  </section>

</main>

@endsection