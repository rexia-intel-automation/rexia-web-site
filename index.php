<?php
/* index.php — Home usando estrutura modular */
$page_title = 'Home';
include __DIR__ . '/partials/head.php';
include __DIR__ . '/partials/header.php';
?>

<main>
  <?php include __DIR__ . '/sections/home-schema.php'; ?>
  <?php include __DIR__ . '/sections/home-hero.php'; ?>
  <?php include __DIR__ . '/sections/home-servicos.php'; ?>
  <?php include __DIR__ . '/sections/home-cases.php'; ?>
  <?php include __DIR__ . '/sections/home-clientes.php'; ?>
  <?php include __DIR__ . '/sections/home-techstack.php'; ?>
  <?php include __DIR__ . '/sections/home-stats.php'; ?>
  <?php include __DIR__ . '/sections/home-depoimentos.php'; ?>
  <?php include __DIR__ . '/sections/home-cta.php'; ?>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>
