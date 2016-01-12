<?php
if ( is_single()) {
$categories = get_the_category();
if ($categories) {
foreach ($categories as $category) {
$cat = $category->cat_ID;
$args=array(
'cat' => $cat,
'order' =>"DESC",
'orderby' => "rand",
'post__not_in' => array($post->ID),
'posts_per_page'=>3,
'ignore_sticky_posts'=>1
);
$my_query = null;
$my_query = new WP_Query($args);
?>
    

<?php
if( $my_query->have_posts() ) {
echo " <div class='block-wrapper relative-product container'>
        <div class='block row'>";
             echo  "<h3 class='header-title pull-left border-bottom col-xs-12'>";
            echo in_category("product")? $GLOBALS['lang_array']['relative_products'] : $GLOBALS['lang_array']['relative_news'];
            echo  "</h3>";
    while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <div class='block-thumb col-xs-4 col-md-3'>
                <div class='block-avatar col-xs-12'>
                    <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                        <img class='center-block thumbnail img-responsive' src='<?php the_post_thumbnail_url();?>' title='<?php the_title();?>' alt='<?php the_title();?>'>
                    </a>
                </div>
                <div class='block-text col-xs-12'>
                    <div class='intro  center-block text-center'>
                        <?php the_excerpt();?>
                    </div>
                    <a class="btn col-xs-4 col-xs-offset-4 btn-default " href='<?php the_permalink();?>'><?php echo $GLOBALS['lang_array']['relative_news'];?></a>
                </div>
                <!--  block text-->
            </div><!-- 1 span pham -->
<?php
    endwhile;
    }}} wp_reset_query(); }
?>
        </div>
        <!-- 1 block relative -->
    </div>
    <!-- main story -->