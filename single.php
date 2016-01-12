<?php 
	get_header();
?>
<?php 
	include("left_sidebar.php");
	if(in_category("product")){
		include("inc/view_product.php");
	}elseif(!in_category("product")){
		include("inc/view_news.php");
	}else{
		include("404.php");	
	}
	get_sidebar();
	include("inc/relative_post.php");
?>
<?php get_footer();?>