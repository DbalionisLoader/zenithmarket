<?php
/**
 * The header for zenith Market theme
 *
 * This is the template that displays all of the <head> section and everything up until <hr>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zenith_market
 */

$my_account_page_id = get_option('woocommerce_myaccount_page_id');
$my_account_url = get_permalink( $my_account_page_id);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Test Store soll</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="style.css" rel="stylesheet" />
  <?php
  wp_head();
  ?>
</head>

<body>
  <header>
    <section class="header-main text-black bg-white">
      <div class="container px-0 pb-0 pt-4 header-top-spacing">
<!-- 
main-header-layout-row grid control the layout of the 3 header sections - logo, search/shopbasket, and navigation bar.
m-0 is used to prevent logo from going outside the container width
-->
        <div class="row m-0 main-header-layout-row">
          <div class="col-xl-12 col-lg-12 p-0 position-static">
            <!-- 
             Row 1 for searchbar and icons, 
             Row 2 for nav links
            -->
            <div class="row m-0 align-self-center justify-content-between text-right">
              <!-- ** SITE LOGO - START  **-->
              <div class="col-5 col-xl-1 col-lg-1 p-0 me-0 me-lg-3 me-xl-0 logo order-first align-self-center align-self-lg-center">
                <a class="navbar-brand" href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/sol2.webp" alt="Soll.uk Automotive Paint Logo" /></a>
              </div>
              <!-- SITE LOGO - END  -->
              <!-- ** SEARCH BAR - START ** -->
              <div class="col-12 col-xl-4 col-lg-4 mr-auto order-last order-lg-2 p-0 mt-3 mb-3 mt-lg-0 mb-lg-0 align-self-lg-center">
                <div class="search-bar ">
                  <!-- Use fibosearch plugin and setting to customize the search bar and results -->
                  <?php
                   echo do_shortcode('[fibosearch]'); 
                  ?>
                </div>
              </div>
              <!-- SEARCH BAR end here  -->
              <!-- Basket icon col  -->
              <div class="col-7 col-lg-4 p-0 basket-icon order-second order-lg-3">
                <nav class="header-basket-section p-0 col-12 d-flex align-items-start justify-content-end float-right text-right" aria-label="My Account">
                  <!-- Individual icons go here  -->
                  <div class="widget-wrap px-0 mx-0">
                    <!-- Account icon  -->
                    <div class="widget-header  px-0 mx-0 ">
                      <a class="icon  px-0 mx-0 " href="<?php echo esc_url($my_account_url); ?>">
                        <i class="bi bi-person-fill px-0 mx-0"></i>
                        <span class="p-0 m-0">Account</span>
                      </a>
                    </div>
                  </div>
                  <!-- BASKET ICON START  -->
                  <div class="widget-wrap">
                    <div class="widget-header">
                      <!-- Woocommerce cart url and count here  -->
                      <?php
                      //$items_count stores the cart product count 
                      $items_count = WC()->cart->get_cart_contents_count();
                      ?>
                      <a class="icon icon-sm" href="<?php echo esc_url(wc_get_cart_url()); ?>">
                        <i class="bi bi-basket-fill"></i>
                        <span class="minicart-quantity">  <?php echo esc_html($items_count); ?> </span>
                        <span>Basket</span>
                      </a>
                    </div>
                  </div>
                  <!-- BASKET ICON END  -->
                  <!-- MOBILE MENU START -->
                  <div class="widget-wrap d-lg-none">
                    <div class="widget-header mobile-menu-header-spacing">
                      <button class="navbar-toggler" data-bs-target="#offcanvasExample" data-bs-toggle="offcanvas" type="button" aria-controls="offcanvasExample" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>
                        <div class="mobile-menu-title">Menu</div>
                      </button>
                    </div>
                    <!-- MOBILE MENU END -->
                  </div>
                </nav>
              </div>
            </div>
            <div class="row main-menu-line mt-lg-3 mx-0 px-0">
              <!-- Off-canvas menu structure -->
              <nav class="navbar navbar-expand-lg col-12">
                <div class="offcanvas offcanvas-start text-bg-light" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" tabindex="-1">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                      Menu
                    </h5>
                    <button class="btn-close" data-bs-dismiss="offcanvas" type="button" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <div class="col-12 px-0 position-static">
                      <div class="justify-content-start" id="mobile_nav">
                        <div class="d-flex flex-column flex-lg-row justify-content-lg-between">       <!--  HEADER MENU GROUP SPACING CONTROL HERE-->
                          <ul class="navbar-nav navbar-light text-white">
                            <li class="nav-item">
                              <a class="nav-link ps-0" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">About Us</a>
                            </li>
                            <!--  Mega menu one - dmenu is custom class -->
                            <!--  megamenu-li - need a applu position static to allow full width mega container to work -->
                            <li class="nav-item dropdown position-static dmenu">
                              <a class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" aria-haspopup="true">
                              PC Systems </a>
                             
                              <!--  magemenu - control the size of the megamenu container and overall container paddings -->
                              <div class="dropdown-menu megamenu sm-menu border-top p-0 m-0" aria-labelledby="navbarDropdown">
                                <div class="row p-0 m-0">
                                  <div class="col-12 col-lg-3 p-0 m-0"> 
                                    <?php
                                    wp_nav_menu(array(
                                      'theme_location' => 'custom-pc', 
                                      'container'      =>  false,
                                      'menu_class' => 'mega-menu-ul-style'
                                    ));
                                    ?>
                                    <?php
                                    wp_nav_menu(array(
                                      'theme_location' => 'next-day-pc', 
                                      'container'      =>  false,
                                      'menu_class' => 'mega-menu-ul-style'
                                    ));
                                    ?>
                                  </div>  
                                  <div class="col-12 col-lg-3">
                                
                                  </div>
                                  <div class="col-12 col-lg-3  p-0 m-0">
                                  <?php
                                  wp_nav_menu(array(
                                    'theme_location' => 'gaming-pc', 
                                    'container'      =>  false,
                                    'menu_class' => 'mega-menu-ul-style'
                                  ));
                                   ?>
                                  </div>
                                  <div class="col-12 col-lg-3"></div>
                               </div>
                              </div>
                            </li>
                            <!--  MEGA MEMU 2 - dmenu, megamenu-li are custom classes -->
                            <li class="nav-item dropdown position-static dmenu">
                              <!--  Standard bootstrap classes for the drop down toggle -->
                              <a class="nav-link dropdown-toggle" id="dropdown01" data-bs-toggle="dropdown" href aria-expanded="false" aria-haspopup="true">Components</a>
                              <!-- Add menu ICON HERE  -->
                              <!-- Custom classes are megamenu, sm-menu  -->
                                <div class="dropdown-menu megamenu sm-menu border-top" aria-labelledby="dropdown01">
                                <!-- Menu menu layout is GRID, 4 colums per row on desktop/ 2 on mobile -->
                                 <div class="row">
                                  <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <!-- Menu menu layout is GRID, 4 colums per row on desktop/ 2 on mobile -->
                                   
                                  </div>
                                 </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown position-static dmenu">
                              <!--  Standard bootstrap classes for the drop down toggle -->
                              <a class="nav-link dropdown-toggle" id="dropdown01" data-bs-toggle="dropdown" href aria-expanded="false" aria-haspopup="true">Monitors</a>
                              <!-- Add menu ICON HERE  -->
                              <!-- Custom classes are megamenu, sm-menu  -->
                                <div class="dropdown-menu megamenu sm-menu border-top" aria-labelledby="dropdown01">
                                <!-- Menu menu layout is GRID, 4 colums per row on desktop/ 2 on mobile -->
                                 <div class="row">
                                  <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <!-- Menu menu layout is GRID, 4 colums per row on desktop/ 2 on mobile -->
                                   
                                  </div>
                                 </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown position-static dmenu">
                              <!--  Standard bootstrap classes for the drop down toggle -->
                              <a class="nav-link dropdown-toggle" id="dropdown01" data-bs-toggle="dropdown" href aria-expanded="false" aria-haspopup="true">Laptops</a>
                              <!-- Add menu ICON HERE  -->
                              <!-- Custom classes are megamenu, sm-menu  -->
                                <div class="dropdown-menu megamenu sm-menu border-top" aria-labelledby="dropdown01">
                                <!-- Menu menu layout is GRID, 4 colums per row on desktop/ 2 on mobile -->
                                 <div class="row">
                                  <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <!-- Menu menu layout is GRID, 4 colums per row on desktop/ 2 on mobile -->
                                   
                                  </div>
                                 </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown position-static dmenu">
                              <!--  Standard bootstrap classes for the drop down toggle -->
                              <a class="nav-link dropdown-toggle" id="dropdown01" data-bs-toggle="dropdown" href aria-expanded="false" aria-haspopup="true">Networking</a>
                              <!-- Add menu ICON HERE  -->
                              <!-- Custom classes are megamenu, sm-menu  -->
                                <div class="dropdown-menu megamenu sm-menu border-top" aria-labelledby="dropdown01">
                                <!-- Menu menu layout is GRID, 4 colums per row on desktop/ 2 on mobile -->
                                 <div class="row">
                                  <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <!-- Menu menu layout is GRID, 4 colums per row on desktop/ 2 on mobile -->
                                   
                                  </div>
                                 </div>
                                </div>
                            </li>
                          </ul>   
                          <div class="right-menu-group ">
                            <nav>
                             <ul class="navbar-nav navbar-light text-white">
                              
                             <li class="nav-item">
                               <a class="nav-link ps-0" href="#">
                                 <span class="nav-paint-tab">Brands</span>
                               </a>
                              </li>
                             <li class="nav-item">
                               <a class="nav-link ps-0" href="#">
                                 <span class="nav-paint-tab">Custom Paint</span>
                               </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link ps-0" href="http://soll2test/product-category/deals/">
                                <span class="nav-deals-tab">Deals</span>
                              </a>
                              </li>
                             </ul>
                            </nav>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ========== Offcanvas BODY ends here ========== -->
                  </div>
                  <!-- ========== Offcanvas WRAP ends here ========== -->
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>
  <hr class="m-0 p-0 border-line" />