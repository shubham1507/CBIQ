<?php
include 'connection.php';
include 'blogpost.php';



?>
<!DOCTYPE html>

<html lang="en">

<head>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>$(document).ready(function () { $("#sidebar").click(function () { $("#mrova-img-control").toggle(); }); });</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <!-- Including google font-->
    <link href="css/blog.css" rel="stylesheet">
    <!-- sale your idea form -->
    <link href="css/slider.css" rel="stylesheet">
    <!-- Include css file here-->
    <script src="js/slider.js"></script>
    <!-- SITE TITLE -->
    <title>BLOCKCHAIN SERVICE PROVIDER | CBIQ </title>
    <meta name="description" content="BLOCKCHAIN SERVICE PROVIDER | TERSE SOFTWARE PVT. LTD.">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    <!-- ETLINE FONT -->
    <link rel="stylesheet" type="text/css" href="css/etlinefont.min.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,700,700i%7cYellowtail" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="img/brand-img.png">
    <!-- Sweat Alert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="css/blog.css" rel="stylesheet">
    <!-- Include css file here-->


    <style>
        @media screen and (max-width: 479px) and (min-width: 319px) {
            #mrova-img-control {
                left: -42px !important;
            }
            #sidebar {
                left: 108px;
            }
            #particles-js {
                height: 110px;
            }
            .test {
                margin-right: -80% !important;
            }
            #myCarousel {
                margin-top: 66px !important;
            }
        }

        @media screen and (max-width: 479px) and (min-width: 481px) {
            #mrova-img-control {
                left: -42px !important;
            }
            #sidebar {
                left: 108px;
            }
            #particles-js {
                height: 110px;
            }
            .test {
                margin-right: -80% !important;
            }
            #myCarousel {
                margin-top: 66px !important;
            }
        }

        @media screen and (min-width: 669px) {
            .carousel-inner {
                /* background-image: url("img/1.png"); */
                background-position: center center;
                background-repeat: no-repeat;
                /* height:500px;     */
            }
            .carousel-caption {
                top: 16em;
            }
            .carousel-caption h3 {
                color: #fff;
                font-size: 70px;
                font-weight: bold;
            }
        }

        @media screen and (min-width: 545px) {}

        @media screen and (max-width: 699px) and (min-width: 100px) {

            .carousel-caption {
                top: 3em;
            }
            .carousel-caption h3 {
                color: #fff;
                font-size: 20px;
                font-weight: bold;
            }
        }

        #mrova-feedback {

            position: fixed;
            right: -308px;
            padding: 0px 20px;
            background-color: #fff;
            padding: 18px;
            z-index: 6999;
            border-radius: 23px;
            height: 80%;
            margin-bottom: 15%;
        }


        #mrova-contactform ul {
            margin: 0;
            padding: 0;

        }

        #mrova-img-control {
            top: 35% !important;
            position: fixed;
            padding-bottom: 130px;
            margin-top: -105.5px;
        }

        #mrova-contactform input,
        #mrova-contactform textarea {
            width: 270px;

            padding: 15px;
            font-size: 15px !important;
            font-style: normal;
            border-width: 0 0 1px 0;
            border-color: #032f49;
        }

        #mrova-contactform ul li {
            list-style: none;
            padding-bottom: 0px;
        }


        #mrova-img-control {
            cursor: pointer;
            left: -37px;
            width: 35px;
            background: transparent url('img/contact1.png');
            height: 155px;
            background-size: 100%;
            position: absolute;
            margin-top: -43.5px;

        }

        #mrova-contactform #mrova-sendbutton {
            width: 153px;
            margin-top: 5px;
            background: #db4f4a;
            color: #fff;
            cursor: pointer;
            padding: 10px 11px;
            border: none;
            font-size: 16px !important;
            border-radius: 19px;
            margin: 0 auto;
            text-align: center;
            display: block;
        }

        #mrova-name {
            width: 40%;
            border-width: 0 0 1px 0;
            border-color: #032f49;

        }

        #mrova-contactform ul li {
            border-bottom: 1px solid #f0efef;

        }

        #mrova-email {

            width: 40%;
            border-width: 0 0 1px 0;
            border-color: #032f49;
        }

        #mrova-message {

            border-width: 0 0 1px 0;
            border-color: #032f49;

        }

        #mrova-contactform li:last-child {
            margin-bottom: 22px;
        }

        #mrova-contactform p {
            font-size: 17px;
            text-align: center;
            color: #2a4068;
        }

        #mrova-message {
            height: 80px;
        }
    </style>
</head>


