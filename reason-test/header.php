<!doctype html>
<html lang="en">
    <head>
        <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
        <?php wp_head(); ?>
    </head>
    <body>   
        <header>
            <nav class="border-b navbar-expand-lg bg-white relative flex items-center w-full">
                <div class="container w-full flex justify-between items-stretch">
                    <a class="border-l border-r p-2" href="">Search</a>
                    <ul class="flex font-bold border-l">
                        <li class=""><a class="p-2 inline-block" href="#">Learn</a></li>
                        <li><a class="p-2 bg-brand-red text-white inline-block" href="#">Donate</a></li>
                    </ul>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg shadow-md py-2 bg-white relative flex items-center w-full justify-between">
                <div class="container w-full flex flex-wrap items-center justify-between">
                    <div class="navbar-collapse grow items-center flex justify-between" id="navbarSupportedContentY">
                        <a href="/"><img src="<?php bloginfo( 'template_url' ) ?>/images/logo.png" class="w-52" /></a>
                        <?php wp_nav_menu([
                            'menu' => 'header',
                            'container' => false,
                            'menu_class' => 'navbar-nav flex flex-row',
                            'add_li_class'  => 'nav-link block px-2 pb-2 pt-3 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out'                            
                        ]); ?>
                    </div>
                </div>
            </nav>
        </header>