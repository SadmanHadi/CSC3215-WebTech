<?php 

if($_SERVER['REQUEST_METHOD'] === "POST")
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
?>


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
                                    <tr>
                                        <th>First Name :  </th>
                                        <td><?php echo $firstName ?></td>
                                        <!-- need dynamically data from php -->

                                      </tr>
                                      <tr>
                                          <th> <b>Last Name :</b>
                                          <!-- dynamic data in td -->
                                          <td><?php echo $LastName ?></td>
                                      </tr>
                                      <tr>
                                          <th> <b>Father's Name :</b>
                                          <td><?php echo $fatherName ?></td>
                                      </tr>
                                      <tr>
                                          <th> <b>Mother's Name :</b>
                                          <td><?php echo $motherName ?></td>
                                      </tr>
                                      <tr>
                                          <th> <b>Blood Group : :</b>
                                          <td><?php echo $blood ?></td>
                                      </tr>
                                      <tr>
                                          <th> <b>Religion:</b>
                                          <td><?php echo $religions ?></td>
                                      </tr>
                                      
                                </tr>
                               
                                 
                             </table>
                             
                             
                           </fieldset>
                           
                    </td>
                    <td>
                        <fieldset>
                            <legend>Contact Information</legend>
                            <table>
                               <tr>
                                 <th>Email :</th>
                                 <td><?php echo $email ?></td>
                               </tr>
                               <tr>
                                   <th> <b>Phone/Mobile :</b>
                                   <td><?php echo $phone ?></td>
                               </tr>
                               <tr>
                                   <th> <b>Website :</b>
                                   <td><?php echo $website ?></td>
                               </tr>
                               <tr>
                                   <th> <b>Present Address :</b>
                                   <td><?php echo $presentAddress ?></td>
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
                                            <td><?php echo $username ?></td><br>
                                          </tr>
                                          <tr>
                                            <th><label for="password">Password:</label></th>
                                            <td><?php echo $password ?></td>
                                            
                                           
                                          </tr>
                                          
                                          
                                          
                                          
                                          
                                    </table>          
                            
                                 
                                
                            </fieldset>
                            
                               
                            
                            
                        </td>
                </tr>
            </table>
        </td>
        
        </tr>
    </table>
</div>