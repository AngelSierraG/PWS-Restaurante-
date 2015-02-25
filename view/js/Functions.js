 function setupCalendars() {
        // Embedded Calendar
        Calendar.setup(
          {
            dateField: 'FechaFin',
            parentElement: 'CalendarioFin'
          }
        )
        Calendar.setup(
          {
            dateField: 'FechaInicio',
            parentElement: 'CalendarioInicio'
          }
        )




        // Popup Calendar
        Calendar.setup(
          {
            dateField: 'popupDateField',
            triggerElement: 'popupDateField'
          }
        )
      }

      Event.observe(window, 'load', function() { setupCalendars() });