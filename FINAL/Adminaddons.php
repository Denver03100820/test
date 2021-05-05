<?php

$server = "localhost";
$username = "root";
$password = "";
$DB = "lhoyzki_ordering";

$connection = new mysqli($server,$username,$password,$DB);

if (isset('Submit'))
{

    $Addons_Price =$_POST["Addons_Price"];
    

    $sqlvar = "INSERT INTO addons_tbl(Addons_Price,Addons_Description,Addons_Stocks) VALUES


}



?>