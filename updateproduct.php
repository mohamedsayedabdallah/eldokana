
<html>
<head>
  <title>Update the Product</title>
          <link rel="stylesheet" type="text/css" href="style.css">
</head>


<body class="body">
		<div  class="div1" style="width:800px; margin:0 auto;">
               <img src="images/el-dokana.png" alt="" id="img" width="50%" > <br>
	<fieldset>
		<?php
					session_start();
					echo '<p2>WELCOME </p2>' . $_SESSION['login_admin'] . "<p2> Good to see You!</p2>";	
			$productID = $_GET['id'];
                         echo $productID;
                                        ?>	
	<legend><h1>Update The Product</h1></legend>
        
	 <?php
         echo 
        '<form name="form1" action="doupdateproduct.php?id='.$productID.'" method="POST" enctype="multipart/form-data" >';
                  ?>
			<table>
                           
                          
				<tr><td>Item Name   :</td><td>    <input type="text" name="itemName" required></td></tr><br>
				<tr><td>Item Description    :</td><td>    <textarea name="Description" rows="10" cols="30" required></textarea></td></tr><br>
				<tr><td>Quantity In Stock        :</td><td>    <input type="text" name="Quantity" required></td></tr><br>
				<tr><td>Price  :</td><td>    <input type="text" name="Price" required></td></tr><br>
				<tr><td>Picture   :</td><td>    <input type="file" name="image" required><br></td></tr><br>
			</table>
			<input type="submit" value=" Update The Product">
		</form>
	</fieldset>
	</div>
	
</div>

</body>
</html>