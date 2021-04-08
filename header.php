<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
	integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;600;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



<div class="container">
    <div class="row menu">
        <div class="col-md-4">
            <img src="http://localhost/testowa/wp-content/uploads/2021/04/logo-1.png" class="menu-nav-logo">
        </div>
        <div class="col-md-8 menu-nav">
            <a href="#" class="menu-nav-first">About Me</a>
            <a href="#">Services</a>
            <a href="#">Portfolio</a>
            <a href="#">Testimonials</a>
            <a href="#">Blog</a>
            <a href="#">Contact Us</a>
            <a href="#" class="menu-nav-a-last">Hire Me!</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-5 header-container-opis col-6">
            <h6>Hello, I am</h6>
            <h2>Mr. John Weary</h2>
            <p>A Professional Web Developer and UI/UX Designer.</p>
            <div class="header-opis-links">
            <a href="#" class="header-opis-link-one">Download CV</a>
            <a href="#" class="header-opis-link-two">My Work</a>
        </div>
        </div>
        <div class="col-md-7 header-container-img col-6">
            <img src="http://localhost/testowa/wp-content/uploads/2021/04/gosc.png">
        </div>
    </div>
</div>
<div class="container">
    <div class="row section-top-skills">
        <div class="col-md-6 col-6">
            <img src="http://localhost/testowa/wp-content/uploads/2021/04/praca.png" class="section-top-skills-img">
        </div>
        <div class="col-md-6 section-skills-right col-6">
            <h5>Read About My Life</h5>
            <h5>Struggle Story!</h5>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem  totam rem aperiam, 
            eaque ipsa quae ab illo inventore veritatis et is the quasi architecto beatae vitae dicta sunt explicabo.</p>

            <div class="container-na-skills-bar">
                <ul>
                    <li class="wp">Wordpress 100%</li>
                    <li class="html">HTML 75%</li>
                    <li class="php">PHP 85%</li>
                    <li class="css">CSS 95%</li>
                </ul>
            </div>
            <a href="#" class="header-opis-link-one section-skills-right-first-a">Hire me</a>
            <a href="#" class="header-opis-link-two">About Me</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 section-center-top">
            <img src="http://localhost/testowa/wp-content/uploads/2021/04/linia.png" class="section-center-top-img">
            <h5 class="section-center-top-title">Our Services</h5>
            <p class="section-center-top-opis">Sed ut perspiciatis unde omnis iste natus error sit voluptatem  totam rem aperiam, 
            eaque ipsa quae ab illo inventore veritatis et is the quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row center-content-skls-contener">
        <div class="col-md-3 center-content-skills center-content-skills-first col-6">
            <div class="center-content-skills-img-container">
            <i class="fab fa-wordpress"></i>
            </div>
            <p>Wordpress</p>
            <i class="fas fa-long-arrow-alt-right arrow-first"></i>
        </div>
        <div class="col-md-3 center-content-skills col-6">
            <div class="center-content-skills-img-container">
            <img src="http://localhost/testowa/wp-content/uploads/2021/04/logo-programowania.png">
            </div>
            <p>HTML</p>
            <i class="fas fa-long-arrow-alt-right"></i>
        </div>
        <div class="col-md-3 center-content-skills col-6">
        <div class="center-content-skills-img-container">
            <img src="http://localhost/testowa/wp-content/uploads/2021/04/logo-programowania-na-kompie.png">
        </div>
            <p>Web Developement</p>
            <i class="fas fa-long-arrow-alt-right"></i>
        </div>
    </div>
