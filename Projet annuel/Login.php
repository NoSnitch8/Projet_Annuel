<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DNA: Login</title>
    <?php include('includes/bootstrap.php'); ?>
  </head>
  <body>
    <?php
    session_start();
    if (isset($_POST['captcha'])) {
      if ($_POST['captcha'] == $_SESSION['captcha']) {
        // Mettre une alert verte
        echo "Captcha valid";
      }else{
        // Mettre une alert rouge
        echo "Captcha invalid !";
      }
    }
     ?>
    <form method="POST">
      <div class="form-group">
        <label for="inputEmail">Email address</label>
        <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="check">
        <label class="form-check-label" for="check">Check me out</label>
      </div>
      <div>
        <br>
        <img src="includes/captcha.php">
        <br><br>
        <input class="form-control" type="text" name="captcha" placeholder="Enter what you see on the screen" aria-label="default input">
        <br>
        <button type="submit" class="btn btn-primary">Valid Captcha</button>
      </div>

      <br>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </body>
</html>
