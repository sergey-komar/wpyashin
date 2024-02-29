<?php get_header();?>
<main class="main">
    <div class="breadcrumbs">
        <div class="container">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
        </div>
    </div>

    <div class="fees">
        <div class="container">
            <h1 class="fees__title"><?php the_title();?></h1>
            <div class="fees-block">
                <div class="fees-block__content">
                   <?php the_content();?>
                </div>
                <div class="fees-block__img">
                    <div class="fees-block__inner">
                        <img src="<?php the_post_thumbnail_url();?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</main>
<?php get_footer();?>