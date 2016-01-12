<?php get_header();?>
<?php include("left_sidebar.php");?>
<?php if(have_posts()):while(have_posts()):the_post();?>
<div class='main-story col-xs-7'>
        <div class='block-center news-block'>
            <div class='block-special row'>
                <h1 class='header-title col-xs-12 pull-left'><?php the_title(); ?></h1>
                <div class='block-wrapper relative-news'>
                    <div class='col-xs-12'>
                        <?php the_content() ;?>
                    </div>
                </div>
            </div>
        </div>
        <!-- block center -->
</div><!-- main story -->
<?php endwhile ;else: ?>
    <?php include("404.php");?>
 <?php endif;?>

<?php get_sidebar();?>
<?php get_footer();?>