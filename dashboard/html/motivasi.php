<?php
require_once('../core_dasboard/init_dash.php');
// Redirect
if (!isset($_SESSION['login'])) {
    header('Location:login.php');
}

$result = motivasi();


// Tambah
$error = '';
if (isset($_POST['submit'])) {
    $judul        = $_POST['judul'];
    $deskripsi    = $_POST['deskripsi'];

    if (!empty(trim($judul)) && !empty(trim($deskripsi))) {
        if (addMotivasi($judul, $deskripsi)) {
            header('Location: motivasi.php');
            $_SESSION['msg'] = 'Motivasi berhasil ditambahkan';
        } else $error = 'terjadi kesalahan';
    } else $error = 'judul dan deskripsi tidak boleh kosong';
}

?>


<?php require_once('../views/_header.php') ?>
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <?php if (!empty($error)) { ?>
        <div class="alert alert-danger" role="alert">
            <p><?= $error ?></p>
        </div>
    <?php } ?>

    <!-- Msg -->
    <?php if (isset($_SESSION['msg'])) { ?>
        <div class="alert alert-success" role="alert">
            <p><?= $_SESSION['msg'] ?></p>
            <?php session_unset() ?>
        </div>
    <?php } else if (isset($_SESSION['edit'])) { ?>
        <div class="alert alert-success" role="alert">
            <p><?= $_SESSION['edit'] ?></p>
            <?php session_unset() ?>
        </div>
    <?php } else if (isset($_SESSION['delete'])) { ?>
        <div class="alert alert-success" role="alert">
            <p><?= $_SESSION['delete'] ?></p>
            <?php session_unset() ?>
        </div>
    <?php } ?>
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Motivasi</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Motivasi</li>
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
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                    <h2 class="add-ct-btn"><button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-circle btn-lg btn-success waves-effect waves-dark float-right">+</button></h2>

                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $data['title'] ?></td>
                                            <td><?= $data['deskription'] ?></td>
                                            <td>
                                                <a class="btn btn-warning" href="editMotivasi.php?id=<?= $data['id'] ?>">Edit</a>
                                                <a class="btn btn-danger" href="deleteMotivasi.php?id=<?= $data['id'] ?>">Delete</a>

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

<!-- Modal Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="4"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<?php require_once('../views/_footer.php') ?>