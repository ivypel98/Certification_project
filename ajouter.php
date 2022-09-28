<?php
 require_once('user/config.php');

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
     <div id="container">

     <!-- enctype="multipart/form-data"  utiliser pour pouvoir telecharger les medias -->
         <form action="" name="addform" id="formulaire" method="post" enctype="multipart/form-data">
              <h2 style="text-align:center ;">Ajouter un nouveau article</h2>
              
            <label for=""> <b>titre :</b></label> <br>
            <input type="text" placeholder="Entrez le titre" name="nom" required class="zonetext"> 
            
            <label for=""> <b>description :</b></label> <br>
            <textarea name="description" id="" cols="30" placeholder="Entrez le description"  required  rows="10"></textarea>
            <label for="">
                <input type="text" name="oldprix" placeholder="Entrer le old price" class="zonetext">
                <input type="text" name="newprix" placeholder="Entrer le new price" class="zonetext">
            </label>
            <label for=""><b>Photo :</b></label>
            <input type="file" name="phototext" placeholder="Choisir une photo" id="submit" class="zonetext"> 
            <input type="submit" name="btadd" value="Ajouter" id="submit" class="submit">
            <p class="submit"><a href="admin/acceuil.php">Tableau de bord</a></p>
            <label style="text-align:center ;color:#960406;">
            <?php 
            if(isset($_POST['btadd'])){
                $nom=$_POST['nom'];
                $description=$_POST['description'];
                $image=$_FILES['phototext']['tmp_name'];
                $trajet= "image/dresses/".$_FILES['phototext']['name'];
                $old= $_POST['oldprix'];
                $new= $_POST['newprix'];
                //fonctiion pour uploader l'image
                  if(!move_uploaded_file($image,$trajet)){
                    echo "<script>alert('telechargement de photo échouer')</script>";

                  }

                      $reqadd="INSERT INTO `articles` ( `nom`, `description`, `newprix`, `oldprix`, `photo`) VALUES  ('$nom','$description','$new','$old','$trajet')";
                      $resultat= mysqli_query($link,$reqadd);
                      if($resultat){
                          echo "Insertion des donnés validés";
                        } else{
                            echo "Echec d'insertion de donnée";
                        }
                    }

            
             ?>
             </label>
         </form>
     </div>
</body>
</html>