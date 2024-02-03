<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taxi Touring Sri Lanka</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="apple-touch-icon" sizes="180x180" href="favi/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favi/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favi/favicon-16x16.png">
    <link rel="manifest" href="favi/site.webmanifest">
    <link rel="shortcut icon" href="favi/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="favi/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">

</head>

<body>

    <header>


        <nav class="navbar navbar-expand-lg   header-style py-0 d-none d-md-block" id="myHeader">
            <div class="container-fluid">
                <a class="navbar-brand" href="">
                    <img src="img/Crypto-World-Logo.png" class="main-logo" alt="">
                </a>
                <button class=" bg-gradient bg-white navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav main-navigation">                        
                  
                        <li class="nav-item">
                            <a class="nav-link" href="#">Company</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Buy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">NFT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Solutions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Markets</a>
                        </li>
                      
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">More</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-white header-btn" href="contact"><i aria-hidden="true" class="fas fa-globe"></i></a>
                        </li>
                     
                        <li class="nav-item">
                            <a class="text-white header-btn" href="contact">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-white header-btn" href="contact">Sign Up</a>
                        </li>



                    </ul>

                </div>
            </div>
        </nav>

        <nav class="navbar bg-body-tertiary d-none mobile-navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="">
                    <img src="img/taxi touring sri lanka.png" class="main-logo" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Main Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">



                            <li class="nav-item">
                                <a class="nav-link" href="">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about">About</a>
                            </li>


                            <?php foreach ($category as $k => $cate) : ?>

                                <li class="nav-item">
                                    <a class="nav-link" href="tour/<?= strtolower(url_title($cate->CategoryTitle)) ?>/<?= $cate->CategoryId ?>"><?= $cate->CategoryTitle ?></a>
                                </li>
                            <?php endforeach ?>



                            <li class="nav-item">
                                <a class="nav-link" href="safari">Safari</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="gallery">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="blog">Our Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact">Contact us</a>
                            </li>

                        </ul>


                    </div>
                </div>
            </div>
        </nav>
    </header>