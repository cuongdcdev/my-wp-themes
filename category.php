<?php get_header();
    require_once 'inc/wp_bootstrap_pagination.php';
    if (!function_exists('z_taxonomy_image_url')){
        echo "<script>alert('this themes require z_taxonomy_image_url -> link :  http://zahlan.net/blog/2012/06/categories-images/ | PLS download it ! ')</script>";
        return;
    };
?>
    <div class='main-slider col-xs-12 fullWidth'>
    <ul class="category fullWidth">
        <li>
            <div class='block-special row padding-bottom-20 fullWidth'>
                <h1 class='header-title col-xs-12 text-center'> <?php single_cat_title("");?></h1>
                <?php echo category_description("");?>
            </div>
            <img src='<?php echo z_taxonomy_image_url(); ?>' alt='<?php single_cat_title("");?>' title="<?php single_cat_title("");?>">
        </li>
    </ul>
    </div><!-- main slider -->


<?php include_once("left_sidebar.php");?>
    <div class='main-story col-xs-12 col-md-7'>
        <div class='block-center'>
            <div class='block-wrapper'>
                <div class='block row row-eq-height'>
                    <?php if(have_posts()) : ?>
                     <?php while(have_posts()):  the_post();?>
                        <?php if(is_sticky()) continue;?>
                    <div class='block-thumb col-xs-6  col-md-4 '>
                        <a href='<?php the_permalink();?>' title="<?php the_permalink();?>" class='block-avatar col-xs-12'>
                        <?php 
                        	if(has_post_thumbnail()){
                        		echo "<img class='img-responsive center-block thumbnail' src='";
                        		the_post_thumbnail_url(array(200,200));
                        		echo "' alt='";
                        		the_title();
                        		echo "' title='";
                        		the_title();
                        		echo "' />";
                        	}else{
                        		echo "<img class='img-responsive center-block thumbnail' src='' title='404' alt='404' />";
                        	}
                        ?>
                        </a>
                        <div class='block-text col-xs-12'>
                            <div class='intro  center-block text-center'>
                                <?php the_title();?>
                            </div>
                            <a class="btn center-block col-xs-12 " href="<?php the_permalink();?>"><?php echo $GLOBALS['lang_array']['product_button_more']; ?></a>
                        </div>
                        <!--  block text-->
                    </div>
                    <!-- 1 block thumb-->
                <?php endwhile ;?>
                  <?php else : ?>
                    <h1 class='text-success'>THIS SITE DONT HAVE ANY CONTENT ! PLEASE GO TO OTHER SITE ! THANKS ! :D </h1>
                <?php endif ;?>
            

                </div>
                <!-- 1 block -->
            </div>
            <!--block wrapper -->
        </div>
        <!--block main center -->
    </div>
    <!-- main story -->
    <?php get_sidebar();?>
    <div class='main-pagination row col-xs-12'>
    <?php     if(function_exists("wp_bootstrap_pagination")) wp_bootstrap_pagination(); ?>
    </div><!-- pagination -->


<?php get_footer();?>


