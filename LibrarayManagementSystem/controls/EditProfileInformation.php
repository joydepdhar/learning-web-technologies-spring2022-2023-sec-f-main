<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])){
?>
<html>
    <head>
        <title>
            Update Personal Information
        </title>
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
            <fieldset>
                <legend>Update Information</legend>
                UserID: <input type="text" name="UserID" value="Karim98">
                Name: <input type="text" name="Name" value="Karim"> <br><br>
                Email: <input type="text" name="emailaccount" value="Karim@gmail.com"><br><br>
                Phone No: <input type="text" name="Phone" value="017********"> <br><br>
                Date of Birth: <input type="text" name="DoB" value="12-4-2000"> <br><br>
                <input type="submit"name="edit"value="Update">
            </fieldset>
    </body>
</html>
<?php 
    }else if(isset($_COOKIE['Memberflag'])){
        ?>
        <fieldset>
            <form action="../../controls/EditProfileInformation.php" method="post">
                <legend>Update Information</legend>
                UserID: <input type="text" name="UserID" value="Karim98"> <br><br>
                Name: <input type="text" name="Name" value="Karim"> <br><br>
                Email: <input type="text" name="emailaccount" value="Karim@gmail.com"><br><br>
                Phone No: <input type="text" name="Phone" value="017********"> <br><br>
                Date of Birth: <input type="text" name="DoB" value="12-4-2000"><br><br>
                <input type="submit"name="edit"value="Update">
                
            </form>
        </fieldset>
        <?php
    }else if (isset($_COOKIE['Librarianflag'])) {
        ?>
        <fieldset>
                <legend>Update Information</legend>
                UserID: <input type="text" name="UserID" value="Karim98">
                Name: <input type="text" name="Name" value="Karim"> <br><br>
                Email: <input type="text" name="emailaccount" value="Karim@gmail.com"><br><br>
                Phone No: <input type="text" name="Phone" value="017********"> <br><br>
                Date of Birth: <input type="text" name="DoB" value="12-4-2000"><br><br>
                <input type="submit"name="edit"value="Update">
            </fieldset>
         <?php
    }else{
        header('location: WelocmePage.php'); 
    }
?>