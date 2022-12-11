<?php
require_once 'connector.php';
 
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
 
$query = $db->query("SELECT * FROM user WHERE `email` = '$email' && `password` = '$password'");
$row = $query->num_rows;
$fetch = $query->fetch_array();
if($row > 0){
    $_SESSION['nama'] = $fetch['nama'];
    if(!empty($_POST['remember'])){
        setcookie("email", $_POST['email'], time()+(10 * 365 * 24 * 60 * 60));
        setcookie("password", $_POST['password'], time()+(10 * 365 * 24 * 60 * 60));
    }else{
        if(ISSET($_COOKIE['email'])){
            setcookie("email", "");
        }
        if(ISSET($_COOKIE['password'])){
            setcookie("password", "");
        }
    }
    header('location: ../pages/AfterLogin-Rayhan.php');
}else{
    header('location: ../pages/Login-Rayhan.php');
}
?>