<?php
function renderFooter(bool $isSubPage = false): void {
    // 下層ページなら '../'、トップなら './'
    $pathPrefix = $isSubPage ? '../' : './';
?>
  <footer>
    <img src="<?php echo $pathPrefix; ?>images/common/flag.svg" alt="flag" class="footerFlagImg">
    <div class="footerLinksWrap">
      <ol class="footerNav">
        <li><a href="<?php echo $pathPrefix; ?>index.php">TOPへもどる</a></li>
        <li><a href="<?php echo $pathPrefix; ?>taipei/index.php">台北</a></li>
        <li><a href="<?php echo $pathPrefix; ?>taichu/index.php">台中</a></li>
        <li><a href="<?php echo $pathPrefix; ?>tainan/index.php">台南</a></li>
        <li><a href="">当サイトのポリシー</a></li>
        <li><a href="">お問い合わせ</a></li>
      </ol>
      <img src="<?php echo $pathPrefix; ?>images/common/logo.svg" alt="Taiwan" class="taiwanLogo">
      <div class="snsIcons"> 
        <a href="#"><img src="<?php echo $pathPrefix; ?>images/common/iconFacebook.svg" alt="Facebook"></a>
        <a href="#"><img src="<?php echo $pathPrefix; ?>images/common/iconInstagram.svg" alt="Instagram"></a>
        <a href="#"><img src="<?php echo $pathPrefix; ?>images/common/iconTwitter.svg" alt="Twitter"></a>
      </div>
    </div>
    <p class="copyright">Copyright (C) 2023 TAIWAN.traveler.cc </p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="<?php echo $pathPrefix; ?>scripts/slick.min.js"></script>
  <script src="<?php echo $pathPrefix; ?>scripts/nav.js"></script>
  <script src="<?php echo $pathPrefix; ?>scripts/main.js"></script>
  <script src="<?php echo $pathPrefix; ?>scripts/modal.js"></script>
</body>
</html>
<?php
}
?>