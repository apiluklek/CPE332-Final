<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<body>
	<center><h1>Welcome to Online Banking!</h1></center>
	<center><h3>Company registration Form</h3></center>
	<form action="connectDB.php" method="post">
		<div class="container">
			<div class="row">
				<div class="col-xs-8 col-md-6">
					<div class="form-group">
						<label>Company Name</label>
						<input type="text" class="form-control" name="companyname" id="companyname" required="">
					</div>
				</div>
				<div class="col-xs-8 col-md-6">
					<div class="form-group">
						<label >Description</label>
						<textarea class="form-control" name="description" id="description" rows="2"></textarea>
					</div>
				</div>
				<div class="col-xs-8 col-md-6">
					<div class="form-group">
						<label>Telephone Number</label>
						<input type="text" class="form-control" name="companyphone" id="companyphone" required="">
					</div>
				</div>
				<div class="col-xs-8 col-md-6">
					<div class="form-group">
						<label>Email address</label>
						<input type="email" class="form-control" name="companymail" id="companymail" placeholder="name@example.com" required="">
					</div>	
				</div>
				<div class="col-xs-8 col-md-6">
					<div class="form-group">
						<label >Address</label>
						<textarea class="form-control" name="companyaddress" id="companyaddress" rows="3" required=""></textarea>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-12">
				<center>
				<div class="form-group">
					<button type="Reset" class="btn btn-danger">Reset</button>
					<button type="Submit" class="btn btn-success">Submit</button>
				</div>
				</center>
			</form>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
	</html>