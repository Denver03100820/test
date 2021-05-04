<?php 
include 'header.php';
?>


<body class="bodycolor">
    <br><br><br><br><br><br><br>
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
                            <h2>Choco Fudge Milkshake</h4><hr style="border-top: 1px solid; ">
                            <p style="font-size:15px;">Be crazy and in love with our sweetest shake that is loaded with brownies and chocolate fudge that will make you stun for minutes.</p><br>
                            
                            <b style="font-size:13px;">Available Size/s:</b><br><br>
                            
							<input type="radio" id="small" name="sizes" value="small">
							<label for="small" style="font-size:11px;">REGULAR   </label>
							<input type="radio" id="medium" name="sizes" value="medium">
							<label for="medium" style="font-size:11px;">LARGE   </label>
							<input type="radio" id="large" name="sizes" value="large">
							<label for="large" style="font-size:11px;">EXTRA LARGE   </label><br>
                               <br><br>

                            <b style="font-size:13px;">Add ons:</b><br><br>
                                <span class="checkbox">
								<input type="checkbox" id="blackpearl" name="blackpearl" value="blackpearl">
                                <label for="blackpearl" style="font-size:12px;">Black Pearl +₱15.00</label><br>
								<input type="checkbox" id="oreo" name="oreo" value="oreo">
                                <label for="oreo" style="font-size:12px;">Oreo +₱15.00</label><br>
								<input type="checkbox" id="mallows" name="mallows" value="mallows">
                                <label for="mallows" style="font-size:12px;">Mallows +₱15.00</label><br>
								<input type="checkbox" id="chocochips" name="chocochips" value="chocochips">
                                <label for="chocochips" style="font-size:12px;">Choco Chips +₱15.00</label><br>
								<input type="checkbox" id="nata" name="nata" value="nata">
                                <label for="nata" style="font-size:12px;">Nata +₱15.00</label><br>
								<input type="checkbox" id="cream" name="cream" value="cream">
                                <label for="cream" style="font-size:12px;">Cream Cheese +₱15.00</label><br>
								<input type="checkbox" id="pudding" name="pudding" value="pudding">
                                <label for="pudding" style="font-size:12px;">Pudding +₱15.00</label><br>
								<input type="checkbox" id="red" name="red" value="red">
                                <label for="red" style="font-size:12px;">Red Beans +₱15.00</label><br>
</span>

							<button class="review" style="width: 15px;" onclick="decrement()"><b>-</b></button>
							<input style="text-align:center"; id=Input type=number min=1 max=100 value=1>
							<button class="review" style="width: 15px;" onclick="increment()"><b>+</b></button>

						<script>
							function increment() {
							document.getElementById('Input').stepUp();
						}
							function decrement() {
							document.getElementById('Input').stepDown();
						}
						</script>
							
                            <button class="review"  type="submit">ADD TO CART</button>
							
                        </div>
                        
                    </div>
                </div>
                <br><br>
              

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
