<?php 
session_start();

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $isValid = true;
    $firstName = $_POST['fname'];
    $LastName = $_POST['lname'];
    $fatherName = $_POST['faname'];
    $motherName = $_POST['mname'];
    $gender = $_POST['gender'];
    $blood = $_POST['bloods'];
    $religions = $_POST['religions'];
    $presentAddress = $_POST['road'] . "," . $_POST['city'] . " " . $_POST['postcode'] . "," . $_POST['country'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $road = $_POST['road'];
    $postcode = $_POST['postcode'];

    
    if(empty($firstName)){
        $_SESSION['firstNameErrMsg'] = "First Name is required";
        $isValid = false;
        
    }
    else{
        $_SESSION['firstName'] = $firstName;
        setcookie("firstName",$firstName,time()+60*60*24*30,"/");
        $_SESSION['firstNameErrMsg'] = "";
    }
    if(empty($LastName)){
        $_SESSION['LastNameErrMsg'] = "Last Name is required";
        $isValid = false;
    }
    else{
        $_SESSION['LastName'] = $LastName;
        setcookie("LastName",$LastName,time()+60*60*24*30,"/");
        $_SESSION['LastNameErrMsg'] = "";
    }

    if(empty($gender)){
        $_SESSION['genderErrMsg'] = "Gender is required";
       
        $isValid = false;
    }
    else
    {
        $_SESSION['gender'] = $gender;
        setcookie("gender",$gender,time()+60*60*24*30,"/");
        $_SESSION['genderErrMsg'] = "";
    }



    if(empty($fatherName)){
        $_SESSION['fatherNameErrMsg'] = "Father Name is required";
        $isValid = false;
    }
    else{
        $_SESSION['fatherName'] = $fatherName;
        setcookie("fatherName",$fatherName,time()+60*60*24*30,"/");
        $_SESSION['fatherNameErrMsg'] = "";
    }
    if(empty($motherName)){
        $_SESSION['motherNameErrMsg'] = "Mother Name is required";
        $isValid = false;
    }
    else{
        $_SESSION['motherName'] = $motherName;
        setcookie("motherName",$motherName,time()+60*60*24*30,"/");
        $_SESSION['motherNameErrMsg'] = "";
    }
    if(empty($blood)){
        $_SESSION['bloodErrMsg'] = "Blood Group is required";
        $isValid = false;
    }
    else{
        $_SESSION['blood'] = $blood;
        setcookie("blood",$blood,time()+60*60*24*30,"/");
        $_SESSION['bloodErrMsg'] = "";
    }
    if(empty($religions)){
        $_SESSION['religionsErrMsg'] = "Religion is required";
        $isValid = false;
    }
    else{
        $_SESSION['religions'] = $religions;
        setcookie("religions",$religions,time()+60*60*24*30,"/");
        $_SESSION['religionsErrMsg'] = "";
    }
    if(empty($presentAddress)){
        $_SESSION['presentAddressErrMsg'] = "Present Address is required";
        $isValid = false;
    }
    else{
        $_SESSION['presentAddress'] = $presentAddress;
        setcookie("presentAddress",$presentAddress,time()+60*60*24*30,"/");
        $_SESSION['presentAddressErrMsg'] = "";
    }
    if(empty($email)){
        $_SESSION['emailErrMsg'] = "Email is required";

        $isValid = false;
    }
    else{
        $_SESSION['email'] = $email;
        setcookie("email",$email,time()+60*60*24*30,"/");
        $_SESSION['emailErrMsg'] = "";
    }
    if(empty($phone)){
        $_SESSION['phoneErrMsg'] = "Phone is required";
        $isValid = false;
    }
    else{
        $_SESSION['phone'] = $phone;
        setcookie("phone",$phone,time()+60*60*24*30,"/");
        $_SESSION['phoneErrMsg'] = "";
    }
    if(empty($website)){
        $_SESSION['websiteErrMsg'] = "Website is required";
        $isValid = false;
    }
    else{
        $_SESSION[''] = $website;
        setcookie("website",$website,time()+60*60*24*30,"/");
        $_SESSION['websiteErrMsg'] = "";
    }
    if(empty($username)){
        $_SESSION['usernameErrMsg'] = "Username is required";
        $isValid = false;
    }
    else{
        $_SESSION['username'] = $username;
        setcookie("username",$username,time()+60*60*24*30,"/");
        $_SESSION['usernameErrMsg'] = "";
    }
    if(empty($password)){
        $_SESSION['passwordErrMsg'] = "Password is required";
        $isValid = false;
    }
    else{
        $_SESSION['password'] = $password;
        $_SESSION['passwordErrMsg'] = "";
    }
    if(empty($cpassword)){
        $_SESSION['cpasswordErrMsg'] = "Confirm Password is required";
        $isValid = false;
    }
    else{
        $_SESSION['cpassword'] = $cpassword;
        $_SESSION['cpasswordErrMsg'] = "";
    }
    if($password != $cpassword){
        $_SESSION['cpasswordErrMsg'] = "Password and Confirm Password must be same";
        $isValid = false;
    }
    if(empty($road)){
        $_SESSION['roadErrMsg'] = "Road is required";

        $isValid = false;
    }
    else{
        $_SESSION['road'] = $road;
        setcookie("road",$road,time()+60*60*24*30,"/");
        $_SESSION['roadErrMsg'] = "";
    }
    if(empty($postcode)){
        $_SESSION['postcodeErrMsg'] = "Postcode is required";
        $isValid = false;
    }
    else{
        $_SESSION['postcode'] = $postcode;
        setcookie("postcode",$postcode,time()+60*60*24*30,"/");
        $_SESSION['postcodeErrMsg'] = "";
    }
    if(isset($_POST['saveDraft'])) {
       
        date_default_timezone_set('Asia/Dhaka');
        $_SESSION['lastModified'] = date("Y-m-d H:i:s"); 
        setcookie("lastModified", $_SESSION['lastModified'], time()+60*60*24*30, "/"); 
        header("Location: ../Views/Registration.php"); 
        exit(); 
    }
    if($isValid === true){
        header("Location: ../Views/Registration.php");
    }
    else{
        header("Location: ../Views/Registration.php");
    }

}
else{
    echo "Invalid Request";
}







?>