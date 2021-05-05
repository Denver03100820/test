<?php 
include 'header.php';
?>

<head>
  <link rel="stylesheet" href="orderSection.css" type="text/css">
</head>

<body class="bodycolor">

  <!--Milktea Seperate Per Product Page-->
  <div class="container" style="margin-top:30px">
      
    <div class="row">

      <div class="col-md-6">
        <img src="img/Wintermelon(bg).png" class="centerimage">
      </div>

      <div class="col-md-6">
        <div class="card" style="margin-top: 100px;">
          <div class="card-body">
            <div class="textcolor">
              <h4>Classic Wintermelon Milktea</h4><hr style="border-top: 1px solid;">
              <p>Feel the pleasure with every sip of the refreshing taste of our Wintermelon, delighting your tastebuds until the last drop.</p><br>
              
              <h3>Ingredients: </h3><br>
              <h5>Milk, Water, Black Tea leaves, Winter Melon Gourd powder, Creamer, Brown Sugar, Tapioca Pearls</h5><br><br>

              <h3>Benefits: </h3><br>
              <h5>The benefits of drinking milktea is it reduces human stress and builds stronger bones for it contains calcium that our body needs.</h5><br><br>

              <b>Available Size/s: </b>
              <b class="text-success">Extra Large</b><br><br>

             <select class="select-toppings" id="toppings">
                  <option value="withcc"><h6>With Cream Cheese ₱60.00</h6></option><br>
                  <option value="withoutcc"><h6>Without Cream Cheese ₱50.00</h6></option><br>
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
  <!--End Milktea Seperate Per Product Page--> 

</body>

<?php 
include 'footer.php';
?>

      