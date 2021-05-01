@extends('layouts/layout')

@section('content')

<main>
  <div class="contentsArea-s">
    <div class="heading02Wrap">
      <h2 class="heading02">{{ $detailpost->detail_name }}</h2>
    </div>

    <div class="tabArea">

      <div class="">

            <button class="tabBtn is-active">情報</button>

            <button class="tabBtn">口コミ</button>

      </div>

      <div class="tabContent">

        <div class="tabContent_item show">

          <table class="table-01">
            <tbody>
              <tr>
                <th>説明</th>
                <td></td>
              </tr>
              <tr>
                <th>営業時間</th>
                <td>{{ $detailpost->detail_time }}</td>
              </tr>
            </tbody>
          </table>
          <p>タブ１の中身です<p>



        </div>

        <div class="tabContent_item">
          <p>タブ2の中身です<p>
        </div>

      </div>

    </div>
  </div>
</main>

@endsection