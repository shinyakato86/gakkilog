@extends('layouts/layout')

@section('content')

<main>
  <div class="contentsArea">
    <div class="l-content-lg">
      <div class="heading02Wrap">
        <h2 class="heading02">LIST</h2>
        <p class="heading02-sub">一覧</p>
      </div>
      <div class="showFlexArea">
        <div class="archiveContent">
          <div class="searchList">

            <article class="searchList_item">
              <a href="" class="searchList_link">
                <img src="{{ asset('images\test.png') }}" alt="image">
                <div class="searchList_content">
                  <h3 class="searchList_title">タイトル</h3>
                  <p class="searchList_text">詳細テキスト</p>
                  <div class="searchList_catWrap">
                    <p class="searchList_cat">カテゴリー</p>
                  </div>
                </div>
              </a>
            </article>

            <article class="searchList_item">
              <a href="" class="searchList_link">
                <img src="{{ asset('images\test.png') }}" alt="image">
                <div class="searchList_content">
                  <h3 class="searchList_title">タイトル</h3>
                  <p class="searchList_text">詳細テキスト</p>
                  <div class="searchList_catWrap">
                    <p class="searchList_cat">カテゴリー</p>
                  </div>
                </div>
              </a>
            </article>

            <article class="searchList_item">
              <a href="" class="searchList_link">
                <img src="{{ asset('images\test.png') }}" alt="image">
                <div class="searchList_content">
                  <h3 class="searchList_title">タイトル</h3>
                  <p class="searchList_text">詳細テキスト</p>
                  <div class="searchList_catWrap">
                    <p class="searchList_cat">カテゴリー</p>
                  </div>
                </div>
              </a>
            </article>

            <article class="searchList_item">
              <a href="" class="searchList_link">
                <img src="{{ asset('images\test.png') }}" alt="image">
                <div class="searchList_content">
                  <h3 class="searchList_title">タイトル</h3>
                  <p class="searchList_text">詳細テキスト</p>
                  <div class="searchList_catWrap">
                    <p class="searchList_cat">カテゴリー</p>
                  </div>
                </div>
              </a>
            </article>

          </div>
          <div class="paginationWrap"></div>
        </div>
        <aside class="sideContent">
          <form action="" method="GET">
            <ul class="">
              <li class="p-sideItem p-sideItem--search">
                <p class="p-sideItem__heading"><i class="material-icons">search</i> 検索 </p>
                <div class="p-sideItem--search__keyword"><input type="text" name="keyword" placeholder="キーワードで検索する"></div>
              </li>
              <li class="p-sideItem p-sideItem--search">
                <p class="p-sideItem__heading"><span class="material-icons">done_all</span> 好みで探す </p>
                <div class="p-sideItem--search__select">
                  <div class="c-selectBox"><select name="category_id"><option value="">選択</option> <option value="4">醤油ラーメン</option> <option value="14">塩ラーメン</option> <option value="24">味噌ラーメン</option> <option value="34">豚骨ラーメン</option></select></div>
                </div>
              </li>
              <li class="p-sideItem p-sideItem--btn"><button type="submit" class="c-primary__btn">検索する</button></li>
            </ul>
          </form>
        </aside>
      </div>
    </div>
  </div>
</main>

@endsection