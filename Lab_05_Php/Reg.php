<?php 

if($_SERVER['REQUEST_METHOD'] === "POST")
{
    if(!isset($_POST['fname']) || !isset($_POST['lname']) || !isset($_POST['faname']) || !isset($_POST['mname']) || !isset($_POST['bloods']) || !isset($_POST['religions']) || !isset($_POST['road']) || !isset($_POST['city']) || !isset($_POST['postcode']) || !isset($_POST['country']) || !isset($_POST['email']) || !isset($_POST['phone']) || !isset($_POST['website']) || !isset($_POST['username']) || !isset($_POST['password']) || !isset($_POST['cpassword']))
    {
        $firstName="";
        $LastName="";
        $fatherName="";
        $motherName="";
        $blood="";
        $religions="";
        $presentAddress="";
        $email="";
        $phone="";
        $website="";
        $username="";
        $password="";
        $cpassword="";

    }
    else
    {
    $firstName = $_POST['fname'];
    $LastName = $_POST['lname'];
    $fatherName = $_POST['faname'];
    $motherName = $_POST['mname'];
    $blood = $_POST['bloods'];
    $religions = $_POST['religions'];
    $presentAddress = $_POST['road'] . "," . $_POST['city'] . " " . $_POST['postcode'] . "," . $_POST['country'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    }

    $isValid = true;
    
    $firstNameErrMsg="";
    $LastNameErrMsg="";
    $fatherNameErrMsg="";
    $motherNameErrMsg="";
    $bloodErrMsg="";
    $religionsErrMsg="";
    $presentAddressErrMsg="";
    $emailErrMsg="";
    $phoneErrMsg="";
    $websiteErrMsg="";
    $usernameErrMsg="";
    $passwordErrMsg="";
    $cpasswordErrMsg="";
    $emailInvalidMsg = "";
    $phoneInvalidMsg = "";
    $websiteInvalidMsg="";


    if(empty($firstName)) {
        
        $firstNameErrMsg = "Please fill up the first name";
        $isValid = false;
    }
    if (empty($LastName)) {
        $LastNameErrMsg = "Please fill up the last name";
        $isValid = false;
    }
    if (empty($fatherName)) {
        $fatherNameErrMsg = "Please fill up the father name";
        $isValid = false;
    }
    if (empty($motherName)) {
        $motherNameErrMsg = "Please fill up the mother name";
        $isValid = false;
    }
    if (empty($blood)) {
        $bloodErrMsg = "Please fill up the blood group";
        $isValid = false;
    }
    if (empty($religions)) {
        $religionsErrMsg = "Please fill up the religions";
        $isValid = false;
    }
    if (empty($presentAddress)) {
        $presentAddressErrMsg = "Please fill up the present address";
        $isValid = false;
    }
    if (empty($email)) {
        
        $emailErrMsg = "Please fill up the email";
        $isValid = false;
    }
   
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailInvalidMsg = "Invalid email format";
        $isValid = false;
    }
    if (empty($phone)) {
        $phoneErrMsg = "Please fill up the phone";
        $isValid = false;
    }
    
    elseif (!preg_match("/^(\+)?(88)?01[0-9]{9}$/",$phone)) {
        $phoneInvalidMsg = "Invalid phone format";
        $isValid = false;
    }
    if (empty($website)) {
        
        
        $websiteErrMsg = "Please fill up the website";
        $isValid = false;
    }
    
    elseif (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
        $websiteInvalidMsg = "Invalid website format";
        $isValid = false;
    }
    if (empty($username)) {
        
        $usernameErrMsg = "Please fill up the username";
        $isValid = false;
       
    }
    //username should be 5 characters
    if (strlen($username) <= 5) {
        $usernameErrMsg = "Username should be at least 5 characters";
        $isValid = false;
    }
    if (empty($password)) {
        $passwordErrMsg = "Please fill up the password";
        $isValid = false;
    }
    if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/",$password)) {
        $passwordErrMsg = "Password should have one special character, one number, one uppercase and one lowercase";
        $isValid = false;
    }
    if (empty($cpassword)) {
        $cpasswordErrMsg = "Please fill up the confirm password";
        $isValid = false;
    }
    
    if ($password != $cpassword) {
        $cpasswordErrMsg = "Password and confirm password not matched";
        $isValid = false;
    }
}
?>


