$(document).ready(function() {
  if ($('.imagesSlider').length) {
    $('.imagesSlider').slick({
      autoplay: true,
      autoplaySpeed: 3000,
      speed: 600,
      infinite: true,
      slidesToShow: 3,
      centerMode: true,        /* 中央寄せにして両端をチラ見せ */
      centerPadding: '80px',   /* 左右にチラ見せする幅（お好みで調整） */
      dots: true,
      appendDots: '.sliderNav',
      appendArrows: '.sliderNav',
      /* テキストのみにしてCSSで矢印を作成 */
      prevArrow: '<button type="button" class="slick-prev" aria-label="前へ"></button>',
      nextArrow: '<button type="button" class="slick-next" aria-label="次へ"></button>',
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            centerMode: true,
            centerPadding: '40px',
            arrows: false // SP版は矢印非表示
          }
        }
      ]
    });
  }
});


// ローディング

setTimeout(function() {
  const loading = document.getElementById('loading');
  if (loading) {
    loading.classList.add('is-loaded');
  }
}, 2000);