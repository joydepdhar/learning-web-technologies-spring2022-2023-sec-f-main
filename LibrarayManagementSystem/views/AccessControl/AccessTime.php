<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])){
        $username=$_REQUEST['username'];
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
                                    <a href="../UserManagement/UserManagement.php?userName=<?php echo $username ?>">Back</a>
                                    <!-- <a href="/Joydep_Web_Technologies\logout.php">Log Out</a> -->
                                    </td>   
                                </tr>    
                            </table>                   
                        </td>
                    </tr>
            </div>
            <div>
                <tr>
                    <td>        
                        <fieldset>
                            <legend>Permission</legend>
                            <fieldset>
                                <legend>Current Librarian</legend>
                                <h4>Name: Karin Benzema </h4>
                                <h4>Staring Time: 4.00</h4>
                                <h4>Ending Time: 8.00</h4>
                                <h4>Permission: ON</h4>            
                            </fieldset>
                            <fieldset>
                                <legend>Next Librarian</legend>
                                <h4>Name: Vinicius</h4>
                                <h4>Staring Time: 4.00</h4>
                                <h4>Ending Time: 8.00</h4>
                                <h4>Permission: OFF</h4> 

                            </fieldset>
                        </fieldset>
                    </td>
                </tr>
            </div>
       </center>
    </body>
</html>
<?php 
    }else{
        // C:\xampp\htdocs\Joydep_Web_Technologies\logout.php
        header('location: \Joydep_Web_Technologies/WelocmePage.php'); 
    }
?>