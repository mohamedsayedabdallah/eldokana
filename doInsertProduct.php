<html>
<head>
  <meta charset="UTF-8">
        <title> Product Insertion </title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>

<head>

</head>

	<body class="body">
			<div  class="div1" style="width:800px; margin:0 auto;">
               <img src="images/el-dokana.png" alt="" id="img" width="50%" > <br>
              <a href="adminHome.php">All Products</a><br>
               </<div>
			<?php
					session_start();
					echo '<p2>WELCOME </p2>' . $_SESSION['login_admin'] . "<p2> Good to see You!</p2>";	
			?>			
			<br>
				
				
				
		</ul>
		<div id="background"><img src="store.jpg" alt=""></div>
		<div class="option"><a href="product.php?id1=all&id2=all">All Products</a></div>
		<div class="option"><a href="insertProduct.php">Add new product</a></div>
		
			<?php
				
				//-------------------------------------------------------------\\
				// check information
			
				$itemName = $_POST["itemName"];
				$Description = $_POST["Description"];
				$Quantity = $_POST["Quantity"];
				$Price = $_POST["Price"];
				$image=addslashes($_FILES['image']['tmp_name']);
				$image=file_get_contents($image);
				$image=base64_encode($image);


				//$Picture = $_POST["Picture"];
				//$Image = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
				//$ImageType = mysql_real_escape_string($_FILES["image"]["type"]);
				//$ImageName = mysql_real_escape_string($_FILES["image"]["name"]);
				// database connection
				
				$hostname = "localhost";
				$username = "root";
				$password = "";				
				$databaseName = "eldokan";
				
				
				$conn = mysqli_connect($hostname, $username, $password);
         
         	mysqli_select_db($conn,$databaseName);
				
				//------------------------------------------------------------------
				
				
				$sql2 = "INSERT INTO Product (ItemName, ItemDescription, QuantityInStock, Price, Picture)
				 VALUES ('$itemName', '$Description', '$Quantity', '$Price', '$image')";
				$r2 = mysqli_query($conn,$sql2);
				if($r2) {
					echo '<div class="div1"> <p1>Product Inserted Successfully!</p1></div>';				
				}

				
				
				
				
				
			?>
	</body>
</html>