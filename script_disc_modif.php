<?php
    // Récupération des valeurs :
    $id = (isset($_POST['id']) && $_POST['id'] != "") ? $_POST['id'] : Null;
    $title = (isset($_POST['title']) && $_POST['title'] != "") ? $_POST['title'] : Null;
    $genre = (isset($_POST['genre']) && $_POST['genre'] != "") ? $_POST['genre'] : Null;

    // En cas d'erreur, on renvoie vers le formulaire
    if ($id == Null) {
        header("Location: discs.php");
    }
    elseif ($title == Null || $genre == Null) {
        header("Location: disc_form.php?id=".$id);
        exit;
    }

    // Si la vérification des données est ok :
    require "db.php"; 
    $db = connexionBase();

    try {
        // Construction de la requête UPDATE sans injection SQL :
        $requete = $db->prepare("UPDATE disc SET disc_title = :title, disc_genre = :genre WHERE disc_id = :id;");
        $requete->bindValue(":id", $id, PDO::PARAM_INT);
        $requete->bindValue(":title", $title, PDO::PARAM_STR);
        $requete->bindValue(":genre", $genre, PDO::PARAM_STR);

        $requete->execute();
        $requete->closeCursor();
    }

    catch (Exception $e) {
        echo "Erreur : " . $e->getMessage() . "<br>";
        die("Fin du script (script_disc_modif.php)");
    }

    // Si OK: redirection vers la page artist_detail.php
    header("Location: disc_detail.php?id=" . $id);
    exit;
    ?>
