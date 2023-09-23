<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])||isset($_COOKIE['Librarianflag'])){
?>
<html>
    <head>
        <title>
            Remove User
        </title>
    </head>
    <body>
        <fieldset>
            <legend>Remove User</legend>
            userName: <input type="text">
            <button>Search</button>
            <table>
		<tr>
			<th>UserName</th>
			<th>Action</th>
		</tr>
		<tr>
			<td>Karim</td>
			<td>Remove User</td>
		</tr>
	</table>
        </fieldset>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>