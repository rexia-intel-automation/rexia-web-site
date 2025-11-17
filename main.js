/* ===========================
   RexIA — Main JS (refactor)
   =========================== */
(() => {
  'use strict';

  /* ---------- Utils ---------- */
  const $   = (sel, ctx = document) => ctx.querySelector(sel);
  const $$  = (sel, ctx = document) => Array.from(ctx.querySelectorAll(sel));
  const on  = (el, ev, fn, opt) => el && el.addEventListener(ev, fn, opt);
  const nowISO = () => new Date().toISOString();

  const lucideInit = () => (window.lucide && window.lucide.createIcons());

  /* ---------- UTM helpers ---------- */
  const getUTMParams = () => {
    const p = new URLSearchParams(window.location.search);
    return {
      source:   p.get('utm_source')   || 'direct',
      medium:   p.get('utm_medium')   || 'none',
      campaign: p.get('utm_campaign') || 'none',
      content:  p.get('utm_content')  || 'none',
      term:     p.get('utm_term')     || 'none',
    };
  };

  const buildWhatsAppURL = (baseMessage) => {
    const utm = getUTMParams();
    const message = `${baseMessage}\n\n[UTM: ${utm.source}/${utm.medium}/${utm.campaign}]`;
    return `https://wa.me/5561996108445?text=${encodeURIComponent(message)}`;
  };

  /* ---------- Theme ---------- */
  const applyThemeIcon = (isLight) => {
    const btn = $('#theme-toggle');
    if (!btn) return;
    btn.innerHTML = isLight ? '<i data-lucide="moon"></i>' : '<i data-lucide="sun"></i>';
    lucideInit();
  };

  const setTheme = (mode /* 'light' | 'dark' */) => {
    const isLight = mode === 'light';
    document.body.classList.toggle('light-mode', isLight);
    localStorage.setItem('theme', isLight ? 'light' : 'dark');
    applyThemeIcon(isLight);
  };

  const initTheme = () => {
    const saved = localStorage.getItem('theme');
    setTheme(saved === 'light' ? 'light' : 'dark');
    on($('#theme-toggle'), 'click', () => setTheme(document.body.classList.contains('light-mode') ? 'dark' : 'light'));
  };

  /* ---------- A11y: trap focus ---------- */
  const trapFocus = (root) => {
    if (!root) return;
    const focusables = root.querySelectorAll(
      'a[href], button:not([disabled]), input:not([disabled]), select:not([disabled]), textarea:not([disabled]), [tabindex]:not([tabindex="-1"])'
    );
    const first = focusables[0];
    const last  = focusables[focusables.length - 1];
    on(root, 'keydown', (e) => {
      if (e.key !== 'Tab' || !first || !last) return;
      if (e.shiftKey && document.activeElement === first) {
        last.focus(); e.preventDefault();
      } else if (!e.shiftKey && document.activeElement === last) {
        first.focus(); e.preventDefault();
      }
    });
  };

  /* ---------- Mobile menu ---------- */
  const initMobileMenu = () => {
    const btn = $('.menu-toggle');
    const menu = $('#mobile-menu');
    if (!btn || !menu) return;

    const setBtn = (open) => {
      btn.setAttribute('aria-expanded', String(open));
      btn.innerHTML = open ? '<i data-lucide="x"></i>' : '<i data-lucide="menu"></i>';
      lucideInit();
    };

    const open = () => {
      menu.removeAttribute('hidden');
      document.body.style.overflow = 'hidden';
      setBtn(true);
      trapFocus(menu);
      (menu.querySelector('a') || btn).focus();
    };

    const close = () => {
      if (menu.hasAttribute('hidden')) return;
      menu.setAttribute('hidden', '');
      document.body.style.overflow = '';
      setBtn(false);
    };

    on(btn, 'click', () => (menu.hasAttribute('hidden') ? open() : close()));
    on(menu, 'click', (e) => { if (e.target.tagName === 'A') close(); });
    on(window, 'hashchange', close);
    on(document, 'keydown', (e) => { if (e.key === 'Escape') close(); });
  };

  /* ---------- WhatsApp (UTM) ---------- */
  const initWhatsAppLinks = () => {
    $$('a[href*="wa.me"]').forEach((a) => {
      on(a, 'click', (e) => {
        e.preventDefault();
        const msg = a.getAttribute('data-message') || 'Olá Rex! Gostaria de saber mais sobre os serviços da RexIA';
        window.open(buildWhatsAppURL(msg), '_blank');
      });
    });
  };

  /* ---------- Contato (webhook) ---------- */
  const initContactForm = () => {
    const form = $('#contatoForm');
    if (!form) return;
    const resp = $('#resposta');

    on(form, 'submit', async (e) => {
      e.preventDefault();

      // honeypot
      const hp = form.querySelector('input[name="website"]');
      if (hp && hp.value) { resp && (resp.textContent = 'Erro de validação.'); return; }

      const utm = getUTMParams();
      const payload = {
        nome: form.nome?.value || '',
        email: form.email?.value || '',
        mensagem: form.mensagem?.value || '',
        utm_source: utm.source,
        utm_medium: utm.medium,
        utm_campaign: utm.campaign,
        utm_content: utm.content,
        utm_term: utm.term,
        page: window.location.href,
        ts: nowISO(),
      };

      try {
        if (typeof window.WEBHOOK_URL !== 'string' || !window.WEBHOOK_URL.startsWith('http')) {
          throw new Error('Webhook não configurado.');
        }
        const res = await fetch(window.WEBHOOK_URL, {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(payload),
        });
        if (!res.ok) throw new Error('Falha no envio');
        resp && (resp.textContent = 'Mensagem enviada com sucesso!');
        form.reset();
      } catch (err) {
        resp && (resp.textContent = 'Erro ao enviar. Tente novamente.');
        console.error(err);
      }
    });
  };

  /* ---------- Portfolio Carousel ---------- */
  const initPortfolioCarousel = () => {
    const wrap = $('#portfolio-carousel');
    const dots = $('#portfolio-dots');
    if (!wrap || !dots) return;

    const track = $('.rex-track', wrap);
    const slides = $$('.rex-slide', track);
    const prevBtns = $$('.carousel-btn.prev');
    const nextBtns = $$('.carousel-btn.next');
    
    if (!track || slides.length === 0) return;

    // Criar dots
    slides.forEach((_, i) => {
      const btn = document.createElement('button');
      btn.type = 'button';
      btn.setAttribute('aria-label', `Ir para slide ${i + 1}`);
      on(btn, 'click', () => scrollToSlide(i));
      dots.appendChild(btn);
    });

    // Helpers
    const gap = () => parseFloat(getComputedStyle(track).gap || 20);
    const slideWidth = () => (slides[0]?.getBoundingClientRect().width || 360) + gap();
    const currentIndex = () => Math.round(track.scrollLeft / slideWidth());

    // Update UI
    const updateUI = () => {
      const idx = currentIndex();
      
      // Update dots
      $$('button', dots).forEach((btn, i) => {
        btn.setAttribute('aria-current', i === idx ? 'true' : 'false');
      });

      // Update buttons state
      const isFirst = idx === 0;
      const isLast = idx === slides.length - 1;
      
      prevBtns.forEach(btn => btn.disabled = isFirst);
      nextBtns.forEach(btn => btn.disabled = isLast);
    };

    // Scroll to specific slide
    const scrollToSlide = (index) => {
      const targetIndex = Math.max(0, Math.min(index, slides.length - 1));
      track.scrollTo({
        left: targetIndex * slideWidth(),
        behavior: 'smooth'
      });
    };

    // Navigation handlers
    prevBtns.forEach(btn => {
      on(btn, 'click', () => scrollToSlide(currentIndex() - 1));
    });

    nextBtns.forEach(btn => {
      on(btn, 'click', () => scrollToSlide(currentIndex() + 1));
    });

    // Scroll listener (debounced)
    let scrollTimeout;
    on(track, 'scroll', () => {
      clearTimeout(scrollTimeout);
      scrollTimeout = setTimeout(updateUI, 100);
    }, { passive: true });

    // Keyboard navigation
    track.setAttribute('tabindex', '0');
    on(track, 'keydown', (e) => {
      const idx = currentIndex();
      
      switch(e.key) {
        case 'ArrowRight':
          e.preventDefault();
          if (idx < slides.length - 1) scrollToSlide(idx + 1);
          break;
        case 'ArrowLeft':
          e.preventDefault();
          if (idx > 0) scrollToSlide(idx - 1);
          break;
        case 'Home':
          e.preventDefault();
          scrollToSlide(0);
          break;
        case 'End':
          e.preventDefault();
          scrollToSlide(slides.length - 1);
          break;
      }
    });

    // Touch/swipe detection
    let touchStartX = 0;
    let touchEndX = 0;
    
    on(track, 'touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });
    
    on(track, 'touchend', (e) => {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
    }, { passive: true });
    
    const handleSwipe = () => {
      const diff = touchStartX - touchEndX;
      const threshold = 50;
      
      if (Math.abs(diff) > threshold) {
        if (diff > 0) {
          scrollToSlide(currentIndex() + 1);
        } else {
          scrollToSlide(currentIndex() - 1);
        }
      }
    };

    // Initialize UI
    updateUI();

    // Re-calculate on window resize (debounced)
    let resizeTimeout;
    on(window, 'resize', () => {
      clearTimeout(resizeTimeout);
      resizeTimeout = setTimeout(() => {
        scrollToSlide(currentIndex());
        updateUI();
      }, 250);
    }, { passive: true });
  };

  /* ---------- Boot ---------- */
  on(document, 'DOMContentLoaded', () => {
    lucideInit();
    initTheme();
    initMobileMenu();
    initWhatsAppLinks();
    initContactForm();
    initPortfolioCarousel();
  });

})();