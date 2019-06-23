

<html>
<head>
<title>El-Dokana</title>
<link rel="stylesheet" type="text/css" href="style.css">
 <script>
            function checkfrom(form1){
                var user = form.username.value;
                var password = form.password.value;
                user=user.toString();
                password=password.toString();
                if(user === "" || password === ""){
                    alert("fill fileds please");
                    return false;
                }
                re=/@/;
                if( !re.test(user)){
                    alert("your mail must contain '@' ");
                    return false;
                }
                re=/.com/;
                if( !re.test(user)){
                    alert("your mail must contain '.com' ");
                    return false;
                }
            }


            function validateForm1(form2) {
            var aname = document.forms["form2"]["name"].value;
            var password = document.forms["form2"]["password"].value;
           
            if (aname == null || aname == "") {
                alert("Admin name must be filled out");
                return false;
            }
            if (password == null || password == "") {
                alert("Password must be filled out");
                return false;
            }
        }
        </script>
</head>
<body class="body">			
 <div  style="width:800px; margin:0 auto;">
     <img src="images/el-dokana.png" alt="" id="img" width="50%"><br>
       <h1>Welcome to El-dokana Website</h1>
        <h2>Log In</h2>
         <p1>Customers Login:</p1>
        <form name="form1" action="checklogin.php" method="post" onsubmit="return checkfrom(this);">
          
            <table>
                <tr>
                    <td>
                        User Name:
                    </td>
                    <td><input type="text" placeholder="Write Your Mail" name="Email"></td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" placeholder="Write Your Password" name="password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                         <input type="submit" value="Log In">
                    </td>
                </tr>
            </table>

        </form>

        <div class="div10" style="width:800px; margin:0 auto;">
        <p1>Admins Login:</p1>

        <form name="form2" action="Adminchecklogin.php" method="post" onsubmit="return validateForm1()">
            <table>
                <tr> <td> Name        :</td><td><input type="text" name="name" ><br></td></tr>
                <tr> <td> Password  :</td><td><input type="password" name="password" ><br></td></tr>
            </table>
            <input type="submit" value="Admin Login">
        </form>
        </div>
        
        <a  href="signup.php">
                <input type="button" value="Sign up">
            </a>
        
</body>
</html>