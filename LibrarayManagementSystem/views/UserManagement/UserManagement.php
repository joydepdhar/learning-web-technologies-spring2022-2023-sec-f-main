<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])){
        // $User= $_REQUEST(userName);
        $username = $_REQUEST['userName'];
?>
<html>
    <head>
        <title>
            UserManagement
        </title>
        <style>
            /* CSS code here */
            body {
                margin: 0;
                padding: 0;
                background-color: #f2f2f2;
            }
            table {
                border-collapse: collapse;
                margin: 0 auto;
            }
            td {
                padding: 10px;
                vertical-align: top;
            }
            h1 {
                text-align: center;
                margin-top: 50px;
                margin-bottom: 30px;
            }
            h2 {
                margin-top: 20px;
                margin-bottom: 10px;
            }
            a {
                text-decoration: none;
                color: #4CAF50;
            }
            a:hover {
                text-decoration: underline;
                color: blue;
            }
            fieldset {
                border: 1px solid #ddd;
                padding: 20px;
                margin-bottom: 30px;
            }
            legend {
                font-size: 18px;
                font-weight: bold;
                text-align: center;
                margin-bottom: 20px;
            }
            img {
                display: inline;
                margin: 0 auto;
            }
            h4 {
                margin: 10px 0;
                color: #666;
            }
        </style>
    </head>
    <body>

        <div>
        <center>
        <table height=720 width=1080>
            <tr height=70>
                <td >
                    <table width = "800">
                        <tr>
                            <td>
                                <img height="120" src="/Joydep_Web_Technologies\LibraryLogo.jpg">
                            </td>
                            <td align="right">
                                <!-- <a href="CreateLibrarianAccount.php">Create Librarian Account</a>
                                <a href="">View Librarian Account</a>
                                <a href="">View Member Account</a>
                                <a href="">Assign Role</a>
                                <a href="">Permission</a> -->
                                <a href="../Admin.php?userName=<?php echo $username ?>">Back</a>
                                <a href="/Joydep_Web_Technologies\logout.php">Log Out</a>

                            </td>   
                        </tr>    
                    </table>                   
                </td>
            </tr>
            <tr>
                <h1>User Management Studio</h1>
            </tr>
            <tr>
                <td>
                    <fieldset>
                        <legend><h2>User Management</h2></legend>
                        <a href="CreateLibrarianAccount.php?username=<?php echo $username ?>">Create Librarian Account</a><br/>
                        <a href="ViewLibrarianAccount.php?username=<?php echo $username ?>">View Librarian Account</a> <br> 
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>          
                    <fieldset>
                        <legend><h2>DashBoard Management</h2></legend>
                        <!-- C:\xampp\htdocs\LibrarayManagementSystem\views\ViewProfile\ViewProfile.php -->
                        <!-- <a href="../ViewProfile\AdminAccount.php?username=>">ViewProfile</a><br> -->
                        <a href="viewAllinformation.php?username=<?php echo $username ?>">ViewProfile</a><br>

                        <!-- <a href="../ViewProfile/UpdateInfo.php">EditProfile</a>                         -->
                    </fieldset>
                </td>
            <tr>
                <td>
                    <fieldset>
                        <legend><h2>Access Control</h2></legend>
                        <a href="../AccessControl/settingPermission.php?username=<?php echo $username ?>">setting Permission</a><br>
                        <a href="../AccessControl\settingPermission.php?username=<?php echo $username ?>">Access Time</a>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>
                    <fieldset>
                        <legend><h2>Content</h2></legend>
                        <a href="RemoveUser.php?userName=<?php echo $username ?>">Remove User</a><br>
                        <!-- <a href="\Joydep_Web_Technologies\Content\RemoveBook.php"> RemoveBook</a> -->
                    </fieldset>
                </td>
            </tr>
            <tr height =40>
                <td align="center">
                <h4>Copyright ©JoyDep_Dhar_2023</h4>    
                </td>
            </tr>
        </table>
    </center>
        </div>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>