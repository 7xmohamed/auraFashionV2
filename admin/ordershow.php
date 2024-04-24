<!DOCTYPE html>
<html>
<?php
include('adminpartials/session.php');
include('adminpartials/head.php');
?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php
    include('adminpartials/header.php');
    include('adminpartials/aside.php');


    ?>
        <!-- Left side column. contains the logo and sidebar -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-sm-9">

                        <?php
            include('../partials/connect.php');

            $id = $_GET['pro_id'];
            $sql = "SELECT * from orders WHERE id='$id'";
            $results = $connect->query($sql);

            $final = $results->fetch_assoc();
            ?>

                        <h3> order id : <?php echo $final['id'] ?> </h3>
                        <hr><br>

                        <h3> CustomerNo : <?php echo $final['customers_id'] ?> </h3>
                        <hr><br>

                        <h3> Products id : <?php echo $final['productID'] ?> </h3>
                        <hr><br>

                        <h3> Amount : <?php echo $final['Amount'] ?> </h3>
                        <hr><br>




                    </div>


                    <div class="col-sm-3">

                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php
    include('adminpartials/footer.php');
    ?>
</body>

</html>