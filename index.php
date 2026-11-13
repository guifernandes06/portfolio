<?php
require_once 'dados-projetos.php';

$status = $_GET['status'] ?? '';

function e($valor)
{
    return htmlspecialchars((string) $valor, ENT_QUOTES, 'UTF-8');
}

$linkedin = 'https://www.linkedin.com/in/guilherme2006/';
$github = 'https://github.com/guifernandes06';
$cv = 'assets/eu/cv-guilherme-fernandes.pdf';
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Guilherme Fernandes | Portfólio</title>

    <link rel="icon" type="image/svg+xml" href="assets/img/favicon.svg">

    <meta name="description" content="Portfólio pessoal de Guilherme Fernandes. Desenvolvimento Web e Multimédia.">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="assets/fonts/inter.css">
</head>

<body>

    <!-- MENU -->
    <header class="header">
        <nav class="navbar container">

            <a href="#inicio" class="logo">GF<span>.</span></a>

            <div class="nav-links">
                <a href="#inicio">Início</a>
                <a href="#sobre">Sobre mim</a>
                <a href="#projetos">Projetos</a>
                <a href="#contacto">Contacto</a>
            </div>

        </nav>
    </header>


    <main>

        <!-- INÍCIO -->
        <section id="inicio" class="hero">

            <div class="container hero-content">

                <div class="hero-text">

                    <span class="tag">PORTFÓLIO PESSOAL</span>

                    <h1>
                        Olá, sou o <span>Guilherme Fernandes.</span>
                    </h1>

                    <h2>Desenvolvimento Web & Multimédia</h2>

                    <p>
                        Gosto de tecnologia, programação e de desenvolver projetos
                        que me permitam aprender, evoluir e colocar as minhas
                        competências em prática.
                    </p>

                    <div class="hero-buttons">
                        <a href="#projetos" class="btn">Ver projetos</a>

                        <a href="#contacto" class="btn btn-outline">
                            Entrar em contacto
                        </a>
                    </div>

                    <div class="social-links">

                        <?php if ($linkedin !== ''): ?>
                            <a href="<?= e($linkedin) ?>" target="_blank" rel="noopener noreferrer">
                                LinkedIn ↗
                            </a>
                        <?php endif; ?>

                        <?php if ($github !== ''): ?>
                            <a href="<?= e($github) ?>" target="_blank" rel="noopener noreferrer">
                                GitHub ↗
                            </a>
                        <?php endif; ?>

                        <a href="<?= e($cv) ?>" download>
                            Descarregar CV ↓
                        </a>

                    </div>

                </div>


                <div class="hero-card">

                    <img src="assets/eu/imagem (2).jpg" alt="Fotografia de Guilherme Fernandes" class="hero-photo">

                    <p>Programador Web</p>

                </div>

            </div>

        </section>


        <!-- SOBRE MIM -->
        <!-- O MEU PERCURSO -->
        <section id="sobre" class="section journey-page">
            <div class="container">

                <div class="section-heading">
                    <span class="tag">CONHECE-ME MELHOR</span>
                    <h2>O meu percurso</h2>
                    <p>Formação, experiências e projetos que contribuíram para o meu desenvolvimento.</p>
                </div>

                <div class="about-intro">
                    <h3>Quem sou eu?</h3>
                    <p>
                        Sou uma pessoa responsável, dedicada e com vontade de aprender.
                        Tenho interesse pela tecnologia, programação e desenvolvimento
                        de soluções digitais. Ao longo do meu percurso, tive a oportunidade
                        de adquirir experiência em diferentes contextos profissionais e
                        participar em projetos internacionais através do programa Erasmus+.
                    </p>
                </div>

                <!-- FORMAÇÃO ACADÉMICA -->
                <div class="journey-section">

                    <div class="journey-heading">
                        <span class="tag">EDUCAÇÃO</span>
                        <h3>Formação académica</h3>
                    </div>

                    <div class="journey-grid">

                        <article class="journey-card">

                            <span class="journey-date">2024 — 2026</span>

                            <h4>Desenvolvimento Web e Multimédia</h4>

                            <div class="journey-institution">
                                Instituto Politécnico do Cávado e do Ave (IPCA)
                            </div>

                            <p>
                                Formação especializada na conceção e desenvolvimento de aplicações web e soluções
                                multimédia. Aprofundei conhecimentos de desenvolvimento Front-End e Back-End,
                                JavaScript, PHP e bases de dados relacionais. Desenvolvi também competências em design
                                de interfaces (UI/UX), produção multimédia e utilização de plataformas CMS para criação
                                de websites e lojas online.
                            </p>

                            <div class="journey-tags">
                                <span>HTML/CSS</span>
                                <span>JAVASCRIPT</span>
                                <span>PHP</span>
                                <span>MYSQL</span>
                                <span>WORDPRESS</span>
                                <span>UI/UX DESIGN</span>
                                <span>MULTIMÉDIA</span>
                            </div>

                        </article>


                        <article class="journey-card">

                            <span class="journey-date">2021 — 2024</span>

                            <h4>Gestão e Programação de Sistemas Informáticos</h4>

                            <div class="journey-institution">
                                Escola Profissional de Braga (EPB)
                            </div>

                            <p>
                                Formação focada no desenvolvimento de software e na gestão de sistemas informáticos. Ao
                                longo do curso, adquiri conhecimentos de programação, criação de aplicações, bases de
                                dados, configuração de redes e administração de sistemas operativos. Desenvolvi também
                                competências na instalação, manutenção e diagnóstico de equipamentos informáticos.
                            </p>

                            <div class="journey-tags">
                                <span>PROGRAMMING</span>
                                <span>C++</span>
                                <span>JAVA</span>
                                <span>PHP</span>
                                <span>SQL</span>
                                <span>NETWORKS</span>
                                <span>WINDOWS / LINUX</span>
                            </div>

                        </article>

                        <article class="journey-card">

                            <span class="journey-date">2019 — 2024</span>

                            <h4>Nível B2 - Inglês</h4>

                            <div class="journey-institution">
                                Instituto Britânico de Braga (IBB)
                            </div>

                            <p>
                                Formação de Inglês de nível B2 (Upper-Intermediate), realizada no Instituto Britânico de
                                Braga, um centro de preparação oficial para exames Cambridge English. Desenvolvimento de
                                competências de comunicação oral e escrita, compreensão e interpretação de conteúdos em
                                inglês.
                            </p>

                            <div class="journey-tags">
                                <span>B2 ENGLISH</span>
                                <span>CAMBRIDGE PREPARATION</span>
                            </div>

                        </article>

                    </div>
                </div>


                <!-- EXPERIÊNCIA PROFISSIONAL -->
                <div class="journey-section">

                    <div class="journey-heading">
                        <span class="tag">EXPERIÊNCIA PROFISSIONAL</span>
                        <h3>Estágios profissionais</h3>
                    </div>

                    <div class="journey-grid">

                        <article class="journey-card">

                            <span class="journey-date">01/02/2026 — 10/07/2026</span>

                            <h4>Level Academy</h4>

                            <div class="journey-institution">
                                Estágio · Hamrun, Malta · Erasmus+
                            </div>

                            <p>
                                Participação em projetos internacionais nas áreas
                                de desenvolvimento web e design.
                            </p>

                            <div class="journey-tags">
                                <span>Desenvolvimento Web</span>
                                <span>Design</span>
                                <span>Erasmus+</span>
                            </div>

                        </article>


                        <article class="journey-card">

                            <span class="journey-date">13/05/2024 — 26/07/2024</span>

                            <h4>SMLPort Global Solutions</h4>

                            <div class="journey-institution">
                                Estágio · Braga, Portugal
                            </div>

                            <p>
                                Desenvolvimento de aplicações web, integração de
                                bases de dados, gestão de servidores e suporte técnico.
                            </p>

                            <div class="journey-tags">
                                <span>HTML</span>
                                <span>CSS</span>
                                <span>PHP</span>
                                <span>MySQL</span>
                                <span>Composer</span>
                                <span>PHPMailer</span>
                            </div>

                        </article>


                        <article class="journey-card">

                            <span class="journey-date">06/06/2023 — 25/07/2023</span>

                            <h4>Hellas Web</h4>

                            <div class="journey-institution">
                                Estágio · Atenas, Grécia · Erasmus+
                            </div>

                            <p>
                                Desenvolvimento de websites com WordPress e criação
                                de 15 websites durante o período de estágio.
                            </p>

                            <div class="journey-tags">
                                <span>WordPress</span>
                                <span>Desenvolvimento Web</span>
                                <span>Erasmus+</span>
                            </div>

                        </article>

                    </div>
                </div>

            </div>
        </section>

        <!-- PROJETOS -->
        <section id="projetos" class="section">

            <div class="container">

                <div class="section-heading">

                    <span class="tag">O MEU TRABALHO</span>

                    <h2>Projetos em destaque</h2>

                    <p>
                        Alguns dos projetos que desenvolvi ao longo do meu percurso.
                    </p>

                </div>


                <div class="projects-grid">

                    <?php foreach (array_slice($projetos, 0, 3) as $projeto): ?>

                        <article class="project-card">

                            <a class="project-image-link" href="projeto.php?slug=<?= urlencode($projeto['slug']) ?>">

                                <?php if (
                                    !empty($projeto['imagem']) &&
                                    file_exists(__DIR__ . '/' . $projeto['imagem'])
                                ): ?>

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
                                Ver projeto →
                            </a>

                        </article>

                    <?php endforeach; ?>

                </div>


                <div class="back-home">

                    <a href="projetos.php" class="btn">
                        Ver todos os projetos →
                    </a>

                </div>

            </div>


        </section>


        <!-- CONTACTO -->

        <section id="contacto" class="section section-alt">
            <div class="container">

                <div class="section-heading">
                    <h2>Contacto</h2>
                    <p>Vamos conversar?</p>
                </div>

                <div class="contact-content">

                    <!-- Informações de contacto -->
                    <div class="contact-info">

                        <h3>Entra em contacto</h3>

                        <p>
                            Se tiveres alguma questão ou quiseres falar comigo,
                            podes utilizar os seguintes contactos.
                        </p>

                        <div class="contact-detail">
                            <span>Email</span>
                            <a href="mailto:guifernandes3001@gmail.com">
                                guifernandes3001@gmail.com
                            </a>
                        </div>

                        <div class="contact-detail">
                            <span>Telemóvel</span>
                            <a href="tel:+351965723608">
                                +351 965 723 608
                            </a>
                        </div>

                        <?php if ($status === 'sucesso'): ?>
                            <div class="form-notification form-success" role="status" id="formNotification">
                                <span>Mensagem enviada com sucesso!</span>
                                <button type="button" class="notification-close" aria-label="Fechar notificação">
                                    &times;
                                </button>
                            </div>

                        <?php elseif ($status === 'erro'): ?>
                            <div class="form-notification form-error" role="alert" id="formNotification">
                                <span>Não foi possível enviar a mensagem. Tenta novamente.</span>
                                <button type="button" class="notification-close" aria-label="Fechar notificação">
                                    &times;
                                </button>
                            </div>
                        <?php endif; ?>

                    </div>

                    <!-- Formulário -->
                    <form action="contacto.php" method="POST" class="contact-form" autocomplete="off">

                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" maxlength="100" autocomplete="off" required>

                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" maxlength="254" autocomplete="off" required>

                        <label for="mensagem">Mensagem</label>
                        <textarea id="mensagem" name="mensagem" rows="5" maxlength="5000" autocomplete="off"
                            required></textarea>

                        <button type="submit" class="btn">
                            Enviar mensagem
                        </button>

                    </form>

                </div>
            </div>
        </section>
    </main>

    <!-- seta main page -->
    <a href="#inicio" class="back-to-top" id="backToTop" aria-label="Voltar ao início" title="Voltar ao início">

        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">

            <path d="M12 19V5" />
            <path d="M5 12L12 5L19 12" />

        </svg>

    </a>

    <!-- RODAPÉ -->
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

    <script src="assets/js/script.js"></script>

</body>

</html>