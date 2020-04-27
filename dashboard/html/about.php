<?php
require_once('../core_dasboard/init_dash.php');
if (!isset($_SESSION['login'])) {
    header('Location:login.php');
}

$result = about();
$data = mysqli_fetch_assoc($result);



$error = '';
if (isset($_POST['submit'])) {
    $subject = $_POST['subject'];
    $id    = $data['id'];
    $photo = $_FILES['photo']['name'];
    $size  = $_FILES['photo']['size'];
    $asal  = $_FILES['photo']['tmp_name'];
    $type  = $_FILES['photo']['type'];
    $namaFile = "../../images/" . $photo;

    // Upload gambar
    if ($size <= 10000000) {
        if ($type == 'image/jpeg' || $type == 'png') {
            move_uploaded_file($asal, $namaFile);
            // Edit
            if (!empty(trim($subject)) && !empty(trim($photo))) {
                if (updateAbout($subject, $photo, $id)) {
                    header('Location: about.php');
                    $_SESSION['msg'] = 'About berhasil di edit';
                } else $error = 'terjadi kesalahan';
            } else $error = 'subject dan photo tidak boleh kosong';
        } else $error = 'Gambar gagal di upload';
    } else $error = 'Gambar terlalu besar';
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
                <?= session_unset() ?>

            </div>
        <?php } ?>

        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">About-Us</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">About</li>
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
                                        <th>Subject</th>
                                        <th>Photo</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td><?= $data['subject'] ?></td>
                                        <td><?= $data['photo'] ?></td>
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

<!-- Button trigger modal -->


<!-- Modal -->
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
                        <label for="subject">Subject</label>
                        <textarea name="subject" id="subject" class="form-control" cols="30" rows="10"><?= $data['subject'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" name="photo" class="form-control" id="photo" value="<?= $data['photo'] ?>">
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