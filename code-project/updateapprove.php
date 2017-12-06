<?php
$con=mysqli_connect("localhost","root","root","online_banking");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// escape variables for security
$acc_company = mysqli_real_escape_string($con, $_POST['acc_company']);

$sql="UPDATE company SET acc_company = '".$acc_company."'";
if (!mysqli_query($con,$sql)) {
die('Error: ' . mysqli_error($con));
}
echo "1 record updated";
mysqli_close($con);
?>