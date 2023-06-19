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
                      <img src="<?php bloginfo('template_url') ?>/assets/images/icons/marker-small.svg" alt="" aria-hidden="true">
                      г. Егорьевск, 5 мкр., д. 21
                    </a>
                  </li>
                  <li class="footer-nav__item">
                    <a class="footer-nav__link" href="tel:78083535335">
                      <img src="<?php bloginfo('template_url') ?>/assets/images/icons/phone-small.svg" alt="" aria-hidden="true">
                      + 7 808 353 53 35
                    </a>
                  </li>
                  <li class="footer-nav__item">
                    <a class="footer-nav__link">
                      <img src="<?php bloginfo('template_url') ?>/assets/images/icons/clock.svg" alt="" aria-hidden="true">
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
    
                <textarea title="Введите ваше сообщение" name="usermsg"></textarea>
    
                <button type="submit">Отправить</button>
              </form>
            </article>
          </div>
        </div>
      </div>

      <div class="footer__bottom">
        <div class="container">
          <span class="footer__copyright">
            &copy; <?= date('Y') ?> <?php bloginfo('title') ?> | <?php bloginfo('description') ?>
          </span>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>