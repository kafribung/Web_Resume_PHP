<?php
require_once('../core_dasboard/init_dash.php');

// Redirect jika tidak login
if (!isset($_SESSION['login'])) {
    header('Location:login.php');
}
$result = dataUser();

$data   = mysqli_fetch_assoc($result);

?>

<?php require_once('../views/_header.php') ?>
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <?php if (isset($_SESSION['login'])) { ?>
            <div class="alert alert-success" role="alert">
                <p><?= $_SESSION['login'] ?></p>
            </div>
        <?php } ?>
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-sm-12">
                <div class=" card">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="ml-auto">
                                            <h1>Selamat datang <?= $data['username'] ?></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <?php require_once('../views/_footer.php') ?>