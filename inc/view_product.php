<?php if(have_posts()) : while(have_posts()):the_post();?>
<div class='main-story col-xs-7'>
       <div class='block-center container'>
            <div class='block-special row'>
            <h1 class='header-title col-xs-12 text-center'> <?php the_title();?></h1>

                    <div class='block-product col-xs-12 col-md-8'>
                        <div class='block-avatar col-xs-12 col-md-12 col-sm-12'>
                            <a class='fancy-box' href="<?php the_post_thumbnail_url(); ?>">
                                <img class='col-xs-12 img-responsive ' src='<?php the_post_thumbnail_url();?>' title='<?php the_title();?>' alt='<?php the_title(); ?>'>
                            </a>
                        </div>

                        <div class='block-avatar row product-more-img'>
                        <?php if(class_exists("dynamic_featured_image")){
                            $img_title = the_title("","",false);
                            $imgs = $dynamic_featured_image->get_featured_images();
                            $i = 0;

                         while($i < sizeof($imgs)){
                                $i++;
                                $img_url = $imgs[$i]['full'];
                                echo "
                                    <a  class='fancy-box block-avatar-small col-xs-4' href='$img_url'>
                                        <img  class='col-xs-12 img-responsive' src='$img_url' title='$img_title' alt='$img_title'>
                                    </a>
                                ";
                            }
                            }else{
                                echo "<script>alert('Cuong\'s theme require plugin dynamic featured image to work correctly , PLS install this : https://wordpress.org/plugins/dynamic-featured-image/ ');</script>";
                                return ;
                            }//check class exists
                        ?>
                        </div>
                    </div><!-- block single product -->

                        <div class='block-text col-xs-12 col-md-4'>
                            <div class='intro'>
                                 <?php the_excerpt();?>
                            </div>
                        </div>
                        <!--  block text-->
                    </div><!--block thumbnail -->
            </div><!--block special row -->

            <div class='block-wrapper product-more-info'>
                <div class='block-text col-xs-12 col-md-12'>
                <h1 class='header-title' ><?php echo $GLOBALS['lang_array']['more_description_product'];?></h1>
                    <div class='intro'>
                        <?php the_content();?>
                    </div>
                </div>
                <!--  block text-->
            </div>
</div>
            <?php endwhile;
                  endif;
            ?>