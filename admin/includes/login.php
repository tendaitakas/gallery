<?php
require_once 'init.php';

if ($session->is_signed_in()) {
  redirect("index.php")
}

if (isset($_POST['submit'])) {
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  //method to check database user

  if ($user_found) {
    $session->login($user_found);
    redirect("index.php");
  } else {
    $the_message = "Your password or username are incorrrect";
  }



} else {
  $username = "";
  $password = "";
}



 ?>
