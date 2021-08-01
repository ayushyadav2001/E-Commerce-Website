<?php 
include('../partials/conect.php');
$newid=$_GET['del_id'];

$sql="Delete from products where id='$newid'";

if (mysqli_query($conect,$sql)) {
	header('location: productshow.php');
}else{
	echo "Not Deleted";
}










?>