<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Page Article</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<h1 class="text-center">Tournoi de pétanque</h1>
<div class="container">
    <div class="row">
        <div class="col text-center">
           <a href="/team/create">Créer une équipe</a>
        </div>
    </div>
</div>
<ul>
    <?php
    /** @var \App\Model\Team[] $teams */

    foreach ($teams as $team) : ?>
        <li>
            <?php echo $team->getName(); ?>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>