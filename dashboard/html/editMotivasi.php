<?php
require_once('../core_dasboard/init_dash.php');

$id = $_GET['id'];

// Track
if (isset($id)) {
  $result = editMotivasi($id);
  $data   = mysqli_fetch_assoc($result);
}

// Update
$error = '';
if (isset($_POST['submit'])) {
  $judul        = $_POST['judul'];
  $deskripsi    = $_POST['deskripsi'];

  if (!empty(trim($judul)) && !empty(trim($deskripsi))) {
    if (updateMotivasi($judul, $deskripsi, $id)) {
      header('Location: motivasi.php');
      $_SESSION['edit'] = 'Motivasi berhasil di edit';
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
                          <label for="judul">Judul</label>
                          <input type="text" name="judul" class="form-control" id="judul" value="<?= $data['title'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="deskripsi">Deskripsi</label>
                          <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="4"><?= $data['deskription'] ?></textarea>
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