<?php 
include('../partials/conect.php');
$newid=$_GET['del_id'];

$sql="Delete from orders where id='$newid'";

if (mysqli_query($conect,$sql)) {
	header('location: orders.php');
}else{
	echo "Not Deleted";
}










?>