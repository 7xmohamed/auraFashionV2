<!DOCTYPE html>
<html lang="en">

<?php
session_start();
include("../partials/head.php");
require "../partials/connect.php";
$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = '$id' LIMIT 1";
$statement = mysqli_query($connect, $sql);
$product = mysqli_fetch_assoc($statement);
$id = $product['id'];
$name = $product['name'];
$price = $product['price'];
$description = $product['description'];


?>

<body>
    <!-- ---------THIS IS THE NAVBAR--------- -->
    <?php
    include('../partials/navbar.php')
    ?>
    <!-- ------------------------------------ -->
    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="data:image/jpeg;base64,<?php echo base64_encode($product['picture']) ?>" style="width: 100%;">
        </div>
        <div class="single-pro-details">
            <form action="../handler/addtocart.php" method="GET">
                <input type="hidden" name="userID" value="<?php echo isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : ''; ?>">
                <input type="hidden" name="productID" value="<?php echo $id; ?>">
                <h6>Home / T-Shirt</h6>
                <h4><?php echo $name; ?></h4>
                <h2><?php echo $price; ?> DH</h2>
                <select name="size">
                    <option value="">Select Size</option>
                    <option value="S">Small</option>
                    <option value="L">large</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>
                <input type="number" name="amount" value="1" />
                <button class="normal pay" id="payNowBtn">Add To Cart</button>
                <h4>Product Details</h4>
                <span><?php echo $description; ?>
                </span>
            </form>

        </div>
    </section>
    <section></section>
    <!-------------------------------Footer-------------------------->
    <?php
    include("../partials/footer.php")
    ?>
    <!---------------------------------------------------------------->

    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function() {
            MainImg.src = smallimg[0].src;
        };
        smallimg[1].onclick = function() {
            MainImg.src = smallimg[1].src;
        };
        smallimg[2].onclick = function() {
            MainImg.src = smallimg[2].src;
        };
        smallimg[3].onclick = function() {
            MainImg.src = smallimg[3].src;
        };
    </script>
    <script lang="javascript">
        document.addEventListener("DOMContentLoaded", function() {
            const menuBtn = document.querySelector(".menu-btn");
            const menu = document.querySelector(".menu");

            menuBtn.addEventListener("click", function() {
                menu.classList.toggle("active");
            });
        });
    </script>
    <script lang="javascript">
        document.addEventListener("DOMContentLoaded", function() {
            const payNowBtn = document.getElementById("payNowBtn");
            const paymentModal = document.getElementById("paymentModal");

            // Function to show the payment modal
            function showPaymentModal() {
                paymentModal.style.display = "block";
            }

            // Event listener for the "Pay Now" button
            payNowBtn.addEventListener("click", function() {
                showPaymentModal();
            });
        });
    </script>
</body>

</html>