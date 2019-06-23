<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Update Product Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
       </head>
       
       <body class="body">
           <div  class="div1" style="width:800px; margin:0 auto;">
               <img src="images/el-dokana.png" alt="" id="img" width="50%" > <br>
              <a href="adminHome.php">All Products</a><br>
               </<div>
  <?php
				

session_start();
					echo '<p2>WELCOME </p2>' . $_SESSION['login_admin'] . "<p2> Good to see You!</p2><br>";	
// database connection
                                         
				$productID = $_GET['id'];
                                
				$hostname = "localhost";
				$username = "root";
				$password = "";				
				$databaseName = "eldokan";
				
				$conn = mysqli_connect($hostname, $username, $password);
         
         	$dbSelected = mysqli_select_db($conn,$databaseName);
				
				//-------------------------------------------------------------\\ 
				
					
					
					$itemName = $_POST["itemName"];
				        $Description = $_POST["Description"];
				        $Quantity = $_POST["Quantity"];
				        $Price = $_POST["Price"];
				      $image=addslashes($_FILES['image']['tmp_name']);
				$image=file_get_contents($image);
				$image=base64_encode($image);


                                     
                                       
                                        
	
					
					$query = "UPDATE Product SET ItemName = '$itemName', ItemDescription = '$Description', QuantityInStock = '$Quantity',Price='$Price',Picture='$image'".
					" WHERE ID = '$productID'";
					$r = mysqli_query($conn,$query);
					
					if($r) {    
						echo "Updated Successfully!";
                                               
                                                
                                        }
										
					
			?>
        
        
    </body>
</html>
