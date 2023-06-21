<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('title') ?> | <?php bloginfo('description') ?></title>

  <script src="https://api-maps.yandex.ru/2.1/?apikey=8a668916-04d0-4f25-8d4a-b97888776387&lang=ru_RU" type="text/javascript"></script>
  
  <?php wp_head(); ?>
  <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/assets/images/logo.svg">
</head>
<body>
  

  <!-- Шапка -->
  <header id="header" class="header">
    <!-- Меню -->
    <div id="mobile-menu" class="mobile-menu">
      <div class="mobile-menu__row">
        <div class="mobile-menu__content">
          <nav class="menu-nav">
            <ul class="menu-nav__list">
              <li class="menu-nav__item">
                <a class="menu-nav__link" href="#services">Услуги</a>
              </li>
              <li class="menu-nav__item">
                <a class="menu-nav__link" href="#team">Команда</a>
              </li>
              <li class="menu-nav__item">
                <a class="menu-nav__link" href="#reviews">Отзывы</a>
              </li>
              <li class="menu-nav__item dropdown">
                <a class="menu-nav__link dropdown__title">Информация для клиента</a>

                <ul class="dropdown__list">
                  <li class="menu-nav__item dropdown__item">
                    <a class="menu-nav__link dropdown__link" href="#">Пункт меню №1</a>
                  </li>
                  <li class="menu-nav__item dropdown__item">
                    <a class="menu-nav__link dropdown__link" href="#">Пункт меню №2</a>
                  </li>
                  <li class="menu-nav__item dropdown__item">
                    <a class="menu-nav__link dropdown__link" href="#">Пункт меню №3</a>
                  </li>
                  <li class="menu-nav__item dropdown__item">
                    <a class="menu-nav__link dropdown__link" href="#">Пункт меню №4</a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>

    <div class="header-top">
      <div class="container">
        <div class="header-top__row">
          <ul class="header-top__line">
            <li class="contact-block">
              <div class="contact-block__row">
                <img class="contact-block__icon" src="<?php bloginfo('template_url') ?>/assets/images/icons/marker.svg" alt="" aria-hidden="true">
                <address class="contact-block__value contact-block__address">
                  <span class="marker">г. Егорьевск</span>, 5 мкр., д. 21
                </address>
              </div>
            </li>
          
            <li class="contact-block">
              <a class="contact-block__row" href="tel:78083535335">
                <img class="contact-block__icon" src="<?php bloginfo('template_url') ?>/assets/images/icons/phone.svg" alt="" aria-hidden="true">
                <p class="contact-block__inner">
                  <span class="contact-block__title">Whatsapp</span>
                  <span class="contact-block__value contact-block__telephone">+ 7 808 353 53 35</span>
                </p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="header-bottom">
      <div class="header-bottom__row">
        <div class="container">
          <nav class="nav">
            <ul class="nav__list">
              <li class="nav__item burger">
                <div class="burger-icon">
                  <span class="burger-icon__line burger-icon__line_1"></span>
                  <span class="burger-icon__line burger-icon__line_2"></span>
                  <span class="burger-icon__line burger-icon__line_3"></span>
                </div>
                <span class="burger__title">Меню</span>
              </li>
              <li class="nav__item">
                <a class="nav__link" href="#services">Услуги</a>
              </li>
              <li class="nav__item">
                <a class="nav__link" href="#team">Команда</a>
              </li>
              <li class="nav__item">
                <a class="nav__link" href="#reviews">Отзывы</a>
              </li>

              <li class="nav__item logo-item">
                <a class="nav__link logo-item__link" href="#"><img class="nav__logo" src="<?php bloginfo('template_url') ?>/assets/images/logo.svg" alt="студия красоты Mioka логотип"></a>
              </li>

              <li class="nav__item dropdown">
                <a class="nav__link dropdown__title">Информация для клиентов</a>

                <ul class="dropdown__list">
                  <li class="nav__item dropdown__item">
                    <a class="nav__link dropdown__link" href="#">Пункт меню №1</a>
                  </li>
                  <li class="nav__item dropdown__item">
                    <a class="nav__link dropdown__link" href="#">Пункт меню №2</a>
                  </li>
                  <li class="nav__item dropdown__item">
                    <a class="nav__link dropdown__link" href="#">Пункт меню №3</a>
                  </li>
                  <li class="nav__item dropdown__item">
                    <a class="nav__link dropdown__link" href="#">Пункт меню №4</a>
                  </li>
                </ul>
              </li>

              <li class="nav__item">
                <a class="nav__link" href="#our-works">Наши работы</a>
              </li>

              <li class="nav__item">
                <a class="nav__link" href="#contacts">Контакты</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>