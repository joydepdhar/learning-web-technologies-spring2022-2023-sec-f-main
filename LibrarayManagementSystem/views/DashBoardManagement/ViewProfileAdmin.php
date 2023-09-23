<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])){
?>
<html>
    <head>
        <title>
            ViewLibrarianAccount
        </title>
    </head>
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
                                    <a href="/Joydep_Web_Technologies\Admin.php">Back</a>
                                    <a href="/Joydep_Web_Technologies\logout.php">Log Out</a>
                                    </td>   
                                </tr>    
                            </table>                   
                        </td>
                    </tr>
            </div>
            <div>
                <tr>
                    <td>        
                        <form>
                        <fieldset>
                                    <legend><h2>Admin Information</h2></legend>
                                    <table>
                                        <tr>
                                                Search Account: <input type="text" name="UserID" value="Pogo">
                                                <button>Search</button>
                                        </tr>
                                        <tr>
                                            <td>Name</td>
                                            <td>:King Pogo<br></td>
                                        </tr>        
                                        <tr>
                                            <td>Email</td>
                                            <td>:pogo@gmail.com <br>
                                        </tr>
                                        <tr>
                                            <td>Username</td>
                                            <td>:pogo<br></td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td>:********<br></td>
                                        </tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td>Male</td>
                                        </tr>
                                        <tr>
                                            <td>Date Of Birth</td>
                                            <td>: 12/1/1781</td>
                                        </tr>
                                    </table>
                                </fieldset>
                        </form>
                    </td>
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