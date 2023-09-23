<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f1f1f1;
		}
		h2 {
			margin-top: 0;
		}
		fieldset {
			background-color: #fff;
			border: 1px solid #ccc;
			border-radius: 5px;
			padding: 10px;
			margin-left: 20px;
		}
		/* legend {
			font-size: 20px;
			font-weight: bold;
		} */
		input[type=text], input[type=password], input[type=email], input[type=date], input[type=submit], input[type=reset], input[type=radio] {
			display: block;
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-bottom: 10px;
			box-sizing: border-box;
			font-size: 16px;
		}
		input[type=submit], input[type=reset] {
			background-color: #4CAF50;
			color: #fff;
			border: none;
			cursor: pointer;
		}
		input[type=submit]:hover, input[type=reset]:hover {
			background-color: #45a049;
		}
		.center {
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
		}
		table {
			margin: auto;
			width: 100%;
			max-width: 800px;
		}
		td {
			padding: 10px;
		}
		img {
			max-height: 120px;
		}
		a {
			text-decoration: none;
			color: #333;
		}
		a:hover {
			color: #4CAF50;
		}
	</style>
    </head>
    <body>
    <center>
        <table  height=720 width=1080>
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
                    <form method="POST" action="../controls/regcheck.php"name="regform" onsubmit="return validateForm()">

                    <!-- <form method="POST" action="../controls/regcheck.php" > -->
                        <fieldset>
                            <legend align="center"><h2>REGISTRATION</h2></legend>
                            <table>
                                <tr>
                                    <td>Name:</td>
                                    <td><input type="text" name="name" value=""/> <br></td>
                                </tr>        
                                <tr>
                                    <td>Email:</td>
                                    <td><input type="email" name="email" value=""/> <br>
                                </tr>
                                <tr>
                                    <td>Username:</td>
                                    <td><input type="text" name="username" value=""/> <br></td>
                                </tr>
                                <tr>
                                    <td>Password:</td>
                                    <td><input type="password" name="password" value=""/> <br></td>
                                </tr>
                                <tr>
                                <td>Confirm Password:</td>
                                <td><input type="password" name="confirmpassword" value=""/> <br> </td>                
                                </tr>
                            </table>
                        <fieldset>
                            <Legend>Gender:</Legend>
                                <input type="radio" name="gender" value="Male"/> Male
                                <input type="radio" name="gender" value="Female"/> Female
                                <input type="radio" name="gender" value="Other"/> Other <br>
                        </fieldset>
                            <h1></h1>
                         <fieldset>
                            <Legend>Date of Birth:</Legend>
                                <input type="date" name="dob" value=""/> 
                        </fieldset> 
                        <h1></h1>
                        <input type="submit" name="Regsubmit" value="SignUp"/>
                        <input type="reset" name="reset" value="Reset">
                        </fieldset>
                    </form>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <fieldset>
                        <legend align="center">About Us</legend>
                        <a href="">Library Information</a>  <br>
                        <a href="">Contract Us</a>
                    </fieldset>
                </td>
            </tr>
            <tr height =40>
                <td align="center">Copyright ©Joydep_Dhar_2023</td>
            </tr>
        </table>
    </center>
    </body>
</html>
<script>
    function validateEmail(email) {
  const atPos = email.indexOf("@");
  const dotPos = email.lastIndexOf(".");
  return (atPos > 0 && dotPos > atPos && dotPos < email.length - 1);
}
    function validateForm() {
    var name = document.forms["regform"]["name"].value;
    var email = document.forms["regform"]["email"].value;
    var username = document.forms["regform"]["username"].value;
    var password = document.forms["regform"]["password"].value;
    var confirmpassword = document.forms["regform"]["confirmpassword"].value;
    var gender = document.forms["regform"]["gender"].value;
    var dob = document.forms["regform"]["dob"].value;
    var today = new Date();
    var dobDate = new Date(dob);

    if (name == "") {
        alert("Name must be filled out");
        return false;
    } else if (name.length < 2 && (name >= 'A' && name <= 'Z' || name >= 'a' && name <= 'z')) {
        alert('Name: Contains at least two words');
        return false;
    } else if (name >= '0' && name <= '9' || name == '~' || name == '!' || name == '@' || name == '#' || name == '$' || name == '%' || name == '^' || name == '&' || name == '*' || name == '()' || name == '/') {
        alert('Name: Can contain a-z or A-Z or dot(.) or dash(-)');
        return false;
    } else if (name >= '0' && name <= '9') {
        alert('Name: Must be starts with letter');
        return false;
    }
    if (email == "") {
        alert("Email must be filled out");
        return false;
    } else if (!validateEmail(email)) {
        alert("Email is not valid");
        return false;
    }
    if (username == "") {
        alert("Username must be filled out");
        return false;
    }
    if (password == "") {
        alert("Password must be filled out");
        return false;
    }elseif(password.length !==8 ){
        alert("Password must be at least 8 characters long");
        return false;
    }

    if (password != confirmpassword) {
        alert("Passwords do not match");
        return false;
    }

    if (!gender) {
        alert("Please select a gender");
        return false;
    }

    if (!dob) {
        alert("Date of Birth must be filled out");
        return false;
    }

    if (dobDate >= today) {
        alert("Date of Birth must be in the past");
        return false;
    }

    return true;
}
</script>