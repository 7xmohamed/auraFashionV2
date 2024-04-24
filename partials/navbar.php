<?php
if (isset($_GET['logout'])) {
    session_start();
    session_destroy();
    header('Location:../html/index.php');
}
?>

<style>
.containerr {
    display: flex;
    flex-direction: column;
    max-width: 600px;
    /* margin: 50px auto; */
    /* padding: 20px; */
    /* background-color: #fff; */
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.user-icon {
    /* font-size: 24px;
    color: #333; */
    cursor: pointer;
}

#form {
    display: none;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

#form button {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

#form button:hover {
    background-color: #0056b3;
}
</style>

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
        <?php if (empty($_SESSION['user'])) {; ?>
        <form action="login.php">
            <button class="log-in">Log In</button>
        </form>
        <?php } else { ?>

        <div class="containerr">
            <i class="fa-solid fa-user user-icon" onclick="toggleForm()"></i>

            <form action="" method="GET" id="form">
                <?php echo $_SESSION['user']['username']; ?>
                <button name="logout">Logout</button>
            </form>
        </div>

        <?php }; ?>

    </div>
    <div class="menu-btn">
        <i class="fa-solid fa-bars"></i>
    </div>

    <script defer>
    function toggleForm() {
        var form = document.getElementById("form");
        if (form.style.display === "none") {
            form.style.display = "flex";
        } else {
            form.style.display = "none";
        }
    }
    </script>
</nav>