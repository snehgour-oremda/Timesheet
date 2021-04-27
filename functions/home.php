<?php 
  include 'db/connection.php';
  error_reporting(0);
  $project_id = 1;
  $user_id = 1;
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
  <!-- From start-->
  <form  id="user_from" >
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong>Task</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
  <!-- Table inside the Modal -->               
    <INPUT class="btn btn-primary" type="button" value="Delete Task" onclick="deleteRow('dataTable')" />
    <TABLE id="dataTable" width="350px" border="1">
        <THREAD>
          <TH> </TH>
          <TH></TH>
          <TH>Task</TH>
          <TH>Hours</TH>
        </THREAD> 
      <TR>
  <?php 
  
   // $day=date("Y-m-d");
    $result=mysqli_query($conn,"SELECT * FROM project_task WHERE user_id = $user_id AND project_id = $project_id");
    while($row=mysqli_fetch_assoc($result))
    {
   ?>
        <TD><INPUT type="checkbox" name="chk"/></TD>
        <TD> <LABEL type="text" ><?php echo $row['task_id'];?></LABEL> </TD>  
        <TD> <LABEL type="text" ><?php echo $row['task'];?></LABEL> </TD>
        <TD><LABEL type="number"><?php echo $row['hour'];?></LABEL>  </TD>
      </TR>
  <?php 
  }
   ?>
    </TABLE>
      <br>
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
          <INPUT class="btn btn-primary" type="button" name="save" id="save" value="Add Row" onclick="go()" /> 

      </div>
   </div>
        </div>
    </div>
  </div>
  </form> 
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
          function deleteTRow(tableID) {
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
              }
              catch(e) {
                  alert(e);
              }
          }
      function deleteRow(tableID) {
         try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;


            var counter=0;
            var ids=[];
            var data=new FormData();
             for(var i=0; i<rowCount; i++) {
              var row = table.rows[i];
              var chkbox = row.cells[0].childNodes[0];
              if(null != chkbox && true == chkbox.checked) {
              
              data.append(counter++,row.cells[1].innerText);

              ids.push(row.cells[1].innerText);  
              table.deleteRow(i);   
              var taskId=row.cells[1].innerText;
              rowCount--;
              i--;  
          }

        // var src="row.php";
        // src+="?Id=" +data;
        // src=encodeURI(src);
        // window.location.href=src;

        var xttp =new XMLHttpRequest();
        xttp.open("POST","functions/row.php");
        xttp.onload=function()
        {
            console.log(this.response);
        };
        xttp.send(data);

        } 
        }catch(e) {
          alert(e);
        }
      }
    function go()
        {
          var data=new FormData();
          data.append("task",document.getElementById("newtask").value);
          data.append("hour",document.getElementById("newhour").value);
          var channel =new XMLHttpRequest();
          channel.open("POST","functions/insert.php");
          channel.onload=function()
          {
              addRow();
          };
          channel.send(data);
  }
    </SCRIPT>
  </body>
</html>