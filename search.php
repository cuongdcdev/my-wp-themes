<?php 
	get_header();
	 require_once 'inc/wp_bootstrap_pagination.php';
?>
<?php include_once("left_sidebar.php");?>
<div class='main-story col-xs-12 col-md-7'>
        <div class='block-center '>
            <div class='block-special row margin-bottom-20'>
                <h1 class='header-title col-xs-12 text-center'><span class='glyphicon glyphicon-search'></span> <?php get_search_query();?></h1>
            </div><!-- noti text -->
            <div class='block-search col-xs-12'>
                <form action='<?php echo home_url("/")?>' method='get' class='col-xs-12 col-md-7'>
                <div class='col-xs-10'>
                    <input type='text' class="form-control col-xs-12 input-lg" name='s' value="<?php the_search_query();?>"/>
                </div>
                    <button class='btn btn-default input-lg' type='submit'>
                        <span class='glyphicon glyphicon-search'></span>
                    </button>
                </form>
            </div>
        </div>
        <?php if(have_posts()):while(have_posts()):the_post();?>
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
                            <a class="btn btn-default col-xs-4 col-offset-4" href="<?php the_permalink();?>"><?php echo $GLOBALS['lang_array']['product_button_more']; ?></a>
                        </div>
                        <!--  block text-->
                    </div>
                    <!-- 1 block thumb-->
                <?php endwhile ;?>
                  <?php else : ?>
                    <h1 class='text-center text-success col-xs-12'><?php echo $GLOBALS['lang_array']['404']?> </h1>
                <?php endif ;?>
    </div>
    <!-- main story -->


<?php 

	get_footer();
?>