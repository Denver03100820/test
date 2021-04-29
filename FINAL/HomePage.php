<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lhoyzki Milkshake & Milktea</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="HomePage.css" type="text/css">
    <link rel="icon" href="img/colored logo.jpg">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

</head>

<body class="bodycolor">

    <!--Header-->
    <section id="header">
        <nav class="navbar navbar-expand-xl fixed-top navbar-light bg-custom">
            <div class="container">
                <a class="navbar-brand" href="#header"><img id="navbarBrand" src="img/coloredlogo.png" style="margin-left: 30px;" width="90" height="60"><span>Lhoyzki</span></a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarMenu">

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#header">HOME</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#new">FAVORITES</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true">MENU</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <a class="dropdown-item" href="milkshake.html">Milkshake</a>
                                <a class="dropdown-item" href="milktea.html">Milktea</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#about">ABOUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!--End Header-->

    <!--Hero Section-->
    <section id="hero">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!--Wrapper for Slides-->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" data-interval="7000">
                    <img class="d-md-block img-fluid" src="img/banner4.png">
                </div>
                <div class="carousel-item" data-interval="5000">
                    <img class="d-md-block img-fluid" src="img/banner3.png">
                </div>
                <div class="carousel-item" data-interval="5000">
                    <img class="d-md-block img-fluid" src="img/banner1.gif">
                </div>
                <div class="carousel-item" data-interval="5000">
                    <img class="d-md-block img-fluid" src="img/banner2.gif">
                </div>
            </div>

            <!--Left and right-->
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </section>
    <!--End Hero Section-->

    <!--Favorites Section-->
    <section id="new">
        <div class="jumbotron text-center" style="margin-bottom: 0" id="favheader">
            <h1 class="menu-title" style="color: #725527; margin-top: 40px;">FAVORITES</h1><br>
            <hr style="width:50%; margin-left:25%; margin-right:25%">
        </div>

        <div class="container">

            <div class="card-deck" style=" margin-bottom: 200px">
                <div class="card">
                    <a href="milktWintermelon.html">
                        <img class="card-img-top" class="img-responsive" src="img/FavClassicWintermelonMT.png" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Classic Wintermelon Milktea</h5>
                        <hr style="border-top: 1px solid;">
                        <p class="card-text">This drink is light and refreshing, perfect for a hot day! The wintermelon has a distinctive flavor that resembles caramel and adds a new twist to your regular milktea drink.
                        </p>
                        <br><br>
                    </div>
                </div>

                <div class="card">
                    <a href="milkshCNC.html">
                        <img class="card-img-top" class="img-responsive" src="img/FavCookiesNCreamMS.png" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Cookies and Cream Milkshake</h5>
                        <hr style="border-top: 1px solid;">
                        <p class="card-text">A delicious milkshake made with only 3 ingredients:
                            <br>ice cream, milk, and Oreos! The perfect treat on a hot summer day.
                        </p>
                        <br><br>
                    </div>
                </div>

                <div class="card">
                    <a href="milktCaramel.html">
                        <img class="card-img-top" class="img-responsive" src="img/FavPremiumCaramelSugarMT.png" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Premium Caramel Sugar Milktea</h5>
                        <hr style="border-top: 1px solid;">
                        <p class="card-text">The perfect blend of creamy milk and tea, swirls of sweet caramel-colored sugar, chewy and tasty tapioca pearls… What's not to love about our Premium Caramel Sugar Milktea? That is for only
                            <strong>₱59!</strong>
                        </p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Favorites Section-->

    <!--Menu Section-->
    <section id="menu">
        <div class="fixed-bg" id="menuheader">
            <div class="section-intro">
                <span class="title2 p-l-15 p-r-15" style="color: #322d11;">MENU</span>
            </div>
        </div>

        <div class="container" style="margin-top: 200px;">

            <div class="row">

                <div class="container1" style=" margin-bottom: 200px;">
                    <div class="centerimage">
                        <div class="col-md-12">
                            <img src="img/Milkshakes.png" alt=" " class="image">
                            <div class="middle">
                                <div class="text"><a href="milkshake.html" style="color: #F0FFF0; text-decoration: none;"><b>MILKSHAKE</b></a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container2" style=" margin-bottom: 200px;">
                    <div class="centerimage">
                        <div class="col-md-12">
                            <img src="img/Milktea.png" alt=" " class="image">
                            <div class="middle">
                                <div class="text"><a href="milktea.html" style="color: #F0FFF0; text-decoration: none;"><b>MILKTEA</b></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Menu Section-->

    <!--Footer Section-->
    <section id="about">
        <footer class="page-footer pt-4">
            <div class="container-fluid text-center text-md-left">
                <div class="row">

                    <div class="col-md-3 mx-auto">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">About Us</h5><br>
                        <p style="font-family: 'Comfortaa' ; font-size: 14px; color: #f0ead6;">
                            The business was created by a couple who lives in Taguig city. The milktea business became a trend that made them think of it as a source of income also.<br> Favorite flavors among Filipinos include cheese, milk tea with pearl,
                            and wintermelon. We introduce to you<br>
                            <span style="color:#F0FFF0;font-weight:bold;font-style:oblique">Lhoyzki - Milkshake & Milktea</span><br><br> Our customer's satisfaction is important<br> That is why we can guarantee you that our products would satisfy the
                            your cravings.
                        </p>
                    </div>

                    <hr class="clearfix w-100 d-md-none pb-3">

                    <div class="col-md-3 ml-auto">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Work Times</h5><br>
                        <ul class="list-unstyled">
                            <li>
                                <p style="font-family: 'Comfortaa';font-size: 13px; color: #f0ead6">Monday - Saturday</p>
                            </li><br>
                            <li>
                                <p style="font-family: 'Comfortaa';font-size: 13px; color: #f0ead6"> 9:00 am - 10:00 pm</p>
                            </li><br><br><br><br>
                        </ul>

                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact Us</h5><br>
                        <ul class="list-unstyled">
                            <li>
                                <p style="font-family: 'Comfortaa';font-size: 13px; color: #f0ead6"><img src="https://img.icons8.com/windows/26/000000/marker.png" width="20" height="20" alt="location"> Taguig City</p>
                            </li><br>
                            <li>
                                <p style="font-family: 'Comfortaa';font-size: 13px; color: #f0ead6"><img src="https://img.icons8.com/windows/32/000000/phone.png" width="20" height="20" alt="contact"> 09233269876</p>
                            </li><br>
                            <li>
                                <p style="font-family: 'Comfortaa';font-size: 13px; color: #f0ead6"><img src="https://img.icons8.com/material-outlined/24/000000/important-mail.png" width="20" height="20" alt="email"> lhoyzkimm@gmail.com</p>
                            </li>
                        </ul>
                    </div>

                    <hr class="clearfix w-100 d-md-none pb-3">

                    <div class="col-md-3 ml-auto">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Other Sites</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://www.facebook.com/Lhoyzki-Milkshake-Milktea-101725998492909" target="_blank">
                                    <img src="https://www.flaticon.com/svg/static/icons/svg/124/124010.svg" width="30" height="30" alt="facebook">
                                </a>
                                <a href="https://twitter.com/LhoyzkiM" target="_blank">
                                    <img src="https://www.friendsofnewwalk.com/social-media/twitter.svg" width="30" height="30" alt="twitter"><br>
                                </a>
                            </li><br><br><br><br>

                            <li>
                                <h4 class="opinions"><span style="color: #f0ead6; font-family:'Comfortaa';">Your opinions matter to us</span></h4>
                                <label for="feedbacks"><span style="color: #f0ead6; font-family: 'Comfortaa';"> Write your Feedbacks below:</span></label><br>

                                <form action="HomePage.php" method="POST">

                                <?php
                                    $server = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $DB = "lhoyzki_ordering";

                                    $connection = new mysqli($server,$username,$password,$DB); //connection

                                    if(isset($_POST['SUBMIT']))
                                    {
                                        afshdnxfdnths;sdg
                                    }

                                ?>

                                    <textarea rows="7" cols="40"></textarea><br><br>
                                    <input class="submit" type="reset" value="SUBMIT">
                                    

                             


                                </form>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="footer-copyright text-center py-5">© 2020 • Lhoyzki Milkshake & Milktea | All rights reserved </div>

        </footer>
    </section>
    <!--End Footer-->

    <script>
        $(document).ready(function() {

            $('.col-md-4, .card').hover(
                function() {
                    $(this).animate({
                        marginTop: "-=1%",
                    }, 200);
                },
                function() {
                    $(this).animate({
                        marginTop: "0%"
                    }, 200);
                }
            );
        });
    </script>

</body>

</html>