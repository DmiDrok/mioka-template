<?php get_header(); ?>

  <!-- Уникальное содержимое -->
  <main id="main" class="main">
    <!-- Секция, встречающая пользователя -->
    <section id="hero" class="hero">
      <!-- Декоративные изображения -->
      <img class="decor-image hero__decor-image hero__decor-image_1" src="<?php bloginfo('template_url') ?>/assets/images/decor-hero-1.png" alt="" aria-hidden="true">
      <img class="decor-image hero__decor-image hero__decor-image_2" src="<?php bloginfo('template_url') ?>/assets/images/decor-hero-2.png" alt="" aria-hidden="true">

      <div class="hero__row">
        <div class="container hero__container">
          <div class="hero__content">
            <h2 class="hero-title">
              <span class="hero-title__top"><b class="marker">Студия</b> красоты в городе</span>
              <span class="hero-title__bottom">Егорьевск</span>
            </h2>

            <a class="orange-gradient-btn hero__button" href="#services">
              <span class="orange-gradient-btn__inner hero__button-inner">
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
                  <img class="benefit__icon" src="<?php bloginfo('template_url') ?>/assets/images/icons/benefit-1.svg" alt="" aria-hidden="true">
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
                  <img class="benefit__icon" src="<?php bloginfo('template_url') ?>/assets/images/icons/benefit-2.svg" alt="" aria-hidden="true">
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
                  <img class="benefit__icon" src="<?php bloginfo('template_url') ?>/assets/images/icons/benefit-3.svg" alt="" aria-hidden="true">
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
          <h2 class="section-title services__title">Предоставляемые <b class="marker">услуги</b></h2>

          <div class="services__content">
            <div class="services-block">
              <span class="services-block__title">Брови</span>

              <div class="services-block__grid">
                <ul class="services-block-list">
                  <li class="tild-card service">
                    <article class="service__inner">
                      <div class="service__image-block">
                        <img class="service__image" src="<?php bloginfo('template_url') ?>/assets/images/service-1.jpg" alt="услуга">
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

                          <button class="btn-blue service__action" type="button">Записаться</button>
                        </div>
                      </div>
                    </article>
                  </li>

                  <li class="tild-card service">
                    <article class="service__inner">
                      <div class="service__image-block">
                        <img class="service__image" src="<?php bloginfo('template_url') ?>/assets/images/service-2.jpg" alt="услуга">
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

                          <button class="btn-blue service__action" type="button">Записаться</button>
                        </div>
                      </div>
                    </article>
                  </li>

                  <li class="tild-card service">
                    <article class="service__inner">
                      <div class="service__image-block">
                        <img class="service__image" src="<?php bloginfo('template_url') ?>/assets/images/service-3.jpg" alt="услуга">
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

                          <button class="btn-blue service__action" type="button">Записаться</button>
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
                  <li class="tild-card service">
                    <article class="service__inner">
                      <div class="service__image-block">
                        <img class="service__image" src="<?php bloginfo('template_url') ?>/assets/images/service-4.jpg" alt="услуга">
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

                          <button class="btn-blue service__action" type="button">Записаться</button>
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

    <!-- Команда -->
    <section id="team" class="team">
      <div class="team__row">
        <div class="container team__container">
          <h2 class="section-title team__title">Наша команда <b class="marker">профессионалов</b></h2>

          <div class="team__line">
            <ul class="team-list">
              <li class="tild-card team-member">
                <div class="team-member__inner">
                  <div class="team-member__photo-block">
                    <img class="team-member__photo" src="<?php bloginfo('template_url') ?>/assets/images/team-member-1.jpg" alt="сотрудник студии">
                  </div>

                  <div class="team-member__info">
                    <div class="team-member__info-top">
                      <span class="team-member__name">Имя Фамилия</span>
                      <span class="team-member__position">креативный лидер</span>
                    </div>

                    <div class="team-member__info-middle">
                      <ul class="team-member__skills">
                        <li class="team-member__skill">
                          <span class="team-member__skill-text">Умение сотрудника №1</span>
                        </li>
                        <li class="team-member__skill">
                          <span class="team-member__skill-text">Умение сотрудника №2</span>
                        </li>
                        <li class="team-member__skill">
                          <span class="team-member__skill-text">Умение сотрудника №3</span>
                        </li>
                        <li class="team-member__skill">
                          <span class="team-member__skill-text">Умение сотрудника №4</span>
                        </li>
                        <li class="team-member__skill">
                          <span class="team-member__skill-text">Умение сотрудника №5</span>
                        </li>
                        <li class="team-member__skill">
                          <span class="team-member__skill-text">Умение сотрудника №6</span>
                        </li>
                        <li class="team-member__skill">
                          <span class="team-member__skill-text">Умение сотрудника №7</span>
                        </li>
                      </ul>
                    </div>

                    <div class="team-member__info-bottom">
                      <button class="btn-blue team-member__action" type="button">Записаться</button>
                    </div>
                  </div>
                </div>
              </li>

              <li class="tild-card team-member">
                <div class="team-member__inner">
                  <div class="team-member__photo-block">
                    <img class="team-member__photo" src="<?php bloginfo('template_url') ?>/assets/images/service-4.jpg" alt="сотрудник студии">
                  </div>

                  <div class="team-member__info">
                    <div class="team-member__info-top">
                      <span class="team-member__name">Имя Фамилия</span>
                      <span class="team-member__position">креативный лидер</span>
                    </div>

                    <div class="team-member__info-middle">
                      <ul class="team-member__skills">
                        <li class="team-member__skill">
                          <span class="team-member__skill-text">Умение сотрудника №1</span>
                        </li>
                        <li class="team-member__skill">
                          <span class="team-member__skill-text">Умение сотрудника №2</span>
                        </li>
                        <li class="team-member__skill">
                          <span class="team-member__skill-text">Умение сотрудника №3</span>
                      </ul>
                    </div>

                    <div class="team-member__info-bottom">
                      <button class="btn-blue team-member__action" type="button">Записаться</button>
                    </div>
                  </div>
                </div>
              </li>

              <li class="tild-card team-member">
                <div class="team-member__inner">
                  <div class="team-member__photo-block">
                    <img class="team-member__photo" src="<?php bloginfo('template_url') ?>/assets/images/service-4.jpg" alt="сотрудник студии">
                  </div>

                  <div class="team-member__info">
                    <div class="team-member__info-top">
                      <span class="team-member__name">Имя Фамилия</span>
                      <span class="team-member__position">креативный лидер</span>
                    </div>

                    <div class="team-member__info-middle">
                      <ul class="team-member__skills">
                        <li class="team-member__skill">
                          <span class="team-member__skill-text">Умение сотрудника №1</span>
                        </li>
                        <li class="team-member__skill">
                          <span class="team-member__skill-text">Умение сотрудника №2</span>
                        </li>
                        <li class="team-member__skill">
                          <span class="team-member__skill-text">Умение сотрудника №3</span>
                        </li>
                        <li class="team-member__skill">
                          <span class="team-member__skill-text">Умение сотрудника №4</span>
                        </li>
                      </ul>
                    </div>

                    <div class="team-member__info-bottom">
                      <button class="btn-blue team-member__action" type="button">Записаться</button>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
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
                  <img class="reviews-photos__photo" src="<?php bloginfo('template_url') ?>/assets/images/review-photo-1.jpg" alt="фотоотзыв">
                </div>
                <div class="reviews-photos__block">
                  <img class="reviews-photos__photo" src="<?php bloginfo('template_url') ?>/assets/images/review-photo-1.jpg" alt="фотоотзыв">
                </div>
                <div class="reviews-photos__block">
                  <img class="reviews-photos__photo" src="<?php bloginfo('template_url') ?>/assets/images/review-photo-1.jpg" alt="фотоотзыв">
                </div>
                <div class="reviews-photos__block">
                  <img class="reviews-photos__photo" src="<?php bloginfo('template_url') ?>/assets/images/review-photo-1.jpg" alt="фотоотзыв">
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
                    <h3 class="visually-hidden">Отзыв от Анатолий Петров</h3>

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
                    <h3 class="visually-hidden">Отзыв от Анатолий Петров</h3>

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
                    <h3 class="visually-hidden">Отзыв от Анатолий Петров</h3>

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

    <!-- Секция контактов -->
    <section id="contacts" class="contacts">
      <div class="contacts__row">
        <div class="container">
          <h2 class="section-title contacts__title">Наши <b class="marker">контактные данные</b></h2>
          <p class="contacts__subtitle">Далеко-далеко, за словесными горами в стране гласных и согласных живут рыбные тексты. Текстов ipsum, всемогущая свой силуэт рукопись диких семантика переулка переписывается то большого даже безорфографичный он?</p>

          <div class="contacts__content">
            <div class="contacts__map-wrapper">
              <img class="decor-image contacts__map-decor-image contacts__map-decor-image_1" src="<?php bloginfo('template_url') ?>/assets/images/map-decor-1.png" alt="" aria-hidden="true">
              <img class="decor-image contacts__map-decor-image contacts__map-decor-image_2" src="<?php bloginfo('template_url') ?>/assets/images/map-decor-1.png" alt="" aria-hidden="true">

              <div id="map"></div>

              <script>
                ymaps.ready(init);
                function init(){
                  const mapOpts = {
                    latitude: <?php the_field('map_latitude') ?>,
                    longitude: <?php the_field('map_longitude') ?>,
                    balloonText: '<?php the_field('balloon_text') ?>',
                    hintText: '<?php the_field('hint_text') ?>',
                  };

                  const myMap = new ymaps.Map("map", {
                    center: [mapOpts.latitude, mapOpts.longitude],
                    zoom: 17
                  });
                  myMap.geoObjects.add(new ymaps.Placemark([mapOpts.latitude, mapOpts.longitude], {
                    balloonContent: mapOpts.balloonText,
                    hintContent: mapOpts.hintText,
                  }, {
                    preset: 'islands#dotIcon',
                    iconColor: '#177BC9'
                  }));
                  myMap.controls.remove('zoomControl');
                  myMap.controls.remove('trafficControl');
                  myMap.controls.remove('geolocationControl');
                  myMap.controls.remove('rulerControl');
                }
              </script>

              <!-- <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aaf56307b455b4e6a13baafee6352c48eab909fba6238ae0d14965388882dda1d&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe> -->              
            </div>

            <div class="contacts__info">
              <article class="tild-card  info-block">
                <h3 class="info-block__title"><?php bloginfo('title') ?> | <?php bloginfo('description') ?></h3>
                <address class="info-block__info">
                  <span class="info-block__item">г. Егорьевск, 5 мкр., д. 21</span>
                  <span class="info-block__item">Пн—Вс: с 10:00 до 20:00</span>
                  <span class="info-block__item">+ 7 808 353 53 35</span>
                  <a class="info-block__item blue" href="mailto:mioka2023@gmail.com">mioka2023@gmail.com</a>
                </address>
              </article>

              <article class="tild-card  info-block">
                <h3 class="info-block__title">Немного информации</h3>
                <p class="info-block__text">Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Прямо толку грустный взобравшись они.</p>
              </article>
            </div>

            <ul class="contacts__social social-list">
              <li class="social-list__item">
                <a class="social-list__item" href="#" title="<?php bloginfo('title') ?> в ВКонтакте">
                  <svg class="social-list__icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 215 215"><g id="VK"><path fill="#07f" d="M0,103.2c0-48.65,0-73,15.11-88.09S54.55,0,103.2,0h8.6c48.65,0,73,0,88.09,15.11S215,54.55,215,103.2v8.6c0,48.65,0,73-15.11,88.09S160.45,215,111.8,215h-8.6c-48.65,0-73,0-88.09-15.11S0,160.45,0,111.8Z"/><path fill="#fff" id="VK-2" data-name="VK" class="cls-2" d="M112,151c-45.86,0-72-31.44-73.1-83.75h23c.75,38.4,17.69,54.66,31.1,58v-58h21.63v33.12c13.24-1.43,27.16-16.52,31.85-33.12h21.63c-3.6,20.46-18.69,35.55-29.42,41.75,10.73,5,27.91,18.19,34.45,42H149.29C144.18,135,131.44,122.7,114.59,121V151Z"/></g></svg>
                </a>
              </li>
              <li class="social-list__item">
                <a class="social-list__item" href="#" title="<?php bloginfo('title') ?> в Telegram">
                  <svg class="social-list__icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 215 215"><defs><linearGradient id="Безымянный_градиент_3" x1="554" y1="107.5" x2="769" y2="107.5" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2aabee"/><stop offset="1" stop-color="#229ed9"/></linearGradient></defs><g id="Telegram"><path fill="url(#Безымянный_градиент_3)" d="M554,103.2c0-48.65,0-73,15.11-88.09S608.55,0,657.2,0h8.6c48.65,0,73,0,88.09,15.11S769,54.55,769,103.2v8.6c0,48.65,0,73-15.11,88.09S714.45,215,665.8,215h-8.6c-48.65,0-73,0-88.09-15.11S554,160.45,554,111.8Z" transform="translate(-554)"/><path fill="#fff" id="Telegram-2" data-name="Telegram" d="M598.29,105q51.57-22.47,68.78-29.63c32.76-13.63,39.56-16,44-16.07a7.7,7.7,0,0,1,4.57,1.37,5,5,0,0,1,1.68,3.19,21,21,0,0,1,.2,4.65c-1.78,18.65-9.46,63.91-13.37,84.79-1.65,8.84-4.9,11.81-8.06,12.1-6.85.63-12.05-4.53-18.68-8.88-10.38-6.8-16.25-11-26.32-17.68-11.65-7.67-4.1-11.89,2.54-18.78,1.74-1.81,31.91-29.26,32.5-31.75a2.41,2.41,0,0,0-.55-2.08,2.68,2.68,0,0,0-2.44-.24q-1.56.36-49.75,32.88-7.07,4.86-12.79,4.73c-4.22-.09-12.32-2.38-18.34-4.34-7.38-2.4-13.25-3.67-12.74-7.75Q589.91,108.31,598.29,105Z" transform="translate(-554)"/></g></svg>
                </a>
              </li>
              <li class="social-list__item">
                <a class="social-list__item" href="#" title="<?php bloginfo('title') ?> в Одноклассниках">
                  <svg class="social-list__icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 215 215"><g id="Ok"><path fill="#ee8208" d="M831,657.2c0-48.65,0-73,15.11-88.09S885.55,554,934.2,554h8.6c48.65,0,73,0,88.09,15.11S1046,608.55,1046,657.2v8.6c0,48.65,0,73-15.11,88.09S991.45,769,942.8,769h-8.6c-48.65,0-73,0-88.09-15.11S831,714.45,831,665.8Z" transform="translate(-831 -554)"/><g id="Ok-2" data-name="Ok"><path id="Ok-3" data-name="Ok" fill="#fff" d="M938.45,665.08a32.79,32.79,0,1,0-32.79-32.79,32.84,32.84,0,0,0,32.79,32.79m0-46.4a13.61,13.61,0,1,1-13.6,13.61,13.61,13.61,0,0,1,13.6-13.61" transform="translate(-831 -554)"/><path fill="#fff" id="Ok-4" data-name="Ok" d="M951.75,691.78a61.26,61.26,0,0,0,19.09-7.92,9.65,9.65,0,1,0-10.26-16.34,41.76,41.76,0,0,1-44.16,0,9.65,9.65,0,0,0-10.26,16.34,60.29,60.29,0,0,0,19.09,7.92l-18.37,18.38a9.61,9.61,0,0,0,0,13.6,9.93,9.93,0,0,0,6.8,2.84,9.37,9.37,0,0,0,6.8-2.84l18.07-18.07,18.07,18.07a9.62,9.62,0,0,0,13.61-13.6Z" transform="translate(-831 -554)"/></g></g></svg>
                </a>
              </li>
              <li class="social-list__item">
                <a class="social-list__item" href="#" title="<?php bloginfo('title') ?> в WhatsApp">
                  <svg class="social-list__icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 215 215"><g id="WhatsApp"><path fill="#25d366" d="M831,103.2c0-48.65,0-73,15.11-88.09S885.55,0,934.2,0h8.6c48.65,0,73,0,88.09,15.11S1046,54.55,1046,103.2v8.6c0,48.65,0,73-15.11,88.09S991.45,215,942.8,215h-8.6c-48.65,0-73,0-88.09-15.11S831,160.45,831,111.8Z" transform="translate(-831)"/><g id="WhatsApp-2" data-name="WhatsApp"><path id="WhatsApp-3" data-name="WhatsApp" fill="#fff" d="M880.57,166.37l8.3-30.32a58.51,58.51,0,1,1,50.7,29.3h0a58.38,58.38,0,0,1-27.95-7.12ZM913,147.64l1.78,1.05a48.5,48.5,0,0,0,24.75,6.78h0a48.62,48.62,0,1,0-41.2-22.79l1.16,1.84-4.91,17.95Z" transform="translate(-831)"/><path id="WhatsApp-4" data-name="WhatsApp" fill="#fff" fill-rule="evenodd" d="M969,120.76c-.36-.61-1.34-1-2.8-1.71s-8.65-4.27-10-4.75-2.31-.74-3.29.73-3.77,4.75-4.63,5.73-1.7,1.1-3.16.37a40.29,40.29,0,0,1-11.76-7.26,44.05,44.05,0,0,1-8.13-10.13c-.85-1.46-.09-2.25.64-3s1.46-1.71,2.19-2.56a10,10,0,0,0,1.46-2.44,2.67,2.67,0,0,0-.12-2.56c-.36-.73-3.29-7.93-4.5-10.86s-2.4-2.46-3.29-2.51-1.83,0-2.81,0A5.38,5.38,0,0,0,915,81.61a16.41,16.41,0,0,0-5.12,12.2c0,7.19,5.24,14.14,6,15.12s10.31,15.74,25,22.07a81.77,81.77,0,0,0,8.34,3.08,19.86,19.86,0,0,0,9.2.58c2.81-.42,8.65-3.53,9.87-7S969.41,121.37,969,120.76Z" transform="translate(-831)"/></g></g></svg>
                </a>
              </li>
              <li class="social-list__item">
                <a class="social-list__item" href="#" title="<?php bloginfo('title') ?> в YouTube">
                  <svg class="social-list__icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 215 215"><g id="YouTube"><path fill="#f00" d="M1385,380.2c0-48.65,0-73,15.11-88.09S1439.55,277,1488.2,277h8.6c48.65,0,73,0,88.09,15.11S1600,331.55,1600,380.2v8.6c0,48.65,0,73-15.11,88.09S1545.45,492,1496.8,492h-8.6c-48.65,0-73,0-88.09-15.11S1385,437.45,1385,388.8Z" transform="translate(-1385 -277)"/><path id="YouTube-2" data-name="YouTube" fill="#fff" d="M1550.87,354.5A15.34,15.34,0,0,0,1540,343.66c-9.56-2.56-47.89-2.56-47.89-2.56s-38.33,0-47.89,2.56a15.36,15.36,0,0,0-10.84,10.84c-2.56,9.56-2.56,29.5-2.56,29.5s0,19.94,2.56,29.5a15.36,15.36,0,0,0,10.84,10.84c9.56,2.56,47.89,2.56,47.89,2.56s38.33,0,47.89-2.56a15.34,15.34,0,0,0,10.83-10.84c2.56-9.56,2.56-29.5,2.56-29.5S1553.43,364.06,1550.87,354.5Zm-71,47.89V365.61L1511.73,384Z" transform="translate(-1385 -277)"/></g></svg>
                </a>
              </li>              
              <li class="social-list__item">
                <a class="social-list__item" href="#" title="<?php bloginfo('title') ?> в Яндекс Дзен">
                  <svg class="social-list__icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 215 215"><g id="Дзен"><path fill="#000" d="M277,934.2c0-48.65,0-73,15.11-88.09S331.55,831,380.2,831h8.6c48.65,0,73,0,88.09,15.11S492,885.55,492,934.2v8.6c0,48.65,0,73-15.11,88.09S437.45,1046,388.8,1046h-8.6c-48.65,0-73,0-88.09-15.11S277,991.45,277,942.8Z" transform="translate(-277 -831)"/><path id="Дзен-2" data-name="Дзен" fill="#fff" fill-rule="evenodd" d="M382.18,865.17c-.37,29.69-2.39,46.38-13.52,57.52s-27.8,13.16-57.47,13.53v4.39c29.67.37,46.34,2.4,57.47,13.53s13.15,27.83,13.52,57.52h4.39c.37-29.69,2.39-46.38,13.52-57.52s27.8-13.16,57.46-13.53v-4.39c-29.66-.37-46.34-2.4-57.46-13.53s-13.15-27.83-13.52-57.52Z" transform="translate(-277 -831)"/></g></svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </main>

  <div class="popup popup-footer-form">
    <div class="popup__content">
      <button class="popup-close" type="button" aria-label="закрыть уведомление об отправке формы">
        <span class="popup-close__inner">
          <svg class="popup-close__icon" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2.93179 17.07C1.97669 16.1475 1.21486 15.044 0.690774 13.824C0.166684 12.604 -0.109178 11.2918 -0.120716 9.96397C-0.132254 8.63618 0.120763 7.31938 0.623572 6.09042C1.12638 4.86145 1.86891 3.74493 2.80784 2.80601C3.74677 1.86708 4.86328 1.12455 6.09225 0.62174C7.32121 0.118932 8.63801 -0.134085 9.9658 -0.122547C11.2936 -0.111009 12.6058 0.164853 13.8258 0.688943C15.0459 1.21303 16.1493 1.97486 17.0718 2.92996C18.8934 4.81598 19.9013 7.342 19.8785 9.96397C19.8557 12.5859 18.8041 15.0941 16.95 16.9481C15.0959 18.8022 12.5878 19.8539 9.9658 19.8767C7.34383 19.8995 4.81781 18.8915 2.93179 17.07ZM11.4018 9.99996L14.2318 7.16996L12.8218 5.75996L10.0018 8.58996L7.17179 5.75996L5.76179 7.16996L8.59179 9.99996L5.76179 12.83L7.17179 14.24L10.0018 11.41L12.8318 14.24L14.2418 12.83L11.4118 9.99996H11.4018Z" fill="black"/>
          </svg>
        </span>
      </button>
      <h3 class="popup__title">
        Форма успешно отправлена!
      </h3>
      <p class="popup__descr">
        Следующая отправка формы будет доступна через 12 часов.
      </p>
      <button class="orange-gradient-btn popup__accept" type="button">
        <span class="orange-gradient-btn__inner popup__accept-inner">
          Понятно
        </span>
      </button>
    </div>
  </div>

<?php get_footer(); ?>
