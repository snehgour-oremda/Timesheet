<?php 
include '../db/connection.php';
 		
 	$mytask=$_POST['task'];
      $myhour=$_POST['hour'];
      $myuserid = 1;
      $projectid = 1;
      $status = 0;
      
      $insertQuery="INSERT INTO project_task (Task,Hours) SELECT * FROM (SELECT '$mytask','$myhour') as tmp 
      WHERE NOT EXISTS(SELECT Task,Hours from task WHERE Task='$mytask' and Hours='$myhour') LIMIT 1";
      
      $query="INSERT INTO `project_task` (`project_id`, `user_id`, `date`, `task`, `hour`, `status`, `task_id`) VALUES ('$projectid', '$myuserid', 'current_timestamp()', '$mytask', '08:36:09', '$status', NULL)";

      $data=mysqli_query($conn,$query);

      if($data)
      {
      	echo "Data saved...";
      }
      else
      {
      	echo "falied";
      }

?>


 
