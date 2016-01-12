<?php 
    require_once('inc/wp_bootstrap_navwalker.php');
	add_theme_support( 'post-thumbnails' );
	//dang ki 1 menu  
	function register_my_menu(){
		register_nav_menus(array('header-menu'=>__('Header Menu')));
	}
	add_action('init','register_my_menu');//ngay sau khi wp khoi chay thi chay ham nay

/* Theme setup */

//add widgets :

	function register_my_widget(){
		register_sidebar(array(
			"name" => __("Sidebar","cnn"),
			"id" => "cnn_widget_area",
			"before_title" => "<h2>",
			"after_title" => "</h2>",
			"before_widget" => "<li id='' class='widget s' >",
			"after_widget" => "</li>"

		));
		register_sidebar(array(
			"name" => __("footer","cnn"),
			"id" => "cnn_footer",
			"before_title" => "<h2>",
			"after_title" => "</h2>",
			"before_widget" => "<li id='' class='widget s' >",
			"after_widget" => "</li>"	
		));
		register_sidebar(array(
			"name" =>__("Lang switcher","cnn"),
			"id" => "cnn_lang_sidebar",
			"before_title" => "<h2>",
			"after_title" => "</h2>",
			"before_widget" => "",
			"after_widget" => ""
		));
	};
	add_action("init","register_my_widget");

	//sidebar :
	function add_my_theme_customizer($wp_customize){

	};
	add_action("customize_register","add_my_theme_customizer");

	function wpb_latest_sticky() { 

		/* Get all sticky posts */
		$sticky = get_option( 'sticky_posts' );

		/* Sort the stickies with the newest ones at the top */
		rsort( $sticky );

		/* Get the 5 newest stickies (change 5 for a different number) */
		$sticky = array_slice( $sticky, 0, 1 );

		/* Query sticky posts */
		$the_query = new WP_Query( array( 'post__in' => $sticky, 'ignore_sticky_posts' => 1 ) );
		// The Loop
		$arr = array();
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$arr['permlink'] = get_permalink("","",false);
				$arr['title']=get_the_title("","",false); 
				$arr['excerpt']=get_the_excerpt("","",false);
				$arr['img_url'] = get_the_post_thumbnail_url();	
			}
			
		} else {
			// no posts found
			$arr['excerpt'] =$arr['title'] = $arr['permlink'] =$arr["img_url"]=  "404 not found any featured post ! :( ";
		}
		/* Restore original Post Data */
		wp_reset_postdata();

		return $arr; 
	}
?>
