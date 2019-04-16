<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Page Article</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<h1 class="text-center">Creation des équipes</h1>
<div class="container">
    <div class="row">
        <div class="col text-center">
        <form method="POST">
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nom de l'équipe</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="nameSquad" placeholder="Nom de l'équipe">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
            <a class="btn btn-light" href="../player/create.php">Ajouter les joueurs</a>
                <a class="btn btn-light" href=".">Aller a la liste</a>
            </div>
        </div>
    </form>
        </div>
    </div>
</div>
</body>
</html>