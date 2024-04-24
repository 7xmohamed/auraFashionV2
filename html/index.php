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

    <!-- ---------HOME PAGE--------- -->
    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On All products</h1>
        <p>Save more with coupons & up to 70% off!</p>
        <button>
            <a style="text-decoration: none; color: #088178" href="shop.php">Shop Now</a>
        </button>
    </section>
    <!-- --------------------------- -->

    <!-- ---------Services------------------- -->
    <?php
    include("../partials/services.php");
    ?>
    <!-- ------------------------------------ -->

    <!-- -------------Banner----------------- -->
    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% Off</span> - All t-Shirts & Accessories</h2>
        <button class="normal">Explore More</button>
    </section>
    <!-- ------------------------------------ -->

    <!-- -------PRODUCTS NEW ARRIVALS----- -->
    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Crazy deals</h4>
            <h2>Buy 1 get free</h2>
            <span>Lorem ipsum dolor sit amet consectetur.</span>
            <button class="white">Learn More</button>
        </div>

        <div class="banner-box banner-box2">
            <h4>Spring/summer</h4>
            <h2>Upcomming season</h2>
            <span>Lorem ipsum dolor sit amet consectetur.</span>
            <button class="white">Collection</button>
        </div>
    </section>
    <!-- --------------------------------- -->

    <!-- ------------NEWSLETTERS---------- -->
    <?php
    include("../partials/newsletter.php");
    ?>
    <!-- --------------------------------- -->

    <!-- ---------------FOOTER------------ -->
    <?php
    include("../partials/footer.php")
    ?>
    <!-- --------------------------------- -->

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