document.addEventListener('DOMContentLoaded', () => {
  const hamburgerBtn = document.querySelector('.js-hamburger');
  const closeBtn = document.querySelector('.js-close');
  const spMenu = document.querySelector('.js-spMenu');
  const overlay = document.querySelector('.js-spMenuOverlay');
  const body = document.body;

  // メニューを開く処理
  function openMenu() {
    spMenu.classList.add('is-active');
    overlay.classList.add('is-active');
    body.classList.add('is-menu-open'); // スクロール禁止
  }

  // メニューを閉じる処理
  function closeMenu() {
    spMenu.classList.remove('is-active');
    overlay.classList.remove('is-active');
    body.classList.remove('is-menu-open'); // スクロール解除
  }

  if (hamburgerBtn) hamburgerBtn.addEventListener('click', openMenu);
  if (closeBtn) closeBtn.addEventListener('click', closeMenu);
  if (overlay) overlay.addEventListener('click', closeMenu); // 暗い背景クリックでも閉じる
});


// SP版広告対応用の高さ変更のためのスクリプト
window.addEventListener('DOMContentLoaded', () => {
  const hamburger = document.querySelector('.hamburgerBtn');

  function updateHamburgerPosition() {
    const vw = window.innerWidth;
    
    // 現在の画面幅に応じた初期位置 (12.8205vw + 24px, 最大88px)
    const initialTop = Math.min((12.8205 / 100) * vw + 24, 88);
    
    // A = 初期位置 - 4px
    const targetScroll = initialTop - 4;
    
    // 現在のスクロール量
    const currentScroll = window.scrollY || window.pageYOffset;

    if (currentScroll >= targetScroll) {
      // Aぶん（またはそれ以上）スクロールされたら top: 4px に固定
      hamburger.style.top = '4px';
    } else {
      // それ未満の場合は「初期位置 - スクロール量」で追従（または初期位置に戻す）
      // ※ スクロールに合わせて段階的に移動させたい場合:
      const currentTop = Math.max(initialTop - currentScroll, 4);
      hamburger.style.top = `${currentTop}px`;
    }
  }

  // スクロール時および画面リサイズ時に実行
  window.addEventListener('scroll', updateHamburgerPosition);
  window.addEventListener('resize', updateHamburgerPosition);
  
  // 初期化
  updateHamburgerPosition();
});