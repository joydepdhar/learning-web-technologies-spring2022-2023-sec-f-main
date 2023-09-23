<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])){
        $username=$_REQUEST['userName'];
?>
<html>
    <head>
        <title>
            Trending
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
                color: red;
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
                                <a href="../Admin.php?userName=<?php echo $username; ?>">Back</a>
                                <!-- <a href="/Joydep_Web_Technologies\logout.php">Log Out</a> -->

                            </td>   
                        </tr>    
                    </table>                   
                </td>
            </tr>
            <tr>
                <td>
                    <fieldset>
                        <legend align="center"><h2>Most popular Book</h2></legend>
                        <a href="mostPolularBook\mostpopularbook.php?userName=<?php echo $username; ?>">Most Popular Item</a><br/> 
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>          
                    <fieldset>
                        <legend align="center"><h2>Recently Added Book</h2></legend>
                        <a href="RecentlyAddedBook\RecentlyAddedBook.php?userName=<?php echo $username; ?>">Recently Added Book</a>                        
                    </fieldset>
                </td>
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