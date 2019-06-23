
<!-- website layout -->
<!doctype html>
<html lang="eng">
	<head>
	 	<meta charset="utf-8"/> 
	 	<title>Home</title>
	 	 <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body class="body">
		 <div class="div1">
                 <img src="images/el-dokana.png" alt="" id="img" width="50%"><br>
                 <h1>Welcome To El-dokana Website</h1>
			
			<?php
					session_start();
					echo '<p2>WELCOME </p2>' . $_SESSION['login_customer'] . "<p2> Have a nice shopping Day!</p2><br>";	
			?>	
                 <ul>
		<li><a href="customerhome.php">Home</a></li>	
                <li><a href="shopping.php">Shopping</a></li>
                <li><a href="logout.php">Logout</a></li>
                 
		</ul>
                 </div>
	</body>
	
</html>