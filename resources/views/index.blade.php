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

          <form action="" method="GET">
            <div class="searchArea_keyword">
              <input type="text" name="keyword" placeholder="キーワードで検索する" class="input-01">
            </div>
            <div class="searchArea_category">
                <p class="searchArea_title">カテゴリーで探す</p>
                <div class="selectWrap">
                  <select name="category_id" class="select-01">
                    <option value="">選択</option>
                    <option value="">カテゴリー</option>
                    <option value="">カテゴリー</option>
                    <option value="">カテゴリー</option>
                    <option value="">カテゴリー</option>
                  </select>
                </div>
            </div>
            <div class="page-searchForm__btn">
              <button type="submit" class="searchBtn">検索する</button> 
            </div>
          </form>

        </div>
      </div>

    </div>
  </div>

  <section class="section-newPost">
    <div class="section_inner-01">
      <div class="heading02Wrap">
        <h2 class="heading02">NEW</h2>
        <p class="heading02-sub">新着情報</p>
      </div>
      <div class="newPostArea">

      <article class="newPostArea_item">
          <a href="" class="newPostArea_link">
            <div class="newPostArea_img">
              <img src="{{ asset('images\test.png') }}" alt="image">
            </div>
            <div class="newPostArea__content">
              <p class="newPostArea_title">タイトル</p>
              <p class="newPostArea_text">詳細テキスト</p>
              <div class="newPostArea_catWrap">
                <p class="newPostArea_cat">カテゴリー</p>
              </div>
            </div>
          </a>
        </article>

        <article class="newPostArea_item">
          <a href="" class="newPostArea_link">
            <div class="newPostArea_img">
              <img src="{{ asset('images\test.png') }}" alt="image">
            </div>
            <div class="newPostArea__content">
              <p class="newPostArea_title">タイトル</p>
              <p class="newPostArea_text">詳細テキスト</p>
              <div class="newPostArea_catWrap">
                <p class="newPostArea_cat">カテゴリー</p>
              </div>
            </div>
          </a>
        </article>

        <article class="newPostArea_item">
          <a href="" class="newPostArea_link">
            <div class="newPostArea_img">
              <img src="{{ asset('images\test.png') }}" alt="image">
            </div>
            <div class="newPostArea__content">
              <p class="newPostArea_title">タイトル</p>
              <p class="newPostArea_text">詳細テキスト</p>
              <div class="newPostArea_catWrap">
                <p class="newPostArea_cat">カテゴリー</p>
              </div>
            </div>
          </a>
        </article>

        <article class="newPostArea_item">
          <a href="" class="newPostArea_link">
            <div class="newPostArea_img">
              <img src="{{ asset('images\test.png') }}" alt="image">
            </div>
            <div class="newPostArea__content">
              <p class="newPostArea_title">タイトル</p>
              <p class="newPostArea_text">詳細テキスト</p>
              <div class="newPostArea_catWrap">
                <p class="newPostArea_cat">カテゴリー</p>
              </div>
            </div>
          </a>
        </article>

      </div>
      <div class="page-new__btnWrap">
        <a href="" class="c-primary__btn">一覧を見る</a>
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
      <div class="page-support__search">
        <div class="c-searchContent">
          <h3 class="heading03">好みで探す</h3>
          <ul class="categoryList">
            <li class="categoryList_item">
              <a href="" class="c-searchContent__link">ラーメン</a>
            </li>
            <li class="categoryList_item">
              <a href="" class="c-searchContent__link">ラーメン</a>
            </li>
            <li class="categoryList_item">
              <a href="" class="c-searchContent__link">ラーメン</a>
            </li>
            <li class="categoryList_item">
              <a href="" class="c-searchContent__link">ラーメン</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

</main>

@endsection