@extends('layouts/layout')

@section('content')

<main>
  <div class="contentsArea">
    <div class="l-content-lg">
       <div class="heading02Wrap">
        <h2 class="heading02">NEW POST</h2>
        <p class="heading02-sub">新規投稿</p>
      </div>

      <div class="showFlexArea">

        <div class="registContent">
        @foreach ($errors->all() as $error)
          <p class="errorText-02">※{{ $error }}</p>
        @endforeach
          {{ Form::open(['route' => 'post.store', 'enctype'=>'multipart/form-data']) }}
            <div class="registBlock">
              <div class="registBlock_item">
                <p class="registBlock_text">メーカー<span class="icon_required ml-3">必須</span></p>
                <input class="input-01" type="text" name="detail_maker" placeholder="" value="{{ old('detail_maker') }}" required="">
              </div>

              <div class="registBlock_item">
                <p class="registBlock_text">カテゴリー<span class="icon_required ml-3">必須</span></p>
                  <div class="selectWrap">
                    <select name="category_id" class="select-01" required="">
                      <option value="">選択</option>
                        @foreach($categories as $value)
                          <option value="{{ $value->id }}">{{ $value->category_name }}</option>
                        @endforeach
                    </select>
                  </div>
              </div>

              <div class="registBlock_item">
                <p class="registBlock_text">名称<span class="icon_required ml-3">必須</span></p>
                <input class="input-01" type="text" name="detail_name" placeholder="" value="{{ old('detail_name') }}" required="">
              </div>

              <div class="registBlock_item">
                <p class="registBlock_text">詳細<span class="icon_required ml-3">必須</span></p>
                <textarea name="detail_detail" cols="30" rows="5" class="input-01" value="{{ old('detail_detail') }}" required=""></textarea>
              </div>

              <div class="registBlock_item">
                <p class="registBlock_text">コメント<span class="icon_required ml-3">必須</span></p>
                <textarea name="detail_comment" cols="30" rows="5" class="input-01" value="{{ old('detail_comment') }}" required=""></textarea>
              </div>

              <div class="registBlock_item">
                <p class="registBlock_text">画像<span class="fz-s">（ jpeg, png, jpg, gif ）</span><span class="icon_optional ml-3">任意</span></p>

                <div id="drop-zone" class="drop-zone">
                    <p>ファイルをドラッグ＆ドロップもしくは</p>
                    <input type="file" name="detail_img" id="file-input">
                </div>
              </div>
              <div class="registBlock_item">
              <p>アップロードした画像</p>
                <div id="preview"></div>
              </div>
            </div>

            <div class="d-flex justify-content-center mt40">
              {{ Form::submit('投稿する', ['class' => 'submitBtn']) }}
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