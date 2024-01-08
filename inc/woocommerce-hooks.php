<?php
// ОТКЛЮЧАЕМ ВСЕ СТИЛИ woocommerce
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );




// Отключаем сайдбар на странице магазина
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

// Отключаем распродажа на странице магазина
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);

// Отключаем в корзину на странице магазина
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);


// Отключаем ссылку на странице магазина в которую обернута карточка товара
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);

// Отключаем табы на странице карточки товара
remove_action('woocommerce_after_single_product_summary','woocommerce_output_product_data_tabs', 10);

remove_action('woocommerce_single_product_summary','woocommerce_template_single_meta', 40);


// Отключаем notices на странице магазина
remove_action('woocommerce_before_shop_loop','woocommerce_output_all_notices', 10);

// Отключаем notices на странице карточки товара
remove_action('woocommerce_before_single_product','woocommerce_output_all_notices', 10);

//Отключаем уведомления в корзине
add_filter( 'wc_add_to_cart_message_html', '__return_null');

//СТРАНИЦА МАГАЗИНА
//хлебные крошки
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
add_filter( 'woocommerce_breadcrumb_defaults', function() {
	return array(
		'delimiter'   => '&nbsp;-&nbsp;',
		'wrap_before' => '<nav class="breadcrumb bg-light mb-30">',
		'wrap_after'  => '</nav>',
		'before'      => '',
		'after'       => '',
		'home'        => __( 'Главная', 'woostudy' ),
	);
} );


// НАЗВАНИЕ ТОВАРА В КАРТОЧКЕ ТОВАРА на странице магазина
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', function() {
    // https://woocommerce.github.io/code-reference/classes/WC-Product.html
    global $product;
    echo '<div class="catalog-block__item-title">' . $product->get_title() . '</div>';
}, 5);


// НАЗВАНИЕ ТОВАРА В КАРТОЧКЕ ТОВАРА на странице товара
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
add_action('woocommerce_single_product_summary', function() {
    // https://woocommerce.github.io/code-reference/classes/WC-Product.html
    global $product;
    echo '<div class="product-block__content-title">' . $product->get_title() . '</div>';
}, 5);

// ЦЕНА ТОВАРА В КАРТОЧКЕ ТОВАРА
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
add_action('woocommerce_single_product_summary', function() {
    global $product;
    echo '<div class="product-block__content-price">' . $product->get_price_html() . '</div>';
}, 10);


// ОПИСАНИЕ ТОВАРА В КАРТОЧКЕ ТОВАРА
add_action('woocommerce_single_product_summary', function() {
    global $product;
    echo '<div class="product-block__content-desc">' . '<p>' . $product->description . '</p>'. '</div>';
}, 20);



// ДИНАМИЧСКОЕ ОБНОВОЕНИЕ СЧЁТЧИКА ТОВАРОВ В ИКОНКЕ КОРЗИНЫ ЧЕРЕЗ ajax
add_filter('woocommerce_add_to_cart_fragments', function($fragments) {

    $fragments['.badge'] =                                                                          '<span class="badge">' . WC()->cart->get_cart_contents_count() . '</span>';
        
    return $fragments;
    });



//УБИРАЕМ ЛИШНИЕ ПОЛЯ
add_filter( 'woocommerce_checkout_fields', 'wpbl_remove_some_fields', 9999 );
 
function wpbl_remove_some_fields( $array ) {
    //unset( $array['billing']['billing_first_name'] ); // Имя
    unset( $array['billing']['billing_last_name'] ); // Фамилия
    //unset( $array['billing']['billing_email'] ); // Email
    unset( $array['order']['order_comments'] ); // Примечание к заказу
     //unset( $array['billing']['billing_phone'] ); // Телефон
   
       unset( $array['billing']['billing_company'] ); // Компания
      // unset( $array['billing']['billing_city'] ); // Населённый пункт

    unset( $array['billing']['billing_address_2'] ); // 2-ая строка адреса 

    //unset( $array['billing']['billing_country'] ); // Страна
   
    unset( $array['billing']['billing_state'] ); // Область / район
    unset( $array['billing']['billing_postcode'] ); // Почтовый индекс
      //unset( $array['billing']['billing_address_1'] ); // 1-ая строка адреса 
    // Возвращаем обработанный массив
    return $array; 
    
}

//МЕНЯЕМ МЕСТАМИ ПОЛЯ В ОФОРМЛЕНИЕ ЗАКАЗА
add_filter( 'woocommerce_checkout_fields', 'wplb_email_first' );
 
function wplb_email_first( $array ) {
    
    // Меняем приоритет
    $array['billing']['billing_email']['priority'] = 30;
    $array['billing']['billing_phone']['priority'] = 40;
    $array['billing']['billing_country']['priority'] = 50;
    $array['billing']['billing_city']['priority'] = 60;
    $array['billing']['billing_address_1']['priority'] = 100;
   


    
    // Возвращаем обработанный массив
    return $array;

}
 
