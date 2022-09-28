<?php  require_once('user/config.php');
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
<?php
//variable qui contient l'id de l'article choisi
    $modifier= $_GET['mod'];
//selectionnner l'article pour que les inputs soit préremplis avant la modification
 $sql="SELECT * FROM articles WHERE id ='$modifier'";
 $result=mysqli_query($link,$sql);
 $row=mysqli_fetch_assoc($result);
if(isset($_POST['editbtn'])){
    $nom=$_POST['nom'];
    $description=$_POST['description'];
    $image=$_FILES['phototext']['tmp_name'];
    $trajet= "image/dresses/".$_FILES['phototext']['name'];
    $old= $_POST['oldprix'];
    $new= $_POST['newprix'];
    //foonctiion pour uploader l'image
      if(!move_uploaded_file($image,$trajet)){
        echo "<script>alert('telechargement échouer')</script>";

      }else{

          
          $requp= "UPDATE articles SET nom='$nom', description='$description',newprix='$new',oldprix='$old',photo='$trajet' WHERE id='$modifier'";
          
          $resultat= mysqli_query($link,$requp);
          if($resultat){
              echo "Mise à jour éffectuée avec Succès...";
            } else {
                echo "Echec de modification des données...";
                
            }
        }
}

?>
    <div class="container">
        <form method="post" id="formulaire" class="d-flex  flex-column" enctype="multipart/form-data">
            <h2 style="text-align: center;">Mettre à jour un article</h2>
            <label for=""> <b>titre :</b></label> <br>
            <input type="text" value="<?= $row['nom']; ?>" placeholder="Entrez le titre" name="nom" required class="zonetext"> 
            
            <label for=""> <b>description :</b></label> <br>
            <textarea name="description" id="" cols="30" placeholder="Entrez le description"  required  rows="10"><?= $row['description']; ?></textarea>
            <label for="">
                <input type="text" value="<?= $row['oldprix']; ?>" name="oldprix" placeholder="Entrer le old price" class="zonetext">
                <input type="text" value="<?= $row['newprix']; ?>" name="newprix" placeholder="Entrer le new price" class="zonetext">
            </label>
            <label for=""><b>Photo :</b></label>
            <input type="file" name="phototext" placeholder="Choisir une photo" id="submit" class="zonetext"> 
            <input type="submit" name="editbtn" value="Ajouter" id="submit" class="submit">
            <p class="submit"><a href="admin/acceuil.php">Tableau de bord</a></p>
            <label style="text-align:center ;color:#960406;">
           
               
        </form>
    </div>    

</body>
</html>