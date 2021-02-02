<!DOCTYPE html>
<html lang="pl">
    <head>
    <?php wp_head(); ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Marek Trocha | <?php the_title(); ?></title>
    <link rel="icon" type="image/x-icon" href="wp-content/themes/marek-trocha/images/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

</head>

<body id="page-top">

    <!-- Video background -->
    <video autoplay muted loop id="myVideo">
        <source src="http://trocha.net.pl/background.mp4" type="video/mp4">
        <source src="http://trocha.net.pl/background.webm" type="video/webm">
        Your browser does not support HTML5 video.
    </video>

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="wp-content/themes/marek-trocha/images/main_black.png"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <a class="logo--dark js-scroll-trigger" href="#page-top"><img src="wp-content/themes/marek-trocha/images/main_black_mobile.png"></a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="https://github.com/marektrocha" target="_blank">GitHub</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Poznaj mnie</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Page -->
    <header class="main-page">   

        <!-- Main Page: content -->
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <div class="logo--standard pl-4">
                    <img src="wp-content/themes/marek-trocha/images/main.png">
                </div></br>
                <a class="button js-scroll-trigger" href="#about">Zobacz więcej</a>
            </div>
        </div>

        <?php
            if (strpos($_SERVER['HTTP_USER_AGENT'], 'Windows') == true) { ?>
                <div class="play-pause">
                    <button id="myBtn" onclick="myFunction()">Pause</button>
                </div>
            <?php }
        ?>
        
    </header>