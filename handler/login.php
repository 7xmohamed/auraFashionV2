<?php
require '../partials/connect.php';
session_start();

if(isset($_POST['login'])){
    $_SESSION['message'] ='';

    if(!empty($_POST['email'] and $_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password' LIMIT 1 ";
        $result = mysqli_query($connect, $sql);

        if(mysqli_num_rows($result)!=1){
            $_SESSION['message']= 'Email/Password is incorrect';
            header('Location:../html/login.php');
        }else{
            $_SESSION['user']=mysqli_fetch_assoc($result);
            header('Location:../html/index.php');
        }
    }else{
        $_SESSION['message']='please fill your Email/Password';
        header('Location:../html/login.php');
    }
}


if(isset($_POST['register'])){;
    if(!empty($_POST['name'] and $_POST['email'] and $_POST['password'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "INSERT INTO users (username,email,password) VALUES ('$name','$email','$password')";
        mysqli_query($connect, $sql);
        header('Location:../html/login.php');
    }else{
        $_SESSION['rmessage']='please fill your Name/Email/Password';
        header('Location:../html/login.php');
    }
}