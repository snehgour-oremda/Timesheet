<html>
<body>
<?php
include 'db/connection.php';
?>
<head>
<title>Employee Timesheet</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>
</head>
?>
<form action='' method="post">
<table border='1' class="center">
<?php
echo "<tr>";
echo "<th colspan='8' style='text-align:center'>Time Sheet</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Project Name</td>";
echo "<th>Task</td>";
echo "<th>Hour</td>";
?>
<th><input class='btn btn-primary' data-toggle='modal' data-target='#exampleModalLong' type='button' name='plus' id='addRow' value='+' /></td>

<div class='modal fade' id='exampleModalLong' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
<div class='modal-dialog' role='document'>
<div class='modal-content'>
<div class='modal-header'>
<h4 class='modal-title text-center' id='exampleModalLongTitle'>Task</h4>
<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button>
</div>
<div class='modal-body'>
<INPUT type="button" value="Add Row" onclick="addRow('dataTable')" />

 <INPUT type="button" value="Delete Row" onclick="deleteRow('dataTable')" />

 <TABLE id="dataTable" width="350px" border="1">
<TR>
<TD><INPUT type="checkbox" name="chk"/></TD>
<TD> 1 </TD>
<TD> <INPUT type="text" /> </TD>
</TR>
</TABLE>


 <SCRIPT language="javascript">
function addRow(tableID) {

 var table = document.getElementById(tableID);

 var rowCount = table.rows.length;
var row = table.insertRow(rowCount);

 var cell1 = row.insertCell(0);
var element1 = document.createElement("input");
element1.type = "checkbox";
element1.name="chkbox[]";
cell1.appendChild(element1);

 var cell2 = row.insertCell(1);
cell2.innerHTML = rowCount + 1;

 var cell3 = row.insertCell(2);
var element2 = document.createElement("input");
element2.type = "text";
element2.name = "txtbox[]";
cell3.appendChild(element2);

}

 function deleteRow(tableID) {
try {
var table = document.getElementById(tableID);
var rowCount = table.rows.length;

 for(var i=0; i<rowCount; i++) {
var row = table.rows[i];
var chkbox = row.cells[0].childNodes[0];
if(null != chkbox && true == chkbox.checked) {
table.deleteRow(i);
rowCount--;
i--;
}

}
}catch(e) {
alert(e);
}
}

 </SCRIPT>
</div>
<div class='modal-footer'>
<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
<button type='button' class='btn btn-primary'>Save changes</button>
</div>
</div>
</div>
</div>
echo "</tr>";
<?php $user_id=1;
$project_id=1;
$date="2021-04-15";
$result = $conn->query("SELECT * FROM project_task WHERE project_id = $project_id AND date='$date' AND user_id = $user_id");
while($row = $result->fetch_array()){
echo "<tr>";
echo "<th>Project</td>";
echo "<th>".$row['task']."</td>";
echo "<th>".$row['hour']."</td>";
echo "</tr>";
}
echo "<input type='submit' class='button' name='update' value='UPDATE'/>";
?>
<table>
</form>
<SCRIPT language="javascript">
function addRow(tableID) {

 var table = document.getElementById(tableID);

 var rowCount = table.rows.length;
var row = table.insertRow(rowCount);

 var cell1 = row.insertCell(0);
var element1 = document.createElement("input");
element1.type = "checkbox";
element1.name="chkbox[]";
cell1.appendChild(element1);

 var cell2 = row.insertCell(1);
cell2.innerHTML = rowCount + 1;

 var cell3 = row.insertCell(2);
var element2 = document.createElement("input");
element2.type = "text";
element2.name = "txtbox[]";
cell3.appendChild(element2);

}

 function deleteRow(tableID) {
try {
var table = document.getElementById(tableID);
var rowCount = table.rows.length;

 for(var i=0; i<rowCount; i++) {
var row = table.rows[i];
var chkbox = row.cells[0].childNodes[0];
if(null != chkbox && true == chkbox.checked) {
table.deleteRow(i);
rowCount--;
i--;
}

}
}catch(e) {
alert(e);
}
}

 </SCRIPT>
</body>
</html>
