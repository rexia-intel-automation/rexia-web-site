<?php
/* Formulário de Análise Empresarial - Maturidade Digital */
$page_title = 'Análise Empresarial';
include __DIR__ . '/partials/head.php';
include __DIR__ . '/partials/header.php';
?>

<main class="container" style="padding-top:140px; padding-bottom: 4rem;">
  <div style="max-width: 800px; margin: 0 auto;">
    <div style="text-align: center; margin-bottom: 3rem;">
      <a href="/analise" style="display: inline-flex; align-items: center; gap: 0.5rem; color: var(--text-muted); margin-bottom: 1rem;">
        <i data-lucide="arrow-left" style="width: 18px; height: 18px;"></i>
        Voltar
      </a>
      <h1 class="section-title">Análise de Maturidade Digital Empresarial</h1>
      <p class="section-subtitle">Avalie 20 aspectos da transformação digital da sua empresa</p>

      <!-- Progress Bar -->
      <div style="background: var(--bg-card); border-radius: 10px; height: 8px; margin-top: 2rem; overflow: hidden;">
        <div id="progressBar" style="background: var(--rexia-green); height: 100%; width: 0%; transition: width 0.3s;"></div>
      </div>
      <p id="progressText" style="margin-top: 0.5rem; font-size: 0.9rem; color: var(--text-muted);">Página 1 de 5</p>
    </div>

    <form id="analiseForm" class="contact-form">
      <!-- Honeypot -->
      <input type="text" name="website" id="website" autocomplete="off" style="display:none !important;">

      <!-- Informações Básicas (sempre visível) -->
      <div id="page-0" class="form-page">
        <h3 style="margin-bottom: 1.5rem; color: var(--rexia-green);">Informações da Empresa</h3>

        <div class="form-row">
          <label for="empresa">Nome da Empresa *</label>
          <input id="empresa" name="empresa" type="text" required placeholder="Nome da sua empresa">
        </div>

        <div class="form-row">
          <label for="nome">Seu Nome *</label>
          <input id="nome" name="nome" type="text" required placeholder="Seu nome completo">
        </div>

        <div class="form-row">
          <label for="cargo">Cargo *</label>
          <input id="cargo" name="cargo" type="text" required placeholder="Seu cargo na empresa">
        </div>

        <div class="form-row">
          <label for="email">Email Corporativo *</label>
          <input id="email" name="email" type="email" required placeholder="seu@empresa.com">
        </div>

        <div class="form-row">
          <label for="porte">Porte da Empresa *</label>
          <select id="porte" name="porte" required style="background:transparent; border:2px solid var(--border-color); color:var(--text-primary); padding:.9rem 1rem; border-radius:10px; outline:none; width: 100%;">
            <option value="">Selecione...</option>
            <option value="micro">Microempresa (até 9 funcionários)</option>
            <option value="pequena">Pequena (10-49 funcionários)</option>
            <option value="media">Média (50-249 funcionários)</option>
            <option value="grande">Grande (250+ funcionários)</option>
          </select>
        </div>

        <div class="form-row">
          <label for="setor">Setor de Atuação *</label>
          <input id="setor" name="setor" type="text" required placeholder="Ex: Tecnologia, Varejo, Serviços...">
        </div>
      </div>

      <!-- Página 1: Estratégia Digital -->
      <div id="page-1" class="form-page" style="display:none;">
        <h3 style="margin-bottom: 1.5rem; color: var(--rexia-green);">Estratégia e Cultura Digital</h3>

        <div class="form-row">
          <label for="q1">1. A empresa possui uma estratégia de transformação digital clara e documentada? *</label>
          <select id="q1" name="q1" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Não possui estratégia digital</option>
            <option value="2">Está em fase inicial de discussão</option>
            <option value="3">Possui estratégia parcial</option>
            <option value="4">Possui estratégia bem definida</option>
            <option value="5">Estratégia completa e em execução</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q2">2. Qual o nível de investimento em tecnologia e inovação? *</label>
          <select id="q2" name="q2" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Investimento mínimo ou inexistente</option>
            <option value="2">Investimento ocasional e reativo</option>
            <option value="3">Investimento regular mas limitado</option>
            <option value="4">Investimento planejado e consistente</option>
            <option value="5">Investimento estratégico prioritário</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q3">3. Como é a cultura de inovação na empresa? *</label>
          <select id="q3" name="q3" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Resistente a mudanças</option>
            <option value="2">Conservadora, muda apenas quando necessário</option>
            <option value="3">Aberta a mudanças pontuais</option>
            <option value="4">Incentiva inovação</option>
            <option value="5">Cultura de inovação contínua</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q4">4. Existem líderes ou times dedicados à transformação digital? *</label>
          <select id="q4" name="q4" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Não há responsáveis</option>
            <option value="2">Responsabilidade difusa</option>
            <option value="3">Responsável parcial (TI apenas)</option>
            <option value="4">Time ou líder dedicado</option>
            <option value="5">CDO ou área estruturada</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q5">5. A empresa monitora tendências tecnológicas do mercado? *</label>
          <select id="q5" name="q5" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Não monitora</option>
            <option value="2">Monitora ocasionalmente</option>
            <option value="3">Monitora mas não age</option>
            <option value="4">Monitora e testa inovações</option>
            <option value="5">Early adopter, sempre à frente</option>
          </select>
        </div>
      </div>

      <!-- Página 2: Processos e Automação -->
      <div id="page-2" class="form-page" style="display:none;">
        <h3 style="margin-bottom: 1.5rem; color: var(--rexia-green);">Processos e Automação</h3>

        <div class="form-row">
          <label for="q6">6. Qual o nível de digitalização dos processos internos? *</label>
          <select id="q6" name="q6" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Predominantemente manual/papel</option>
            <option value="2">Alguns processos digitalizados</option>
            <option value="3">Maioria digital, alguns manuais</option>
            <option value="4">Altamente digitalizado</option>
            <option value="5">100% digital e integrado</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q7">7. A empresa utiliza ferramentas de automação de processos? *</label>
          <select id="q7" name="q7" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Não utiliza automação</option>
            <option value="2">Automações básicas isoladas</option>
            <option value="3">Automação em alguns setores</option>
            <option value="4">Automação ampla e planejada</option>
            <option value="5">Automação avançada (RPA, IA)</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q8">8. Como funciona a integração entre sistemas? *</label>
          <select id="q8" name="q8" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Sistemas isolados sem integração</option>
            <option value="2">Integrações manuais (planilhas)</option>
            <option value="3">Algumas integrações automatizadas</option>
            <option value="4">Boa integração entre principais sistemas</option>
            <option value="5">Ecossistema totalmente integrado</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q9">9. A empresa possui workflows digitais bem definidos? *</label>
          <select id="q9" name="q9" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Workflows informais</option>
            <option value="2">Documentados mas não digitais</option>
            <option value="3">Parcialmente digitalizados</option>
            <option value="4">Workflows digitais estruturados</option>
            <option value="5">Workflows otimizados e automatizados</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q10">10. Como é o gerenciamento de documentos e informações? *</label>
          <select id="q10" name="q10" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Arquivos físicos predominantes</option>
            <option value="2">Mix de físico e digital desorganizado</option>
            <option value="3">Documentos digitais mas sem padrão</option>
            <option value="4">Sistema de gestão documental</option>
            <option value="5">DMS avançado com busca e IA</option>
          </select>
        </div>
      </div>

      <!-- Página 3: Dados e Analytics -->
      <div id="page-3" class="form-page" style="display:none;">
        <h3 style="margin-bottom: 1.5rem; color: var(--rexia-green);">Dados e Analytics</h3>

        <div class="form-row">
          <label for="q11">11. A empresa coleta e armazena dados de forma estruturada? *</label>
          <select id="q11" name="q11" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Não coleta dados sistematicamente</option>
            <option value="2">Coleta básica e descentralizada</option>
            <option value="3">Coleta estruturada em alguns setores</option>
            <option value="4">Coleta organizada e centralizada</option>
            <option value="5">Data Lake/Warehouse robusto</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q12">12. Como são utilizados os dados para tomada de decisão? *</label>
          <select id="q12" name="q12" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Decisões baseadas em intuição</option>
            <option value="2">Dados usados ocasionalmente</option>
            <option value="3">Dados usados regularmente</option>
            <option value="4">Decisões data-driven na maioria</option>
            <option value="5">100% data-driven com IA</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q13">13. A empresa possui dashboards e relatórios automatizados? *</label>
          <select id="q13" name="q13" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Relatórios manuais em planilhas</option>
            <option value="2">Alguns relatórios semi-automáticos</option>
            <option value="3">Dashboards básicos</option>
            <option value="4">BI avançado com atualizações automáticas</option>
            <option value="5">Analytics em tempo real</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q14">14. Qual o nível de governança de dados na empresa? *</label>
          <select id="q14" name="q14" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Sem governança</option>
            <option value="2">Governança informal</option>
            <option value="3">Políticas básicas documentadas</option>
            <option value="4">Governança estruturada</option>
            <option value="5">Governança completa (LGPD, compliance)</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q15">15. A empresa utiliza IA ou Machine Learning? *</label>
          <select id="q15" name="q15" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Não utiliza</option>
            <option value="2">Conhece mas não implementou</option>
            <option value="3">Projetos piloto</option>
            <option value="4">Uso em produção em alguns casos</option>
            <option value="5">IA integrada em múltiplos processos</option>
          </select>
        </div>
      </div>

      <!-- Página 4: Tecnologia e Infraestrutura -->
      <div id="page-4" class="form-page" style="display:none;">
        <h3 style="margin-bottom: 1.5rem; color: var(--rexia-green);">Tecnologia, Clientes e Pessoas</h3>

        <div class="form-row">
          <label for="q16">16. Qual a infraestrutura tecnológica da empresa? *</label>
          <select id="q16" name="q16" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Legada e desatualizada</option>
            <option value="2">Parcialmente atualizada</option>
            <option value="3">Infraestrutura adequada</option>
            <option value="4">Moderna com cloud híbrida</option>
            <option value="5">Cloud-first, escalável e moderna</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q17">17. Como é a experiência digital do cliente? *</label>
          <select id="q17" name="q17" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Predominantemente offline</option>
            <option value="2">Presença digital básica</option>
            <option value="3">Canais digitais funcionais</option>
            <option value="4">Experiência digital integrada</option>
            <option value="5">Omnichannel com personalização</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q18">18. A empresa possui canais de atendimento digital? *</label>
          <select id="q18" name="q18" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Apenas telefone/presencial</option>
            <option value="2">Email básico</option>
            <option value="3">Chat, email, redes sociais</option>
            <option value="4">Múltiplos canais integrados</option>
            <option value="5">Chatbots, IA, atendimento 24/7</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q19">19. Como é o programa de capacitação digital dos colaboradores? *</label>
          <select id="q19" name="q19" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Não há treinamentos digitais</option>
            <option value="2">Treinamentos pontuais e reativos</option>
            <option value="3">Programa básico de capacitação</option>
            <option value="4">Programa estruturado contínuo</option>
            <option value="5">Cultura de aprendizado contínuo</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q20">20. A empresa utiliza ferramentas colaborativas e de trabalho remoto? *</label>
          <select id="q20" name="q20" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Não utiliza</option>
            <option value="2">Ferramentas básicas (email)</option>
            <option value="3">Suíte colaborativa (Google/MS)</option>
            <option value="4">Ferramentas avançadas integradas</option>
            <option value="5">Ecossistema digital completo</option>
          </select>
        </div>
      </div>

      <!-- Navigation Buttons -->
      <div class="form-row" style="display: flex; gap: 1rem; margin-top: 2rem;">
        <button type="button" id="prevBtn" class="btn btn-secondary" style="flex: 1; display: none;">
          Anterior
        </button>
        <button type="button" id="nextBtn" class="btn btn-primary" style="flex: 1;">
          Próxima
        </button>
        <button type="submit" id="submitBtn" class="btn btn-primary" style="flex: 1; display: none;">
          Enviar Análise
        </button>
      </div>

      <p id="resposta" class="muted" style="margin-top:1.5rem; text-align: center;"></p>
    </form>
  </div>
