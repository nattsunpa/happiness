<footer class="footer">
        <div class="footer-left">
          <p class="footer-left__title">Happiness</p>
        </div>
        <div class="footer-right">
          <div class="footer-right__menu">
            <a class="footer-right__menu-item" href="">コミュニティについて</a>
            <a class="footer-right__menu-item" href="">私たちにできること</a>
            <a class="footer-right__menu-item" href="">制作実績</a>
            <a class="footer-right__menu-item" href="">料金案内</a>
            <a class="footer-right__menu-item" href="">お問い合わせ</a>
          </div>
          <div class="footer-right__foot">
            <p class="footer-right__foot-txt">
              Copyright &copy; 2020 Happiness All Rights Reserved.
            </p>
          </div>
        </div>
        <div class="footer__outer">
          <a href="#">
            <p>PAGE<br />TOP</p>
          </a>
        </div>
      </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(".header__nav-menu-trigger").on("click", function () {
        if ($(this).hasClass("active")) {
          $(this).removeClass("active");
          $(".nav-content--inner").removeClass("open");
          $(".nav-content__overlay").removeClass("open");
          $(".header__nav--txt-change").html("Menu");
        } else {
          $(this).addClass("active");
          $(".nav-content--inner").addClass("open");
          $(".nav-content__overlay").addClass("open");
          $(".header__nav--txt-change").addClass("active");
          $(".header__nav--txt-change").html("Close");
        }
      });
      $(".nav-content__overlay").on("click", function () {
        if ($(this).hasClass("open")) {
          $(this).removeClass("open");
          $(".menu-trigger").removeClass("active");
          $(".nav-content--inner").removeClass("open");
        }
      });
    </script>
    <?php wp_footer(); ?>
  </body>
</html>
