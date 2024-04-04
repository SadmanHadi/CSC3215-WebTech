<?php 
//update user
session_start();
require_once '../Model/db.php';
require_once '../Model/Users.php';

if(isset($_POST['id']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['status'])){
    //get all fields
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = $_POST['status'];
   
    $result = updateUser($id, $username, $password, $status);
    
    if($result > 0){
        header("Location: ../Views/User.php");
    }else{
        echo "Error";
    }
}

?>