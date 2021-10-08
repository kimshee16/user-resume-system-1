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
		  	<h3>Sign Up New User</h3><br>
		  	<form method="POST" action="/storeUser">
		  		@csrf
		  		<div class="row">
			  		<div class="col-4">
			  			Full name: <input type="text" name="fullname" class="form-control" placeholder="Full name" required autocomplete="off">
			  		</div>
			  		<div class="col-4">
			  			Email address: <input type="email" name="email" class="form-control" placeholder="Email address" required autocomplete="off">
			  		</div>
			  		<div class="col-4">
			  		</div>
			  	</div>
			  	<hr>
			  	<h5>Personal Information</h5>
			  	<div class="row">
			  		<div class="col-4">
			  			Home address: <input type="text" name="address" class="form-control" placeholder="Home address" required autocomplete="off">
			  		</div>
			  		<div class="col-4">
			  			Mobile number: <input type="text" name="mobile" class="form-control" placeholder="Mobile number" required autocomplete="off">
			  		</div>
			  		<div class="col-4">
			  			Birth date: <input type="date" name="birthday" class="form-control" placeholder="Birth date" required autocomplete="off">
			  		</div>
			  	</div>
			  	<hr>
			  	<h5>Skills</h5>
			  	<div class="row">
			  		<div class="col-4">
			  			Skill 1: <input type="text" name="skill[]" class="form-control" placeholder="Skill 2" required autocomplete="off">
			  		</div>
			  		<div class="col-4">
			  			Year of Experience 1: <input type="text" name="experience[]" class="form-control" placeholder="Exp 2" required autocomplete="off">
			  		</div>
			  		<div class="col-4">
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-4">
			  			Skill 2: <input type="text" name="skill[]" class="form-control" placeholder="Skill 2" required autocomplete="off">
			  		</div>
			  		<div class="col-4">
			  			Year of Experience 2: <input type="text" name="experience[]" class="form-control" placeholder="Exp 2" required autocomplete="off">
			  		</div>
			  		<div class="col-4">
			  		</div>
			  	</div>
			  	<hr>
			  	<h5>References</h5>
			  	<div class="row">
			  		<div class="col-4">
			  			Reference 1: <input type="text" name="reference[]" class="form-control" placeholder="Reference 1" required autocomplete="off">
			  		</div>
			  		<div class="col-4">
			  			Position 1: <input type="text" name="position[]" class="form-control" placeholder="Position 1" required autocomplete="off">
			  		</div>
			  		<div class="col-4">
			  			Company 1: <input type="text" name="company[]" class="form-control" placeholder="Company 1" required autocomplete="off">
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-4">
			  			Reference 2: <input type="text" name="reference[]" class="form-control" placeholder="Reference 2" required autocomplete="off">
			  		</div>
			  		<div class="col-4">
			  			Position 2: <input type="text" name="position[]" class="form-control" placeholder="Position 2" required autocomplete="off">
			  		</div>
			  		<div class="col-4">
			  			Company 2: <input type="text" name="company[]" class="form-control" placeholder="Company 2" required autocomplete="off">
			  		</div>
			  	</div>
			  	<br><br>
			  	<div class="row">
			  		<div class="col-4">
			  			<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			  		</div>
			  		<div class="col-4">
			  		</div>
			  		<div class="col-4">
			  		</div>
			  	</div>
		  	</form>
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
           
         }
       });
</script>