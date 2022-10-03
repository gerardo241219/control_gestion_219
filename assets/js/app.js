const base_url = "http://10.6.29.219/controldegestion_nuevo/agenda/";

document.addEventListener('DOMContentLoaded', function() {
    var contenedorAgenda = document.getElementById('agenda');
  
    var agenda = new FullCalendar.Calendar(contenedorAgenda, {
      height: 555,
      selectable: true,
      headerToolbar: {
        left: '',
        center: 'title',
        right: ''
      },
      footerToolbar: {
        left: '',
        center: '',
        right: 'prev,next'
      },
      customButtons: {
        custom1: {
          icon: base_url + 'assets/images/calendario.jpg',
          click: function() {
            alert('clicked custom button 1!');
          }
        },
        custom2: {
          text: 'Nueva audiencia',
          click: function() {
            alert('clicked custom button 2!');
          }
        }
      },
      dateClick: function(info){
        $('#registroModal').modal("show");
      },
      // select: function(info) {}
    });
  
    agenda.render();
  });