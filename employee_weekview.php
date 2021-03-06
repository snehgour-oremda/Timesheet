<?php

    session_start();
        if(!isset($_SESSION['username'])){
            header('location:login.php');
        }
    include 'db/connection.php';
    $username = $_SESSION['username'];
    $userid = $conn->query("SELECT user_id FROM user WHERE username = '$username'");
    $user_id = ($userid->fetch_array())['user_id'];
    include 'assets/header.php';
    include 'functions/employee_weekview_func.php';
    include 'home.php';

?>

<head>
  <title>Employee Timesheet</title>
  <link href='css/style.css' rel='stylesheet' type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript">
  

</script>
</head>
<body>
  <div>
    <form  name="form" method="post">
      <div>
        <table align="center" class="view_head">
          <tr>
            <td colspan="3" align="center">
              Week View
            </td>
          </tr>
        </table>
        <table align="center" class="date_switch">
          <tr align="center">
            <td width="20%">
              <button class='button1' type='submit' name='prev' value= <?php echo $week[8];?> ><i class="fa fa-back"></i>&laquo; Previous</button>
            </td>
            <td width="60%">
              <?php
                echo "$week[0] <---> $week[6]";
              ?>
            </td>
            <td width="20%">
              <button class='button1' type='submit' name='next' value= <?php echo $week[7];?> ><i class="fa fa-back"></i>Next &raquo;</button>
            </td>
          </tr>
        </table>
      </div>
      <div>
        <table border='1' class="main_table" width="70%" align="center">
          <thead align="center" class="table_header">
            <th rowspan="2">Project Name</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Sunday</th>
          </thead>
          <tr align="center" id="col_date">
            <th></th>
            <td><?php echo "$week[0]"?></td>
            <td><?php echo "$week[1]"?></td>
            <td><?php echo "$week[2]"?></td>
            <td><?php echo "$week[3]"?></td>
            <td><?php echo "$week[4]"?></td>
            <td><?php echo "$week[5]"?></td>
            <td><?php echo "$week[6]"?></td>
          </tr>
          
            <?php
            for ($i=1; $i <= count($task)/8; $i++) { 
              echo "<tr align='center'>";
              $temp_var = $task[$i*8-8];
              echo "<th>$temp_var</th>";

              $temp_popup_project = $popup_project[$i-1];

              $temp_var = $task[$i*8-7];
              $temp_popup_date = $week[0];
              
              echo "<td>$temp_var<input class='passData btn btn-primary openBtn' data-dateid='$temp_popup_date' id='load' type='button' name='project'  value='+' data-projectid=$temp_popup_project></td>";
              $temp_var = $task[$i*8-6];
              $temp_popup_date = $week[1];
              echo "<td>$temp_var<input class='passData btn btn-primary openBtn' data-toggle='modal' data-dateid='$temp_popup_date' id='load' data-target='#exampleModal' type='button' name='plus'  value='+' data-projectid=$temp_popup_project /></td>";
              $temp_var = $task[$i*8-5];
              $temp_popup_date = $week[2];
              echo "<td>$temp_var<input class='passData btn btn-primary openBtn' data-toggle='modal' data-dateid='$temp_popup_date' data-target='#exampleModal' type='button' name='plus'  value='+' data-projectid=$temp_popup_project /></td>";
              $temp_var = $task[$i*8-4];
              $temp_popup_date = $week[3];
              echo "<td>$temp_var<input class='passData btn btn-primary openBtn' data-toggle='modal' data-dateid='$temp_popup_date' data-target='#exampleModal' type='button' name='plus'  value='+' data-projectid=$temp_popup_project /></td>";
              $temp_var = $task[$i*8-3];
              $temp_popup_date = $week[4];
              echo "<td>$temp_var<input class='passData btn btn-primary openBtn' data-toggle='modal' data-dateid='$temp_popup_date' data-target='#exampleModal' type='button' name='plus'  value='+' data-projectid=$temp_popup_project /></td>";
              $temp_var = $task[$i*8-2];
              $temp_popup_date = $week[5];
              echo "<td>$temp_var<input class='passData btn btn-primary openBtn' data-toggle='modal' data-dateid='$temp_popup_date' data-target='#exampleModal' type='button' name='plus'  value='+' data-projectid=$temp_popup_project /></td>";
              $temp_var = $task[$i*8-1];
              $temp_popup_date = $week[6];
              echo "<td>$temp_var<input class='passData btn btn-primary openBtn' data-toggle='modal' data-dateid='$temp_popup_date' data-target='#exampleModal' type='button' name='plus'  value='+' data-projectid=$temp_popup_project /></td>";
              echo "</tr>";
            }
            ?>
          <table>
        </div>
    </form>

<form  id="user_from">
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


        <INPUT class="button is-primary is-rounded" type="button" name="save" id="save" value="Add Row" onclick="go()" /> 
 -->
    </div>
 </div>
      </div>
  </div>
</div>
</form> 


    <script>

/*
      $('.openBtn').click(function(){

      var left=(screen.width);
      var top=(screen.height);
      var Height=600;
      var Width=800;
      var myWindow= window.open(src,'task','resizable=yes, width='+ Width + ' , height='+Height + ',top =' + top + ',left ='+left);

      });
*/
// function createPopupWin(pageURL, pageTitle,
//                     popupWinWidth, popupWinHeight) {
//             var left = (screen.width ) ;
//             var top = (screen.height ) ;
//             var myWindow = window.open(pageURL, pageTitle, 
//                     'resizable=yes, width=' + popupWinWidth
//                     + ', height=' + popupWinHeight + ', top='
//                     + top + ', left=' + left);
// }
// $('#load').on('click',function(){
//     var left=(screen.width);
//     var top=(screen.height);
//     var Height=600;
//     var Width=800;
//     var myWindow= window.open('timesheet.php','task','resizable=yes, width='+ Width + ' , height='+Height + ',top =' + top + ',left ='+left);
// });
// $('#load').click(function()){
//             var myWindow = window.open('timesheet.php', 'task', 
//                     'resizable=yes, width=' + 700
//                     + ', height=' + 550 + ', top='
//                     + top + ', left=' + left);
// });


//  $(document).on("click", ".passData", function (e) {
//     e.preventDefault();
      
//       var modal_projectID = $(this).data('projectid');
//       var modal_date = $(this).data('dateid');

//       var data=new FormData();
//       data.append('project',modal_projectID);
//       data.append('date',modal_date);


//       var xttp =new XMLHttpRequest();
//       xttp.open("POST","timesheet.php");
//       xttp.onload=function()
//       {
//         console.log(this.response);
//       };



//       xttp.send(data);

//     var left=(screen.width);
//     var top=(screen.height); 
//     var Height=600;
//     var Width=800;
//     var myWindow= window.open('timesheet.php','task','resizable=yes, width='+ Width + ' , height='+Height + ',top =' + top + ',left ='+left);



// });  
      // var src="load.php?date="+modal_date+"&project="+modal_projectID;
      // console.log(src);
      // window.location.href=src;

       // $(".modal-body #modal-dateID").val(modal_date);  
       // $(".modal-body #modal-projectID").val(modal_projectID);
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
//});

      $('.openBtn').on('click',function(e){
      e.preventDefault();  
          var modal_projectID = $(this).data('projectid');
          var modal_date = $(this).data('dateid');
          var src="timesheet.php?project="+modal_projectID;
          src+="&date="+modal_date;
            $('.modal-body').load(src,function(){
                $('#exampleModal').modal({show:true});
            });
});


    </script>
  </div>
</body>
