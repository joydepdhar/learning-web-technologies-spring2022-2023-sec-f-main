<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])||isset($_COOKIE['Librarianflag'])){
        $username= $_REQUEST['userName'];
?>

<html>
    <head>
        <title>
            Circular Journal
        </title>
         <style>
            /* Style the circular books table */
            fieldset {
                border: 2px solid #ddd;
                padding: 20px;
                border-radius: 5px;
                width: 1000px;
            }

            legend {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 20px;
            }

            table {
                border-collapse: collapse;
                width: 100%;
                font-size: 16px;
            }

            th, td {
                text-align: left;
                padding: 8px;
            }

            th {
                background-color: #4CAF50;
                color: white;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            /* Style the borrow/reserve/renew/return buttons */
            button {
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                margin-right: 10px;
            }

            button:hover {
                background-color: #3e8e41;
            }

        </style>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {


            $('#search').on('input', function() {

                            // Get the search query
                            var query = $(this).val();
                            // Make an AJAX request to search.php
                            $.ajax({
                            type: "POST",
                            url: "searchJournal.php",
                            data: { query: query },
                            success: function(response) {
                            // Replace the book catalog with the search results
                            $('#book-catalog').html(response);
                            }
                        });
                    });
                });

        </script>
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
    }else{
        header('location: WelocmePage.php'); 
    }
?>