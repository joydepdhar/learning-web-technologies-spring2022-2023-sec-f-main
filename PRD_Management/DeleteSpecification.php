<?php 
    session_start();
    if(isset($_REQUEST['submit'])){
        ?>
<html>
    <head>
        <title>Delete Specification</title>
    </head>
    <body>
        <form action="DeleteSpecificationHandle.php" method="post">
        <fieldset>
            <legend>Delete Specification</legend>
            SpecificationName: <input type="text"name="SPName" Value=""> <br><br>
            <input type="submit" Name="SUBMIT"Value="Delete">
        </fieldset>
        </form>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>
