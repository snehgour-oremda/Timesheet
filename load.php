<?php
include 'connection.php';
?>

<form  id="user_from" method="GET" >
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

           <input type="hidden" id="modal-projectID" name="modal-projectID" value="">
           <input type="hidden" id="modal-dateID" name="modal-dateID" value="">     
       
        <!-- Table inside the Modal -->
          <INPUT type="button" class="button" value="Delete Task" onclick="deleteRow('dataTable')" />
          <TABLE id="dataTable" width="350px" border="1">

      <THREAD>
        <TH> </TH>
        <TH></TH>
        <TH>Project</TH>
        <TH>Task</TH>
        <TH>Hours</TH>
      </THREAD> 
    <TR>

<?php 

  $result=mysqli_query($connect,"Select * from task");
  while($row=mysqli_fetch_assoc($result))
  {
 
 ?>
<!--  style="display:none;" -->
      <TD><INPUT type="checkbox" name="chk"/></TD>
      <TD> <LABEL type="text" style="visibility:hidden;"  id="taskId" ><?php echo $row['Id'];?></LABEL> </TD> 
      <TD> <LABEL type="text" ><?php echo $row['Task'];?></LABEL> </TD> 
      <TD> <LABEL type="text" ><?php echo $row['Task'];?></LABEL> </TD>
      <TD> <LABEL type="number"><?php echo $row['Hours'];?></LABEL>  </TD>
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
        <INPUT class="button is-primary is-rounded" type="button" name="save" id="save" value="Add Row" onclick="go()" /> 

    </div>
 </div>
      </div>
  </div>
</div>
</form> 

