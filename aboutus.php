<?php
 session_start();
if(isset($_SESSION['uname']))
{
$abc=$_SESSION['uname'];
}                      
 ?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>About Us</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <h1 style="color:#228B22;"><center><u><b>One Stop Shop For Engineer'S</b></u></center></h1>
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

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
                                    <li><a href="#">Book Details</a>
                                        <div class="megamenu">
                                            <ul class="dropdown">                                                
                                                <li><a href="book.php">Computer Eng.</a></li>                            
                                                <li><a href="mech.php">Mechanical Eng.</a></li>
                                                <li><a href="#">Electronics Eng.</a></li>
                                                <li><a href="#">Chemical Eng.</a></li>
                                                <li><a href="#">Civil Eng.</a></li>
                                            </ul>                                                                                       
                                        </div>
                                    </li>
                                    
                                    <li><a href="aboutus.php">About Us</a></li>                                  
                                    <li><a href="contact1.php">Contact Us</a></li>
                                     
                                      <?php
                            		if(isset($_SESSION['uname']))
                            		{
                            		echo '<li> <b><a href="view.php">view cart</a></b></li>';
                                    echo '<li><a href="Logout.php">Logout</a></li>';
                                	}?>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                            	<?php
                            		if(isset($_SESSION['uname']))
                            		{
                               		echo "<B>   welcome $abc </B>";
                               		}
                               		else
                               		{
                                echo '<a href="login1.php"></i> <span>Login / Sign Up</span></a>';
                                	}
                                	?>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>About Us</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span>The Books</span>
                        <h3>Teachers of your life</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <p>We provide books at a cost which is affordable to a student and has the optimal use by reselling those books.
                    You will only need to purchase the book for the duration of the time he wants.</p>
                </div>
                <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <p>This system will save your money and time without the need to go to shops and search for book seating at 
                    your home get your required books.Our customer satisfaction service is athe the best so I would request you to purchase books
                    and take the benefit from purchasing books from our store.</p>
                </div>
            </div>
            
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    
    <!-- ##### Footer Area Start ##### -->
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <div class="widget-title">
                                <h6>Developers</h6>
                            </div>
                            </div>
                            <p>Adit Patel (16IT666)</p>
                            <p>Yash Sohagia (16IT470)</p>
                            <p>Smit Kakadiya (16IT474)</p>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                
                            </div>
                            <nav>
                                <ul class="useful-links">
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Contact</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-placeholder"></i>
                                <p>Information Technology Department, BVM Engineering College, Vallabh Vidhyanagar, Anand</p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p>Main: 96015-51022 <br>Office: 98982-42240 </p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-contract"></i>
                                <p>bookrentalsystem@bvmengineering.ac.in</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

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