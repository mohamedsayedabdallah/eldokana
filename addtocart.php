<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Adding To cart  </title>
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body class="body">
        <div class="div1">
                 <img src="images/el-dokana.png" alt="" id="img" width="50%"><br>
                 <h1>Welcome To El-dokana Website</h1>
                 	<?php
					session_start();
					echo '<p2>WELCOME</p2>' . $_SESSION['login_customer'] . "<p2> Have a nice shopping Day!</p2><br>";
                         
			?>	
                 <ul>
		<li><a href="customerhome.php">Home</a></li>	
                <li><a href="shopping.php">Shopping</a></li>
                <li><a href="mycart.php">My Cart</a></li>
                <li><a href="logout.php">Logout</a></li>
                 
		</ul>                
                 </div>
        <div class="div1">
        <?php
                        
                        // database connection
				
				$hostname = "localhost";
				$username = "root";
				$password = "";				
				$databaseName = "eldokan";
				
				$conn = mysqli_connect($hostname, $username, $password);
         
         	$dbSelected = mysqli_select_db($conn,$databaseName);
				
				//-------------------------------------------------------------\\ 
					
					$customerID = $_SESSION['login_customer_id'];
					$productID = $_GET['id'];                                  
					$quantity = $_POST['quantity'];
                                      
                                    

					echo $itemName ;
					
					$query = "INSERT INTO cart (CustomerID, ProductID, Quantity)
					 VALUES ('$customerID', '$productID', '$quantity')";
						$r = mysqli_query($conn,$query);
						if($r) {echo "<div class='div10'><p1>Order Added to cart successfully </p1></div>";}
        ?>
            </div>
    </body>
</html>
