<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])){
    $id = $_REQUEST['id'];
?>
<html>
    <head>
        <title>
            Update Personal Information
        </title>
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
		legend {
			font-size: 20px;
			font-weight: bold;
		}
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
        #First{
            margin-left:400px;
            width:600px;
            padding:10px;
        }
	</style>
    </head>
    <body>
        <center>
            <table width=1080>
                <tr height=70>
                    <td >
                        <table width = "800">
                            <tr>
                                <td>
                                    <img height="120" src="/Joydep_Web_Technologies\LibraryLogo.jpg">
                                </td>
                                <td>
                                    <h3>AIUB Library</h3>
                                </td>
                                <td align="right">
                                    <a href="ViewProfile.php">back</a>
                                </td>   
                            </tr>    
                        </table>                   
                    </td>
                </tr>
            </table>
        </center>
        <fieldset id="First">
            <legend>Update Personal Information</legend>
            <form method="POST" action="../../controls/updateprofile.php?id=<?php echo$id;?> >" >
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
                            <Legend>Gender</Legend>
                                <input type="radio" name="gender" value="Male"/> Male
                                <input type="radio" name="gender" value="Female"/> Female
                                <input type="radio" name="gender" value="Other"/> Other <br>
                        </fieldset>
                            <h1></h1>
                         <fieldset>
                            <Legend>Date of Birth</Legend>
                                <input type="date" name="dob" value=""/> 
                        </fieldset> 
                        <h1></h1>
                        <input type="submit" name="Regsubmit" value="Update"/>
                        <input type="reset" name="reset" value="Reset">
                    </fieldset>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>