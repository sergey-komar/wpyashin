<?php get_header();?>
   
<main class="main">
    <div class="container">
    <div class="breadcrumbs">
		<div class="container">
			<?php woocommerce_breadcrumb();?>
		</div>
	</div>
    <?php if(have_posts()) : while(have_posts()): the_post()?>


    <p><?php the_content();?></p>
    <?php endwhile; else:?>
        Записей нет
    <?php endif;?>
    </div>
</main>

<?php get_footer();?>