@extends('layouts/layout')

@section('content')

<main class="l-main">
  <div class="l-page">
    <h2 class="c-primary__heading"><span class="c-primary__heading__en">中華蕎麦 つけ麺 五味五香</span></h2>
    <div class="p-shop__head">
      <div class="l-content-sm">
        <div class="p-shop__headInner">
          <div class="p-shop__head__img"> <img src="" alt="image"> </div>
          <div class="p-shop__head__content">
            <div class="p-shop__head__contentHead">
              <h2 class="c-shop__head__heading"> 中華蕎麦 つけ麺 五味五香 </h2>
            </div>
            <p class="p-shop__head__text"> つけ麺やまぜそば、鳥そばなど多彩なメニューがあります。<br> 前橋市の中でも特に人気のラーメン店です。 </p>
            <shop-like :initial-is-liked-by='false' :authorized='false' endpoint="http://gunma-ramenlog.herokuapp.com/shops/24/like">
            </shop-like>
          </div>
        </div>
      </div>
    </div>
    <div class="p-shop__tabs">
      <div class="l-content-sm">
        <ul class="p-shop__tabs__inner">
          <li class="p-shop__tabs__item"> <button class="c-shop__tab" :class="{ 'is-current':tab == 1 }" @click="tab = 1">お店の情報</button> </li>
          <li class="p-shop__tabs__item"> <button class="c-shop__tab " :class="{ 'is-current':tab == 2 }" @click="tab = 2">口コミ</button> </li>
        </ul>
      </div>
    </div>
    <div class="p-shop__tabContent">
      <div class="l-content-sm">
        <div class="p-shop__tabInner p-shop__tabInner--info" v-show="tab === 1">
          <div class="c-tableWrap">
            <table class="c-table">
              <tr class="c-table__block">
                <th class="c-table__head">お店の説明</th>
                <td class="c-table__content"> つけ麺やまぜそば、鳥そばなど多彩なメニューがあります。<br /> 前橋市の中でも特に人気のラーメン店です。 </td>
              </tr>
              <tr class="c-table__block">
                <th class="c-table__head">住所</th>
                <td class="c-table__content"> 〒371-0852 群馬県前橋市総社町総社2014-5 </td>
              </tr>
              <tr class="c-table__block">
                <th class="c-table__head">電話番号</th>
                <td class="c-table__content"> 不明 </td>
              </tr>
              <tr class="c-table__block">
                <th class="c-table__head">定休日</th>
                <td class="c-table__content"> 日曜、祝日 </td>
              </tr>
              <tr class="c-table__block">
                <th class="c-table__head">席数</th>
                <td class="c-table__content"> 11席 </td>
              </tr>
              <tr class="c-table__block">
                <th class="c-table__head">交通手段</th>
                <td class="c-table__content"> 車 </td>
              </tr>
              <tr class="c-table__block">
                <th class="c-table__head">営業時間</th>
                <td class="c-table__content"> 11:00〜14:30 </td>
              </tr>
              <tr class="c-table__block">
                <th class="c-table__head">駐車場情報</th>
                <td class="c-table__content"> 店舗裏にテナント共同駐車場(20)台 </td>
              </tr>
              <tr class="c-table__block">
                <th class="c-table__head">駐車場 GOOGLE MAP</th>
                <td class="c-table__content">
                  <div class="c-table__map"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3211.2051110833304!2d139.0306247148081!3d36.40423248003202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601e8ca8ea2bc75d%3A0x7bd5fae4c3a2db00!2z5Lit6I-v6JWO6bqm44Gk44GR6bq65LqU5ZGz5LqU6aaZ!5e0!3m2!1sja!2sjp!4v1616855881718!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> </div>
                </td>
              </tr>
              <tr class="c-table__block">
                <th class="c-table__head">駐車場（周辺）</th>
                <td class="c-table__content"> </td>
              </tr>
              <tr class="c-table__block">
                <th class="c-table__head">駐車場（周辺） <br>GOOGLE MAP</th>
                <td class="c-table__content"> </td>
              </tr>
              <tr class="c-table__block">
                <th class="c-table__head">設備</th>
                <td class="c-table__content"> カウンター席のみ </td>
              </tr>
              <tr class="c-table__block">
                <th class="c-table__head">その他・備考</th>
                <td class="c-table__content"> ・食券制 </td>
              </tr>
              </tr>
            </table>
          </div>
        </div>
        <div class="p-shop__tabInner p-shop__tabInner--review" v-show="tab === 2">
          <div class="c-review">
            <div class="c-review__head">
              <div class="c-review__userIcon"> <img src="" alt="image" class=""> </div>
              <div class="c-review__head__content">
                <p class="c-review__userName">ayaka</p>
                <div class="c-review__score"> ★★★★★ </div>
              </div>
            </div>
            <div class="c-review__body">
              <p class="c-review__text"> 「牡蠣がお腹いっぱい食べたい！！！」と思ったことはありませんか。私はあります。<br /> <br /> 牡蠣が大好きすぎるので、隙あらば牡蠣を吸いたいと思っています。<br /> <br /> そんな牡蠣を吸いたい欲を満たしてくれるのが五味五香の「牡蠣ラーメン」。文字通り牡蠣を吸えます。<br /> <br /> 鶏白湯のどろっとしたスープへ牡蠣の出汁をふんだんにブレンドしたスープは、一口啜ると牡蠣の風味と甘みが口いっぱいに広がります。<br /> <br /> あまりにも牡蠣の風味がするので「これはラーメンでなく牡蠣を食べているのでは？」と脳内がバグります。<br /> <br /> もっちりモチモチの太麺も固めに茹でてあって歯応え抜群です。<br /> <br /> スープがめちゃめちゃ絡みつくので、箸に取った麺を全てスープに浸してしまうと少し味が濃く感じるかも。半分くらい浸すのがおすすめ。<br /> <br /> 付け合わせの具材は鳥チャーシューとキャベツ。<br /> 鳥チャーシューはしっとりプリプリ。軽く茹でてあるキャベツは箸休めに最高です。<br /> <br /> 麺と具が食べ終わったらスープ割りもできます。ゆずを入れてくれるので最後は口が重たくなりすぎず、さっぱりして食べ終われます。<br /> <br /> 牡蠣が吸いたくなったらまた行きます。ごちそうさまでした。 </p>
              <div class="c-review__photo">
                <div class="c-review__photo__img"> <img src="" alt="image"> </div>
                <div class="c-review__photo__img"> </div>
                <div class="c-review__photo__img"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection