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
<table class="table" style="text-align:center;">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Team</th>
      <th scope="col">Nb joueurs</th>
      <th scope="col">Nom joueurs</th>
    </tr>
  </thead >
  <tbody>
  <?php
  /** @var \App\Model\Team[] $teams */

  foreach ($teams as $team) : ?>
    <tr>
      <th scope="row"><?php echo $team->getId()?></th>
      <td><?php echo $team->getName()?></td>
      <td><?php echo sizeof($team->getPlayers())?></td>
      <td><button type="button" class="btn btn-success">Modifier</button><button style="margin-left:20px;" type="button" class="btn btn-danger">Supprimer</button></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>