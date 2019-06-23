<html>
<head>
  <title>Insert new Product</title>
          <link rel="stylesheet" type="text/css" href="style.css">
</head>


<body class="body">
		<div  class="div1" style="width:800px; margin:0 auto;">
               <img src="images/el-dokana.png" alt="" id="img" width="50%" > <br>
	<fieldset>
	
	<legend><h1>Insert New Product</h1></legend>
	
		<form action="doInsertProduct.php" method="POST" enctype="multipart/form-data">
			<table>
				<tr><td>Item Name   :</td><td>    <input type="text" name="itemName" required></td></tr><br>
				<tr><td>Item Description    :</td><td>    <textarea name="Description" rows="10" cols="30" required></textarea></td></tr><br>
				<tr><td>Quantity In Stock        :</td><td>    <input type="text" name="Quantity" required></td></tr><br>
				<tr><td>Price  :</td><td>    <input type="text" name="Price" required></td></tr><br>
				<tr><td>Picture   :</td><td>    <input type="file" name="image" required><br></td></tr><br>
			</table>
			<input type="submit" value="Add new Product">
		</form>
	</fieldset>
	</div>
	
</div>

</body>
</html>