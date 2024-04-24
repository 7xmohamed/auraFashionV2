<!DOCTYPE html>
<html lang="en">

<?php
error_reporting(0);
?>

<?php
session_start();
include("../partials/head.php");
?>

<body>
    <!-- ---------NAVBAR--------- -->
    <?php
    include("../partials/navbar.php");
    ?>
    <!-- ------------------------ -->


    <!-- ---------Header--------- -->
    <section id="page-header" class="about-header">
        <h2>#KnowUs</h2>
        <p>Lorem ipsum dolor sit amet, consectetur </p>
    </section>
    <section id="about-head" class="section-p1">
        <img src="../img/about/a6.jpg" alt="">
        <div>
            <h2>Who We Are</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua . Ut enim ad minim veniam, quis
                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis auteirure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur . Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum. </p>
            <abbr title="">Create stunning images with as much or as little control as you
                like thanks to a choice of bassic and Creative modes . </abbr>
            <br><br>
            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%"> Create stunning images with as much or as
                little control as you
                like thanks to a choice of bassic and Creative modes.
            </marquee>
        </div>
    </section>
    <section id="about-app" class="section-p1">
        <h1>Dwonload Our <a href="#">App</a></h1>
        <div class="video">
            <video autoplay muted loop src="../img/about/1.mp4"></video>
        </div>
    </section>
    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="../img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="../img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="../img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="../img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="../img/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="../img/features/f6.png" alt="">
            <h6>F24/7 Support</h6>
        </div>
    </section>
    <!-- ------------------------ -->


    <!-- -----------------Newsletters----------------- -->
    <?php
    include("../partials/newsletter.php");
    ?>
    <!-- --------------------------------------------- -->


    <!-- --------------------------------------Footer------------------------------------- -->
    <?php
    include("../partials/footer.php")
    ?>
    <!-- --------------------------------------------------------------------------------- -->

    <!-- ------JS For Hamburger Menu------ -->
    <script lang="javascript">
    document.addEventListener("DOMContentLoaded", function() {
        const menuBtn = document.querySelector(".menu-btn");
        const menu = document.querySelector(".menu");
        menuBtn.addEventListener("click", function() {
            menu.classList.toggle("active");
        });
    });
    </script>
    <!-- --------------------------------- -->
</body>

</html>