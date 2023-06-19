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

<?php get_footer(); ?>