</main>

<style>
.form-select {
  background: transparent;
  border: 2px solid var(--border-color);
  color: var(--text-primary);
  padding: 0.9rem 1rem;
  border-radius: 10px;
  outline: none;
  width: 100%;
  cursor: pointer;
}

.form-select:focus {
  box-shadow: 0 0 0 3px rgba(123, 201, 68, 0.22);
}

.form-select option {
  background: var(--bg-primary);
  color: var(--text-primary);
}
</style>

<script>
// Configuração do formulário paginado
let currentPage = 0;
const totalPages = 4;
const WEBHOOK_URL = "https://primary-production-55af6.up.railway.app/webhook/f962ca3c-e969-4d90-82d1-0724bcc886d2";

function showPage(pageNum) {
  // Esconder todas as páginas
  document.querySelectorAll('.form-page').forEach(page => {
    page.style.display = 'none';
  });

  // Mostrar página 0 (informações básicas) sempre junto com a página atual
  document.getElementById('page-0').style.display = 'block';

  // Mostrar página atual (se não for a página 0)
  if (pageNum > 0) {
    document.getElementById(`page-${pageNum}`).style.display = 'block';
  }

  // Atualizar botões
  document.getElementById('prevBtn').style.display = pageNum > 0 ? 'block' : 'none';
  document.getElementById('nextBtn').style.display = pageNum < totalPages ? 'block' : 'none';
  document.getElementById('submitBtn').style.display = pageNum === totalPages ? 'block' : 'none';

  // Atualizar progress bar
  const progress = ((pageNum + 1) / (totalPages + 1)) * 100;
  document.getElementById('progressBar').style.width = progress + '%';
  document.getElementById('progressText').textContent = `Página ${pageNum + 1} de ${totalPages + 1}`;

  // Scroll para o topo
  window.scrollTo({ top: 0, behavior: 'smooth' });
}

