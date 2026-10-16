// ===== まごの手 (Magonote) Docs - Navigation & Interactions =====

document.addEventListener('DOMContentLoaded', async () => {

  // --- Load HTML includes ---
  const basePath = document.body.dataset.base || '.';
  const includeEls = document.querySelectorAll('[data-include]');

  const loadPromises = Array.from(includeEls).map(async (el) => {
    const src = el.dataset.include;
    try {
      const res = await fetch(`${basePath}/${src}.html`);
      if (!res.ok) throw new Error(`HTTP ${res.status}`);
      let html = await res.text();
      // Replace placeholders
      if (el.dataset.title) {
        html = html.replace(/\{\{PAGE_TITLE\}\}/g, el.dataset.title);
      }
      html = html.replace(/ROOT\//g, basePath + '/');
      el.outerHTML = html;
    } catch (e) {
      console.error(`Failed to load include: ${src}`, e);
    }
  });

  await Promise.all(loadPromises);

  // --- Initialize page after includes are loaded ---
  initPage();
});

function initPage() {
  // --- Sidebar active link ---
  const currentPath = location.pathname;
  const navLinks = document.querySelectorAll('.sidebar-nav a');

  navLinks.forEach(link => {
    const href = link.getAttribute('href');
    if (href && currentPath.endsWith(href)) {
      link.classList.add('active');
    }
  });

  // --- Mobile menu toggle ---
  const menuBtn = document.getElementById('mobile-menu-btn');
  const sidebar = document.getElementById('sidebar');
  const overlay = document.getElementById('menu-overlay');

  if (menuBtn && sidebar && overlay) {
    menuBtn.addEventListener('click', () => {
      sidebar.classList.toggle('open');
      overlay.classList.toggle('show');
    });

    overlay.addEventListener('click', () => {
      sidebar.classList.remove('open');
      overlay.classList.remove('show');
    });

    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        sidebar.classList.remove('open');
        overlay.classList.remove('show');
      });
    });
  }

  // --- Smooth scroll for anchor links ---
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', e => {
      const target = document.querySelector(anchor.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  // --- Copy code blocks ---
  document.querySelectorAll('pre code').forEach(block => {
    const btn = document.createElement('button');
    btn.textContent = '📋';
    btn.style.cssText = `
      position: absolute;
      top: 6px;
      right: 8px;
      background: var(--bg-primary);
      border: 1px solid var(--border);
      border-radius: 4px;
      padding: 4px 8px;
      cursor: pointer;
      font-size: 0.8rem;
      color: var(--text-secondary);
      transition: all 0.2s;
    `;
    btn.addEventListener('click', () => {
      navigator.clipboard.writeText(block.textContent).then(() => {
        btn.textContent = '✅';
        setTimeout(() => { btn.textContent = '📋'; }, 2000);
      });
    });
    const pre = block.parentElement;
    pre.style.position = 'relative';
    pre.appendChild(btn);
  });
}
