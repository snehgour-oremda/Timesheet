<?php
session_start();
include '../db/connection.php';
$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * from user where username ='$name'&& password ='$pass'";

$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] =$name;
   header('location:../index.php');
}else{


	
}


?>
<html>
    <head>
        <title> Home Page</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    </head>
    <body>
        <div class="container">
        <a class="float-right" href="login.php">Login</a>
        <h1> User Not Exist<br>Please Register your Self</h1>
    </body>

</html>