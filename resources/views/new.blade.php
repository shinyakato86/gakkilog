@extends('layouts/layout')

@section('content')

<main>
  <div class="contentsArea">
    <div class="l-content-lg">
       <div class="heading02Wrap">
        <h2 class="heading02">MUSICAL INSTRUMENT</h2>
        <p class="heading02-sub">観光スポット登録</p>
      </div>

      <div class="showFlexArea">

        <div class="registContent">
          {{ Form::open(['route' => 'post.store', 'id' => 'uriage_form','enctype'=>'multipart/form-data']) }}
            <div class="registBlock">
              <div class="registBlock_item">
                <p class="registBlock_text">メーカー</p>
                <input class="input-01" type="text" name="detail_maker" placeholder="" value="{{ old('detail_name') }}" required="">
              </div>

              <div class="registBlock_item">
                <p class="registBlock_text">カテゴリー</p>
                  <div class="selectWrap">
                    <select name="category_id" class="select-01">
                      <option value="">選択</option>
                        @foreach($categories as $value)
                          <option value="{{ $value->id }}">{{ $value->category_name }}</option>
                        @endforeach
                    </select>
                  </div>
              </div>

              <div class="registBlock_item">
                <p class="registBlock_text">名称</p>
                <input class="input-01" type="text" name="detail_name" placeholder="" value="{{ old('detail_name') }}">
              </div>

              <div class="registBlock_item">
                <p class="registBlock_text">詳細</p>
                <textarea name="detail_detail" cols="30" rows="5" class="input-01"></textarea>
              </div>

              <div class="registBlock_item">
                <p class="registBlock_text">コメント</p>
                <textarea name="detail_comment" cols="30" rows="5" class="input-01"></textarea>
              </div>

              <div class="drop-zone mt40" id="js-dropzone">
                <div class="overlay-area" id="js-overlay-area">
                    <p class="no-active" id="js-overlay-text">ここにドラッグ&ドロップしてください。</p>
                </div>
                <p class="drop-zone-text">ファイルを選択するか、ドラッグ&ドロップしてください。</p>
                <label for="file_upload" class="select-file" id="js-select-file">
                    ファイルを選択してください
                    <input class="input-01" type="file" name="detail_img" id="file_upload" placeholder="" value="">
                </label>
                <div class="selected-file no-active" id="js-selected-file">
                </div>
              </div>

            </div>

            <div class="d-flex justify-content-center mt40">
              {{ Form::submit('投稿する', ['class' => 'submitBtn']) }}
            </div>
          {{ Form::close() }}
        </div>

        <aside class="sideContent">
          <ul class="p-sideContent">
            <li class="p-sideItem p-sideItem--profile">
              <div class="p-sideItem--profile__box"> <a href="http://gunma-ramenlog.herokuapp.com/users/mypage" class="p-sideItem--profile__link">
          <span class="material-icons">account_box</span>
          マイページ
        </a> </div>
            </li>
            <li class="p-sideItem p-sideItem--profile">
              <div class="p-sideItem--profile__box"> <a href="http://gunma-ramenlog.herokuapp.com/shops/create" class="p-sideItem--profile__link">
          <span class="material-icons">store</span>
          ラーメン屋を登録する
        </a> </div>
            </li>
            <li class="p-sideItem p-sideItem--profile">
              <div class="p-sideItem--profile__box"> <a href="http://gunma-ramenlog.herokuapp.com/review/create" class="p-sideItem--profile__link">
          <span class="material-icons">message</span>
          口コミを投稿する
        </a> </div>
            </li>
            <li class="p-sideItem p-sideItem--profile">
              <div class="p-sideItem--profile__box"> <a href="http://gunma-ramenlog.herokuapp.com/users/mypage/edit" class="p-sideItem--profile__link">
          <i class="material-icons">edit</i>
          プロフィールを編集する
        </a> </div>
            </li>
            <li class="p-sideItem p-sideItem--profile">
              <div class="p-sideItem--profile__box"> <a href="http://gunma-ramenlog.herokuapp.com/password/reset" class="p-sideItem--profile__link">
          <span class="material-icons">vpn_key</span>
          パスワード変更
        </a> </div>
            </li>
            <li class="p-sideItem p-sideItem--profile">
              <div class="p-sideItem--profile__box"> <a href="http://gunma-ramenlog.herokuapp.com/deactive" class="p-sideItem--profile__link">
          <span class="material-icons">follow_the_signs</span>
          退会
        </a> </div>
            </li>
          </ul>
        </aside>
      </div>
    </div>
  </div>
</main>

@endsection