<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])||isset($_COOKIE['Librarianflag'])){
        $username=$_REQUEST['userName'];
?>
<html>
    <head>
        <title>
            Add New Journal
        </title>
        <style>
        /* Center the form on the page */
        div {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        }

        /* Style the fieldset */
        fieldset {
        border: 2px solid #ddd;
        padding: 20px;
        border-radius: 5px;
        }

        /* Style the legend */
        legend {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
        }

        /* Style the input fields */
        input[type=text], input[type=date] {
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-bottom: 10px;
        }

        /* Style the submit button */
        input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        }
    </style>
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
                                    <a href="../BookManagement.php?userName=<?php echo $username ?>">back</a>
                                </td>   
                            </tr>    
                        </table>                   
                    </td>
                </tr>
            </table>
        </center>
        <div>
            <fieldset>
                <form action="../../../controls/AddJournal.php" method="post">
                <legend><h3>Add New Journal </h3></legend>
                Journal Name: <input type="text"Name="JName" Value=""><br><br>
                Author Name: <input type="text"Name="JAuthorName" Value=""><br><br>
                Genra: <input type="text"Name="JGenra" Value=""><br><br>
                Publicated Date:<input type="date"Name="JPublicationName" Value=""><br><br>
                DIO: <input type="text" Name="DIO" Value=""><br><br>
                <input type="submit"name="AddJournal" Value="Add Journal">
                </form>
            </fieldset>
        </div>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>