/* C.A.I. Gestión — App JS */

document.addEventListener('DOMContentLoaded', function () {

  /* ── Sidebar toggle (mobile) ─────────────────────────── */
  const sidebar  = document.getElementById('sidebar');
  const toggle   = document.getElementById('sidebarToggle');
  const overlay  = document.getElementById('sidebarOverlay');

  function openSidebar()  { sidebar?.classList.add('open');  overlay?.classList.add('open'); }
  function closeSidebar() { sidebar?.classList.remove('open'); overlay?.classList.remove('open'); }

  toggle?.addEventListener('click', function () {
    sidebar?.classList.contains('open') ? closeSidebar() : openSidebar();
  });
  overlay?.addEventListener('click', closeSidebar);

  /* ── Enhanced tables ─────────────────────────────────── */
  function norm(s) {
    return (s || '').toString().toLowerCase()
      .normalize('NFD').replace(/[\u0300-\u036f]/g, '');
  }

  document.querySelectorAll('.js-table-wrapper').forEach(function (wrapper) {
    const toolbar = wrapper.querySelector('.js-table-toolbar');
    const search  = wrapper.querySelector('.js-search');
    const stage   = wrapper.querySelector('.js-stage');
    const counter = wrapper.querySelector('.js-counter');
    const table   = wrapper.querySelector('.js-enhanced-table');

    if (!table) return;

    const tbody = table.tBodies[0];
    if (!tbody) return;

    const rows = Array.from(tbody.querySelectorAll('tr'));

    function applyFilters() {
      const q   = norm(search?.value ?? '');
      const stg = (stage?.value ?? '').toLowerCase();
      let visible = 0;

      rows.forEach(function (tr) {
        const text     = norm(tr.dataset.text   ?? tr.textContent ?? '');
        const rowStage = (tr.dataset.stage ?? '').toLowerCase();

        const matchText  = !q   || text.includes(q);
        const matchStage = !stg || stg === 'todos' || rowStage === stg;
        const show = matchText && matchStage;

        tr.style.display = show ? '' : 'none';
        if (show) visible++;
      });

      if (counter) {
        counter.textContent = 'Mostrando ' + visible + ' de ' + rows.length;
      }
    }

    search?.addEventListener('input', applyFilters);
    stage?.addEventListener('change', applyFilters);
    applyFilters();

    /* Column sort on th click */
    table.querySelectorAll('thead th').forEach(function (th, colIdx) {
      th.style.cursor = 'pointer';
      th.title = 'Clic para ordenar';
      let asc = true;

      th.addEventListener('click', function () {
        const visible = rows.filter(r => r.style.display !== 'none');
        visible.sort(function (a, b) {
          const av = norm(a.cells[colIdx]?.textContent ?? '');
          const bv = norm(b.cells[colIdx]?.textContent ?? '');
          const an = parseFloat(av), bn = parseFloat(bv);
          if (!isNaN(an) && !isNaN(bn)) return asc ? an - bn : bn - an;
          return asc ? av.localeCompare(bv, 'es') : bv.localeCompare(av, 'es');
        });
        visible.forEach(r => tbody.appendChild(r));
        asc = !asc;
      });
    });
  });

});
