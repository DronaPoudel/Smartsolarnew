<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Results</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">

    <script src='js/device.min.js'></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="search/search.js"></script>


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
</head>

<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <?php include("./partials/nav.php"); ?>

    <!--========================================================
                              CONTENT
    =========================================================-->
    <section id="content" class="content">
        <div class="container well2">
            <h2 class="center">Search</h2>
            <h6 class="pad1 off1 center">Search Results</h6>

            <div id="search-results" class="off1"></div>
        </div>
    </section>

    <!--========================================================
                              FOOTER
    =========================================================-->
    <footer id="footer" class="parallax footer page2">
        <div class="container">
            <ul class="social-list2">
                <li>
                    <a class="fa fa-twitter" href="#"></a>
                </li>
                <li>
                    <a class="fa fa-facebook" href="#"></a>
                </li>
                <li>
                    <a class="fa fa-google-plus" href="#"></a>
                </li>
            </ul>

            <div class="copyright">
                <span>Solar NRG</span> © <span id="copyright-year"></span>
                <a href="index-6.html">Privacy policy</a>
                . Terms of use
            </div>
        </div>
    </footer>
</div>

<script src="js/script.js"></script>

</body>
</html>