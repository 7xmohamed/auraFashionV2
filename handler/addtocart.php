<?php
require '../partials/connect.php';

$amount = $_GET['amount'];
$productID = $_GET['productID'];
$userID = $_GET['userID'];

$sql = "INSERT INTO cart(Amount,productID,userID) VALUES ('$amount','$productID','$userID')";
mysqli_query($connect, $sql); //this is the line 10
header('Location:../html/shop.php');