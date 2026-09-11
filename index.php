<?php
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/footer.php';

renderHeader('', 'topPage');
?>
  <main>
    <section class="formosaArea">
      <div class="formosaTop">
        <div class="leftWrap">
          <img src="images/common/flag.svg" alt="flag">
          <h3>Formosa</h3>
          <p>フォルモサ（麗しの島）</p>
        </div>
        <picture class="rightImg">
          <source srcset="images/top/formosa1Pc.png" media="(min-width: 768px)">
          <img src="images/top/formosa1Sp.png" alt="フォルモサ">
        </picture>
      </div>
      <div class="formosaBtm">
        <div class="leftWrap">
          <p class="pDeco">フォルモサは、十六世紀にポルトガル人がエメラルド色の美しい台湾を見つけて発した賛嘆の言葉です。緑にあふれた台湾の美しい風景が、あなたを桃源郷の世界へといざなってくれるでしょう。</p>
        </div>
        <picture class="rightImg">
          <source srcset="images/top/formosa2Pc.png" media="(min-width: 768px)">
          <img src="images/top/formosa2Sp.png" alt="フォルモサ">
        </picture>
      </div>
    </section>
    <section class="mainArea">
      <section class="gallerySec">
        <div class="gallerySecTitle">  
          <h3 class="sectionTitle sideL">Gallery<span class="ja">ギャラリー</span></h3>
        </div>
        <div class="galleryContents">
          <div class="sliderWrap">
            <ul class="imagesSlider">
              <li><img src="images/top/slider1.png" alt="スライド1"></li>
              <li><img src="images/top/slider2.png" alt="スライド2"></li>
              <li><img src="images/top/slider3.png" alt="スライド3"></li>
              <li><img src="images/top/slider4.png" alt="スライド4"></li>
              <li><img src="images/top/slider5.png" alt="スライド5"></li>
            </ul>
            <div class="sliderNav"></div>
          </div>
        </div>
      </section>
      <section class="travelSec">
        <h3 class="sectionTitle sideR">Travel<span class="ja">おすすめスポット</span></h3>
        <div class="travelContents">
          <p class="pDeco">訪れた人々を魅了する「美麗島」台湾。そんな台湾の人気スポットを代表する地を３つのエリアでご紹介。様々な風景に誰もが魅了されます。</p>
          <div class="mapArea">
            <ol class="mapLinks">
              <li class="mapTaipei">
                <a href="taipei/index.php">
                  <picture>
                    <source srcset="images/top/linkTaipeiPc.png" media="(min-width: 768px)">
                    <img src="images/top/linkTaipeiSp.png" alt="台北">
                  </picture>
                </a>
              </li>
              <li class="mapTaichu">
                <a href="taichu/index.php">
                  <picture>
                    <source srcset="images/top/linkTaichuPc.png" media="(min-width: 768px)">
                    <img src="images/top/linkTaichuSp.png" alt="台中">
                  </picture>
                </a>
              </li>
              <li class="mapTainan">
                <a href="tainan/index.php">
                  <picture>
                    <source srcset="images/top/linkTainanPc.png" media="(min-width: 768px)">
                    <img src="images/top/linkTainanSp.png" alt="台南">
                  </picture>
                </a>
              </li>
            </ol>
          </div>
        </div>
        <hr>
      </section>
      <section class="eventSec">
        <h3 class="sectionTitle sideL">Event<span class="ja">おすすめイベント</span></h3>
        <div class="eventContainer">
          <div class="eventContents">
            <h4>台湾ランタンフェスティバル</h4>
            <div class="eventWrap">
              <picture>
                <source srcset="images/top/event1Pc.png" media="(min-width: 768px)">
                <img src="images/top/event1Sp.png" alt="">
              </picture>
              <div class="textWrap">
                <div class="eventPeriod">
                  <h5>開催期間</h5>
                  <p>春節　旧暦元日（2024年2月24日～3月2日予定）</p>
                </div>
                <p class="pDeco">春節の風習として「天燈」と呼ばれる紙製のランタンに無病息災などの祈りを書き込み、火種を用いて熱気球と同じ原理で空に飛ばす儀式。吉祥や邪気払いの意味があります。</p>
              </div>
            </div>
          </div>
          <div class="eventContents">
            <h4>台北最High新年城<br>カウントダウンパーティー</h4>
            <div class="eventWrap">
              <picture>
                <source srcset="images/top/event2Pc.png" media="(min-width: 768px)">
                <img src="images/top/event2Sp.png" alt="">
              </picture>
              <div class="textWrap">
                <div class="eventPeriod">
                  <h5>開催期間</h5>
                  <p>12月31日～1月1日</p>
                </div>
                <p class="pDeco">台北101では毎年、新年を祝う花火を実施。元旦0時から約3分間、台北101を覆い尽くすように、ビル全体から美しい火花が舞い散ります。世界中から注目されるイベントの一つです。</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>


    <section class="basicInfo">
      <h3>台湾基本情報</h3>
      <div class="basicInfoContainer">
        <dl class="basicInfoDl">
          <div class="basicInfoItem">
            <dt>正式名称</dt>
            <dd>中華民国・台湾<br><span class="enText">Republic of China,Taiwan</span></dd>
          </div>
          <div class="basicInfoItem">
            <dt>首都</dt>
            <dd>台北</dd>
          </div>
          <div class="basicInfoItem">
            <dt>人口</dt>
            <dd>約2,300万人</dd>
          </div>
          <div class="basicInfoItem">
            <dt>面積</dt>
            <dd>約3万6,000km²</dd>
          </div>
          <div class="basicInfoItem">
            <dt>人種・民族</dt>
            <dd>漢民族、先住民</dd>
          </div>
          <div class="basicInfoItem">
            <dt>宗教</dt>
            <dd>仏教、道教、キリスト教、その他</dd>
          </div>
          <div class="basicInfoItem">
            <dt>言語</dt>
            <dd>北京語、台湾語</dd>
          </div>
          <div class="basicInfoItem">
            <dt>通貨</dt>
            <dd>元（ニュー台湾ドル）</dd>
          </div>
          <div class="basicInfoItem">
            <dt>時差</dt>
            <dd>1時間 台湾が正午のとき、日本は午後1時</dd>
          </div>
        </dl>
        <div class="basicInfoContent">
          <section class="basicInfoBlock">
            <h4>台湾の気候・服装</h4>
            <p>亜熱帯に属し一年を通して温暖な台湾。しかし北回帰線から南は熱帯で暑く、北部は大陸性気候の影響を受けて冷え込むこともあるなど、地域差を頭に入れて服装の準備を</p>
          </section>
          <section class="basicInfoBlock">
            <h4>台湾の祝祭日</h4>
            <dl class="holidayList">
              <div>
                <dt>正月</dt>
                <dd>1月1日</dd>
              </div>
              <div>
                <dt>春節※</dt>
                <dd>1月20日～29日</dd>
              </div>
              <div>
                <dt>和平記念日</dt>
                <dd>2月28日</dd>
              </div>
              <div>
                <dt>清明節</dt>
                <dd>4月5日</dd>
              </div>
              <div>
                <dt>端午節※</dt>
                <dd>6月22日</dd>
              </div>
              <div>
                <dt>中秋節※</dt>
                <dd>9月29日</dd>
              </div>
              <div>
                <dt>国慶節</dt>
                <dd>10月10日</dd>
              </div>
            </dl>
          </section>
        </div>
      </div>
    </section>
  </main>
<?php renderFooter(); ?>