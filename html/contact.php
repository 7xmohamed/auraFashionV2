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
    <nav class="navbar">
        <div class="logo">
            <a href="index.php"><img src="../img/AuraLogo.png" alt=""></a>
        </div>
        <div class="menu">
            <div class="menu-links">
                <a href="index.php">Home</a>
                <a href="shop.php">Shop</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
                <a href="blog.php">Blog</a>
                <a href="cart.php"><i class="fas fa-store-alt"></i></a>
            </div>
            <form action="login.php">
                <button class="log-in">Log In</button>
            </form>
        </div>
        <div class="menu-btn">
            <i class="fa-solid fa-bars"></i>
        </div>
    </nav>
    <!-- ------------------------ -->


    <!-- ----------------Banner---------------- -->
    <section id="page-header" class="about-header">
        <h2>#let's_talk</h2>
        <p>LEAVE A MESSAGE, We love to hear from you!</p>
    </section>
    <!-- -------------------------------------- -->


    <!-- ----------------Contact---------------- -->
    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li><i class="fal fa-map"></i>
                    <p>56 Fes El Jdid Mellah</p>
                </li>
                <li><i class="far fa-envelope" *></i>
                    <p>contact@example.com </p>
                </li>
                <li><i class="fas fa-phone-alt"></i>
                    <p>contact@ example.com </p>
                </li>
                <li>
                    <i class="far fa-clock" *></i>
                    <p>Monday to Saturday: 9.00am to 16-pm </p>
                </li>
            </div>
        </div>

        <!-- ----Map---- -->
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13222.242719441429!2d-4.981849133770265!3d34.05513874829415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd9ff4b38af21711%3A0xc7411d4465ea1fb9!2z2YHYp9izINis2K_Zitiv2Iwg2YHYp9iz!5e0!3m2!1sar!2sma!4v1710112693827!5m2!1sar!2sma"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- ----------- -->

    </section>
    <!-- --------------------------------------- -->


    <!-- ------Form------- -->
    <section id="form-details">
        <form action="../handler/contact.php" method="POST">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name" name="name" required>
            <input type="text" placeholder="E-mail" name="email" required>
            <input type="text" placeholder="Subject" name="subject" required>
            <textarea name="msg" id="" cols="30" rows="10" placeholder="Write a message here"></textarea>
            <button class="normal" name="btn-send">Submit</button>
        </form>
        <!-- ------------------ -->


        <!-- ----Team---- -->
        <div class="people">
            <div>
                <img src="../img/people/1.png" alt="">
                <p><span>Ahmad Jaber </span> Senior Marketing Manager <br> Phone: + 000 123000 77 88 <br> Email:
                    contact@example.com </p>
            </div>
            <div>
                <img src="../img/people/2.png" alt="">
                <p><span>Omar Mahmoud</span> Senior Marketing Manager <br> Phone: + 000123 000 77 88 <br> Email:
                    contact@example.com</p>
            </div>
            <div>
                <img src="../img/people/3.png">
                <p><span>Emma Stone</span> Seniora Marketing Manager <br> Phone: + 000 123000 77 88 <br> Email:
                    contact@example.com</p>
            </div>
        </div>
        <!-- ------------ -->
    </section>
    <!-- ----------------- -->


    <!-- ---------------FOOTER------------ -->
    <?php
    include("../partials/footer.php");
    ?>
    <!-- --------------------------------- -->
    <?php
    ?>
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