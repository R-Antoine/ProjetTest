<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Page Article</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<h1 class="text-center">Liste</h1>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <a href="/team/create">Créer une équipe</a>
        </div>
    </div>
</div>
<table class="table" style="text-align:center;">

    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Team</th>
        <th scope="col">Nb joueurs</th>
        <th scope="col">Nom joueurs</th>
    </tr>
    </thead>
    <tbody>
    <?php
    /** @var \App\Model\Team[] $teams */

    foreach ($teams as $team) : ?>
        <tr>
            <th scope="row"><?php echo $team->getId() ?></th>
            <td><?php echo $team->getName() ?></td>
            <td><?php echo sizeof($team->getPlayers()) ?></td>
            <td><?php foreach ($team->getPlayers() as $user){echo $user->getFisrtname().' | ';}?></td>
            <td><a href="../../user/create">Ajouter des joueurs</a>
                <button style="margin-left:20px;" type="button" class="btn btn-success">Modifier</button>
                <button style="margin-left:20px;" type="button" class="btn btn-danger">Supprimer</button>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <button style="text-align:center; height:70px; width:250px; margin-left:400px; margin-bottom:30px;"
                        type="button" class="btn btn-success">CREER LE BRACKET MONSTER
                </button>
            </div>
        </div>

    </div>
</div>
</body>
</html>