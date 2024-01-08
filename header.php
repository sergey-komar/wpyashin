<!DOCTYPE html>
<html lang="<?php language_attributes();?>">

<head>
  <meta charset="<?php bloginfo('charset')?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <?php wp_head();?>
</head>

<body <?php body_class()?>>
<?php wp_body_open()?>
  <header class="header header-page">
    <div class="container">
      <div class="header__inner header__inner--page">
        <div class="nav-icon">
          <div class="nav-icon__middle"></div>
        </div>
        <a href="/" class="logo">
          <img src="<?php the_field('shapka_logotip_na_belom', 'options');?>" alt="img">
        </a>
        <div class="menu">
          <nav class="nav">
            <?php
                wp_nav_menu([
                  'theme_location' => 'menu-header',
                  'menu_class' => 'menu__list',
                  'container' => ''
                ]);
              ?>
          </nav>
          <div class="header__box--mobile">
            <a href="tel:<?php the_field('podval_telefon_ssylka', 'options');?>" class="header__box-btn header__box-btn--mobile">Связаться с нами</a>
            <div class="footer-block__info address">
              <div class="footer-block__info-text">Адрес</div>
              <div class="footer-block__info-address">
              <?php the_field('', 'options');?>
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

        <div class="header__box">
          <a href="tel:<?php the_field('podval_telefon_ssylka', 'options');?>" class="header__box-btn">Связаться с нами</a>
          <a href="#" class="header__box-user">
            <svg width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="9.50365" cy="4.43333" r="3.43333" stroke="#6B6D80" stroke-width="2"/>
                <path d="M18 16.4729C18 17.2233 17.7945 17.8043 17.4481 18.2749C17.0932 18.7571 16.5499 19.1773 15.7992 19.5229C14.2757 20.2245 12.0725 20.5396 9.5 20.5396C6.92745 20.5396 4.7243 20.2245 3.20076 19.5229C2.45014 19.1773 1.90678 18.7571 1.55192 18.2749C1.20552 17.8043 1 17.2233 1 16.4729C1 15.7225 1.20552 15.1415 1.55192 14.6709C1.90678 14.1888 2.45014 13.7686 3.20076 13.4229C4.7243 12.7213 6.92745 12.4062 9.5 12.4062C12.0725 12.4062 14.2757 12.7213 15.7992 13.4229C16.5499 13.7686 17.0932 14.1888 17.4481 14.6709C17.7945 15.1415 18 15.7225 18 16.4729Z" stroke="#6B6D80" stroke-width="2"/>
                </svg>
          </a>

          <a href="<?php echo wc_get_cart_url()?>" class="header__box-basket">
            <svg width="24" height="27" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.4463 22.4015C21.2402 24.4448 19.5202 26 17.4665 26L6.53346 26C4.47978 26 2.75978 24.4448 2.55366 22.4015L1.44401 11.4015C1.20635 9.04555 3.05594 7 5.42381 7L18.5762 7C20.9441 7 22.7937 9.04556 22.556 11.4015L21.4463 22.4015Z" stroke="#6B6D80" stroke-width="2"/>
                <path d="M7 6C7 3.23858 9.23858 0.999999 12 1C14.7614 1 17 3.23858 17 6" stroke="#6B6D80" stroke-width="2" stroke-linecap="round"/>
                <circle cx="7.5" cy="12.5" r="1.5" fill="#6B6D80"/>
                <circle cx="16.5" cy="12.5" r="1.5" fill="#6B6D80"/>
                </svg>
                
            <span class="badge"><?php echo WC()->cart->get_cart_contents_count();?></span>
          </a>
        </div>
      </div>
    </div>
  </header>