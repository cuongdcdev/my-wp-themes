<?php 
    if(function_exists("pll_current_language")){
        if(pll_current_language() == "vi") include_once 'lang/vi.php';
            else include_once("lang/en.php");
            $GLOBALS['lang_array'] = $lang_array;
    }else{
        echo "<script>alert('this theme require <b>Polylang plugins</b> ! PLS install Polylang plugin first ! ');</script>";
        return;
    }
?>
<!DOCTYPE html>
<html lang="vi-vn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='description' content="<?php bloginfo('description');?>" />
    <?php wp_site_icon();?>
    <title><?php if(is_home()) bloginfo('name') ; else wp_title('') ;?></title>
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' type='text/css' href='<?php bloginfo('template_directory');?>/css/bootstrap.min.css' />
    <link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/css/jquery.fancybox.css"/>
    <link media='all' rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory');?>/css/main.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <?php wp_head();?>
</head>

<body>
    <div class='main-header row  fullWidth'>
        <div class='header col-xs-12'>
            <div class='banner col-xs-12 '>
                <div class='banner-title col-xs-12 col-md-4 '>
                <blockquote>
	                 <h1><a href="<?php bloginfo('url')?>" title="<?php bloginfo('name')?>"><?php bloginfo('name')?><a></h1>
                </blockquote>
                    <p><?php bloginfo('description')?></p>
	                </div>
                <!-- banner-title-->
            <div class='col-xs-12 col-sm-4 col-md-2 hidden-md hidden-lg  pull-left'>
                <div class='action'>
                    <ul id="switchLang">
                        <?php if(is_active_sidebar("cnn_lang_sidebar")):?>
                            <?php dynamic_sidebar("cnn_lang_sidebar"); ?>
                        <?php endif ;?>
                    </ul>
                </div>
                <!-- action -->
            </div><!-- lang switcher -->

            <div class='block col-xs-12 col-md-2 pull-right hidden-xs hidden-sm'>
                <div class='action'>
                    <ul id="switchLang">
                    <?php if(is_active_sidebar("cnn_lang_sidebar")):?>
                        <?php dynamic_sidebar("cnn_lang_sidebar"); ?>
                    <?php endif ;?>
                    </ul>
                </div>
                <!-- action -->
            </div><!-- lang switcher -->
            <div class="col-xs-2 pull-right hidden-md hidden-lg" >
               <button id="switchMenu" class="glyphicon glyphicon glyphicon-option-vertical btn btn-default nav-btn">    </button>
            </div><!-- lang switcher -->

                <div id="mainMenu" class='menu col-xs-12 col-md-7'>
                    <div>

                         <?php 
                                         wp_nav_menu(array(
                                             'menu' => 'top_menu',
                                             "depth" => 2 ,
                                             'container' => false,
                                             'menu_class' => 'nav navbar-nav pull-right',
                                             'walker' => new wp_bootstrap_navwalker()

                                         ));
                         ?>
                    </div><!-- conainer -->
                </div><!--menu-->
            </div><!--banner-->
        </div>
        <!-- header-->
    </div>
    <!-- main header -->


    