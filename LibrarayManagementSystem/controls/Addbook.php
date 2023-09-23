<?php
require_once "../models/bookManagementmodel.php";
    session_start();
   
    if(isset($_COOKIE['Adminflag'])||isset($_COOKIE['Librarianflag'])){
         $username=$_REQUEST['userName'];
?>
<?php 
    if(isset($_REQUEST['AddBook'])){
        $Bname = $_REQUEST['BookName']; 
        $BAuthor=$_REQUEST['BookAuthorName'];
        $Genra = $_REQUEST['Genra'];
        $BPublication=$_REQUEST['BookPublicationName'];
        $ISBN = $_REQUEST['ISBN']; 
        if($Bname==""&&$BAuthor==""&&$Genra==""&&$BPublication==""&&$ISBN==""){
            header('location:AddNewBook.php');
            echo"Fill all box";

        }else{    
             $username=$_REQUEST['userName'];
                $bookInfo = ['BookName'=>$Bname,'AuthorName'=>$BAuthor ,'Genra'=>$Genra, 'PublishedDate'=>$BPublication,'ISBN'=>$ISBN];
                $add=addBook($bookInfo);
                if($add){ 
                    echo"Book ADD successfully";
                header('location: ../views/BookManagement/Acquisition/AddNewBook.php?userName=$username');
            }else{
                echo "DB error, try again";
            } 
            }
        }
        else {
            echo"Invaid entry";
        }
?>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>