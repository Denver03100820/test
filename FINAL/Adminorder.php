<?php
$server = "localhost";
$username = "root";
$password = "";
$DB = "lhoyzki_ordering";

$connection = new mysqli($server,$username,$password,$DB);

$getproduct = "Select * from order_tbl";
$product = $connection->query($getproduct);

if ($product->num_rows > 0) {
    // output data of each row
    while($row = $product->fetch_assoc()) {
        echo "<br> Order id: ". $row["Order_ID"]. " - Product id: ". $row["Product_ID"]. " - Customer id: " . $row["Customer_ID"] .
        " - Size id: ". $row["Size_ID"]. " - Sugar Level: " .$row["Sugar_Level"]. "- Created by: " .$row["Created_by"].
        "- Addons:  ". $row["Addons"]. " - Quantity: " .$row["Quantity"]. " - Total price: " .$row["Amount"].
        " - Amount Tendered: " .$row["Amount_Tendered"]. " - Change: " .$row["Change"]. "- Date Created: " .$row["Date_Created"].
        " - Date Deleted: " .$row["Date_Deleted"];
    }
} else {
    echo "0 results";
}
?>

