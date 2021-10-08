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
		  	<h3>Edit the Information from {{ $user[0]->fullname }}</h3><br>
		  	<form method="POST" action="/updateUsers">
		  		@csrf
		  		<div class="row">
		  			<input type="hidden" name="userid" value="{{ $user[0]->id }}">
			  		<div class="col-4">
			  			Full name: <input type="text" name="fullname" class="form-control" placeholder="Full name" required autocomplete="off" value="{{ $user[0]->fullname }}">
			  		</div>
			  		<div class="col-4">
			  			Email address: <input type="email" name="email" class="form-control" placeholder="Email address" required autocomplete="off" value="{{ $user[0]->email }}">
			  		</div>
			  		<div class="col-4">
			  		</div>
			  	</div>
			  	<hr>
			  	<h5>Personal Information</h5>
			  	<div class="row">
			  		<input type="hidden" name="personalinfoid" value="{{ $personalinfo[0]->id }}">
			  		<div class="col-4">
			  			Home address: <input type="text" name="address" class="form-control" placeholder="Home address" required autocomplete="off" value="{{ $personalinfo[0]->address }}">
			  		</div>
			  		<div class="col-4">
			  			Mobile number: <input type="text" name="mobile" class="form-control" placeholder="Mobile number" required autocomplete="off" value="{{ $personalinfo[0]->mobilenumber }}">
			  		</div>
			  		<div class="col-4">
			  			Birth date: <input type="date" name="birthday" class="form-control" placeholder="Birth date" required autocomplete="off" value="{{ $personalinfo[0]->birthday }}">
			  		</div>
			  	</div>
			  	<hr>
			  	<h5>Skills</h5>
			  	<?php $i = 1; ?>
			  	@foreach ($skill as $skills)
		        <div class="row">
		        	<input type="hidden" name="skillid[]" value="{{ $skills->id }}">
			  		<div class="col-4">
			  			Skill <?php echo $i; ?>: <input type="text" name="skill[]" class="form-control" placeholder="Skill <?php echo $i; ?>" required autocomplete="off" value="{{ $skills->skill }}">
			  		</div>
			  		<div class="col-4">
			  			Year of Experience <?php echo $i; ?>: <input type="text" name="experience[]" class="form-control" placeholder="Exp <?php echo $i; ?>" required autocomplete="off" value="{{ $skills->yearsexp }}">
			  		</div>
			  		<div class="col-4">
			  		</div>
			  	</div>
			  	<?php $i++; ?>
		        @endforeach
			  	<hr>
			  	<h5>References</h5>
			  	<?php $j = 1; ?>
			  	@foreach ($reference as $references)
			  	<div class="row">
			  		<input type="hidden" name="referenceid[]" value="{{ $references->id }}">
			  		<div class="col-4">
			  			Reference <?php echo $j; ?>: <input type="text" name="reference[]" class="form-control" placeholder="Reference <?php echo $j; ?>" required autocomplete="off" value="{{ $references->reference }}">
			  		</div>
			  		<div class="col-4">
			  			Position <?php echo $j; ?>: <input type="text" name="position[]" class="form-control" placeholder="Position <?php echo $j; ?>" required autocomplete="off" value="{{ $references->position }}">
			  		</div>
			  		<div class="col-4">
			  			Company <?php echo $j; ?>: <input type="text" name="company[]" class="form-control" placeholder="Company <?php echo $j; ?>" required autocomplete="off" value="{{ $references->company }}">
			  		</div>
			  	</div>
			  	<?php $j++; ?>
		        @endforeach
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
