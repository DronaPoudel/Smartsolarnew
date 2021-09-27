<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/camera.css"/>
    <link rel="stylesheet" href="css/jquery.fancybox.css"/>
    <link rel="stylesheet" href="css/owl-carousel.css"/>
    <link rel="stylesheet" href="css/contact-form.css"/>
    <link rel="stylesheet" href="css/style.css">

    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>

    <!--[if lt IE 9]>
    <html class="lt-ie9">
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <script src='js/device.min.js'></script>
</head>

<body>
<div class="page">
<header id="header" class="header page2">
        <div id="stuck_container" class="stuck_container">
            <div class="header_panel">

                <div class="brand">
                    <div class="brand_name">
                        <a href="./"> <img src="images/Logo.png" alt=""> </a>
                    </div>
                </div>

                <a class="search-form-toggle" href="#"></a>


                <nav class="nav">
                    <ul class="sf-menu">
                        <li >
                            <a href="./">Home</a>
                        </li>
                        <li >
                            <a href="index-1.php">About Us</a>
                        </li>
                        <li >
                            <a href="index-2.php">Services</a>
                        </li>
                        <li >
                            <a href="index-4.php">Blog </a>
                        </li>
                        <li class="active">
                            <a href="Gallery.php">Gallery</a>
                        </li>
                        <li>
                            <a href="index-5.html">Contact Us</a>
                        </li>
                    </ul>
                </nav>

            </div>
            <div class="search-form">
                <div class="container">
                    <form id="search" action="search.php" method="GET" accept-charset="utf-8">
                        <label class="input" for="in">
                            <input id="in" type="text" name="s" placeholder="Type your search term here..."/>
                        </label>
                        <button type="submit" class="fa fa-search"></button>
                    </form>
                </div>
            </div>
        </div>

    </header>
    
    <!--========================================================
                              CONTENT
    =========================================================-->
        <div class="bg-content">
            <div class="container center well4">
                <h2 class="wow fadeInUp" data-wow-delay="0.4s">Our Gallery</h2>
                

                <ul id="isotope-filters" class="filter-btns wow fadeInLeft" data-wow-delay="0.4s">
                    <li class="active">
                        <a href="#" data-filter="*">All</a>
                    </li>
                    <li>
                        <a href="#" data-filter="factorial">New Staff Hiring Program</a>
                    </li>
                    <li>
                        <a href="#" data-filter="deposit">New Staff Hiring Party</a>
                    </li>
                    <!-- <li>
                        <a href="#" data-filter="proquo">Pro quo</a>
                    </li>
                    <li>
                        <a href="#" data-filter="escorol">Escorol</a>
                    </li>
                    <li>
                        <a href="#" data-filter="olypian">Olypian</a>
                    </li> -->
                </ul>

                <div id="isotope" class="row isotope wow fadeInRight" data-wow-delay="0.6s">

                    <div class="grid_4 item isotope-item isotope-item-gallery factorial" data-category="factorial">
                        <div class="lazy-img-wr">
                            <a class="lazy-img thumb" data-fancybox-group="1" style="padding-bottom: 100%"
                               href="images/page-1_img10_original.jpg">
                                <img data-src="images/page-1_img10.jpg" src="#" alt=""/>
                                <span class="thumb_overlay"></span>
                            </a>
                        </div>
                        
                    </div>


                    <div class=" grid_4 item isotope-item isotope-item-gallery deposit" data-category="deposit">
                        <div class="lazy-img-wr">
                            <a class="lazy-img thumb" data-fancybox-group="1" style="padding-bottom: 100%"
                               href="images/page-1_img11_original.jpg">
                                <img data-src="images/page-1_img11.jpg" src="#" alt=""/>
                                <span class="thumb_overlay"></span>
                            </a>
                        </div>
                        
                    </div>

                    <div class="grid_4 item isotope-item isotope-item-gallery proquo olypian" data-category="olypian">
                        <div class="lazy-img-wr">
                            <a class="lazy-img thumb" data-fancybox-group="1" style="padding-bottom: 100%"
                               href="images/page-1_img12_original.jpg">
                                <img data-src="images/page-1_img12.jpg" src="#" alt=""/>
                                <span class="thumb_overlay"></span>
                            </a>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>


    </section>

    <!--========================================================
                              FOOTER
    =========================================================-->
    <?php include("./partials/formfooter.php"); ?>

</div>

<script src="js/script.js"></script>
</body>
</html>