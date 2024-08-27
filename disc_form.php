<?php
 // On charge l'enregistrement correspondant à l'ID passé en paramètre :
    require "db.php";
    $db = connexionBase();
    $requete = $db->prepare("SELECT * FROM disc WHERE disc_id=?");
    $requete->execute(array($_GET["id"]));
    $myArtist = $requete->fetch(PDO::FETCH_OBJ);
    $requete->closeCursor();
    ?>


    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout</title>
</head>
<body>

    <h1>disc n°<?= $myArtist->disc_id; ?></h1>

    <a href="discs.php">disc</a>

    <br>
    <br>

    <form action ="script_disc_modif.php" method="post">

<input type="hidden" name="id" value="<?= $myArtist->disc_id ?>">

<label for="nom_for_label">title :</label><br>
<input type="text" name="title" id="title_for_label" value="<?= $myArtist->disc_title ?>">
<br><br>

<label for="genre_for_label">Genre:</label><br>
<input type="text" name="genre" id="genre_for_label" value="<?= $myArtist->disc_genre ?>">
<br><br>

<input type="reset" value="Annuler">
<input type="submit" value="Modifier">
<a href="discs.php" class="btn btn-primary">retour</a>

</form>
</body>
</html>