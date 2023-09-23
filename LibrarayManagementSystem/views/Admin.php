<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])){
        $username = $_REQUEST['userName']; 
?>
<html>
    <head>
        <title>
            AdminPortal
        </title>
        <style>
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
                color: black;
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
                                <img height="120" src="LibraryLogo.jpg">
                            </td>
                            <td align="right">
                                <!-- <a href="UserManagement\UserManagement.php">UserManagement</a>
                                <a href="">BookManagement</a>
                                <a href="">ViewProfile</a>
                                <a href="">Trending</a> -->
                                <a href="../controls/logout.php">Log Out</a>
                            </td>   
                        </tr>    
                    </table>                   
                </td>
            </tr>
            <tr>
                <h1>Welcome Back <?php echo$username;?></h1>
            </tr>
            <tr>
                <td>
                    <fieldset>
                        <legend align="center"><h2>AdminManagement</h2></legend>
                        <p>AdminManagement:</p>
                        <!-- <a href="UserManagement\UserManagement.php">AdminManagement</a>        -->
                        <a href="UserManagement/UserManagement.php?userName=<?php echo $username; ?>">AdminManagement</a>

                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>          
                    <fieldset>
                        <legend align="center"><h2>Book Management</h2></legend>
                        <p>Book Management</p>
                        <a href="BookManagement\Bookmanagement.php?userName=<?php echo $username; ?>">BookManagement</a>                        
                    </fieldset>
                </td>
            <tr>
                <td>
                    <fieldset>
                        <legend align="center"><h2>View Porfile</h2></legend>
                        <a href="ViewProfile/ViewProfile.php?userName=<?php echo $username; ?>">View Profile</a>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>
                    <fieldset>
                        <legend align="center"><h2>Trending</h2></legend>
                        <a href="Trending/Trending.php?userName=<?php echo $username; ?>">Trending</a>
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