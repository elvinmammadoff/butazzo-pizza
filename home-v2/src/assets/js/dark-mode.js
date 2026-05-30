/* Butazzo Pizza — Dark mode toggle */
(function () {
  var STORAGE_KEY = 'butazzo-theme';

  function applyTheme(theme) {
    document.documentElement.setAttribute('data-bs-theme', theme);
  }

  function getStored() {
    try { return localStorage.getItem(STORAGE_KEY); } catch (e) { return null; }
  }

  function setStored(theme) {
    try { localStorage.setItem(STORAGE_KEY, theme); } catch (e) { /* no-op */ }
  }

  // Initial theme is set inline in <head> to avoid FOUC; this just wires the toggle.
  document.addEventListener('DOMContentLoaded', function () {
    var btn = document.querySelector('.theme-toggle');
    if (!btn) return;
    btn.addEventListener('click', function () {
      var current = document.documentElement.getAttribute('data-bs-theme') || 'light';
      var next = current === 'dark' ? 'light' : 'dark';
      applyTheme(next);
      setStored(next);
      btn.setAttribute('aria-label', next === 'dark' ? 'Switch to light mode' : 'Switch to dark mode');
    });
  });
})();
