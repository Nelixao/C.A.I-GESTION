// tableFilters.js - Funcionalidad de filtrado de tablas
document.addEventListener('DOMContentLoaded', function() {
  function normalize(s) {
    return (s || '').toString().toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '');
  }
  
  document.querySelectorAll('.js-table-toolbar').forEach(function(toolbar) {
    const wrapper = toolbar.closest('.js-table-wrapper');
    if (!wrapper) return;
    
    const table = wrapper.querySelector('table.js-enhanced-table');
    const tbody = table ? table.tBodies[0] : null;
    const search = toolbar.querySelector('input.js-search');
    const stage = toolbar.querySelector('select.js-stage');
    const counter = wrapper.querySelector('.js-counter');
    
    if (!tbody) return;
    
    const rows = Array.from(tbody.querySelectorAll('tr'));
    
    function applyFilters() {
      const q = normalize(search ? search.value : '');
      const stg = (stage ? stage.value : '') || '';
      let visible = 0;
      
      rows.forEach(tr => {
        const asunto = normalize(tr.getAttribute('data-asunto') || '');
        const text = normalize(tr.getAttribute('data-text') || tr.textContent || '');
        const rowStage = (tr.getAttribute('data-stage') || '').toLowerCase();
        
        const matchesAsunto = !q || asunto.includes(q);
        const matchesText = !q || text.includes(q);
        const matchesStage = !stg || stg === 'todos' || rowStage === stg;
        const show = (matchesAsunto || matchesText) && matchesStage;
        
        tr.style.display = show ? '' : 'none';
        if (show) visible++;
      });
      
      if (counter) {
        const total = rows.length;
        counter.textContent = `Mostrando ${visible} de ${total}`;
      }
    }
    
    if (search) search.addEventListener('input', applyFilters);
    if (stage) stage.addEventListener('change', applyFilters);
    applyFilters();
  });
});

// sidebarManager.js - Gestión del sidebar
class SidebarManager {
  constructor() {
    this.sidebar = document.getElementById('sidebar');
    this.toggleBtn = document.getElementById('toggleSidebar');
    this.storageKey = 'sidebar-mini';
    
    this.init();
  }
  
  init() {
    if (localStorage.getItem(this.storageKey) === '1') {
      this.sidebar.classList.add('mini');
    }
    
    this.toggleBtn?.addEventListener('click', () => {
      this.toggle();
    });
  }
  
  toggle() {
    this.sidebar.classList.toggle('mini');
    localStorage.setItem(
      this.storageKey, 
      this.sidebar.classList.contains('mini') ? '1' : '0'
    );
  }
}

// Inicialización cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
  new SidebarManager();
});