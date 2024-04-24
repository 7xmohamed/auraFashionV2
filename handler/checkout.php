<?php
require '../partials/connect.php';
$userID = $_GET['userID'];

$sql = "SELECT productID,Amount from cart WHERE userID = $userID";
$stmt = mysqli_query($connect, $sql);

while ($ss = mysqli_fetch_assoc($stmt)) {
    $productID = $ss['productID'];
    $amount = $ss['Amount'];
    $order = "INSERT INTO orders (customers_id,productID,Amount) VALUES($userID,$productID,$amount)";
    mysqli_query($connect, $order);
}

$delete = "DELETE from cart WHERE userID = $userID";
mysqli_query($connect, $delete);

header('Location:../html/shop.php');