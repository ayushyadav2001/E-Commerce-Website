<?php
include("../partials/conect.php");
$category=$_POST['name'];
 
$sql="INSERT INTO categories(name) VALUES('$category')";
$conect->query($sql);
header('location: adminindex.php');
?>