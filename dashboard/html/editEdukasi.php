<?php
require_once('../core_dasboard/init_dash.php');

$id = $_GET['id'];

// Track
if (isset($id)) {
  $result = editEdukasi($id);
  $data   = mysqli_fetch_assoc($result);
}

// Update
$error = '';
if (isset($_POST['submit'])) {
  $sekolah = $_POST['sekolah'];
  $memo    = $_POST['memo'];
  $tgl     = $_POST['date'];

  if (!empty(trim($sekolah)) && !empty(trim($memo)) && !empty(trim($tgl))) {
    if (updateEdukasi($sekolah, $memo, $tgl, $id)) {
      header('Location: edukasi.php');
      $_SESSION['edit'] = 'Edukasi berhasil di edit';
    } else $error = 'terjadi kesalahan';
  } else $error = 'judul dan deskripsi tidak boleh kosong';
}

?>


<?php require_once('../views/_header.php') ?>
<!-- Page wrapper  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
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
                      <form action="" method="POST">
                        <div class="form-group">
                          <label for="sekolah">Sekolah</label>
                          <input type="text" name="sekolah" class="form-control" id="sekolah" value="<?= $data['school'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="memo">Memo</label>
                          <textarea name="memo" class="form-control" id="memo" cols="30" rows="4"><?= $data['memo'] ?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="date">Tahun Tempuh</label>
                          <input type="text" name="date" class="form-control" id="date" value="<?= $data['date'] ?>">
                        </div>
                        <div class="modal-footer">
                          <button type="submit" name="submit" class="btn btn-primary">Edit</button>
                        </div>
                      </form>
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