<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mioka | Студия красоты</title>

  <link rel="stylesheet" href="./css/style.css">

  <script defer src="./js/inputmask.js"></script>
  <script defer src="./js/tilt.min.js"></script>
  <script defer src="./js/main.js"></script>
</head>
<body>
  

  <!-- Шапка -->
  <header id="header" class="header">
    <?php require_once './assets/mobile-menu.html' ?>

    <div class="header-top">
      <div class="container">
        <div class="header-top__row">
          <ul class="header-top__line">
            <li class="contact-block">
              <div class="contact-block__row">
                <img class="contact-block__icon" src="./images/icons/marker.svg" alt="" aria-hidden="true">
                <address class="contact-block__value contact-block__address">
                  <span class="marker">г. Егорьевск</span>, 5 мкр., д. 21
                </address>
              </div>
            </li>
          
            <li class="contact-block">
              <a class="contact-block__row" href="tel:78083535335">
                <img class="contact-block__icon" src="./images/icons/phone.svg" alt="" aria-hidden="true">
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
                <a class="nav__link" href="#">Каталог</a>
              </li>
              <li class="nav__item">
                <a class="nav__link" href="#reviews">Отзывы</a>
              </li>
              <li class="nav__item">
                <a class="nav__link" href="#">Контакты</a>
              </li>

              <li class="nav__item logo-item">
                <a class="nav__link logo-item__link" href="#"><img class="nav__logo" src="./images/logo.svg" alt="студия красоты Mioka логотип"></a>
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
                <a class="nav__link" href="#">Отзывы</a>
              </li>

              <li class="nav__item">
                <a class="nav__link" href="#">Каталог</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <!-- Уникальное содержимое -->
  <main id="main" class="main">
    <!-- Секция, встречающая пользователя -->
    <section id="hero" class="hero">
      <div class="hero__row">
        <div class="container hero__container">
          <div class="hero__content">
            <h2 class="hero-title">
              <span class="hero-title__top"><b class="marker">Студия</b> красоты в городе</span>
              <span class="hero-title__bottom">Егорьевск</span>
            </h2>

            <a class="hero__button" href="#services">
              <span class="hero__button-inner">
                Услуги
              </span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Преимущества компании -->
    <section id="benefits" class="benefits">
      <div class="benefits__row">
        <div class="container">
          <div class="benefits__line">
            <ul class="benefits-list">
              <li class="benefit">
                <div class="benefit__header">
                  <img class="benefit__icon" src="./images/icons/benefit-1.svg" alt="" aria-hidden="true">
                  <span class="benefit__title">Заголовок преимущества</span>
                </div>

                <div class="benefit__content">
                  <p class="benefit__text">
                    Мы даем официальную гарантию на свою продукцию. Все наши материалы сертифицированы и имеют сертификаты качества. 
                  </p>
                </div>
              </li>
              <li class="benefit">
                <div class="benefit__header">
                  <img class="benefit__icon" src="./images/icons/benefit-2.svg" alt="" aria-hidden="true">
                  <span class="benefit__title">Заголовок преимущества</span>
                </div>

                <div class="benefit__content">
                  <p class="benefit__text">
                    Мы даем официальную гарантию на свою продукцию. Все наши материалы сертифицированы и имеют сертификаты качества. 
                  </p>
                </div>
              </li>
              <li class="benefit">
                <div class="benefit__header">
                  <img class="benefit__icon" src="./images/icons/benefit-3.svg" alt="" aria-hidden="true">
                  <span class="benefit__title">Заголовок преимущества</span>
                </div>

                <div class="benefit__content">
                  <p class="benefit__text">
                    Мы даем официальную гарантию на свою продукцию. Все наши материалы сертифицированы и имеют сертификаты качества. 
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Предоставляемые услуги -->
    <section id="services" class="services">
      <div class="services__row">
        <div class="container">
          <h2 class="services__title">Предоставляемые <b class="marker">услуги</b></h2>

          <div class="services__content">
            <div class="services-block">
              <span class="services-block__title">Брови</span>

              <div class="services-block__grid">
                <ul class="services-block-list">
                  <li class="service">
                    <article class="service__inner">
                      <div class="service__image-block">
                        <img class="service__image" src="./images/service-1.jpg" alt="услуга">
                      </div>

                      <div class="service__content-block">
                        <h3 class="service__title">Окрашивание | коррекция</h3>
                        <ul class="service__points-list">
                          <li class="service__point">Этап работы номер 1</li>
                          <li class="service__point">Этап работы номер 2</li>
                          <li class="service__point">Этап работы номер 3</li>
                          <li class="service__point">Этап работы номер 4</li>
                          <li class="service__point">Этап работы номер 5</li>
                        </ul>

                        <div class="service__bottom">
                          <span class="service__price">1100 руб.</span>

                          <button class="service__action" type="button">Записаться</button>
                        </div>
                      </div>
                    </article>
                  </li>

                  <li class="service">
                    <article class="service__inner">
                      <div class="service__image-block">
                        <img class="service__image" src="./images/service-2.jpg" alt="услуга">
                      </div>

                      <div class="service__content-block">
                        <h3 class="service__title">Долговременная укладка без окрашивания</h3>
                        <ul class="service__points-list">
                          <li class="service__point">Этап работы номер 1</li>
                          <li class="service__point">Этап работы номер 2</li>
                          <li class="service__point">Этап работы номер 3</li>
                        </ul>

                        <div class="service__bottom">
                          <span class="service__price">1100 руб.</span>

                          <button class="service__action" type="button">Записаться</button>
                        </div>
                      </div>
                    </article>
                  </li>

                  <li class="service">
                    <article class="service__inner">
                      <div class="service__image-block">
                        <img class="service__image" src="./images/service-3.jpg" alt="услуга">
                      </div>

                      <div class="service__content-block">
                        <h3 class="service__title">Коррекция бровей</h3>
                        <ul class="service__points-list">
                          <li class="service__point">Этап работы номер 1</li>
                          <li class="service__point">Этап работы номер 2</li>
                          <li class="service__point">Этап работы номер 3</li>
                          <li class="service__point">Этап работы номер 4</li>
                          <li class="service__point">Этап работы номер 5</li>
                          <li class="service__point">Этап работы номер 6</li>
                        </ul>

                        <div class="service__bottom">
                          <span class="service__price">1100 руб.</span>

                          <button class="service__action" type="button">Записаться</button>
                        </div>
                      </div>
                    </article>
                  </li>
                </ul>
              </div>
            </div>

            <div class="services-block">
              <span class="services-block__title">Ресницы</span>

              <div class="services-block__grid">
                <ul class="services-block-list">
                  <li class="service">
                    <article class="service__inner">
                      <div class="service__image-block">
                        <img class="service__image" src="./images/service-4.jpg" alt="услуга">
                      </div>

                      <div class="service__content-block">
                        <h3 class="service__title">Долговременная укладка без коррекции и окрашивания</h3>
                        <ul class="service__points-list">
                          <li class="service__point">Этап работы номер 1</li>
                          <li class="service__point">Этап работы номер 2</li>
                          <li class="service__point">Этап работы номер 3</li>
                          <li class="service__point">Этап работы номер 4</li>
                          <li class="service__point">Этап работы номер 5</li>
                        </ul>

                        <div class="service__bottom">
                          <span class="service__price">1100 руб.</span>

                          <button class="service__action" type="button">Записаться</button>
                        </div>
                      </div>
                    </article>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Секция отзывов -->
    <section id="reviews" class="reviews">
      <div class="reviews__row">
        <div class="container">
          <h2 class="visually-hidden">Отзывы</h2>

          <div class="reviews__line">
            <div class="reviews-block reviews-photos">
              <div class="reviews-block__header">
                <span class="reviews-block__title">
                  <b class="marker">фото</b>отзывы
                </span>
                <a class="reviews-block__link" href="#">Больше фото</a>
              </div>

              <div class="reviews-photos__grid">
                <div class="reviews-photos__block">
                  <img class="reviews-photos__photo" src="./images/review-photo-1.jpg" alt="фотоотзыв">
                </div>
                <div class="reviews-photos__block">
                  <img class="reviews-photos__photo" src="./images/review-photo-1.jpg" alt="фотоотзыв">
                </div>
                <div class="reviews-photos__block">
                  <img class="reviews-photos__photo" src="./images/review-photo-1.jpg" alt="фотоотзыв">
                </div>
                <div class="reviews-photos__block">
                  <img class="reviews-photos__photo" src="./images/review-photo-1.jpg" alt="фотоотзыв">
                </div>
              </div>
            </div>

            <div class="reviews-block reviews-text">
              <div class="reviews-block__header">
                <span class="reviews-block__title">
                  Отзывы
                </span>
                <a class="reviews-block__link" href="#">Смотреть все</a>
              </div>

              <ul class="reviews-text__list">
                <li class="review">
                  <article class="review__inner">
                    <header class="review__header">
                      <div class="review__info">
                        <address class="review__author">Анатолий Петров</address>
                        <div class="review__about">
                          <time class="review__time" datetime="2019-08-20 22:32">20.08.19  22:32</time>
                          <span class="review__place">г. Егорьевск</span>
                        </div>
                      </div>

                      <ul class="raiting">
                        <li class="raiting__item">
                          <svg class="raiting__star raiting__star_filled" aria-hidden="true" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.20703 1.24219L5.42969 4.87891L1.41016 5.45312C0.699219 5.5625 0.425781 6.4375 0.945312 6.95703L3.81641 9.77344L3.13281 13.7383C3.02344 14.4492 3.78906 14.9961 4.41797 14.668L8 12.7812L11.5547 14.668C12.1836 14.9961 12.9492 14.4492 12.8398 13.7383L12.1562 9.77344L15.0273 6.95703C15.5469 6.4375 15.2734 5.5625 14.5625 5.45312L10.5703 4.87891L8.76562 1.24219C8.46484 0.613281 7.53516 0.585938 7.20703 1.24219Z"/>
                          </svg>
                        </li>
                        <li class="raiting__item">
                          <svg class="raiting__star raiting__star_filled" aria-hidden="true" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.20703 1.24219L5.42969 4.87891L1.41016 5.45312C0.699219 5.5625 0.425781 6.4375 0.945312 6.95703L3.81641 9.77344L3.13281 13.7383C3.02344 14.4492 3.78906 14.9961 4.41797 14.668L8 12.7812L11.5547 14.668C12.1836 14.9961 12.9492 14.4492 12.8398 13.7383L12.1562 9.77344L15.0273 6.95703C15.5469 6.4375 15.2734 5.5625 14.5625 5.45312L10.5703 4.87891L8.76562 1.24219C8.46484 0.613281 7.53516 0.585938 7.20703 1.24219Z"/>
                          </svg>
                        </li>
                        <li class="raiting__item">
                          <svg class="raiting__star raiting__star_filled" aria-hidden="true" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.20703 1.24219L5.42969 4.87891L1.41016 5.45312C0.699219 5.5625 0.425781 6.4375 0.945312 6.95703L3.81641 9.77344L3.13281 13.7383C3.02344 14.4492 3.78906 14.9961 4.41797 14.668L8 12.7812L11.5547 14.668C12.1836 14.9961 12.9492 14.4492 12.8398 13.7383L12.1562 9.77344L15.0273 6.95703C15.5469 6.4375 15.2734 5.5625 14.5625 5.45312L10.5703 4.87891L8.76562 1.24219C8.46484 0.613281 7.53516 0.585938 7.20703 1.24219Z"/>
                          </svg>
                        </li>
                        <li class="raiting__item">
                          <svg class="raiting__star raiting__star_filled" aria-hidden="true" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.20703 1.24219L5.42969 4.87891L1.41016 5.45312C0.699219 5.5625 0.425781 6.4375 0.945312 6.95703L3.81641 9.77344L3.13281 13.7383C3.02344 14.4492 3.78906 14.9961 4.41797 14.668L8 12.7812L11.5547 14.668C12.1836 14.9961 12.9492 14.4492 12.8398 13.7383L12.1562 9.77344L15.0273 6.95703C15.5469 6.4375 15.2734 5.5625 14.5625 5.45312L10.5703 4.87891L8.76562 1.24219C8.46484 0.613281 7.53516 0.585938 7.20703 1.24219Z"/>
                          </svg>
                        </li>
                        <li class="raiting__item">
                          <svg class="raiting__star raiting__star_filled" aria-hidden="true" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.20703 1.24219L5.42969 4.87891L1.41016 5.45312C0.699219 5.5625 0.425781 6.4375 0.945312 6.95703L3.81641 9.77344L3.13281 13.7383C3.02344 14.4492 3.78906 14.9961 4.41797 14.668L8 12.7812L11.5547 14.668C12.1836 14.9961 12.9492 14.4492 12.8398 13.7383L12.1562 9.77344L15.0273 6.95703C15.5469 6.4375 15.2734 5.5625 14.5625 5.45312L10.5703 4.87891L8.76562 1.24219C8.46484 0.613281 7.53516 0.585938 7.20703 1.24219Z"/>
                          </svg>
                        </li>
                      </ul>
                    </header>

                    <p class="review__text">
                      Огромное спасибо мастерам! Остались очень довольны оказанными услугами,мастера своего дела! Результат даже неожиданно красивее чем на картинке
                    </p>
                  </article>
                </li>
                <li class="review">
                  <article class="review__inner">
                    <header class="review__header">
                      <div class="review__info">
                        <address class="review__author">Анатолий Петров</address>
                        <div class="review__about">
                          <time class="review__time" datetime="2019-08-20 22:32">20.08.19  22:32</time>
                          <span class="review__place">г. Егорьевск</span>
                        </div>
                      </div>

                      <ul class="raiting">
                        <li class="raiting__item">
                          <svg class="raiting__star raiting__star_filled" aria-hidden="true" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.20703 1.24219L5.42969 4.87891L1.41016 5.45312C0.699219 5.5625 0.425781 6.4375 0.945312 6.95703L3.81641 9.77344L3.13281 13.7383C3.02344 14.4492 3.78906 14.9961 4.41797 14.668L8 12.7812L11.5547 14.668C12.1836 14.9961 12.9492 14.4492 12.8398 13.7383L12.1562 9.77344L15.0273 6.95703C15.5469 6.4375 15.2734 5.5625 14.5625 5.45312L10.5703 4.87891L8.76562 1.24219C8.46484 0.613281 7.53516 0.585938 7.20703 1.24219Z"/>
                          </svg>
                        </li>
                        <li class="raiting__item">
                          <svg class="raiting__star raiting__star_filled" aria-hidden="true" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.20703 1.24219L5.42969 4.87891L1.41016 5.45312C0.699219 5.5625 0.425781 6.4375 0.945312 6.95703L3.81641 9.77344L3.13281 13.7383C3.02344 14.4492 3.78906 14.9961 4.41797 14.668L8 12.7812L11.5547 14.668C12.1836 14.9961 12.9492 14.4492 12.8398 13.7383L12.1562 9.77344L15.0273 6.95703C15.5469 6.4375 15.2734 5.5625 14.5625 5.45312L10.5703 4.87891L8.76562 1.24219C8.46484 0.613281 7.53516 0.585938 7.20703 1.24219Z"/>
                          </svg>
                        </li>
                        <li class="raiting__item">
                          <svg class="raiting__star raiting__star_filled" aria-hidden="true" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.20703 1.24219L5.42969 4.87891L1.41016 5.45312C0.699219 5.5625 0.425781 6.4375 0.945312 6.95703L3.81641 9.77344L3.13281 13.7383C3.02344 14.4492 3.78906 14.9961 4.41797 14.668L8 12.7812L11.5547 14.668C12.1836 14.9961 12.9492 14.4492 12.8398 13.7383L12.1562 9.77344L15.0273 6.95703C15.5469 6.4375 15.2734 5.5625 14.5625 5.45312L10.5703 4.87891L8.76562 1.24219C8.46484 0.613281 7.53516 0.585938 7.20703 1.24219Z"/>
                          </svg>
                        </li>
                        <li class="raiting__item">
                          <svg class="raiting__star raiting__star_filled" aria-hidden="true" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.20703 1.24219L5.42969 4.87891L1.41016 5.45312C0.699219 5.5625 0.425781 6.4375 0.945312 6.95703L3.81641 9.77344L3.13281 13.7383C3.02344 14.4492 3.78906 14.9961 4.41797 14.668L8 12.7812L11.5547 14.668C12.1836 14.9961 12.9492 14.4492 12.8398 13.7383L12.1562 9.77344L15.0273 6.95703C15.5469 6.4375 15.2734 5.5625 14.5625 5.45312L10.5703 4.87891L8.76562 1.24219C8.46484 0.613281 7.53516 0.585938 7.20703 1.24219Z"/>
                          </svg>
                        </li>
                        <li class="raiting__item">
                          <svg class="raiting__star" aria-hidden="true" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.20703 1.24219L5.42969 4.87891L1.41016 5.45312C0.699219 5.5625 0.425781 6.4375 0.945312 6.95703L3.81641 9.77344L3.13281 13.7383C3.02344 14.4492 3.78906 14.9961 4.41797 14.668L8 12.7812L11.5547 14.668C12.1836 14.9961 12.9492 14.4492 12.8398 13.7383L12.1562 9.77344L15.0273 6.95703C15.5469 6.4375 15.2734 5.5625 14.5625 5.45312L10.5703 4.87891L8.76562 1.24219C8.46484 0.613281 7.53516 0.585938 7.20703 1.24219Z"/>
                          </svg>
                        </li>
                      </ul>
                    </header>

                    <p class="review__text">
                      Огромное спасибо мастерам! Остались очень довольны оказанными услугами,мастера своего дела! Результат даже неожиданно красивее чем на картинке
                    </p>
                  </article>
                </li>
                <li class="review">
                  <article class="review__inner">
                    <header class="review__header">
                      <div class="review__info">
                        <address class="review__author">Анатолий Петров</address>
                        <div class="review__about">
                          <time class="review__time" datetime="2019-08-20 22:32">20.08.19  22:32</time>
                          <span class="review__place">г. Егорьевск</span>
                        </div>
                      </div>

                      <ul class="raiting">
                        <li class="raiting__item">
                          <svg class="raiting__star raiting__star_filled" aria-hidden="true" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.20703 1.24219L5.42969 4.87891L1.41016 5.45312C0.699219 5.5625 0.425781 6.4375 0.945312 6.95703L3.81641 9.77344L3.13281 13.7383C3.02344 14.4492 3.78906 14.9961 4.41797 14.668L8 12.7812L11.5547 14.668C12.1836 14.9961 12.9492 14.4492 12.8398 13.7383L12.1562 9.77344L15.0273 6.95703C15.5469 6.4375 15.2734 5.5625 14.5625 5.45312L10.5703 4.87891L8.76562 1.24219C8.46484 0.613281 7.53516 0.585938 7.20703 1.24219Z"/>
                          </svg>
                        </li>
                        <li class="raiting__item">
                          <svg class="raiting__star raiting__star_filled" aria-hidden="true" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.20703 1.24219L5.42969 4.87891L1.41016 5.45312C0.699219 5.5625 0.425781 6.4375 0.945312 6.95703L3.81641 9.77344L3.13281 13.7383C3.02344 14.4492 3.78906 14.9961 4.41797 14.668L8 12.7812L11.5547 14.668C12.1836 14.9961 12.9492 14.4492 12.8398 13.7383L12.1562 9.77344L15.0273 6.95703C15.5469 6.4375 15.2734 5.5625 14.5625 5.45312L10.5703 4.87891L8.76562 1.24219C8.46484 0.613281 7.53516 0.585938 7.20703 1.24219Z"/>
                          </svg>
                        </li>
                        <li class="raiting__item">
                          <svg class="raiting__star raiting__star_filled" aria-hidden="true" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.20703 1.24219L5.42969 4.87891L1.41016 5.45312C0.699219 5.5625 0.425781 6.4375 0.945312 6.95703L3.81641 9.77344L3.13281 13.7383C3.02344 14.4492 3.78906 14.9961 4.41797 14.668L8 12.7812L11.5547 14.668C12.1836 14.9961 12.9492 14.4492 12.8398 13.7383L12.1562 9.77344L15.0273 6.95703C15.5469 6.4375 15.2734 5.5625 14.5625 5.45312L10.5703 4.87891L8.76562 1.24219C8.46484 0.613281 7.53516 0.585938 7.20703 1.24219Z"/>
                          </svg>
                        </li>
                        <li class="raiting__item">
                          <svg class="raiting__star" aria-hidden="true" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.20703 1.24219L5.42969 4.87891L1.41016 5.45312C0.699219 5.5625 0.425781 6.4375 0.945312 6.95703L3.81641 9.77344L3.13281 13.7383C3.02344 14.4492 3.78906 14.9961 4.41797 14.668L8 12.7812L11.5547 14.668C12.1836 14.9961 12.9492 14.4492 12.8398 13.7383L12.1562 9.77344L15.0273 6.95703C15.5469 6.4375 15.2734 5.5625 14.5625 5.45312L10.5703 4.87891L8.76562 1.24219C8.46484 0.613281 7.53516 0.585938 7.20703 1.24219Z"/>
                          </svg>
                        </li>
                        <li class="raiting__item">
                          <svg class="raiting__star" aria-hidden="true" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.20703 1.24219L5.42969 4.87891L1.41016 5.45312C0.699219 5.5625 0.425781 6.4375 0.945312 6.95703L3.81641 9.77344L3.13281 13.7383C3.02344 14.4492 3.78906 14.9961 4.41797 14.668L8 12.7812L11.5547 14.668C12.1836 14.9961 12.9492 14.4492 12.8398 13.7383L12.1562 9.77344L15.0273 6.95703C15.5469 6.4375 15.2734 5.5625 14.5625 5.45312L10.5703 4.87891L8.76562 1.24219C8.46484 0.613281 7.53516 0.585938 7.20703 1.24219Z"/>
                          </svg>
                        </li>
                      </ul>
                    </header>

                    <p class="review__text">
                      Огромное спасибо мастерам! Остались очень довольны оказанными услугами,мастера своего дела! Результат даже неожиданно красивее чем на картинке
                    </p>
                  </article>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Подвал -->
  <footer id="footer" class="footer">
    <div class="footer__row">
      <div class="footer__top">
        <div class="container">
          <div class="footer__line">
            <div class="footer-block">
              <span class="footer-block__title">Контактная информация</span>
    
              <nav class="footer-nav">
                <ul class="footer-nav__list">
                  <li class="footer-nav__item">
                    <a class="footer-nav__link">
                      <img src="./images/icons/marker-small.svg" alt="" aria-hidden="true">
                      г. Егорьевск, 5 мкр., д. 21
                    </a>
                  </li>
                  <li class="footer-nav__item">
                    <a class="footer-nav__link" href="tel:78083535335">
                      <img src="./images/icons/phone-small.svg" alt="" aria-hidden="true">
                      + 7 808 353 53 35
                    </a>
                  </li>
                  <li class="footer-nav__item">
                    <a class="footer-nav__link">
                      <img src="./images/icons/clock.svg" alt="" aria-hidden="true">
                      Работаем ежедневно с 10:00 до 20:00 5 мкр, д 21
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
    
            <div class="footer-block">
              <span class="footer-block__title">Для посетителей</span>
    
              <nav class="footer-nav">
                <ul class="footer-nav__list">
                  <li class="footer-nav__item">                                      
                    <a class="footer-nav__link" href="#">Оформление заказа</a>
                  </li>
                  <li class="footer-nav__item">
                    <a class="footer-nav__link" href="#">Вопросы и ответы</a>
                  </li>
                  <li class="footer-nav__item">
                    <a class="footer-nav__link" href="#">Изменение или отмена заказа</a>
                  </li>
                  <li class="footer-nav__item">
                    <a class="footer-nav__link" href="#">Способы доставки и оплаты</a>
                  </li>
                </ul>
              </nav>
            </div>
    
            <article class="footer-block footer-form">
              <h3 class="footer-block__title footer-form__title">Возникли вопросы? Свяжитесь с нами</h3>
    
              <form action="#" name="contact-form" class="contact-form">
                <label>
                  Ваше имя
                  <input type="text" name="username" required>
                </label>
    
                <label>
                  Моб. номер
                  <input type="tel" name="usertel" required>
                </label>
    
                <textarea title="Введите ваше сообщение" name="usermsg" pattern=".{10,}" title="Минимум 10 символов"></textarea>
    
                <button type="submit">Отправить</button>
              </form>
            </article>
          </div>
        </div>
      </div>

      <div class="footer__bottom">
        <div class="container">
          <span class="footer__copyright">
            &copy; 2023 Mioko | Студия Красоты
          </span>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>