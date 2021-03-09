<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DNA: Login</title>
    <?php include('includes/bootstrap.php');  ?>

  </head>
  <body>
    
    <form method="POST">
      <div class="form-group">
        <label for="inputEmail">Email address</label>
        <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
      </div>
      <br>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>

  </body>
</html>
