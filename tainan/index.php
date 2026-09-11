<?php
require __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/footer.php';

renderHeader(
    '台南',
    'subPage tainan',
    'images/sub/tainan/tainanLogo.png',
    '台南',
    '台湾の古都「台南」台南はお寺などの史跡巡りや、リノベエリアの散策が楽しめる、新旧の魅力が交わる街です。'
);
?>
  <main>
    <section class="mainArea">
      <section class="attractionSec tainanAttraction">
        <h3 class="sectionTitle sideL">Attraction<span class="ja">観光名所</span></h3>
        <div class="attractionWrap">
          <div class="attractionContents">
            <h4>安平老街</h4>
            <div class="contentsWrap">
              <div class="pictWrap">
                <picture>
                  <source srcset="../images/sub/tainan/attrc1MainPc.png" media="(min-width: 768px)">
                  <img src="../images/sub/tainan/attrc1MainSp.png" alt="安平老街メイン画像">
                </picture>
              </div>
              <div class="textWrap">
                <p>「台湾の京都」の異名をとる、古都・台南。かつて台湾の首都であったことから、重要な史跡が点在し、ノスタルジックなムードが漂っています。17世紀に造られた台湾最古の街は現在、台湾レトロとも称され数々の掘り出し物やお土産、飲食店が立ち並び写真スポットとしても人気の高いエリアになっています。</p>
              </div>
            </div>
            <div class="contentsWrap">
              <div class="pictWrap pictWrapGrid">
                <picture>
                  <source srcset="../images/sub/tainan/attrc1Sub1Pc.png" media="(min-width: 768px)">
                  <img src="../images/sub/tainan/attrc1Sub1Sp.png" alt="安平老街サブ画像1">
                </picture>
                <picture>
                  <source srcset="../images/sub/tainan/attrc1Sub2Pc.png" media="(min-width: 768px)">
                  <img src="../images/sub/tainan/attrc1Sub2Sp.png" alt="安平老街サブ画像2">
                </picture>
              </div>
              <div class="textWrap">
                <p>露店めぐりは日中、ノスタルジックな撮影は夜がおすすめです。</p>
              </div>
            </div>
          </div>
          <hr>
          <div class="attractionContents">
            <h4>赤崁楼</h4>
            <div class="contentsWrap">
              <div class="pictWrap">
                <picture>
                  <source srcset="../images/sub/tainan/attrc2MainPc.png" media="(min-width: 768px)">
                  <img src="../images/sub/tainan/attrc2MainSp.png" alt="赤崁楼メイン画像">
                </picture>
              </div>
              <div class="textWrap">
                <p>赤嵌楼（赤嵌樓）は台南中西区の代表的な古跡で、安平区の安平古堡と並んで台南の二大古跡になっています夜になると、赤嵌楼周辺には黄色いライトが灯り、古い建築物をより一層味わい深く演出します。前方の広場ではよく音楽会が催され、台南市民の夜の憩いの場になっています。赤嵌楼は、昼も夜も独特の魅力で楽しませてくれます。</p>
              </div>
            </div>
            <div class="contentsWrap">
              <div class="pictWrap pictWrapGrid">
                <picture>
                  <source srcset="../images/sub/tainan/attrc2Sub1Pc.png" media="(min-width: 768px)">
                  <img src="../images/sub/tainan/attrc2Sub1Sp.png" alt="赤崁楼サブ画像1">
                </picture>
                <picture>
                  <source srcset="../images/sub/tainan/attrc2Sub2Pc.png" media="(min-width: 768px)">
                  <img src="../images/sub/tainan/attrc2Sub2Sp.png" alt="赤崁楼サブ画像2">
                </picture>
              </div>
              <div class="textWrap openingHoursWrap">
                <p>遅い時間帯はライトアップも楽しめます。</p>
                <p class="openingHours">8:30 ～21:30</p>
              </div>
            </div>
          </div>
          <hr>
        </div>
      </section>
      <section class="gourmetSec">
        <h3 class="sectionTitle sideR">Gourmet<span class="ja">グルメ</span></h3>
        <div class="gourmetContents">
          <div class="textWrap">
            <p class="pDeco">グルメが有名な台湾において特に有名であり、台南でしか味わえないものをご紹介いたします。</p>
          </div>
          <div class="gourmetWrap">
            <div class="contentsWrap">
              <h4>担仔麺<span>タンツーメン</span></h4>
              <picture>
                <source srcset="../images/sub/tainan/gourmet1Pc.png" media="(min-width: 768px)">
                <img src="../images/sub/tainan/gourmet1Sp.png" alt="担仔麺">
              </picture>
              <div class="textWrap">
                <p>日本の台湾ラーメンの元祖とも言われるグルメ。中でも「度小月」は各地に支店を持つ人気店。台南ではその度小月本店があり連日大人気です。</p>
                <button type="button" class="js-modal-btn" data-target="tainanModal1">画像を見る</button>
              </div>
            </div>
            <div class="contentsWrap">
              <h4>蝦仁飯<span>エビ飯</span></h4>
              <picture>
                <source srcset="../images/sub/tainan/gourmet2Pc.png" media="(min-width: 768px)">
                <img src="../images/sub/tainan/gourmet2Sp.png" alt="蝦仁飯">
              </picture>
              <div class="textWrap">
                <p>台南10大美食にも選ばれている代表料理。中でも有名なのが「矮仔成」。台湾でも台南に来ないと味わえない料理で日本人が大好きな味です。</p>
                <button type="button" class="js-modal-btn" data-target="tainanModal2">画像を見る</button>
              </div>
            </div>
            <div class="contentsWrap">
              <h4>小籠包<span>ショウロンポー</span></h4>
              <picture>
                <source srcset="../images/sub/tainan/gourmet3Pc.png" media="(min-width: 768px)">
                <img src="../images/sub/tainan/gourmet3Sp.png" alt="小籠包">
              </picture>
              <div class="textWrap">
                <p>台湾料理のといえば小籠包。台南にある「上海華都小吃」は、ミシュラン掲載実績や台湾政府から表彰されている元祖「松針小籠包」誕生の地です。</p>
                <button type="button" class="js-modal-btn" data-target="tainanModal3">画像を見る</button>
              </div>
            </div>
            <div class="contentsWrap">
              <h4>鴨肉飯<span>ヤーロウファン</span></h4>
              <picture>
                <source srcset="../images/sub/tainan/gourmet4Pc.png" media="(min-width: 768px)">
                <img src="../images/sub/tainan/gourmet4Sp.png" alt="鴨肉飯">
              </picture>
              <div class="textWrap">
                <p>小吃（シャオチー）と呼ばれる台湾の軽食文化、その中でも人気な一品が「亞德當歸鴨」の鴨肉飯。やすい・はやい・うまいの原点です。</p>
                <button type="button" class="js-modal-btn" data-target="tainanModal4">画像を見る</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pickupSec">
        <h3 class="sectionTitle sideL">Pickup<span class="ja">ピックアップ</span></h3> 
        <div class="pickupContents">
          <div class="textWrap">
            <h4><span>蓮と温泉の国</span><span>白河</span></h4>
            <hr>
            <p>きらびやかな都心や歴史情緒ある台湾。そんな台湾のもう一つの楽しみ方が自然に囲まれながらの観光です。観光客の少ない所でゆっくり楽しみたい方におすすめです。</p>
          </div>
          <div class="pickupWrap">
            <div class="contentsWrap">
              <picture>
                <!-- sourceのパス修正（PC表示で崩れないよう修正） -->
                <source srcset="../images/sub/tainan/pickup1Pc.png" media="(min-width: 768px)">
                <img src="../images/sub/tainan/pickup1Sp.png" alt="関仔嶺温泉">
              </picture>
              <dl>
                <dt>温泉名：関仔嶺温泉<br>（グァンズーリン・ウェンチュエン）</dt>
                <dd>台湾4大温泉地の一つで、白河周辺には数々のホテルがあり、温泉を楽しむことができます。このエリアは泥温泉が有名で国内外問わず女性に大人気です。</dd>
              </dl>
            </div>
            <div class="pictWrap pictWrapGrid">
              <picture>
                <source srcset="../images/sub/tainan/pickup2Pc.png" media="(min-width: 768px)">
                <img src="../images/sub/tainan/pickup2Sp.png" alt="温泉宿1">
              </picture>
              <picture>
                <source srcset="../images/sub/tainan/pickup3Pc.png" media="(min-width: 768px)">
                <img src="../images/sub/tainan/pickup3Sp.png" alt="温泉宿2">
              </picture>
            </div>
            <p class="pText">温泉宿は最新のホテルから老舗の旅館まで多種多様に揃っています。</p>
            <div class="contentsWrap lotusWrap">
              <picture>
                <source srcset="../images/sub/tainan/pickup4Pc.png" media="(min-width: 768px)">
                <img src="../images/sub/tainan/pickup4Sp.png" alt="白河の蓮1">
              </picture>
              <div class="clildContentsWrap">
                <p>蓮の実の生産で台湾全土の3分の2の生産量を占める「蓮のふるさと」。美しい白河で癒しの時間をお過ごしください。</p>
                <picture>
                  <source srcset="../images/sub/tainan/pickup5Pc.png" media="(min-width: 768px)">
                  <img src="../images/sub/tainan/pickup5Sp.png" alt="白河の蓮2">
                </picture>
              </div>
            </div>
          </div>
          <hr>
        </div>
      </section> 
    </section>
  </main>

  <!-- モーダルエリア -->
  <div class="modalOverlay js-modal-close"></div>

  <div class="tainanModal js-modal" id="tainanModal1">
    <button type="button" class="modalCloseBtn js-modal-close"><img src="../images/common/modalClose.svg" alt="閉じる"></button>
    <picture>
      <source srcset="../images/sub/tainan/modal1Pc.png" media="(min-width: 768px)">
      <img src="../images/sub/tainan/modal1Sp.png" alt="担仔麺モーダル画像">
    </picture>
  </div>
  <div class="tainanModal js-modal" id="tainanModal2">
    <button type="button" class="modalCloseBtn js-modal-close"><img src="../images/common/modalClose.svg" alt="閉じる"></button>
    <picture>
      <source srcset="../images/sub/tainan/modal2Pc.png" media="(min-width: 768px)">
      <img src="../images/sub/tainan/modal2Sp.png" alt="蝦仁飯モーダル画像">
    </picture>
  </div>
  <div class="tainanModal js-modal" id="tainanModal3">
    <button type="button" class="modalCloseBtn js-modal-close"><img src="../images/common/modalClose.svg" alt="閉じる"></button>
    <picture>
      <source srcset="../images/sub/tainan/modal3Pc.png" media="(min-width: 768px)">
      <img src="../images/sub/tainan/modal3Sp.png" alt="小籠包モーダル画像">
    </picture>
  </div>
  <div class="tainanModal js-modal" id="tainanModal4">
    <button type="button" class="modalCloseBtn js-modal-close"><img src="../images/common/modalClose.svg" alt="閉じる"></button>
    <picture>
      <source srcset="../images/sub/tainan/modal4Pc.png" media="(min-width: 768px)">
      <img src="../images/sub/tainan/modal4Sp.png" alt="鴨肉飯モーダル画像">
    </picture>
  </div>

<?php renderFooter(true); ?>