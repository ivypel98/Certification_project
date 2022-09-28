
<?php
require_once('user/config.php');
if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
    header('location:index.php');
} else {
    // code pour Sélectionner l'article qui est cliqué
    $id = $_GET['id'];
    $req = "SELECT * FROM articles WHERE id=$id";
    $resultat = mysqli_query($link, $req);
    $ligne = mysqli_fetch_assoc($resultat);


}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/f3a211bc0c.js" crossorigin="anonymous"></script>
    <!-- Swipper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <!-- CSS -->
    <link href="./css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/style2.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

   <!-- title -->
    <title>Detail</title>
  </head>

  <body>
    <!-- Debut navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="./index.php" style="color: #ffb358 ; font-family: 'Fashionable';
    font-weight: bold;
    font-size: 25px;
    letter-spacing: 0.5px;">
    Noelie Mode creation</a>
        <div class="navbar-text">
          <ul class="navbar-nav ms-auto mb-2">
            <li class="nav-item">
              <a class="nav-link fas fa-home" href="./dress.php"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://wa.me/+22892951868" target="_blank">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Fin navbar -->
    <div class="container">
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-lg-4 ">
                <div class="img">
                      <img src="<?= $ligne['photo']; ?>" alt="" class="img-fluid">
                      
                </div>
            </div>
                <div class="col-lg-5 p-3">
                    <div class="description">
                        <h2><?= $ligne['nom']; ?></h2>
                        <p><?= $ligne['description']; ?></p>
                    </div>
                    <div class="price">
                        <span style ="text-decoration: line-through; font-size:2em"><?= $ligne['newprix']; ?> F CFA</span>
                        <span class="display-6 fw-bold" style = "color : #ffb358;  font-size:3em"><?= $ligne['oldprix']; ?>F CFA</span>
                    </div>
                    <a title="Discuter avec le vendeur" href= "https://wa.me/+22892951868" target="_blank" class="btn fw-bold my-5 mr-4" style = "background-color : #ffb358">Command now</a>
                    OR <a href="./user/login.php " class="btn " style = "background-color : #ffb358">Add to my list</a>
                </div>
        </div>
    </div>
  </body>
  </html>