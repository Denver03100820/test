<?php 
$server = "localhost";
$username = "root";
$password = "";
$DB = "lhoyzki_ordering";

$connection = new mysqli($server,$username,$password,$DB);

if(isset($_POST['Submit']))
{
    $L_Name = $_POST["L_Name"];
    $F_Name = $_POST["F_Name"];
    $Cust_Num = $_POST["Cust_Num"];
    $Cust_Address = $_POST["Cust_Address"];

    $sqlvar = "INSERT INTO customer_tbl(L_Name,F_Name,Cust_Num,Cust_Address) VALUES
    ('{$L_Name}','{$F_Name}','{$Cust_Num}','{$Cust_Address}')";

    var_dump($connection->query($sqlvar));
    var_dump($sqlvar);
}
?>


<!DOCTYPE html>
<head></head>
<body>
<form action="Customerinfo.php" method="POST">

<label name="L_Name">Last Name: </label>
<input type="Text" name="L_Name">

<label name="F_Name">First Name: </label>
<input type="Text" name="F_Name">

<label name="Cust_Num">Customer Number: </label>
<input type="Text" name="Cust_Num">

<label name="Cust_Address">Customer Address: </label>
<input type="text" name="Cust_Address">

<input type="Submit" name="Submit">

</form>
</body>
</html>
