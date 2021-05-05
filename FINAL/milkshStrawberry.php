<?php 
include 'header.php';
?>

<head>
  <link rel="stylesheet" href="orderSection.css" type="text/css">
</head>

<body class="bodycolor">

    <!--Milkshake Seperate Per Product Page-->
    <div class="container" style="margin-top:30px">
        
        <div class="row">
    
            <div class="col-md-6">
                <img src="img/Strawberry(bg).png" class="centerimage">
            </div>
    
            <div class="col-md-6">
                <div class="card" style="margin-top: 100px;">
                    <div class="card-body">
                        <div class="textcolor">
                            <h4>Strawberry Milkshake</h4><hr style="border-top: 1px solid;">
                            <p>Start your golden day with this shake because it’s combined with honey, milk and strawberries that will fit with your mood.</p><br>
                            
                            <h3>Ingredients: </h3><br>
                            <h5>Whole Milk, Strawberries, Granulated sugar, Vanilla extract, Vanilla Ice Cream</h5><br><br>

                            <h3>Benefits: </h3><br>
                            <h5>The benefits of drinking milkshake is essentially good for the bones and teeth health because it supplies calcium our body needs.</h5><br><br>

                            <b>Available Size/s: </b><br><br>
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

</body>

<?php 
include 'footer.php';
?>

      