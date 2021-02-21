<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
       <title>Elohay Empire Ltd</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

    <style>
a:hover {
  background-color: grey;
}
</style>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
       <div class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="email-address">
                   <a href="mailto:info@elohayempire.org">info@elohayempire.org</a>
                </div>
                <div class="phone-number d-flex">
                    <div class="icon">
                        <img src="img/icons/phone-call.png" alt="">
                    </div>
                    <div class="number">
                        <a href="tel:+254 720 628 137">+254 720 628 137</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="https://elohayempire.org/"><img src="img/core-img/logo1.png" alt=""></a>

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
                                <li><a href="https://elohayempire.org/">Home</a></li>
                                <li><a href="/about-us">About Us</a></li>
                                 <li><a href="#">Services</a>
                                    <div class="megamenu">
                                         <ul class="single-mega cn-col-4">
                                            <li class="title">CONSTRUCTIONS</li>
                                            <li><a href="/residential">Residential Houses</a></li>
                                            <li><a href="/flats">Rental Flats</a></li>
                                            <li><a href="/roads">Roads</a></li>
                                            <li><a href="/school">School & Churches</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">SUPPLIES</li>
                                            <li><a href="/office">Office Stationaries</a></li>
                                            <li><a href="/construction">Constraction Materials</a></li>
                                            <li><a href="/promotional">Promotional Items</a></li>
                                            <li><a href="/schoolitems">School Items</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">GRAPHIC DESIGN AND PRINTING</li>
                                            <li><a href="/promotional">Promotional Item Printing</a></li>
                                            <li><a href="/logo">Logo Design</a></li>
                                            <li><a href="/promotional">Company Branding</a></li>
                                            <li><a href="/promotional">General printing</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Gift & Community Services</li>
                                            <li><a href="/food">Food Distrubution</a></li>
                                            <li><a href="/food">Ophanage Visiting</a></li>
                                            <li><a href="/promotional">Branded T shirts</a></li>
                                            <li><a href="/promotional">Branded Gifts</a></li>

                                        </ul>
                                    </div>
                                </li>
                                
                                <li><a href="/expertise">Our Expertise</a></li>
                                <li><a href="/blog">Blog</a></li>
                                 <li><a href="https://book.elohayempire.org/">E-Book</a></li>

                               
                                <li><a href="/contact">Contact</a></li>
                            </ul>

                            <!-- Search Form -->
                            <div class="south-search-form">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search Anything ...">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Search Button -->
                            <a href="#" class="searchbtn"><i class="fa" aria-hidden="true"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/bg3.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Contact Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

     <!-- ##### Featured Properties Area Start ##### -->
    <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>Messaging</h2>
                        <p>Elohay Empire Limited</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <p> <?php 
	if(!isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$telephone = $_POST['telephone'];
		$message = $_POST['message'];
        $subj = $_POST['subject']; 

		$to = "info@elohayempire.org";
		$subject ="Email from Website. Subjects is: ".$subj;
		$msg ="Name: ".$name." , "."Telephone: ".$telephone." , "." Subject: ".$subject."wrote the following: ".$message;
		$headers ="From: ".$email;
         if(mail($to,$subject,$msg,$headers)){
         	
	      echo "<b>Message Sent. Thank You $name for your message.<b>";
}

else {
	echo "yolo";
	
}

       


	}
	else
	{
		echo "try again";
	}

 ?></p>

                
               
                 
               
            </div>
        </div>
    </section>
    <!-- ##### Featured Properties Area End ##### -->


 
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay" style="background-image: url(img/bg-img/cta.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>About Us</h6>
                            </div>

                            <img src="img/bg-img/footer.jpg" alt="">
                            <div class="footer-logo my-4">
                                <img src="img/core-img/logo1.png" alt="">
                            </div>
                            <p>Elohay Empire Ltd is a registered business entity engaged in contracting and supply of a variety of....<a href="/about-us">Read More</a>
                            </p>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Hours</h6>
                            </div>
                            <!-- Office Hours -->
                            <div class="weekly-office-hours">
                                <ul>
                                    <li class="d-flex align-items-center justify-content-between"><span>Monday - Friday</span> <span>08 AM - 5 PM</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Saturday</span> <span>09 AM - 14 PM</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Sunday</span> <span>Closed</span></li>
                                </ul>
                            </div>
                            <!-- Address --> 
                            <div class="address">
                                <h6><img src="img/icons/phone-call.png" alt="">+254721378781 I +254737995755
</h6>
                                <h6><img src="img/icons/envelope.png" alt="">info@elohayempire.org</h6>
                                <h6><img src="img/icons/location.png" alt=""> AGIP HOUSE 2ND FLOOR,<br> ROOM 218.<br>P. O. BOX 66038 00800, NAIROBI, KENYA</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Useful Links</h6>
                            </div>
                            <!-- Nav -->
                            <ul class="useful-links-nav d-flex align-items-center">
                                <li><a href="https://elohayempire.org/">Home</a></li>
                                <li><a href="/about-us">About us</a></li>
                                <li><a href="/promotional">Gifts</a></li>
                                <li><a href="/expertise">Our Expertise</a></li>
                                <li><a href="/food">Community Services</a></li>
                                <li><a href="/schoolitems">Supplies</a></li>
                                <li><a href="/roads">Roads</a></li>
                                <li><a href="/construction">House Construction</a></li>
                                <li><a href="/contact">Contact</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Featured Items</h6>
                            </div>
                            <!-- Featured Properties Slides -->
                            <div class="featured-properties-slides owl-carousel">
                                <!-- Single Slide -->
                                <div class="single-featured-properties-slide">
                                    <a href="#"><img src="img/pic/ee-04.png" alt=""></a>
                                </div>
                                <!-- Single Slide -->
                                <div class="single-featured-properties-slide">
                                    <a href="#"><img src="img/pic/ee-40.png" alt=""></a>
                                </div>
                                <!-- Single Slide -->
                                <div class="single-featured-properties-slide">
                                    <a href="#"><img src="img/pic/ee-26.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Copywrite Text -->
        <div class="copywrite-text d-flex align-items-center justify-content-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |This Site is Developed  <i  aria-hidden="true"></i> by <a href="https://softwaretechn.co.ke" target="_blank">Software Technology Kenya</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>