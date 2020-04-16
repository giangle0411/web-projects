<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>FOODSTERY - Culture In Every Box</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
      <!-- ##### Preloader ##### -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="circle-preloader">
        <img src="img/blog-img/Asset_2.png" alt="">
            <div class="foode-preloader">
                
            </div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                

                            <!-- Social Button -->
                            <div class="top-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo Area -->
        <div class="logo-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Nav brand -->
                        <a href="index.php" class="nav-brand"><img src="img/blog-img/Banner_2.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="foode-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar" id="foodeNav">

                        <!-- Nav brand -->
                        <a href="index.php" class="nav-brand"><img src="img/blog-img/Asset_2.png" alt="" height="42" width="42"></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                <li><a href="index.php">Home</a></li>
                                    <li><a href="HowItWorks.php">How We Operate</a></li>
                                    <li><a href="Order.php">Order</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

<!-- Slideshow container -->
<div class="slideshow-container" >

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="img/blog-img/logo.JPG" style="width:100%">
    <div class="text">Caption Hello World</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img2.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img3.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
    <script>
    
    var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
    
    </script>

            <div class="row">
                <div class="col-12">
                    <div class="instagram-slides owl-carousel">
                        <!-- Single Instagram Slide -->
                        <div class="single-instagram-slide">
                            <img src="img/blog-img/insta1.jpg" alt="">
                            <a href="#"><i class="fa fa-instagram"></i>Follow Me</a>
                        </div>

                        <!-- Single Instagram Slide -->
                        <div class="single-instagram-slide">
                            <img src="img/blog-img/insta2.jpg" alt="">
                            <a href="#"><i class="fa fa-instagram"></i>Follow Me</a>
                        </div>

                        <!-- Single Instagram Slide -->
                        <div class="single-instagram-slide">
                            <img src="img/blog-img/insta3.jpg" alt="">
                            <a href="#"><i class="fa fa-instagram"></i>Follow Me</a>
                        </div>

                        <!-- Single Instagram Slide -->
                        <div class="single-instagram-slide">
                            <img src="img/blog-img/insta4.jpg" alt="">
                            <a href="#"><i class="fa fa-instagram"></i>Follow Me</a>
                        </div>

                        <!-- Single Instagram Slide -->
                        <div class="single-instagram-slide">
                            <img src="img/blog-img/insta5.jpg" alt="">
                            <a href="#"><i class="fa fa-instagram"></i>Follow Me</a>
                        </div>

                        <!-- Single Instagram Slide -->
                        <div class="single-instagram-slide">
                            <img src="img/blog-img/insta6.jpg" alt="">
                            <a href="#"><i class="fa fa-instagram"></i>Follow Me</a>
                        </div>
                    </div>
                </div>
            </div>
    
   




    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Footer Curve Line -->
                    <img class="footer-curve" src="img/core-img/foo-curve.png" alt="">
                    <!-- Footer Social Info -->
                    <div class="footer-social-info d-flex align-items-center justify-content-between">
                        <a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                        <a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                        <a href="#"><i class="fa fa-google-plus"></i><span>Google +</span></a>
                        <a href="#"><i class="fa fa-linkedin"></i><span>linkedin</span></a>
                        <a href="#"><i class="fa fa-instagram"></i><span>Instagram</span></a>
                        <a href="#"><i class="fa fa-vimeo"></i><span>Vimeo</span></a>
                        <a href="#"><i class="fa fa-youtube"></i><span>Youtube</span></a>
                    </div>
                    <!-- Footer Curve Line -->
                    <img class="footer-curve" src="img/core-img/foo-curve.png" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="copywrite-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    

    
    
</body>



</html>