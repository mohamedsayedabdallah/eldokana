<html>
<head>
  <title>Confirm</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<head>

</head>
<body>
    <?php
        // check information
				$firstname = $_POST["firstname"];
				$lastname = $_POST["lastname"];
				$Email = $_POST["Email"];
				$phone = $_POST["phone"];
				$Baddress = $_POST["Baddress"];
				$Bcity = $_POST["Bcity"];
				$Bstate = $_POST["Bstate"];
				$Bzip = $_POST["Bzip"];
				$shipaddress = $_POST["shipaddress"];
				$shipcity = $_POST["shipcity"];
				$shipstate = $_POST["shipstate"];
				$shipzip = $_POST["shipzip"];
                $pass = $_POST["password"];
				$confirmpassword = $_POST["confirmpassword"];
            	

                $hostname = "localhost";
				$username = "root";
				$password = "";				
				$databaseName = "eldokan";
				
				
                $conn=mysqli_connect($hostname, $username, $password);
         
         		$conn1=mysqli_select_db($conn,$databaseName);
				
				if ($conn1==true)
				{
					echo "true";
				}

				else
				{
					echo "false";
				}
								$sql = "SELECT * FROM customer";
				$r = mysqli_query($conn,$sql);
				$s = 1;
				
				
				
				
						
					$sql2 = "INSERT INTO customer (FirstName, LastName, BillingAddress, BillingCity, BillingState, BillingZip, ShippingAddress, ShippingCity, ShippingState, ShippingZip, Phone, Email, Password)
					 VALUES ('$firstname', '$lastname', '$Baddress', '$Bcity', '$Bstate', '$Bzip', '$shipaddress', '$shipcity', '$shipstate', '$shipzip', '$phone', '$Email' , '$pass')";
					$r2 = mysqli_query($conn,$sql2);	
					if(!$r2) {echo "<div class='div1'><p1>You have registered successfully MR.</p1>" ."$firstname" ." "."$lastname"."</div>";}		
				
                         
    ?>



</body>
</html>