        <?php
        require_once "../../models/usermodels.php";
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

                <legend>View librarian Information</legend>
                <?php
                $state=Librarianlist ();
                echo "<table border='1' cellspacing='0' width='1000'>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <Th>DOB</Th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>";
                        
                while($row = mysqli_fetch_assoc($state)){
           echo " <tr>
            <td>{$row['ID']}</td>
            <td>{$row['Name']}</td>
            <td>{$row['UserName']}</td>
            <td>{$row['Email']}</td>
            <td>{$row['Gender']}</td>
            <td>{$row['DOB']}</td>
            <td><a href='../../controls\deleteUserHandle.php?id=".$row['ID']."'>Delete</a> </td>
            <td><a href='UpdateInfo.php?id=".$row['ID']."'>UpdateInformation</a> </td>
            
        
        </tr>";
    }
                
                echo "</table>";
                ?>
                
            </fieldset>
            <fieldset>
                <legend>View All</legend>
                <?php
                $state=Memberlist ();
                echo "<table border='1' cellspacing='0' width='1000'>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <Th>DOB</Th>
                            <th>Delete</th>
                            <th>Update</th>

                        </tr>";
                        
                while($row = mysqli_fetch_assoc($state)){
           echo " <tr>
            <td>{$row['ID']}</td>
            <td>{$row['Name']}</td>
            <td>{$row['UserName']}</td>
            <td>{$row['Email']}</td>
            <td>{$row['Gender']}</td>
            <td>{$row['DOB']}</td>
            
            <td><a href='../../controls\deleteUserHandle.php?id=".$row['ID']."'>Delete</a> </td>
            <td><a href='UpdateInfo.php?id=".$row['ID']."'>UpdateInformation</a> </td>
            
        
        </tr>";
    }
                
                echo "</table>";
                ?>
                
            </fieldset>
    </body>
</html>

         <?php
    }else{
        header('location: WelocmePage.php'); 
    }
?>