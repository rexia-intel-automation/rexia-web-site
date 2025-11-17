<?php
/* Formulário de Análise Pessoal - Maturidade Digital */
$page_title = 'Análise Pessoal';
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
      <h1 class="section-title">Análise de Maturidade Digital Pessoal</h1>
      <p class="section-subtitle">Responda 15 perguntas sobre suas habilidades e práticas digitais</p>

      <!-- Progress Bar -->
      <div style="background: var(--bg-card); border-radius: 10px; height: 8px; margin-top: 2rem; overflow: hidden;">
        <div id="progressBar" style="background: var(--rexia-green); height: 100%; width: 0%; transition: width 0.3s;"></div>
      </div>
      <p id="progressText" style="margin-top: 0.5rem; font-size: 0.9rem; color: var(--text-muted);">Página 1 de 3</p>
    </div>

    <form id="analiseForm" class="contact-form">
      <!-- Honeypot -->
      <input type="text" name="website" id="website" autocomplete="off" style="display:none !important;">

      <!-- Informações Básicas (sempre visível) -->
      <div id="page-0" class="form-page">
        <h3 style="margin-bottom: 1.5rem; color: var(--rexia-green);">Informações Básicas</h3>

        <div class="form-row">
          <label for="nome">Nome Completo *</label>
          <input id="nome" name="nome" type="text" required placeholder="Seu nome completo">
        </div>

        <div class="form-row">
          <label for="email">Email *</label>
          <input id="email" name="email" type="email" required placeholder="seu@email.com">
        </div>

        <div class="form-row">
          <label for="idade">Faixa Etária *</label>
          <select id="idade" name="idade" required style="background:transparent; border:2px solid var(--border-color); color:var(--text-primary); padding:.9rem 1rem; border-radius:10px; outline:none; width: 100%;">
            <option value="">Selecione...</option>
            <option value="18-25">18-25 anos</option>
            <option value="26-35">26-35 anos</option>
            <option value="36-45">36-45 anos</option>
            <option value="46-55">46-55 anos</option>
            <option value="56+">56+ anos</option>
          </select>
        </div>
      </div>

      <!-- Página 1: Perguntas 1-5 -->
      <div id="page-1" class="form-page" style="display:none;">
        <h3 style="margin-bottom: 1.5rem; color: var(--rexia-green);">Uso de Tecnologia e Ferramentas</h3>

        <div class="form-row">
          <label for="q1">1. Com que frequência você utiliza ferramentas digitais no dia a dia? *</label>
          <select id="q1" name="q1" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Raramente ou nunca</option>
            <option value="2">Ocasionalmente</option>
            <option value="3">Frequentemente</option>
            <option value="4">Diariamente</option>
            <option value="5">Constantemente</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q2">2. Quantas ferramentas digitais você domina (apps, software, plataformas)? *</label>
          <select id="q2" name="q2" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">1-3 ferramentas</option>
            <option value="2">4-7 ferramentas</option>
            <option value="3">8-12 ferramentas</option>
            <option value="4">13-20 ferramentas</option>
            <option value="5">Mais de 20 ferramentas</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q3">3. Você utiliza ferramentas de automação ou IA no seu trabalho/estudos? *</label>
          <select id="q3" name="q3" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Não sei o que são</option>
            <option value="2">Conheço mas não uso</option>
            <option value="3">Uso ocasionalmente</option>
            <option value="4">Uso regularmente</option>
            <option value="5">Uso diariamente e domino</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q4">4. Como você avalia sua capacidade de aprender novas tecnologias? *</label>
          <select id="q4" name="q4" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Muito difícil, preciso de ajuda constante</option>
            <option value="2">Difícil, mas consigo com suporte</option>
            <option value="3">Moderado, aprendo com tempo</option>
            <option value="4">Fácil, aprendo rápido</option>
            <option value="5">Muito fácil, sou autodidata</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q5">5. Você mantém seus conhecimentos digitais atualizados? *</label>
          <select id="q5" name="q5" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Não, uso sempre as mesmas coisas</option>
            <option value="2">Raramente busco novidades</option>
            <option value="3">Às vezes me atualizo</option>
            <option value="4">Frequentemente busco aprender</option>
            <option value="5">Constantemente me atualizo</option>
          </select>
        </div>
      </div>

      <!-- Página 2: Perguntas 6-10 -->
      <div id="page-2" class="form-page" style="display:none;">
        <h3 style="margin-bottom: 1.5rem; color: var(--rexia-green);">Produtividade e Colaboração Digital</h3>

        <div class="form-row">
          <label for="q6">6. Você utiliza ferramentas de gestão de tarefas/projetos? *</label>
          <select id="q6" name="q6" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Não, organizo tudo mentalmente</option>
            <option value="2">Uso papel ou anotações básicas</option>
            <option value="3">Uso ferramentas simples (notas, agenda)</option>
            <option value="4">Uso ferramentas específicas (Trello, Notion, etc.)</option>
            <option value="5">Domino múltiplas ferramentas de gestão</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q7">7. Como você colabora digitalmente com outras pessoas? *</label>
          <select id="q7" name="q7" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Não colaboro digitalmente</option>
            <option value="2">Apenas por email</option>
            <option value="3">Email e mensagens (WhatsApp, etc.)</option>
            <option value="4">Uso plataformas colaborativas (Drive, Teams, etc.)</option>
            <option value="5">Domino múltiplas plataformas de colaboração</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q8">8. Você utiliza armazenamento em nuvem? *</label>
          <select id="q8" name="q8" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Não, apenas local</option>
            <option value="2">Conheço mas não uso</option>
            <option value="3">Uso básico (Drive, Dropbox)</option>
            <option value="4">Uso avançado com organização</option>
            <option value="5">Uso profissional com sincronização</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q9">9. Qual seu nível de segurança digital (senhas, 2FA, backups)? *</label>
          <select id="q9" name="q9" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Não me preocupo com segurança</option>
            <option value="2">Uso senhas simples</option>
            <option value="3">Uso senhas diferentes</option>
            <option value="4">Uso senhas fortes + 2FA</option>
            <option value="5">Segurança completa + gerenciador</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q10">10. Você usa comunicação por vídeo regularmente? *</label>
          <select id="q10" name="q10" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Nunca ou raramente</option>
            <option value="2">Ocasionalmente</option>
            <option value="3">Semanalmente</option>
            <option value="4">Diariamente</option>
            <option value="5">Múltiplas vezes ao dia</option>
          </select>
        </div>
      </div>

      <!-- Página 3: Perguntas 11-15 -->
      <div id="page-3" class="form-page" style="display:none;">
        <h3 style="margin-bottom: 1.5rem; color: var(--rexia-green);">Mindset Digital e Inovação</h3>

        <div class="form-row">
          <label for="q11">11. Você busca soluções digitais para problemas do dia a dia? *</label>
          <select id="q11" name="q11" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Não, prefiro métodos tradicionais</option>
            <option value="2">Raramente penso nisso</option>
            <option value="3">Às vezes considero</option>
            <option value="4">Frequentemente busco</option>
            <option value="5">Sempre procuro automatizar</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q12">12. Você acompanha tendências de tecnologia e inovação? *</label>
          <select id="q12" name="q12" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Não acompanho</option>
            <option value="2">Ouço falar mas não busco</option>
            <option value="3">Leio ocasionalmente</option>
            <option value="4">Acompanho regularmente</option>
            <option value="5">Sou early adopter</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q13">13. Você compartilha conhecimento digital com outras pessoas? *</label>
          <select id="q13" name="q13" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Não compartilho</option>
            <option value="2">Raramente ajudo</option>
            <option value="3">Ajudo quando pedem</option>
            <option value="4">Frequentemente ensino</option>
            <option value="5">Ativamente compartilho e ensino</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q14">14. Como você reage a mudanças tecnológicas? *</label>
          <select id="q14" name="q14" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Resistente, prefiro o antigo</option>
            <option value="2">Cauteloso, mudo quando necessário</option>
            <option value="3">Neutro, adapto-me</option>
            <option value="4">Positivo, abraço mudanças</option>
            <option value="5">Entusiasmado, busco inovação</option>
          </select>
        </div>

        <div class="form-row">
          <label for="q15">15. Você investe tempo e/ou dinheiro em aprendizado digital? *</label>
          <select id="q15" name="q15" required class="form-select">
            <option value="">Selecione...</option>
            <option value="1">Não invisto</option>
            <option value="2">Raramente invisto</option>
            <option value="3">Invisto ocasionalmente</option>
            <option value="4">Invisto regularmente</option>
            <option value="5">Invisto constantemente</option>
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
const totalPages = 3;
const WEBHOOK_URL = "https://primary-production-55af6.up.railway.app/webhook/a00800c7-f2f8-4079-bdb6-81bab0758b9b";

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
    tipo: 'analise_pessoal',
    timestamp: new Date().toISOString(),
    informacoes_basicas: {
      nome: formData.get('nome'),
      email: formData.get('email'),
      idade: formData.get('idade')
    },
    respostas: {}
  };

  // Coletar todas as respostas
  for (let i = 1; i <= 15; i++) {
    data.respostas[`q${i}`] = parseInt(formData.get(`q${i}`)) || 0;
  }

  // Calcular score
  const scores = Object.values(data.respostas);
  const totalScore = scores.reduce((a, b) => a + b, 0);
  const maxScore = 75; // 15 perguntas * 5 pontos
  const percentual = Math.round((totalScore / maxScore) * 100);

  data.score = {
    total: totalScore,
    maximo: maxScore,
    percentual: percentual
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
    resp.textContent = '✓ Análise enviada com sucesso! Você receberá o relatório no email informado.';

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
