<?php require_once('admin/database.php') ?>
<!doctype html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cinema Production</title>
    <link rel="icon" href="assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="assets/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu  home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php"> <img src="assets/img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=about">about</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=services">services</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownpro"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        portfolio
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownpro">
                                        <a class="dropdown-item" href="index.php?halaman=portfolio">portfolio</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="index.php?halaman=blog"> blog</a>
                                        <a class="dropdown-item" href="index.php?halaman=single_blog">Single blog</a>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=contact">contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown cart">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-bag"></i>
                            </a>
                            <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="single_product">
    
                                    </div>
                                </div> -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <?php 
    
    if (isset($_GET['halaman'])) 
    {
        if ($_GET['halaman'] == "about") 
        {
            include 'about.php';
        }
        elseif ($_GET['halaman'] == "services") 
        {
            include 'services.php';
        }
        elseif ($_GET['halaman'] == "portfolio") 
        {
            include 'portfolio.php';
        }
        elseif ($_GET['halaman'] == "portfolio_details") 
        {
            include 'portfolio_details.php';
        }
        elseif ($_GET['halaman'] == "blog") 
        {
            include 'blog.php';
        }
        elseif ($_GET['halaman'] == "single_blog") 
        {
            include 'single_blog.php';
        }
        elseif ($_GET['halaman'] == "contact") 
        {
            include 'contact.php';
        }
    }
    else
    {
        include 'home.php';
    }

    ?>

    <!--::footer_part start::-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="single-footer-widget">
                        <h4>Our Service</h4>
                        <ul>
                            <li><a href="#">Weeding Photography</a></li>
                            <li><a href="#">Dokumentasi Acara</a></li>
                            <li><a href="#">Nature Photography</a></li>
                            <li><a href="#">Lanscape Photography</a></li>
                            <li><a href="#">Potrait Photography</a></li>
                            <li><a href="#">PhotoStudio</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="single-footer-widget footer_icon">
                        <h4>Info Kontak</h4>
                        <p>Jl. Perintis Kemerdekaan Km 6</p>
                        <ul>
                            <li><a href="#"><i class="ti-mobile"></i>08114452400</a></li>
                            <li><a href="#"><i class="ti-email"></i>CinemaProduction19@Gmail.com</a></li>
                            <li><a href="#"><i class="ti-world"></i> CinemaProduction.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="single-footer-widget footer_3">
                        <h4>Instagram</h4>
                        <div class="footer_img">
                            <div class="single_footer_img">
                                <img src="assets/img/footer_img/footer_img_1.png" alt="">
                                <i class="ti-instagram"></i>
                            </div>
                            <div class="single_footer_img">
                                <img src="assets/img/footer_img/footer_img_2.png" alt="">
                                <i class="ti-instagram"></i>
                            </div>
                            <div class="single_footer_img">
                                <img src="assets/img/footer_img/footer_img_3.png" alt="">
                                <i class="ti-instagram"></i>
                            </div>
                            <div class="single_footer_img">
                                <img src="assets/img/footer_img/footer_img_4.png" alt="">
                                <i class="ti-instagram"></i>
                            </div>
                            <div class="single_footer_img">
                                <img src="assets/img/footer_img/footer_img_5.png" alt="">
                                <i class="ti-instagram"></i>
                            </div>
                            <div class="single_footer_img">
                                <img src="assets/img/footer_img/footer_img_6.png" alt="">
                                <i class="ti-instagram"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="single-footer-widget footer_2">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest trends see heaven so said place fruit.
                        </p>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                    required="" type="email">
                                <button class="btn btn-default text-uppercase"><i class="ti-angle-right"></i></button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                        type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                        <div class="social_icon">
                            <a href="#"> <i class="ti-facebook"></i> </a>
                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="#"> <i class="ti-instagram"></i> </a>
                            <a href="#"> <i class="ti-skype"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Yusuf Iskandarsyah</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="assets/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="assets/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="assets/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="assets/js/jquery.filterizr.min.js"></script>
    <!-- particles js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/contact.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.form.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/mail-script.js"></script>
    <!-- custom js -->
    <script src="assets/js/custom.js"></script>
</body>

</html>