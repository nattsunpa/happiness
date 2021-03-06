<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Happiness</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <header class="header">
        <div class="header__nav">
          <p class="header__nav-title--sp">Happiness</p>
          <div class="header__contact">
            <a class="header__contact--link" href="#">
              <img
                class="header__contact--icon"
                src="img/contact-icon.svg"
                alt="コンタクト"
              />
              <p class="header__contact--txt">Contact</p>
            </a>
          </div>
          <div class="header__nav-menu">
            <div class="header__nav-menu-trigger" href="#">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="header__nav--txt">
              <p class="header__nav--txt-change">Menu</p>
            </div>
            <nav class="nav-content--inner">
              <ul class="nav-content__list">
                <li class="nav-content__item">
                  <a href="#about">コミュニティについて</a>
                </li>
                <li class="nav-content__item">
                  <a href="#service">私たちにできること</a>
                </li>
                <li class="nav-content__item"><a href="">制作実績</a></li>
                <li class="nav-content__item"><a href="">料金案内</a></li>
              </ul>
              <div class="header__nav-btn--wrap button--wrap">
                <a class="header__nav-btn button" href="#contact">お問い合わせ</a>
              </div>
            </nav>
          </div>
          <div class="nav-content__overlay"></div>
        </div>
      </header>
      <main>
        <div class="top-main">
          <div class="top-main__title-wrap">
            <h1 class="top-main__title">Happiness</h1>
            <p class="top-main__txt">
              みんなでWeb制作のスキル向上を<br class="sp-br">目指すコミュニティ
            </p>
          </div>
          <div class="top-main__scroll-wrap">
            <p class="top-main__scroll-txt">scroll</p>
            <img
              class="top-main__scroll-img"
              src="img/scroll.svg"
              alt="スクロールicon"
            />
          </div>
        </div>

        <div class="about__wrap" id="about">
          <h2 class="about__title">コミュニティについて</h2>
          <p class="about__title--sub">about us</p>
          <img
            class="about__title--img"
            src="img/ornament.svg"
            alt="吹き出し"
          />
          <p class="about__txt">
            Happinessは、初心者からでもWeb制作のお仕事を受けられるように<br class="pc-br">なることを目標として作られたコミュニティです。<br>現在、メンバーは160名ほど。互いに切磋琢磨したり、<br class="pc-br">プロからのサポートを受けたりしながら、日々スキルを高めています。<br>
            <br>
            Happinessでは、バナー作成やWebサイト作成などのお仕事をお引き受けいたします。<br>
            お仕事のご依頼やご相談は、<a href="#">こちら</a
            >からお気軽にご連絡ください。
          </p>
        </div>

        <div class="service__wrap" id="service">
          <h2 class="service__title">私たちにできること</h2>
          <p class="service__title--sub">Our service</p>
          <img
            class="service__title--img"
            src="img/ornament.svg"
            alt="吹き出し"
          />
          <div class="service__list">
            <div class="service__item">
              <img
                class="service__item-icon"
                src="img/icon-planner.svg"
                alt="プランナー"
              />
              <h3 class="service__item-title">バナー作成</h3>
              <p class="service__item-txt">
                WebサイトやSNS等で使用できるバナーを作成いたします。商品やサービスの魅力がしっかりと伝わるようにデザインいたします。
              </p>
            </div>
            <div class="service__item">
              <img
                class="service__item-icon"
                src="img/icon-designer.svg"
                alt="デザイナー"
              />
              <h3 class="service__item-title">Webデザイン</h3>
              <p class="service__item-txt">
                Webサイトのデザインを提案いたします。お客様のご要望や課題をヒアリングし、最適なデザインを提案させていただきます。
              </p>
            </div>
            <div class="service__item">
              <img
                class="service__item-icon"
                src="img/icon-coder.svg"
                alt="コーダー"
              />
              <h3 class="service__item-title">コーディング</h3>
              <p class="service__item-txt">
                Webサイトのコーディングを行います。jQuery等によるアニメーションを用いたサイトや、WordPressを用いたサイトの実装も対応可能です。
              </p>
            </div>
          </div>
          <div class="service__btn--wrap button--wrap">
            <a class="service__btn button" href="">制作実績はこちら</a>
            <a class="service__btn button" href="">料金案内はこちら</a>
          </div>
        </div>

        <div class="contact__wrap" id="contact">
          <h2 class="contact__title">お問い合わせ</h2>
          <p class="contact__title--sub">Contact</p>
          <img
            class="contact__title--img"
            src="img/ornament.svg"
            alt="吹き出し"
          />
          <p class="contact__txt">
            お仕事のご依頼やご相談は、こちらのお問い合わせフォームからお気軽にご連絡ください。<br>
            <br class="sp-br">
            また、制作者として当コミュニティに参加したいという方もお待ちしております。
          </p>
          <div class="contact__btn--wrap button--wrap">
            <a class="contact__btn button" href="">お問い合わせフォーム</a>
          </div>
        </div>
      </main>
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
  </body>
</html>
