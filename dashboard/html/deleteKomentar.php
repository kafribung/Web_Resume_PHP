<?php
require_once('../core_dasboard/init_dash.php');

$id = $_GET['id'];

// Track
if (isset($id)) {
  deleteKomentar($id);
  header('Location:komentar.php');
  $_SESSION['delete'] = 'Komentar berhasil di hapus';
}
