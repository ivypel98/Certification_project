<?php require_once('../user/config.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Listes_des_articles</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1><b>Liste des articles</b></h1>
        </div>
        <div class="row col-5">
        <p><a class="add fa-plus" href="../ajouter.php"></a>ajouter</p>
        </div>
    <div class="row">
        <?php

        $reqselect = "SELECT * FROM articles ";

        $resultat = mysqli_query($link, $reqselect);



        while ($ligne = mysqli_fetch_assoc($resultat)) {
        ?>
            <div class="row shadow m-2">
            <div class="col-8 ">
                <b>Nom:
                    <?php echo $ligne['nom']; ?>
                </b>
                <p><b>desc</b>:
                    <?php echo $ligne['description']; ?>
                </p>
                <p><b>oldprix</b>:
                    <?php echo $ligne['oldprix']; ?>
                </p>
                <p><b>new price</b>:
                    <?php echo $ligne['newprix']; ?>
                </p>
                <div class="d-flex justify-content-center">
                   
                    <p id="icon" class="d-flex align-items-center justify-content-center">
                        <a class="mx-2 " href="delete.php?del=<?php echo $ligne['id']; ?>">delete</a>

                        <a class="mx-2" href="../edit.php?mod=<?php echo $ligne['id']; ?>">edit</a>
                    </p>
                </div>
            </div>
            <div class="col-4">
            <img src="../<?php echo $ligne['photo']; ?>" class="w-100 h-50">
            </div>
            </div>
            </div>

            <!-- <tr>
           </tr> -->
        <?php } ?>
    </div>
    <!-- </table> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>