<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])){
        $username=$_REQUEST['userName'];
?>
<html>
    <head>
        <title>
            Request History
        </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            table {
                border-collapse: collapse;
                margin: auto;
            }
            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            th {
                background-color: #4CAF50;
                color: white;
            }
            a {
                text-decoration: none;
                color: #0066cc;
            }
            a:hover {
                text-decoration: underline;
                color: red;
            }
            fieldset {
                margin: 20px auto;
                padding: 20px;
                border: 2px solid #ddd;
                max-width: 1080px;
            }
            legend {
                font-size: 20px;
                font-weight: bold;
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
                                    <!-- <a href="UserManagement\UserManagement.php">UserManagement</a>
                                    <a href="">BookManagement</a>
                                    <a href="">ViewProfile</a>
                                    <a href="">Trending</a> -->
                                    <a href="ViewProfile.php?userName=<?php echo $username; ?>"><i class="fas fa-arrow-left"></i>back</a>
                                </td>   
                            </tr>    
                        </table>                   
                    </td>
                </tr>
            </table>
        </center>
        <div>
            <fieldset>
                <legend><h3>Library Request History</h3></legend>
                    <table border="1" cellspacing="0" width="1000"> 
                    <tr>
                        <th>Book Title</th>
                        <th>Requester Name</th>
                        <th>Request Date</th>
                    </tr>
                    <tr>
                        <td>The Great Gatsby</td>
                        <td>Jane Doe</td>
                        <td>March 10, 2023</td>
                    </tr>
                    <tr>
                        <td>To Kill a Mockingbird</td>
                        <td>John Smith</td>
                        <td>February 28, 2023</td>
                    </tr>
                    <tr>
                        <td>1984</td>
                        <td>Mike Johnson</td>
                        <td>January 15, 2023</td>
                    </tr>
                    </table>
            </fieldset>
        </div>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>