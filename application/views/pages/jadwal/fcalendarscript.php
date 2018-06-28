<!-- Page specific script -->
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function init_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    init_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
    var base_url='http://localhost/sewalapangan/';


    $('#calendar').fullCalendar({
    	defaultView: 'agendaDay',
       nowIndicator: true,
      aspectRatio: 1.7,
        scrollTime: '00:00',

		// views: {
		// timelineFourDays: {
		// type: 'timeline',
		// duration: {
    // 		minTime: "06:00:00",
    // 		maxTime: "12:00:00"
    // 	}
		// }
		// },


      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek, agendaDay'
      },
      // buttonText: {
      //   today: 'today',
      //
      //
      //   week : 'week',
      //   day  : 'day'
      // },
      //Random default events

      eventLimit: true,
      // events: base_url+'calendar/getEvents',
      resourceAreaWidth: '40%',
      resourceColumns: [
        {
          group: true,
          labelText: 'Building',
          field: 'building'
        },
        {
          labelText: 'Room',
          field: 'title'
        },
        {
          labelText: 'Occupancy',
          field: 'occupancy'
        }
      ],

      events: [
        { id: '1', resourceId: 'b', start: '2018-04-07T02:00:00', end: '2018-04-07T07:00:00', title: 'event 1' },
        { id: '2', resourceId: 'c', start: '2018-04-07T05:00:00', end: '2018-04-07T22:00:00', title: 'event 2' },
        { id: '3', resourceId: 'd', start: '2018-04-06', end: '2018-04-08', title: 'event 3' },
        { id: '4', resourceId: 'e', start: '2018-04-07T03:00:00', end: '2018-04-07T08:00:00', title: 'event 4' },
        { id: '5', resourceId: 'f', start: '2018-04-07T00:30:00', end: '2018-04-07T02:30:00', title: 'event 5' }
      ],
      selectable: true,
      selecthelper:true,



      // select: function(start, end, allDay) {
      //   var title = prompt("Enter event title");
      //   if(title){
      //     var start = $.fullCalendar.formatData(start,"Y-MM-DD HH:mm:ss");
      //     var end = $.fullCalendar.formatData(start,"Y-MM-DD HH:mm:ss");
      //   }
      //
      // },
      // select: function(start, end) {
      //
      //           $('#start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
      //           $('#end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));

      dayClick: function(date, event, view) {
                      currentDate = date.format();
                 // Open modal to add event
            modal({
                // Available buttons when adding
                buttons: {
                    add: {
                        id: 'add-event', // Buttons id
                        css: 'btn-success', // Buttons class
                        label: 'Add' // Buttons label
                    }
                },
                title: 'Add Event (' + date.format('MMMM DD YYYY hh:mm:ss') + ')',  // Modal title
                date: date.format('DD/MM/YYYY'),
                time : date.format('hh:mm')

            });
            },



      // editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function (date, allDay) { // this function is called when something is dropped

        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject')

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject)

        // assign it the date that was reported
        copiedEventObject.start           = date
        copiedEventObject.allDay          = allDay
        copiedEventObject.backgroundColor = $(this).css('background-color')
        copiedEventObject.borderColor     = $(this).css('border-color')

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)

        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove()
        }

      }
    })

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      init_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })
  });

  // Prepares the modal window according to data passed
  function modal(data) {
      // Set modal title
      $('.modal-title').html(data.title);
      // Clear buttons except Cancel
      $('.modal-footer button:not(".btn-default")').remove();
      // Set input values
      $('#title').val(data.event ? data.event.title : '');
      if( ! data.event) {
            // When adding set timepicker to current time
            var now = new Date();
            var time = now.getHours() + ':' + (now.getMinutes() < 10 ? '0' + now.getMinutes() : now.getMinutes());
              // var time = date.format();
        } else {
            // When editing set timepicker to event's time
            var time = data.event.date.split(' ')[1].slice(0, -3);
            time = time.charAt(0) === '0' ? time.slice(1) : time;
            // var time = date.format();
        }
      $('#date').val(data.date);
      $('#time').val(data.time);
      $('#description').val(data.event ? data.event.description : '');
      $('#color').val(data.event ? data.event.color : '#3a87ad');
      // Create Butttons
      $.each(data.buttons, function(index, button){
          $('.modal-footer').prepend('<button type="button" id="' + button.id  + '" class="btn ' + button.css + '">' + button.label + '</button>')
      })
      //Show Modal
      $('#crud-jadwal').modal('show');
  }

  // Handle Click on Add Button
  $('#crud-jadwal').on('click', '#add-event',  function(e){
      if(validator(['title', 'description'])) {
          $.post(base_url+'calendar/addEvent', {
              title: $('#title').val(),
              description: $('#description').val(),
              color: $('#color').val(),
              start: $('#start').val(),
              end: $('#end').val()
          }, function(result){
              $('.alert').addClass('alert-success').text('Event added successfuly');
              $('.modal').modal('hide');
              $('#calendar').fullCalendar("refetchEvents");
              hide_notify();
          });
      }
  });


  // Handle click on Update Button
  $('.modal').on('click', '#update-event',  function(e){
      if(validator(['title', 'description'])) {
          $.post(base_url+'calendar/updateEvent', {
              id: currentEvent._id,
              title: $('#title').val(),
              description: $('#description').val(),
              color: $('#color').val()
          }, function(result){
              $('.alert').addClass('alert-success').text('Event updated successfuly');
              $('.modal').modal('hide');
              $('#calendar').fullCalendar("refetchEvents");
              hide_notify();

          });
      }
  });



  // Handle Click on Delete Button
  $('.modal').on('click', '#delete-event',  function(e){
      $.get(base_url+'calendar/deleteEvent?id=' + currentEvent._id, function(result){
          $('.alert').addClass('alert-success').text('Event deleted successfully !');
          $('.modal').modal('hide');
          $('#calendar').fullCalendar("refetchEvents");
          hide_notify();
      });
  });

  function hide_notify()
  {
      setTimeout(function() {
                  $('.alert').removeClass('alert-success').text('');
              }, 2000);
  }


  // Dead Basic Validation For Inputs
  function validator(elements) {
      var errors = 0;
      $.each(elements, function(index, element){
          if($.trim($('#' + element).val()) == '') errors++;
      });
      if(errors) {
          $('.error').html('Please insert title and description');
          return false;
      }
      return true;
  }

</script>
