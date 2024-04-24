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


    <!-- -------------Page Header------------- -->
    <section id="page-header" class="blog-header">
        <h2>#readmore</h2>
        <p>Read all case studies about our prouducts! </p>
    </section>
    <!-- ------------------------------------- -->


    <!-- -----------Main Blog----------- -->
    <section id="blog">
        <div class="blog-box">
            <div class="blog-img">
                <img src="../img/blog/b1.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4> The cotton-Jersey Zip-Up Hodie</h4>
                <p>Kickstarter man braid godard coloring book. Raclette waistcoat selfies yr
                    wolf chartreuse hexagon irony, godard...</p>
                <a href="blogdetails.php">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="../img/blog/b2.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4> How to Style a Quiff</h4>
                <p>Kickstarter man braid godard coloring book. Raclette waistcoat selfies yr
                    wolf chartreuse hexagon irony, godard...</p>
                <a href="blogdetails.php">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="../img/blog/b3.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4> Must-Have Skater Girl Items</h4>
                <p>Kickstarter man braid godard coloring book. Raclette waistcoat selfies yr
                    wolf chartreuse hexagon irony, godard...</p>
                <a href="blogdetails.php">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="../img/blog/b4.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4> Runway-Inspired Trends</h4>
                <p>Kickstarter man braid godard coloring book. Raclette waistcoat selfies yr
                    wolf chartreuse hexagon irony, godard...</p>
                <a href="blogdetails.php">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
    </section>
    <!-- ------------------------------- -->


    <!-- pagination -->
    <section id="pagination" class="section-p1" style="margin: 0 auto;">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
    </section>
    <!-- ---------- -->


    <!-- ---------------FOOTER------------ -->
    <?php
    include("../partials/footer.php")
    ?>
    <!-- --------------------------------- -->


    <!-- ------JS For Hamburger Menu------ -->
    <script>
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