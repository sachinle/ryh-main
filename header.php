<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="semantic.css" />
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="./responsive.css"><!-- Google tag (gtag.js) -->  <script async src="https://www.googletagmanager.com/gtag/js?id=G-5JRFJ4X0D3"></script>  <script>    window.dataLayer = window.dataLayer || [];    function gtag() {      dataLayer.push(arguments);    }    gtag('js', new Date());    gtag('config', 'G-5JRFJ4X0D3');  </script>
<header>
    <style>
        div#serviceDropdown {
            border: none;
        }

        .dropdown-menu a {
            font-size: 13px;
            font-weight: 600px;
            transition: all 0.5s;
            border-bottom: 1px solid #13519336;
        }

        .dropdown-menu a:hover {
            background: linear-gradient(to top left, #e62b2b 0%, #990000 100%);
            color: white;
            font-size: 15px;
        }

        /* Add your custom styles here */
        @media only screen and (min-width: 401px) {
            .dropdown:hover .dropdown-menu {
                display: block !important;
            }
        }

        @media only screen and (max-width: 400px) {
            .dropdown-menu {
                display: block !important;
            }

            a.dropdown-item {
                text-align: right;
            }
        }
    </style>
    <nav class="navbar navbar-expand-sm navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="javascript:void(0)"><img src="./assets/RYH LOGO BLACK 01 (1) 1.png"
                    alt="image" class="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav mx-auto">
                    <li class="p-3">
                        <a href="./index.php">
                            <button class="btn nav-btns fw-normal">Home</button>
                        </a>
                    </li>
                    <li class="p-3">
                        <a href="./about.php">
                            <button class="btn nav-btns fw-normal">About us</button>
                        </a>
                    </li>
                    <li class="p-3 dropdown">
                        <a class="btn nav-btns fw-normal" href="./service.php" id="serviceDropdownLink">
                            Services
                        </a>
                        <div class="dropdown-menu" id="serviceDropdown" aria-labelledby="serviceDropdownLink">
                            <a class="dropdown-item" href="seo.php">SEO</a>
                            <a class="dropdown-item" href="branding.php">Branding</a>
                            <a class="dropdown-item" href="ui ux design.php">UI / UX Design</a>
                            <a class="dropdown-item" href="smm.php">SMM</a>
                            <a class="dropdown-item" href="sem.php">SEM</a>
                            <a class="dropdown-item" href="web development.php">Web Development</a>
                            <a class="dropdown-item" href="pay per click.php">Pay-Per-Click</a>
                            <a class="dropdown-item" href="mobile app.php">Mobile App</a>
                        </div>
                    </li>
                    <li class="p-3">
                        <button class="btn nav-btns fw-normal">Projects</button>
                    </li>
                    <li class="p-3">
                        <a href="./contact-us.php">
                            <button class="btn nav-btns fw-normal">Contact us</button>
                        </a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn rounded-pill git f-16" type="button">Get in Touch</button>
                </form>
            </div>
        </div>
    </nav>
</header>