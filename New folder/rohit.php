<?php 
include 'connection.php';


$users = $conn->query("SELECT user_id, name FROM user");
$user = array();
while ($row = $users->fetch_array()) {
	array_push($user, $row);
}

$user_id = $user[0]['user_id'];
$user_name = $user[0]['name'];
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Time Sheet</title>
</head>
<body>
	<div>
		<table border='1' class="main_table" width="70%" align="center">
			<tr>
				<th>Project Name</th>
				<th>User Name</th>
				<th>Date</th>
				<th>Task</th>
				<th>Hour</th>
				<th>Status</th>
			</tr>
			<?php 
			$projects = $conn->query("SELECT * FROM project_user JOIN project USING (project_id) WHERE user_id = $user_id");
			while($row = $projects->fetch_array()){
				
			  	$project_id = $row['project_id'];
			  	$project_name = $row['name'];
			  	$task = $conn->query("SELECT * FROM project_task WHERE user_id = $user_id AND project_id=$project_id");
			  	while ($temp = $task->fetch_array()) {
			  		echo "<tr>";
			  		echo "<td>$project_name</td>";
			  		echo "<td>$user_name</td>";
			  		$date = $temp['date'];
			  		echo "<td>$date</td>";
			  		$task_p = $temp['task'];
			  		echo "<td>$task_p</td>";
			  		$hours = $temp['hour'];
			  		echo "<td>$hours</td>";
			  		echo "</tr>";
			  	}
			  	
		  	}
			 ?>
		</table>
	</div>

</body>
</html>