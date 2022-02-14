(function() {
  
  const search = {
    searchTimer: null,
    searchInterval: 500,
    searchInput: document.getElementById('search'),
    
    focus() {
      setTimeout(() => {
        search.searchInput.focus();
        search.searchInput.select();
      }, 200);
    },
    
    addEventListeners() {
      search.searchInput.addEventListener('input', e => {
        document.getElementById('results').innerHTML = '<div class="sk-spinner sk-spinner-three-bounce"><div class="sk-bounce1"></div><div class="sk-bounce2"></div><div class="sk-bounce3"></div></div>';
        clearTimeout(search.searchTimer);
        search.searchTimer = setTimeout(search.doSearch, search.searchInterval);
      });
    },
    
    doSearch() {
      $.post('/challenge/ajax/search', {q: search.searchInput.value}, function(result) {
        document.getElementById('results').innerHTML = result;
        similar.getCount();
        similar.getRows();
        tooltips.init();
      });
    }
  };
  
  const similar = {
    addEventListeners() {
      $('#results').on('click', '.result-cell:nth-child(8)', function() {
        $(this).next().find('a').click();
      });
      
      $('#results').on('click', '.collapse-link', function () {
        var ibox = $(this).closest('div.ibox');
        var button = $(this).find('i');
        var content = ibox.children('.ibox-content');
        content.slideToggle(200);
        button.toggleClass('fa-chevron-up').toggleClass('fa-chevron-down');
        ibox.toggleClass('').toggleClass('border-bottom');
        setTimeout(function () {
            ibox.resize();
            ibox.find('[id^=map-]').resize();
        }, 50);
      });
    },
    
    getCount() {
      let rids = Array.from(document.querySelectorAll('.result-row[data-id]')).map(x => {return x.dataset.id});
      rids.forEach(rid => {
        $.post('/challenge/ajax/count', {rid: rid}, function(result) {
          let el = document.querySelector('[data-id="'+rid+'"] .similar');
          if (el) {
            el.innerHTML = '<span class="label label-primary" data-toggle="tooltip" data-container="body" data-placement="top" title="" data-original-title="We found '+result.count+' student'+(result.count == '1' ? '' : 's')+' who '+(result.count == '1' ? 'is' : 'are')+' younger and had the same favorite color or movie.">'+result.count+'</span>';
            tooltips.init();
          }
        });
      });
    },
    
    getRows() {
      let rids = Array.from(document.querySelectorAll('.result-row[data-id]')).map(x => {return x.dataset.id});
      rids.forEach(rid => {
        let el = document.querySelector('.result-row[data-id="'+rid+'"]');
        if (el) {
          el = el.parentElement.nextElementSibling;
          $.post('/challenge/ajax/similar', {rid: rid}, function(result) {
            if (el) el.innerHTML = result;
            tooltips.init();
          });
        }
      });
    }
  };
  
  const tooltips = {
    init() {
      document.querySelectorAll('[data-toggle="tooltip"]').forEach(e => {
        if (e.classList.contains('truncated-cell') && e.offsetWidth < e.scrollWidth) {
          $(e).removeAttr('data-toggle').tooltip();
        } else if (e.classList.contains('truncated-cell')) {
          // Remove attribute so similar lookup doesn't add the tooltip
          $(e).removeAttr('data-toggle');
        } else {
          $(e).removeAttr('data-toggle').tooltip();
        }
      });
    }
  };
  
  const exporter = {
    addEventListeners() {
      $('#results').on('click', '#export', function() {
        exporter.doExport();
      });
    },
    
    doExport() {
      let csv = [];
      let rows = document.querySelectorAll('.result-row');
      for (let i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll('.result-cell');
        for (var j = 0; j < cols.length; j++) {
          var data = cols[j].innerText.replace(/(\r\n|\n|\r)/gm, '').replace(/(\s\s)/gm, ' ')
          data = data.replace(/"/g, '""');
          row.push('"' + data + '"');
        }
        csv.push(row.join(','));
      }
      var csv_string = csv.join('\n');
      var filename = 'student-search.csv';
      var link = document.createElement('a');
      link.style.display = 'none';
      link.setAttribute('target', '_blank');
      link.setAttribute('href', 'data:text/csv;charset=utf-8,' + encodeURIComponent(csv_string));
      link.setAttribute('download', filename);
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
    }
  };
  
  search.focus();
  
  search.addEventListeners();
  similar.addEventListeners();
  exporter.addEventListeners();
  
})();