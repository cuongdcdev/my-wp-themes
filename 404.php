<?php 
	get_header();

?>
<?php include("left_sidebar.php");?>
<div class='main-story col-xs-7'>
        <div class='block-center '>
            <div class='block-special row'>
                <h1 class='header-title col-xs-12 text-center'><span class='glyphicon glyphicon-search'></span> <?php get_search_query();?></h1>
                <p class='text-center'>error 404 , sorry about that ! </p>
            </div><!-- noti text -->
            <div class='block-search'>
                <form action='<?php echo home_url("/")?>' method='get' class='col-xs-12 col-md-12'>
                <div class='col-xs-10'>
                    <input type='text' class="form-control col-xs-12 input-lg" name="s" value="<?php the_search_query();?>"/>
                </div>
                    <button class='btn btn-default input-lg' type='submit'>
                        <span class='glyphicon glyphicon-search'></span>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- main story -->

<?php get_sidebar();?>
<?php get_footer();?>