<?php if( session_id()=='' ) { exit(0); } ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DgTSC</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Demo project">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/x-icon" href="<?php echo 'images/icon.jpg'; ?>"/>
        <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="styles/custom.css">
        <link rel="stylesheet" type="text/css" href="plugins/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
        <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
        <link rel="stylesheet" type="text/css" href="plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css">
    </head>

    <body>

        <div class="super_container">

            <header class="header"> <!-- HEADER -->
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo"><a href="index.php">DgTSC</a></div>
                                <nav class="main_nav">
                                    <ul>
                                        <li class="active"><a href="index.php">HOME</a></li>
                                        <li class="active"><a href="article.php?query=type&value=latest">ARTICLE</a></li>
                                        <li class="active"><a href="video.php?query=type&value=latest">VIDEO</a></li>
                                        <li class="active"><a href="dashboard_post.php?query=type&value=latest">DASHBOARD</a></li>
                                        <li class="active"><a href="about_us.php">ABOUT US</a></li>
                                    </ul>
                                </nav>

                                <div class="search_container ml-auto">
                                    <div class="weather">
                                        <?php   if( isset($_SESSION["user"]) && $_SESSION["user"]["state"]=="active" ) { $profile_link =  "profile.php?s_id=".$_SESSION["user"]["id"]; ?>
                                                    <a href="<?php echo $profile_link; ?>"> <button type="button" class="btn btn-primary btn-sm ten-cut-text"> <?php echo $_SESSION["user"]["username"]; ?> </button> </a>
                                                    <button type="button" class="btn btn-primary btn-sm" id="logout" onclick="logout()"> LOGOUT </button>
                                        <?php   } else { ?>
                                                    <a href="security_registration.php"> <button type="button" class="btn btn-primary btn-sm"> REGISTER </button> </a>
                                                    <a href="security_login.php"> <button type="button" class="btn btn-primary btn-sm"> LOGIN </button> </a>
                                        <?php   } ?>
                                    </div>
                                    <form action="#">
                                        <input type="search" class="header_search_input" required="required" placeholder="TYPE TO SEARCH . . ." title="">
                                        <img class="header_search_icon" src="<?php echo 'images/search.png'; ?>" alt="">
                                    </form>
                                </div>

                                <div class="hamburger ml-auto menu_mm">
                                    <i class="fa fa-bars trans_200 menu_mm" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400"> <!-- MENU -->
                <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>

                <div class="logo menu_mm"> <a href="index.php">DREAMS FOR TOMORROW</a> </div>

                <div class="search">
                    <form action="#">
                        <input type="search" class="header_search_input menu_mm" required="required" placeholder="TYPE TO SEARCH. . .">
                        <img class="header_search_icon menu_mm" src="<?php echo "images/search-1.png"; ?>" alt="">
                    </form>
                </div>

                <nav class="menu_nav">
                    <ul class="menu_mm">
                        <li class="menu_mm"><a href="index.php">HOME</a></li>
                        <li class="menu_mm"><a href="article.php?query=type&value=latest">ARTICLE</a></li>
                        <li class="menu_mm"><a href="video.php?query=type&value=latest">VIDEO</a></li>
                        <li class="menu_mm"><a href="dashboard_post.php?query=type&value=latest">DASHBOARD</a></li>
                        <li class="menu_mm"><a href="about_us.php">ABOUT US</a></li>
                    </ul>
                    <br>

                    <?php   if( isset($_SESSION["user"]) && $_SESSION["user"]["state"]=="active" ) { $profile_link =  "profile.php?s_id=".$_SESSION["user"]["id"]; ?>
                                <a href="<?php echo $profile_link; ?>"> <button type="button" class="btn btn-primary btn-sm ten-cut-text"> <?php echo $_SESSION["user"]["username"]; ?> </button> </a>
                                <button type="button" class="btn btn-primary btn-sm" id="logout" onclick="logout()"> LOGOUT </button>
                    <?php   } else { ?>
                                <a href="security_registration.php"> <button type="button" class="btn btn-primary btn-sm"> REGISTER </button> </a>
                                <a href="security_login.php"> <button type="button" class="btn btn-primary btn-sm"> LOGIN </button> </a>
                    <?php   } ?>
                </nav>
            </div>
