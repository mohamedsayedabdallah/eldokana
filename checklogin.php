
<html>
<head>
  <title>User Confirm</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<head>

</head>

	<body class="body">
			
			
			<?php
				
				//-------------------------------------------------------------\\
				// get information
			
				$Email = $_POST["Email"];
				$Password = $_POST["password"];
				
				// database connection
				
				$hostname = "localhost";
				$username = "root";
				$password = "";				
				$databaseName = "eldokan";
				
				
				$conn = mysqli_connect($hostname, $username, $password);
         
         	mysqli_select_db($conn,$databaseName);
				
				//------------------------------------------------------------------
				
				$flag1 = 0;    // suppose customer is not found in DB (for mail)
				$flag2 = 0;    // for pass
				
				$sql = "SELECT * FROM customer";
				$r = mysqli_query($conn,$sql);
				while($row = mysqli_fetch_array($r)) {
					if($row["Email"] == $Email && $row["Password"] == $Password) {
						$flag1 = 1;
						$flag2 = 1;
						break;					
					}
					elseif($row["Email"] == $Email && $row["Password"] != $Password) {
						$flag1 = 1;
						$flag2 = 0;
						break;				
					}			
				}
				if($flag1 == 1 && $flag2 == 1) {
					session_start();
					$sql = "SELECT * FROM customer WHERE Email = '$Email'";
					$r = mysqli_query($conn,$sql);
					$row = mysqli_fetch_array($r);
					$name = $row["FirstName"];
					$id = $row ['ID'];
					 
					$_SESSION['login_customer'] = $name;
					$_SESSION['login_customer_id'] = $id;
					
					header("Location: customerhome.php");  // redirection
					exit();
				}
				else if($flag1 == 1 && $flag2 == 0) {
					echo "<div class='div1'><p1> Please Enter Correct Password</p1></div>";						
				}
				else if($flag1 == 0) {
					echo "<div class='div1'><p1>Customer not found, Please signUp first</p1></div>";				
				}
				
				
				
				
			?>
	</body>
</html>