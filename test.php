<!DOCTYPE html>
<html>

<head>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Bootstrap library -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container mt-2">

		<!-- Button to invoke the modal -->
		<button type="button" 
			class="btn btn-success btn-sm openBtn"
			data-toggle="modal"
			data-target="#myModal"
			id="submit">
			Submit
		</button>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal with Dynamic Content</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
 $('#submit').on('click',function(){
    $('.modal-body').load('timesheet.html',function(){
        $('#myModal').modal({show:true});
    });
});
</script>

</body>

</html>
