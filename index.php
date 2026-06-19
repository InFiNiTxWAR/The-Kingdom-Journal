<?php
require_once "dados.php";
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $nome_jornal ?> | Edição Especial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <header class="cabecalho-jornal text-center py-4">
            <p class="data-edicao mb-2"><?= $cidade_data ?></p>
            <h1 class="titulo-jornal display-4 fw-bold"><?= $nome_jornal ?></h1>
            <h4 class="subtitulo-jornal text-muted"><?= $subtitulo ?></h4>
            <div class="info-equipe mt-3">
                <p class="mb-1"><strong>Equipe Editorial:</strong> <?= $alunos ?></p>
                <p>
                    <?php foreach ($professores as $professor): ?>
                        <span class="badge bg-primary me-1">
                            <?= $professor["disciplina"] ?>: <?= $professor["nome"] ?>
                        </span>
                    <?php endforeach; ?>
                </p>
            </div>
        </header>

        <section class="banner-principal mb-5">
            <img src="img/london.jpg" class="img-fluid rounded shadow w-100 banner-topo"
                alt="Vista panorâmica de Londres com o Big Ben e o Parlamento ao fundo">
        </section>

        <section class="secao-jornal row align-items-center mb-5">
            <div class="col-md-6">
                <h2 class="titulo-secao"><?= $localizacao["titulo"] ?></h2>
                <p class="texto-secao"><?= $localizacao["texto"] ?></p>
            </div>
            <div class="col-md-6">
                <figure class="text-center">
                    <img src="<?= $localizacao["imagem"] ?>" class="img-fluid rounded shadow"
                        alt="Mapa geográfico do Reino Unido destacando Inglaterra, Escócia, País de Gales e Irlanda do Norte">
                    <figcaption class="text-muted small mt-2">Mapa político do Reino Unido</figcaption>
                </figure>
            </div>
        </section>

        <hr class="divisor-secao">

        <section class="secao-jornal row mb-5">
            <div class="col-md-6">
                <h2 class="titulo-secao"><?= $influencia["titulo"] ?></h2>
                <p class="texto-secao"><?= $influencia["texto"] ?></p>
            </div>
            <div class="col-md-6">
                <h2 class="titulo-secao"><?= $sotaque["titulo"] ?></h2>
                <p class="texto-secao"><?= $sotaque["texto"] ?></p>
            </div>
        </section>

        <hr class="divisor-secao">

        <section class="secao-jornal row align-items-center mb-5">
            <div class="col-md-6">
                <h2 class="titulo-secao"><?= $historia["titulo"] ?></h2>
                <p class="texto-secao"><?= $historia["texto"] ?></p>
            </div>
            <div class="col-md-6">
                <figure class="text-center">
                    <img src="<?= $historia["imagem"] ?>" class="img-fluid rounded shadow"
                        alt="Ilustração histórica do Reino Unido mostrando marcos importantes">
                    <figcaption class="text-muted small mt-2">Marcos históricos britânicos</figcaption>
                </figure>
            </div>
        </section>

        <hr class="divisor-secao">

        <section class="secao-jornal mb-5">
            <h2 class="titulo-secao text-center mb-4">
                <i class="bi bi-geo-alt-fill text-danger"></i> Pontos Turísticos
            </h2>

            <div id="carouselTurismo" class="carousel slide shadow rounded" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <?php foreach ($turismo as $index => $item): ?>
                        <button type="button" data-bs-target="#carouselTurismo" data-bs-slide-to="<?= $index ?>"
                            class="<?= $index == 0 ? 'active' : '' ?>" aria-label="Slide <?= $index + 1 ?>">
                        </button>
                    <?php endforeach; ?>
                </div>

                <div class="carousel-inner rounded">
                    <?php foreach ($turismo as $index => $item): ?>
                        <div class="carousel-item <?= $index == 0 ? 'active' : '' ?>">
                            <img src="<?= $item["imagem"] ?>" class="d-block w-100 turismo-img" alt="<?= $item["nome"] ?>">
                            <div class="carousel-caption d-none d-md-block">
                                <h5><?= $item["nome"] ?></h5>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselTurismo"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselTurismo"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>

            <div class="info-turismo mt-4 p-4 border rounded shadow-sm bg-light" aria-live="polite">
                <h4 id="tituloTurismo" class="fw-bold text-primary"></h4>
                <p id="textoTurismo" class="mb-0"></p>
            </div>
        </section>

        <hr class="divisor-secao">

        <section class="secao-jornal row align-items-center mb-5">
            <div class="col-md-6">
                <h2 class="titulo-secao"><?= $gastronomia["titulo"] ?></h2>
                <p class="texto-secao"><?= $gastronomia["texto"] ?></p>
            </div>
            <div class="col-md-6">
                <figure class="text-center">
                    <img src="<?= $gastronomia["imagem"] ?>" class="img-fluid rounded shadow"
                        alt="Fish and Chips, prato tradicional britânico">
                    <figcaption class="text-muted small mt-2">Fish and Chips - Clássico britânico</figcaption>
                </figure>
            </div>
        </section>

        <hr class="divisor-secao">

        <section class="secao-jornal row mb-5">
            <div class="col-md-6">
                <h2 class="titulo-secao">
                    <i class="bi bi-lightbulb-fill text-warning"></i> Curiosidades Culturais
                </h2>
                <ul class="lista-personalizada">
                    <?php foreach ($curiosidades as $item): ?>
                        <li class="mb-2"><?= $item ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-6">
                <h2 class="titulo-secao">
                    <i class="bi bi-info-circle-fill text-info"></i> Fatos Rápidos
                </h2>
                <ul class="lista-personalizada">
                    <?php foreach ($fatos as $item): ?>
                        <li class="mb-2"><?= $item ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>

        <hr class="divisor-secao">

        <section class="secao-jornal mb-5">
            <h2 class="titulo-secao">
                <i class="bi bi-book-fill text-success"></i> Vocabulário Específico
            </h2>
            <p class="text-muted mb-4">Palavras e expressões essenciais do inglês britânico para o dia a dia:</p>
            <div class="row g-3">
                <?php foreach ($vocabulario as $item):
                    $partes = explode(" — ", $item);
                    $palavra = $partes[0] ?? '';
                    $traducao = $partes[1] ?? '';
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="vocabulario-card">
                            <span class="vocabulario-palavra"><?= $palavra ?></span>
                            <span class="vocabulario-traducao"><?= $traducao ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <hr class="divisor-secao">

        <section class="secao-jornal mb-5">
            <h2 class="titulo-secao">
                <i class="bi bi-chat-quote-fill text-secondary"></i> Expressões Idiomáticas
            </h2>
            <div class="row g-3">
                <?php foreach ($expressoes as $item): ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <p class="card-text fw-bold"><?= $item ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <hr class="divisor-secao">

        <section class="secao-jornal mb-5">
            <h2 class="titulo-secao">
                <i class="bi bi-translate text-primary"></i> 20 Palavras com Variação Linguística
            </h2>
            <p class="text-muted">Comparação entre o inglês britânico e o inglês americano:</p>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Inglês Britânico</th>
                            <th>Inglês Americano</th>
                            <th>Tradução</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $traducoes = [
                            "Apartamento",
                            "Elevador",
                            "Férias / Feriado",
                            "Fila",
                            "Biscoito",
                            "Lixo",
                            "Doces / Balas",
                            "Correio",
                            "Filme",
                            "Calçada",
                            "Caminhão",
                            "Lanterna",
                            "Fralda",
                            "Calças",
                            "Suéter",
                            "Batatas fritas (palito)",
                            "Batatas fritas (pacote)",
                            "Farmácia",
                            "Estacionamento",
                            "Metrô"
                        ];
                        foreach ($variacoes as $index => $item):
                            $partes = explode(" → ", $item);
                            ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><strong><?= $partes[0] ?? '' ?></strong></td>
                                <td><?= $partes[1] ?? '' ?></td>
                                <td class="text-muted"><?= $traducoes[$index] ?? '' ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <hr class="divisor-secao">

      <section class="secao-jornal mb-5">
    <h2 class="titulo-secao">
        <i class="bi bi-play-btn-fill text-danger"></i>
        <?= $video["titulo"] ?>
    </h2>

    <p><?= $video["descricao"] ?></p>

    <div class="ratio ratio-16x9">
        <?php if ($video["tipo"] === "youtube"): ?>

            <?php
            $videoId = "";

            if (preg_match('/(?:youtu\.be\/|youtube\.com\/watch\?v=)([^&\?\/]+)/', $video["link"], $matches)) {
                $videoId = $matches[1];
            }
            ?>

            <iframe
                class="rounded shadow"
                src="https://www.youtube.com/embed/<?= $videoId ?>"
                title="<?= $video["titulo"] ?>"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe>

        <?php else: ?>

            <video class="rounded shadow" controls>
                <source src="<?= $video["arquivo"] ?>" type="video/mp4">
                Seu navegador não suporta a reprodução de vídeos.
            </video>

        <?php endif; ?>
    </div>
</section>
        <footer class="rodape-jornal">
            <p><strong><?= $nome_jornal ?></strong></p>
            <p>Trabalho Interdisciplinar de Inglês e PAM/PW</p>
            <p>ETEC Sales Gomes - Tatuí/SP &copy; 2026</p>
        </footer>

    </div>

    <script>
        const turismoDados = <?= json_encode($turismo, JSON_UNESCAPED_UNICODE); ?>;

        function atualizarInfoTurismo(index) {
            const item = turismoDados[index];
            if (item) {
                document.getElementById("tituloTurismo").innerText = item.nome;
                document.getElementById("textoTurismo").innerText = item.texto;
            }
        }

        atualizarInfoTurismo(0);

        const carouselTurismo = document.getElementById("carouselTurismo");
        carouselTurismo.addEventListener("slid.bs.carousel", function (event) {
            atualizarInfoTurismo(event.to);
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>