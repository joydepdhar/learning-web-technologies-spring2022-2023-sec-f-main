<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])||isset($_COOKIE['Librarianflag'])){
        $username=$_REQUEST['userName'];
?>
<html>
    <head>
        <title>
            Add New Book
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
        <script>
            function validateForm() {
                var bookName = document.forms["addBookForm"]["BookName"].value;
                var authorName = document.forms["addBookForm"]["BookAuthorName"].value;
                var genra = document.forms["addBookForm"]["Genra"].value;
                var publicationDate = document.forms["addBookForm"]["BookPublicationName"].value;
                var isbn = document.forms["addBookForm"]["ISBN"].value;

                if (bookName == "") {
                    alert("Book name must be filled out");
                    return false;
                }

                if (authorName == "") {
                    alert("Author name must be filled out");
                    return false;
                }

                if (genra == "") {
                    alert("Genra must be filled out");
                    return false;
                }

                if (publicationDate == "") {
                    alert("Publication date must be filled out");
                    return false;
                }

                if (isbn == "") {
                    alert("ISBN must be filled out");
                    return false;
                }
            }
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
                                    <a href="..\BookManagement.php?userName=<?php echo $username ?>">back</a>
                                </td>   
                            </tr>    
                        </table>                   
                    </td>
                </tr>
            </table>
        </center>
        <div>
            <!-- C:\xampp\htdocs\LibrarayManagementSystem\controls\Addbook.php -->
            <form method="POST" action="..\..\..\controls\Addbook.php?userName=<?php echo $username ?>" name="addBookForm" onsubmit="return validateForm()">
                <fieldset>
                    <legend><h3>Add New Book</h3></legend>
                    Book Name: <input type="text" name="BookName" value=""><br><br>
                    Author Name: <input type="text" name="BookAuthorName" value=""><br><br>
                    Genra: <input type="text" name="Genra" value=""><br><br>
                    Published Date:<input type="date" name="BookPublicationName" value=""><br><br>
                    ISBN: <input type="text" name="ISBN" value=""><br><br>
                    <input type="submit" name="AddBook" value="Add Book">
                </fieldset>
            </form>
        </div>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>
