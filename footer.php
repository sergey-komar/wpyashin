<footer class="footer">
      <div class="container">
        <div class="footer-block">
          <div class="footer-block__item">
            <a href="/" class="logo">
              <img src="<?php the_field('shapka_logotip_na_chyornom', 'options');?>" alt="img">
            </a>
          </div>

          <div class="footer-block__item">
            <?php
                wp_nav_menu([
                  'theme_location' => 'menu-footer',
                  'menu_class' => 'footer-block__list',
                  'container' => ''
                ]);
              ?>
          </div>

          <div class="footer-block__item">
            <div class="footer-block__info address">
              <div class="footer-block__info-text">Адрес</div>
              <div class="footer-block__info-address">
              <?php the_field('podval_adres', 'options');?>
              </div>
            </div>

            <div class="footer-block__info phone">
              <div class="footer-block__info-text">Телефон</div>
              <a href="tel:<?php the_field('podval_telefon_ssylka', 'options');?>" class="footer-block__info-link">
              <?php the_field('podval_telefon', 'options');?>
              </a>
            </div>

            <div class="footer-block__info email">
              <div class="footer-block__info-text">Почта</div>
              <a href="mailto:<?php the_field('podval_pochta', 'options');?>" class="footer-block__info-link">
              <?php the_field('podval_pochta', 'options');?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
   <?php wp_footer();?>
  

</body>

</html>