<?php
include('../partials/conect.php');
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];
if ($password==$password2) {
	$sql="INSERT INTO customers(username, password) VALUES('$email','$password')";
	$conect->query($sql);
	echo "<script> alert('You are registered');
			window.location.href='../customerforms.php';
			</script>";
}else{
	echo "<script> alert('Password did not match');
			window.location.href='../customerforms.php';
			</script>";
}







?>