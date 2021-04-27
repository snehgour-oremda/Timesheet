<?php 
include ('connection.php');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Registration</title>
  </head>
 <body>
 	<form  method="get">
 		Name     <input type="text" name="name">  <br><br>
 		Username <input type="text" name="username">  <br><br>
 		Email    <input type="email" name="email">  <br><br>
 		Phone    <input type="number" name="phone">  <br><br>
 		Password <input type="password" name="password">  <br><br>
 					<input type="submit" name="Register" value="Regsiter">
 	</form>

<?php 
	if(isset($_GET['name']))
	{
	$Name=$_GET['name'];
	$UserName=$_GET['username'];
	$Email=$_GET['email'];
	$Phone=$_GET['phone'];
	$Password=$_GET['password'];

	$query="INSERT INTO user (user_id, Name, Username, Email, Phone, Password) VALUES (NULL, '$Name', '$UserName', '$Email', '$Phone', '$Password')";
	$data=mysqli_query($connect,$query);

	if($data)
	{
		echo "Data saved ....";
	}
	else
	{
		echo "Data Not Saved...";
	}
}

 ?>
 </body>
 </html>