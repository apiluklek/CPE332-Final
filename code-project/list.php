<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>

<body>
	<center><h1>PPAB Online Banking</h1></center>
	<center><h3>Company List</h3></center>
	<form action="connectDB.php" method="post">
		<div class="container">
			<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Company</th>
						<th>Description</th>
						<th>Telephone</th>
						<th>Email</th>
						<th>Address</th>
							<th>Status</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Company</th>
						<th>Description</th>
						<th>Telephone</th>
						<th>Email</th>
						<th>Address</th>
						<th>Status</th>
					</tr>
				</tfoot>
				<tbody>
					<?php
					$hostname="localhost";
					$database="online_banking";
					$username="root";
					$password="root";



					$mysqli = new mysqli($hostname, $username, $password,$database);

					if(mysqli_connect_errno()){

						echo mysqli_connect_error();

					}

      // Create Query

					$query = "SELECT * FROM Company";

					if ($result = $mysqli->query($query)) {

						/* fetch associative array */
						while ($row = $result->fetch_assoc()) {
							?>  	
							<tr>
								<td><?php echo $row["Companyname"];?></td>
								<td><?php echo $row["Description"];?></td>
								<td><?php echo $row["Companyphone"];?></td>
								<td><?php echo $row["Companymail"];?></td>
								<td><?php echo $row["Companyaddress"];?></td>
								<td><a href="approve.php?company_id=<?php echo $row["company_id"];?>"><button type="button" class="btn btn-success">Approve</button></a></td>
							</tr>     
							<?	  }

							/* free result set */
							$result->free();
						}
						?>


					</tbody>
				</table>
			</form>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
	</html>