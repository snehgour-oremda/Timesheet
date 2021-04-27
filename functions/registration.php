<?php
session_start();
include '../db/connection.php';
$name = $_POST['user'];
$pass = $_POST['password1'];
$cpass =$_POST['password2'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$role = $_POST['role'];
$s = "select * from user where username ='$name'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo'<script>alert("Username Already Taken")</script>';
}
else{
    $reg= "insert into user(username,password,name,email,role) values ('$name','$pass','$fullname','$email','$role')";
    mysqli_query($conn,$reg);
   $_SESSION['username'] =$name;
   header('location:../index.php');   
}
?>