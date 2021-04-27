<?php 
      include 'connection.php';
 		
 	     $mytask=$_POST['task'];
       $myhour=$_POST['hour'];
       $user=$_SESSION['username'];
       $project_id=$_POST['projectinsert'];
       $date=$_POST['dateinsert'];

    print_r($_POST);
      //   $insertQuery="INSERT INTO task (Task,Hours) SELECT * FROM (SELECT '$mytask','$myhour') as  t mp 
      //    WHERE NOT EXISTS(SELECT Task,Hours from task WHERE Task='$mytask' and Hours='$myhour') LIMIT 1";

      //  $query="INSERT INTO `project_task` (`project_id`, `user_id`, `date`, `task`, `hour`, `status`, `task_id`) VALUES ('$project_id', '$user', 'current_timestamp()', '$mytask', '$myhour', '0', NULL)";

      // $data=mysqli_query($connect,$query);

      // if($data)
      // {
      // 	echo "Data saved...";
      // }
      // else
      // {
      // 	echo "falied";
      // }

?>


 
