<?php

require_once 'includes/header.php';

if ($session->is_signed_in()) {
  redirect("index.php");
}

// var_dump($_POST);
// die;

if (isset($_POST['submit'])) {



    $username = trim($_POST['username']);
    $password = trim($_POST['password']);


    //Method to check database user

    $user_found = User::verify_user($username, $password);



    if($user_found) {
      $session->login($user_found);
      redirect("index.php");

    } else {
      $the_message = "Your password or username are incorrect";
    }

} else {


  $username = "";
  $password = "";
  $the_message = "";
}


 ?>


 <div class="col-lg-6">
   <h4 class="bg_danger"><?php echo $the_message; ?></h4>

     <form action="" method="post">

         <div class="form-group">
             <label>Text Input</label>
             <input type="text" class="form-control" name="username" placeholder="username" value="<?php echo htmlentities($username); ?>">
         </div>

         <div class="form-group">
             <input type="password" class="form-control" name="password" placeholder="password" value="<?php echo htmlentities($password); ?>">
         </div>

         <div class="form-group">
           <input type="submit" name="submit" class="btn btn-primary" value="submit">
         </div>

</form>
</div>
