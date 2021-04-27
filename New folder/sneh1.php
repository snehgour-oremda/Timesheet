<?php
include 'db/connection.php';
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
               echo "<tr>";
               echo "<th colspan='8' style='text-align:center'>Time Sheet</td>";
               echo "</tr>";
               echo "<tr>";
                  echo "<th>Project Name</td>";
                  echo "<th>Task</td>";
                  echo "<th>Hour</td>";
                echo "</tr>";
                $user_id = 1;
                $project_id = 1;
                $date = "2021-04-15";
               $result = $conn->query("SELECT * FROM project_task WHERE project_id = $project_id AND date='$date' AND user_id = $user_id");
               while($row = $result->fetch_array()){
                  echo "<tr>";
                  echo "<td>Project</td>";
                  echo "<td>".$row['task']."</td>";
                  echo "<td>".$row['hour']."</td>";
                  echo "<td><input class='button' type='submit' name='plus' value='DELETE' /></td>";
                  echo "</tr>";
               }
            echo "<input type='submit' class='button' name='update' value='UPDATE' />";
            
         ?>
      <table>
      <input type='submit' name='Add' value='ADD' />
   </form>