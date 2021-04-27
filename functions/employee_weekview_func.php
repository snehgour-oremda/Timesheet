<?php
include 'db/connection.php';
// For get the current week in date.
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
function get_current_week($data){
	if ($data == 'N') {
		$this_week_monday = strtotime("last monday");
		$this_week_monday = date('w', $this_week_monday)==date('w') ? $this_week_monday+7*86400 : $this_week_monday;
		$data = get_week($this_week_monday);
		return $data;
	}
	else{
		$data = get_week($data);
		return $data;
	}
}
function get_week($date1){
	//date formate "YYYY-MM-DD"
	//return formate array[day1,day2,day3,day4,day5,day6,day7,next_week_monday,last_week_sunday]
	$week = array();
	for ($i=0; $i < 7; $i++) { 
		$this_week_day = strtotime(date("Y-m-d",$date1)." +$i days");
		$this_week_monday = date("Y-m-d",$this_week_day);
		array_push($week, $this_week_monday);
	}
	$next_week_monday = strtotime(date("Y-m-d",$date1)." +7 days");
	$prev_week_sunday = strtotime(date("Y-m-d",$date1)." -7 days");
	array_push($week, $next_week_monday);
	array_push($week, $prev_week_sunday);
	return $week;
}


if(isset($_POST['next'])){
      $week = get_current_week($_POST["next"]);
    }
    elseif (isset($_POST['prev'])) {
      $week = get_current_week($_POST["prev"]);
    }
    else{
      $week = get_current_week('N');
    }

$arr = array();
for ($i=0; $i < 7; $i++) { 
  $timestamp = strtotime($week[0]);
  $new_date = date("y:m:d", $timestamp);
  array_push($arr, $new_date);
}

$projects = $conn->query("SELECT * FROM project_user JOIN project USING (project_id) WHERE user_id = $user_id");
$task = array();
$popup_project = array();
$popup_date = array();
while($row = $projects->fetch_array()){
  $project_id = $row['project_id'];
  $project_name = $row['name'];
  array_push($task, $project_name);
  array_push($popup_project, $project_id);
  $nextday = date("y-m-d", strtotime("$week[0] -1 day"));
  for ($i=0; $i < 7; $i++) {
    $nextday = date("y-m-d", strtotime("$nextday +1 day"));
    array_push($popup_date, $nextday);
    $total_hr = $conn->query("SELECT hour FROM project_task WHERE date = '$nextday' AND project_id = $project_id AND user_id = $user_id");
    $total_hr_c = "00:00:00";
    while($temp = $total_hr->fetch_array()){
      $total_hr_c = sum_the_time($temp['hour'], $total_hr_c);

    }
    $total_hr_c = substr($total_hr_c,0,5);
    array_push($task, $total_hr_c);
  }
}
?>