<?php
require_once('../core_dasboard/init_dash.php');
// Redirect
if (!isset($_SESSION['login'])) {
    header('Location:login.php');
}

$result = dataUser();
$data = mysqli_fetch_assoc($result);

$error = '';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $hp       = $_POST['handpone'];
    $alamat   = $_POST['alamat'];
    $id       = $data['id'];

    if (!empty(trim($username)) && !empty(trim($hp)) && !empty(trim($alamat))) {
        if (updateUser($username, $email,  $hp, $alamat, $id)) {
            header('Location: manajemen.php');
            $_SESSION['msg'] = 'Data berhasil di edit';
        } else $error = 'terjadi kesalahan';
    } else $error = 'Data tidak boleh kosong';
}

?>


<?php require_once('../views/_header.php') ?>
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <?php if (!empty($error)) { ?>
            <div class="alert alert-danger" role="alert">
                <p><?= $error ?></p>
            </div>
        <?php } ?>

        <?php if (isset($_SESSION['msg'])) { ?>
            <div class="alert alert-success" role="alert">
                <p><?= $_SESSION['msg'] ?></p>
                <? session_unset() ?>

            </div>
        <?php } ?>
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Manajemen</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Manajemen</li>
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
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><?= $data['username'] ?></td>
                                        <td><?= $data['email'] ?></td>
                                        <td>+62 <?= $data['handpone'] ?></td>
                                        <td><?= $data['alamat'] ?></td>
                                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                                                Edit
                                            </button>
                                        </td>
                                    </tr>

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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" value="<?= $data['username'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="<?= $data['email'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="handpone">Handphone</label>
                        <input type="text" name="handpone" id="handpone" class="form-control" value="<?= $data['handpone'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control"><?= $data['alamat'] ?></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<?php require_once('../views/_footer.php') ?>