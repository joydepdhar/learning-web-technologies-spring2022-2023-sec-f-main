<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])){
        $username=$_REQUEST['username'];
?>
<html>
  <head>
    <title>ViewLibrarianAccount</title>
    <style>
      /* Set global styles */
      body {
        font-family: Arial, sans-serif;
        font-size: 16px;
        margin: 0;
        padding: 0;
      }

      header {
        background-color: #f2f2f2;
        padding: 10px;
      }
      header img {
        height: 80px;
        vertical-align: middle;
      }
      header a {
        /* display: flex; */
        margin-left: 20px;
        text-decoration: none;
        color: #333;
      }
      main {
        padding: 20px;
      }

      fieldset {
        border: none;
        margin-bottom: 20px;
      }

      legend {
        font-weight: bold;
        margin-bottom: 10px;
      }

      table {
        border-collapse: collapse;
        width: 100%;
      }

      th {
        background-color: #f2f2f2;
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
      }

      td {
        border: 1px solid #ddd;
        padding: 8px;
      }
      .navtable{
        border:0px;
      }
    </style>
  </head>
  <body>
    <header>
      <!-- <img src="/Joydep_Web_Technologies\LibraryLogo.jpg" alt="Library Logo" />
      <nav>
        
      </nav> -->
      <table width = "800" class="navtable">
                        <tr class="navtable">
                            <td class="navtable">
                                <img height="120" src="/Joydep_Web_Technologies\LibraryLogo.jpg">
                            </td>
                            <td align="right"class="navtable">
                                <!-- <a href="CreateLibrarianAccount.php">Create Librarian Account</a>
                                <a href="">View Librarian Account</a>
                                <a href="">View Member Account</a>
                                <a href="">Assign Role</a>
                                <a href="">Permission</a> -->
                                <a href="../UserManagement/UserManagement.php?userName=<?php echo $username ?>">Back</a>
                                <!-- <a href="/Joydep_Web_Technologies\logout.php">Log Out</a> -->

                            </td>   
                        </tr>    
                    </table>   
    </header>
    <main>
      <fieldset>
        <legend>Permission</legend>
        <fieldset>
          <legend>Current Librarian</legend>
          <table>
            <tr>
              <th>Name</th>
              <th>Starting Time</th>
              <th>Ending Time</th>
              <th>Permission</th>
            </tr>
            <tr>
              <td>Karin Benzema</td>
              <td>4.00</td>
              <td>8.00</td>
              <td>ON</td>
            </tr>
          </table>
        </fieldset>
        <fieldset>
          <legend>Next Librarian</legend>
          <table>
            <tr>
              <th>Name</th>
              <th>Starting Time</th>
              <th>Ending Time</th>
              <th>Permission</th>
            </tr>
            <tr>
              <td>Vinicius</td>
              <td>4.00</td>
              <td>8.00</td>
              <td>OFF</td>
            </tr>
          </table>
        </fieldset>
      </fieldset>
    </main>
  </body>
</html>

<?php 
    }else{
        header('location: /Joydep_Web_Technologies\WelocmePage.php'); 
    }
?>