</div>
<div class="container">
    <div class="row center-content-skls-contener">
        <div class="col-md-3 center-content-skills col-6">
            <div class="center-content-skills-img-container">
            <img src="http://localhost/testowa/wp-content/uploads/2021/04/klamry.png">
            </div>
            <p>CSS</p>
            <i class="fas fa-long-arrow-alt-right"></i>
        </div>
        <div class="col-md-3 center-content-skills col-6">
            <div class="center-content-skills-img-container">
            <img src="http://localhost/testowa/wp-content/uploads/2021/04/logo-programowania.png">
            </div>
            <p>PHP</p>
            <i class="fas fa-long-arrow-alt-right"></i>
        </div>
        <div class="col-md-3 center-content-skills col-6">
            <div class="center-content-skills-img-container">
            <img src="http://localhost/testowa/wp-content/uploads/2021/04/ciul-wie.png">
            </div>
            <p>Problem Solving</p>
            <i class="fas fa-long-arrow-alt-right"></i>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 center-content-skills-view-all">
            <a href="#" class="center-content-skill-a">View All</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row content-stats-container">
        <div class="col-md-3 content-stats">
            <h5>50+</h5>
            <p>Clients</p>
        </div>
        <div class="col-md-3 content-stats content-stats-first">
            <h5>68</h5>
            <p>Projects</p>
        </div>
        <div class="col-md-3 content-stats">
            <h5>30</h5>
            <p>Awards</p>
        </div>
        <div class="col-md-3 content-stats">
            <h5>06</h5>
            <p>Years Expr.</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 section-center-top col-12">
            <img src="http://localhost/testowa/wp-content/uploads/2021/04/linia.png" class="section-center-top-img">
            <h5 class="section-center-top-title">Our Portfolio</h5>
            <p class="section-center-top-opis">Sed ut perspiciatis unde omnis iste natus error sit voluptatem  totam rem aperiam, 
            eaque ipsa quae ab illo inventore veritatis et is the quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 portfolio-wybor">
            <p class="portfolio-wybor-p-first">ALL</p>
            <p>Web developer</p>
            <p>HTML</p>
            <p>UI/UX</p>
            <p>Web Design</p>
        </div>
    </div>
</div>

<!-- <div class="burger">
    <i class="fas fa-bars show"></i>
    <i class="fas fa-times"></i>
</div>
<aside>
    <nav class="burger-nav-aside">

        <a href="#" class="menu-nav-first">About Me</a>
        <a href="#">Services</a>
        <a href="#">Portfolio</a>
        <a href="#">Testimonials</a>
        <a href="#">Blog</a>
        <a href="#">Contact Us</a>
        <a href="#">Hire Me!</a>

    </nav>
</aside>  -->


<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="http://localhost/testowa/wp-content/uploads/2021/04/ss1.png" class="portfolio-gallery-img">
        </div>
        <div class="col-md-4">
            <img src="http://localhost/testowa/wp-content/uploads/2021/04/ss2.png" class="portfolio-gallery-img">
        </div>
        <div class="col-md-4">
            <img src="http://localhost/testowa/wp-content/uploads/2021/04/ss3.png" class="portfolio-gallery-img">
        </div>

        <div class="col-md-4">
            <img src="http://localhost/testowa/wp-content/uploads/2021/04/ss4.png" class="portfolio-gallery-img">
        </div>
        <div class="col-md-4 portfolio-gallery-img-5">
            <div>
            <h5>Application Development</h5>
            <p>HTML, CSS, jQuery</p>
            </div>
            <p>Lorem ipsum dolor sit amet,Stet clita kasd lorem 
            ipsum dolor sit amet. sed diam  eirmod tempor dolore.</p>
        </div>
        <div class="col-md-4">
            <img src="http://localhost/testowa/wp-content/uploads/2021/04/ss6.png" class="portfolio-gallery-img">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 portfolio-gallery-a-viewAll">
            <a href="#">View All</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 section-center-top">
            <img src="http://localhost/testowa/wp-content/uploads/2021/04/linia.png" class="section-center-top-img content-slider-opis">
            <h5 class="section-center-top-title">Testimonials</h5>
            <p class="section-center-top-opis">Sed ut perspiciatis unde omnis iste natus error sit voluptatem  totam rem aperiam, 
            eaque ipsa quae ab illo inventore veritatis et is the quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row slider-1">
        <div class="col-md-12 content-slider">
            <img src="http://localhost/testowa/wp-content/uploads/2021/04/gosc-twarz2.png" class="content-slider-img-1">
            <div>
                <h5 class="content-slider-name">John Doe</h5>
                <p class="content-slider-firm">CEO Abc Company</p>
            </div>
            <p class="content-slider-opis-2">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati 
                cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
        </div>

        <div class="col-md-12 content-slider">
            <img src="http://localhost/testowa/wp-content/uploads/2021/04/gosc-twarz.png" class="content-slider-img-1">
            <div>
                <h5 class="content-slider-name">John Doe</h5>
                <p class="content-slider-firm">CEO Abc Company</p>
            </div>
            <p class="content-slider-opis-2">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati 
                cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
        </div>

        <div class="col-md-12 content-slider">
            <img src="http://localhost/testowa/wp-content/uploads/2021/04/gosc-twarz2.png" class="content-slider-img-1">
            <div>
                <h5 class="content-slider-name">John Doe</h5>
                <p class="content-slider-firm">CEO Abc Company</p>
            </div>
            <p class="content-slider-opis-2">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati 
                cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 bgi-image">
            <p>Have any Project in Mind?</p>
            <h4>I'm Available for Freelancing</h4>
            <a href="#">Hire Me!</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 section-center-top">
            <img src="http://localhost/testowa/wp-content/uploads/2021/04/linia.png" class="section-center-top-img content-slider-opis">
            <h5 class="section-center-top-title">Latest Blog</h5>
            <p class="section-center-top-opis">Sed ut perspiciatis unde omnis iste natus error sit voluptatem  totam rem aperiam, 
            eaque ipsa quae ab illo inventore veritatis et is the quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 ftr-articule">
            <img src="http://localhost/testowa/wp-content/uploads/2021/04/ftr1.png">
            <h6>26th October 2019</h6>
            <h5>I Used The Web For A Day On A
                50 MB Budget</h5>
            <p>Learn More</p>
        </div>
        <div class="col-md-4 ftr-articule">
            <img src="http://localhost/testowa/wp-content/uploads/2021/04/ftr2.png">
            <h6>26th October 2019</h6>
            <h5>I Used The Web For A Day On A
                50 MB Budget</h5>
            <p>Learn More</p>
        </div>
        <div class="col-md-4 ftr-articule">
            <img src="http://localhost/testowa/wp-content/uploads/2021/04/ftr3.png">
            <h6>26th October 2019</h6>
            <h5>I Used The Web For A Day On A
                50 MB Budget</h5>
            <p>Learn More</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 portfolio-gallery-a-viewAll">
            <a href="#">View All</a>
        </div>
    </div>
