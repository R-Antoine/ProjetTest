<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Page Article</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<h1 class="text-center">Creation des joueurs</h1>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <form method="POST">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Prénom du joueur</label>
                    <div class="col-sm-10">
                        <input type="text" name="firstname" class="form-control" id="nameSquad" placeholder="Prénom">
                    </div>
                    <label for="name" class="col-sm-2 col-form-label">Nom du joueur</label>
                    <div class="col-sm-10">
                        <input type="text" name="lastname" class="form-control" id="lastnameSquad" placeholder="Nom">
                    </div>
                    <label for="name" class="col-sm-2 col-form-label">Equipe du joueur</label>
                    <div class="col-sm-10">
                        <select name="team">
                            <?php

                            /** @var \App\Model\Team[] $teams */
                            foreach ($teams as $team) : ?>
                                <option value='<?php echo $team->getId() ?>'>
                                    <?php echo $team->getName(); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Valider</button>
                        <a class="btn btn-light" href="../team/">Aller a la liste</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>