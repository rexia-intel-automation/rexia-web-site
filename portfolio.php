<?php
/* portfolio.php — Página de Portfólio RexIA */
include 'header.php';
?>

<main>
  <section class="cases" id="portfolio">
    <div class="container">
      <h1 class="section-title">Portfólio</h1>
      <p class="section-subtitle">
        Estudos de caso e entregas reais de automação + IA aplicada — sem expor dados sensíveis nem identificar clientes.
      </p>

      <div class="cases-grid">
        <!-- CARD 1 -->
        <div class="case-card">
          <div class="case-header">
            <div class="case-icon"><i data-lucide="pill"></i></div>
            <div class="case-meta">
              <div class="case-industry">Farmacêutico</div>
              <h3 class="case-title">Backoffice invisível com n8n</h3>
            </div>
          </div>
          <p class="case-description">
            Orquestração completa de automações entre CRM, ERP, planilhas e WhatsApp.
            Redução de tarefas manuais repetitivas e padronização do atendimento.
          </p>
          <div class="case-results">
            <div class="case-result">
              <div class="case-result-value">-60%</div>
              <div class="case-result-label">Tarefas manuais</div>
            </div>
            <div class="case-result">
              <div class="case-result-value">4 sem.</div>
              <div class="case-result-label">Go-live</div>
            </div>
          </div>
        </div>

        <!-- CARD 2 -->
        <div class="case-card">
          <div class="case-header">
            <div class="case-icon"><i data-lucide="headphones"></i></div>
            <div class="case-meta">
              <div class="case-industry">Serviços</div>
              <h3 class="case-title">Agente inteligente de atendimento</h3>
            </div>
          </div>
          <p class="case-description">
            Chatbot em WhatsApp com IA generativa, base de conhecimento própria
            e handoff fluido para humanos. Operação 24/7 com filas e regras de negócio.
          </p>
          <div class="case-results">
            <div class="case-result">
              <div class="case-result-value">+3x</div>
              <div class="case-result-label">Capacidade de atendimento</div>
            </div>
            <div class="case-result">
              <div class="case-result-value">-40%</div>
              <div class="case-result-label">Tempo médio de resposta</div>
            </div>
          </div>
        </div>

        <!-- CARD 3 -->
        <div class="case-card">
          <div class="case-header">
            <div class="case-icon"><i data-lucide="bar-chart-3"></i></div>
            <div class="case-meta">
              <div class="case-industry">Diretoria / Gestão</div>
              <h3 class="case-title">Data analytics para decisão rápida</h3>
            </div>
          </div>
          <p class="case-description">
            Consolidação de dados de múltiplas fontes em painéis únicos com métricas
            de operação, vendas, funil e performance de campanhas em tempo quase real.
          </p>
          <div class="case-results">
            <div class="case-result">
              <div class="case-result-value">1 dia</div>
              <div class="case-result-label">Fechamento de indicadores</div>
            </div>
            <div class="case-result">
              <div class="case-result-value">+20%</div>
              <div class="case-result-label">Precisão dos relatórios</div>
            </div>
          </div>
        </div>

        <!-- CARD 4 -->
        <div class="case-card">
          <div class="case-header">
            <div class="case-icon"><i data-lucide="file-text"></i></div>
            <div class="case-meta">
              <div class="case-industry">Jurídico / Comercial</div>
              <h3 class="case-title">Esteira automática de documentos</h3>
            </div>
          </div>
          <p class="case-description">
            Geração, revisão e registro de propostas, contratos e relatórios com IA,
            trilhas de aprovação e versionamento controlado em cada etapa.
          </p>
          <div class="case-results">
            <div class="case-result">
              <div class="case-result-value">-70%</div>
              <div class="case-result-label">Tempo para emitir docs</div>
            </div>
            <div class="case-result">
              <div class="case-result-value">0</div>
              <div class="case-result-label">Perda de versão</div>
            </div>
          </div>
        </div>

        <!-- CARD 5 -->
        <div class="case-card">
          <div class="case-header">
            <div class="case-icon"><i data-lucide="stadium"></i></div>
            <div class="case-meta">
              <div class="case-industry">Entretenimento / Arena</div>
              <h3 class="case-title">Funil omnichannel com IA</h3>
            </div>
          </div>
          <p class="case-description">
            Integração entre site, app, redes sociais, e-mail e WhatsApp,
            com agentes inteligentes qualificando leads e disparando ações automáticas.
          </p>
          <div class="case-results">
            <div class="case-result">
              <div class="case-result-value">+35%</div>
              <div class="case-result-label">Conversão em vendas</div>
            </div>
            <div class="case-result">
              <div class="case-result-value">-25%</div>
              <div class="case-result-label">Custo por lead</div>
            </div>
          </div>
        </div>

        <!-- CARD 6 -->
        <div class="case-card">
          <div class="case-header">
            <div class="case-icon"><i data-lucide="graduation-cap"></i></div>
            <div class="case-meta">
              <div class="case-industry">Educação corporativa</div>
              <h3 class="case-title">Academia de IA aplicada</h3>
            </div>
          </div>
          <p class="case-description">
            Programas de formação em IA e automação para times internos,
            com trilhas práticas focadas em ganho de produtividade e ROI direto.
          </p>
          <div class="case-results">
            <div class="case-result">
              <div class="case-result-value">+50%</div>
              <div class="case-result-label">Adoção de IA no time</div>
            </div>
            <div class="case-result">
              <div class="case-result-value">NPS 9,4</div>
              <div class="case-result-label">Satisfação dos alunos</div>
            </div>
          </div>
        </div>
      </div>

          <!-- CTA padrão RexIA -->
      <section class="cta" id="contato">
        <div class="container">
          <div class="cta-box">
            <h2>Pronto para automatizar?</h2>
            <p>Agende uma avaliação gratuita e descubra como transformar seu negócio.</p>
            <a href="/contato" class="btn btn-primary">
              Fale com a RexIA
              <span class="cta-badge">Grátis • 30 min</span>
            </a>
          </div>
        </div>
      </section>
    </main>

<?php include 'footer.php'; ?>
