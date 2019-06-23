
<!-- website layout -->
<!doctype html>
<html lang="eng">
	<head>
	 	<meta charset="utf-8"/> 
	 	<title>Home</title>
	 	<link rel="stylesheet" href="../styles/main.css"/>
	</head>
	<body class="body">
			<?php
				session_start();
                                session_unset(); 
				session_destroy();
				
			require "home.php";

			?>
			
	</body>
	
</html>