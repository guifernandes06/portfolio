<?php
require_once 'dados-projetos.php';

$linkedin = 'https://www.linkedin.com/in/guilherme2006/';
$github = 'https://github.com/guifernandes06';

function e($valor)
{
    return htmlspecialchars((string) $valor, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Projetos | Guilherme Fernandes </title>

    <link rel="icon" type="image/svg+xml" href="assets/img/favicon.svg">

    <meta name="description" content="Portfólio pessoal de Guilherme Fernandes. Desenvolvimento Web e Multimédia.">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
        <section class="section projects-page">
            <div class="container">

                <div class="section-heading">
                    <span class="tag">O MEU TRABALHO</span>
                    <h2>Todos os projetos</h2>
                    <p>Conhece alguns dos projetos que desenvolvi ao longo do meu percurso.</p>
                </div>

                <div class="projects-grid">

                    <?php foreach ($projetos as $projeto): ?>

                        <article class="project-card">

                            <a class="project-image-link" href="projeto.php?slug=<?= urlencode($projeto['slug']) ?>">

                                <?php if (!empty($projeto['imagem']) && file_exists(__DIR__ . '/' . $projeto['imagem'])): ?>
                                    <img src="<?= e($projeto['imagem']) ?>" alt="<?= e($projeto['titulo']) ?>"
                                        class="project-image">
                                <?php else: ?>
                                    <div class="project-placeholder">
                                        <span><?= e($projeto['titulo']) ?></span>
                                    </div>
                                <?php endif; ?>

                            </a>

                            <div class="project-number">
                                <?= e($projeto['categoria']) ?>
                            </div>

                            <h3><?= e($projeto['titulo']) ?></h3>

                            <p><?= e($projeto['descricao']) ?></p>

                            <a href="projeto.php?slug=<?= urlencode($projeto['slug']) ?>" class="project-link">
                                Ver projeto <span>→</span>
                            </a>

                        </article>

                    <?php endforeach; ?>

                </div>

                <div class="back-home">
                    <a href="index.php" class="btn btn-outline-dark">
                        ← Voltar à página inicial
                    </a>
                </div>

            </div>
        </section>
    </main>

    <footer class="footer">

        <div class="container footer-content">

            <a href="index.php#inicio" class="logo">GF<span>.</span></a>

            <p>
                © <?= date('Y') ?> Guilherme Fernandes.
                Todos os direitos reservados.
            </p>

            <div class="footer-socials">

                <a href="privacidade.php" target="_blank" rel="noopener noreferrer">Política de Privacidade ↗</a>

                <?php if (!empty($linkedin)): ?>
                    <a href="<?= e($linkedin) ?>" target="_blank" rel="noopener noreferrer">
                        LinkedIn ↗
                    </a>
                <?php endif; ?>

                <?php if (!empty($github)): ?>
                    <a href="<?= e($github) ?>" target="_blank" rel="noopener noreferrer">
                        GitHub ↗
                    </a>
                <?php endif; ?>

            </div>

        </div>

    </footer>

</body>

</html>