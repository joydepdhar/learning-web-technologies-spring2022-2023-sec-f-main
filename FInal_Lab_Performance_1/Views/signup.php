<html>
    <head>
        <title>Sign Up</title>
    </head>
    <body>
    <center>
        <table  height=720 width=1080>
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
                    <form method="POST" action="../Controllers/signUpcheck.php" >
                        <fieldset>
                            <legend align="center"><h2>REGISTRATION</h2></legend>
                            <table>
                                <tr>
                                    <td>Name</td>
                                    <td>:<input type="text" name="name" value=""/> <br></td>
                                </tr>        
                                <tr>
                                    <td>Email</td>
                                    <td>:<input type="email" name="email" value=""/> <br>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>:<input type="text" name="username" value=""/> <br></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:<input type="password" name="password" value=""/> <br></td>
                                </tr>
                                <tr>
                                <td>Confirm Password</td>
                                <td>:<input type="password" name="confirmpassword" value=""/> <br> </td>                
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