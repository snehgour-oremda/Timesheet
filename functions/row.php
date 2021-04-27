<?php 
	include '../db/connection.php';
	$array=$_POST;
	foreach($array as $i)
	{
	  $query="DELETE FROM `project_task` WHERE task_id=$i ";
	  $data=mysqli_query($conn,$query);
	}
?>