<?php
include("../partials/connect.php");
$username = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];

$sql = "INSERT INTO contact_db(username,email,subject,message) VALUES('$username','$email','$subject','$msg')";

$connect->query($sql);
header('Location:../html/contact.php');
