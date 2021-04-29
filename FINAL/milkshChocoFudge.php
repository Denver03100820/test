<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lhoyzki Milkshake</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="milkshChocoFudge.css" type="text/css">
    <link rel="icon" href="img/colored logo.jpg">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

</head>
<body class="bodycolor">

    <!--Header-->
    <section id="header">
        <nav class="navbar navbar-expand-xl fixed-top navbar-light bg-custom">
            <div class="container">
                <a class="navbar-brand" href="HomePage.php"><img id="navbarBrand" src="img/coloredlogo.png" style="margin-left: 30px;" width="90" height="60"><span>Lhoyzki</span></a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarMenu">

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="HomePage.php">HOME</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="HomePage.php #new">FAVORITES</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true">MENU</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <a class="dropdown-item" href="milkshake.php">Milkshake</a>
                            <a class="dropdown-item" href="milktea.php">Milktea</a>
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

    <!--Milkshake Seperate Per Product Page-->
    <div class="container" style="margin-top:30px">
        
        <div class="row">
    
            <div class="col-md-6">
                <img src="img/ChocoFudge(bg).png" class="centerimage">   
            </div>
    
            <div class="col-md-6">
                <div class="card" style="margin-top: 100px;">
                    <div class="card-body">
                        <div class="textcolor">
                            <h4>Choco Fudge Milkshake</h4><hr style="border-top: 1px solid;">
                            <p>Be crazy and in love with our sweetest shake that is loaded with brownies and chocolate fudge that will make you stun for minutes.</p><br>
                            
                            <h3>Ingredients: </h3><br>
                            <h5>Whole Milk, Dark Chocolate Hot Fudge Sauce, Vanilla Extract, Blended Cream, 
                                Vanilla Ice Cream, Chocolate Shavings</h5><br><br>

                            <h3>Benefits: </h3><br>
                            <h5>The benefits of drinking milkshake is essentially good for the bones and teeth health because it supplies calcium our body needs.</h5><br><br>

                            <b>Available Size/s:</b><br><br>
                            <select class="select-size" id="size">
                                <option value="small"><h6>Small ₱25.00</h6></option><br>
                                <option value="large"><h6>Large ₱35.00</h6></option><br>
                                <option value="xl"><h6>Extra Large ₱45.00</h6></option><br>
                            </select><br><br>

                            <b>With Toppings</b><br><br>
                            <select class="select-toppings" id="toppings">
                                <option value="smallt"><h6>Small ₱30.00</h6></option><br>
                                <option value="larget"><h6>Large ₱40.00</h6></option><br>
                                <option value="xlt"><h6>Extra Large ₱50.00</h6></option><br>
                            </select><br><br>

                            <b>Add ons:</b><br><br>
                            <select class="select-addons" id="addons">
                                <option value="blackpearl"><h6>Black Pearl +₱10.00</h6></option><br>
                                <option value="oreo"><h6>Oreo +₱5.00</h6></option><br>
                                <option value="mallows"><h6>Mallows +₱5.00</h6></option><br>
                                <option value="chocochips"><h6>Choco Chips +₱5.00</h6></option>
                            </select><br>
                        </div>
                    </div>
                </div>
                <br><br>
              
                <div class="textcolor">
                    <form>
                        <label for="review"><b>Write A Review:</b></label>
                        <hr style="border-top: 1px solid;">
                        <form>
                            <textarea rows="12" cols="108" name="review" id="review"></textarea>
                            <br><br>
                            <input class="review" type="reset" value="SUBMIT">
                        </form>
                    </form>
                </div>
                <br>
                  
            </div>
        </div>
    </div>
    <br><br>
    <!--End Milkshake Seperate Per Product Page-->    

    <!--Footer Section-->
    <section id="about">
        <footer class="page-footer pt-4">
            <div class="container-fluid text-center text-md-left">
                <div class="row">

                <div class="col-md-3 mx-auto">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">About Us</h5><br>
                    <p style="font-family: 'Comfortaa' ; font-size: 14px; color: #f0ead6;">
                    The business was created by a couple who lives in Taguig city. The milktea business became a trend that made them think of it as a source of income also.<br>
                    Favorite flavors among Filipinos include cheese, milk tea with pearl, and wintermelon.
                    We introduce to you<br>
                    <span style="color:#F0FFF0;font-weight:bold;font-style:oblique">Lhoyzki - Milkshake & Milktea</span><br><br>
                    Our customer's satisfaction is important<br>
                    That is why we can guarantee you that our products would satisfy the your cravings.
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
                            <p style="font-family: 'Comfortaa';font-size: 13px; color: #f0ead6"><img src="https://img.icons8.com/windows/26/000000/marker.png" width = "20" height="20" alt="location"> Taguig City</p>
                        </li><br>
                        <li>
                            <p style="font-family: 'Comfortaa';font-size: 13px; color: #f0ead6"><img src="https://img.icons8.com/windows/32/000000/phone.png" width = "20" height="20" alt="contact"> 09233269876</p>
                        </li><br>
                        <li>
                            <p style="font-family: 'Comfortaa';font-size: 13px; color: #f0ead6"><img src="https://img.icons8.com/material-outlined/24/000000/important-mail.png" width = "20" height="20" alt="email"> lhoyzkimm@gmail.com</p>
                        </li>
                    </ul>
                </div>

                <hr class="clearfix w-100 d-md-none pb-3">

                <div class="col-md-3 ml-auto">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Other Sites</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://www.facebook.com/Lhoyzki-Milkshake-Milktea-101725998492909" target="_blank"> 
                            <img src= "https://www.flaticon.com/svg/static/icons/svg/124/124010.svg"  width = "30" height="30" alt="facebook">
                            </a>
                            <a href="https://twitter.com/LhoyzkiM" target="_blank"> 
                            <img src= "https://www.friendsofnewwalk.com/social-media/twitter.svg"  width = "30" height="30" alt="twitter"><br>
                            </a>
                        </li><br><br><br><br>

                        <li>
                            <span style="color: #f0ead6; font-family:'Comfortaa'; font-size: 14px;">Your opinions matter to us</span><br>
                            <label for="feedbacks"><span style="color: #f0ead6; font-family: 'Comfortaa';"> Write your Feedbacks below:</span></label><br>

                            <form>
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

</body>
</html>
      