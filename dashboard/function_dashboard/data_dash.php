<?php
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~Login
function cekEmail($email)
{
  global $link;

  $query  = "SELECT * FROM user WHERE email= '$email'";
  $result = mysqli_query($link, $query);

  return mysqli_num_rows($result);
}

function cekPassword($email, $pass)
{
  global $link;
  $query = "SELECT password FROM user WHERE email='$email'";
  $result = mysqli_query($link, $query);

  $data  = mysqli_fetch_assoc($result)['password'];
  if ($pass == $data) return true;
  else return false;
}

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~Manajemen
function dataUser()
{
  $query  = "SELECT * FROM user";

  return run_result($query);
}

function updateUser($username, $email, $hp, $alamat, $id)
{
  $username = escape($username);
  $email    = escape($email);
  $hp       = escape($hp);
  $alamat   = escape($alamat);

  $query = "UPDATE user SET username='$username', email='$email', alamat='$alamat', handpone='$hp' WHERE id = $id";
  return run_query($query);
}

// ~~~~~~~~~~~~~~~~~~~~~~~~~About
function about()
{
  $query  = "SELECT * FROM about";
  return run_result($query);
}

function updateAbout($subject, $photo, $id)
{
  $subject = escape($subject);
  $photo   = escape($photo);

  $query = "UPDATE about SET subject='$subject', photo='$photo' WHERE id = $id";
  return run_query($query);
}

// ~~~~~~~~~~~~~~~~~~~~~~~~~MOTIVASI
function motivasi()
{
  $query  = "SELECT * FROM motivation ORDER BY id DESC";
  return run_result($query);
}

function addMotivasi($judul, $deskripsi)
{
  $query = "INSERT INTO motivation (title, deskription, user_id) VALUES ('$judul', '$deskripsi', 1)";
  return run_query($query);
}

function editMotivasi($id)
{
  $query  = "SELECT * FROM motivation WHERE id=$id";
  return run_result($query);
}

function updateMotivasi($judul, $deskripsi, $id)
{
  $judul       = escape($judul);
  $deskripsi   = escape($deskripsi);

  $query = "UPDATE motivation SET title='$judul', deskription='$deskripsi' WHERE id = $id";
  return run_query($query);
}

function deleteMotivasi($id)
{
  $query = "DELETE FROM motivation WHERE id=$id";
  return run_result($query);
}

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~EDUKASI
function edukasi()
{
  $query  = "SELECT * FROM education";
  return run_result($query);
}

function editEdukasi($id)
{
  $query  = "SELECT * FROM education WHERE id=$id";
  return run_result($query);
}

function updateEdukasi($sekolah, $memo, $tgl, $id)
{
  $query = "UPDATE education SET school='$sekolah', memo='$memo', date='$tgl'  WHERE id=$id";
  return run_query($query);
}

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~CONTACT
function komentar()
{
  $query = "SELECT * FROM contact";
  return run_result($query);
}

function deleteKomentar($id)
{
  $query = "DELETE FROM contact WHERE id = $id";
  return run_query($query);
}





// Keamanan
function escape($data)
{
  global $link;
  return mysqli_escape_string($link, $data);
}

// Run Query
function  run_query($query)
{
  global $link;

  if (mysqli_query($link, $query))   return true;
  else return false;
}

// result universal
function run_result($result)
{
  global $link;
  return mysqli_query($link, $result);
}
