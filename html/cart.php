<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(0);
?>
<?php
session_start();
include("../partials/head.php");
require "../partials/connect.php";

if (isset($_GET["remove"])) {
    $cartID = $_GET["cartID"];
    $requet = "DELETE FROM cart WHERE id = $cartID";
    mysqli_query($connect, $requet);
}
?>

<body>
    <!-- ---------NAVBAR--------- -->
    <?php
    include('../partials/navbar.php')
    ?>
    <!-- ------------------------ -->


    <!-- -----------Card----------- -->
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>

                <?php

                if (isset($_SESSION['user'])) {

                    $id = $_SESSION['user']['id'];
                    $sql = "SELECT cart.id,picture,name,price,Amount FROM cart JOIN products ON cart.productID = products.id WHERE userID = '$id' ";
                    $statement = mysqli_query($connect, $sql);
                    while ($tile = mysqli_fetch_assoc($statement)) {
                        static $total;
                        $total += $tile['price'] * $tile['Amount'];
                        echo '<tr>
                            <form method="GET">
                            <input type="hidden" name="cartID" value="' . $tile['id'] . '">
                                <td><button name="remove"><i class="far fa-times-circle"></i></button></td>
                                <td><img src="data:image/jpeg;base64,' . base64_encode($tile['picture']) . '" style="width: 80%;"></td>
                                <td>' . $tile['name'] . '</td>
                                <td>$' . $tile['price'] . '</td>
                                <td>' . $tile['Amount'] . '</td>
                                <td>$' . $tile['price'] * $tile['Amount'] . '</td>
                            </form>
                        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </section>
    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon"> <button class="normal">Apply</button>
            </div>
        </div>
        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>$ <?php if (!empty($total)) {
                                echo $total;
                            } else {
                                echo 0;
                            } ?></td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>$ <?php if (!empty($total)) {
                                        echo $total;
                                    } else {
                                        echo 0;
                                    } ?>/strong</strong></td>
                </tr>
            </table>
            <form action="../handler/checkout.php" method="GET">
                <input type="hidden" name="userID" value="<?php echo $_SESSION['user']['id'] ?>">
                <button class="normal">Proceed to checkout</button>
            </form>

        </div>
    </section>
    <!-- -------------------------- -->


    <!-- ---------------FOOTER------------ -->
    <footer>
        <a href="#"><img src="../img/AuraLogofooter.png" alt="logo" /></a>
        <div class="social">
            <!--Facebook-->
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <!--Instagram-->
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <!--Twitter-->
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
        <p>© 2023 Aura, Inc. All Rights Reserved</p>
    </footer>
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