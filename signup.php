<html>
<head>
  <title>Signup</title>
          <link rel="stylesheet" type="text/css" href="style.css">
  <script>
    function validateForm() {
    var firstname = document.forms["form1"]["firstname"].value;
    var lastname = document.forms["form1"]["lastname"].value;
    var Email = document.forms["form1"]["Email"].value;
    var password = document.forms["form1"]["password"].value;
    var confirmpassword = document.forms["form1"]["confirmpassword"].value;
    
    if (firstname == null || firstname == "") {
        alert("First name must be filled out");
        return false;
    }
    if (lastname == null || lastname == "") {
        alert("Last name must be filled out");
        return false;
    }
    if (Email == null || Email == "") {
        alert("Email must be filled out");
        return false;
    }
    var n = Email.search("@");
    var m = Email.search(".");
    if (n == -1 || m == -1) {
        alert("Invalid Email Formate");
        return false;
    }
    if (password == null || password == "") {
        alert("Password must be filled out");
        return false;
    }
    if (password != confirmpassword) {
        alert("ConfirmPassword is invalid");
        return false;
    }
    
    
    
    
    }
  </script>
</head>


<body class="body">
   <div  class="div10" style="width:800px; margin:0 auto;">
     <img src="images/el-dokana.png" alt="" id="img" width="50%"><br>
       <h1>Welcome to El-dokana Website</h1>
        <h2> Sign Up</h2>
         <p1>Customers Sign Up:</p1>
    
        <form name="form1" action="insert.php" method="post" onsubmit="return validateForm()">
            <table>
                <tr>
                <td> First Name   :</td><td>    <input type="text" name="firstname" ></td><br>
                </tr>
                <tr>
                <td>Last Name    :</td><td>    <input type="text" name="lastname" ></td><br>
                </tr>               
                <tr>
                <td>Email        :</td><td>   <input type="text" name="Email" ></td><br>
                </tr>
                <tr>
                <td>Billing Address   :</td><td>    <input type="text" name="Baddress" ></td><br>
                </tr>
                <tr>
                <td>Billing City   :</td><td>    <input type="text" name="Bcity" ></td><br>
                </tr>
                <tr>
                <td>Billing State    :</td><td>    <input type="text" name="Bstate" ></td><br>
                </tr>
                <tr>
                <td>Billing Zip   :</td><td>   <input type="text" name="Bzip" ></td><br>
                </tr>
                <tr>
                <td>Shipping Address  :</td><td>    <input type="text" name="shipaddress" ></td><br>
                </tr>
                <tr>
                <td>Shipping City   :</td><td>    <input type="text" name="shipcity" ></td><br>
                </tr>
                <tr>
                <td>Shipping State   :</td><td>    <input type="text" name="shipstate" ></td><br>
                </tr>
                <tr>
                <td>Shipping Zip   :</td><td>    <input type="text" name="shipzip" ></td><br>
                </tr>
                <tr>
                <td>Phone   :</td><td>    <input type="text" name="phone" > </td><br>
                </tr>
                <tr>
                <td>Password  :</td><td>    <input type="password" name="password" ></td><br>
                </tr>
                <tr>
                <td>Confirm Password  :</td><td>    <input type="password" name="confirmpassword" > </td><br>
                </tr>
                
            </table>
            <input type="submit" value="Submit">
            
        </form>
</div>

</body>
</html>