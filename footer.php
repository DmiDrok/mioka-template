  <!-- Подвал -->
  <footer id="footer" class="footer">
    <div class="footer__row">
      <div class="footer__top">
        <div class="container">
          <div class="footer__line">
            <div class="footer-block">
              <span class="footer-block__title">
                <?php the_field('footer_contacts_title') ?>
              </span>
    
              <nav class="footer-nav">
                <ul class="footer-nav__list">
                  <li class="footer-nav__item">
                    <a class="footer-nav__link">
                      <img src="<?php bloginfo('template_url') ?>/assets/images/icons/marker-small.svg" alt="" aria-hidden="true">
                      <?php the_field('footer_address') ?>
                    </a>
                  </li>
                  <li class="footer-nav__item">
                    <a class="footer-nav__link" href="tel:78083535335">
                      <img src="<?php bloginfo('template_url') ?>/assets/images/icons/phone-small.svg" alt="" aria-hidden="true">
                      <?php the_field('footer_telephone') ?>
                    </a>
                  </li>
                  <li class="footer-nav__item">
                    <a class="footer-nav__link">
                      <img src="<?php bloginfo('template_url') ?>/assets/images/icons/clock.svg" alt="" aria-hidden="true">
                      <?php the_field('footer_schedule') ?>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
    
            <div class="footer-block">
              <span class="footer-block__title"><?php the_field('footer_anchors_title') ?></span>
    
              <nav class="footer-nav">
                <ul class="footer-nav__list">
                  <li class="footer-nav__item">
                    <a class="footer-nav__link" href="#questions">Вопросы и ответы</a>
                  </li>
                  <li class="footer-nav__item">
                    <a class="footer-nav__link" href="#documents">Документы, сертификаты</a>
                  </li>
                </ul>
              </nav>
            </div>
    
            <article class="footer-block footer-form">
              <h3 class="footer-block__title footer-form__title"><?php the_field('footer_form_title') ?></h3>
              <?php echo do_shortcode('[contact-form-7 id="21" title="Контактная форма 1"]') ?>
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