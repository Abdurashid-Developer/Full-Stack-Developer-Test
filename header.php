<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="description" content="Car Dealer - The Best Car Dealer Automotive Responsive HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Car Dealer</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
  
 <?php wp_head(); ?>
 
</head>

<body>
    <!--================================= loading -->

    <div id="loading">
        <div id="loading-center">
            <img src="http://cx26419-wordpress.tw1.ru/wp-content/uploads/2020/11/loader5.gif" alt="">
        </div>
    </div>

    <!--================================= loading -->


    <!--================================= header -->

    <header id="header" class="light">
        <div class="menu">
            <!-- menu start -->
            <nav id="menu" class="mega-menu">
                <!-- menu list items container -->
                <section class="menu-list-items">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- menu logo -->
                                <ul class="menu-logo">
                                    <li>
                                       <?php the_custom_logo();  ?>
                                    </li>
                                </ul>
                                <!-- menu links -->
                                 <?php wp_nav_menu( [
	                               'theme_location'  => 'top',
	                               'container'       => false, 
	                               'menu_class'      => 'menu-links', 
	                               'menu_id'         => 'nav',
                                  ] ); ?>
                            </div>
                        </div>
                    </div>
                </section>
            </nav>
            <!-- menu end -->
        </div>
    </header>

    <!--================================= header -->
