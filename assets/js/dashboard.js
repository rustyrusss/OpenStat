/* ============================================================
   dashboard.js — Search & filter logic for Dashboard page
   All IDs and variables prefixed with "db-" / "db" to avoid
   conflicts with other page scripts.
   ============================================================ */

(function () {
  'use strict';

  function dbFilterCards() {
    var query  = (document.getElementById('db-search').value  || '').toLowerCase().trim();
    var filter = (document.getElementById('db-filter').value  || '').toLowerCase().trim();

    var cards   = document.querySelectorAll('#db-grid .db-card');
    var visible = 0;

    cards.forEach(function (card) {
      var label = (card.getAttribute('data-label') || '').toLowerCase();
      var desc  = (card.getAttribute('data-desc')  || '').toLowerCase();

      var matchSearch = !query  || label.includes(query) || desc.includes(query);
      var matchFilter = !filter || label === filter;
      var show        = matchSearch && matchFilter;

      card.style.display = show ? '' : 'none';
      if (show) visible++;
    });

    var noResults = document.getElementById('db-no-results');
    if (noResults) {
      noResults.style.display = (visible === 0) ? 'block' : 'none';
    }
  }

  document.addEventListener('DOMContentLoaded', function () {
    var searchInput  = document.getElementById('db-search');
    var filterSelect = document.getElementById('db-filter');

    if (searchInput)  searchInput.addEventListener('input',  dbFilterCards);
    if (filterSelect) filterSelect.addEventListener('change', dbFilterCards);
  });

})();