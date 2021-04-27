<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
    table,th,td
    {
      padding:5px;
      border:2px solid #333;
    }
  </style>
</head>
<body>
  <form  id="user_from">
     <div>
          <INPUT type="button" class="button" value="Delete Task" onclick="deleteRow('dataTable')" />
          <TABLE id="dataTable" width="350px" border="1">
      <THREAD>
        <TH></TH>
        <TH>TaskID</TH>
        <TH>Task</TH>
        <TH>Hours</TH>
      </THREAD>  
      <tr> 
<?php 
include 'connection.php';  
error_reporting(0);

session_start();
        if(!isset($_SESSION['username'])){
            header('location:login.php');
        }
    include 'db/connection.php';
      $username = $_SESSION['username'];
      $userid = $conn->query("SELECT user_id FROM user WHERE username = '$username'");
      $user_id = ($userid->fetch_array())['user_id'];
      $projectId=$_GET['project'];
      $date=$_GET['date'];
    
       $query="SELECT * FROM project_task WHERE user_id=$user_id AND project_id=$projectId AND date='$date'";
  
        $result=mysqli_query($connect,$query);
        while($row=mysqli_fetch_assoc($result))
        {
?>
          <TD><INPUT type="checkbox" name="chk"/></TD>
          <TD> <LABEL type="text" id="taskId"><?php echo $row['task_id'];?></ LABEL> </TD> 
          <TD> <LABEL type="text" ><?php echo $row['task'];?></LABEL></TD> 
          <TD> <LABEL type="number"><?php echo $row['hour'];?></LABEL></TD>
    </TR>
<?php 
}
?>
     </TABLE>
     <br>
         </div>
         </TABLE>
    <br>


<!--Hidden Fields for Project and Date-->
  <input type="hidden" name="projectinsert" id="projectinsert" value="<?php echo $projectId ?>">
  <input type="hidden" name="dateinsert" id="dateinsert" value="<?php echo $date ?>">


    <TABLE id='taskTable' width="350px" border="1">
           <THEAD>
                <TH></TH>
                <TH>TASK</TH>
               <TH>HOURS</TH>
           </THEAD> 
         <TR>
            <TD><INPUT type="checkbox"   name="chkT"/></TD>
            <TD> <INPUT type="text" onfocus="this.value=''" id="newtask" name="newtask"/></TD>
            <TD> <INPUT type="NUMBER" onfocus="this.value=''" id="newhour" name="newhour" /></TD>
        </TR>
    </TABLE>

        <INPUT class="button is-primary" type="button" name="save" id="save" value="Add Row" onclick="go()" />     
        
     </form>   
</body>

  
<script>

  function maaza()
  {
    alert('rerer');
    return false;
  }
  $('#mybtn').on('click',function(){
      alert("hhh");
  });
    <SCRIPT language="javascript">
    function addRow() {
            var table = document.getElementById('dataTable');
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);

            var cell1 = row.insertCell(0);
            var element1 = document.createElement("input");
            element1.type = "checkbox";
            element1.name="chkbox[]";
            cell1.appendChild(element1);


            var cell2 = row.insertCell(1);
            var element2 = document.createElement("label");
            element2.name="Taskid";
            cell2.appendChild(element2);

            var cell3 = row.insertCell(2);
            var element3 = document.createElement("label");
            element3.innerHTML=document.getElementById('newtask').value;
            element3.name="task";
            cell3.appendChild(element3);

            var cell4 = row.insertCell(3);
            var element4 = document.createElement("label");
            element4.innerHTML=document.getElementById('newhour').value;
            element4.name = "hour";
            cell4.appendChild(element4);
    }
    
    function deleteRow(tableID) {
       try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;

            var counter=0;
            var data=new FormData();
            for(var i=0; i<rowCount; i++) {
            var row = table.rows[i];
            var chkbox = row.cells[0].childNodes[0];
            if(null != chkbox && true == chkbox.checked) {
            
            data.append(counter++,row.cells[1].innerText);
            //console.log(row.cells[1].innerText);
            table.deleteRow(i);   
            var taskId=row.cells[1].innerText;
            rowCount--;
            i--;  
        }
      }
      var xttp =new XMLHttpRequest();
      xttp.open("POST","row.php");
      xttp.onload=function()
      {
          console.log(this.response);
      };
      xttp.send(data);
      }catch(e) {
        alert(e);
      }
    }

  function go()
      {
        var data=new FormData();
        data.append("task",document.getElementById("newtask").value);
        data.append("hour",document.getElementById("newhour").value);
        date.append("project",document.getElementById("projectinsert").value);
        date.append("date",document.getElementById("dateinsert").value);

        var channel =new XMLHttpRequest();
        channel.open("POST","insert.php");
        channel.onload=function()
        {
            addRow();
            console.log(this.response);
        };
        channel.send(data);
      }
  </SCRIPT>

</script>
</html>