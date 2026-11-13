<?php
require_once 'dados-projetos.php';

$linkedin = 'https://www.linkedin.com/in/guilherme2006/';
$github = 'https://github.com/guifernandes06';

function e($valor)
{
    return htmlspecialchars((string) $valor, ENT_QUOTES, 'UTF-8');
}

$slug = $_GET['slug'] ?? '';

$projetoAtual = null;

foreach ($projetos as $projeto) {
    if ($projeto['slug'] === $slug) {
        $projetoAtual = $projeto;
        break;
    }
}

if (!$projetoAtual) {
    http_response_code(404);
    $titulo = 'Projeto não encontrado';
} else {
    $titulo = $projetoAtual['titulo'];
}

/* Preparar imagens do carrossel */
$imagensCarrossel = [];
$usaMockups = false;

if ($projetoAtual) {

    // Adicionar apenas as imagens da galeria
    foreach ($projetoAtual['galeria'] ?? [] as $imagem) {

        if (
            is_string($imagem) &&
            $imagem !== '' &&
            file_exists(__DIR__ . '/' . $imagem)
        ) {
            $imagensCarrossel[] = $imagem;
        }
    }

    // As imagens da galeria podem utilizar mockups
    $usaMockups = count($imagensCarrossel) > 1;
}

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= e($titulo) ?> | Guilherme Fernandes</title>

    <link rel="icon" type="image/svg+xml" href="assets/img/favicon.svg">

    <meta name="description" content="Portfólio pessoal de Guilherme Fernandes. Desenvolvimento Web e Multimédia.">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/fonts/inter.css">
</head>

