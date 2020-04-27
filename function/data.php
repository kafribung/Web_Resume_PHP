<?php

// User & About
function dataIndex()
{
  $query  = "SELECT user.username, user.alamat, user.email, user.handpone, about.subject, about.photo FROM user, about WHERE user.id = about.user_id";
  return run_result($query);
}

// Motivasi
function dataMmotivasi()
{
  $query  = "SELECT * FROM motivation";
  return run_result($query);
}

// Eukasi
function dataEdukasi()
{
  $query = "SELECT * FROM education";
  return run_result($query);
}

// Commnet
function addComment($nama, $email, $pesan)
{
  $nama   = escape($nama);
  $email  = escape($email);
  $pesan  = escape($pesan);

  $query  = "INSERT INTO contact (name, email, message) VALUES('$nama', '$email', '$pesan')";
  return run_query($query);
}


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

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
