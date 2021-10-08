<!DOCTYPE html>
<html>
<head>
	<title>User Profile System</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<br>
	<div class="container">
		<div class="card">
		  <div class="card-header">
		    User Profile System
		  </div>
		  <div class="card-body">
		  	<a href="/createUser" class="btn btn-primary btn-sm">Create User</a><br>
		    <table class="table">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Name</th>
			      <th scope="col">Email Address</th>
			      <th scope="col">Actions</th>
			    </tr>
			  </thead>
			  <tbody id="userTable">
			  	
			  </tbody>
			</table>
		  </div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	$.ajax({
         url: 'getUsers/',
         type: 'get',
         dataType: 'json',
         success: function(response){
           	$('#userTable').empty();
           	for(var i = 0; i < response['data'].length; i++) {
           		$('#userTable').append(
           			'<tr>' +
           			'<td><a href="/editUser/'+ response['data'][i].id +'">' + response['data'][i].id + '</a></td>' +
           			'<td>' + response['data'][i].fullname + '</td>' +
           			'<td>' + response['data'][i].email + '</td>' +
           			'<td><a href="/viewpdf/' + response['data'][i].id + '">PDF</a> <a href="/deleteUser/' + response['data'][i].id + '">Delete</a></td>' +
           			'</tr>'
           		);
           	}
         }
       });
</script>