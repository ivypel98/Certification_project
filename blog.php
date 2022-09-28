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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- title -->
    <title>Noelie Mode E-Shop</title>
</head>

<body>

    <?php
    require('user/config.php');
    $reqSelect = "select * from articles ORDER BY id DESC";

    $resultat = mysqli_query($link, $reqSelect);
    ?>
    <!-- section fits -->
    <section id="find" class="fits section-padding">
        <div class="container">
            <div class="row">

               
            </div>
            <div class="row">
                <?php
                while ($ligne = mysqli_fetch_assoc($resultat)) {
                ?>
                    <div class="col-lg-4 mb-4 dcc ">
                        <div class="card text-center chile" style="width:21rem">
                            <div class="img">
                                <img src="<?= $ligne['photo']; ?>" alt="" class="img-fluid">
                            </div>
                            <div class="info-image">
                                <h2><?= $ligne['nom']; ?></h2>
                                <p>Ideal for convention and koinonia</p>
                                <a class="btn see mx-4 mt-2 mb-4" href="details.php?id=<?= $ligne['id']; ?>">see detail</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>


               
            </div>
    </section>


    <script src="js/swiper-bundle.min.js"></script>
    <!-- Javascript -->
    <script src="js/car.js"></script>
</body>

</html>