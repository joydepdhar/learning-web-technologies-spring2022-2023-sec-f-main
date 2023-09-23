<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])){
        $username=$_REQUEST['username'];
?>
<html>
    <head>
        <title>
            Add Librarian
        </title>
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
			margin-bottom: 20px;
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
    <script>
function validateForm() {
  var name = document.forms["myForm"]["name"].value;
  var email = document.forms["myForm"]["email"].value;
  var username = document.forms["myForm"]["username"].value;
  var password = document.forms["myForm"]["password"].value;
  var confirmPassword = document.forms["myForm"]["confirmpassword"].value;
  var gender = document.forms["myForm"]["gender"].value;
  var dob = document.forms["myForm"]["dob"].value;

  if (name == "") {
    alert("Name must be filled out");
    return false;
  }
  if (email == "") {
    alert("Email must be filled out");
    return false;
  }
  if (username == "") {
    alert("Username must be filled out");
    return false;
  }
  if (password == "") {
    alert("Password must be filled out");
    return false;
  }
  if (confirmPassword == "") {
    alert("Confirm password must be filled out");
    return false;
  }
  if (password != confirmPassword) {
    alert("Passwords do not match");
    return false;
  }
  if (gender == "") {
    alert("Gender must be selected");
    return false;
  }
  if (dob == "") {
    alert("Date of Birth must be filled out");
    return false;
  }
}
</script>

    <body>
       <center>
            <div>
                <table height=720 width=1080>
                    <tr height=70>
                        <td >
                            <table width = "800">
                                <tr>
                                    <td>
                                        <img height="120" src="/Joydep_Web_Technologies\LibraryLogo.jpg">
                                    </td>
                                    <td align="right">
                                    <a href="UserManagement.php?userName=<?php echo $username ?>">Back</a>
                                    <!-- <a href="/Joydep_Web_Technologies\logout.php">Log Out</a -->
                                    </td>   
                                </tr>    
                            </table>                   
                        </td>
                    </tr>
            </div>
            <div>
            <tr>
                <td>   
                
                    <form method="POST" action="\LibrarayManagementSystem\controls\CheckLibrarianAccount.php" onsubmit="return validateForm()" name="myForm">
                        <fieldset>
                            <legend align="center"><h2>Add New Librarian</h2></legend>
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
                        <input type="submit" name="submit" value="Submit"/>
                        <input type="reset" name="reset" value="Reset">
                        </fieldset>
                    </form>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <fieldset>
                        <legend align="center">About Us</legend>
                        <!-- C:\xampp\htdocs\Joydep_Web_Technologies\AboutUs\AboutUs.php -->
                        <a href="\Joydep_Web_Technologies\AboutUs\AboutUs.php">Library Information</a>  <br>
                        <a href="\Joydep_Web_Technologies\AboutUs\ContactUs.php">Contract Us</a>
                    </fieldset>
                </td>
            </tr>
            <tr height =40>
                <td align="center">Copyright ©Joydep_Dhar_2023</td>
            </tr>
            </div>
       </center>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>