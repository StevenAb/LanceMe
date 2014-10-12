<html>

<?php
$con = mysqli_connect("localhost", "root", "", "Users");

$firstName = mysqli_real_escape_string($con, $_POST['firstName']);
$lastName = mysqli_real_escape_string($con, $_POST['lastName']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$email = mysqli_real_escape_string($con, $_POST['email']);

$sql="INSERT INTO users (firstName, lastName, email, password) VALUES ('$firstName', '$lastName', '$password', '$email')";

if(!mysqli_query($con, $sql)){

	die('Error: ' . mysqli_error($con));
}

mysqli_close($con);

?>
</html>