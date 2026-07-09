<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
<!-- Bootstrap CSS is loaded by each page's <head>; not re-loaded here in the <body>,
     which would otherwise override page styles (.card rules) lower in the cascade. -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"></noscript>
<script src="assets/vendor/bootstrap.bundle.min.js?v=<?php echo @filemtime(__DIR__ . '/assets/vendor/bootstrap.bundle.min.js'); ?>" defer></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5JRFJ4X0D3"></script>
<script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'G-5JRFJ4X0D3');</script>
<style>
    .navbar {
        background: #fff;
        box-shadow: 1px 3px 4px 0 #adadad33;
    }

    .navbar-light .navbar-nav .nav-link {
        color: #252525;
        font-weight: 400;
        transition: 0.3s;
        padding-left: 24px !important;
        padding-right: 24px !important;
        font-size: 15px;
    }

    .navbar-light .navbar-nav .nav-link:focus,
    .navbar-light .navbar-nav .nav-link:hover {
        color: red;
        text-decoration: underline;
        transition: 0.3s;
    }

    .dropdown-menu a {
        font-size: 13px;
        font-weight: 600px;
        transition: all 0.5s;
    }

    .dropdown-menu a:hover {
        background: linear-gradient(to top left, #e62b2b 0%, #990000 100%);
        color: white;
        font-size: 15px;
    }

    .sm-menu {
        border-radius: 0px;
        border: 0px;
        top: 97%;
        box-shadow: rgba(173, 173, 173, 0.2) 1px 3px 4px 0px;
    }

    .dropdown-item {
        color: #3c3c3c;
        font-size: 14px;
    }

    .dropdown-item.active,
    .dropdown-item:active {
        color: #fff;
        text-decoration: none;
        background-color: red;
    }

    .navbar-toggler {
        outline: none !important;
    }

    .megamenu-li {
        position: static;
    }

    ul.navbar-nav.navbar-light {
        margin-right: 140px;
    }

    .dropdown-menu.sm-menu {
        border-radius: 10px;
        border: 1px solid #ffefef9c;
        background: #ffffff9c;
        width: 300px;
        backdrop-filter: blur(10px);
        box-shadow: 4px 5px 8px grey;
    }

    a.dropdown-item {
        font-size: 14px;
        font-weight: 500;
    }
    
    .icon-services {
        width: 12% !important;
        margin-right: 10px;
    }

    .service-link {
        color: #000000;
        text-decoration: none;
    }

    .service-link:hover {
        color: #ff3737;
        text-decoration: underline;
    }

    .service-link-parent {
        padding: 7px;
    }
    nav.navbar.navbar-expand-lg.navbar-light.sticky-top{
        padding:0;
    }
    img.navbar-brand{
        width:50%;
    }
    .nav-b{
        width:28%;
    }
    @media only screen and (max-width: 800px) {
        .get-in-touch{
            display:none;
        }
        button.btn.btn-white.text-danger.rounded-pill.border-danger {
            display: none;
        }

        ul.navbar-nav.navbar-light {
            text-align: right;
            margin-right: 0;
        }

        .dropdown-menu.sm-menu.show {
            text-align: right;
        }

        .dropdown-menu {
            background-color: #f5f5f5;
        }

        li.nav-item.dmenu.dropdown {
            display: flex;
            flex-flow: column;
            align-items: end;
        }
        nav.navbar.navbar-expand-lg.navbar-light.sticky-top{
            padding:15px 5px;
        }
        img.navbar-brand{
            width:100%;
        }
        .nav-b{
            width:38%;
        }
    }
    a.service-link.mx-2{
        font-size: 15px;
    }

    /* Open the services mega-menu on hover (desktop), click handled by Bootstrap on mobile */
    @media (min-width: 992px) {
        .navbar-nav .dmenu:hover > .dropdown-menu {
            display: block;
        }
    }
</style>
<div class="bg-danger text-end py-1">
    <div class="container-fluid text-white">
         <i class="fas fa-phone-square-alt"></i><a class="text-decoration-none text-white" href="tel: +91 95853 80011"> +91 95853 80011</a> |<a class="text-decoration-none text-white" href="tel: +91 99439 20011"> +91 99439 20011</a>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
        <a href="./" class="nav-b" aria-label="Rank You Higher home">
            <img class="navbar-brand img-fluid d-block site-logo" src="assets/ryh-logo.png"
                alt="Rank You Higher - digital marketing company" width="180" height="48">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobile_nav"
            aria-controls="mobile_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mobile_nav">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 float-md-right"></ul>
            <ul class="navbar-nav navbar-light">
                <li class="nav-item">
                    <a class="nav-link" href="./">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./about.php">About Us</a>
                </li>
                <li class="nav-item dmenu dropdown">
                    <div class="d-flex service-link-parent">
                        <a class="service-link mx-2" href="./service.php">Services</a>
                        <button class="service-link dropdown-toggle btn p-0 border-0 bg-transparent" id="navbarDropdown"
                            type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            aria-label="Open services menu"></button>
                    </div>
                    <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item d-flex " href="./mobile-app-development-company-coimbatore.php"><img
                                src="./assets/Service-pg/Mobile App.png" alt="Mobile App.png" class="img-fluid d-block icon-services">
                            <span class="my-auto">Mobile App Development</span></a>
                        <a class="dropdown-item d-flex " href="./web-app-development-company-coimbatore.php"><img
                                src="./assets/icon.png" alt="Web Design.png" class="img-fluid d-block icon-services">
                        <span class="my-auto">Web App Development</span></a>
                        <a class="dropdown-item d-flex " href="./web-development-company-in-coimbatore.php"><img
                                src="./assets/Service-pg/Web Design.png" alt="Web Design.png" class="img-fluid d-block icon-services">
                        <span class="my-auto">Website Development</span></a>
                        <a class="dropdown-item d-flex " href="./ui-ux-design-company-in-coimbatore.php"><img
                            src="./assets/Service-pg/UI  UX Design.png" alt="UI  UX Design.png"
                        class="img-fluid d-block icon-services"> <span class="my-auto">UI / UX Design</span></a>
                        <a class="dropdown-item d-flex " href="./seo-company-in-coimbatore.php"><img src="./assets/Service-pg/SEO.png" alt="SEO.png"
                                class="img-fluid d-block icon-services"> <span class="my-auto">SEO</span></a>
                        <a class="dropdown-item d-flex " href="./branding-company-in-coimbatore.php"><img src="./assets/Service-pg/Branding.png"
                                alt="" class="img-fluid d-block icon-services"> <span
                                class="my-auto">Branding</span></a>
                        <a class="dropdown-item d-flex " href="./pay-per-click-company-in-coimbatore.php"><img
                                src="./assets/Service-pg/Pay-Per-Click.png" alt="Pay-Per-Click.png"
                                class="img-fluid d-block icon-services"> <span class="my-auto">Pay-Per-Click</span></a>                            
                        <a class="dropdown-item d-flex " href="./social-media-marketing-company-in-coimbatore.php"><img src="./assets/Service-pg/SMM.png" alt="SMM.png"
                                class="img-fluid d-block icon-services"> <span class="my-auto">SMM</span></a>
                        <a class="dropdown-item d-flex " href="./search-engine-marketing-company-coimbatore.php"><img src="./assets/Service-pg/SEM.png" alt="SEM.png"
                                class="img-fluid d-block icon-services"> <span class="my-auto">SEM</span></a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="./portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="./contact-us.php">Contact us</a></li>
            </ul>
        </div>
        <a href="./contact-us.php" class="get-in-touch"><button class="btn btn-white text-danger rounded-pill border-danger">Get in Touch</button></a>
    </div>
</nav>

<!-- Mobile collapse & dropdown handled by the deferred Bootstrap 5 bundle above.
     Desktop hover-to-open is pure CSS (see <style> block) — no jQuery / Bootstrap 4 needed. -->