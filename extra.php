<!--           <table  class="myTable" border="#729111 1px solid">
            <tr>
                <th width="80%">Task</th>
                <th width="15%">Hours</th>
                <th width="15%">delete</th>
            </tr>
            
        </table>
            <br>
                  <input  type="text" name="task" id="task" />
                  <input type="number" name="hour" id="hour" />
              <br>
            <label id="add_new" value="add" style="border:1px solid #333;"><i class="fa fa-plus" aria-hidden="true"></i>
</label>
 --><!-- Table inside the Modal -->



<!-- <script>
   function delete() {
                    document.getElementsByTagName("tr")[2].remove();
                }
</script> -->

<!--   <script>
  let btnAdd =document.querySelector('#add_new');
  let table = document.querySelector('table');


btnAdd.addEventListener('click',() =>
{

  let myTask = document.querySelector('#task');
  let myHour = document.querySelector('#hour');
  
  
  let task=myTask.value;
  let hour=myHour.value;

  let template=`
  <tr>
  <td>${task}</td>
  <td>${hour}</td>
  <td><a href="#" onclick="delete()"><i class="fa fa-trash"></a></i> </td>
  </tr>`;

  table.innerHTML += template;
});
  </script> -->


  <!--<?php include 
'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="mystyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<input class='btn btn-primary' data-toggle='modal' data-target='#exampleModal' type='button' name='plus' id='addRow' value='+' /></td> 

<form>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


<!-- Table inside the Modal -->                
          <table id="maintable" width="50%" cellpadding="0" cellspacing="0" class="pdzn_tbl1" border="#729111 1px solid">
            <tr>
                <th align="center">Task</th>
                <th align="center">First Name</th>
                <th align="center">Last Name</th>
            </tr>
            <tr id="rows">
                <div style="padding-left: 5px">
                    <td style="padding:5px;">
                        <input type="text" name="rollno" id="rollNo" />
                    </td>
                    <td style="padding:5px;">
                        <input type="text" name="firstname" id="firstName" />
                    </td>
                    <td style="padding:5px;">
                        <input type="text" name="lastname" id="lastName" />
                    </td>
                </div>
            </tr>
        </table>
            <br>
            <label id="add_new" value="add" style="border:1px solid #333;">+</label>
<!-- Table inside the Modal -->

    </div>
 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</form> 

  <script>
  let btnAdd =document.querySelector('#add_new');
  let table = document.querySelector('table');


btnAdd.addEventListener('click',() =>
{

  let f_name = document.querySelector('#firstName');
  let l_name = document.querySelector('#lastName');
  let roll = document.querySelector('#rollNo');
  
  let FirstName=f_name.value;
  let LastName=l_name.value;
  let Roll=roll.value;

  let template=`
  <tr>
  <td>${Roll}</td>
  <td>${FirstName}</td>
  <td>${LastName}</td>
  </tr>`;

  table.innerHTML += template;
});
  </script>
</body>
</html> -->
