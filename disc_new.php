<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-3">
        <h2>le formulaire d'ajout</h2>
        <h4>Ajouter un vinyle</h4>
        <form action="script_disc_ajout.php" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="enter title" name="title" required >
            </div>
    
            
            <div class="form-group">
                <label for="year">Year</label>
                <input type="text" class="form-control" placeholder="Enter year" name="year" id="year" required>
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <input type="text" class="form-control" placeholder="Enter genre(Rock,Pop, Prog)" name="genre" id="genre" required>
            </div>
            <div class="form-group">
                <label for="label">Label</label>
                <input type="text" class="form-control" placeholder="Enter label (Emi, Warner, PolyGram, Univers sale...)" name="label" id="label" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" id="price">
            </div>
            <div class="form-group">
                <label for="picture">Picture</label>
                <input type="file" class="form-control-file" name="picture" id="picture" required>
               
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
                <a href="discs.php" class="btn btn-primary">retour</a>

        </form>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>