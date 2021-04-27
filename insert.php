<?php 
session_start();
        if(!isset($_SESSION['username'])){
            header('location:login.php');
        }
    include 'db/connection.php';
    $username = $_SESSION['username'];
    $userid = $conn->query("SELECT user_id FROM user WHERE username = '$username'");
    $user = ($userid->fetch_array())['user_id'];
      include 'connection.php';
 		
 	$mytask=$_POST['task'];
      $myhour=$_POST['hour'];
      $project_id=$_POST['project'];
      $date=$_POST['date'];

    print_r($_POST);
      //   $insertQuery="INSERT INTO task (Task,Hours) SELECT * FROM (SELECT '$mytask','$myhour') as  t mp 
      //    WHERE NOT EXISTS(SELECT Task,Hours from task WHERE Task='$mytask' and Hours='$myhour') LIMIT 1";

      $query="INSERT INTO `project_task` (`project_id`, `user_id`, `date`, `task`, `hour`, `status`, `task_id`) VALUES ('$project_id', '$user', '$date', '$mytask', '$myhour', '0', NULL)";

      $data=mysqli_query($connect,$query);
      print_r($data);
      // if($data)
      // {
      // 	echo "Data saved...";
      // }
      // else
      // {
      // 	echo "falied";
      // }

?>


 
