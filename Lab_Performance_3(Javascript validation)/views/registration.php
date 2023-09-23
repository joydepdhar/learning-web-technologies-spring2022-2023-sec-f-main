<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
    <center>
        <table  height=720 width=1080>
            <tr height=70>
                <td >
                     <table width = "800">
                    <tr>
                        <td>
                            
                        </td>
                        <td align="right">
                     <a href="login.php"> Login</a>   <a href="registration.php">| Registration</a>  
                    </td>    
                </tr>    
                </table>
                    
                </td>
            </tr>
            <tr>
                <td>        <form name="reg" method="POST" action="../controllers/regcheck.php" onsubmit="return validateform()" >
                            <fieldset>
                                <legend>REGISTRATION</legend>
                                <table>
                                    <tr>
                                        <td>Name</td>
                                        <td>:<input type="text" name="name" value=""/> <br></td>
                                    </tr>
                                        
                                    <tr>
                                        <td>Email</td>
                                        <td>:<input type="email" name="email" value=""/> <br>
                                    </tr>
                                    <tr>
                                        <td>Username</td>
                                        <td>:<input type="text" name="username" value=""/> <br></td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td>:<input type="password" name="password" value=""/> <br></td>
                                    </tr>
                                    <tr>
                                        <td>Confirm Password</td>
                                        <td>:<input type="password" name="confirmpassword" value=""/> <br> </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Phone Number (+88)</td>
                                        <td>:<input type="number" name="phonenumber" value=""/> <br> </td>
                                        
                                    </tr>
                                </table>
                                <fieldset>
                                    <Legend>Gender</Legend>
            
                                         <input type="radio" name="gender" value="Male"/> Male
                                         <input type="radio" name="gender" value="Female"/> Female
                                        <input type="radio" name="gender" value="Other"/> Other <br>
                                 </fieldset>
                                 <h1></h1>
                                 <fieldset>
                                  <Legend>Date of Birth</Legend>
            
                                          <input type="date" name="dob" value=""/> 
                                </fieldset> 
                                <fieldset>
                                    <Legend>Role</Legend>
            
                                         <input type="radio" name="role" value="customer"/> Customer
                                         <input type="radio" name="role" value="deliveryman"/> Delivery Man
                                        <input type="radio" name="role" value="vendor"/> Vendor <br>
                                 </fieldset>
                                 <fieldset>
                                    <Legend>Address</Legend>
            
                                         <textarea name="address" id="" cols="50" rows="5"></textarea>
                                        
                                 </fieldset>
                                              <h1></h1>
                            <input type="submit" name="submit" value="Submit"/>
                            <input type="reset" name="reset" value="Reset">
            </fieldset>
        </form>
</td>
            </tr>
            <tr>
                <td align="center"><fieldset>
                    <legend>Help & Support</legend>
                    <a href="">Contact Us</a>  <br>
                    <a href="">Complain</a> <br>
                    <a href="">FAQ</a> <br>
            </fieldset></td>
            </tr>
            <tr height =40>
                <td align="center">Copyright © 2023</td>
            </tr>
        </table>
    </center>
    </body>
</html>


<script>  
function validateform(){  
var name=document.reg.name.value;  
var password=document.reg.password.value;
var confirmpassword=document.reg.confirmpassword.value; 
var gender=document.reg.gender.value; 
var role=document.reg.role.value; 
var phonenumber=document.reg.phonenumber.value;   
var dob=document.reg.dob.value; 
var address=document.reg.address.value;   
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}
else if(password.length<8){  
  alert("Password must be at least 8 characters long.");  
  return false;  
  }  


  else if(password != confirmpassword){  
  alert("password didnt match");  
  return false;  
  }
  else if(phonenumber.length != 11){  
  alert("invalid phonenumber");  
  return false;  
  }
  else if(gender==null || gender==""){  
  alert("select gender please");  
  return false;  
  }
  else if(role==null || role==""){  
  alert("select role please");  
  return false;  
  }
  var dobDate = new Date(dob);
    if (isNaN(dobDate.getTime()) || dobDate > new Date()) {
      alert("Please enter a valid date of birth");
      return false;
    }
    else if(address==null || address==""){  
  alert("Provide Address please");  
  return false;  
  }
}  
</script>