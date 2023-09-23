<html>
    <head>
        <title>WelcomePage</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <style>
		  body {
            font-family: Arial, sans-serif;
            background-image: url('background-image.jpg');
            background-size: cover;
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

          input[type=text], input[type=password], input[type=email], input[type=date], input[type=submit], input[type=reset], input[type=radio] {
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
    <body>
    <center>
        <table  height=720 width=1080>
            <tr height=70>
                <td > 
                    <table width = "800">
                        <tr>
                            <td>
                                <img height="120" src="../Assets/LibraryLogo.jpg">
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
                    <h1>Welcome to AIUB Library</h1>
                    <br>
                    <h3>Where <span>Leaders</span>  are created</h3>
                </td>
            </tr>
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