</div>


<div class="container">
    <div class="row footer">
        <div class="col-md-5 footer-right col-5">
            <h4>Contact Us</h4>
            <p>Let's make something new, different and more meaningful
                or make thing more visual or conceptual?</p>
            <div class="footer-right-contact">
                <img src="http://localhost/testowa/wp-content/uploads/2021/04/phone.png">
                <div>
                <h6>Call Me</h6>
                <p>+123 534 6544</p>
                </div>
            </div>
            <div class="footer-right-contact">
                <img src="http://localhost/testowa/wp-content/uploads/2021/04/list.png">
                <div>
                <h6>Email</h6>
                <p>info@coder.com</p>
                </div>
            </div>
            <div class="footer-right-contact">
                <img src="http://localhost/testowa/wp-content/uploads/2021/04/location-3.png">
                <div>
                <h6>Address</h6>
                <p>27 Division St, New York</p>
                </div>
            </div>
            <p class="footer-right-find-me">Find Me on</p>
        </div>
        <div class="col-md-6 footer-left col-6">
            <h4>Drop a Line</h4>
            <!-- <input type="text" placeholder="Name">
            <input type="text" placeholder="Phone">
            <input type="text" placeholder="Message" class="footer-left-input-last">
            <button class="center-content-skill-a footer-left-btn">Submit</button>

            <p class="footer-left-copyright">Copyright ©2019Coder. All Rights Reserved.</p>
        </div>
        <div class="col-md-3 footer-left-right col-3">
            <input type="text" placeholder="Email" class="footer-left-right-input-last">
            <input type="text" placeholder="Budget" class="footer-left-right-input-last-2">
        </div> -->
		<?php echo do_shortcode('[contact-form-7 id="73" title="Formularz 1"]'); ?>
    </div>
</div>

<div class="burger">
    <i class="fas fa-bars show"></i>
    <i class="fas fa-times"></i>
</div>
<aside>
    <nav class="burger-nav-aside">

        <a href="#" class="menu-nav-first">About Me</a>
        <a href="#">Services</a>
        <a href="#">Portfolio</a>
        <a href="#">Testimonials</a>
        <a href="#">Blog</a>
        <a href="#">Contact Us</a>
        <a href="#">Hire Me!</a>

    </nav>
</aside>
