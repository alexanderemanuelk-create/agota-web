document.addEventListener('DOMContentLoaded', () => {
  const navToggle = document.querySelector('.nav-toggle');
  const nav = document.getElementById('primary-navigation');
  const navLinks = nav ? nav.querySelectorAll('a') : [];
  const form = document.querySelector('.contact-form');
  const formMessage = document.querySelector('.form-message');

  function toggleNav(open) {
    if (!nav || !navToggle) return;
    nav.setAttribute('data-visible', String(open));
    navToggle.setAttribute('aria-expanded', String(open));
    navToggle.querySelector('.sr-only').textContent = open ? 'Zavrieť menu' : 'Otvoriť menu';
  }

  if (navToggle && nav) {
    navToggle.addEventListener('click', () => {
      const isVisible = nav.getAttribute('data-visible') === 'true';
      toggleNav(!isVisible);
    });
  }

  navLinks.forEach((link) => {
    link.addEventListener('click', () => {
      if (window.innerWidth <= 720) {
        toggleNav(false);
      }
    });
  });

  if (form) {
    form.addEventListener('submit', (event) => {
      event.preventDefault();
      if (!form.checkValidity()) {
        form.reportValidity();
        return;
      }
      const submitButton = form.querySelector('button[type="submit"]');
      if (submitButton) {
        submitButton.disabled = true;
        submitButton.textContent = 'Odosielanie...';
      }
      window.setTimeout(() => {
        if (submitButton) {
          submitButton.disabled = false;
          submitButton.textContent = 'Odoslať rezerváciu';
        }
        if (formMessage) {
          formMessage.textContent = 'Ďakujeme! Vaša rezervácia bola odoslaná. Ozveme sa vám čoskoro.';
          formMessage.classList.add('form-message--success');
        }
        form.reset();
      }, 900);
    });
  }
});
