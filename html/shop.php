<!DOCTYPE html>
<html lang="en">

<?php
session_start();
include("../partials/head.php");
?>

<body>
    <!-- ---------THIS IS THE NAVBAR--------- -->
    <?php
    include('../partials/navbar.php')
    ?>
    <!-- ------------------------------------ -->
    <!-- Page Header -->
    <section id="page-header">
        <h2>#NewCollection</h2>
        <p>Save more with coupons & up to 70% off!</p>
    </section>

    <!-- products -->

    <?php
    require "../partials/connect.php";
    $sql = "SELECT * FROM products";
    $statement = mysqli_query($connect, $sql);
    ?>

    <section class="section-p1" id="product1">
        <div class="pro-container">
            <?php while ($product = mysqli_fetch_assoc($statement)) { ?>
            <div class="pro">
                <form action="sproduct.php" method="GET">
                    <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($product['picture']); ?>"
                        style="width:200px" />
                    <div class="des">
                        <span><?php echo $product['name']; ?></span>
                        <h5><?php echo $product['description']; ?></h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4><?php echo $product['price']; ?> DH</h4>
                    </div>
                    <button><i class="fas fa-shopping-cart cart"></i></button>
                </form>
            </div>
            <?php } ?>
        </div>
    </section>


    <!-- pagination -->
    <section id="pagination" class="section-p1" style="margin: 0 auto;">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
    </section>

    <script lang="javascript">
    document.addEventListener("DOMContentLoaded", function() {
        const menuBtn = document.querySelector(".menu-btn");
        const menu = document.querySelector(".menu");

        menuBtn.addEventListener("click", function() {
            menu.classList.toggle("active");
        });
    });
    </script>
</body>

</html>