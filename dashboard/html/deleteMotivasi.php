<?php
require_once('../core_dasboard/init_dash.php');

$id = $_GET['id'];

// Track
if (isset($id)) {
  deleteMotivasi($id);
  header('Location:motivasi.php');
  $_SESSION['delete'] = 'Motivasi berhasil di hapus';
}
