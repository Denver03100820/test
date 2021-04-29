<!DOCTYPE html>
<title></title>
<body>
<?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $DB = "lhoyzki_ordering";

        $connection = new mysqli($server,$username,$password,$DB); //connection
        
       // if(isset($_POST['Submit']))
       //{
            $customerID = uniqid();
            $customer_Feedback = $_POST["customer_Feedback"];
           
            $sqlvar ="INSERT INTO feedback_tbl(comments ,customerID) VALUES 
            ('$customer_Feedback','$customerID')";

            //var_dump($connection->query($sqlvar));
            //var_dump($sqlvar);
            $connection->query($sqlvar);

        //}
 ?>
</body>
</html>