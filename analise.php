<?php /* Página de Escolha de Análise de Maturidade Digital */ ?>
<?php include 'includes/header.php'; ?>

<main class="container" style="padding-top:140px;">
  <div style="max-width: 900px; margin: 0 auto; text-align: center;">
    <h1 class="section-title">Análise de Maturidade Digital</h1>
    <p class="section-subtitle">
      Descubra o nível de transformação digital do seu perfil ou da sua empresa com nossa análise completa e gratuita.
    </p>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2.5rem; margin-top: 3rem;">
      <!-- Card Análise Pessoal -->
      <div class="service-card" style="text-align: center; cursor: pointer; transition: transform 0.3s;" onclick="window.location.href='/analise-pessoal.php'">
        <div class="service-icon" style="margin: 0 auto 1.5rem;">
          <i data-lucide="user"></i>
        </div>
        <h3 style="margin-bottom: 1rem;">Análise Pessoal</h3>
        <p style="color: var(--text-secondary); margin-bottom: 1.5rem; line-height: 1.6;">
          Avalie suas habilidades digitais e descubra oportunidades de crescimento pessoal na era digital.
        </p>
        <div style="display: flex; align-items: center; justify-content: center; gap: 0.5rem; font-size: 0.9rem; color: var(--text-muted);">
          <i data-lucide="clipboard-list" style="width: 18px; height: 18px;"></i>
          <span>15 perguntas • 5 minutos</span>
        </div>
        <a href="/analise-pessoal.php" class="btn btn-primary" style="margin-top: 1.5rem; display: inline-block;">
          Iniciar Análise Pessoal
        </a>
      </div>

      <!-- Card Análise Empresarial -->
      <div class="service-card" style="text-align: center; cursor: pointer; transition: transform 0.3s;" onclick="window.location.href='/analise-empresarial.php'">
        <div class="service-icon" style="margin: 0 auto 1.5rem;">
          <i data-lucide="building-2"></i>
        </div>
        <h3 style="margin-bottom: 1rem;">Análise Empresarial</h3>
        <p style="color: var(--text-secondary); margin-bottom: 1.5rem; line-height: 1.6;">
          Avalie a maturidade digital da sua empresa e identifique áreas estratégicas de melhoria.
        </p>
        <div style="display: flex; align-items: center; justify-content: center; gap: 0.5rem; font-size: 0.9rem; color: var(--text-muted);">
          <i data-lucide="clipboard-list" style="width: 18px; height: 18px;"></i>
          <span>20 perguntas • 8 minutos</span>
        </div>
        <a href="/analise-empresarial.php" class="btn btn-primary" style="margin-top: 1.5rem; display: inline-block;">
          Iniciar Análise Empresarial
        </a>
      </div>
    </div>

    <!-- Benefícios -->
    <div style="margin-top: 4rem; padding: 2rem; background: var(--bg-card); border: 2px solid var(--border-color); border-radius: var(--radius);">
      <h3 style="margin-bottom: 1.5rem;">O que você receberá:</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; text-align: left;">
        <div style="display: flex; align-items: start; gap: 1rem;">
          <i data-lucide="check-circle" style="color: var(--rexia-green); min-width: 24px; margin-top: 2px;"></i>
          <span>Relatório personalizado por email</span>
        </div>
        <div style="display: flex; align-items: start; gap: 1rem;">
          <i data-lucide="check-circle" style="color: var(--rexia-green); min-width: 24px; margin-top: 2px;"></i>
          <span>Score de maturidade digital</span>
        </div>
        <div style="display: flex; align-items: start; gap: 1rem;">
          <i data-lucide="check-circle" style="color: var(--rexia-green); min-width: 24px; margin-top: 2px;"></i>
          <span>Recomendações práticas</span>
        </div>
        <div style="display: flex; align-items: start; gap: 1rem;">
          <i data-lucide="check-circle" style="color: var(--rexia-green); min-width: 24px; margin-top: 2px;"></i>
          <span>100% gratuito</span>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include 'includes/footer.php'; ?>
