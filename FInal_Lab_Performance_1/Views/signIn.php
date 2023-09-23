<html>
    <head>
        <title>PRD MANAGEMENT SYSTEM</title>
    </head>
    <body>
        <center>
        <table height=720 width=1080>
            <tr height=70>
                <td >
                    <table width = "800">
                        <tr>
                            <td>
                                <h2>PRD MANAGEMENT SYSTEM</h2>
                            </td>
                            <td align="right">
                                <a href="../index.php">Home</a> 
                                <a href="signIn.php">| SignIn</a>   
                                <a href="signup.php">| SignUp</a>  
                            </td>    
                        </tr>    
                    </table>                   
                </td>
            </tr>
            <tr>
                <td>          
                    <form method="POST" action="../Controllers/signIncheck.php"  >
                            <fieldset>
                               <legend align="center"><h2>SignIn</h2></legend>
                                    Username: <input type="text" name="username" value=""/> <br><br>
                                    Password: <input type="password" name="password" value=""/> <br> 
                                    <hr>
                                    <!-- <input type="radio" name="rememberme" value=""/> Remember Me <br><br> -->
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