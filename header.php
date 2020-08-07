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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>">
  </head>
  <?php wp_head(); ?>
  <body>
    <div class="container">
      <header class="header">
        <div class="header__nav">
          <h1 class="header__nav-title">Happiness</h1>
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