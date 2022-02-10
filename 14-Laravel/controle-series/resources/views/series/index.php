<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Controle de Séries</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="class jumbotron">
                <h1>
                    Séries
                </h1>
            </div>

            <a href="/series/criar" class="btn btn-dark mb-1">
                Adicionar
            </a>

            <ul class="list-group">
                <?php foreach($series as $serie): ?>
                <li class="list-group-item acitve">  <?= $serie; ?>  </li>
                <?php endforeach; ?>    
            </ul>
        </div>
    </body>
</html>