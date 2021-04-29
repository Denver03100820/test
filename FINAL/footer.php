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

                     <?php
                        $server = "localhost";
                            $username = "root";
                            $password = "";
                            $DB = "lhoyzki_ordering";

                            $connection = new mysqli($server,$username,$password,$DB); //connection
                            
                            if(isset($_POST['submit']))
                            {
                                $customerID = uniqid();
                                $customer_Feedback = $_POST["customer_Feedback"];
                                
                                $sqlvar ="INSERT INTO feedback_tbl(comments ,customerID) VALUES 
                                ('$customer_Feedback','$customerID')";

                                //var_dump($connection->query($sqlvar));
                                //var_dump($sqlvar);
                                $connection->query($sqlvar);
                            }
                        ?>

                                 <form action="HomePage.php" onsubmit="myFunction()" method="POST">
                                 
                                    <textarea rows="7" cols="40" name="customer_Feedback"></textarea><br><br>
                                    <input type="submit" name="submit">
   
                                
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
        function myFunction() {
         alert("Thank you!!!");
    }
    </script>

</html>