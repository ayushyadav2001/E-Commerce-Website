<?php
include("../partials/conect.php");
$email=$_POST['email'];
$msg=$_POST['msg'];
$sql="INSERT INTO contact(email,msg) VALUES('$email','$msg')";
$conect->query($sql);

?>