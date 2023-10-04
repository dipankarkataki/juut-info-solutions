<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Juut Info System</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/fav.png')}}">
        <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/plugins/fontawesome-5.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/plugins/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/plugins/unicons.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    </head>

    <body class="home-blue home-ten">
        <!-- start header area -->
        <header class="header-two header--sticky">
            <div class="header-top">
                <div class="content">
                    <div class="left-header-top">
                        <p class="top-details">
                            Are you ready to grow up your business? <a href="#">Contact Us <i class="fal fa-arrow-right"></i></a>
                        </p>
                    </div>
                    <div class="right-header-top">
                        <div class="working-time">
                            <i class="far fa-clock"></i>
                            <span>Working: 8.00am - 5.00pm</span>
                        </div>
                        <div class="ht-social">
                            <span>Visit Us:</span>
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header">
                <div class="content">
                    <div class="header-left">
                        <a class="thumbnail" href="index.html">
                            <img src="assets/images/logo/juut.png" alt="">
                        </a>
                        <nav class="nav-main mainmenu-nav d-none d-xl-block">
                            <ul class="mainmenu">
                                <li>
                                    <a class="nav-item" href="#">Home</a>
                                    {{-- <ul class="submenu menu-link1">
                                        <li class="menu-item">
                                            <a class="tag" href="#">Multipages</a>
                                            <ul>
                                                <li><a href="index.html">Main Home</a></li>
                                                <li><a href="index-two.html">Consulting Home</a></li>
                                                <li><a href="index-three.html">Corporate Home</a></li>
                                                <li><a href="index-four.html">Insurance Home</a></li>
                                                <li><a href="index-five.html">Marketing Home</a></li>
                                                <li><a href="index-six.html">Home finance</a></li>
                                                <li><a href="index-seven.html">Human Resources</a></li>
                                                <li><a href="index-eight.html">IT Solutions</a></li>
                                                <li><a href="index-nine.html">Modern Agency</a></li>
                                                <li><a href="index-ten.html">Startup Agency</a></li>
                                                <li><a href="index-eleven.html">Branding-Agency</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="tag" href="#">Onepages</a>
                                            <ul>
                                                <li><a href="onepage-one.html">Main Home</a></li>
                                                <li><a href="onepage-two.html">Consulting Home</a></li>
                                                <li><a href="onepage-three.html">Corporate Home</a></li>
                                                <li><a href="onepage-four.html">Insurance Home</a></li>
                                                <li><a href="onepage-five.html">Marketing Home</a></li>
                                                <li><a href="onepage-six.html">Finance Home</a></li>
                                                <li><a href="onepage-seven.html">Human resource</a></li>
                                                <li><a href="onepage-eight.html">IT Solutions</a></li>
                                                <li><a href="onepage-nine.html">Modern Agency</a></li>
                                                <li><a href="onepage-ten.html">Startup Agency</a></li>
                                                <li><a href="onepage-eleven.html">Branding-Agency</a></li>
                                            </ul>
                                        </li>
                                    </ul> --}}
                                </li>
                                <li class="has-droupdown">
                                    <a class="nav-link" href="#">Services</a>
                                    <ul class="submenu menu-link3">
                                        <li class="sub-droupdown">
                                            <a class="sub-menu-link" href="#">Our Service</a>
                                            <ul class="submenu third-lvl">
                                                <li><a href="our-service.html">Service 1</a></li>
                                                <li><a href="service-2.html">Service 2</a></li>
                                                <li><a href="service-3.html">Service 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="service-details.html">Service Details</a></li>
                                    </ul>
                                </li>
                                <li class="has-droupdown">
                                    <a class="nav-link" href="#">Pages</a>
                                    <ul class="submenu menu-link">
                                        <li class="menu-item">
                                            <a class="tag" href="#">Pages</a>
                                            <ul>
                                                <li><a href="appoinment.html">Appoinment</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="price-plan.html">Price Plans</a></li>
                                                <li><a href="our-service.html">Our Services</a></li>
                                                <li><a href="testimonial-style-1.html">Testimonial</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="tag" href="#">Portfolio</a>
                                            <ul>
                                                <li><a href="project.html">Portfolio Style 1</a></li>
                                                <li><a href="portfolio-style-2.html">Portfolio Style 2</a></li>
                                                <li><a href="portfolio-style-3.html">Portfolio Style 3</a></li>
                                                <li><a href="portfolio-style-4.html">Portfolio Style 4</a></li>
                                                <li><a href="portfolio-style-5.html">Portfolio Style 5</a></li>
                                                <li><a href="project-details.html">Portfolio Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="tag" href="#">Our Teams</a>
                                            <ul>
                                                <li><a href="team.html">Team Style 1</a></li>
                                                <li><a href="team-style-2.html">Team Style 2</a></li>
                                                <li><a href="team-style-3.html">Team Style 3</a></li>
                                                <li><a href="team-style-4.html">Team Style 4</a></li>
                                                <li><a href="team-style-5.html">Team Style 5</a></li>
                                                <li><a href="team-details.html">Team Details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-droupdown">
                                    <a class="nav-link" href="#">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="blog-list.html">Blog List</a></li>
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="has-droupdown">
                                    <a class="nav-link" href="#">Elements</a>
                                    <ul class="submenu menu-link2">
                                        <li class="menu-item">
                                            <ul>
                                                <li><a href="accordion.html">Accordion</a></li>
                                                <li><a href="address-box.html">Address Box</a></li>
                                                <li><a href="button.html">Button</a></li>
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-slider.html">Blog Slider</a></li>
                                                <li><a href="blog-quote.html">Blog Quote</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <ul>
                                                <li><a href="heading.html">Heading</a></li>
                                                <li><a href="cta.html">Call To Action</a></li>
                                                <li><a href="contact-form.html">Contact Form</a></li>
                                                <li><a href="counter.html">Counter Up</a></li>
                                                <li><a href="brand.html">Brand Logo</a></li>
                                                <li><a href="video.html">Video Addon</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <ul>
                                                <li><a href="pricing.html">Pricing Table</a></li>
                                                <li><a href="typography.html">Typography</a></li>
                                                <li><a href="tab-addon.html">Tab Addon</a></li>
                                                <li><a href="progress-bar.html">Progress Bar</a></li>
                                                <li><a href="testimonial.html">Testimonial</a></li>
                                                <li><a href="working-process.html">Working Process</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="nav-item" href="contactus.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-right">
                        <div class="call-area">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <path d="M14.2251 11.5362C13.7279 11.5914 13.3688 12.061 13.3965 12.5858C13.4517 13.083 13.8936 13.4697 14.4461 13.4144C14.9985 13.3592 15.5509 13.5249 15.9376 13.9116C16.352 14.3259 16.5177 14.8784 16.4624 15.4308C16.4072 15.9832 16.7939 16.4252 17.2911 16.4804C17.5949 16.508 17.8711 16.3975 18.0645 16.2042C18.2026 16.0661 18.3131 15.8451 18.3407 15.6518C18.4512 14.4917 18.0645 13.3868 17.2635 12.5858C16.4901 11.8124 15.3852 11.4257 14.2251 11.5362ZM13.866 7.80729C13.3136 7.86253 12.9545 8.3321 13.0098 8.82928C13.0374 9.35409 13.507 9.71317 14.0318 9.68554C15.7443 9.51982 17.3739 10.0999 18.5617 11.2876C19.7218 12.4477 20.3294 14.105 20.1637 15.8175C20.1085 16.3147 20.4675 16.7842 20.9923 16.8119C21.2962 16.8395 21.5448 16.7566 21.7381 16.5633C21.9038 16.3975 21.9867 16.2042 22.042 15.9832C22.2905 13.7459 21.5171 11.5362 19.9151 9.93414C18.3131 8.3321 16.131 7.58632 13.866 7.80729ZM13.507 4.07841C12.9821 4.10603 12.6231 4.57559 12.6507 5.1004C12.7059 5.59758 13.1479 5.98428 13.6727 5.95666C16.4901 5.68045 19.2522 6.61957 21.2409 8.60831C23.202 10.5694 24.1688 13.3592 23.8926 16.1766C23.865 16.7014 24.2517 17.1433 24.7488 17.1986C25.0527 17.2262 25.3289 17.1157 25.5222 16.9223C25.6603 16.7842 25.7432 16.5909 25.7708 16.3423C26.1299 13.0001 24.9698 9.68554 22.5668 7.28249C20.1361 4.85181 16.8768 3.74695 13.507 4.07841ZM10.3581 15.0165C10.662 14.7679 10.8001 14.2983 10.6343 13.9116L9.22564 10.6799C9.05991 10.238 8.56273 10.017 8.14841 10.0999L5.11006 10.818C4.69574 10.9009 4.3919 11.3152 4.3919 11.7571C4.3919 19.3254 10.5515 25.485 18.1197 25.485C18.5617 25.485 18.976 25.1811 19.0588 24.7668L19.777 21.7285C19.8599 21.3141 19.6389 20.817 19.197 20.6512L15.9653 19.2425C15.5786 19.0768 15.109 19.2149 14.8604 19.5187L13.5346 21.1208C11.4353 20.1264 9.75045 18.4415 8.75608 16.3423L10.3581 15.0165Z" fill="#0B4DF5" />
                                </svg>
                            </div>
                            <div class="number-area">
                                <span>Call us anytime</span>
                                <a href="tel:123-456-7890">
                                    <h6 class="call">+256 21458.2146</h6>
                                </a>
                            </div>
                        </div>
                        <a class="rts-btn btn-primary-2 menu-block-none" href="#">Book a Meeting</a>
                        <button id="menu-btn" class="menu rts-btn btn-primary-alta ml--20">
                            <img class="menu-dark" src="assets/images/icon/menu.png" alt="Menu-icon">
                            <img class="menu-light" src="assets/images/icon/menu-light.png" alt="Menu-icon">
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <div id="anywhere-home"></div>
        <div id="side-bar" class="side-bar">
            <button class="close-icon-menu"><i class="far fa-times"></i></button>
            <!-- inner menu area desktop start -->
            <div class="rts-sidebar-menu-desktop">
                <a class="logo-1" href="index.html"><img class="logo" src="assets/images/logo/logo-1.svg" alt="finbiz_logo"></a>
                <a class="logo-2" href="index.html"><img class="logo" src="assets/images/logo/logo-4.svg" alt="finbiz_logo"></a>
                <a class="logo-3" href="index.html"><img class="logo" src="assets/images/logo/logo-3.svg" alt="finbiz_logo"></a>
                <a class="logo-4" href="index.html"><img class="logo" src="assets/images/logo/logo-5.svg" alt="finbiz_logo"></a>
                <div class="body d-none d-xl-block">
                    <p class="disc">
                        We must explain to you how all seds this mistakens idea denouncing pleasures and praising account.
                    </p>
                    <div class="get-in-touch">
                        <!-- title -->
                        <div class="h6 title">Get In Touch</div>
                        <!-- title End -->
                        <div class="wrapper">
                            <!-- single -->
                            <div class="single">
                                <i class="fas fa-phone-alt"></i>
                                <a href="#">+8801234566789</a>
                            </div>
                            <!-- single ENd -->
                            <!-- single -->
                            <div class="single">
                                <i class="fas fa-envelope"></i>
                                <a href="#">example@gmail.com</a>
                            </div>
                            <!-- single ENd -->
                            <!-- single -->
                            <div class="single">
                                <i class="fas fa-globe"></i>
                                <a href="#">www.webexample.com</a>
                            </div>
                            <!-- single ENd -->
                            <!-- single -->
                            <div class="single">
                                <i class="fas fa-map-marker-alt"></i>
                                <a href="#">13/A, New Pro State, NYC</a>
                            </div>
                            <!-- single ENd -->
                        </div>
                        <div class="social-wrapper-two menu">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                            <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="body-mobile d-block d-xl-none">
                    <nav class="nav-main mainmenu-nav">
                        <ul class="mainmenu">
                            <li class="has-droupdown menu-item">
                                <a class="menu-link" href="#">Home</a>
                                <ul class="submenu">
                                    <li>
                                        <ul>
                                            <a href="#0" class="tag">Homepages</a>
                                            <li class="mobile-menu-link"><a href="index.html">Main Home</a></li>
                                            <li class="mobile-menu-link"><a href="index-two.html">Consulting Home</a></li>
                                            <li class="mobile-menu-link"><a href="index-three.html">Corporate Home</a></li>
                                            <li class="mobile-menu-link"><a href="index-four.html">Insurance Home</a></li>
                                            <li class="mobile-menu-link"><a href="index-five.html">Marketing Home</a></li>
                                            <li class="mobile-menu-link"><a href="index-six.html">Finance Home</a></li>
                                            <li class="mobile-menu-link"><a href="index-seven.html">Human Resources</a></li>
                                            <li class="mobile-menu-link"><a href="index-eight.html">IT Solutions</a></li>
                                            <li class="mobile-menu-link"><a href="onepage-nine.html">Modern Agency</a></li>
                                            <li class="mobile-menu-link"><a href="onepage-ten.html">Startup Agency</a></li>
                                            <li class="mobile-menu-link"><a href="onepage-eleven.html">Branding-Agency</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <a href="#0" class="tag">Onepages</a>
                                            <li class="mobile-menu-link"><a href="onepage-one.html">Main Home Onepage</a></li>
                                            <li class="mobile-menu-link"><a href="onepage-two.html">Consulting Home Onepage</a></li>
                                            <li class="mobile-menu-link"><a href="onepage-three.html">Corporate Home Onepage</a></li>
                                            <li class="mobile-menu-link"><a href="onepage-four.html">Insurance Home Onepage</a></li>
                                            <li class="mobile-menu-link"><a href="onepage-five.html">Marketing Home Onepage</a></li>
                                            <li class="mobile-menu-link"><a href="onepage-six.html">Finance Home Onepage</a></li>
                                            <li class="mobile-menu-link"><a href="onepage-seven.html">Human Resources Onepage</a></li>
                                            <li class="mobile-menu-link"><a href="onepage-eight.html">IT Solutions Onepage</a></li>
                                            <li class="mobile-menu-link"><a href="onepage-nine.html">Modern Agency</a></li>
                                            <li class="mobile-menu-link"><a href="onepage-ten.html">Startup Agency</a></li>
                                            <li class="mobile-menu-link"><a href="onepage-eleven.html">Branding-Agency</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item"><a class="menu-link" href="about-us.html">About Us</a></li>
                            <li class="has-droupdown menu-item">
                                <a class="menu-link" href="#">Services</a>
                                <ul class="submenu">
                                    <li class="has-droupdown sub-droupdown">
                                        <a href="#">Our Service</a>
                                        <ul class="submenu third-lvl mobile-menu">
                                            <li><a href="our-service.html">Service 1</a></li>
                                            <li><a href="service-2.html">Service 2</a></li>
                                            <li><a href="service-3.html">Service 3</a></li>
                                        </ul>
                                    </li>
                                    <li class="mobile-menu-link"><a href="service-details.html">Service Details</a></li>
                                </ul>
                            </li>
                            <li class="has-droupdown menu-item">
                                <a class="menu-link" href="#">Pages</a>
                                <ul class="submenu">
                                    <li class="mobile-menu-link"><a href="project.html">Project</a></li>
                                    <li class="mobile-menu-link"><a href="project-details.html">Project Details</a></li>
                                    <li class="mobile-menu-link"><a href="team.html">Team</a></li>
                                    <li class="mobile-menu-link"><a href="team-details.html">Team Details</a></li>
                                    <li class="mobile-menu-link"><a href="appoinment.html">appoinment</a></li>
                                    <li class="mobile-menu-link"><a href="price-plan.html">Price Plan</a></li>
                                    <li class="mobile-menu-link"><a href="404.html">404 Page</a></li>
                                </ul>
                            </li>
                            <li class="has-droupdown menu-item">
                                <a class="menu-link" href="#">Blog</a>
                                <ul class="submenu">
                                    <li class="mobile-menu-link"><a href="blog-list.html">Blog List</a></li>
                                    <li class="mobile-menu-link"><a href="blog-grid.html">Blog Grid</a></li>
                                    <li class="mobile-menu-link"><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item"><a class="menu-link" href="contactus.html">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="social-wrapper-two menu mobile-menu">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                    </div>
                    <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Get Quote</a>
                </div>
            </div>
            <!-- inner menu area desktop End -->
        </div>
        <!-- ENd Header Area -->


        <!-- banner ten area start -->
        <div class="banner-tena-area banner-bg-10 bg_image rts-section-gap">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6 order-lg-1 order-md-2 order-sm-2 order-2">
                        <!-- banner inner-content ten area -->
                        <div class="banner-ten-inner-content">
                            <span class="pre-title">Building Business From Scratch</span>
                            <h1 class="title">Unleashing Potential,
                                <span>Redefining Success</span>
                            </h1>

                            <p class="disc">We believe that every business, no matter the size or industry, deserves to thrive in today's dynamic economic landscape.</p>
                            <a href="#" class="rts-btn btn-primary-2">Book a Meeting</a>
                        </div>
                        <!-- banner inner-content ten area end -->
                    </div>
                    <div class="col-lg-6 order-lg-2 order-md-1 order-sm-1 order-1">
                        <div class="thumbnail-img-10 pt--100">
                            <img src="assets/images/banner/banner-14.png" alt="banner">
                            <img class="small-img" src="assets/images/banner/sm-1.png" alt="small-image">
                            <img class="small-img-2" src="assets/images/banner/sm-2.png" alt="small-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner ten area end -->


        <!-- awesome startupo service area start -->
        <div class="awesome-service-ten rts-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center title-area-ten">
                            <h2 class="title">Amazing <span>Startup Services</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--20 g-5">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- single inner service aarea -->
                        <div class="single-inner-service-ten">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                                    <path d="M42.3014 22.4999C41.95 22.4986 41.6052 22.5959 41.3062 22.7807C41.0073 22.9655 40.7661 23.2305 40.6102 23.5454L37.2299 30.3052L35.1517 32.3835L34.4767 32.7217L35.5807 30.7889C35.8587 30.3054 35.9416 29.7339 35.8124 29.1912C35.6832 28.6486 35.3516 28.1758 34.8855 27.8694C34.4194 27.563 33.8539 27.4461 33.3045 27.5427C32.7551 27.6393 32.2634 27.942 31.9297 28.3889L28.2464 33.3C28.1981 33.3644 28.1606 33.4364 28.1354 33.513L26.6354 38.013C26.6192 38.0596 26.6081 38.1079 26.6024 38.157L25.8524 44.157C25.8392 44.2625 25.8486 44.3696 25.88 44.4712C25.9113 44.5728 25.9639 44.6666 26.0343 44.7463C26.1046 44.826 26.1911 44.8898 26.2881 44.9336C26.385 44.9773 26.4901 45 26.5964 45H33.3464C33.5453 45 33.7361 44.921 33.8768 44.7803C34.0174 44.6397 34.0964 44.4489 34.0964 44.25V41.3025C34.0964 41.179 34.1269 41.0575 34.1851 40.9487C34.2433 40.8398 34.3275 40.747 34.4302 40.6785L38.2627 38.124C38.345 38.0691 38.4156 37.9985 38.4704 37.9162L41.4704 33.4162C41.5111 33.356 41.5425 33.29 41.5634 33.2205L44.1097 24.9472C44.1968 24.6643 44.2163 24.3648 44.1666 24.073C44.1169 23.7812 43.9993 23.5051 43.8234 23.2671C43.6475 23.029 43.4181 22.8355 43.1538 22.7023C42.8894 22.569 42.5975 22.4997 42.3014 22.4999ZM42.6764 24.5062L40.1617 32.6745L37.3057 36.9592L33.5984 39.4305C33.2899 39.6356 33.0369 39.9139 32.8621 40.2405C32.6872 40.5672 32.596 40.932 32.5964 41.3025V43.5H27.4461L28.0814 38.4172L29.5214 34.1025L33.1319 29.2897C33.2368 29.1489 33.3915 29.0535 33.5644 29.023C33.7372 28.9925 33.9152 29.0292 34.0619 29.1255C34.2087 29.2219 34.3131 29.3706 34.3538 29.5414C34.3945 29.7122 34.3684 29.892 34.2809 30.0442L31.9454 34.125C31.8627 34.2648 31.8276 34.4277 31.8454 34.5891C31.8633 34.7506 31.933 34.9019 32.0442 35.0203C32.1555 35.1387 32.3021 35.2178 32.4622 35.2457C32.6222 35.2736 32.787 35.2488 32.9317 35.175L35.9317 33.675C36.0038 33.6388 36.0697 33.5912 36.1267 33.534L38.3767 31.284C38.4339 31.227 38.4815 31.1611 38.5177 31.089L41.9519 24.2197C41.9835 24.1538 42.0331 24.0982 42.0949 24.0593C42.1568 24.0204 42.2284 23.9998 42.3014 23.9999C42.3627 23.9998 42.4232 24.0141 42.478 24.0416C42.5327 24.0691 42.5803 24.1091 42.6167 24.1584C42.6532 24.2076 42.6776 24.2648 42.688 24.3252C42.6984 24.3856 42.6944 24.4476 42.6764 24.5062Z" fill="#315ACA" />
                                    <path d="M17.5574 38.013L16.0574 33.513C16.0322 33.4364 15.9947 33.3644 15.9464 33.3L12.2631 28.3889C11.9294 27.942 11.4376 27.6393 10.8882 27.5427C10.3389 27.4461 9.77334 27.563 9.30723 27.8694C8.84112 28.1758 8.50959 28.6486 8.38039 29.1912C8.25119 29.7339 8.33406 30.3054 8.61208 30.7889L9.71609 32.7225L9.04108 32.3842L6.96283 30.3059L3.58256 23.5454C3.37006 23.1214 3.00598 22.7926 2.5625 22.6244C2.11901 22.4561 1.6285 22.4606 1.18818 22.637C0.747857 22.8133 0.389873 23.1487 0.185184 23.5766C-0.0195044 24.0045 -0.0559572 24.4937 0.0830517 24.9472L2.62931 33.2205C2.65029 33.29 2.68164 33.356 2.72231 33.4162L5.72232 37.9162C5.7772 37.9985 5.8478 38.0691 5.93007 38.124L9.76259 40.6785C9.86527 40.747 9.94946 40.8398 10.0077 40.9487C10.0659 41.0575 10.0964 41.179 10.0963 41.3025V44.25C10.0963 44.4489 10.1754 44.6397 10.316 44.7803C10.4567 44.921 10.6474 45 10.8463 45H17.5964C17.7027 45 17.8078 44.9773 17.9047 44.9336C18.0016 44.8898 18.0881 44.826 18.1585 44.7463C18.2288 44.6666 18.2814 44.5728 18.3128 44.4712C18.3442 44.3696 18.3535 44.2625 18.3404 44.157L17.5904 38.157C17.5846 38.1079 17.5736 38.0596 17.5574 38.013ZM11.5963 43.5V41.3025C11.5973 40.9315 11.5062 40.5661 11.3314 40.2388C11.1565 39.9116 10.9033 39.6329 10.5943 39.4275L6.88707 36.9562L4.03107 32.6745L1.51781 24.5062C1.49988 24.4477 1.4959 24.3858 1.50619 24.3255C1.51649 24.2653 1.54076 24.2082 1.57707 24.159C1.61339 24.1098 1.66072 24.0698 1.71529 24.0421C1.76986 24.0145 1.83015 24.0001 1.89131 23.9999C1.96397 23.9995 2.03528 24.0195 2.09709 24.0577C2.1589 24.0959 2.2087 24.1507 2.24081 24.2159L5.67507 31.0852C5.71127 31.1574 5.75888 31.2232 5.81607 31.2802L8.06608 33.5302C8.12307 33.5874 8.18891 33.635 8.26108 33.6712L11.2611 35.1712C11.4054 35.244 11.5694 35.2682 11.7285 35.2402C11.8877 35.2122 12.0336 35.1336 12.1445 35.016C12.2553 34.8984 12.3252 34.7481 12.3438 34.5875C12.3623 34.427 12.3285 34.2647 12.2473 34.125L9.91409 30.0404C9.8266 29.8883 9.80054 29.7084 9.84124 29.5377C9.88195 29.3669 9.98633 29.2181 10.1331 29.1218C10.2798 29.0254 10.4578 28.9888 10.6307 29.0193C10.8035 29.0498 10.9582 29.1452 11.0631 29.2859L14.6714 34.1025L16.1091 38.4172L16.7466 43.5H11.5963Z" fill="#315ACA" />
                                    <path d="M9.34633 25.4999H34.8464C35.0453 25.4999 35.2361 25.4209 35.3768 25.2803C35.5174 25.1396 35.5964 24.9488 35.5964 24.7499V18.7499C35.5964 18.1532 35.3594 17.5809 34.9374 17.1589C34.5155 16.737 33.9432 16.4999 33.3464 16.4999H33.0599C33.5224 16.0995 33.8515 15.5673 34.003 14.9747C34.1545 14.382 34.1212 13.7572 33.9075 13.184C33.6939 12.6108 33.3101 12.1166 32.8077 11.7676C32.3052 11.4187 31.7081 11.2317 31.0964 11.2317C30.4847 11.2317 29.8876 11.4187 29.3851 11.7676C28.8827 12.1166 28.4989 12.6108 28.2853 13.184C28.0717 13.7572 28.0384 14.382 28.1899 14.9747C28.3413 15.5673 28.6704 16.0995 29.1329 16.4999H28.8464C28.4885 16.5023 28.1364 16.5913 27.8204 16.7594C27.5827 16.2359 27.1995 15.7918 26.7166 15.4799C26.2337 15.1679 25.6713 15.0013 25.0964 14.9999H24.1919C24.7412 14.5648 25.1415 13.9695 25.3371 13.2966C25.5328 12.6237 25.5142 11.9066 25.2838 11.2448C25.0535 10.583 24.6229 10.0093 24.0517 9.60332C23.4805 9.19734 22.7971 8.97921 22.0964 8.97921C21.3956 8.97921 20.7122 9.19734 20.1411 9.60332C19.5699 10.0093 19.1393 10.583 18.9089 11.2448C18.6786 11.9066 18.6599 12.6237 18.8556 13.2966C19.0513 13.9695 19.4515 14.5648 20.0009 14.9999H19.0964C18.5215 15.0013 17.9591 15.1679 17.4761 15.4799C16.9932 15.7918 16.6101 16.2359 16.3724 16.7594C16.0563 16.5913 15.7043 16.5023 15.3464 16.4999H15.0599C15.5224 16.0995 15.8514 15.5673 16.0029 14.9747C16.1544 14.382 16.1211 13.7572 15.9075 13.184C15.6938 12.6108 15.3101 12.1166 14.8076 11.7676C14.3052 11.4187 13.7081 11.2317 13.0963 11.2317C12.4846 11.2317 11.8875 11.4187 11.3851 11.7676C10.8826 12.1166 10.4989 12.6108 10.2852 13.184C10.0716 13.7572 10.0383 14.382 10.1898 14.9747C10.3413 15.5673 10.6703 16.0995 11.1328 16.4999H10.8463C10.2496 16.4999 9.6773 16.737 9.25534 17.1589C8.83339 17.5809 8.59633 18.1532 8.59633 18.7499V24.7499C8.59633 24.9488 8.67535 25.1396 8.816 25.2803C8.95666 25.4209 9.14742 25.4999 9.34633 25.4999ZM31.0964 12.7499C31.3931 12.7499 31.6831 12.8379 31.9298 13.0027C32.1764 13.1675 32.3687 13.4018 32.4822 13.6759C32.5958 13.95 32.6255 14.2516 32.5676 14.5425C32.5097 14.8335 32.3669 15.1008 32.1571 15.3106C31.9473 15.5203 31.68 15.6632 31.389 15.7211C31.0981 15.779 30.7965 15.7492 30.5224 15.6357C30.2483 15.5222 30.014 15.3299 29.8492 15.0833C29.6844 14.8366 29.5964 14.5466 29.5964 14.2499C29.5964 13.8521 29.7544 13.4705 30.0357 13.1892C30.3171 12.9079 30.6986 12.7499 31.0964 12.7499ZM28.0964 18.7499C28.0964 18.551 28.1754 18.3602 28.3161 18.2196C28.4567 18.0789 28.6475 17.9999 28.8464 17.9999H33.3464C33.5453 17.9999 33.7361 18.0789 33.8768 18.2196C34.0174 18.3602 34.0964 18.551 34.0964 18.7499V23.9999H28.0964V18.7499ZM22.0964 10.4999C22.4672 10.4999 22.8297 10.6098 23.1381 10.8159C23.4464 11.0219 23.6867 11.3147 23.8287 11.6573C23.9706 12 24.0077 12.377 23.9354 12.7407C23.863 13.1044 23.6844 13.4385 23.4222 13.7007C23.16 13.9629 22.8259 14.1415 22.4622 14.2139C22.0985 14.2862 21.7215 14.2491 21.3788 14.1072C21.0362 13.9652 20.7434 13.7249 20.5374 13.4166C20.3313 13.1082 20.2214 12.7457 20.2214 12.3749C20.2214 11.8776 20.4189 11.4007 20.7705 11.0491C21.1222 10.6974 21.5991 10.4999 22.0964 10.4999ZM17.5964 17.9999C17.5964 17.6021 17.7544 17.2205 18.0357 16.9392C18.317 16.6579 18.6985 16.4999 19.0964 16.4999H25.0964C25.4942 16.4999 25.8757 16.6579 26.1571 16.9392C26.4384 17.2205 26.5964 17.6021 26.5964 17.9999V23.9999H17.5964V17.9999ZM13.0963 12.7499C13.393 12.7499 13.683 12.8379 13.9297 13.0027C14.1764 13.1675 14.3686 13.4018 14.4822 13.6759C14.5957 13.95 14.6254 14.2516 14.5675 14.5425C14.5097 14.8335 14.3668 15.1008 14.157 15.3106C13.9472 15.5203 13.68 15.6632 13.389 15.7211C13.098 15.779 12.7964 15.7492 12.5223 15.6357C12.2482 15.5222 12.014 15.3299 11.8491 15.0833C11.6843 14.8366 11.5963 14.5466 11.5963 14.2499C11.5963 13.8521 11.7544 13.4705 12.0357 13.1892C12.317 12.9079 12.6985 12.7499 13.0963 12.7499ZM10.0963 18.7499C10.0963 18.551 10.1754 18.3602 10.316 18.2196C10.4567 18.0789 10.6474 17.9999 10.8463 17.9999H15.3464C15.5453 17.9999 15.736 18.0789 15.8767 18.2196C16.0173 18.3602 16.0964 18.551 16.0964 18.7499V23.9999H10.0963V18.7499Z" fill="#315ACA" />
                                    <path d="M4.84632 9.74988V16.4999H6.34632V10.3079L13.3116 8.21837C13.4662 8.17206 13.6017 8.07714 13.698 7.94771C13.7943 7.81827 13.8464 7.66122 13.8463 7.49987V4.06035L15.5661 5.78011L16.6266 4.71961L13.6266 1.7196C13.486 1.57899 13.2952 1.50001 13.0963 1.50001C12.8975 1.50001 12.7067 1.57899 12.5661 1.7196L9.56609 4.71961L10.6266 5.78011L12.3463 4.06035V6.94186L5.38107 9.03137C5.22651 9.07768 5.091 9.1726 4.99467 9.30204C4.89833 9.43147 4.84631 9.58852 4.84632 9.74988Z" fill="#315ACA" />
                                    <path d="M22.8464 6.74986V2.56035L24.5661 4.28011L25.6266 3.2196L22.6266 0.219591C22.486 0.0789868 22.2953 0 22.0964 0C21.8975 0 21.7068 0.0789868 21.5661 0.219591L18.5661 3.2196L19.6266 4.28011L21.3464 2.56035V6.74986H22.8464Z" fill="#315ACA" />
                                    <path d="M33.5662 5.78011L34.6267 4.71961L31.6267 1.7196C31.486 1.57899 31.2953 1.50001 31.0964 1.50001C30.8975 1.50001 30.7068 1.57899 30.5662 1.7196L27.5661 4.71961L28.6267 5.78011L30.3464 4.06035V7.49987C30.3465 7.65721 30.3961 7.81054 30.4882 7.93814C30.5803 8.06573 30.7101 8.16115 30.8594 8.21087L37.0964 10.2906V16.4999H38.5964V9.74988C38.5963 9.59253 38.5467 9.43921 38.4546 9.31161C38.3626 9.18401 38.2327 9.08859 38.0834 9.03887L31.8464 6.95912V4.06035L33.5662 5.78011Z" fill="#315ACA" />
                                </svg>
                            </div>
                            <h5 class="title">Software Solutions</h5>
                            <p class="disc">
                                Purus dui eget sollicitudin curae leo proin platea cras, morbi torquent massa
                            </p>
                            <a href="#" class="rts-btn btn-primary-2">Read More</a>
                        </div>
                        <!-- single inner service aarea end -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- single inner service aarea -->
                        <div class="single-inner-service-ten">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                                    <path d="M42.3014 22.4999C41.95 22.4986 41.6052 22.5959 41.3062 22.7807C41.0073 22.9655 40.7661 23.2305 40.6102 23.5454L37.2299 30.3052L35.1517 32.3835L34.4767 32.7217L35.5807 30.7889C35.8587 30.3054 35.9416 29.7339 35.8124 29.1912C35.6832 28.6486 35.3516 28.1758 34.8855 27.8694C34.4194 27.563 33.8539 27.4461 33.3045 27.5427C32.7551 27.6393 32.2634 27.942 31.9297 28.3889L28.2464 33.3C28.1981 33.3644 28.1606 33.4364 28.1354 33.513L26.6354 38.013C26.6192 38.0596 26.6081 38.1079 26.6024 38.157L25.8524 44.157C25.8392 44.2625 25.8486 44.3696 25.88 44.4712C25.9113 44.5728 25.9639 44.6666 26.0343 44.7463C26.1046 44.826 26.1911 44.8898 26.2881 44.9336C26.385 44.9773 26.4901 45 26.5964 45H33.3464C33.5453 45 33.7361 44.921 33.8768 44.7803C34.0174 44.6397 34.0964 44.4489 34.0964 44.25V41.3025C34.0964 41.179 34.1269 41.0575 34.1851 40.9487C34.2433 40.8398 34.3275 40.747 34.4302 40.6785L38.2627 38.124C38.345 38.0691 38.4156 37.9985 38.4704 37.9162L41.4704 33.4162C41.5111 33.356 41.5425 33.29 41.5634 33.2205L44.1097 24.9472C44.1968 24.6643 44.2163 24.3648 44.1666 24.073C44.1169 23.7812 43.9993 23.5051 43.8234 23.2671C43.6475 23.029 43.4181 22.8355 43.1538 22.7023C42.8894 22.569 42.5975 22.4997 42.3014 22.4999ZM42.6764 24.5062L40.1617 32.6745L37.3057 36.9592L33.5984 39.4305C33.2899 39.6356 33.0369 39.9139 32.8621 40.2405C32.6872 40.5672 32.596 40.932 32.5964 41.3025V43.5H27.4461L28.0814 38.4172L29.5214 34.1025L33.1319 29.2897C33.2368 29.1489 33.3915 29.0535 33.5644 29.023C33.7372 28.9925 33.9152 29.0292 34.0619 29.1255C34.2087 29.2219 34.3131 29.3706 34.3538 29.5414C34.3945 29.7122 34.3684 29.892 34.2809 30.0442L31.9454 34.125C31.8627 34.2648 31.8276 34.4277 31.8454 34.5891C31.8633 34.7506 31.933 34.9019 32.0442 35.0203C32.1555 35.1387 32.3021 35.2178 32.4622 35.2457C32.6222 35.2736 32.787 35.2488 32.9317 35.175L35.9317 33.675C36.0038 33.6388 36.0697 33.5912 36.1267 33.534L38.3767 31.284C38.4339 31.227 38.4815 31.1611 38.5177 31.089L41.9519 24.2197C41.9835 24.1538 42.0331 24.0982 42.0949 24.0593C42.1568 24.0204 42.2284 23.9998 42.3014 23.9999C42.3627 23.9998 42.4232 24.0141 42.478 24.0416C42.5327 24.0691 42.5803 24.1091 42.6167 24.1584C42.6532 24.2076 42.6776 24.2648 42.688 24.3252C42.6984 24.3856 42.6944 24.4476 42.6764 24.5062Z" fill="#315ACA" />
                                    <path d="M17.5574 38.013L16.0574 33.513C16.0322 33.4364 15.9947 33.3644 15.9464 33.3L12.2631 28.3889C11.9294 27.942 11.4376 27.6393 10.8882 27.5427C10.3389 27.4461 9.77334 27.563 9.30723 27.8694C8.84112 28.1758 8.50959 28.6486 8.38039 29.1912C8.25119 29.7339 8.33406 30.3054 8.61208 30.7889L9.71609 32.7225L9.04108 32.3842L6.96283 30.3059L3.58256 23.5454C3.37006 23.1214 3.00598 22.7926 2.5625 22.6244C2.11901 22.4561 1.6285 22.4606 1.18818 22.637C0.747857 22.8133 0.389873 23.1487 0.185184 23.5766C-0.0195044 24.0045 -0.0559572 24.4937 0.0830517 24.9472L2.62931 33.2205C2.65029 33.29 2.68164 33.356 2.72231 33.4162L5.72232 37.9162C5.7772 37.9985 5.8478 38.0691 5.93007 38.124L9.76259 40.6785C9.86527 40.747 9.94946 40.8398 10.0077 40.9487C10.0659 41.0575 10.0964 41.179 10.0963 41.3025V44.25C10.0963 44.4489 10.1754 44.6397 10.316 44.7803C10.4567 44.921 10.6474 45 10.8463 45H17.5964C17.7027 45 17.8078 44.9773 17.9047 44.9336C18.0016 44.8898 18.0881 44.826 18.1585 44.7463C18.2288 44.6666 18.2814 44.5728 18.3128 44.4712C18.3442 44.3696 18.3535 44.2625 18.3404 44.157L17.5904 38.157C17.5846 38.1079 17.5736 38.0596 17.5574 38.013ZM11.5963 43.5V41.3025C11.5973 40.9315 11.5062 40.5661 11.3314 40.2388C11.1565 39.9116 10.9033 39.6329 10.5943 39.4275L6.88707 36.9562L4.03107 32.6745L1.51781 24.5062C1.49988 24.4477 1.4959 24.3858 1.50619 24.3255C1.51649 24.2653 1.54076 24.2082 1.57707 24.159C1.61339 24.1098 1.66072 24.0698 1.71529 24.0421C1.76986 24.0145 1.83015 24.0001 1.89131 23.9999C1.96397 23.9995 2.03528 24.0195 2.09709 24.0577C2.1589 24.0959 2.2087 24.1507 2.24081 24.2159L5.67507 31.0852C5.71127 31.1574 5.75888 31.2232 5.81607 31.2802L8.06608 33.5302C8.12307 33.5874 8.18891 33.635 8.26108 33.6712L11.2611 35.1712C11.4054 35.244 11.5694 35.2682 11.7285 35.2402C11.8877 35.2122 12.0336 35.1336 12.1445 35.016C12.2553 34.8984 12.3252 34.7481 12.3438 34.5875C12.3623 34.427 12.3285 34.2647 12.2473 34.125L9.91409 30.0404C9.8266 29.8883 9.80054 29.7084 9.84124 29.5377C9.88195 29.3669 9.98633 29.2181 10.1331 29.1218C10.2798 29.0254 10.4578 28.9888 10.6307 29.0193C10.8035 29.0498 10.9582 29.1452 11.0631 29.2859L14.6714 34.1025L16.1091 38.4172L16.7466 43.5H11.5963Z" fill="#315ACA" />
                                    <path d="M9.34633 25.4999H34.8464C35.0453 25.4999 35.2361 25.4209 35.3768 25.2803C35.5174 25.1396 35.5964 24.9488 35.5964 24.7499V18.7499C35.5964 18.1532 35.3594 17.5809 34.9374 17.1589C34.5155 16.737 33.9432 16.4999 33.3464 16.4999H33.0599C33.5224 16.0995 33.8515 15.5673 34.003 14.9747C34.1545 14.382 34.1212 13.7572 33.9075 13.184C33.6939 12.6108 33.3101 12.1166 32.8077 11.7676C32.3052 11.4187 31.7081 11.2317 31.0964 11.2317C30.4847 11.2317 29.8876 11.4187 29.3851 11.7676C28.8827 12.1166 28.4989 12.6108 28.2853 13.184C28.0717 13.7572 28.0384 14.382 28.1899 14.9747C28.3413 15.5673 28.6704 16.0995 29.1329 16.4999H28.8464C28.4885 16.5023 28.1364 16.5913 27.8204 16.7594C27.5827 16.2359 27.1995 15.7918 26.7166 15.4799C26.2337 15.1679 25.6713 15.0013 25.0964 14.9999H24.1919C24.7412 14.5648 25.1415 13.9695 25.3371 13.2966C25.5328 12.6237 25.5142 11.9066 25.2838 11.2448C25.0535 10.583 24.6229 10.0093 24.0517 9.60332C23.4805 9.19734 22.7971 8.97921 22.0964 8.97921C21.3956 8.97921 20.7122 9.19734 20.1411 9.60332C19.5699 10.0093 19.1393 10.583 18.9089 11.2448C18.6786 11.9066 18.6599 12.6237 18.8556 13.2966C19.0513 13.9695 19.4515 14.5648 20.0009 14.9999H19.0964C18.5215 15.0013 17.9591 15.1679 17.4761 15.4799C16.9932 15.7918 16.6101 16.2359 16.3724 16.7594C16.0563 16.5913 15.7043 16.5023 15.3464 16.4999H15.0599C15.5224 16.0995 15.8514 15.5673 16.0029 14.9747C16.1544 14.382 16.1211 13.7572 15.9075 13.184C15.6938 12.6108 15.3101 12.1166 14.8076 11.7676C14.3052 11.4187 13.7081 11.2317 13.0963 11.2317C12.4846 11.2317 11.8875 11.4187 11.3851 11.7676C10.8826 12.1166 10.4989 12.6108 10.2852 13.184C10.0716 13.7572 10.0383 14.382 10.1898 14.9747C10.3413 15.5673 10.6703 16.0995 11.1328 16.4999H10.8463C10.2496 16.4999 9.6773 16.737 9.25534 17.1589C8.83339 17.5809 8.59633 18.1532 8.59633 18.7499V24.7499C8.59633 24.9488 8.67535 25.1396 8.816 25.2803C8.95666 25.4209 9.14742 25.4999 9.34633 25.4999ZM31.0964 12.7499C31.3931 12.7499 31.6831 12.8379 31.9298 13.0027C32.1764 13.1675 32.3687 13.4018 32.4822 13.6759C32.5958 13.95 32.6255 14.2516 32.5676 14.5425C32.5097 14.8335 32.3669 15.1008 32.1571 15.3106C31.9473 15.5203 31.68 15.6632 31.389 15.7211C31.0981 15.779 30.7965 15.7492 30.5224 15.6357C30.2483 15.5222 30.014 15.3299 29.8492 15.0833C29.6844 14.8366 29.5964 14.5466 29.5964 14.2499C29.5964 13.8521 29.7544 13.4705 30.0357 13.1892C30.3171 12.9079 30.6986 12.7499 31.0964 12.7499ZM28.0964 18.7499C28.0964 18.551 28.1754 18.3602 28.3161 18.2196C28.4567 18.0789 28.6475 17.9999 28.8464 17.9999H33.3464C33.5453 17.9999 33.7361 18.0789 33.8768 18.2196C34.0174 18.3602 34.0964 18.551 34.0964 18.7499V23.9999H28.0964V18.7499ZM22.0964 10.4999C22.4672 10.4999 22.8297 10.6098 23.1381 10.8159C23.4464 11.0219 23.6867 11.3147 23.8287 11.6573C23.9706 12 24.0077 12.377 23.9354 12.7407C23.863 13.1044 23.6844 13.4385 23.4222 13.7007C23.16 13.9629 22.8259 14.1415 22.4622 14.2139C22.0985 14.2862 21.7215 14.2491 21.3788 14.1072C21.0362 13.9652 20.7434 13.7249 20.5374 13.4166C20.3313 13.1082 20.2214 12.7457 20.2214 12.3749C20.2214 11.8776 20.4189 11.4007 20.7705 11.0491C21.1222 10.6974 21.5991 10.4999 22.0964 10.4999ZM17.5964 17.9999C17.5964 17.6021 17.7544 17.2205 18.0357 16.9392C18.317 16.6579 18.6985 16.4999 19.0964 16.4999H25.0964C25.4942 16.4999 25.8757 16.6579 26.1571 16.9392C26.4384 17.2205 26.5964 17.6021 26.5964 17.9999V23.9999H17.5964V17.9999ZM13.0963 12.7499C13.393 12.7499 13.683 12.8379 13.9297 13.0027C14.1764 13.1675 14.3686 13.4018 14.4822 13.6759C14.5957 13.95 14.6254 14.2516 14.5675 14.5425C14.5097 14.8335 14.3668 15.1008 14.157 15.3106C13.9472 15.5203 13.68 15.6632 13.389 15.7211C13.098 15.779 12.7964 15.7492 12.5223 15.6357C12.2482 15.5222 12.014 15.3299 11.8491 15.0833C11.6843 14.8366 11.5963 14.5466 11.5963 14.2499C11.5963 13.8521 11.7544 13.4705 12.0357 13.1892C12.317 12.9079 12.6985 12.7499 13.0963 12.7499ZM10.0963 18.7499C10.0963 18.551 10.1754 18.3602 10.316 18.2196C10.4567 18.0789 10.6474 17.9999 10.8463 17.9999H15.3464C15.5453 17.9999 15.736 18.0789 15.8767 18.2196C16.0173 18.3602 16.0964 18.551 16.0964 18.7499V23.9999H10.0963V18.7499Z" fill="#315ACA" />
                                    <path d="M4.84632 9.74988V16.4999H6.34632V10.3079L13.3116 8.21837C13.4662 8.17206 13.6017 8.07714 13.698 7.94771C13.7943 7.81827 13.8464 7.66122 13.8463 7.49987V4.06035L15.5661 5.78011L16.6266 4.71961L13.6266 1.7196C13.486 1.57899 13.2952 1.50001 13.0963 1.50001C12.8975 1.50001 12.7067 1.57899 12.5661 1.7196L9.56609 4.71961L10.6266 5.78011L12.3463 4.06035V6.94186L5.38107 9.03137C5.22651 9.07768 5.091 9.1726 4.99467 9.30204C4.89833 9.43147 4.84631 9.58852 4.84632 9.74988Z" fill="#315ACA" />
                                    <path d="M22.8464 6.74986V2.56035L24.5661 4.28011L25.6266 3.2196L22.6266 0.219591C22.486 0.0789868 22.2953 0 22.0964 0C21.8975 0 21.7068 0.0789868 21.5661 0.219591L18.5661 3.2196L19.6266 4.28011L21.3464 2.56035V6.74986H22.8464Z" fill="#315ACA" />
                                    <path d="M33.5662 5.78011L34.6267 4.71961L31.6267 1.7196C31.486 1.57899 31.2953 1.50001 31.0964 1.50001C30.8975 1.50001 30.7068 1.57899 30.5662 1.7196L27.5661 4.71961L28.6267 5.78011L30.3464 4.06035V7.49987C30.3465 7.65721 30.3961 7.81054 30.4882 7.93814C30.5803 8.06573 30.7101 8.16115 30.8594 8.21087L37.0964 10.2906V16.4999H38.5964V9.74988C38.5963 9.59253 38.5467 9.43921 38.4546 9.31161C38.3626 9.18401 38.2327 9.08859 38.0834 9.03887L31.8464 6.95912V4.06035L33.5662 5.78011Z" fill="#315ACA" />
                                </svg>
                            </div>
                            <h5 class="title">Marketplace Platforms</h5>
                            <p class="disc">
                                Purus dui eget sollicitudin curae leo proin platea cras, morbi torquent massa
                            </p>
                            <a href="#" class="rts-btn btn-primary-2">Read More</a>
                        </div>
                        <!-- single inner service aarea end -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- single inner service aarea -->
                        <div class="single-inner-service-ten">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                                    <path d="M42.3014 22.4999C41.95 22.4986 41.6052 22.5959 41.3062 22.7807C41.0073 22.9655 40.7661 23.2305 40.6102 23.5454L37.2299 30.3052L35.1517 32.3835L34.4767 32.7217L35.5807 30.7889C35.8587 30.3054 35.9416 29.7339 35.8124 29.1912C35.6832 28.6486 35.3516 28.1758 34.8855 27.8694C34.4194 27.563 33.8539 27.4461 33.3045 27.5427C32.7551 27.6393 32.2634 27.942 31.9297 28.3889L28.2464 33.3C28.1981 33.3644 28.1606 33.4364 28.1354 33.513L26.6354 38.013C26.6192 38.0596 26.6081 38.1079 26.6024 38.157L25.8524 44.157C25.8392 44.2625 25.8486 44.3696 25.88 44.4712C25.9113 44.5728 25.9639 44.6666 26.0343 44.7463C26.1046 44.826 26.1911 44.8898 26.2881 44.9336C26.385 44.9773 26.4901 45 26.5964 45H33.3464C33.5453 45 33.7361 44.921 33.8768 44.7803C34.0174 44.6397 34.0964 44.4489 34.0964 44.25V41.3025C34.0964 41.179 34.1269 41.0575 34.1851 40.9487C34.2433 40.8398 34.3275 40.747 34.4302 40.6785L38.2627 38.124C38.345 38.0691 38.4156 37.9985 38.4704 37.9162L41.4704 33.4162C41.5111 33.356 41.5425 33.29 41.5634 33.2205L44.1097 24.9472C44.1968 24.6643 44.2163 24.3648 44.1666 24.073C44.1169 23.7812 43.9993 23.5051 43.8234 23.2671C43.6475 23.029 43.4181 22.8355 43.1538 22.7023C42.8894 22.569 42.5975 22.4997 42.3014 22.4999ZM42.6764 24.5062L40.1617 32.6745L37.3057 36.9592L33.5984 39.4305C33.2899 39.6356 33.0369 39.9139 32.8621 40.2405C32.6872 40.5672 32.596 40.932 32.5964 41.3025V43.5H27.4461L28.0814 38.4172L29.5214 34.1025L33.1319 29.2897C33.2368 29.1489 33.3915 29.0535 33.5644 29.023C33.7372 28.9925 33.9152 29.0292 34.0619 29.1255C34.2087 29.2219 34.3131 29.3706 34.3538 29.5414C34.3945 29.7122 34.3684 29.892 34.2809 30.0442L31.9454 34.125C31.8627 34.2648 31.8276 34.4277 31.8454 34.5891C31.8633 34.7506 31.933 34.9019 32.0442 35.0203C32.1555 35.1387 32.3021 35.2178 32.4622 35.2457C32.6222 35.2736 32.787 35.2488 32.9317 35.175L35.9317 33.675C36.0038 33.6388 36.0697 33.5912 36.1267 33.534L38.3767 31.284C38.4339 31.227 38.4815 31.1611 38.5177 31.089L41.9519 24.2197C41.9835 24.1538 42.0331 24.0982 42.0949 24.0593C42.1568 24.0204 42.2284 23.9998 42.3014 23.9999C42.3627 23.9998 42.4232 24.0141 42.478 24.0416C42.5327 24.0691 42.5803 24.1091 42.6167 24.1584C42.6532 24.2076 42.6776 24.2648 42.688 24.3252C42.6984 24.3856 42.6944 24.4476 42.6764 24.5062Z" fill="#315ACA" />
                                    <path d="M17.5574 38.013L16.0574 33.513C16.0322 33.4364 15.9947 33.3644 15.9464 33.3L12.2631 28.3889C11.9294 27.942 11.4376 27.6393 10.8882 27.5427C10.3389 27.4461 9.77334 27.563 9.30723 27.8694C8.84112 28.1758 8.50959 28.6486 8.38039 29.1912C8.25119 29.7339 8.33406 30.3054 8.61208 30.7889L9.71609 32.7225L9.04108 32.3842L6.96283 30.3059L3.58256 23.5454C3.37006 23.1214 3.00598 22.7926 2.5625 22.6244C2.11901 22.4561 1.6285 22.4606 1.18818 22.637C0.747857 22.8133 0.389873 23.1487 0.185184 23.5766C-0.0195044 24.0045 -0.0559572 24.4937 0.0830517 24.9472L2.62931 33.2205C2.65029 33.29 2.68164 33.356 2.72231 33.4162L5.72232 37.9162C5.7772 37.9985 5.8478 38.0691 5.93007 38.124L9.76259 40.6785C9.86527 40.747 9.94946 40.8398 10.0077 40.9487C10.0659 41.0575 10.0964 41.179 10.0963 41.3025V44.25C10.0963 44.4489 10.1754 44.6397 10.316 44.7803C10.4567 44.921 10.6474 45 10.8463 45H17.5964C17.7027 45 17.8078 44.9773 17.9047 44.9336C18.0016 44.8898 18.0881 44.826 18.1585 44.7463C18.2288 44.6666 18.2814 44.5728 18.3128 44.4712C18.3442 44.3696 18.3535 44.2625 18.3404 44.157L17.5904 38.157C17.5846 38.1079 17.5736 38.0596 17.5574 38.013ZM11.5963 43.5V41.3025C11.5973 40.9315 11.5062 40.5661 11.3314 40.2388C11.1565 39.9116 10.9033 39.6329 10.5943 39.4275L6.88707 36.9562L4.03107 32.6745L1.51781 24.5062C1.49988 24.4477 1.4959 24.3858 1.50619 24.3255C1.51649 24.2653 1.54076 24.2082 1.57707 24.159C1.61339 24.1098 1.66072 24.0698 1.71529 24.0421C1.76986 24.0145 1.83015 24.0001 1.89131 23.9999C1.96397 23.9995 2.03528 24.0195 2.09709 24.0577C2.1589 24.0959 2.2087 24.1507 2.24081 24.2159L5.67507 31.0852C5.71127 31.1574 5.75888 31.2232 5.81607 31.2802L8.06608 33.5302C8.12307 33.5874 8.18891 33.635 8.26108 33.6712L11.2611 35.1712C11.4054 35.244 11.5694 35.2682 11.7285 35.2402C11.8877 35.2122 12.0336 35.1336 12.1445 35.016C12.2553 34.8984 12.3252 34.7481 12.3438 34.5875C12.3623 34.427 12.3285 34.2647 12.2473 34.125L9.91409 30.0404C9.8266 29.8883 9.80054 29.7084 9.84124 29.5377C9.88195 29.3669 9.98633 29.2181 10.1331 29.1218C10.2798 29.0254 10.4578 28.9888 10.6307 29.0193C10.8035 29.0498 10.9582 29.1452 11.0631 29.2859L14.6714 34.1025L16.1091 38.4172L16.7466 43.5H11.5963Z" fill="#315ACA" />
                                    <path d="M9.34633 25.4999H34.8464C35.0453 25.4999 35.2361 25.4209 35.3768 25.2803C35.5174 25.1396 35.5964 24.9488 35.5964 24.7499V18.7499C35.5964 18.1532 35.3594 17.5809 34.9374 17.1589C34.5155 16.737 33.9432 16.4999 33.3464 16.4999H33.0599C33.5224 16.0995 33.8515 15.5673 34.003 14.9747C34.1545 14.382 34.1212 13.7572 33.9075 13.184C33.6939 12.6108 33.3101 12.1166 32.8077 11.7676C32.3052 11.4187 31.7081 11.2317 31.0964 11.2317C30.4847 11.2317 29.8876 11.4187 29.3851 11.7676C28.8827 12.1166 28.4989 12.6108 28.2853 13.184C28.0717 13.7572 28.0384 14.382 28.1899 14.9747C28.3413 15.5673 28.6704 16.0995 29.1329 16.4999H28.8464C28.4885 16.5023 28.1364 16.5913 27.8204 16.7594C27.5827 16.2359 27.1995 15.7918 26.7166 15.4799C26.2337 15.1679 25.6713 15.0013 25.0964 14.9999H24.1919C24.7412 14.5648 25.1415 13.9695 25.3371 13.2966C25.5328 12.6237 25.5142 11.9066 25.2838 11.2448C25.0535 10.583 24.6229 10.0093 24.0517 9.60332C23.4805 9.19734 22.7971 8.97921 22.0964 8.97921C21.3956 8.97921 20.7122 9.19734 20.1411 9.60332C19.5699 10.0093 19.1393 10.583 18.9089 11.2448C18.6786 11.9066 18.6599 12.6237 18.8556 13.2966C19.0513 13.9695 19.4515 14.5648 20.0009 14.9999H19.0964C18.5215 15.0013 17.9591 15.1679 17.4761 15.4799C16.9932 15.7918 16.6101 16.2359 16.3724 16.7594C16.0563 16.5913 15.7043 16.5023 15.3464 16.4999H15.0599C15.5224 16.0995 15.8514 15.5673 16.0029 14.9747C16.1544 14.382 16.1211 13.7572 15.9075 13.184C15.6938 12.6108 15.3101 12.1166 14.8076 11.7676C14.3052 11.4187 13.7081 11.2317 13.0963 11.2317C12.4846 11.2317 11.8875 11.4187 11.3851 11.7676C10.8826 12.1166 10.4989 12.6108 10.2852 13.184C10.0716 13.7572 10.0383 14.382 10.1898 14.9747C10.3413 15.5673 10.6703 16.0995 11.1328 16.4999H10.8463C10.2496 16.4999 9.6773 16.737 9.25534 17.1589C8.83339 17.5809 8.59633 18.1532 8.59633 18.7499V24.7499C8.59633 24.9488 8.67535 25.1396 8.816 25.2803C8.95666 25.4209 9.14742 25.4999 9.34633 25.4999ZM31.0964 12.7499C31.3931 12.7499 31.6831 12.8379 31.9298 13.0027C32.1764 13.1675 32.3687 13.4018 32.4822 13.6759C32.5958 13.95 32.6255 14.2516 32.5676 14.5425C32.5097 14.8335 32.3669 15.1008 32.1571 15.3106C31.9473 15.5203 31.68 15.6632 31.389 15.7211C31.0981 15.779 30.7965 15.7492 30.5224 15.6357C30.2483 15.5222 30.014 15.3299 29.8492 15.0833C29.6844 14.8366 29.5964 14.5466 29.5964 14.2499C29.5964 13.8521 29.7544 13.4705 30.0357 13.1892C30.3171 12.9079 30.6986 12.7499 31.0964 12.7499ZM28.0964 18.7499C28.0964 18.551 28.1754 18.3602 28.3161 18.2196C28.4567 18.0789 28.6475 17.9999 28.8464 17.9999H33.3464C33.5453 17.9999 33.7361 18.0789 33.8768 18.2196C34.0174 18.3602 34.0964 18.551 34.0964 18.7499V23.9999H28.0964V18.7499ZM22.0964 10.4999C22.4672 10.4999 22.8297 10.6098 23.1381 10.8159C23.4464 11.0219 23.6867 11.3147 23.8287 11.6573C23.9706 12 24.0077 12.377 23.9354 12.7407C23.863 13.1044 23.6844 13.4385 23.4222 13.7007C23.16 13.9629 22.8259 14.1415 22.4622 14.2139C22.0985 14.2862 21.7215 14.2491 21.3788 14.1072C21.0362 13.9652 20.7434 13.7249 20.5374 13.4166C20.3313 13.1082 20.2214 12.7457 20.2214 12.3749C20.2214 11.8776 20.4189 11.4007 20.7705 11.0491C21.1222 10.6974 21.5991 10.4999 22.0964 10.4999ZM17.5964 17.9999C17.5964 17.6021 17.7544 17.2205 18.0357 16.9392C18.317 16.6579 18.6985 16.4999 19.0964 16.4999H25.0964C25.4942 16.4999 25.8757 16.6579 26.1571 16.9392C26.4384 17.2205 26.5964 17.6021 26.5964 17.9999V23.9999H17.5964V17.9999ZM13.0963 12.7499C13.393 12.7499 13.683 12.8379 13.9297 13.0027C14.1764 13.1675 14.3686 13.4018 14.4822 13.6759C14.5957 13.95 14.6254 14.2516 14.5675 14.5425C14.5097 14.8335 14.3668 15.1008 14.157 15.3106C13.9472 15.5203 13.68 15.6632 13.389 15.7211C13.098 15.779 12.7964 15.7492 12.5223 15.6357C12.2482 15.5222 12.014 15.3299 11.8491 15.0833C11.6843 14.8366 11.5963 14.5466 11.5963 14.2499C11.5963 13.8521 11.7544 13.4705 12.0357 13.1892C12.317 12.9079 12.6985 12.7499 13.0963 12.7499ZM10.0963 18.7499C10.0963 18.551 10.1754 18.3602 10.316 18.2196C10.4567 18.0789 10.6474 17.9999 10.8463 17.9999H15.3464C15.5453 17.9999 15.736 18.0789 15.8767 18.2196C16.0173 18.3602 16.0964 18.551 16.0964 18.7499V23.9999H10.0963V18.7499Z" fill="#315ACA" />
                                    <path d="M4.84632 9.74988V16.4999H6.34632V10.3079L13.3116 8.21837C13.4662 8.17206 13.6017 8.07714 13.698 7.94771C13.7943 7.81827 13.8464 7.66122 13.8463 7.49987V4.06035L15.5661 5.78011L16.6266 4.71961L13.6266 1.7196C13.486 1.57899 13.2952 1.50001 13.0963 1.50001C12.8975 1.50001 12.7067 1.57899 12.5661 1.7196L9.56609 4.71961L10.6266 5.78011L12.3463 4.06035V6.94186L5.38107 9.03137C5.22651 9.07768 5.091 9.1726 4.99467 9.30204C4.89833 9.43147 4.84631 9.58852 4.84632 9.74988Z" fill="#315ACA" />
                                    <path d="M22.8464 6.74986V2.56035L24.5661 4.28011L25.6266 3.2196L22.6266 0.219591C22.486 0.0789868 22.2953 0 22.0964 0C21.8975 0 21.7068 0.0789868 21.5661 0.219591L18.5661 3.2196L19.6266 4.28011L21.3464 2.56035V6.74986H22.8464Z" fill="#315ACA" />
                                    <path d="M33.5662 5.78011L34.6267 4.71961L31.6267 1.7196C31.486 1.57899 31.2953 1.50001 31.0964 1.50001C30.8975 1.50001 30.7068 1.57899 30.5662 1.7196L27.5661 4.71961L28.6267 5.78011L30.3464 4.06035V7.49987C30.3465 7.65721 30.3961 7.81054 30.4882 7.93814C30.5803 8.06573 30.7101 8.16115 30.8594 8.21087L37.0964 10.2906V16.4999H38.5964V9.74988C38.5963 9.59253 38.5467 9.43921 38.4546 9.31161C38.3626 9.18401 38.2327 9.08859 38.0834 9.03887L31.8464 6.95912V4.06035L33.5662 5.78011Z" fill="#315ACA" />
                                </svg>
                            </div>
                            <h5 class="title">FinTech Services</h5>
                            <p class="disc">
                                Purus dui eget sollicitudin curae leo proin platea cras, morbi torquent massa
                            </p>
                            <a href="#" class="rts-btn btn-primary-2">Read More</a>
                        </div>
                        <!-- single inner service aarea end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- awesome startupo service area end -->



        <!-- cta area start -->
        <div class="cta-area--ten cta-ten-bg bg_image rts-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12"></div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="cta-main-wrapper-ten">
                            <h2 class="title">Get a Free Consultancy <br>
                                <span>Right Now Here!</span>
                            </h2>

                            <div class="callto-action-contact-area">
                                <a href="#" class="rts-btn btn-primary-2">Make Appointment</a>
                                <div class="call-area">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                            <path d="M14.2251 11.5362C13.7279 11.5914 13.3688 12.061 13.3965 12.5858C13.4517 13.083 13.8936 13.4697 14.4461 13.4144C14.9985 13.3592 15.5509 13.5249 15.9376 13.9116C16.352 14.3259 16.5177 14.8784 16.4624 15.4308C16.4072 15.9832 16.7939 16.4252 17.2911 16.4804C17.5949 16.508 17.8711 16.3975 18.0645 16.2042C18.2026 16.0661 18.3131 15.8451 18.3407 15.6518C18.4512 14.4917 18.0645 13.3868 17.2635 12.5858C16.4901 11.8124 15.3852 11.4257 14.2251 11.5362ZM13.866 7.80729C13.3136 7.86253 12.9545 8.3321 13.0098 8.82928C13.0374 9.35409 13.507 9.71317 14.0318 9.68554C15.7443 9.51982 17.3739 10.0999 18.5617 11.2876C19.7218 12.4477 20.3294 14.105 20.1637 15.8175C20.1085 16.3147 20.4675 16.7842 20.9923 16.8119C21.2962 16.8395 21.5448 16.7566 21.7381 16.5633C21.9038 16.3975 21.9867 16.2042 22.042 15.9832C22.2905 13.7459 21.5171 11.5362 19.9151 9.93414C18.3131 8.3321 16.131 7.58632 13.866 7.80729ZM13.507 4.07841C12.9821 4.10603 12.6231 4.57559 12.6507 5.1004C12.7059 5.59758 13.1479 5.98428 13.6727 5.95666C16.4901 5.68045 19.2522 6.61957 21.2409 8.60831C23.202 10.5694 24.1688 13.3592 23.8926 16.1766C23.865 16.7014 24.2517 17.1433 24.7488 17.1986C25.0527 17.2262 25.3289 17.1157 25.5222 16.9223C25.6603 16.7842 25.7432 16.5909 25.7708 16.3423C26.1299 13.0001 24.9698 9.68554 22.5668 7.28249C20.1361 4.85181 16.8768 3.74695 13.507 4.07841ZM10.3581 15.0165C10.662 14.7679 10.8001 14.2983 10.6343 13.9116L9.22564 10.6799C9.05991 10.238 8.56273 10.017 8.14841 10.0999L5.11006 10.818C4.69574 10.9009 4.3919 11.3152 4.3919 11.7571C4.3919 19.3254 10.5515 25.485 18.1197 25.485C18.5617 25.485 18.976 25.1811 19.0588 24.7668L19.777 21.7285C19.8599 21.3141 19.6389 20.817 19.197 20.6512L15.9653 19.2425C15.5786 19.0768 15.109 19.2149 14.8604 19.5187L13.5346 21.1208C11.4353 20.1264 9.75045 18.4415 8.75608 16.3423L10.3581 15.0165Z" fill="#0B4DF5"></path>
                                        </svg>
                                    </div>
                                    <div class="number-area">
                                        <span>Need Help?</span>
                                        <a href="tel:123-456-7890">
                                            <h6 class="call">+256 21458.2146</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cta area end -->

        <!-- why choose us section start -->
        <div class="why-choose-us-section-10 rts-section-gap bg-experience-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="experience-ten-area-left">
                            <div class="title-area-left-ten">
                                <span class="pre-title">Why Should Your Choose Us?</span>
                                <h2 class="title">
                                    All-in-one, next-gen <br>
                                    <span>shopping experience</span>
                                </h2>
                                <p class="disc">Nunc dolor faucibus elementum iaculis ultricies habitant pretium, neque. Et faucibus sem felis sit vitae vel quis molestie.</p>
                            </div>
                            <div class="rts-progress-ten-wrapper">
                                <!-- single progress -->
                                <div class="single-progress-area-10">
                                    <div class="progress-top">
                                        <p class="name">
                                            Business Development
                                        </p>
                                        <span class="parcent">
                                            85%
                                        </span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- single progress -->
                                <!-- single progress -->
                                <div class="single-progress-area-10">
                                    <div class="progress-top">
                                        <p class="name">
                                            Client Management
                                        </p>
                                        <span class="parcent">
                                            85%
                                        </span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- single progress -->
                                <!-- single progress -->
                                <div class="single-progress-area-10">
                                    <div class="progress-top">
                                        <p class="name">
                                            Customer Satisfaction
                                        </p>
                                        <span class="parcent">
                                            85%
                                        </span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- single progress -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="experience-ten-area-right">
                            <!-- sigle experience start -->
                            <div class="single-experience-ten-list">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41" fill="none">
                                        <path d="M39.9706 33.0917L31.238 26.5409L30.7103 27.0687L28.0623 24.4202C32.358 18.3823 31.8171 9.93525 26.4069 4.52437C20.3749 -1.50776 10.5613 -1.50849 4.53107 4.52437C1.60901 7.44626 0 11.3314 0 15.4637C0 19.597 1.60901 23.4822 4.53071 26.4041C7.4524 29.3267 11.3368 30.936 15.4686 30.936C18.7283 30.936 21.8255 29.9205 24.4257 28.0634L27.0707 30.7086L26.543 31.2364L33.0926 39.9714C33.54 40.5682 34.2235 40.9409 34.968 40.9934C35.0293 40.9978 35.0906 41 35.1516 41C35.8315 41 36.4862 40.7317 36.9708 40.247L40.2461 36.9703C40.7742 36.4425 41.0464 35.7125 40.9935 34.9675C40.9402 34.2233 40.5673 33.5389 39.9706 33.0917ZM5.73829 25.1959C3.13956 22.5963 1.70828 19.1408 1.70828 15.4648C1.70828 11.788 3.13956 8.33213 5.73902 5.73254C8.42131 3.04937 11.9448 1.70796 15.4686 1.70796C18.9925 1.70796 22.5163 3.04937 25.199 5.73254C30.5639 11.0985 30.5639 19.8299 25.199 25.1959C22.5999 27.7958 19.1443 29.2274 15.4686 29.2274C11.793 29.2274 8.33774 27.7958 5.73829 25.1959ZM27.0627 25.8368L29.502 28.2762L28.2783 29.5001L25.8387 27.0607L27.0627 25.8368ZM39.0385 35.7625L35.7636 39.0388C35.5833 39.218 35.349 39.3089 35.0895 39.2892C34.8355 39.2717 34.6115 39.149 34.4589 38.9461L28.7984 31.3966L31.3982 28.7967L38.9458 34.4583C39.1495 34.6113 39.2714 34.8354 39.2892 35.0891C39.3075 35.3427 39.2184 35.5822 39.0385 35.7625Z" fill="#315ACA" />
                                        <path d="M25.8475 15.4648L25.607 15.0417C25.0512 14.0664 24.3348 13.1871 23.4787 12.4286C19.0614 8.51829 11.8758 8.51829 7.45934 12.4286C6.60283 13.1871 5.88645 14.0664 5.33065 15.0417L5.08979 15.4648L5.33102 15.8878C5.88755 16.8646 6.60356 17.7431 7.45934 18.5005C9.66721 20.4555 12.5681 21.4323 15.4686 21.4323C18.3695 21.4323 21.2701 20.4555 23.4783 18.5005C24.3341 17.7431 25.0501 16.8646 25.6066 15.8878L25.8475 15.4648ZM22.3463 17.2208C18.5535 20.5782 12.3831 20.5782 8.59137 17.2208C8.00236 16.6996 7.49291 16.1105 7.0725 15.4648C7.49255 14.8191 8.002 14.2299 8.59174 13.7083C12.3845 10.3495 18.5549 10.3503 22.3463 13.7083C22.9356 14.2299 23.4447 14.8191 23.8648 15.4648C23.4444 16.1105 22.9353 16.6996 22.3463 17.2208Z" fill="#315ACA" />
                                        <path d="M15.4686 12.0472C13.5848 12.0472 12.0521 13.5799 12.0521 15.4648C12.0521 17.3493 13.5848 18.882 15.4686 18.882C17.3528 18.882 18.8855 17.3493 18.8855 15.4648C18.8855 13.5799 17.3528 12.0472 15.4686 12.0472ZM15.4686 17.1734C14.5267 17.1734 13.7604 16.4065 13.7604 15.4648C13.7604 14.5227 14.5267 13.7562 15.4686 13.7562C16.4109 13.7562 17.1769 14.5227 17.1769 15.4648C17.1769 16.4065 16.4109 17.1734 15.4686 17.1734Z" fill="#315ACA" />
                                    </svg>
                                </div>
                                <div class="information">
                                    <h5 class="title">Transparency and Trust</h5>
                                    <p class="disc">
                                        With FINBIZ, you can expect open communication, honesty, and integrity in all our interactions. Your trust is of utmost importance to us,
                                    </p>
                                </div>
                            </div>
                            <!-- sigle experience end -->
                            <!-- sigle experience start -->
                            <div class="single-experience-ten-list">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="42" viewBox="0 0 41 42" fill="none">
                                        <path d="M13.8241 11.6968L13.1057 11.9542C11.9968 12.3518 11.1695 13.3107 10.9466 14.4576L10.7028 15.7206C10.5811 16.3461 10.7468 16.9868 11.1574 17.4781C11.5682 17.9698 12.1739 18.2519 12.819 18.2519H19.0468C19.6869 18.2519 20.2896 17.9735 20.7003 17.4882C21.1107 17.0034 21.2814 16.3685 21.1688 15.7465L20.9414 14.4902C20.7307 13.3252 19.9007 12.3507 18.7751 11.9469L18.0134 11.6739V10.5641C18.0134 10.5329 18.0103 10.5025 18.0058 10.4726C18.5614 9.91331 18.8797 9.15067 18.8797 8.37039V6.71672C18.8797 5.10251 17.5513 3.78927 15.9184 3.78927C14.2856 3.78927 12.9569 5.10251 12.9569 6.71672V8.4219C12.9569 9.224 13.2914 9.9563 13.8294 10.4881C13.8262 10.513 13.8241 10.5382 13.8241 10.564V11.6968ZM19.716 14.7067L19.9434 15.9632C19.991 16.2258 19.9189 16.4938 19.7456 16.6985C19.572 16.9036 19.3173 17.0213 19.0467 17.0213H12.8188C12.5462 17.0213 12.2904 16.9022 12.1168 16.6944C11.9435 16.4871 11.8736 16.2168 11.925 15.952L12.1688 14.6891C12.3093 13.9662 12.8309 13.3616 13.5296 13.1111L14.0002 12.9426C14.012 12.9545 14.0239 12.9666 14.0366 12.9777C14.5729 13.4412 15.2456 13.673 15.9187 13.673C16.591 13.673 17.2635 13.4416 17.7998 12.979C17.8191 12.9623 17.8369 12.9444 17.8538 12.9257L18.3503 13.1036C19.06 13.3581 19.5833 13.9723 19.716 14.7067ZM14.2015 6.71672C14.2015 5.78107 14.9716 5.01974 15.9182 5.01974C16.7171 5.01974 17.3883 5.56279 17.5789 6.2945C17.4989 6.33314 17.4169 6.36964 17.3328 6.40287C16.5676 6.70573 15.9496 6.66553 15.7729 6.54314C15.4914 6.34807 15.1035 6.41534 14.9061 6.69359C14.7087 6.97184 14.7769 7.35541 15.0582 7.55057C15.3622 7.7613 15.7747 7.86663 16.2455 7.86663C16.6733 7.86663 17.1491 7.77878 17.6349 7.60495V8.37022C17.6349 8.84051 17.4382 9.30103 17.0951 9.63367C16.9363 9.78772 16.7543 9.90708 16.5589 9.98944C16.5452 9.99461 16.5318 10.0002 16.5186 10.0063C16.3179 10.0848 16.1035 10.1242 15.8843 10.1186C14.9563 10.1009 14.2015 9.33975 14.2015 8.42182V6.71672ZM15.8604 11.3489C15.8794 11.3493 15.8983 11.3494 15.9173 11.3494C16.2093 11.3494 16.4954 11.306 16.7687 11.2228V12.2071C16.25 12.5232 15.587 12.5231 15.0689 12.2066V11.2246C15.3207 11.3 15.586 11.3437 15.8604 11.3489Z" fill="#315ACA" />
                                        <path d="M6.12754 28.7851H25.508C25.8518 28.7851 26.1303 28.5097 26.1303 28.1699C26.1303 27.83 25.8518 27.5546 25.508 27.5546H6.12754C5.78378 27.5546 5.50523 27.83 5.50523 28.1699C5.50523 28.5097 5.78378 28.7851 6.12754 28.7851Z" fill="#315ACA" />
                                        <path d="M6.12754 32.1025H25.508C25.8518 32.1025 26.1303 31.8271 26.1303 31.4873C26.1303 31.1474 25.8518 30.8721 25.508 30.8721H6.12754C5.78378 30.8721 5.50523 31.1474 5.50523 31.4873C5.50523 31.8271 5.78378 32.1025 6.12754 32.1025Z" fill="#315ACA" />
                                        <path d="M6.12754 35.4198H25.508C25.8518 35.4198 26.1303 35.1444 26.1303 34.8045C26.1303 34.4647 25.8518 34.1893 25.508 34.1893H6.12754C5.78378 34.1893 5.50523 34.4647 5.50523 34.8045C5.50523 35.1444 5.78378 35.4198 6.12754 35.4198Z" fill="#315ACA" />
                                        <path d="M6.12754 38.7372H25.508C25.8518 38.7372 26.1303 38.4618 26.1303 38.122C26.1303 37.7821 25.8518 37.5067 25.508 37.5067H6.12754C5.78378 37.5067 5.50523 37.7821 5.50523 38.122C5.50523 38.4618 5.78378 38.7372 6.12754 38.7372Z" fill="#315ACA" />
                                        <path d="M5.50523 21.5352C5.50523 21.875 5.78378 22.1504 6.12754 22.1504H25.508C25.8518 22.1504 26.1303 21.875 26.1303 21.5352C26.1303 21.1953 25.8518 20.9199 25.508 20.9199H6.12754C5.78378 20.9199 5.50523 21.1954 5.50523 21.5352Z" fill="#315ACA" />
                                        <path d="M6.12754 25.4677H25.508C25.8518 25.4677 26.1303 25.1924 26.1303 24.8525C26.1303 24.5127 25.8518 24.2373 25.508 24.2373H6.12754C5.78378 24.2373 5.50523 24.5127 5.50523 24.8525C5.50523 25.1924 5.78378 25.4677 6.12754 25.4677Z" fill="#315ACA" />
                                        <path d="M3.82955 28.7874C4.17456 28.7874 4.45427 28.5109 4.45427 28.1699C4.45427 27.8289 4.17456 27.5523 3.82955 27.5523C3.48454 27.5523 3.20491 27.8288 3.20491 28.1699C3.20491 28.5109 3.48462 28.7874 3.82955 28.7874Z" fill="#315ACA" />
                                        <path d="M3.82955 22.1527C4.17456 22.1527 4.45427 21.8763 4.45427 21.5352C4.45427 21.1941 4.17456 20.9176 3.82955 20.9176C3.48454 20.9176 3.20491 21.1941 3.20491 21.5352C3.20491 21.8763 3.48462 22.1527 3.82955 22.1527Z" fill="#315ACA" />
                                        <path d="M3.82955 25.47C4.17456 25.47 4.45427 25.1936 4.45427 24.8525C4.45427 24.5114 4.17456 24.235 3.82955 24.235C3.48454 24.235 3.20491 24.5114 3.20491 24.8525C3.20491 25.1936 3.48462 25.47 3.82955 25.47Z" fill="#315ACA" />
                                        <path d="M3.82955 32.1047C4.17456 32.1047 4.45427 31.8283 4.45427 31.4872C4.45427 31.1461 4.17456 30.8697 3.82955 30.8697C3.48454 30.8697 3.20491 31.1461 3.20491 31.4872C3.20491 31.8283 3.48462 32.1047 3.82955 32.1047Z" fill="#315ACA" />
                                        <path d="M3.82955 35.4222C4.17456 35.4222 4.45427 35.1457 4.45427 34.8046C4.45427 34.4635 4.17456 34.1871 3.82955 34.1871C3.48454 34.1871 3.20491 34.4635 3.20491 34.8046C3.20491 35.1456 3.48462 35.4222 3.82955 35.4222Z" fill="#315ACA" />
                                        <path d="M3.82955 38.7395C4.17456 38.7395 4.45427 38.4631 4.45427 38.122C4.45427 37.781 4.17456 37.5044 3.82955 37.5044C3.48454 37.5044 3.20491 37.7809 3.20491 38.122C3.20491 38.463 3.48462 38.7395 3.82955 38.7395Z" fill="#315ACA" />
                                        <path d="M39.099 9.68961C38.8479 9.37543 38.6106 9.07856 38.4959 8.80507C38.3721 8.50984 38.3233 8.11978 38.2717 7.70667C38.1811 6.98299 38.0786 6.16276 37.4996 5.59043C36.9206 5.0181 36.0908 4.91671 35.3588 4.82721C34.9409 4.77619 34.5462 4.72795 34.2476 4.60556C33.9708 4.49211 33.6706 4.25767 33.3527 4.00936C32.9154 3.6677 32.4344 3.29257 31.8657 3.12236V2.93623C31.8658 1.31726 30.5333 0 28.8954 0H2.97034C1.3325 0 0 1.31726 0 2.93631V5.31103C0 5.65089 0.278547 5.92627 0.622313 5.92627C0.966079 5.92627 1.24463 5.65089 1.24463 5.31103V2.93631C1.24463 1.99566 2.01878 1.23047 2.97034 1.23047H28.8954C29.847 1.23047 30.6211 1.99566 30.6211 2.93631V3.12252C30.0526 3.29282 29.5717 3.66778 29.1344 4.00944C28.8165 4.25767 28.5163 4.4922 28.2397 4.60564C27.941 4.72795 27.5463 4.77619 27.1284 4.82729C26.3964 4.91671 25.5667 5.0181 24.9876 5.59043C24.4085 6.16284 24.306 6.98307 24.2155 7.70675C24.1638 8.11978 24.115 8.50992 23.9912 8.80515C23.8765 9.07864 23.6393 9.37552 23.3881 9.6897C22.9231 10.2714 22.3962 10.9307 22.3962 11.7747C22.3962 12.6187 22.9232 13.278 23.3881 13.8597C23.6392 14.1739 23.8765 14.4707 23.9912 14.7442C24.115 15.0394 24.1638 15.4295 24.2155 15.8427C24.306 16.5663 24.4085 17.3865 24.9875 17.9589C25.5665 18.5313 26.3963 18.6326 27.1283 18.7221C27.3465 18.7487 27.558 18.7749 27.7533 18.811V28.1106C27.7533 28.4751 27.959 28.8006 28.2904 28.9601C28.6216 29.1198 29.0077 29.0793 29.2982 28.8544L30.621 27.8304V39.0638C30.621 40.0044 29.8469 40.7696 28.8953 40.7696H2.97034C2.01878 40.7696 1.24463 40.0044 1.24463 39.0638V8.02028C1.24463 7.68042 0.966079 7.40504 0.622313 7.40504C0.278547 7.40504 0 7.68042 0 8.02028V39.0637C0 40.6827 1.3325 42 2.97034 42H28.8954C30.5333 42 31.8657 40.6827 31.8657 39.0637V27.8303L33.1886 28.8542C33.3613 28.988 33.5679 29.0565 33.7768 29.0565C33.9192 29.0565 34.0626 29.0246 34.197 28.9599C34.5284 28.8004 34.7344 28.4749 34.7344 28.1105V21.2448C34.7344 20.9049 34.4558 20.6295 34.1121 20.6295C33.7683 20.6295 33.4897 20.9049 33.4897 21.2448V27.5247L31.8355 26.2443C31.6683 26.1134 31.458 26.0413 31.2434 26.0413C31.0287 26.0413 30.8184 26.1134 30.6539 26.2421L28.9978 27.524V19.4337C29.0429 19.4686 29.0883 19.504 29.1343 19.5398C29.7228 19.9995 30.3897 20.5204 31.2435 20.5204C32.0973 20.5204 32.7642 19.9995 33.3527 19.5399C33.6705 19.2917 33.9708 19.0571 34.2475 18.9436C34.5461 18.8213 34.9408 18.7731 35.3588 18.722C36.0908 18.6326 36.9204 18.5312 37.4996 17.9589C38.0785 17.3864 38.1811 16.5662 38.2716 15.8426C38.3233 15.4295 38.3721 15.0394 38.4959 14.7441C38.6106 14.4706 38.8479 14.1738 39.099 13.8596C39.564 13.2779 40.0909 12.6186 40.0909 11.7746C40.0909 10.9306 39.5639 10.2713 39.099 9.68961ZM38.1225 13.0967C37.8298 13.463 37.5271 13.8416 37.3463 14.2728C37.1577 14.7223 37.096 15.2151 37.0364 15.6916C36.9642 16.2696 36.896 16.8155 36.6196 17.0887C36.3433 17.3618 35.791 17.4293 35.2062 17.5007C34.7242 17.5596 34.2258 17.6205 33.7709 17.8069C33.3348 17.9857 32.9518 18.2848 32.5813 18.5743C32.1101 18.9422 31.6651 19.2898 31.2437 19.2898C30.8223 19.2898 30.3773 18.9422 29.906 18.5743C29.5356 18.2849 29.1525 17.9857 28.7164 17.8069C28.6864 17.7946 28.5822 17.7554 28.5597 17.7485C28.1484 17.6071 27.7084 17.5529 27.281 17.5007C26.6963 17.4293 26.144 17.3617 25.8676 17.0886C25.5914 16.8155 25.5231 16.2696 25.4509 15.6917C25.3913 15.2151 25.3297 14.7225 25.1411 14.2728C24.9602 13.8416 24.6576 13.463 24.3649 13.0967C23.9927 12.6309 23.6411 12.1911 23.6411 11.7746C23.6411 11.3581 23.9927 10.9183 24.3649 10.4525C24.6576 10.0862 24.9603 9.70758 25.1411 9.27642C25.3297 8.82689 25.3914 8.33413 25.4509 7.85761C25.5231 7.27962 25.5914 6.7337 25.8677 6.46054C26.1441 6.18737 26.6964 6.11994 27.2811 6.04849C27.7632 5.98959 28.2616 5.92873 28.7164 5.74227C29.1525 5.56352 29.5356 5.26436 29.906 4.97495C30.3763 4.6077 30.8205 4.26087 31.2412 4.25955C31.2419 4.25955 31.2428 4.25964 31.2435 4.25964C31.2444 4.25964 31.2452 4.25955 31.246 4.25955C31.6668 4.26079 32.111 4.6077 32.5813 4.97495C32.9518 5.26427 33.3348 5.56352 33.7709 5.74227C34.2257 5.92873 34.7242 5.98968 35.2063 6.04849C35.791 6.11994 36.3433 6.18745 36.6196 6.46062C36.896 6.73378 36.9642 7.27962 37.0365 7.85761C37.0961 8.33413 37.1577 8.82681 37.3463 9.27642C37.5271 9.70758 37.8298 10.0862 38.1225 10.4525C38.4946 10.9183 38.8463 11.3581 38.8463 11.7746C38.8463 12.1911 38.4947 12.631 38.1225 13.0967Z" fill="#315ACA" />
                                        <path d="M35.2389 9.81947L33.1212 9.22712L31.8968 7.41915C31.7505 7.20325 31.5064 7.07446 31.2436 7.07446C30.9808 7.07446 30.7366 7.20333 30.5904 7.41915L29.366 9.22712L27.2481 9.81955C26.9952 9.89034 26.7957 10.0802 26.7146 10.3273C26.6334 10.5744 26.682 10.8439 26.8445 11.0478L28.2056 12.7576L28.1211 14.9312C28.1109 15.1909 28.2317 15.4371 28.4444 15.59C28.5808 15.688 28.7426 15.7387 28.9061 15.7387C28.9975 15.7387 29.0895 15.7228 29.1778 15.6907L31.2434 14.9394L33.3089 15.6906C33.5556 15.7805 33.8297 15.7428 34.0424 15.5901C34.255 15.4375 34.376 15.1913 34.3659 14.9315L34.2814 12.7575L35.6425 11.0477C35.805 10.8435 35.8535 10.5742 35.7723 10.3272C35.6914 10.0801 35.4919 9.89026 35.2389 9.81947ZM33.1988 12.1281C33.0838 12.2728 33.0243 12.4537 33.0314 12.6382L33.0959 14.3021L31.515 13.7272C31.3399 13.6635 31.1469 13.6635 30.9721 13.7271L29.391 14.3021L29.4557 12.6377C29.4626 12.4538 29.403 12.2729 29.2878 12.1277L28.2461 10.8191L29.8674 10.3657C30.0467 10.3154 30.2026 10.2034 30.3062 10.0503L31.2434 8.66644L32.1806 10.0501C32.2843 10.2033 32.4402 10.3153 32.6198 10.3658L34.2407 10.8191L33.1988 12.1281Z" fill="#315ACA" />
                                    </svg>
                                </div>
                                <div class="information">
                                    <h5 class="title">Expertise That Matters</h5>
                                    <p class="disc">
                                        With FINBIZ, you can expect open communication, honesty, and integrity in all our interactions. Your trust is of utmost importance to us,
                                    </p>
                                </div>
                            </div>
                            <!-- sigle experience end -->
                            <!-- sigle experience start -->
                            <div class="single-experience-ten-list">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" viewBox="0 0 50 40" fill="none">
                                        <path d="M46.4471 24.1364L45.0827 23.8449L36.1379 8.85692L36.4672 7.53768L49.0244 0L50 1.64932L38.2652 8.69402L46.1897 21.9727L48.6637 20.2253L49.7585 21.7975L46.4471 24.1364Z" fill="#315ACA" />
                                        <path d="M3.55289 24.1364L0.241505 21.7975L1.33626 20.2253L3.81035 21.9727L11.7348 8.69402L0 1.64932L0.975594 0L13.5328 7.53768L13.8621 8.85692L4.91734 23.8449L3.55289 24.1364Z" fill="#315ACA" />
                                        <path d="M39.1243 30.6592C38.6009 30.6592 38.0806 30.5253 37.6194 30.2718L29.9024 26.0569L30.811 24.369L38.5306 28.585C39.0424 28.8652 39.7025 28.7355 40.0685 28.2988C40.4425 27.853 40.4616 27.1918 40.1132 26.7278C40.0552 26.6549 39.9914 26.5868 39.9254 26.5311L33.3399 20.9289L26.7214 16.7917C26.2394 16.4905 25.6463 16.4128 25.0979 16.5789L23.01 17.2176L20.7609 19.705C19.922 20.6342 18.723 21.1673 17.4708 21.1673C16.9564 21.1673 16.45 21.0784 15.9659 20.9026C15.2228 20.6352 14.636 20.0528 14.3589 19.3047C14.0807 18.5551 14.1451 17.7251 14.535 17.028L17.7799 11.2275L18.3182 10.7838C21.4769 9.75606 24.667 9.10448 28.072 8.79208L28.3986 8.81941L35.5267 10.6916L37.995 9.75874L38.6642 11.557L35.9135 12.5966L35.3384 12.6266L28.0795 10.72C25.0064 11.0131 22.1147 11.5956 19.2587 12.4974L16.1957 17.9705C16.0409 18.2481 16.0973 18.5042 16.1446 18.6328C16.192 18.7598 16.3149 18.9886 16.6096 19.0947C17.5697 19.4435 18.6757 19.1601 19.3507 18.4126L21.7769 15.7291L22.2046 15.4569L24.5473 14.7399C25.6224 14.4163 26.7794 14.5695 27.7257 15.1589L34.5166 19.4162L41.1532 25.0618C41.3154 25.199 41.4691 25.3598 41.6202 25.5516C42.5293 26.762 42.4846 28.3948 41.5245 29.5393C40.926 30.2514 40.0515 30.6592 39.1243 30.6592Z" fill="#315ACA" />
                                        <path d="M41.4356 26.9239L40.3111 25.3731C41.8442 24.2457 43.2059 22.9206 44.3592 21.4347L45.8614 22.6179C44.5997 24.2431 43.1102 25.692 41.4356 26.9239Z" fill="#315ACA" />
                                        <path d="M36.064 34.184C35.5539 34.184 35.0421 34.0522 34.5841 33.8035L27.2571 29.8276L28.1614 28.1365L35.4895 32.113C35.9964 32.39 36.6151 32.2614 36.9811 31.8386C37.1955 31.5894 37.2987 31.2679 37.2694 30.9362C37.2407 30.6046 37.0832 30.3061 36.8263 30.0966L35.8177 29.2687L37.022 27.7801L38.0285 28.6064C38.6881 29.1444 39.0935 29.9123 39.1685 30.7669C39.2435 31.6216 38.978 32.45 38.4205 33.0984C37.8226 33.7891 36.9646 34.184 36.064 34.184Z" fill="#315ACA" />
                                        <path d="M33.1409 37.4146C32.7218 37.4146 32.2946 37.3197 31.9047 37.1397L24.8292 33.8293L25.6325 32.0878L32.7031 35.3961C33.1154 35.5852 33.6149 35.4796 33.9059 35.156C34.2841 34.7391 34.2671 34.1052 33.8697 33.7108L33.242 33.0844L34.5836 31.7202L35.2092 32.3444C36.339 33.4649 36.3864 35.2685 35.3156 36.4495C34.7634 37.062 33.9697 37.4146 33.1409 37.4146Z" fill="#315ACA" />
                                        <path d="M28.9396 39.7948C28.5896 39.7953 28.2348 39.7401 27.8874 39.6254C26.0671 39.0307 24.0755 38.2617 21.8003 37.2763L22.5536 35.5123C24.7739 36.4742 26.7118 37.2222 28.4779 37.7993C29.1327 38.0152 29.8434 37.7463 30.2115 37.1472L30.3376 36.9484C30.5105 36.6692 30.5839 36.3365 30.545 35.9951L32.4388 35.7754C32.5265 36.5417 32.3526 37.3224 31.9499 37.9734L31.8254 38.1696C31.1929 39.2 30.0913 39.7948 28.9396 39.7948Z" fill="#315ACA" />
                                        <path d="M18.1256 13.0927C15.1494 12.3549 12.8264 11.3073 11.7066 10.749L12.5524 9.02785C13.6025 9.5519 15.7819 10.5341 18.581 11.228L18.1256 13.0927Z" fill="#315ACA" />
                                        <path d="M6.85469 27.1189C5.78441 25.9229 4.63221 24.1723 3.85344 22.9142L5.47163 21.8982C6.07539 22.8745 7.24248 24.6841 8.27074 25.834L6.85469 27.1189Z" fill="#315ACA" />
                                        <path d="M8.71226 31.6827C7.66113 31.6827 6.64883 31.1404 6.12167 30.1845L6.08603 30.1121C5.73388 29.4605 5.66792 28.6187 5.92112 27.8359C6.15092 27.143 6.47967 26.4829 6.90097 25.8672C7.33132 25.2242 7.88933 24.5865 8.55374 23.9794C9.13995 23.4447 9.90223 23.1628 10.6853 23.1885C11.5156 23.2137 12.305 23.5888 12.8503 24.2173C13.5328 25.0098 13.7599 26.1201 13.445 27.1184L11.6279 26.5365C11.7428 26.1721 11.6603 25.7665 11.4124 25.4787C11.214 25.2499 10.9342 25.1175 10.6273 25.1079C10.3363 25.1106 10.0522 25.2033 9.83361 25.4026C9.28357 25.9052 8.8261 26.4261 8.47607 26.9491C8.15105 27.4238 7.90263 27.9221 7.73188 28.4371C7.64304 28.7109 7.66006 29.0088 7.77816 29.2285L7.80369 29.2794C8.09147 29.8013 8.7846 29.8764 9.25165 29.6283L10.1368 31.329C9.68253 31.5691 9.19314 31.6827 8.71226 31.6827Z" fill="#315ACA" />
                                        <path d="M19.1677 40C19.0767 40 18.9853 39.9963 18.8943 39.9877C17.941 39.9019 17.1197 39.3865 16.641 38.5741L16.6484 38.5693L16.5952 38.4975C16.2303 37.8706 16.1399 37.0314 16.3697 36.2357C16.5564 35.5997 16.8341 34.9797 17.1963 34.3881L18.8188 35.3966C18.5453 35.8435 18.3368 36.3075 18.199 36.7758C18.116 37.0641 18.1389 37.3546 18.2629 37.5684L18.2613 37.5694L18.2804 37.5935C18.5028 37.9713 18.8666 38.057 19.064 38.0747C19.4369 38.1096 19.8055 37.9606 20.0481 37.6787C20.5806 37.0641 21.0205 36.4179 21.3806 35.8665C21.5535 35.6007 21.7269 35.328 21.9009 35.0547C22.169 34.6319 22.1216 34.0811 21.7844 33.7173C21.3742 33.2661 20.6364 33.2591 20.2055 33.6824C20.1428 33.7408 20.1055 33.7789 20.0678 33.8196L18.6613 32.5239C18.7374 32.4393 18.814 32.3627 18.8969 32.286C19.4427 31.7497 20.1922 31.4421 20.9848 31.4421C21.8205 31.4421 22.6217 31.7963 23.1839 32.413C24.109 33.4129 24.2441 34.9267 23.5068 36.0894C23.3291 36.3697 23.1515 36.6478 22.9743 36.9205C22.5775 37.5276 22.0913 38.2408 21.4865 38.939C20.9061 39.6137 20.0539 40 19.1677 40Z" fill="#315ACA" />
                                        <path d="M11.289 34.648C11.0693 34.648 10.8518 34.6266 10.639 34.5832C9.70434 34.3903 8.97025 33.7773 8.62502 32.9017L8.62927 32.9001L8.61225 32.8551L8.60693 32.8572C8.23989 31.9018 8.34043 30.813 8.86971 30.0167C9.74796 28.6954 10.7826 27.4447 11.7837 26.2353C12.0226 25.9465 12.2609 25.6588 12.4965 25.371C13.079 24.6583 13.9041 24.2291 14.8196 24.1605C15.7095 24.0909 16.5771 24.3786 17.1968 24.9413C17.3453 25.0763 17.4724 25.2183 17.5852 25.3764C18.4416 26.5649 18.3049 28.3487 17.2516 29.7119C16.2888 30.9566 15.3276 32.1992 14.1802 33.3658L14.1791 33.3663C13.3695 34.1872 12.3077 34.648 11.289 34.648ZM10.3868 32.1708L10.3964 32.1923C10.5065 32.4709 10.7108 32.6375 11.0214 32.7013C11.5906 32.8192 12.2981 32.5486 12.8269 32.0128C13.894 30.9282 14.7781 29.7847 15.7143 28.5748C16.2739 27.8503 16.3973 26.9967 16.0409 26.5022C16.0058 26.4529 15.9675 26.4111 15.9202 26.3677C15.692 26.1603 15.3239 26.0467 14.96 26.0762C14.6834 26.0965 14.286 26.2026 13.9679 26.5922C13.7301 26.8826 13.4897 27.1736 13.2482 27.4651C12.2784 28.6364 11.2763 29.8474 10.4539 31.0847C10.2421 31.4035 10.2666 31.8563 10.3847 32.1639L10.3868 32.1708Z" fill="#315ACA" />
                                        <path d="M14.8025 38.0388C14.5972 38.0388 14.3929 38.0195 14.1924 37.9815C13.2301 37.7966 12.4598 37.1831 12.079 36.2984L12.0609 36.2539L12.0593 36.2545C11.7321 35.4743 11.7651 34.5167 12.1502 33.6262C12.8508 31.9897 14.0051 30.4888 15.6787 29.0415C17.0367 27.867 18.9533 27.7952 20.138 28.8706C20.2843 29.0035 20.4093 29.1417 20.521 29.2928C21.395 30.4669 21.3173 32.1939 20.3295 33.4885L20.2954 33.5329C19.4417 34.6502 18.5581 35.806 17.4889 36.8841L17.4878 36.8852C16.7537 37.6235 15.7664 38.0388 14.8025 38.0388ZM13.8163 35.5091L13.828 35.5343C13.9918 35.9142 14.311 36.0487 14.5499 36.0948C15.0807 36.1961 15.6898 35.979 16.1409 35.5263C17.1229 34.5355 17.9304 33.4794 18.7847 32.3616L18.8182 32.3176C19.2863 31.7041 19.3581 30.932 18.9927 30.4411C18.9544 30.3892 18.9134 30.3441 18.8613 30.297C18.3863 29.8651 17.5522 29.9519 16.9213 30.4979C15.4723 31.7513 14.4839 33.0244 13.8998 34.3897C13.7232 34.7975 13.6924 35.2139 13.8158 35.5075L13.8163 35.5091Z" fill="#315ACA" />
                                    </svg>
                                </div>
                                <div class="information">
                                    <h5 class="title">A True Partnership</h5>
                                    <p class="disc">
                                        With FINBIZ, you can expect open communication, honesty, and integrity in all our interactions. Your trust is of utmost importance to us,
                                    </p>
                                </div>
                            </div>
                            <!-- sigle experience end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- why choose us section end -->


        <!-- about company area start -->
        <div class="rts-about-ten-area rts-section-gapBottom mt-decrease">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-area-left-ten center">
                            <span class="pre-title">About Our Company</span>
                            <h2 class="title">
                                Our Mission is to Become <br>
                                <span>The Best Company</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--50">
                    <div class="col-lg-12">
                        <div class="thumbnail-about-loarge-img">
                            <img src="assets/images/about/04.png" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about company area end -->


        <!-- rts team area ten start -->
        <div class="rts-testimonials-area-ten rts-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-area-left-ten">
                            <span class="pre-title">Expert Members</span>
                            <h2 class="title">
                                Meet Our <span>Amazing Team</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt--30">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <!-- single team area start -->
                        <div class="team-style-ten bg_image">
                            <div class="thumbnail-image-team">
                                <a href="#" class="thumbnail">
                                    <img src="assets/images/team/tm/01.jpg" alt="team">
                                </a>
                                <ul class="social-team-10">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="body">
                                <a href="#">
                                    <h5 class="title">Archer Graham</h5>
                                </a>
                                <span>Finance Manager</span>
                            </div>
                        </div>
                        <!-- single team area end -->
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <!-- single team area start -->
                        <div class="team-style-ten bg_image">
                            <div class="thumbnail-image-team">
                                <a href="#" class="thumbnail">
                                    <img src="assets/images/team/tm/02.jpg" alt="team">
                                </a>
                                <ul class="social-team-10">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="body">
                                <a href="#">
                                    <h5 class="title">Thomas Johnson</h5>
                                </a>
                                <span>Finance Manager</span>
                            </div>
                        </div>
                        <!-- single team area end -->
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <!-- single team area start -->
                        <div class="team-style-ten bg_image">
                            <div class="thumbnail-image-team">
                                <a href="#" class="thumbnail">
                                    <img src="assets/images/team/tm/03.jpg" alt="team">
                                </a>
                                <ul class="social-team-10">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="body">
                                <a href="#">
                                    <h5 class="title"> Grace Turner</h5>
                                </a>
                                <span>Finance Manager</span>
                            </div>
                        </div>
                        <!-- single team area end -->
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <!-- single team area start -->
                        <div class="team-style-ten bg_image">
                            <div class="thumbnail-image-team">
                                <a href="#" class="thumbnail">
                                    <img src="assets/images/team/tm/04.jpg" alt="team">
                                </a>
                                <ul class="social-team-10">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="body">
                                <a href="#">
                                    <h5 class="title">Victoria Wright</h5>
                                </a>
                                <span>Finance Manager</span>
                            </div>
                        </div>
                        <!-- single team area end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- rts team area ten end -->

        <!-- client area start -->
        <div class="rts-trusted-client rts-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title-area-client text-center">
                            <p class="client-title">Our Trusted Clients</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="client-wrapper-one">
                        <a href="#"><img src="assets/images/client/01.png" alt="business_finbiz"></a>
                        <a href="#"><img src="assets/images/client/02.png" alt="business_finbiz"></a>
                        <a href="#"><img src="assets/images/client/03.png" alt="business_finbiz"></a>
                        <a href="#"><img src="assets/images/client/04.png" alt="business_finbiz"></a>
                        <a href="#"><img src="assets/images/client/05.png" alt="business_finbiz"></a>
                        <a href="#"><img src="assets/images/client/06.png" alt="business_finbiz"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- client area start -->

        <!-- testimonials area start -->
        <div class="rts-testimonials-h2-area rts-section-gap bg_testimonials-h2">
            <div class="container">
                <div class="row mb--30">
                    <div class="col-12">
                        <div class="title-area testimonials-area-h2 text-center">
                            <span>Customer
                                Testimonial</span>
                            <h2 class="title">2356+
                                Customer Feedback’s</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-12">
                        <!-- Swiper -->
                        <div class="swiper testimonials-h2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- single testimonials area -->
                                    <div class="single-testimonials-h2">
                                        <div class="body">
                                            <h5 class="title">Great Business Solution</h5>
                                            <p class="disc">
                                                “Dictum egravida praimis rhoncus maecenas qismart curae mauris turpis
                                                quisque ad dictumst semper tempor aliquam senectus commodo”
                                            </p>
                                        </div>
                                        <div class="footer">
                                            <div class="left">
                                                <a class="thumbnail" href="#"><img src="assets/images/testimonials/07.png" alt="testimonials_image"></a>
                                                <div class="desig">
                                                    <a href="#">
                                                        <h6 class="title">
                                                            Jasmine Lemon
                                                        </h6>
                                                    </a>
                                                    <p>Manager at <span>Apple</span></p>
                                                </div>
                                            </div>
                                            <div class="right">
                                                <div class="stars-area">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single testimonials area End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- single testimonials area -->
                                    <div class="single-testimonials-h2">
                                        <div class="body">
                                            <h5 class="title">Great Marketing Solution</h5>
                                            <p class="disc">
                                                “Dictum egravida praimis rhoncus maecenas qismart curae mauris turpis
                                                quisque ad dictumst semper tempor aliquam senectus commodo”
                                            </p>
                                        </div>
                                        <div class="footer">
                                            <div class="left">
                                                <a class="thumbnail" href="#"><img src="assets/images/testimonials/07.png" alt="testimonials_image"></a>
                                                <div class="desig">
                                                    <a href="#">
                                                        <h6 class="title">
                                                            Jasmine Lemon
                                                        </h6>
                                                    </a>
                                                    <p>Manager at <span>Apple</span></p>
                                                </div>
                                            </div>
                                            <div class="right">
                                                <div class="stars-area">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single testimonials area End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- single testimonials area -->
                                    <div class="single-testimonials-h2">
                                        <div class="body">
                                            <h5 class="title">Great Corporate Solution</h5>
                                            <p class="disc">
                                                “Dictum egravida praimis rhoncus maecenas qismart curae mauris turpis
                                                quisque ad dictumst semper tempor aliquam senectus commodo”
                                            </p>
                                        </div>
                                        <div class="footer">
                                            <div class="left">
                                                <a class="thumbnail" href="#"><img src="assets/images/testimonials/07.png" alt="testimonials_image"></a>
                                                <div class="desig">
                                                    <a href="#">
                                                        <h6 class="title">
                                                            Jasmine Lemon
                                                        </h6>
                                                    </a>
                                                    <p>Manager at <span>Apple</span></p>
                                                </div>
                                            </div>
                                            <div class="right">
                                                <div class="stars-area">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single testimonials area End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- single testimonials area -->
                                    <div class="single-testimonials-h2">
                                        <div class="body">
                                            <h5 class="title">Great Insurance Solution</h5>
                                            <p class="disc">
                                                “Dictum egravida praimis rhoncus maecenas qismart curae mauris turpis
                                                quisque ad dictumst semper tempor aliquam senectus commodo”
                                            </p>
                                        </div>
                                        <div class="footer">
                                            <div class="left">
                                                <a class="thumbnail" href="#"><img src="assets/images/testimonials/07.png" alt="testimonials_image"></a>
                                                <div class="desig">
                                                    <a href="#">
                                                        <h6 class="title">
                                                            Jasmine Lemon
                                                        </h6>
                                                    </a>
                                                    <p>Manager at <span>Apple</span></p>
                                                </div>
                                            </div>
                                            <div class="right">
                                                <div class="stars-area">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single testimonials area End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- single testimonials area -->
                                    <div class="single-testimonials-h2">
                                        <div class="body">
                                            <h5 class="title">Great Consulting Solution</h5>
                                            <p class="disc">
                                                “Dictum egravida praimis rhoncus maecenas qismart curae mauris turpis
                                                quisque ad dictumst semper tempor aliquam senectus commodo”
                                            </p>
                                        </div>
                                        <div class="footer">
                                            <div class="left">
                                                <a class="thumbnail" href="#"><img src="assets/images/testimonials/07.png" alt="testimonials_image"></a>
                                                <div class="desig">
                                                    <a href="#">
                                                        <h6 class="title">
                                                            Jasmine Lemon
                                                        </h6>
                                                    </a>
                                                    <p>Manager at <span>Apple</span></p>
                                                </div>
                                            </div>
                                            <div class="right">
                                                <div class="stars-area">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single testimonials area End -->
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination2"></div>
                        <!-- swiper end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonials area end -->

        <!-- blog post area start -->
        <div class="blog-post-ten-area rts-section-gapTop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-area-left-ten center">
                            <span class="pre-title">News Updates</span>
                            <h2 class="title">
                                Most Recent <span>Blog Posts</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt--30">
                    <div class="col-lg-6">
                        <!-- single blog style ten -->
                        <div class="single-blog-style-ten">
                            <a href="blog-details.html" class="thumbnail">
                                <img src="assets/images/blog/17.png" alt="blog">
                            </a>
                            <div class="information">
                                <div class="blog-top-area">
                                    <div class="single-area">
                                        <i class="far fa-clock"></i>
                                        <span>15 Oct, 2022</span>
                                    </div>
                                    <div class="single-area">
                                        <i class="fal fa-user"></i>
                                        <span>by Admin</span>
                                    </div>
                                </div>
                                <div class="main-wrapper">
                                    <a href="blog-details.html">
                                        <h5 class="title">
                                            How Analytics Agencies Shape
                                            Business Strategies
                                        </h5>
                                    </a>
                                    <a class="rts-read-more btn-primary" href="blog-details.html"><i class="far fa-arrow-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <!-- single blog style ten end -->
                    </div>
                    <div class="col-lg-6">
                        <!-- single blog style ten -->
                        <div class="single-blog-style-ten">
                            <a href="blog-details.html" class="thumbnail">
                                <img src="assets/images/blog/18.png" alt="blog">
                            </a>
                            <div class="information">
                                <div class="blog-top-area">
                                    <div class="single-area">
                                        <i class="far fa-clock"></i>
                                        <span>15 Oct, 2022</span>
                                    </div>
                                    <div class="single-area">
                                        <i class="fal fa-user"></i>
                                        <span>by Admin</span>
                                    </div>
                                </div>
                                <div class="main-wrapper">
                                    <a href="blog-details.html">
                                        <h5 class="title">
                                            HR Agencies' Role in Attracting &
                                            Retaining Top Performers
                                        </h5>
                                    </a>
                                    <a class="rts-read-more btn-primary" href="blog-details.html"><i class="far fa-arrow-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <!-- single blog style ten end -->
                    </div>
                    <div class="col-lg-6">
                        <!-- single blog style ten -->
                        <div class="single-blog-style-ten">
                            <a href="blog-details.html" class="thumbnail">
                                <img src="assets/images/blog/19.png" alt="blog">
                            </a>
                            <div class="information">
                                <div class="blog-top-area">
                                    <div class="single-area">
                                        <i class="far fa-clock"></i>
                                        <span>15 Oct, 2022</span>
                                    </div>
                                    <div class="single-area">
                                        <i class="fal fa-user"></i>
                                        <span>by Admin</span>
                                    </div>
                                </div>
                                <div class="main-wrapper">
                                    <a href="blog-details.html">
                                        <h5 class="title">
                                            Performance Marketing Agencies
                                            Drive Revenue Growth
                                        </h5>
                                    </a>
                                    <a class="rts-read-more btn-primary" href="blog-details.html"><i class="far fa-arrow-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <!-- single blog style ten end -->
                    </div>
                    <div class="col-lg-6">
                        <!-- single blog style ten -->
                        <div class="single-blog-style-ten">
                            <a href="blog-details.html" class="thumbnail">
                                <img src="assets/images/blog/20.png" alt="blog">
                            </a>
                            <div class="information">
                                <div class="blog-top-area">
                                    <div class="single-area">
                                        <i class="far fa-clock"></i>
                                        <span>15 Oct, 2022</span>
                                    </div>
                                    <div class="single-area">
                                        <i class="fal fa-user"></i>
                                        <span>by Admin</span>
                                    </div>
                                </div>
                                <div class="main-wrapper">
                                    <a href="blog-details.html">
                                        <h5 class="title">
                                            What Content Marketing Agencies
                                            Rule the Online Realm
                                        </h5>
                                    </a>
                                    <a class="rts-read-more btn-primary" href="blog-details.html"><i class="far fa-arrow-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <!-- single blog style ten end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- blog post area end -->

        <!-- start header area -->
        <!-- footer area start -->
        <div class="rts-footer-area rts-section-gap footer-two footer-bg-two mt--120 mt_md--80 mt_sm--60">
            <div class="container">
                <div class="row">
                    <!-- single wized -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="footer-two-single-wized left">
                            <h3 class="title">
                                <span>Ready To</span> <br>
                            Work With Us?
                            </h3>
                            <p class="disc">
                                Felis consequat magnis est fames sagittis ultrices placerat sodales porttitor quisque.
                            </p>
                            <a class="rts-btn btn-primary-2 color-h-black" href="#">Get a Quote</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--50">
                        <div class="footer-two-single-wized two">
                            <div class="wized-title-area">
                                <h5 class="wized-title">Our Services</h5>
                                <img src="assets/images/footer/under-title-2.png" alt="finbiz_footer">
                            </div>
                            <div class="wized-2-body">
                                <ul>
                                    <li><a href="service-details.html"><i class="fal fa-chevron-double-right"></i>Business planning</a></li>
                                    <li><a href="service-details.html"><i class="fal fa-chevron-double-right"></i>Tax strategy</a></li>
                                    <li><a href="service-details.html"><i class="fal fa-chevron-double-right"></i>Financial advices</a></li>
                                    <li><a href="service-details.html"><i class="fal fa-chevron-double-right"></i>Insurance strategy</a></li>
                                    <li><a href="service-details.html"><i class="fal fa-chevron-double-right"></i>Manage investment</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- single wized -->
                    <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--30 mt_md--30">
                        <div class="footer-two-single-wized">
                            <div class="wized-title-area">
                                <h5 class="wized-title">Contact Us</h5>
                                <img src="assets/images/footer/under-title-2.png" alt="finbiz_footer">
                            </div>
                            <div class="wized-2-body">
                                <div class="contact-info-1">
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="disc">
                                        <span>Call Us 24/7</span>
                                        <a href="#">(+256) 2145.2156</a>
                                    </div>
                                </div>
                                <div class="contact-info-1">
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="disc">
                                        <span>Work with us</span>
                                        <a href="#">info@finbiz.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single wized -->
                    <!-- single wized -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="footer-two-single-wized right">
                            <div class="wized-2-body">
                                <div class="contact-info-1">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="disc">
                                        <span>Our Location</span>
                                        <a href="#">XYZ Hilton Street, 125 Town <br>
                                        United State</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single wized -->
                </div>
            </div>
        </div>
        <!-- footer area end -->

        <!-- copyright-area start -->
        <div class="rts-copy-right ptb--30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-h-2-wrapper">
                            <p class="disc">
                                FINBIZ - Copyright 2022. All rights reserved.
                            </p>
                            <div class="right">
                                <ul>
                                    <li><a href="blog-list.html">Company News</a></li>
                                    <li><a href="#">Faq</a></li>
                                    <li><a href="contactus.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright-area end -->
        <!-- ENd Header Area -->


        <!-- start loader -->
        <div class="loader-wrapper">
            <div class="loader">
            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <!-- End loader -->

        <!-- progress Back to top -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- progress Back to top End -->


        <!-- scripts start form hear -->
        <script src="{{asset('assets/js/vendor/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/jqueryui.js')}}"></script>
        <script src="{{asset('assets/js/vendor/waypoint.js')}}"></script>
        <script src="{{asset('assets/js/plugins/swiper.js')}}"></script>
        <script src="{{asset('assets/js/plugins/counterup.js')}}"></script>
        <script src="{{asset('assets/js/plugins/sal.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>

        <script src="{{asset('assets/js/vendor/waw.js')}}"></script>
        <script src="{{asset('assets/js/plugins/contact.form.js')}}"></script>

        <!-- main Js -->
        <script src="{{asset('assets/js/main.js')}}"></script>
        <!-- scripts end form hear -->
    </body>
</html>