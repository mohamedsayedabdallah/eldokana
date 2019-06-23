<html>
<head>
  <title>Admin Confirm</title>
  	 	 <link rel="stylesheet" type="text/css" href="style.css">

</head>



<body class="body">
     <div class="div1">
                 <img src="images/el-dokana.png" alt="" id="img" width="50%"><br>
                 <h1>Welcome To El-dokana Website</h1>
                 </div>
			<?php
				
				//-------------------------------------------------------------\\
				// get information
			
				$Name = $_POST["name"];
				$Password = $_POST["password"];
				
				// database connection
				
				$hostname = "localhost";
				$username = "root";
				$password = "";				
				$databaseName = "eldokan";
				
				
				$conn = mysqli_connect($hostname, $username, $password);
         
         	mysqli_select_db($conn,$databaseName);
				
				//------------------------------------------------------------------
				
				$flag1 = 0;    // suppose admin is not found in DB (for name)
				$flag2 = 0;    // for pass
				
				$sql = "SELECT * FROM Admin";
				$r = mysqli_query($conn,$sql);
				while($row = mysqli_fetch_array($r)) {
					if($row["UserName"] == $Name && $row["Password"] == $Password) {
						$flag1 = 1;
						$flag2 = 1;
						break;					
					}
					elseif($row["UserName"] == $Name && $row["Password"] != $Password) {
						$flag1 = 1;
						$flag2 = 0;
						break;				
					}			
				}
				if($flag1 == 1 && $flag2 == 1) {
					session_start();
					$_SESSION['login_admin'] = $Name;
					header("Location: adminHome.php");  // redirection
					exit();
				}
				else if($flag1 == 1 && $flag2 == 0) {
					echo "<div class='div1'><p1>Please enter correct password</p1></div>";				
				}
				else if($flag1 == 0) {
					echo "<div class='div1'><p1>Admin not found</p1></div>";				
				}
				
			
				
				
			?>
                
	</body>
</html>