<?php 
include 'connection.php';
if($_GET['submit'])
  {

      $mytask=$_GET['newtask'];
      $myhour=$_GET['newhour'];
      $query="INSERT INTO `task` (`Id`, `Project_ID`, `User_ID`, `Date`, `Task`, `Hours`, `Status`) VALUES (NULL, NULL, NULL, current_timestamp(), '$mytask', '$myhour', NULL)";

      $data=mysqli_query($connect,$query);

       if($data)
      {
        echo "Task added...";
      }
      else
        
      {
        echo "task failed to add..";
      }
  }
  header("Location:home.php");

?>