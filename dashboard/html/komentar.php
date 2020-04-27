<?php
require_once('../core_dasboard/init_dash.php');
if (!isset($_SESSION['login'])) {
    header('Location:login.php');
}
$result = komentar();





?>

<?php require_once('../views/_header.php') ?>
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <?php if (isset($_SESSION['delete'])) { ?>
            <div class="alert alert-success" role="alert">
                <p><?= $_SESSION['delete'] ?></p>
            </div>
        <?php } ?>
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Comment</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Comment</li>
                </ol>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Massage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <td>1</td>
                                            <td><?= $data['name'] ?></td>
                                            <td><?= $data['email'] ?></td>
                                            <td><?= $data['message'] ?></td>
                                            <td>
                                                <a class="btn btn-danger" href="deleteKomentar.php?id=<?= $data['id'] ?>">Delete</a>

                                            </td>
                                        </tr>
                                        <?php $i++ ?>
                                    <?php } ?>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>

    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<?php require_once('../views/_footer.php') ?>