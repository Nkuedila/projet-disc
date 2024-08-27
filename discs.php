<?php

    // on importe le contenu du fichier "db.php"
    include "db.php";
    // on exécute la méthode de connexion à notre BDD
    $db = connexionBase();

    // on lance une requête pour chercher toutes les fiches d'artistes
    $requete = $db->query("SELECT * FROM disc ");
    // on récupère tous les résultats trouvés dans une variable
    $discs = $requete->fetchAll(PDO::FETCH_OBJ);
    // on clôt la requête en BDD
    $requete->closeCursor();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    .artist-details {
        display:flex;
        align-items:center;
        gap: 20px;
    }

    .artist-details img {
        max-width:200px;
        border: 1px solid #ccc;
    }

    .details {
        max-width:400px;
    }
    .details h4 {
        margin: 0 0 10px;
    }
    .details p {
        margin: 5px 0;
    }
    </style>
<body>
<div class="container">
        <div class="d-flex justify-content-between align-items-center my-4">
        <h1>liste des disque</h1>
        <a href="disc_new.php" class="btn btn-primary">Ajouter</a>  


        </div>
    

        <table>
        <?php foreach ($discs as $disc) { ?>
            <tr>
                    <div class="artist-details">
                        <img src="<?= htmlspecialchars($disc->disc_picture) ?>" alt="Artist img">
                        <div class="details">
                            <h4><?= htmlspecialchars($disc->disc_title) ?></h4>
                            <p><b>Label:</b><?= htmlspecialchars($disc->disc_label) ?></p>
                            <p><b>Year :</b><?= htmlspecialchars($disc->disc_year) ?></p>
                            <p><b>Genre:</b><?= htmlspecialchars($disc->disc_genre) ?></p>
                            <a href="disc_detail.php?id=<?= $disc->disc_id ?>" class="btn btn-primary">Details</a>


                        </div>
                    </div>
                </tr>
                <?php } ?>

        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
