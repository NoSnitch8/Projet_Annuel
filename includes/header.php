<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DNA</title>
    <?php include('bootstrap.php'); ?>

    <style>
      .navbar{
        background-color: #032B52;
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
      <nav class="navbar navbar-dark fixed-top navbar-expand-lg">
        <div class="container-fluid">
          <a href="index.php"><img src="images/LogoProjet.svg" class="logo float-left m-2 h-75 me-4" width="95" alt="Logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <div>
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
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-lg popup border-light text-light" data-bs-toggle="modal" data-bs-target="#login">
                    Login
                  </button>

                  <button class="btn btn-lg popup border-light ms-2" type="button"><a href="Registration.php" class="link text-decoration-none">Registration</a></button>
            </ul>
            <form class="d-flex me-3">
              <div class="input-group">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-light" type="submit"><img src="images/search.svg" alt="search_logo"></button>
              </div>
            </form>
          </div>
        </div>
      </nav>
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
      <div>
        <br><br><br><br>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>