<body>
    <!--- Thank you-->
    <div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Thank you for pre-registering!</h4>
                </div>
                <div class="modal-body">
                    <p>Thanks for getting in touch!</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Loader -->

    <div class="loader-con">
        <img src="img/loading.gif">
    </div>
    <!-- End Loader  -->
    <div class="row"></div>
    <!-- MAIN NAVIGATION BAR -->
    <header class="nav-wrapper effect">
        <nav class="navbar-custom">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header" id="c">
                    <button type="button" class="navbar-toggle collapsed test" data-toggle="collapse" data-target="#bs-navbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand effect text-center" style="font-weight:bold;font-size:12px;margin-top: -5px;">
                        <img src="img/brand-img.png" alt="brand-img" style="width:100%;height:100%">
                        <span class="hidden-xs hidden-sm">Securing Businesses</span>
                    </a>

                </div>

                    <!-- <script>
                    $(document).ready(function () {
                    $(document).on("scroll", onScroll);
    
    //smoothscroll
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
      
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('#bs-navbar a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#bs-navbar ul li a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}
                    </script> -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-navbar">

                    <ul class="nav navbar-nav navbar-right">
                        <li class="main-color">
                            <a href="#particles-js" class="scroll effect active" data-speed="1500">
                                <i class="fa fa-home hidden-xs hidden-sm"></i>
                                <br>Home</a>
                        </li>

                        <li class="main-color">
                            <a href="#aboutus" class="scroll effect" data-speed="1500">
                                <i class="fa  fa-institution hidden-xs hidden-sm"></i>
                                <br>About Us</a>
                        </li>



                        <li class="main-color">
                            <a href="#tech" class="scroll effect" data-speed="1500">
                                <i class="fa fa-connectdevelop hidden-xs hidden-sm"></i>
                                <br>Blockchain</a>
                        </li>

                        <li class="main-color">
                            <a href="#services" class="scroll  effect" data-speed="1500">
                                <i class="fa fa-cogs hidden-xs hidden-sm"></i>
                                <br>Services</a>
                        </li>
                        <li class="main-color">
                            <a href="#blog" class="scroll effect" data-speed="1500">
                                <i class="fa fa-rss"></i>
                                <br>Blog</a>
                        </li>
                        <li class="main-color">
                            <a href="#contact" class="scroll effect" data-speed="1500">
                                <i class="fa fa-envelope-o hidden-xs hidden-sm"></i>
                                <br>Contact</a>
                        </li>
                        
                    </ul>

                </div>
                <!-- End navbar-collapse -->
            </div>
            <!-- End container -->
        </nav>
    </header>
    <!-- END MAIN NAVIGATION BAR -->


      
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="position:absolute; z-index:-1;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
            <li data-target="#myCarousel" data-slide-to="7"></li>
            <li data-target="#myCarousel" data-slide-to="8"></li>
            <li data-target="#myCarousel" data-slide-to="9"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/1.png" style="width:100%;" />
                <div class="carousel-caption">
                    <h3 class="carHeader">Blockchain Service Provider</h3>
                </div>
            </div>

            <div class="item">
                <img src="img/big1.jpg" />
                <div class="carousel-caption">
                    <h3 class="carHeader">Big Data & Analytics</h3>
                </div>
            </div>

            <div class="item">
                <img src="img/mob.jpg" />
                <div class="carousel-caption">
                    <h3 class="carHeader">Mobile Application Development</h3>
                </div>
            </div>

            <div class="item">
                <img src="img/cloud.jpg" />
                <div class="carousel-caption">
                    <h3 class="carHeader">Virtual Reality</h3>
                </div>
            </div>

            <div class="item">
                <img src="img/big.jpg" />
                <div class="carousel-caption">
                    <h3 class="carHeader">Social Media Marketing</h3>
                </div>
            </div>

            <div class="item">
                <img src="img/mac.jpg" />
                <div class="carousel-caption">
                    <h3 class="carHeader">Machine Learning & AI</h3>
                </div>
            </div>

            <div class="item">
                <img src="img/iot3.jpg" />
                <div class="carousel-caption">
                    <h3 class="carHeader">Internet of Things</h3>
                </div>
            </div>
            <div class="item">
                <img src="img/cyber.jpg" />
                <div class="carousel-caption">
                    <h3 class="carHeader">Cyber Security</h3>
                </div>
            </div>

            <div class="item">
                <img src="img/cyber.jpeg" />
                <div class="carousel-caption">
                    <h3 class="carHeader">Enterprise Solution & Infra Management</h3>
                </div>
            </div>



            <div class="item">
                <img src="img/rd.jpg" />
                <div class="carousel-caption">
                    <h3>Research & Development</h3>
                </div>
            </div>

        </div>


    </div>
    <section id="particles-js" class="section one-page-section" style="z-index:1000000;height:550px;">
    <!-- <div id="particles-js" style="z-index:1000000;height:550px;"></div> -->
    </div>
    </section>
    
    <section id="aboutus" class="section one-page-section" style="padding-top:20px;">
        <div class="container" id="aboutus_container">
            <div class="section-title" id="abt">
                <h2 class="about_us" style="margin-top:-40px;">About Us</h2>
                <img src="img/title-splash.png" alt="title-splash" class="img23">
            </div>
            <div class="row">

                <div class="col-xs-12 col-md-12">
                    <div class="about-content main-color">
                        <!-- About Tab panes -->
                        <div class="tab-content">
                            <!-- About me tab -->
                            <div role="tabpanel" class="active" id="about-tab" style="margin-top:-20px;">
                                <p style="margin-top: -60px;padding-bottom:10px;">CBIQ (Cyber Business IQ) is an Indian IT services company, headquartered New Delhi, capital
                                    of India. </p>
                                <p style="padding-bottom:-50px">Originally a software development & Research organization, it emerged independently in 2017
                                    when industry securing their businesses by accepting disruptive technologies worldwide.
                                </p>
                                <p style="padding-bottom:-50px">CBIQ offers services including Technology Consulting, Development & Digital Marketing.</p>
                                <p style="padding-bottom:-50px">Pioneer in Blockchain Service Provider, Big Data Analytics, Cyber Security, Machine Learning
                                    & AI, IoT.</p>

                            </div>
                        </div>
                        <!--  End About Tabs -->
                    </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Container -->
    </section>
    <!-- END ABOUT -->
    <!-- NEWS -->
    <section class="section one-page-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 animate-on-scroll" data-animation="slide-up" data-delay="0.4">
                    <div class="single-blog mb-30">
                        <div class="blog-thumbnail">
                            <img src="img/icon-13.png" class="img23">
                        </div>
                        <div class="blog-details text-center">
                            <h3 class="blog-title main-color">
                                <a class="effect">BlockChain Technology</a>
                            </h3>
                            <p class="blog-text">Blockchain development process of the company is defined smart contract or smart relationship
                                between two or any organization to implement own blockchain process globally.</p>
                        </div>
                        <div class="border-animation main-color-bg">
                            <div class="blog-line effect"></div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4 animate-on-scroll" data-animation="slide-up" data-delay="0.6">
                    <div class="single-blog mb-30">
                        <div class="blog-thumbnail">
                            <img src="img/icon-23.png" class="img23">
                        </div>
                        <div class="blog-details text-center">
                            <h3 class="blog-title main-color">
                                <a class="effect">BlockChain Consulting</a>
                            </h3>
                            <p class="blog-text">Blockchain consulting define the process of blockchain in your business need time that how to
                                implement blockchain, Understanding Finance trading of the domain, Initiating Payment process
                                <!--<span class="dwnld"><strong><a href="res/CBIQ Blockchain V 1.0.pdf" target="_blank"><u>Download</u></a></strong></span></p> -->
                        </div>
                        <div class="border-animation main-color-bg">
                            <div class="blog-line effect"></div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4 animate-on-scroll" data-animation="slide-up" data-delay="0.4">
                    <div class="single-blog mb-30">
                        <div class="blog-thumbnail">
                            <img src="img/block.png" class="img23">
                        </div>
                        <div class="blog-details text-center">
                            <h3 class="blog-title main-color">
                                <a class="effect">BlockChain Marketing</a>
                            </h3>
                            <p class="blog-text">Blockchain development process of the company is defined smart contract or smart relationship
                                between two or any organization to implement own blockchain process globally.</p>
                        </div>
                        <div class="border-animation main-color-bg">
                            <div class="blog-line effect"></div>
                        </div>
                    </div>
                </div>




            </div>
            <!-- End Row -->
        </div>
        <!-- End Container -->
    </section>
    <!-- END NEWS -->


    <!-----test=-------->
    <section class="section one-page-section" id="tech" style="padding-top:7%">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="about-content main-color">
                        <ul class="nav nav-tabs" id="nav" role="tablist" style="margin-left:15%;">

                            <li role="presentation" class="main-color-bg stack">
                                <a href="#skills-tab" class="effect skills-init done" aria-controls="skills-tab" role="tab" data-toggle="tab" aria-expanded="false">Blockchain Development</a>
                            </li>
                            <li role="presentation" class="main-color-bg stack">
                                <a href="#info-tab" class="effect" aria-controls="info-tab" role="tab" data-toggle="tab" aria-expanded="false">Blockchain Consulting</a>
                            </li>

                            <li role="presentation" class="main-color-bg stack">
                                <a href="#maintain-tab" class="effect" aria-controls="maintain-tab" role="tab" data-toggle="tab" aria-expanded="false">BlockChain Marketing</a>
                            </li>
                        </ul>

                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane fade active in" id="skills-tab">
                                <div class="col-xs-12 animate-on-scroll slide-up">
                                    <p>The solution of blockchain development is provide a pairing experience from the healthcare,
                                        education, banking, financial, software development use globally for the free financial
                                        system to access freely via blockchain technology. These type of service provided
                                        to improve blockchain development process.</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-12 hand">
                                        <div class="main-color-bg single-hobbie-con">
                                            <div class="single-hobbie effect text-center">
                                                <div class="hobbie-icon effect">
                                                    <img src="img/handshake.png">
                                                </div>
                                                <div class="hobbie-content effect">
                                                    <h3 class="hobbie-title effect">Smart Contract</h3>
                                                    <p>Smart Contract is the first process to improve blockchain service. In
                                                        this, the contractor deal many discussion, When the contract is done
                                                        by the first side the funding process will start blockchain wise.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 col-xs-12 ex">
                                        <div class="main-color-bg single-hobbie-con">
                                            <div class="single-hobbie effect text-center">
                                                <div class="hobbie-icon effect">
                                                    <img src="img/exchange.png">
                                                </div>
                                                <div class="hobbie-content effect">
                                                    <h3 class="hobbie-title effect">Exchange</h3>
                                                    <p>Exchange service are based on Own crypto-coin development. In this, the
                                                        blockchain service the crypto-coin develop with programming language
                                                        with safe code design and reliable crypto exchange.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 col-xs-12">
                                        <div class="main-color-bg single-hobbie-con">
                                            <div class="single-hobbie effect text-center">
                                                <div class="hobbie-icon effect">
                                                    <img src="img/blockchian.png">
                                                </div>
                                                <div class="hobbie-content effect">
                                                    <h3 class="hobbie-title effect">Custom Blockchain Development</h3>
                                                    <p>Blockchain development is the process to publish own cryptocurrency globally
                                                        via blockchain service that is based on the funder or asset smart
                                                        contract base
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-12 hand">
                                        <div class="main-color-bg single-hobbie-con">
                                            <div class="single-hobbie effect text-center">
                                                <div class="hobbie-icon effect">
                                                    <img src="img/hyper.png">
                                                </div>
                                                <div class="hobbie-content effect">
                                                    <h3 class="hobbie-title effect">Hyperledger</h3>
                                                    <p>It provides a pairing experience from the healthcare, education, banking,
                                                        financial, software development use globally for a free financial
                                                        system to access freely via blockchain technology.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-12 chain">
                                        <div class="main-color-bg single-hobbie-con">
                                            <div class="single-hobbie effect text-center">
                                                <div class="hobbie-icon effect">
                                                    <img src="img/chain.png">
                                                </div>
                                                <div class="hobbie-content effect">
                                                    <h3 class="hobbie-title effect">Multi Chain/Supply Chain</h3>
                                                    <p>Supply chain is the process involved from the inception of producing
                                                        goods to delivering it to the end customer. Blockchain can be integrated
                                                        in the Supply chain process to make it easier and transparent.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="main-color-bg single-hobbie-con">
                                            <div class="single-hobbie effect text-center">
                                                <div class="hobbie-icon effect">
                                                    <img src="img/wallet.png">
                                                </div>
                                                <div class="hobbie-content effect">
                                                    <h3 class="hobbie-title effect">Wallet</h3>
                                                    <p>Crypto wallet is a software functionality allowing users to earn, monitor
                                                        and transfer virtual currencies. Unlike existing banks or pocket
                                                        wallets that store physical currencies, crypto-coins can only be
                                                        recorded as transactions on the blockchain technology.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-12 lounder  hand">
                                        <div class="main-color-bg single-hobbie-con">
                                            <div class="single-hobbie effect text-center">
                                                <div class="hobbie-icon effect">
                                                    <img src="img/lounder.png">
                                                </div>
                                                <div class="hobbie-content effect">
                                                    <h3 class="hobbie-title effect">Private Blockchain Development</h3>
                                                    <p>Organizations can create their identity and start transacting with their
                                                        restricted group in blocks. They can easily own and monetize data.
                                                        Private Blockchains enables such a facility.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="main-color-bg single-hobbie-con">
                                            <div class="single-hobbie effect text-center">
                                                <div class="hobbie-icon effect">
                                                    <img src="img/exchange.png">
                                                </div>
                                                <div class="hobbie-content effect">
                                                    <h3 class="hobbie-title effect">Proof of Existence</h3>
                                                    <p>Use our service to anonymously and securely store an online distributed
                                                        proof of existence for any document. Your documents are NOT stored
                                                        in our database or in the blockchain, so you don't have to worry
                                                        about your data being accessed by others.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="info-tab">
                                <div class="personal-info text-center">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3 animate-on-scroll" data-animation="slide-up" data-delay="0.4">
                                            <div class="single-blog mb-30">
                                                <div class="blog-thumbnail">
                                                    <img src="img/1st.png" class="img23">

                                                </div>
                                                <div class="blog-details text-center">
                                                    <h3 class="blog-title main-color">
                                                        <a class="effect">Determining Blockchain Adeptness And Understanding The Present Processes
                                                        </a>
                                                    </h3>
                                                    <p class="blog-text">Before even thinking about implementing Blockchain solution, it is essential
                                                        that top management and the senior managers should acquire the correct
                                                        know how about this technology. Next, it is important to understand
                                                        the internal processes of the organization on which the whole system
                                                        is based.</p>
                                                </div>
                                                <div class="border-animation main-color-bg">
                                                    <div class="blog-line effect"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-md-3 animate-on-scroll" data-animation="slide-up" data-delay="0.6">
                                            <div class="single-blog mb-30">
                                                <div class="blog-thumbnail">
                                                    <img src="img/2nd.png" class="img23">
                                                </div>
                                                <div class="blog-details text-center">
                                                    <h3 class="blog-title main-color">
                                                        <a class="effect">Arriving At Mutual Understanding</a>
                                                    </h3>
                                                    <p class="blog-text">This stage involves a lot of brainstorming meetings with the top management
                                                        to determine the understanding of the Blockchain technology they
                                                        have and discuss the loopholes/improvement areas in the present processes
                                                        which can be addressed through Blockchain solution. Through a mutual
                                                        understanding, it can be decided to implementing Blockchain development
                                                        for organization</p>
                                                </div>
                                                <div class="border-animation main-color-bg">
                                                    <div class="blog-line effect"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-md-3 animate-on-scroll" data-animation="slide-up" data-delay="0.4">
                                            <div class="single-blog mb-30">
                                                <div class="blog-thumbnail">
                                                    <img src="img/3rd.png" class="img23">

                                                </div>
                                                <div class="blog-details text-center">
                                                    <h3 class="blog-title main-color">
                                                        <a class="effect">Initiating Solution Designing</a>
                                                    </h3>
                                                    <p class="blog-text">Next stage is to develop a comprehensive and defined framework of the
                                                        proposed solution. The framework would define how the physical information
                                                        would be converted into digital information and stored on Blockchain,
                                                        how different stakeholders would be able to interact with the Blockchain
                                                        &amp; what would be authorities assigned to them, and the platform/devices
                                                        required for successful implementation.</p>
                                                </div>
                                                <div class="border-animation main-color-bg">
                                                    <div class="blog-line effect"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-md-3 animate-on-scroll" data-animation="slide-up" data-delay="0.6">
                                            <div class="single-blog mb-30">
                                                <div class="blog-thumbnail">
                                                    <img src="img/4th.png" class="img23">
                                                </div>
                                                <div class="blog-details text-center">
                                                    <h3 class="blog-title main-color">
                                                        <a class="effect">Demonstration Of Poc (Proof Of Concept) &amp; Full-Scale Production</a>
                                                    </h3>
                                                    <p class="blog-text">The demonstration of POC should prove how the solutions would satisfy
                                                        the key objectives it was designed for. After successful demonstration
                                                        of the concept, full-scale production of the solution is initiated.
                                                        The solutions developed would cover all the processes and would be
                                                        expected to perform as mutually agreed in Stage 3.</p>
                                                </div>
                                                <div class="border-animation main-color-bg">
                                                    <div class="blog-line effect"></div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="maintain-tab">
                                <div class="personal-info text-center">
                                    <div class="row">
                                        <div class="row">
                                            <h1 class="text-center animate-on-scroll slide-up">Blockchain Marketing Services</h1>
                                            <p class="text-center animate-on-scroll slide-up">We offer unparalleled services for powerful Blockchain marketing solutions designed
                                                to grow in competitive market conditions.</p>
                                            <div class="no-padd col-md-2 col-sm-4 col-xs-6">
                                                <div class="main-color-bg single-hobbie-con">
                                                    <div class="single-hobbie-ico effect text-center">
                                                        <div class="hobbie-icon-ico effect">
                                                            <img src="img/monitor.png">
                                                        </div>
                                                        <div class="hobbie-content effect">
                                                            <h3 class="hobbie-title effect">Development</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="no-padd col-md-2 col-sm-4 col-xs-6">
                                                <div class="main-color-bg single-hobbie-con">
                                                    <div class="single-hobbie-ico effect text-center">
                                                        <div class="hobbie-icon-ico effect">
                                                            <img src="img/globe.png">
                                                        </div>
                                                        <div class="hobbie-content effect">
                                                            <h3 class="hobbie-title effect">SEO</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="no-padd col-md-2 col-sm-4 col-xs-6">
                                                <div class="main-color-bg single-hobbie-con">
                                                    <div class="single-hobbie-ico effect text-center">
                                                        <div class="hobbie-icon-ico effect">
                                                            <img src="img/bar-chart.png">
                                                        </div>
                                                        <div class="hobbie-content effect">
                                                            <h3 class="hobbie-title effect">ICO Insights</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="no-padd col-md-2 col-sm-4 col-xs-6">
                                                <div class="main-color-bg single-hobbie-con">
                                                    <div class="single-hobbie-ico effect text-center">
                                                        <div class="hobbie-icon-ico effect">
                                                            <img src="img/tap.png">
                                                        </div>
                                                        <div class="hobbie-content effect">
                                                            <h3 class="hobbie-title effect">PPC</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="no-padd col-md-2 col-sm-4 col-xs-6">
                                                <div class="main-color-bg single-hobbie-con">
                                                    <div class="single-hobbie-ico effect text-center">
                                                        <div class="hobbie-icon-ico effect">
                                                            <img src="img/notebook.png">
                                                        </div>
                                                        <div class="hobbie-content effect">
                                                            <h3 class="hobbie-title effect">Content Marketing</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="no-padd col-md-2 col-sm-4 col-xs-6">
                                                <div class="main-color-bg single-hobbie-con">
                                                    <div class="single-hobbie-ico effect text-center">
                                                        <div class="hobbie-icon-ico effect">
                                                            <img src="img/community.png">
                                                        </div>
                                                        <div class="hobbie-content effect">
                                                            <h3 class="hobbie-title effect">Community Building</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div id="how-to-start" class="gray_bg">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 section-header text-center">
                                                        <h3 class="section-title underline" style="margin-bottom:0px">How to initiate your ICO funding?</h3>
                                                        <p class="section-subtitle">This is our tried and tested model of conducting a successful ICO
                                                        </p>
                                                    </div>
                                                    <!-- end section-header -->

                                                    <div class="col-md-12" style="margin-top: 30px;">
                                                        <div class="timeline-center">
                                                            <div class="timeline-row">
                                                                <div class="tm-detail">
                                                                    <h5 class="mb10">Ideation &amp; Whitepaper Creation</h5>
                                                                    <p>We brainstorm with our blockchain experts to determine
                                                                        the best achievable vision to present in the whitepaper.
                                                                    </p>
                                                                </div>
                                                                <div class="tm-icon">
                                                                    <i class="icon-book-open custom-icon"></i>
                                                                </div>
                                                            </div>
                                                            <!-- end timeline-row -->
                                                            <div class="timeline-row">
                                                                <div class="tm-detail">
                                                                    <h5 class="mb10">Pre-ICO Marketing &amp; Dashboard Setup</h5>
                                                                    <p>Ramping up community support through Telegram, Reddit,
                                                                        Steemit, Twitter and Facebook. Investor dashboard
                                                                        setup.
                                                                    </p>
                                                                </div>
                                                                <div class="tm-icon">
                                                                    <i class="icon-desktop custom-icon"></i>
                                                                </div>
                                                            </div>
                                                            <!-- end timeline-row -->
                                                            <div class="timeline-row">
                                                                <div class="tm-detail">
                                                                    <h5 class="mb10">Initial Coin Offering Open To All</h5>
                                                                    <p>Open up the Pre-ICO and ICO in timed countdown intervals
                                                                        so that they commit investment amount that you determine
                                                                        and are allowed to buy your coin/token as you determine
                                                                        the price.</p>
                                                                </div>
                                                                <div class="tm-icon">
                                                                    <i class="icon-toolbox custom-icon"></i>
                                                                </div>
                                                            </div>
                                                            <!-- end timeline-row -->
                                                            <div class="timeline-row">
                                                                <div class="tm-detail">
                                                                    <h5 class="mb10">Wallet Setup &amp; Coin Drop</h5>
                                                                    <p>Drop the allotted, bought amount of coins/tokens to your
                                                                        investors’ whitelabeled web and mobile wallets.
                                                                    </p>
                                                                </div>
                                                                <div class="tm-icon">
                                                                    <i class="icon-wallet custom-icon"></i>
                                                                </div>
                                                            </div>
                                                            <!-- end timeline-row -->
                                                        </div>
                                                        <!-- end timeline-center -->
                                                    </div>
                                                    <!-- end col-md-12 -->

                                                </div>
                                                <!-- end row -->
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--endTest----->
    <!-- SERVICES -->
    <section id="services" class="section one-page-section" style="padding:70px 0px 0px 0px">
        <div class="container">

            <div class="section-title">
                <h2>Services</h2>
                <img src="img/title-splash.png" alt="title-splash">
            </div>
            <div class="row">

                <div class="col-md-4 col-sm-6 serve">
                    <div class="single-service mb-30">
                        <div class="front-service-box text-center">
                            <div class="service-icon main-color">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <h3 class="main-color">Big Data & Analytics</h3>
                        </div>

                        <div class="back-service-box text-center">
                            <div class="light-icon main-color">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <h4 class="main-color">Big Data & Analytics</h4>
                            <p>Big data unlocks hidden opportunities and insights. CBIQ turn technology into business outcomes
                                by delivering information management, business intelligence and analytic solutions under
                                one umbrella.</p>
                        </div>
                    </div>
                </div>



                <div class="col-md-4 col-sm-6 serve">
                    <div class="single-service mb-30">
                        <div class="front-service-box text-center">
                            <div class="service-icon main-color">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <h3 class="main-color">Mobile Application Development</h3>
                        </div>
                        <!-- <script> function myFunction1() { window.open("res/Mobile Application Development-CBIQ.pdf"); } </script> -->
                        <div class="back-service-box text-center">

                            <div class="light-icon main-color">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <h4 class="main-color">Mobile Application Development</h4>
                            <p>Our mobile app development solutions allow businesses not only to keep connected with their customers
                                on mobile devices but also have a quicker situational awareness of KPIs for good decision
                                making. Gain business intelligence in real-time for better management of the workforce and
                                enriched customer experience
                                <!--<span class="dwnld"><strong><a href="res/Mobile Application Development-CBIQ.pdf"  target="_blank"><u>Download</u></a></strong></span> </p> -->
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6 serve">
                    <div class="single-service mb-30">
                        <div class="front-service-box text-center">
                            <div class="service-icon main-color">
                                <i class="fa fa-cloud"></i>
                            </div>
                            <h3 class="main-color">Virtual Reality</h3>
                        </div>

                        <div class="back-service-box text-center">
                            <div class="light-icon main-color">
                                <i class="fa fa-cloud"></i>
                            </div>
                            <h4 class="main-color">Virtual Reality</h4>
                            <p>Virtual Reality (VR) literally makes it possible to experience anything, anywhere, anytime. It is the most immersive type of reality technology and can convince the human brain that it is somewhere it is really not. Head mounted displays are used with headphones and hand controllers to provide a fully immersive experience.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 serve">
                    <div class="single-service mb-30">
                        <div class="front-service-box text-center">
                            <div class="service-icon main-color">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <h3 class="main-color">Social Media Marketing </h3>
                        </div>

                        <div class="back-service-box text-center">
                            <div class="light-icon main-color">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <!-- <script> function myFunction2() { window.open("res/Social Media Marketing.pdf"); } </script> -->
                            <h4 class="main-color">Social Media Marketing</h4>
                            <p>We understand that digital marketing has never been more competitive, which is why we stick to
                                what we have always focused on: driving ROI. How do we do this? We help you connect with
                                the right customers. Whether through social media or search engine optimization, we work
                                to increase your brand's online presence in a meaningful way..
                                <!--<span class="dwnld"><strong><a href="res/Social Media Marketing.pdf" target="_blank"><u>Download</u></a></strong></span></p> -->
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 serve">
                    <div class="single-service mb-30">
                        <div class="front-service-box text-center">
                            <div class="service-icon main-color">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <h3 class="main-color">Machine Learning & AI</h3>
                        </div>

                        <div class="back-service-box text-center">
                            <div class="light-icon main-color">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <h4 class="main-color">Machine Learning & AI</h4>
                            <p>CBIQ utilizes machine learning, artificial intelligence, and neural networks in self-taught enterprise
                                solutions. Take advantage of our solid technological expertise and extensive pool of IT professionals.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6 serve">
                    <div class="single-service mb-30">
                        <div class="front-service-box text-center">
                            <div class="service-icon main-color">
                                <i class="fa fa-globe"></i>
                            </div>
                            <h3 class="main-color">Internet of Things</h3>
                        </div>

                        <div class="back-service-box text-center">
                            <div class="light-icon main-color">
                                <i class="fa fa-globe"></i>
                            </div>
                            <h4 class="main-color">Internet of Things</h4>
                            <p>The IoT stands for Internet of things which allow connecting physical objects through internet
                                accessibility. It offers a great opportunity to the enterprises by serving end-to-end solution
                                for integrating hardware, sensors, and software to increase their operation impacts.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 serve">
                    <div class="single-service mb-30">
                        <div class="front-service-box text-center">
                            <div class="service-icon main-color">
                                <i class="fa fa-code"></i>
                            </div>
                            <h3 class="main-color">Enterprise & Infra Solution</h3>
                        </div>
                        <!-- <script> function myFunction() { window.open("res/CBIQ IT Solution & Infra management Portfolio_v01 (1).pdf"); } </script> -->

                        <div class="back-service-box text-center">

                            <div class="light-icon main-color">
                                <i class="fa fa-code"></i>
                            </div>
                            <h4 class="main-color">Enterprise & Infra Solution</h4>
                            <p>The most scalable business app development services, which we offer, create highly innovative
                                business-driven development environment to build applications that are as dynamic as any
                                business objective. With our business app development services, we empower enterprises to
                                automate critical business processes seamlessly and with minimized downtime...
                                <!--<span class="dwnld"><strong><a href="res/CBIQ IT Solution & Infra management Portfolio_v01 (1).pdf" target="_blank"><u>Download</u></a></strong></span>-->
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 serve">
                    <div class="single-service mb-30">
                        <div class="front-service-box text-center">
                            <div class="service-icon main-color">
                                <i class="fa fa-lock"></i>
                            </div>
                            <h3 class="main-color">Cyber Security</h3>
                        </div>

                        <div class="back-service-box text-center">
                            <div class="light-icon main-color">
                                <i class="fa fa-lock"></i>
                            </div>
                            <h4 class="main-color">Cyber Security</h4>
                            <p>Our services in the field of advanced cyber defenses help you protect yourself effectively from
                                cyberattacks and unauthorized access to your data. You also benefit from our experts' broad
                                expertise: whether you need network security, IoT security, identity and access management,
                                penetration tests or other IT security services, we provide advice and find the ideal solution
                                for your company.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 serve">
                    <div class="single-service mb-30">
                        <div class="front-service-box text-center">
                            <div class="service-icon main-color">
                                <i class="fa fa-code-fork"></i>
                            </div>
                            <h3 class="main-color">Research & Development</h3>
                        </div>

                        <div class="back-service-box text-center">
                            <div class="light-icon main-color">
                                <i class="fa fa-code-fork"></i>
                            </div>
                            <h4 class="main-color">Research & Development</h4>
                            <p>Industrial R & D is specifically defined as the process of obtaining new knowledge that will
                                eventually result in new or improved products, processes, systems, or services that will
                                benefit the company's sales or growth.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 serve">
                    <div class="single-service mb-30">
                        <div class="front-service-box text-center">
                            <div class="service-icon main-color">
                                <i class="fa fa-users"></i>
                            </div>
                            <h3 class="main-color">Skill developement</h3>
                        </div>

                        <div class="back-service-box text-center">
                            <div class="light-icon main-color">
                                <i class="fa fa-users"></i>
                            </div>
                            <h4 class="main-color">Skill developement</h4>
                            <p>
                                CBIQ has created the Skills Development System to ensure the efficient planning, development, tracking and management of skills and skills development within the company. 
                                 We designs a skill developement software by keeping in mind all the requirements of SME’s at a diverse
                                range of industries and with different salary structures. We came up with the cloud payroll
                                solutions for your payroll outsourcing services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 serve">
                    <div class="single-service mb-30">
                        <div class="front-service-box text-center">
                            <div class="service-icon main-color">
                                <i class="fa fa-gavel"></i>
                            </div>
                            <h3 class="main-color">Idea Monetization Services</h3>
                        </div>

                        <div class="back-service-box text-center">
                            <div class="light-icon main-color">
                                <i class="fa fa-gavel"></i>
                            </div>
                            <h4 class="main-color">Idea Monetization Services</h4>
                            <p>We are a trusted partner for leading law firms and corporate Idea Monetization Service departments, helping our clients
                                deliver more for less and increasing the value they offer their own clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 serve">
                    <div class="single-service mb-30">
                        <div class="front-service-box text-center">
                            <div class="service-icon main-color">
                                <i class="fa fa-institution"></i>
                            </div>
                            <h3 class="main-color">Events & Conferences</h3>
                        </div>

                        <div class="back-service-box text-center">
                            <div class="light-icon main-color">
                                <i class="fa fa-institution"></i>
                            </div>
                            <h4 class="main-color">Events & Conferences</h4>
                            <p>Around the world, CBIQ attend and participate in industry conferences and events, as speakers and exhibitors, in order to network and share knowledge. We also participate in career fairs at universities, answering questions from students and recruiting the brightest minds to join.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Row -->
        </div>
        <!-- End Container -->
    </section>
    <!-- SERVICES -->

    <!---Blog-->
   

   <section id="blog"  style="margin-bottom:5%;padding-top:5%;">
    <div class="container content">
    <div class="section-title" style="margin-left:20px;margin-top:20px;margin-bottom:25px">
                <h2>Blog</h2>
                <img src="img/title-splash.png" alt="title-splash">
            </div>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="2500";style="z-index:122222222;>
            
            
             <ol class="carousel-indicators">
            
                

            </ol> 
            
            <div class="carousel-inner">
            <?php echo make_slides($connect); ?>
                  
            </div>
    <div>
                
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic"  data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic"  data-slide="next" style="right:15px">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
            </div>
        </div>
    </div>
</section>
    <!---Blog-->

    <video controls style="width:94%;margin:0 3%;box-shadow:5px 5px 50px 5px #888888;border-radius:10px">
        <source muted src="img/blockchain.mp4" type="video/mp4">
    </video>
    <!-- END TESTIMONIALS -->
    
<!-- Modal  for PostBlog -->
<style>
        #detail{
    position: relative;
    overflow-y: auto;
    max-height: 600px;
    padding: 15px;
}
</style>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:21111111111111;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="margin-left: 219px;">BLOG POST</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"  style="margin-left: 516px;">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="detail">
        
      </div>
      
    </div>
  </div>
</div>
<script>  

 $(document).ready(function(){  
      $('.view').click(function(){  
           var id = $(this).attr("id");  
           $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{id:id},  
                success:function(data){  
                     $('#detail').html(data);  
                     $('#exampleModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>

    <!-- CONTACT -->
    <section id="contact" class="section parallax-section one-page-section" style="padding-top:35px;">
        <div class="container">
            <?php
        
if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    
    $message=$_POST['message'];

    
    $to="info@cyberbusinessiq.com";
    $subject="Contact Us Form";
    $message="Name: ".$name."\n"."Email: ".$email."\n"."Phone: ".$phone."\n"."Message:".$message;

    $m=mail($to,$subject,$message);
    if ($m==true) {
        
        echo"<script>swal('Thank You!', 'We will get back to you shortly', 'success');</script>";
    } 
    

}

    
    ?>
                <div class="section-title">
                    <h2>Contact Us</h2>
                    <img src="img/title-splash.png" alt="title-splash" class="img23">
                </div>

                <div class="row">

                    <div class="col-xs-12 col-md-10 col-md-offset-1 animate-on-scroll" data-animation="slide-down">
                        <form id="contact-form" method="post" action="index.php">

                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="text" name="name" id="name" class="input-field" required="required" placeholder="Name">
                                    <span class="name-error text-center mb-30"></span>
                                </div>
                                <div class="col-sm-4">
                                    <input type="email" name="email" id="email" class="input-field" required="required" placeholder="Email">
                                    <span class="email-error text-center mb-30"></span>
                                </div>
                                <div class="col-sm-4">
                                    <input type="number" name="phone" id="phone" class="input-field" required="required" placeholder="Contact number">
                                    <span class="subject-error text-center mb-30"></span>
                                </div>
                                <div class="col-xs-12">
                                    <textarea name="message" id="message" class="input-field" required="required" placeholder="Message"></textarea>
                                    <span class="message-error text-center mb-30"></span>
                                </div>
                            </div>

                            <div id="form-message" class="error mb-30 text-center"></div>

                            <button name="submit" style="margin-bottom:5%;" type="submit" class="fl-btn main-color-bg effect submit-btn">
                                <i class="fa fa-send"></i> Send Message
                            </button>

                        </form>

                    </div>

                </div>
                <!-- end row -->
        </div>
        <!-- End Container -->
    </section>
    <!-- END CONTACT -->

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container" style="margin-bottom: -40px!important;">
            <div class="row">
                <div class="col-xs-12" style="color:#fff;padding-top:10px 15px;display: -webkit-inline-box;">
                    <i class="fa fa-map-marker"></i> &nbsp;
                    <p>G-14, 1st Floor, Sector-3, Noida, U.P, India</p>&nbsp;
                    
                </div>
                <br>
                <div class="col-xs-12" style="color:#fff;padding-top:40px 15px;display: -webkit-inline-box;">
                    <p>
                        <i class="fa fa-envelope-o hidden-xs hidden-sm"></i>&nbsp;
                        <p>info@cyberbusinessiq.com</p>
                </div>
                <div class="col-xs-12" style="color:#fff;padding-top:30px 15px;display: -webkit-inline-box;">
                    <i class="fa fa-phone"></i> &nbsp;
                    <p>+91 99 9199 7996</p>
                </div>

                <div class="col-xs-12 col-md-4 footer-name">
                    <p id="footerpara">
                        <strong>&copy; Cyber Business IQ</strong>
                    </p>

                </div>

                <div class="col-xs-12 col-md-4 text-center home-social">
                    <ul class="home-social-list">
                        <li class="main-color">
                            <a class="effect" href="https://www.facebook.com/CyberbusinessIQ/" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="main-color">
                            <a class="effect" href="https://mobile.twitter.com/cyberbusinessiq" target="_blank">
                                <i class="fa fa-twitter"></i>
                                 </a>
                        </li>

                        <li class="main-color">
                            <a class="effect" href="https://www.linkedin.com/company/cyber-business-iq/" target="_blank">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li class="main-color">
                            <a class="effect" href=" https://www.instagram.com/cyberbusinessiq/" target="_blank">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-xs-12 col-md-4 footer-copyright">
                    <p>All Rights Reserved.</p>
                </div>


            </div>
            <!-- end row -->
        </div>

        <div id="mrova-feedback">
            <h2>Business Enquiry</h2>
            <!--  Business Enquiry Form- -->
            <?php
        
        // error_reporting(E_ALL);
        if(isset($_POST['submit_enq'])){
            $selected_option=false;
            if(isset($_POST['drop'])){
                $selected_option = $_POST['drop'];
             }
            $string_version = implode(',', $selected_option);
            
            $selected_option=$_POST['drop'];
            $name=$_POST['name'];
          
            $phone=$_POST['phone'];
            $skype_id=$_POST['skype_id'];
            $message=$_POST['message'];

              
            $to="info@cyberbusinessiq.com";
            
            $subject="Enqiry Form";
            $message="Name: ".$name."\n"."Phone: ".$phone."\n"."Skype_id:  ".$skype_id."\n"."Selected Services: ".$string_version."\n"."Message: ".$message;
            $headers="From:";
           $mail= mail($to,$subject,$message, $headers);
           
            
            if ($mail) {
                
                
                 echo"<script>swal('Thank You!', 'We will get back to you shortly', 'success');</script>";
                
                
            } else {
                
                echo"<script>swal('Ooops!', 'Something went wrong...', 'error');</script>";
            }
            
        }
?>

                <div id="mrova-form">
                    <form id="mrova-contactform" action="index.php" method="post">
                        
                        <ul>
                            <li>
                                <select id="example-getting-started" name="drop[]" multiple="multiple">
                                    <option value="Big Data & Analytics">
                                        <br>
                                        <span>Big Data & Analytics</span>
                                    </option>
                                    <option value="Mobile Application Development">Mobile Application Development</option>
                                    <option value="Virtual Reality">Virtual Reality</option>
                                    <option value="Social Media Marketing">Social Media Marketing</option>
                                    <option value="Machine Learning & AI">Machine Learning & AI</option>
                                    <option value="Internet of Things">Internet of Things</option>
                                    <option value="Enterprise & Infra Solution">Enterprise & Infra Solution</option>
                                    <option value="Cyber Security">Cyber Security</option>
                                    <option value="NFC & RFID Solution">NFC & RFID Solution</option>
                                    <option value="Skill developement">Skill developement</option>
                                    <option value="Idea Monetization Services">Idea Monetization Services</option>
                                    <option value="Events & Conferences">Events & Conferences</option>
                                </select>
                            </li>
                            <li>
                                <!--<label for="mrova-name">Your Name*</label>-->
                                <input type="text" name="name" class="required" id="mrova-name" value="" placeholder="Name*" value=" Name" required="required"
                                    name="username">
                            </li>


                            <li>
                                <!--<label for="mrova-email">Email*</label> -->
                                <input type="text" name="email" onchange="emailval()" class="required" id="mrova-email" value="" placeholder=" Email Id *"
                                    required="required">
                            </li>
                            <li>
                                <span id="mailms"></span>
                            </li>
                            <li>
                                <!--<label for="mrova-name">Your Name*</label>-->
                                <input type="text" name="phone" placeholder="Phone Number *" required="required">

                            </li>
                            <!--  <li><span id="mobilemsg"></span></li>-->


                            <li>
                                <!--<label for="mrova-name">Your Name*</label>-->
                                <input type="text" name="skype_id" id="mrova-name" value="" placeholder="Skype Id." required="required">
                            </li>


                            <li>
                                <!--	<label for="mrova-message">Message*</label>-->
                                <textarea class="required" id="mrova-message" name="message" rows="8" cols="30" placeholder="Description" required="required"></textarea>
                            </li>
                            <li>
                                <button name="submit_enq" type="submit" class="fl-btn main-color-bg effect submit-btn">
                                    <i class="fa fa-send"></i> Send Message
                                </button>
                            </li>
                        </ul>
                        <!-- <input type="submit" value="Send" id="mrova-sendbutton" name="mrova-sendbutton"> -->
                    </form>
                </div>
                <div id="mrova-img-control"></div>
                <br>

        </div>
        <br>
        <br>


       <!-- Sliding div starts here -->
       <form id="contact-form" style="z-index:5999;" method="post" enctype="multipart/form-data" action="index.php">
            <div id="slider" style="right:-352px;">
                <div id="sidebar" onclick="open_panel();">
                    <img src="img/sale.png">
                </div>

                <div id="header">
                    <h3 style="color:#000;">Sale Your Ideas</h3>

                    <input name="dname" type="text" required="required" name="username" placeholder="Enter Name*" id="username">
                    <br>
                    <input name="demail" type="email" placeholder="Email*">
                    <input name="dnum" type="text" placeholder="Enter phone Number">
                    <br>
                    <br>
                    <textarea  required name="message" placeholder="Describe Your Idea"></textarea>
                    <input type="file" name="attach1" required>
                    <br>    
                    <button name="submit_idea" type="submit" class="fl-btn main-color-bg effect submit-btn" class="error mb-30 text-center">
                        <i class="fa fa-send">Submit</i>
                    </button>
                </div>
            </div>
            </div>
            <!-- Sliding div ends here -->
        </form>
        <?php
error_reporting(E_ALL);
ini_set('display_errors', 0);

if (isset($_FILES) && (bool) $_FILES) {

    $allowedExtensions = array("pdf", "doc", "docx", "gif", "jpeg", "jpg", "png", "txt");

    $files = array();
    foreach ($_FILES as $name => $file) {
        $file_name = $file['name'];
        $temp_name = $file['tmp_name'];
        $file_type = $file['type'];
        $path_parts = pathinfo($file_name);
        $ext = $path_parts['extension'];
        if (!in_array($ext, $allowedExtensions)) {
            die("File $file_name has the extensions $ext which is not allowed");
        }
        array_push($files, $file);
    }


    $to = "info@cyberbusinessiq.com";
    $from = $_POST['demail'];  //your website email type here
    $subject = "Sale Your Idea :";
    


                        $name=$_POST['dname'];
                        $usermail=$_POST['demail'];
                        $phone = $_POST['dnum'];
                        $messa=$_POST['message'];

                        
                        $message="Name: ".$name."\n"."email: ".$usermail."\n"."Phone: ".$phone."\n"."Message: ".$messa;
                       

    $headers = "From: $from";

    

    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";


    $headers .= "\nMIME-Version: 1.8\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
    // $headers.='Content-Type:text/html';
    $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
    $message .= "--{$mime_boundary}\n";

    // preparing attachments
    for ($x = 0; $x < count($files); $x++) {
        $file = fopen($files[$x]['tmp_name'], "rb");
        $data = fread($file, filesize($files[$x]['tmp_name']));
        fclose($file);
        $data = chunk_split(base64_encode($data));
        $name = $files[$x]['name'];
        $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" .
                "Content-Disposition: attachment;\n" . " filename=\"$name\"\n" .
                
                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
        $message .= "--{$mime_boundary}\n";
    }
    // send

    $ok = mail($to, $subject, $message, $headers);
    if ($ok) {
        //header("location: index.php");
        echo"<script>swal('Thank You!', 'We will get back to you shortly', 'success');</script>";
    } else {
        echo "<p>mail could not be sent!</p>";
    }
}
?>
 
        <!-- END FOOTER -->

        <!-- Scroll To Top Button -->
        <a href="#" class="scroll-up bm-btn main-color-bg effect">
            <i class="fa fa-angle-up center bm-btn-txt"></i>
        </a>
        <!-- End Scroll To Top Button -->

        <!-- js placed at the end of the document so the pages load faster -->
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/multiselect.js"></script>
        <link rel="stylesheet" href="css/multiselect.css" type="text/css" />
        <!-- jQuery Typer JS -->
        <script src="js/jquery.typer.js"></script>
        <!-- jQuery Count To JS -->
        <script src="js/jquery.countTo.js"></script>
        <!-- Magnific Popup core JS file -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Owl Carousel JS -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- PARTICLES JS -->
        <script src="js/particles.js"></script>
        <!-- Custom js -->
        <script src="js/main.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                // alert('hi');
                $('#example-getting-started').multiselect();
            });
        </script>
        <script>
            function flag() {
                var a = 3e3;
                $("#flag1").delay(a).fadeOut(300)
                    , $("#mrova-contactform").delay(a).fadeIn(300)
            }
            function emailval() {
                $("#mailms").text("");
                var a = $("#mrova-email").val(); if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(a));
                else { var a = $("#mrova-email").val(""); $("#mailms").text("please enter valide email id").css("color", "red") }
            }
            function phonenumber() {
                $("#mobilemsg").text("");
                var a = $("#mobile").val();
                console.log(a);
                var t = "^([0|+[0-9]{1,5})?([7-9][0-9]{9})$";
                a.match(t) || ($("#mobilemsg").text("please enter 10 digit mobile number").css("color", "red"), $("#mobile").val(""))
            } !function (a) { a.fn.vAlign = function () { return this.each(function (t) { var e = a(this).height(), o = a(this).outerHeight(), r = (e + (o - e)) / 2; a(this).css("margin-top", "-" + r + "px"), a(this).css("top", "50%") }) }, a.fn.toggleClick = function () { var t = arguments; return this.click(function () { var e = a(this).data("iteration") || 0; t[e].apply(this, arguments), e = (e + 1) % t.length, a(this).data("iteration", e) }) } }(jQuery), $(window).load(function () { $img_control = $("#mrova-img-control"), $mrova_feedback = $("#mrova-feedback"), $mrova_contactform = $("#mrova-contactform"), $mrova_feedback.vAlign().css({ display: "block", height: $mrova_feedback.outerHeight() }), $img_control.vAlign().toggleClick(function () { $mrova_feedback.animate({ right: "-2px" }, 1e3) }, function () { $mrova_feedback.animate({ right: "-" + $mrova_feedback.outerWidth() }, 1e3) }), $("#mrova-sendbutton").click(function () { var a = "http://www.tersesoft.com/Enquiry/savehome", t = 0; return $(".required", $mrova_contactform).each(function (a) { "" === $(this).val() && t++ }), t > 0 ? void alert("Please fill in all the mandatory fields. Mandatory fields are marked with an asterisk *.") : ($("#mrova-sendbutton").attr("disabled", !0), $str = $mrova_contactform.serialize(), $.ajax({ type: "POST", url: a, data: $str, dataType: "JSON", success: function (a) { "success" == a ? ($("#mrova-contact-thankyou").show(), $mrova_contactform.hide(), $("#mrova-contactform")[0].reset(), $("#flag1").css("display", "block"), $("#mrova-sendbutton").attr("disabled", !1), flag()) : (alert("Unable to send your message. Please try again."), $("#mrova-sendbutton").attr("disabled", !1)) } }), !1) }) });
        </script>



</body>

</html>