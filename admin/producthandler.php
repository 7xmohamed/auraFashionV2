<?php
include("../partials/connect.php");

$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$category = $_POST['category'];
$picture = file_get_contents($_FILES['pic']['tmp_name']);

$sql = "INSERT INTO products(name, price, picture, description, categoryID) 
        VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($connect, $sql);
mysqli_stmt_bind_param($stmt, "sdssi", $name, $price, $picture, $description, $category);
mysqli_stmt_execute($stmt);

header('location: productsshow.php');
