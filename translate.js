(function () {
  var STORAGE_KEY = 'agota-lang';

  function applyLanguage(lang) {
    document.querySelectorAll('[data-en]').forEach(function (el) {
      if (el.dataset.sk === undefined) {
        el.dataset.sk = el.textContent;
      }
      el.textContent = lang === 'en' ? el.dataset.en : el.dataset.sk;
    });

    document.querySelectorAll('[data-en-placeholder]').forEach(function (el) {
      if (el.dataset.skPlaceholder === undefined) {
        el.dataset.skPlaceholder = el.getAttribute('placeholder') || '';
      }
      el.setAttribute(
        'placeholder',
        lang === 'en' ? el.dataset.enPlaceholder : el.dataset.skPlaceholder
      );
    });

    document.querySelectorAll('.lang-btn').forEach(function (btn) {
      btn.classList.toggle('is-active', btn.dataset.lang === lang);
    });

    document.documentElement.lang = lang === 'en' ? 'en' : 'sk';
  }

  document.addEventListener('DOMContentLoaded', function () {
    var saved = localStorage.getItem(STORAGE_KEY) || 'sk';
    applyLanguage(saved);

    document.querySelectorAll('.lang-btn').forEach(function (btn) {
      btn.addEventListener('click', function () {
        var lang = btn.dataset.lang;

        if (lang === 'lt') {
          // LT is a placeholder language block only — no translation exists for it.
          document.querySelectorAll('.lang-btn').forEach(function (b) {
            b.classList.toggle('is-active', b === btn);
          });
          return;
        }

        applyLanguage(lang);
        localStorage.setItem(STORAGE_KEY, lang);
      });
    });
  });

  window.agotaCurrentLang = function () {
    return localStorage.getItem(STORAGE_KEY) || 'sk';
  };
})();
