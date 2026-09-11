document.addEventListener('DOMContentLoaded', function() {
  const openBtns = document.querySelectorAll('.js-modal-btn');
  const closeBtns = document.querySelectorAll('.js-modal-close');
  const overlay = document.querySelector('.modalOverlay');

  // 開く処理
  openBtns.forEach(function(btn) {
    btn.addEventListener('click', function() {
      const targetId = btn.dataset.target;
      const targetModal = document.getElementById(targetId);

      if (targetModal) {
        targetModal.classList.add('is-active');
        if (overlay) {
          overlay.classList.add('is-active');
        }
        document.body.classList.add('is-fixed'); // 背面のスクロール固定
      }
    });
  });

  // 閉じる処理（バツボタン・暗転背景のクリック時）
  closeBtns.forEach(function(btn) {
    btn.addEventListener('click', function() {
      const activeModals = document.querySelectorAll('.js-modal.is-active');
      
      activeModals.forEach(function(modal) {
        modal.classList.remove('is-active');
      });

      if (overlay) {
        overlay.classList.remove('is-active');
      }
      document.body.classList.remove('is-fixed');
    });
  });
});