function validatePage(pageNum) {
  const page = document.getElementById(`page-${pageNum}`);
  const inputs = page.querySelectorAll('input[required], select[required]');

  for (let input of inputs) {
    if (!input.value) {
      input.focus();
      alert('Por favor, preencha todos os campos obrigatórios.');
      return false;
    }
  }
  return true;
}

// Botão Próxima
document.getElementById('nextBtn').addEventListener('click', () => {
  if (validatePage(currentPage)) {
    currentPage++;
    showPage(currentPage);
  }
});

// Botão Anterior
document.getElementById('prevBtn').addEventListener('click', () => {
  currentPage--;
  showPage(currentPage);
});

// Submit do formulário
document.getElementById('analiseForm').addEventListener('submit', async (e) => {
  e.preventDefault();

  const resp = document.getElementById('resposta');
  const btn = document.getElementById('submitBtn');

  // Honeypot
  if (document.getElementById('website').value.trim() !== '') return;

  // Validar última página
  if (!validatePage(currentPage)) return;

  // Coletar dados
  const formData = new FormData(e.target);
  const data = {
    tipo: 'analise_empresarial',
    timestamp: new Date().toISOString(),
    informacoes_empresa: {
      empresa: formData.get('empresa'),
      nome_contato: formData.get('nome'),
      cargo: formData.get('cargo'),
      email: formData.get('email'),
      porte: formData.get('porte'),
      setor: formData.get('setor')
    },
    respostas: {}
  };

  // Coletar todas as respostas
  for (let i = 1; i <= 20; i++) {
    data.respostas[`q${i}`] = parseInt(formData.get(`q${i}`)) || 0;
  }

  // Calcular score
  const scores = Object.values(data.respostas);
  const totalScore = scores.reduce((a, b) => a + b, 0);
  const maxScore = 100; // 20 perguntas * 5 pontos
  const percentual = Math.round((totalScore / maxScore) * 100);

  data.score = {
    total: totalScore,
    maximo: maxScore,
    percentual: percentual
  };

  // Categorizar por dimensões
  data.dimensoes = {
    estrategia_cultura: scores.slice(0, 5).reduce((a, b) => a + b, 0),
    processos_automacao: scores.slice(5, 10).reduce((a, b) => a + b, 0),
    dados_analytics: scores.slice(10, 15).reduce((a, b) => a + b, 0),
    tecnologia_pessoas: scores.slice(15, 20).reduce((a, b) => a + b, 0)
  };

  btn.disabled = true;
  btn.textContent = 'Enviando...';
  resp.textContent = '';

  try {
    const response = await fetch(WEBHOOK_URL, {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      mode: 'cors',
      body: JSON.stringify(data)
    });

    if (!response.ok) throw new Error('Falha no envio');

    resp.style.color = 'var(--rexia-green)';
    resp.textContent = '✓ Análise enviada com sucesso! O relatório será enviado para o email informado.';

    // Resetar formulário após 3 segundos
    setTimeout(() => {
      window.location.href = '/analise.php';
    }, 3000);

  } catch (err) {
    resp.style.color = '#ff4444';
    resp.textContent = '✗ Não foi possível enviar. Tente novamente.';
    btn.disabled = false;
    btn.textContent = 'Enviar Análise';
  }
});

// Inicializar
showPage(0);
</script>

<?php include __DIR__ . '/partials/footer.php'; ?>
