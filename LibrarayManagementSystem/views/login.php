<html>
    <head>
        <title>AIUB Library</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <style>
		body {
			font-family: Arial, sans-serif;
			color: #333;
			}

			h1 {
			font-size: 36px;
			text-align: center;
			margin-top: 40px;
			}

			h3 {
			font-size: 24px;
			text-align: center;
			margin-top: 10px;
			}

			fieldset {
			background-color: #fff;
			border: 2px solid #ccc;
			border-radius: 5px;
			padding: 20px;
			margin-bottom: 40px;
            
			}
            #First_Login{
            width:400px;
            height: 500px;
            margin-left:250px;
            }
			legend {
			font-size: 24px;
			font-weight: bold;
			}

			a {
			text-decoration: none;
			color: #333;
			transition: color 0.3s ease;
			}

			a:hover {
			color: #4CAF50;
			}

			input[type=text], input[type=password], input[type=submit], input[type=reset] {
			display: block;
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-bottom: 20px;
			box-sizing: border-box;
			font-size: 16px;
			}

			input[type=submit], input[type=reset] {
			background-color: #4CAF50;
			color: #fff;
			border: none;
			cursor: pointer;
			transition: background-color 0.3s ease;
			}

			input[type=submit]:hover, input[type=reset]:hover {
			background-color: #45a049;
			}
			span{
			color:red;
			font: bold;
			}

	</style>
    </head>
    <script>
    function validateForm() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        if (username == "") {
            alert("Please enter a username.");
            return false;
        }
        
        if (password == "") {
            alert("Please enter a password.");
            return false;
        }

        return true;
    }
    </script>
    <body>
        <div align="right">
        <html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <center>
        <table height=720 width=1080>
            <tr height=70>
                <td >
                    <table width = "800">
                        <tr>
                            <td>
                                <img height="120" src="LibraryLogo.jpg">
                            </td>
                            <td align="right">
                                <a href="WelcomePage.php"><i class="fas fa-home"></i> Home</a>  
                                <a href="login.php">| <i class="fas fa-sign-in-alt"></i> Sign In</a>
                                <a href="reg.php">| <i class="fas fa-user-plus"></i> Sign Up</a> 
                            </td>    
                        </tr>    
                    </table>                   
                </td>
            </tr>
            <tr>
                <td>          
                    <form method="POST" action="../controls/Logincheck.php" onsubmit="return validateForm()">
                        <fieldset id="First_Login">
                            <legend align="center"><h2>SignIn</h2></legend>
                            Username: <input type="text" name="username" id="username" /> <br><br>
                            Password: <input type="password" name="password" id="password" /> <br>
                            <hr>
                            <input type="submit" name="submit" value="Sign In"/>
                            <a href="FogetPassword.php">Forgot Password?</a>
                        </fieldset>
                    </form>
                </td>
            <tr>
                <td align="center">
                <fieldset>
                        <legend align="center">About Us</legend>
                        <a href="AboutUs\AboutUs.php">About Us</a> 
                        <br>
                        <a href="AboutUs\ContactUs.php">Contract Us</a>
                    </fieldset>
                </td>
            </tr>
            
            <tr height =40>
                <td align="center">Copyright ©JoyDep_Dhar_2023</td>
            </tr>
        </table>
    </center>
    </body>
</html>
        </div>
    </body>
</html>