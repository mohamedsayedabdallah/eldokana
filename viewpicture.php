<<?php 

$hostname = "localhost";
				$username = "root";
				$password = "";				
				$databaseName = "eldokan";
				
				
				$conn = mysqli_connect($hostname, $username, $password);
         
         	mysqli_select_db($conn,$databaseName);

$r3="Select * from Product";
				$result=mysqli_query($conn,$r3);
				while ($row = mysqli_fetch_array($result)) {
					echo '<img height="300" width="300" src="data:image;base64,'.$row["Picture"].'">';
				}



 ?>php