<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DNA: Registration</title>
    <?php include('includes/bootstrap.php'); ?>
  </head>
  <body>
    <?php include('includes/header.php'); ?>

    <form method="POST">
      <br>

      <?php
        if (isset($_POST['captcha'])) {
          if ($_SESSION['captcha'] == $_POST['captcha'] && !empty($_POST['captcha'])) {
            // Mettre u$_SESSION['captcha']ne alert verte
            echo "Captcha valid !";
          }else{
            // Mettre une alert rouge
            echo "Captcha invalid !";
          }
        }
       ?>
      <div class="col-sm-4 mx-auto pt-5">
        <br>
        <div>
          <label for="inputEmail" class="form-label">Email address</label>
          <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
        </div>
        <br>
        <div>
          <label for="inputPassword" class="form-label">Password</label>
          <input type="password" class="form-control" id="inputPassword">
        </div>
        <br>
        <div>
          <label for="inputConfirmPassword" class="form-label">Retype your password</label>
          <input type="password" class="form-control" id="inputConfirmPassword">
        </div>
        <br>
        <div>
          <br>
          <!-- Captcha -->
          <img src="includes/captcha.php">

          <input class="form-control" type="text" name="captcha" placeholder="Enter what you see on the screen" aria-label="default input">
          <br>
          <button type="submit" class="btn btn-primary">Valid Captcha</button>
        </div>
        <!-- End Captcha -->
        <br>
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </form>
  </body>
</html>
