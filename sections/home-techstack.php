<!-- Tech Stack -->
<section class="techstack" id="techstack">
  <div class="container">
    <h2 class="section-title">Tecnologias & Plataformas</h2>
    <p class="techstack-intro">
      Selecionamos um stack enxuto, testado em projetos reais, para acelerar automação, IA aplicada e produtos digitais — com custos previsíveis, integração simples e autonomia para o cliente. Não vendemos ferramentas: usamos tecnologia como meio para resolver gargalos de negócio com velocidade e governança.
    </p>

    <div class="carousel-wrapper">
      <div class="carousel-track carousel-row1" id="carousel-row1"></div>
    </div>

    <p class="techstack-mid-phrase">
      Tecnologia escolhida por eficácia comprovada — não por hype.
    </p>

    <div class="carousel-wrapper">
      <div class="carousel-track carousel-row2" id="carousel-row2"></div>
    </div>

    <div style="text-align:center; margin-top:2.5rem;">
      <span class="tech-badge">Stack completo em constante evolução</span>
    </div>
  </div>
</section>

<script>
const techLogos = [
  { name: 'n8n', url: 'https://i.imgur.com/URQRB8z.png', alt: 'n8n Logo' },
  { name: 'Bubble', url: 'https://meta-q.cdn.bubble.io/f1531946819200x747478706762194600/Bubble%20logo.svg', alt: 'Bubble Logo' },
  { name: 'Supabase', url: 'https://supabase.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fsupabase-logo-wordmark--light.daaeffd3.png&w=384&q=75&dpl=dpl_9Ysg2FRdN8vzGxGWuZESPDRHQpt5', alt: 'Supabase Logo' },
  { name: 'PostgreSQL', url: 'https://upload.wikimedia.org/wikipedia/commons/2/29/Postgresql_elephant.svg', alt: 'PostgreSQL Logo' },
  { name: 'WhatsApp Cloud API', url: 'https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg', alt: 'WhatsApp Cloud Logo' },
  { name: 'Power BI', url: 'https://upload.wikimedia.org/wikipedia/commons/c/cf/New_Power_BI_Logo.svg', alt: 'Power BI Logo' },
  { name: 'OpenAI', url: 'https://cdn.worldvectorlogo.com/logos/openai-2.svg', alt: 'OpenAI Logo' },
  { name: 'Anthropic', url: 'https://upload.wikimedia.org/wikipedia/commons/7/78/Anthropic_logo.svg', alt: 'Anthropic Logo' },
  { name: 'Google Gemini', url: 'https://upload.wikimedia.org/wikipedia/commons/8/8a/Google_Gemini_logo.svg', alt: 'Gemini Logo' },
  { name: 'Make.com', url: 'https://images.ctfassets.net/un655fb9wln6/1k5wBPhbu5kXiaYlFWgEJE/b590772959bd510e64cf230ef37bba3e/Make-Logo-RGB.svg', alt: 'Make.com Logo' }
];

const row1 = document.getElementById('carousel-row1');
const row2 = document.getElementById('carousel-row2');

const infiniteLogos = [...techLogos, ...techLogos];

infiniteLogos.forEach(logo => {
  const card = document.createElement('div');
  card.className = 'tech-logo-card';
  card.innerHTML = `<img src="${logo.url}" alt="${logo.alt}" loading="lazy">`;
  row1.appendChild(card.cloneNode(true));
  row2.appendChild(card);
});
</script>
