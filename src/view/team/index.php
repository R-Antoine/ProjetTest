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
<ul>
    <?php
    /** @var \App\Model\Team[] $teams */

    foreach ($teams as $team) : ?>
        <li>
            <?php echo $team->getName(); ?>
        </li>
    <?php endforeach; ?>
</ul>
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
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>3</td>
      <td>@mdo</td>
      <td><button type="button" class="btn btn-success">Modifier</button><button style="margin-left:20px;" type="button" class="btn btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>4</td>
      <td>@fat</td>
      <td><button type="button" class="btn btn-success">Modifier</button><button style="margin-left:20px;" type="button" class="btn btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>2</td>
      <td>@twitter</td>
      <td><button type="button" class="btn btn-success">Modifier</button><button style="margin-left:20px;" type="button" class="btn btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Larry</td>
      <td>2</td>
      <td>@twitter</td>
      <td><button type="button" class="btn btn-success">Modifier</button><button style="margin-left:20px;" type="button" class="btn btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Larry</td>
      <td>4</td>
      <td>@twitter</td>
      <td><button type="button" class="btn btn-success">Modifier</button><button style="margin-left:20px;" type="button" class="btn btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Larry</td>
      <td>3</td>
      <td>@twitter</td>
      <td><button type="button" class="btn btn-success">Modifier</button><button style="margin-left:20px;" type="button" class="btn btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Larry</td>
      <td>2</td>
      <td>@twitter</td>
      <td><button type="button" class="btn btn-success">Modifier</button><button style="margin-left:20px;" type="button" class="btn btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Larry</td>
      <td>3</td>
      <td>@twitter</td>
      <td><button type="button" class="btn btn-success">Modifier</button><button style="margin-left:20px;" type="button" class="btn btn-danger">Supprimer</button></td>
    </tr>
  </tbody>
</table>
</body>
</html>