<!DOCTYPE html>
<html>
<body>
<h1>Registration</h1>
<form action="" method="post" novalidate>
    <div class="table-1">
    <table>
         <tr>
            <td>
                <table>
                    <tr>
                        <td>
                            <fieldset>
                                <legend>General Information</legend>
                            
                                    <table>
                                        <tr>
                                            <th><label for="fname">First name:</label></th>
                                            <td><input type="text" id="fname" name="fname"></td>
                                            
                                            <td><?php echo $firstNameErrMsg ?? "" ?></td>
                                        </tr>
                                        <tr>
                                            <th><label for="lname">Last name:</label></th>
                                            <td> <input type="text" id="lname" name="lname"><br></td>
                                            <br>
                                            <td><?php echo $LastNameErrMsg ?? "" ?></td>
                                        </tr>
                                          
                                        <tr>
                                            <th><label for="gender">Gender:</label></th>
                                            <td>
                                                <input type="radio" id="Male" name="male" value="Male">
                                                <label for="Male">Male</label>
                                                <input type="radio" id="Female" name="female" value="Female">
                                                <label for="Female">Female</label>
                                            </td>
                                            <br>
                                            <td><?php echo $genderErrMsg ?? "" ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <th><label for="faname">Father's name:</label></th>
                                                <td><input type="text" id="faname" name="faname"></td>
                                                <br>
                                                <td><?php echo $fatherNameErrMsg ?? "" ?></td>
                                        </tr>
                                        <tr>
                                            <th><label for="mname">Mother's name:</label></th>
                                            <td><input type="text" id="mname" name="mname"></td>
                                            <br>
                                            <td><?php echo $motherNameErrMsg ?? "" ?></td>
                                        </tr>
                                        <tr>
                                            <th><label for="blood">Blood Group:</label></th>
                                                <td>
                                                    <select name="bloods" id="blood">
                                                        <option value="A+">A+</option>
                                                        <option value="Ab+">Ab+</option>
                                                        <option value="B+">B+</option>
                                                        <option value="O+">O+</option>
                                                      </select>
                                                </td>
                                                <br>
                                                <td><?php echo $bloodErrMsg ?? "" ?></td>
                                        </tr>

                                        <tr>
                                            <th><label for="religion">Religion:</label></th>
                                                <td>
                                                    <select name="religions" id="religion">
                                                    <option value="Islam">Islam</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Others">Others</option>
                                                    
                                                  </select>
                                                </td>
                                                <br>
                                                <td><?php echo $religionsErrMsg ?? "" ?></td>

                                        </tr>
                                          
                                          
                                          
                                    </table>          
                            
                                 
                                
                            </fieldset>    
                        </td>
                        <td>
                            <fieldset>
                                <legend>Contact Information</legend>
                                <table>
                                   <tr>
                                    <th><label for="email">Email:</label></th>
                                    <td><input type="email" id="email" name="email"></td>
                                    <br>
                                    <td><?php echo $emailErrMsg ?? "" ?></td>
                                    <td><?php echo $emailInvalidMsg ?? "" ?></td>

                                   </tr>
                                   <tr>
                                    <th><label for="phone">Phone/Mobile:</label></th>
                                    <td><input type="text" id="phone" name="phone"></td>
                                    <br>
                                    <td><?php echo $phoneErrMsg ?? "" ?></td>
                                    <td><?php echo $phoneInvalidMsg ?? "" ?></td>
                                   </tr>
                                   <tr>
                                    <th><label for="website">Website:</label></th>
                                    <td><input type="text" id="website" name="website"></td>
                                    <br>
                                    <td><?php echo $websiteErrMsg ?? "" ?></td>
                                    <td><?php echo $websiteInvalidMsg ?? "" ?></td>
                                   </tr>
                                   <tr>
                                    <th>Address:</th>
                                    
                                    <td>
                                        <table>
                                            <tr>
                                                <fieldset>
                                                
                                                    <legend>Present Addrress:</legend>
                                                
                                                <select name="country" id="country">
                                                    <option value="Bangladesh">Bangladesh</option>
                                                
                                                  </select>
                                                  
                                                  <select name="city" id="city">
                                                      <option value="Dhaka">Dhaka</option>
                                                      
                                                      
                                                    </select>
                                                    <br>
                                                    <br>
                                                    <textarea id="road" name="road" rows="4" cols="50" placeholder="Road/Street/City"></textarea>
                                                    <br>
                                                    <input type="text" id="postcode" name="postcode" placeholder="Post Code"></td>
                                                </fieldset>
                                            </tr>
                                        </table>
                                        
                                        
                                    </td>
                                    
                                   </tr>  
                                 </table>
                               </fieldset>
                               
                        </td>
    
                        <td>
                            <fieldset>
                                <legend>Account Information</legend>
                            
                                    <table>
                                        <tr>
                                            <th><label for="username">Username:</label></th>
                                            <td><input type="text" id="username" name="username"></td><br>
                                            <td><?php echo $usernameErrMsg ?? "" ?></td>
                                          </tr>
                                          <tr>
                                            <th><label for="password">Password:</label></th>
                                            <td> <input type="password" id="password" name="password"><br></td>
                                            <td><?php echo $passwordErrMsg ?? "" ?></td>
                                            
                                           
                                          </tr>
                                          
                                          <tr>
                                            <th><label for="cpassword">Confirm Password:</label></th>
                                            <td><input type="password" id="cpassword" name="cpassword"></td>
                                            <td><?php echo $cpasswordErrMsg ?? "" ?></td>
                                            
                                          </tr>
                                          
                                          
                                          
                                    </table>          
                            
                                 
                                
                            </fieldset>
                            <br>
                            <button type="submit">Register</button>
                               
                            
                            
                        </td>


                        
                       
                    </tr>
                    
                </table>
               
            </td>
            
        </tr>
    </table>
        
</div>
    
</form>   

    
    
    







<!-- <table>
    <tr>
    <td>
        <table>
            <tr>
                <td>Table 1</td>
            </tr>
        </table>
    </td>
    <td><table><tr><td>Table 2>/td></tr></table>
    </td>
    </tr>
</table> -->

</body>
</html>
