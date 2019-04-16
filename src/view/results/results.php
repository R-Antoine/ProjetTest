<!DOCTYPE html>
<html>
    <head>
    <title>Results</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <h1 class="text-center">Resultats du tournoi <?php echo $_GET["tournament"] ?> :</h1>
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name :</th>
                            <th scope="col">Classement : </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php for ($tableIndex=0; $tableIndex < 8; $tableIndex++){ ?>
                        <tr>
                            <td><?php echo $tableIndex + 1 ?></td>
                            <td>je suis un nom</td>
                            <td>je suis un classement</td>
                        </th>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
