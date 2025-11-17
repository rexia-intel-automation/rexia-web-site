<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="/assets/img/favicon.png" />
    <!-- CSS principal -->
    <link rel="stylesheet" href="/assets/css/main.css?v=5" />
    <!-- CSS extra do blog -->
    <link rel="stylesheet" href="/assets/css/blog.css?v=5" />
    <!-- Ícones Lucide -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
</head>
<body>
    <!-- Botões flutuantes -->
    <a href="https://wa.me/5561996108445" class="whatsapp-button" target="_blank" rel="noopener noreferrer">
        <i data-lucide="message-circle"></i>
    </a>
    <button class="theme-toggle" id="theme-toggle" aria-label="Alternar tema">
        <i data-lucide="sun"></i>
    </button>
    <!-- BG -->
    <div class="hex-bg">
        <div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div>
    </div>
    <!-- Header -->
    <header>
        <nav>
            <a href="/" class="logo">
                <img src="/assets/img/logo-dark-bg.png" alt="RexIA" class="logo-dark" />
                <img src="/assets/img/logo-light-bg.png" alt="RexIA" class="logo-light" />
            </a>
            <button class="menu-toggle" aria-label="Abrir menu" aria-expanded="false" aria-controls="mobile-menu">
                <i data-lucide="menu"></i>
            </button>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/#servicos">Serviços</a></li>
                <li><a href="/#cases">Cases</a></li>
                <li><a href="/portfolio.php">Portfólio</a></li>
                <li><a href="/#techstack">Tech Stack</a></li>
                <li><a href="/#depoimentos">Depoimentos</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/contato.php">Contato</a></li>
            </ul>
        </nav>
    </header>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu" hidden>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/#servicos">Serviços</a></li>
            <li><a href="/#cases">Cases</a></li>
            <li><a href="/portfolio.php">Portfólio</a></li>
            <li><a href="/#clientes">Clientes</a></li>
            <li><a href="/#techstack">Tech Stack</a></li>
            <li><a href="/#depoimentos">Depoimentos</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/contato.php">Contato</a></li>
        </ul>
    </div>