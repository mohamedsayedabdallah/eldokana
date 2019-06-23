<!-- website layout -->
<!doctype html>
<html lang="eng">
	<head>
	 	<meta charset="utf-8"/> 
	 	<title>Our Products</title>
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body class="body">
			 <div class="div1">
                 <img src="images/el-dokana.png" alt="" id="img" width="50%"><br>
                 <h1>Welcome To El-dokana Website</h1>
                 	<?php
					session_start();
					echo '<p2>WELCOME </p2>' . $_SESSION['login_admin'] . "<p2> Have a nice shopping Day!</p2><br>";
                         
			?>	
                 </div>
			<?php
				// database connection
				
				$hostname = "localhost";
				$username = "root";
				$password = "";				
				$databaseName = "eldokan";
				
				$conn = mysqli_connect($hostname, $username, $password);
         
         	$dbSelected = mysqli_select_db($conn,$databaseName);
				
				//-------------------------------------------------------------\\ 
				
					
					$query = "SELECT * FROM Product";
					$r = mysqli_query($conn,$query);
					while($row = mysqli_fetch_array($r)) {
						//header("content-type: image/png");
					
				    echo '<div class="div1"><h3>Product Name : </h3>' . $row["ItemName"]. '<br>
				    <h3>ProductID </h3>' . $row["ID"] .
				    '<div class="div2"><img height="300" width="300" src="data:image;base64,'.$row["Picture"].'"></div>'.'<br><h3>Description</h3><br>'.$row["ItemDescription"];

				    echo '<br><h3>Price : </h3>'.$row["Price"].'<p1> LE.</p1>'.
				    '<br><h3>Quantity in Stock : </h3>'.$row["QuantityInStock"].'<br>';
				    
				    
				    $productID = $row["ID"];
                                    
                                     echo '<br>' . '<a href="deleteproduct.php?id='."$productID" . '"><input type="button" value="delete this product"></a>';
                                    
				    echo '<br>' . '<a href="updateproduct.php?id='."$productID" . '"><input type="button" value="update this product"></a></div>';
					}	
			
			
			?>
			
			

	</body>
</html>