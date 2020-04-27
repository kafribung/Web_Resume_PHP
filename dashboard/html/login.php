<?php
require_once('../core_dasboard/init_dash.php');

$error = '';
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $pass  = $_POST['password'];

  if (cekEmail($email) != 0) {
    if (cekPassword($email, $pass)) {
      header('Location:dashboard.php');
      $_SESSION['login'] = 'Anda berhasil login';
    } else $error = 'Login Gagal';
  } else $error = 'Email tidak dikenali';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <?php if (!empty($error)) { ?>
      <div class="alert alert-danger" role="alert">
        <p><?= $error ?></p>
      </div>
    <?php } ?>
    <div class="row">
      <div class="col-sm-12 text-center">
        <h4>Login <span class="badge badge-warning">Bung Dev</span></h1>
        </h4>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 offset-sm-3">
        <form method="POST" action="">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
          </div>
          <button type="submit" name="submit" class="btn btn-primary float-right">Login</button>
        </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>