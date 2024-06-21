<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta name="description" content="Suha - Multipurpose Ecommerce Mobile HTML Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#100DD1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above tags *must* come first in the head, any other head content must come *after* these tags-->
    <!-- Title-->
    <title>Suha - Multipurpose Ecommerce Mobile HTML Template</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <!-- Favicon-->
    <link rel="icon" href="img/icons/icon-72x72.png">
    <!-- Apple Touch Icon-->
    <link rel="apple-touch-icon" href="img/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="img/icons/icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/icons/icon-180x180.png">
    <!-- CSS Libraries-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/lineicons.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Stylesheet-->
    <link rel="stylesheet" href="style.css">
    <!-- Web App Manifest-->
    <link rel="manifest" href="manifest.json">
  </head>
  <body>
    <!-- Preloader-->
    <div class="preloader" id="preloader">
      <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only">Loading...</div>
      </div>
    </div>
    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Back Button-->
        <div class="back-button"><a href="home.html">
            <svg class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
            </svg></a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">Blog Grid</h6>
        </div>
        <!-- Navbar Toggler-->
        <div class="suha-navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas" aria-controls="suhaOffcanvas"><span></span><span></span><span></span></div>
      </div>
    </div>
    <div class="offcanvas offcanvas-start suha-offcanvas-wrap" tabindex="-1" id="suhaOffcanvas" aria-labelledby="suhaOffcanvasLabel">
      <!-- Close button-->
      <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      <!-- Offcanvas body-->
      <div class="offcanvas-body">
        <!-- Sidenav Profile-->
        <div class="sidenav-profile">
          <div class="user-profile"><img src="img/bg-img/9.jpg" alt=""></div>
          <div class="user-info">
            <h6 class="user-name mb-1">Suha Sarah</h6>
            <p class="available-balance">Total balance $<span class="counter">583.67</span></p>
          </div>
        </div>
        <!-- Sidenav Nav-->
        <ul class="sidenav-nav ps-0">
          <li><a href="profile.html"><i class="lni lni-user"></i>My Profile</a></li>
          <li><a href="notifications.html"><i class="lni lni-alarm lni-tada-effect"></i>Notifications<span class="ms-3 badge badge-warning">3</span></a></li>
          <li class="suha-dropdown-menu"><a href="#"><i class="lni lni-cart"></i>Shop Pages</a>
            <ul>
              <li><a href="shop-grid.html">- Shop Grid</a></li>
              <li><a href="shop-list.html">- Shop List</a></li>
              <li><a href="single-product.html">- Product Details</a></li>
              <li><a href="featured-products.html">- Featured Products</a></li>
              <li><a href="flash-sale.html">- Flash Sale</a></li>
            </ul>
          </li>
          <li><a href="pages.html"><i class="lni lni-empty-file"></i>All Pages</a></li>
          <li class="suha-dropdown-menu"><a href="wishlist-grid.html"><i class="lni lni-heart"></i>My Wishlist</a>
            <ul>
              <li><a href="wishlist-grid.html">- Wishlist Grid</a></li>
              <li><a href="wishlist-list.html">- Wishlist List</a></li>
            </ul>
          </li>
          <li><a href="settings.html"><i class="lni lni-cog"></i>Settings</a></li>
          <li><a href="intro.html"><i class="lni lni-power-switch"></i>Sign Out</a></li>
        </ul>
      </div>
    </div>
    <div class="page-content-wrapper">
      <!-- Blog Wrapper-->
      <div class="blog-wrapper py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6>Blog Grid</h6>
            <!-- Layout Options-->
            <div class="layout-options"><a class="active" href="blog-grid.html"><i class="lni lni-grid-alt"></i></a><a href="blog-list.html"><i class="lni lni-radio-button"></i></a></div>
          </div>
          <div class="row g-3">
            <!-- Single Blog Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card blog-card">
                <!-- Post Image-->
                <div class="post-img"><img src="img/bg-img/18.jpg" alt=""></div>
                <!-- Post Bookmark--><a class="post-bookmark" href="#"><i class="lni lni-bookmark"></i></a>
                <!-- Post Content-->
                <div class="post-content">
                  <div class="bg-shapes">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                    <div class="circle4"></div>
                  </div>
                  <!-- Post Catagory--><a class="post-catagory d-block" href="#">Review</a>
                  <!-- Post Title--><a class="post-title d-block" href="blog-details.html">The 5 best reviews in Suha</a>
                  <!-- Post Meta-->
                  <div class="post-meta d-flex align-items-center justify-content-between flex-wrap mb-3"><a href="#"><i class="lni lni-user"></i>Yasin</a><span><i class="lni lni-timer"></i>2 min</span></div>
                  <!-- Read More Button--><a class="btn btn-primary btn-sm read-more-btn" href="blog-details.html">Read More</a>
                </div>
              </div>
            </div>
            <!-- Single Blog Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card blog-card">
                <!-- Post Image-->
                <div class="post-img"><img src="img/bg-img/19.jpg" alt=""></div>
                <!-- Post Bookmark--><a class="post-bookmark" href="#"><i class="lni lni-bookmark"></i></a>
                <!-- Post Content-->
                <div class="post-content">
                  <div class="bg-shapes">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                    <div class="circle4"></div>
                  </div>
                  <!-- Post Catagory--><a class="post-catagory d-block" href="#">Shopping</a>
                  <!-- Post Title--><a class="post-title d-block" href="blog-details.html">The best deals of this week</a>
                  <!-- Post Meta-->
                  <div class="post-meta d-flex align-items-center justify-content-between flex-wrap mb-3"><a href="#"><i class="lni lni-user"></i>Admin</a><span><i class="lni lni-timer"></i>8 min</span></div>
                  <!-- Read More Button--><a class="btn btn-success btn-sm read-more-btn" href="blog-details.html">Read for $0.7</a>
                </div>
              </div>
            </div>
            <!-- Single Blog Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card blog-card">
                <!-- Post Image-->
                <div class="post-img"><img src="img/bg-img/20.jpg" alt=""></div>
                <!-- Post Bookmark--><a class="post-bookmark" href="#"><i class="lni lni-bookmark"></i></a>
                <!-- Post Content-->
                <div class="post-content">
                  <div class="bg-shapes">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                    <div class="circle4"></div>
                  </div>
                  <!-- Post Catagory--><a class="post-catagory d-block" href="#">Tips</a>
                  <!-- Post Title--><a class="post-title d-block" href="blog-details.html">5 tips for buy original products</a>
                  <!-- Post Meta-->
                  <div class="post-meta d-flex align-items-center justify-content-between flex-wrap mb-3"><a href="#"><i class="lni lni-user"></i>Niloy</a><span><i class="lni lni-timer"></i>5 min</span></div>
                  <!-- Read More Button--><a class="btn btn-success btn-sm read-more-btn" href="blog-details.html">Read for $0.9</a>
                </div>
              </div>
            </div>
            <!-- Single Blog Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card blog-card">
                <!-- Post Image-->
                <div class="post-img"><img src="img/bg-img/21.jpg" alt=""></div>
                <!-- Post Bookmark--><a class="post-bookmark" href="#"><i class="lni lni-bookmark"></i></a>
                <!-- Post Content-->
                <div class="post-content">
                  <div class="bg-shapes">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                    <div class="circle4"></div>
                  </div>
                  <!-- Post Catagory--><a class="post-catagory d-block" href="#">Offer</a>
                  <!-- Post Title--><a class="post-title d-block" href="blog-details.html">Mega Deals: Up to 75% discount</a>
                  <!-- Post Meta-->
                  <div class="post-meta d-flex align-items-center justify-content-between flex-wrap mb-3"><a href="#"><i class="lni lni-user"></i>Dolly</a><span><i class="lni lni-timer"></i>1 min</span></div>
                  <!-- Read More Button--><a class="btn btn-primary btn-sm read-more-btn" href="blog-details.html">Read More</a>
                </div>
              </div>
            </div>
            <!-- Single Blog Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card blog-card">
                <!-- Post Image-->
                <div class="post-img"><img src="img/bg-img/22.jpg" alt=""></div>
                <!-- Post Bookmark--><a class="post-bookmark" href="#"><i class="lni lni-bookmark"></i></a>
                <!-- Post Content-->
                <div class="post-content">
                  <div class="bg-shapes">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                    <div class="circle4"></div>
                  </div>
                  <!-- Post Catagory--><a class="post-catagory d-block" href="#">Trends</a>
                  <!-- Post Title--><a class="post-title d-block" href="blog-details.html">Bridal shopping is the latest trends of this month</a>
                  <!-- Post Meta-->
                  <div class="post-meta d-flex align-items-center justify-content-between flex-wrap mb-3"><a href="#"><i class="lni lni-user"></i>Sarah</a><span><i class="lni lni-timer"></i>9 min</span></div>
                  <!-- Read More Button--><a class="btn btn-primary btn-sm read-more-btn" href="blog-details.html">Read More</a>
                </div>
              </div>
            </div>
            <!-- Single Blog Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card blog-card">
                <!-- Post Image-->
                <div class="post-img"><img src="img/bg-img/23.jpg" alt=""></div>
                <!-- Post Bookmark--><a class="post-bookmark" href="#"><i class="lni lni-bookmark"></i></a>
                <!-- Post Content-->
                <div class="post-content">
                  <div class="bg-shapes">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                    <div class="circle4"></div>
                  </div>
                  <!-- Post Catagory--><a class="post-catagory d-block" href="#">News</a>
                  <!-- Post Title--><a class="post-title d-block" href="blog-details.html">How to easily buy a product</a>
                  <!-- Post Meta-->
                  <div class="post-meta d-flex align-items-center justify-content-between flex-wrap mb-3"><a href="#"><i class="lni lni-user"></i>Suha</a><span><i class="lni lni-timer"></i>6 min</span></div>
                  <!-- Read More Button--><a class="btn btn-success btn-sm read-more-btn" href="blog-details.html">Read for $0.2</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="section-heading pt-3">
            <h6>Read by category</h6>
          </div>
          <div class="row g-3">
            <!-- Single Blog Catagory-->
            <div class="col-6 col-sm-4">
              <div class="card blog-catagory-card">
                <div class="card-body p-4"><a href="#"><i class="lni lni-quotation"></i><span class="d-block">Review</span></a></div>
              </div>
            </div>
            <!-- Single Blog Catagory-->
            <div class="col-6 col-sm-4">
              <div class="card blog-catagory-card">
                <div class="card-body p-4"><a href="#"><i class="lni lni-shopping-basket"></i><span class="d-block">Shopping</span></a></div>
              </div>
            </div>
            <!-- Single Blog Catagory-->
            <div class="col-6 col-sm-4">
              <div class="card blog-catagory-card">
                <div class="card-body p-4"><a href="#"><i class="lni lni-bulb"></i><span class="d-block">Tips</span></a></div>
              </div>
            </div>
            <!-- Single Blog Catagory-->
            <div class="col-6 col-sm-4">
              <div class="card blog-catagory-card">
                <div class="card-body p-4"><a href="#"><i class="lni lni-offer"></i><span class="d-block">Offer</span></a></div>
              </div>
            </div>
            <!-- Single Blog Catagory-->
            <div class="col-6 col-sm-4">
              <div class="card blog-catagory-card">
                <div class="card-body p-4"><a href="#"><i class="lni lni-bolt-alt"></i><span class="d-block">Trends</span></a></div>
              </div>
            </div>
            <!-- Single Blog Catagory-->
            <div class="col-6 col-sm-4">
              <div class="card blog-catagory-card">
                <div class="card-body p-4"><a href="#"><i class="lni lni-paperclip"></i><span class="d-block">News</span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Footer Nav-->
    <div class="footer-nav-area" id="footerNav">
      <div class="container h-100 px-0">
        <div class="suha-footer-nav h-100">
          <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
            <li class="active"><a href="home.html"><i class="lni lni-home"></i>Home</a></li>
            <li><a href="message.html"><i class="lni lni-life-ring"></i>Support</a></li>
            <li><a href="cart.html"><i class="lni lni-shopping-basket"></i>Cart</a></li>
            <li><a href="pages.html"><i class="lni lni-heart"></i>Pages</a></li>
            <li><a href="settings.html"><i class="lni lni-cog"></i>Settings</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- All JavaScript Files-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.passwordstrength.js"></script>
    <script src="js/dark-mode-switch.js"></script>
    <script src="js/no-internet.js"></script>
    <script src="js/active.js"></script>
    <script src="js/pwa.js"></script>
  </body>
</html>