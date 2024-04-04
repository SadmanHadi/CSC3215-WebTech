<?php session_start(); ?>
<!DOCTYPE html>
<html>
<body>
<h1>Registration</h1>
<form action="../Controllers/Reg.php" method="post" novalidate >
    <div class="table-1">
    <span>
   <b> Last Modified On:  <?php echo isset($_COOKIE['lastModified']) ? $_COOKIE['lastModified'] : ""; ?> </b>
    </span>
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
                                            <td><input type="text" id="fname" name="fname" value="<?php echo isset($_COOKIE['firstName']) ? $_COOKIE['firstName'] : ""; ?>">
                                            <?php echo isset($_SESSION['firstNameErrMsg']) ? $_SESSION['firstNameErrMsg'] : ""; ?>
                                        </td>
                                           
                                        </tr>
                                        <tr>
                                            <th><label for="lname">Last name:</label></th>
                                            <td> <input type="text" id="lname" name="lname" value="<?php echo isset($_COOKIE['LastName']) ? $_COOKIE['LastName'] : ""; ?>"><br>
                                            <?php echo isset($_SESSION['LastNameErrMsg']) ? $_SESSION['LastNameErrMsg'] : ""; ?>
                                        </td>
                                            

                                        </tr>
                                          
                                        <tr>
                                            <th><label for="gender">Gender:</label></th>
                                            <td>
                                                <input type="radio" id="Male" name="gender" value="Male" <?php echo isset($_COOKIE['gender']) && $_COOKIE['gender'] === 'Male' ? 'checked' : ''; ?>>
                                                <label for="Male">Male</label>
                                                <input type="radio" id="Female" name="gender" value="Female" <?php echo isset($_COOKIE['gender']) && $_COOKIE['gender'] === 'Female' ? 'checked' : ''; ?>>
                                                <label for="Female">Female</label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th><label for="faname">Father's name:</label></th>
                                                <td><input type="text" id="faname" name="faname"  value="<?php echo isset($_COOKIE['fatherName']) ? $_COOKIE['fatherName'] : ""; ?>">
                                                <?php echo isset($_SESSION['fatherNameErrMsg']) ? $_SESSION['fatherNameErrMsg'] : ""; ?>
                                            </td>
                                                
                                        </tr>
                                        <tr>
                                            <th><label for="mname">Mother's name:</label></th>
                                            <td><input type="text" id="mname" name="mname" value="<?php echo isset($_COOKIE['motherName']) ? $_COOKIE['motherName'] : ""; ?>">
                                            <?php echo isset($_SESSION['motherNameErrMsg']) ? $_SESSION['motherNameErrMsg'] : ""; ?>
                                        </td>
                                           
                                        </tr>
                                        <tr>
                                            <th><label for="blood">Blood Group:</label></th>
                                                <td>
                                                    <select name="bloods" id="blood">
                                                        <option value="A+" <?php echo isset($_COOKIE['blood']) && $_SESSION['blood'] === 'A+' ? 'selected' : ''; ?>>A+</option>
                                                        <option value="Ab+" <?php echo isset($_COOKIE['blood']) && $_SESSION['blood'] === 'Ab+' ? 'selected' : ''; ?>>Ab+</option>
                                                        <option value="B+" <?php echo isset($_COOKIE['blood']) && $_SESSION['blood'] === 'B+' ? 'selected' : ''; ?>>B+</option>
                                                        <option value="O+" <?php echo isset($_COOKIE['blood']) && $_SESSION['blood'] === ')+' ? 'selected' : ''; ?>>O+</option>
                                                      </select>
                                                      <?php echo isset($_SESSION['bloodErrMsg']) ? $_SESSION['bloodErrMsg'] : ""; ?>
                                                </td>
                                                
                                        </tr>

                                        <tr>
                                            <th><label for="religion">Religion:</label></th>
                                                <td>
                                                    <select name="religions" id="religion">
                                                    <option value="Islam" <?php echo isset($_COOKIE['religions']) && $_SESSION['religions'] === 'Islam' ? 'selected' : ''; ?>>Islam</option>
                                                    <option value="Hindu" <?php echo isset($_COOKIE['religions']) && $_SESSION['religions'] === 'Hindu' ? 'selected' : ''; ?>>Hindu</option>
                                                    <option value="Others" <?php echo isset($_COOKIE['religions']) && $_SESSION['religions'] === 'Others' ? 'selected' : ''; ?>>Others</option>
                                                    
                                                  </select>
                                                  <?php echo isset($_SESSION['religionsErrMsg']) ? $_SESSION['religionsErrMsg'] : ""; ?>
                                                </td>
                                                
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
                                    <td><input type="email" id="email" name="email" value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : ""; ?>">
                                    <?php echo isset($_SESSION['emailErrMsg']) ? $_SESSION['emailErrMsg'] : ""; ?>
                                </td>
                                    
                                   </tr>
                                   <tr>
                                    <th><label for="phone">Phone/Mobile:</label></th>
                                    <td><input type="text" id="phone" name="phone" value="<?php echo isset($_COOKIE['phone']) ? $_COOKIE['phone'] : ""; ?>">
                                    <?php echo isset($_SESSION['phoneErrMsg']) ? $_SESSION['phoneErrMsg'] : ""; ?>
                                </td>
                                    
                                   </tr>
                                   <tr>
                                    <th><label for="website">Website:</label></th>
                                    <td><input type="text" id="website" name="website" value="<?php echo isset($_COOKIE['website']) ? $_COOKIE['website'] : ""; ?>">
                                    <?php echo isset($_SESSION['websiteErrMsg']) ? $_SESSION['websiteErrMsg'] : ""; ?>
                                </td>
                                    
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
                                                    <textarea id="road" name="road" rows="4" cols="50" placeholder="Road/Street/City"><?php echo isset($_COOKIE['presentAddress']) ? $_COOKIE['presentAddress'] : ""; ?></textarea>
                                                    <?php echo isset($_SESSION['presentAddressErrMsg']) ? $_SESSION['presentAddressErrMsg'] : ""; ?>
                                                    <br>
                                                    <input type="text" id="postcode" name="postcode" placeholder="Post Code" value="<?php echo isset($_COOKIE['postcode']) ? $_COOKIE['postcode'] : ""; ?>"></td>
                                                    <?php echo isset($_SESSION['postcodeErrMsg']) ? $_SESSION['postcodeErrMsg'] : ""; ?>
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
                                            <td><input type="text" id="username" name="username"  value="<?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] : ""; ?>">
                                            <?php echo isset($_SESSION['usernameErrMsg']) ? $_SESSION['usernameErrMsg'] : ""; ?>
                                        </td><br>
                                           
                                          </tr>
                                          <tr>
                                            <th><label for="password">Password:</label></th>
                                            <td> <input type="password" id="password" name="password"><br>
                                            <?php echo isset($_SESSION['passwordErrMsg']) ? $_SESSION['passwordErrMsg'] : ""; ?>
                                        </td>
                                           
                                            
                                           
                                          </tr>
                                          
                                          <tr>
                                            <th><label for="cpassword">Confirm Password:</label></th>
                                            <td><input type="password" id="cpassword" name="cpassword">
                                            <?php echo isset($_SESSION['cpasswordErrMsg']) ? $_SESSION['cpasswordErrMsg'] : ""; ?>
                                        </td>
                                            
                                            
                                          </tr>
                                          
                                          
                                          
                                    </table>          
                            
                                 
                                
                            </fieldset>
                            <br>
                            <button type="submit">Register</button>
                            <button type="submit" name="saveDraft">Save As Draft</button>
                               
                            
                            
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