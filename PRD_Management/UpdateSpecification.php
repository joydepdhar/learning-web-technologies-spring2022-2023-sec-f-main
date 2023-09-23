<?php 
    session_start();
    if(isset($_REQUEST['submit'])){
        ?>
<html>
    <head>
        <title>Update Specification</title>
    </head>
    <body>
        <fieldset>
            <legend>Update Specification</legend>
            SpecificationName: <input type="text">
            <input type="submit" Name="SUBMIT"Value="SUBMIT">
        </fieldset>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>