<?php
/* index.php — Home usando includes */
$page_title = 'Home';
include 'includes/header.php';
?>

<!-- JSON-LD (ok ficar no body) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"O que a RexIA faz?","acceptedAnswer":{"@type":"Answer","text":"A RexIA implementa automações com n8n, agentes de IA, chatbots, integrações de APIs e dashboards de analytics. Foco em ROI."}},
    {"@type":"Question","name":"Como funciona a avaliação gratuita?","acceptedAnswer":{"@type":"Answer","text":"Conversa de 30 min para mapear processos, identificar gargalos e estimar ROI."}},
    {"@type":"Question","name":"Quais tecnologias a RexIA utiliza?","acceptedAnswer":{"@type":"Answer","text":"n8n, OpenAI API, Bubble, Supabase, PostgreSQL, Make.com, WhatsApp Cloud API, PowerBI, Vercel e outras."}},
    {"@type":"Question","name":"Quanto tempo leva uma implementação?","acceptedAnswer":{"@type":"Answer","text":"1–2 semanas para automações simples; 4–8 semanas para projetos com múltiplas integrações."}}
  ]
}
</script>

<main>
  <!-- Hero -->
  <section class="hero" id="home">
    <div class="container">
      <div class="hero-content">
        <div class="hero-badge">Automação + IA</div>
        <h1>Transforme seu<br>negócio com<br><span class="highlight">inteligência</span></h1>
        <p class="hero-description">Soluções de automação e IA sob medida para empresas que querem crescer com eficiência.</p>
        <div class="btn-group">
          <a href="/analise" class="btn btn-primary">Fale Conosco</a>
          <a href="#servicos" class="btn btn-secondary">Nossos Serviços</a>
        </div>
      </div>
    </div>
    <div class="hero-hex"></div>
  </section>

  <!-- Services -->
  <section class="services" id="servicos">
    <div class="container">
      <h2 class="section-title">Nossos Serviços</h2>
      <p class="section-subtitle">Tudo o que você precisa para automatizar e escalar</p>

      <div class="services-grid">
        <div class="service-card">
          <div class="service-icon"><i data-lucide="brain"></i></div>
          <h3>Consultoria IA</h3>
          <p>Estratégias de IA para otimizar processos e aumentar resultados.</p>
        </div>
        <div class="service-card">
          <div class="service-icon"><i data-lucide="zap"></i></div>
          <h3>Automação n8n</h3>
          <p>Workflows que conectam ferramentas e eliminam tarefas repetitivas.</p>
        </div>
        <div class="service-card">
          <div class="service-icon"><i data-lucide="bar-chart-3"></i></div>
          <h3>Data Analytics</h3>
          <p>Dashboards e análises que viram decisão.</p>
        </div>
        <div class="service-card">
          <div class="service-icon"><i data-lucide="bot"></i></div>
          <h3>Chatbots IA</h3>
          <p>Atendimento 24/7 com agentes inteligentes.</p>
        </div>
        <div class="service-card">
          <div class="service-icon"><i data-lucide="link"></i></div>
          <h3>Integrações</h3>
          <p>Ecossistema sincronizado e eficiente.</p>
        </div>
        <div class="service-card">
          <div class="service-icon"><i data-lucide="graduation-cap"></i></div>
          <h3>Treinamentos</h3>
          <p>Workshops práticos de automação e IA aplicada.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Cases -->
  <section class="cases" id="cases">
    <div class="container">
      <h2 class="section-title">Cases de Sucesso</h2>
      <p class="section-subtitle">Resultados reais, impacto mensurável</p>

      <div class="cases-grid">
        <div class="case-card">
          <div class="case-header">
            <div class="case-icon"><i data-lucide="pill"></i></div>
            <div class="case-meta">
              <div class="case-industry">Farmacêutico</div>
              <h3 class="case-title">Automação de Atendimento</h3>
            </div>
          </div>
          <p class="case-description">Workflow n8n com WhatsApp, planilhas e sistema interno. Chatbot IA classifica e roteia.</p>
          <div class="case-results">
            <div class="case-result"><div class="case-result-value">70%</div><div class="case-result-label">Redução de Tempo</div></div>
            <div class="case-result"><div class="case-result-value">30 dias</div><div class="case-result-label">Implementação</div></div>
          </div>
        </div>

        <div class="case-card">
          <div class="case-header">
            <div class="case-icon"><i data-lucide="headphones"></i></div>
            <div class="case-meta">
              <div class="case-industry">Atendimento</div>
              <h3 class="case-title">Agente Inteligente</h3>
            </div>
          </div>
          <p class="case-description">Chatbot com IA generativa para suporte ao cliente. WhatsApp Cloud API + OpenAI.</p>
          <div class="case-results">
            <div class="case-result"><div class="case-result-value">24/7</div><div class="case-result-label">Disponibilidade</div></div>
            <div class="case-result"><div class="case-result-value">↓50%</div><div class="case-result-label">TMA</div></div>
          </div>
        </div>

        <div class="case-card">
          <div class="case-header">
            <div class="case-icon"><i data-lucide="shopping-cart"></i></div>
            <div class="case-meta">
              <div class="case-industry">Varejo</div>
              <h3 class="case-title">Business Intelligence</h3>
            </div>
          </div>
          <p class="case-description">PowerBI em tempo real via n8n com múltiplas fontes. Alertas de KPIs.</p>
          <div class="case-results">
            <div class="case-result"><div class="case-result-value">Real-time</div><div class="case-result-label">Atualização</div></div>
            <div class="case-result"><div class="case-result-value">3x</div><div class="case-result-label">ROI</div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Clients -->
  <section class="clients" id="clientes">
    <div class="container">
      <h2 class="section-title">Empresas que confiam</h2>
      <p class="section-subtitle">Parcerias e cases que geram resultado</p>
      <div class="clients-row">
        <div class="client-pill">Cliente A</div>
        <div class="client-pill">Cliente B</div>
        <div class="client-pill">Cliente C</div>
        <div class="client-pill">Cliente D</div>
        <div class="client-pill">Cliente E</div>
      </div>
    </div>
  </section>

  <!-- Tech Stack -->
  <section class="techstack" id="techstack">
    <div class="container">
      <h2 class="section-title">Tech Stack</h2>
      <p class="section-subtitle">Ferramentas e plataformas que usamos no dia a dia</p>
      <div class="tech-grid">
        <div class="tech-item">n8n</div><div class="tech-item">OpenAI API</div><div class="tech-item">Bubble</div>
        <div class="tech-item">Supabase</div><div class="tech-item">PostgreSQL</div><div class="tech-item">Make.com</div>
        <div class="tech-item">WhatsApp Cloud</div><div class="tech-item">PowerBI</div><div class="tech-item">Vercel</div>
      </div>
      <div style="text-align:center;"><span class="tech-badge">+ 5 ferramentas</span></div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-item"><div class="stat-number">50+</div><div class="stat-label">Projetos Entregues</div></div>
        <div class="stat-item"><div class="stat-number">95%</div><div class="stat-label">Satisfação</div></div>
        <div class="stat-item"><div class="stat-number">40h</div><div class="stat-label">Economizadas/Mês</div></div>
        <div class="stat-item"><div class="stat-number">3x</div><div class="stat-label">ROI Médio</div></div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials" id="depoimentos">
    <div class="container">
      <h2 class="section-title">O que dizem sobre nós</h2>
      <p class="section-subtitle">Resultados que viram rotina</p>
      <div class="testimonials-grid">
        <div class="testimonial">
          <div class="testimonial-avatar">🏢</div>
          <div class="testimonial-rating">⭐⭐⭐⭐⭐</div>
          <p>"Reduzimos 70% do tempo em processos operacionais em 30 dias."</p>
          <footer>Cliente do setor farmacêutico<span>Automação de atendimento</span></footer>
        </div>
        <div class="testimonial">
          <div class="testimonial-avatar">💬</div>
          <div class="testimonial-rating">⭐⭐⭐⭐⭐</div>
          <p>"Agente inteligente reduziu TMA e elevou satisfação."</p>
          <footer>Atendimento<span>Chatbot inteligente</span></footer>
        </div>
        <div class="testimonial">
          <div class="testimonial-avatar">📊</div>
          <div class="testimonial-rating">⭐⭐⭐⭐⭐</div>
          <p>"Dashboard em tempo real virou nosso padrão de decisão."</p>
          <footer>Varejo<span>BI + Automações</span></footer>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta" id="contato">
    <div class="container">
      <div class="cta-box">
        <h2>Pronto para automatizar?</h2>
        <p>Agende uma avaliação gratuita e descubra como transformar seu negócio.</p>
        <a href="/analise" class="btn btn-primary">
          Fale com a RexIA
          <span class="cta-badge">Grátis • 30 min</span>
        </a>
      </div>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
