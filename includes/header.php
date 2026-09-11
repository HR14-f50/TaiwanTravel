<?php
function renderHeader(
    string $pageTitle = '',
    string $bodyClass = '',
    string $subLogoImg = '',
    string $subLogoAlt = '',
    string $description = ''
) {
    $title = 'Taiwan Travel';
    if ($pageTitle !== '') {
        $title .= '｜' . $pageTitle;
    }

    // 読み込み元が下層フォルダ（taipei等）の場合は '../' を自動で付与する判定
    $pathPrefix = ($pageTitle !== '') ? '../' : './';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></title>
  <link rel="stylesheet" href="<?php echo $pathPrefix; ?>common/reset.css">
  <link rel="stylesheet" href="<?php echo $pathPrefix; ?>styles/slick.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $pathPrefix; ?>styles/style.css">
  <meta name="robots" content="noindex,nofollow">
</head>
<body class="<?php echo htmlspecialchars($bodyClass, ENT_QUOTES, 'UTF-8'); ?>">
  <div id="loading" class="loading">
    <div class="loading__inner">
      <img src="<?php echo $pathPrefix; ?>images/common/logo.svg" alt="Taiwan" class="loading__logo">
    </div>
  </div>
  <a href="#" class="pageTop">
    <img src="<?php echo $pathPrefix; ?>images/common/topBtn.png" alt="ページ上部へ戻る">
  </a>
  <header>
    <div class="topHead">
      <h1><img src="<?php echo $pathPrefix; ?>images/common/logo.svg" alt="Taiwan"></h1>
      <nav class="pcNav">
        <ul class="pcNavList">
          <li><a href="<?php echo $pathPrefix; ?>index.php">Top</a></li>
          <li><a href="<?php echo $pathPrefix; ?>taipei/index.php">台北</a></li>
          <li><a href="<?php echo $pathPrefix; ?>taichu/index.php">台中</a></li>
          <li><a href="<?php echo $pathPrefix; ?>tainan/index.php">台南</a></li>
          <li><a href="">当サイトのポリシー</a></li>
          <li><a href="">お問い合わせ</a></li>
        </ul>
      </nav>
      <button type="button" class="hamburgerBtn js-hamburger">
        <img src="<?php echo $pathPrefix; ?>images/common/iconHamburger.svg" alt="メニューを開く">
      </button>
    </div>
    <div class="spMenu js-spMenu">
      <div class="spMenuHeader">
        <img src="<?php echo $pathPrefix; ?>images/common/logo.svg" alt="Taiwan" class="spMenuLogo">
        <button type="button" class="closeBtn js-close">
          <img src="<?php echo $pathPrefix; ?>images/common/iconClose.svg" alt="メニューを閉じる">
        </button>
      </div>
      <nav class="spNav">
        <div class="spNavGroup spNavTitle">
          <p>Menu</p>
        </div>
        <ul class="spNavGroup">
          <li><a href="<?php echo $pathPrefix; ?>index.php">TOP</a></li>
        </ul>
        <ul class="spNavGroup">
          <li><a href="<?php echo $pathPrefix; ?>taipei/index.php">台北</a></li>
          <li><a href="<?php echo $pathPrefix; ?>taichu/index.php">台中</a></li>
          <li><a href="<?php echo $pathPrefix; ?>tainan/index.php">台南</a></li>
        </ul>
        <ul class="spNavGroup">
          <li><a href="">当サイトのポリシー</a></li>
        </ul>
        <ul class="spNavGroup">
          <li><a href="">お問い合わせ</a></li>
        </ul>
      </nav>
    </div>

    <?php if ($subLogoImg !== ''): ?>
      <h2><img src="<?php echo $pathPrefix . htmlspecialchars($subLogoImg, ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($subLogoAlt, ENT_QUOTES, 'UTF-8'); ?>"></h2>
    <?php else: ?>
      <h2><img src="<?php echo $pathPrefix; ?>images/common/logo.svg" alt="Taiwan"></h2>
    <?php endif; ?>

    <div class="snsIcons">
      <a href="#"><img src="<?php echo $pathPrefix; ?>images/common/iconFacebook.svg" alt="Facebook"></a>
      <a href="#"><img src="<?php echo $pathPrefix; ?>images/common/iconInstagram.svg" alt="Instagram"></a>
      <a href="#"><img src="<?php echo $pathPrefix; ?>images/common/iconTwitter.svg" alt="Twitter"></a>
    </div>

    <?php if ($description !== ''): ?>
      <p class="text"><?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endif; ?>
    <div class="spMenuOverlay js-spMenuOverlay"></div>
  </header>

  <?php if ($pageTitle !== ''): ?>
    <div class="breadcrumbs">
      <a href="<?php echo $pathPrefix; ?>index.php">Top</a>＞<span>Travel</span>＞<span><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></span>
    </div>
  <?php endif; ?>
<?php
}
?>