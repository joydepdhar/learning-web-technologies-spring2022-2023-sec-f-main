<?php
    session_start();
    require_once "../../../models/bookManagementmodel.php";
    if(isset($_COOKIE['Adminflag']) || isset($_COOKIE['Librarianflag'])){
        $username = $_REQUEST['userName'];
?>
<html>
    <head>
        <title>Circular Books</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
            $('#search').on('input', function() {
                            var query = $(this).val();
                            $.ajax({
                            type: "POST",
                            url: "search.php",
                            data: { query: query },
                            success: function(response) {
                            $('#book-catalog').html(response);
                            }
                        });
                    });
                });

        </script>
        <style>
            body {
                font-family: Arial, sans-serif;
                font-size: 16px;
                color: #333;
                background-color: #f0f0f0;
            }

            h3 {
                margin: 0;
                font-size: 28px;
                color: #444;
            }

            h4 {
                margin: 0;
                font-size: 22px;
                color: #555;
            }

            fieldset {
                border: none;
                padding: 20px;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            }

            input[type="text"] {
                padding: 10px;
                font-size: 16px;
                border: 1px solid #ddd;
                border-radius: 4px;
                box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
                width: 300px;
                margin-right: 20px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            th, td {
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }

            th {
                background-color: #eee;
            }

            a {
                color: #007bff;
                text-decoration: none;
            }

            a:hover {
                text-decoration: underline;
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
                                <a href="..\BookManagement.php?userName=<?php echo $username?>">back</a>
                                </td>   
                            </tr>    
                        </table>                   
                    </td>
                </tr>
            </table>
        </center>
        <div>
            <fieldset>
                <legend><h3>Library Book Catalog</h3></legend>
                <h4>Search Book:</h4>
                <input type="text" id="search"><br><br>
                <div id="book-catalog">
                    
                </div>
            </fieldset>
        </div>
    </body>
</html>
<?php 
    } else {
        header('location: WelocmePage.php'); 
    }
?>
