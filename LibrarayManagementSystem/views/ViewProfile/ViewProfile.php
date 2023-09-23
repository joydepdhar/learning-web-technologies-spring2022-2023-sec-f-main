<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])){
    $username=$_REQUEST['userName'];
?>
<html>
    <head>
        <title>
            View Profile  
        </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
                                <a href="../Admin.php?userName=<?php echo $username; ?>"><i class="fas fa-arrow-left"></i>Back</a>
                                <!-- <a href="logout.php">Log Out</a> -->

                            </td>   
                        </tr>    
                    </table>                   
                </td>
            </tr>
            <tr>
                <h1>View Profile Management</h1>
            </tr>
            <tr>
                <td>
                    <fieldset>
                        <legend align="center"><h2>Personal Information</h2></legend>
                        <!-- <a href="UpdateInfo.php">Update Information</a><br/>
                        <a href="MemberInformationView.php">Member Information View</a> -->
                        <a href="AdminAccount.php?username=<?php echo $username; ?>">ViewProfile</a>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>          
                    <fieldset>
                        <legend align="center"><h2>Account Setting</h2></legend> 
                        <a href="AdminAccount.php?username=<?php echo $username;?>">Account Details</a>                       
                    </fieldset>
                </td>
            <tr>
                <td>
                    <fieldset>
                        <legend align="center"><h2>Record History</h2></legend>
                        <a href="RecordHistory.php?userName=<?php echo $username; ?>">View Record History</a>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>
                    <fieldset>
                        <legend align="center"><h2>Request History</h2></legend>
                        <a href="RequestHistory.php?userName=<?php echo $username; ?>">View Request History</a>

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
