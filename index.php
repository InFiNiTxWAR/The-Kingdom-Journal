<?php
require_once "dados.php";
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $nome_jornal ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container mt-4">

    <div class="text-center">

        <p><?= $cidade_data ?></p>

        <h1><?= $nome_jornal ?></h1>

        <h4><?= $subtitulo ?></h4>

        <p><?= $alunos ?></p>

    </div>

    <hr>

    <div class="row">

        <div class="col-md-6">

            <h3><?= $localizacao["titulo"] ?></h3>

            <p><?= $localizacao["texto"] ?></p>

        </div>

        <div class="col-md-6">

            <img
                src="<?= $localizacao["imagem"] ?>"
                class="img-fluid rounded"
                alt="Mapa do Reino Unido">

        </div>

    </div>

    <hr>

    <div class="row">

        <div class="col-md-6">

            <h3><?= $influencia["titulo"] ?></h3>

            <p><?= $influencia["texto"] ?></p>

        </div>

        <div class="col-md-6">

            <h3><?= $sotaque["titulo"] ?></h3>

            <p><?= $sotaque["texto"] ?></p>

        </div>

    </div>

    <hr>

    <h3>Curiosidades Culturais</h3>

    <ul>
        <?php foreach($curiosidades as $item): ?>
            <li><?= $item ?></li>
        <?php endforeach; ?>
    </ul>

    <hr>

    <h3>Vocabulário Específico</h3>

    <ul>
        <?php foreach($vocabulario as $item): ?>
            <li><?= $item ?></li>
        <?php endforeach; ?>
    </ul>

    <hr>

    <h3>Expressões Idiomáticas</h3>

    <ul>
        <?php foreach($expressoes as $item): ?>
            <li><?= $item ?></li>
        <?php endforeach; ?>
    </ul>

    <hr>

    <h3>10 Palavras com Variação Linguística</h3>

    <ol>
        <?php foreach($variacoes as $item): ?>
            <li><?= $item ?></li>
        <?php endforeach; ?>
    </ol>

    <hr>

    <h3><?= $video["titulo"] ?></h3>

    <p><?= $video["descricao"] ?></p>

    <div class="mt-3">

<video
    class="w-100 rounded shadow"
    controls>

    <source
        src="<?= $video["arquivo"] ?>"
        type="video/mp4">

    Seu navegador não suporta vídeos.

</video>

</div>
    <div class="card mt-4">
    <div class="card-header">
        🇬🇧 Assistente Reino Unido
    </div>

    <div class="card-body">

        <div id="chat" style="height:350px;overflow-y:auto;"></div>

        <div class="input-group mt-3">

            <input
                type="text"
                id="pergunta"
                class="form-control"
                placeholder="Pergunte sobre o Reino Unido">

            <button
                class="btn btn-primary"
                onclick="enviarPergunta()">

                Enviar

            </button>

        </div>

    </div>
</div>

</div>

<script src="script.js"></script>

</body>
</html>