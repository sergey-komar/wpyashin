<?php
//СТРАНИЦА МАГАЗИНА

defined( 'ABSPATH' ) || exit;
?>

<?php
get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<section class="catalog">
	<div class="container">
		
			<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
				<h1 class="woocommerce-products-header__title page-title catalog__title title"><?php woocommerce_page_title(); ?></h1>
			<?php endif; ?>

			<?php
			/**
			 * Hook: woocommerce_archive_description.
			 *
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			do_action( 'woocommerce_archive_description' );
			?>
			<?php
				$catalog__terms = get_terms([
					'taxonomy' => 'product_cat',
					'orderby'     => 'id', // здесь по какому полю сортировать
					'hide_empty'  => false, // скрывать категории без товаров или нет
					'parent'      => 0, // id родительской категории
											]);
			?>
                       
			<div class="catalog-box">
				<?php foreach($catalog__terms as $term) :?>
				<a href="<?php echo get_term_link($term);?>" class="catalog-box__item">
					<?php echo $term->name;?>
				</a>
				<?php endforeach;?>
			</div>
		

		<?php
		if ( woocommerce_product_loop() ) { ?>
			
				

				<div class="catalog-search">
                    <div class="catalog-search__item">
					
						<?php woocommerce_result_count()?>
					</div>
                    <div class="search__sort">
                        <button class="search__sort-btn">Сортировать по</button>
                        <ul class="search__list">
							<li><a class="search__list-link--active" href="?orderby=date" <?php if(isset($_GET['orderby']) && 'date' == $_GET['orderby']) : ?> class="active"<?php endif;?>>Сначала новые</a></li>
							<li><a href="?orderby=popularity" <?php if(isset($_GET['orderby']) && 'popularity' == $_GET['orderby']) : ?> class="active"<?php endif;?>>По популярности</a></li>
							<li><a href="?orderby=rating" <?php if(isset($_GET['orderby']) && 'rating' == $_GET['orderby']) : ?> class="active"<?php endif;?>>По среднему рейтингу</a></li>
							<li><a href="?orderby=price" <?php if(isset($_GET['orderby']) && 'price' == $_GET['orderby']) : ?> class="active"<?php endif;?>>По цене &uarr;</a></li>
							<li><a href="?orderby=price-desc" <?php if(isset($_GET['orderby']) && 'price-desc' == $_GET['orderby']) : ?> class="active"<?php endif;?>>По цене &darr;</a></li>
                        </ul>
                    </div>
                </div>


			<?php
			woocommerce_product_loop_start();

			if ( wc_get_loop_prop( 'total' ) ) {
				while ( have_posts() ) {
					the_post();

					/**
					 * Hook: woocommerce_shop_loop.
					 */
					do_action( 'woocommerce_shop_loop' );

					wc_get_template_part( 'content', 'product' );
				}
			}

			woocommerce_product_loop_end();

			/**
			 * Hook: woocommerce_after_shop_loop.
			 *
			 * @hooked woocommerce_pagination - 10
			 */
			do_action( 'woocommerce_after_shop_loop' );
		} else {
			/**
			 * Hook: woocommerce_no_products_found.
			 *
			 * @hooked wc_no_products_found - 10
			 */
			do_action( 'woocommerce_no_products_found' );
		}

		/**
		 * Hook: woocommerce_after_main_content.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );

		/**
		 * Hook: woocommerce_sidebar.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );

		get_footer( '' );

		?>
	</div>
</section>