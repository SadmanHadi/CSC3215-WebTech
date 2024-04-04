<?php 
require_once 'db.php';


function getUsers(){
    $con = getConnection();
    $stmt = $con->prepare("SELECT * FROM admin");
    $stmt->execute();
    $result = $stmt->get_result();
    $users = $result->fetch_all(MYSQLI_ASSOC);
    return $users;
}

function getUser($id){
    $con = getConnection();
    $stmt = $con->prepare("SELECT * FROM admin WHERE Id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    return $user;
}

function updateUser($id, $username, $password, $status){
    $con = getConnection();
    $stmt = $con->prepare("UPDATE admin SET Username = ?, Password = ?, Status = ? WHERE Id = ?");
    $stmt->bind_param("ssii", $username, $password, $status, $id);
    $stmt->execute();
    return $stmt->affected_rows;
}

function deleteUser($id){
    $con = getConnection();
    $stmt = $con->prepare("DELETE FROM admin WHERE Id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->affected_rows;
}





?>