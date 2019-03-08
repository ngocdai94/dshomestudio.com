<!-- HEADER STARTS -->
<!DOCTYPE html>
<html lang="en-us">
<head>
    <title><?=$title?></title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="DS Home Studio - Home Interior Design and Professional Photography for Real Estates">
    <meta name="keywords" content="DS, home, studio, interior, design, professional, photography, real, estaste">
    
    <!-- under construction: no follow -->
    <meta name="robots" content="index,nofollow" />
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Facebook Metadata -->
    <meta property="og:image:height" content="473">
    <meta property="og:image:width" content="903">
    <meta property="og:title" content="DS Home Studio">
    <meta property="og:description" content="Interior Design and Professional Photography">
    <meta property="og:url" content="https://dshomestudio.com">
    <meta property="og:image" content="https://dshomestudio.com/imgs/og-image.jpg">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Spectral:400,500" rel="stylesheet">

    <!-- CSS & FontAwesome -->
    <link rel="stylesheet" href="/css/all.css"/> 
    <link rel="stylesheet" href="css/main.css"/> 
    <link rel="stylesheet" href="/css/bootstrap.css">
    <?=$cssForm?>

    <!-- JavaScript -->
    <script defer src="/js/all.js"></script>
</head>
<body>
    <!-- START WRAPPER -->
    <div class="content">
        <header>
            <h1 id="logo">
                <a href="/index.php"> DS Home Studio</a>
            </h1>
            
            <!-- Boostrap Nav Menu with Dynamic Page Modification-->
            <!-- navbar-light bg-light -->
            <nav class="navbar navbar-expand-lg navbar-light" >
                <!-- <a class="navbar-brand" href="/index.php">DS Home Studio</a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item <?=$homeActive?>">
                            <a class="nav-link" href="/index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item <?=$aboutActive?>">
                            <a class="nav-link" href="/about.php">About Us</a>
                        </li>
                        <li class="nav-item dropdown <?=$serviceActive?>">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Service</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item <?=$interiorActive?>" href="/interior-design/index.php">Interior Design</a>
                                <a class="dropdown-item <?=$photographyActive?>" href="/photography/index.php">Photography</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown <?=$portfolioActive?>">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Portfolios</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item <?=$interiorPortfolioActive?>" href="/portfolio/interior.php">Interior Design</a>
                                <a class="dropdown-item <?=$photographyPortfolioActive?>" href="/portfolio/photography.php">Photography</a>
                                <a class="dropdown-item <?=$videoPortfolioActive?>" href="/portfolio/videos.php">Videos</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?=$contactActive?>" href="/contact.php">Contact Us</a>
                        </li>
                    </ul>

                    <form class="form-inline my-2 my-lg-0">
                        <!-- id="autocomplete" -->
                        <input  class="form-control mr-sm-2" type="search" placeholder="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </header>
<!-- HEADER ENDS -->
