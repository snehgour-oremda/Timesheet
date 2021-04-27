<?php
include 'assets/header.php';
include 'db/connection.php';
function sum_the_time($time1, $time2) {
   $times = array($time1, $time2);
   $seconds = 0;
   foreach ($times as $time)
   {
     list($hour,$minute,$second) = explode(':', $time);
     $seconds += $hour*3600;
     $seconds += $minute*60;
     $seconds += $second;
   }
   $hours = floor($seconds/3600);
   $seconds -= $hours*3600;
   
   $minutes  = floor($seconds/60);


   $seconds -= $minutes*60;
   if($seconds < 9)
   {
   $seconds = "0".$seconds;
   }
   if($minutes < 9)
   {
   $minutes = "0".$minutes;
   }
     if($hours < 9)
   {
   $hours = "0".$hours;
   }
   return "{$hours}:{$minutes}:{$seconds}";
 }

$query = "SELECT * FROM user";

$result = $conn->query($query);
$total = mysqli_num_rows($result);
echo $total;
?>
<?php
echo "<head>
<title>Employee Timesheet</title>
<link href='css/style.css' rel='stylesheet'>
</head>";
?>

   <form action='index.php' method="post">
      <table border='1' class="center">
         <?php
            
            $today = "2021-04-13";
            $nameOfDay = date('D', strtotime($today));
               echo "<tr>";
               echo "<th colspan='8' style='text-align:center'>Time Sheet</td>";
               echo "</tr>";
               echo "<tr>";
                  echo "<th>Project Name</td>";
                  echo "<th>Monday</td>";
                  echo "<th>Tuesday</td>";
                  echo "<th>Wednesday</td>";
                  echo "<th>Thursday</td>";
                  echo "<th>Friday</td>";
                  echo "<th>Saturday</td>";
                  echo "<th>Sunday</td>";
                echo "</tr>";
                echo "<tr>";
                  echo "<td></td>";
                  $nextday = $today;
                  for($i=0;$i<7;$i++){
                    $nextday = date("y-m-d", strtotime("$nextday +1 day"));
                    echo "<td>$nextday</td>";
                  }
                  
                  
                echo "</tr>";
               //All table rows in database presented in html table
//SELECT hour FROM `project_task` WHERE project_id = 1 AND date='2021-04-15'

               $result = $conn->query("SELECT * FROM project");
               while($row = $result->fetch_array()){
                  echo "<tr>";
                  echo "<th>".$row['name']."</td>";
                  $id = $row['project_id'];
                  $nextday = $today;
                  for($i=0;$i<7;$i++){
                    $nextday = date("y-m-d", strtotime("$nextday +1 day"));
                    $total_hr = $conn->query("SELECT hour FROM project_task WHERE project_id = $id AND date='$nextday' AND user_id = 1");
                    echo $nextday;
                    $total_hr_c = "00:00:00";
                    while($temp = $total_hr->fetch_array()){
                        $total_hr_c = sum_the_time($total_hr_c,$temp['hour']);
                        
                    }
                    echo "<td>$total_hr_c&nbsp;&nbsp;<input class='button' type='submit' name='plus' value='+' /></td>";
                  }
                  echo "</tr>";
               }
            echo "<input type='submit' class='button' name='update' value='UPDATE' />";
            
         ?>
      <table>
      <input type='submit' name='Add' value='ADD' />
   </form>