<html>
<head>
   <title></title>
   
   </head>
   <body>
    <fieldset>
<form method='POST'>
 Name :<input type="text" name="name">
 <hr>
 <input type="submit" value="Submit Name">
 </form>
 </fieldset>
<?php

$name = $_POST['name'];
echo "<h3>  $name </h3>";
?>
</body>
</html>