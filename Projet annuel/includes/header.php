<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DNA</title>
    <?php include('bootstrap.php'); ?>

    <style>
      .container-fluid{
        background-color: #032B52;
        height: 100px;
      }
      .link{
        color: white;
      }
      .link:hover, .btn:hover{
        color: black !important;
      }
      .btn:hover{
        background-color: white;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
  		<a href="index.php"><img src="images/LogoProjet.svg" class="logo float-left m-2 h-75" alt="Logo"></a>

      <div class="btn-group">
        <button type="button" class="btn btn-lg border-light"><a href="VideosGames.php" class="link text-decoration-none">Video Games</a></button>
        <button type="button" class="btn btn-lg border-light link-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"></button>

        <ul class="dropdown-menu">

        </ul>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-lg border-light"><a href="Forums.php" class="link text-decoration-none">Forums</a></button>
        <button type="button" class="btn btn-lg border-light link-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"></button>

        <ul class="dropdown-menu">

        </ul>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-lg border-light"><a href="News.php" class="link text-decoration-none">News</a></button>
        <button type="button" class="btn btn-lg border-light link-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"></button>

        <ul class="dropdown-menu">

        </ul>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-lg border-light"><a href="Store.php" class="link text-decoration-none">Store</a></button>
        <button type="button" class="btn btn-lg border-light link-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"></button>

        <ul class="dropdown-menu">

        </ul>
      </div>

      <div class="d-grid gap-2 col-1 float-end p-2">
        <!-- Button trigger modal -->
        <button type="button" class="btn popup border-light text-light" data-bs-toggle="modal" data-bs-target="#login">
          Login
        </button>
        <div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php include('Login.php'); ?>
      </div>
      
    </div>
  </div>
</div>
    <button class="btn popup border-light" type="button"><a href="Registration.php" class="link text-decoration-none">Registration</a></button>
  </div>
      <div class="float-end">
         <form class="d-flex p-4">
           <div class="input-group">
             <input class="form-control" type="search" placeholder="Search" aria-label="Search">
             <button class="btn btn-light" type="submit"><img src="images/search.svg" alt="search_logo"></button>
           </div>
         </form>
       </div>

  	</div>
  </body>
</html>