<body>

    <header class="header">
        <nav class="navbar container">
            <a href="index.php" class="logo">GF<span>.</span></a>

            <div class="nav-links">
                <a href="index.php#inicio">Início</a>
                <a href="index.php#sobre">Sobre mim</a>
                <a href="projetos.php">Projetos</a>
                <a href="index.php#contacto">Contacto</a>
            </div>
        </nav>
    </header>

    <main>

        <?php if (!$projetoAtual): ?>

            <section class="section">
                <div class="container section-heading">
                    <span class="tag">ERRO 404</span>
                    <h2>Projeto não encontrado</h2>
                    <p>O projeto que procuras não existe ou já não está disponível.</p>

                    <a href="projetos.php" class="btn">
                        Ver todos os projetos
                    </a>
                </div>
            </section>

        <?php else: ?>

            <section class="project-detail">
                <div class="container">

                    <a href="projetos.php" class="back-link">
                        ← Voltar a todos os projetos
                    </a>

                    <div class="project-detail-header">

                        <span class="tag">
                            <?= e($projetoAtual['categoria']) ?>
                        </span>

                        <h1><?= e($projetoAtual['titulo']) ?></h1>

                        <p><?= e($projetoAtual['descricao']) ?></p>

                    </div>

                    <!-- CARROSSEL DE IMAGENS -->

                    <?php if (!empty($imagensCarrossel)): ?>

                        <section class="project-carousel" aria-label="Galeria do projeto">

                            <div class="project-carousel-track">

                                <?php foreach ($imagensCarrossel as $indice => $imagem): ?>

                                    <div class="project-carousel-slide" <?= $indice !== 0 ? 'hidden' : '' ?>>

                                        <?php
                                        // Imagens cujo nome contém "mobile" aparecem num smartphone
                                        $ehTelemovel = stripos(basename($imagem), 'mobile') !== false;
                                        ?>

                                        <?php if ($usaMockups && $ehTelemovel): ?>

                                            <div class="phone-frame">
                                                <img src="<?= e($imagem) ?>"
                                                    alt="<?= e($projetoAtual['titulo']) ?> - Imagem <?= $indice + 1 ?>">
                                            </div>

                                        <?php elseif ($usaMockups): ?>

                                            <div class="laptop-frame">
                                                <div class="laptop-screen">
                                                    <img src="<?= e($imagem) ?>"
                                                        alt="<?= e($projetoAtual['titulo']) ?> - Imagem <?= $indice + 1 ?>">
                                                </div>
                                                <div class="laptop-base"></div>
                                            </div>

                                        <?php else: ?>

                                            <img src="<?= e($imagem) ?>"
                                                alt="<?= e($projetoAtual['titulo']) ?> - Imagem <?= $indice + 1 ?>">

                                        <?php endif; ?>

                                    </div>

                                <?php endforeach; ?>

                            </div>

                            <?php if (count($imagensCarrossel) > 1): ?>

                                <button type="button" class="carousel-arrow carousel-prev" aria-label="Imagem anterior">
                                    &#10094;
                                </button>

                                <button type="button" class="carousel-arrow carousel-next" aria-label="Imagem seguinte">
                                    &#10095;
                                </button>

                                <div class="project-carousel-footer">

                                    <span class="carousel-counter">
                                        1 / <?= count($imagensCarrossel) ?>
                                    </span>

                                    <div class="carousel-dots">

                                        <?php foreach ($imagensCarrossel as $indice => $imagem): ?>

                                            <button type="button" class="carousel-dot <?= $indice === 0 ? 'active' : '' ?>"
                                                data-slide="<?= $indice ?>" aria-label="Ver imagem <?= $indice + 1 ?>"
                                                aria-current="<?= $indice === 0 ? 'true' : 'false' ?>"></button>

                                        <?php endforeach; ?>

                                    </div>

                                </div>

                            <?php endif; ?>

                        </section>

                    <?php else: ?>

                        <div class="project-cover project-cover-placeholder">
                            <?= e($projetoAtual['titulo']) ?>
                        </div>

                    <?php endif; ?>


                    <div class="project-detail-content">

                        <section class="project-description">
                            <span class="tag">SOBRE O PROJETO</span>

                            <h2>Objetivo</h2>

                            <p>
                                <?= e($projetoAtual['objetivo']) ?>
                            </p>
                        </section>


                        <section class="project-description">
                            <span class="tag">DESENVOLVIMENTO</span>

                            <h2>O que desenvolvi</h2>

                            <p>
                                <?= e($projetoAtual['desenvolvimento']) ?>
                            </p>
                        </section>


                        <?php if (!empty($projetoAtual['tecnologias'])): ?>

                            <section class="project-description">
                                <span class="tag">FERRAMENTAS</span>

                                <h2>Tecnologias utilizadas</h2>

                                <div class="project-skills">

                                    <?php foreach ($projetoAtual['tecnologias'] as $tecnologia): ?>

                                        <span class="skill">
                                            <?= e($tecnologia) ?>
                                        </span>

                                    <?php endforeach; ?>

                                </div>
                            </section>

                        <?php endif; ?>


                        <div class="project-actions">

                            <?php if (!empty($projetoAtual['github'])): ?>

                                <a href="<?= e($projetoAtual['github']) ?>" target="_blank" rel="noopener noreferrer"
                                    class="btn">
                                    Ver no GitHub ↗
                                </a>

                            <?php endif; ?>


                            <?php if (!empty($projetoAtual['demo'])): ?>

                                <a href="<?= e($projetoAtual['demo']) ?>" target="_blank" rel="noopener noreferrer"
                                    class="btn btn-outline-dark">
                                    Visitar projeto ↗
                                </a>

                            <?php endif; ?>

                        </div>

                    </div>

                    <div class="back-home">
                        <a href="projetos.php" class="btn btn-outline-dark">
                            ← Voltar a todos os projetos
                        </a>
                    </div>

                </div>
            </section>

        <?php endif; ?>

    </main>


    <footer class="footer">

        <div class="container footer-content">

            <a href="index.php#inicio" class="logo">GF<span>.</span></a>

            <p>
                © <?= date('Y') ?> Guilherme Fernandes.
                Todos os direitos reservados.
            </p>

            <div class="footer-socials">

                <a href="privacidade.php">
                    Política de Privacidade ↗
                </a>

                <a href="<?= e($linkedin) ?>" target="_blank" rel="noopener noreferrer">
                    LinkedIn ↗
                </a>

                <a href="<?= e($github) ?>" target="_blank" rel="noopener noreferrer">
                    GitHub ↗
                </a>

            </div>

        </div>

    </footer>

    <script src="assets/js/script.js"></script>

</body>

</html>