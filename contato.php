<?php
/* Página de contato com webhook n8n via fetch no front-end */
$page_title = 'Contato';
include __DIR__ . '/partials/head.php';
include __DIR__ . '/partials/header.php';
?>

<main class="container" style="padding-top:140px;">
  <h1 class="section-title" style="margin-bottom:1rem;">Fale Conosco</h1>
  <p class="section-subtitle">Preencha o formulário e retornaremos em breve</p>

  <form id="contatoForm" class="contact-form" novalidate>
    <!-- Honeypot -->
    <input type="text" name="website" id="website" autocomplete="off" style="display:none !important;">

    <div class="form-row">
      <label for="nome">Nome</label>
      <input id="nome" name="nome" type="text" required placeholder="Seu nome">
    </div>

    <div class="form-row">
      <label for="email">Email</label>
      <input id="email" name="email" type="email" required placeholder="voce@empresa.com">
    </div>

    <div class="form-row">
      <label for="mensagem">Mensagem</label>
      <textarea id="mensagem" name="mensagem" rows="5" required placeholder="Como podemos ajudar?"></textarea>
    </div>

    <div class="form-row">
      <button class="btn btn-primary" type="submit" id="btnEnviar">Enviar</button>
    </div>

    <p id="resposta" class="muted" style="margin-top:1rem;"></p>
  </form>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>

<script>
  // TROQUE pela URL pública do webhook n8n:
  const WEBHOOK_URL = "https://SEU-DOMINIO-N8N/webhook/contato";

  // Captura UTM
  function getUTM() {
    const p = new URLSearchParams(location.search);
    return {
      utm_source: p.get('utm_source') || 'direct',
      utm_medium: p.get('utm_medium') || 'none',
      utm_campaign: p.get('utm_campaign') || 'none',
      utm_content: p.get('utm_content') || 'none',
      utm_term: p.get('utm_term') || 'none',
    };
  }

  document.getElementById('contatoForm').addEventListener('submit', async (e) => {
    e.preventDefault();

    const resp = document.getElementById('resposta');
    const btn  = document.getElementById('btnEnviar');

    // Honeypot
    if (document.getElementById('website').value.trim() !== '') return;

    const nome = document.getElementById('nome').value.trim();
    const email = document.getElementById('email').value.trim();
    const mensagem = document.getElementById('mensagem').value.trim();

    if (!nome || !email || !mensagem) {
      resp.textContent = 'Preencha todos os campos obrigatórios.';
      return;
    }

    btn.disabled = true;
    btn.textContent = 'Enviando...';
    resp.textContent = '';

    try {
      const payload = {
        nome, email, mensagem,
        page: location.href,
        ...getUTM()
      };

      const r = await fetch(WEBHOOK_URL, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        mode: 'cors',
        body: JSON.stringify(payload),
      });

      if (!r.ok) throw new Error('Falha no envio');

      resp.textContent = 'Recebido! Vamos retornar em breve.';
      (document.getElementById('contatoForm')).reset();
    } catch (err) {
      resp.textContent = 'Não foi possível enviar agora. Tente novamente em instantes.';
    } finally {
      btn.disabled = false;
      btn.textContent = 'Enviar';
    }
  });
</script>