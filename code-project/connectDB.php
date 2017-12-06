<?php
$con=mysqli_connect("localhost","root","root","online_banking");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// escape variables for security
$acc_company = mysqli_real_escape_string($con, $_POST['acc_company']);
$companyname = mysqli_real_escape_string($con, $_POST['companyname']);
$description = mysqli_real_escape_string($con, $_POST['description']);
$companyphone = mysqli_real_escape_string($con, $_POST['companyphone']);
$companymail = mysqli_real_escape_string($con, $_POST['companymail']);
$companyaddress = mysqli_real_escape_string($con, $_POST['companyaddress']);

$sql = "INSERT INTO company (acc_company, Companyname, Description, Companyphone, Companymail, Companyaddress)
VALUES ('$acc_company', '$companyname', '$description', '$companyphone', '$companymail', '$companyaddress')";

if (!mysqli_query($con,$sql)) {
die('Error: ' . mysqli_error($con));
}
echo "1 record added";
mysqli_close($con);
?>