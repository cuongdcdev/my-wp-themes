<?php get_header();
    require_once 'inc/wp_bootstrap_pagination.php';
?>
    <div class='main-slider col-xs-12 fullWidth'>
<!--     	<ul>
    		<li><a href='#'><img src='img/slider/1.jpg' title='' alt=''></a></li>
    		<li><a href='#'><img src='img/slider/2.jpg' title='' alt=''></a></li>
    		<li><a href='#'><img src='img/slider/3.jpg' title='' alt=''></a></li>
    	</ul> -->
        <?php 
            echo do_shortcode("[metaslider id=41]"); 
        ?>
    </div><!-- main slider -->


<?php include_once("left_sidebar.php");?>
    <div class='main-story col-xs-12 col-md-7'>
        <div class='block-center'>
        <?php if(!is_paged()):?>
            <div class='block-special row padding-bottom-20'>
            <?php $arr = wpb_latest_sticky();?>
    			<h1 class='header-title col-xs-12 text-center'><?php echo $arr['title'];?> </h1>
                        <div class='block-thumb row relative'>
                            <a class='block-avatar col-xs-12 col-md-6 col-sm-6'  title='<?php echo $arr['title']; ?>' href="<?php echo $arr['permlink'];?>">
                                <img src='<?php echo $arr['img_url'];?>'  title='<?php echo $arr['title']; ?>' alt='<?php echo $arr['title'] ; ?>' class=" img-responsive col-xs-12">
                            </a>
                            <div class=' col-xs-12 col-sm-6 col-md-6 block-text'>
                                        <div class='intro'>
                                            <?php echo $arr['excerpt'];?>
                                        </div>
                                        <a class='btn col-xs-4 col-md-2 pull-right btn-default ' href='<?php echo $arr['permlink']; ?>' ><?php echo $GLOBALS['lang_array']['more']; ?></a>
                            </div> <!--  block text-->
                    </div>
                </div>
                <!-- block special -->
            <?php endif;?>
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
                            <a class="btn btn-default col-xs-offset-4 col-xs-4  " href="<?php the_permalink();?>"><?php echo $GLOBALS['lang_array']['product_button_more']; ?></a>
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


