<!-- <!DOCTYPE html>
<html>
<head> -->
<meta charset='utf-8' />
<link href='<?php echo base_url('assets/fullcalendar'); ?>/lib/fullcalendar.min.css' rel='stylesheet' />
<link href='<?php echo base_url('assets/fullcalendar'); ?>/lib/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<link href='<?php echo base_url('assets/fullcalendar'); ?>/css/scheduler.min.css' rel='stylesheet' />

<link href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" rel="stylesheet" />
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
<script src='<?php echo base_url('assets/fullcalendar'); ?>/js/bootstrap-colorpicker.min.js'></script>
<script src='<?php echo base_url('assets/fullcalendar'); ?>/js/bootstrap-timepicker.min.js'></script>

<script src='<?php echo base_url('assets/fullcalendar'); ?>/lib/fullcalendar.min.js'></script>
<script src='<?php echo base_url('assets/fullcalendar'); ?>/js/scheduler.min.js'></script>



<script>

  $(function() { // document ready

    $('#calendar').fullCalendar({
      schedulerLicenseKey: 'GPL-My-Project-Is-Open-Source',
      now: '2018-06-06',
      // editable: true,
      selectable: true,
      aspectRatio: 2.5,
      scrollTime: '00:00',
      eventOverlap: false,
      header: {
        left: 'today prev,next',
        center: 'title',
        right: 'timelineDay,timelineThreeDays,listWeek'
      },
      defaultView: 'timelineDay',
      views: {
        timelineThreeDays: {
          type: 'timeline',
        duration: { days: 3 }

        }
      },
      dayClick: function(date, jsEvent, view, resource) {
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
          time: date.format('hh:mm'),
          id_lapangan: resource.id,
          nama_lapangan: resource.title,

        });
      // alert('clicked ' + date.format() + ' on resource ' + resource.id);
    },
    // select: function(startDate, endDate, jsEvent, view, resource) {
    //   alert('selected ' + startDate.format() + ' to ' + endDate.format() + ' on resource ' + resource.title);
    // },
      resourceAreaWidth: '45%',
      resourceColumns: [
        {
          group: true,
          labelText: 'Olahraga',
          field: 'building'
        },
        {
          labelText: 'Nama Lapangan',
          field: 'title'
        },
        {
          labelText: 'Tarif perJam',
          field: 'tarif'
        }
      ],
      minTime: '07:00:00',
      maxTime: '24:00:00',
      eventOverlap: false,
      // slotLabelInterval: '00:30:00',
      slotDuration: "01:00:00",
      resources: '<?php echo base_url('calendar/getResources') ?>',
      // [
      //   <?php foreach($getdata_lapangan as $u) : ?>
      //   { id: '<?php echo $u->id_lapangan; ?>', building: '<?php echo $u->nama_jenis_lapangan; ?>', title: '<?php echo $u->nama_lapangan ?>', tarif: '<?php echo $this->helptool->rupiah($u->harga_lapangan); ?>' },
      //   // { id: 'b', building: '460 Bryant', title: 'Auditorium B', tarif: 40, eventColor: 'green' },
      //   // { id: 'c', building: '460 Bryant', title: 'Auditorium C', tarif: 40, eventColor: 'orange' },
      //   // { id: 'd', building: '460 Bryant', title: 'Auditorium D', tarif: 40, children: [
      //   //   { id: 'd1', title: 'Room D1', tarif: 10 },
      //   //   { id: 'd2', title: 'Room D2', tarif: 10 }
      //   // ] },
      //   // { id: 'e', building: '460 Bryannt', title: 'Auditorium E', tarif: 40 },
      //   // { id: 'f', building: '460 Bryant', title: 'Auditorium F', tarif: 40, eventColor: 'red' },
      //   <?php endforeach; ?>
      // ],
      events: '<?php echo base_url('calendar/getEvents'); ?>'
      // [
      //   // <?php foreach($getdata_pemesanan as $u): ?>
      //   // { id: '<?php echo $u->id_booking ?>', resourceId: '<?php echo $u->id_lapangan ?>', start: '<?php echo $u->waktu_mulai ?>', end: '<?php echo $u->waktu_selesai ?>', title: 'event 1' },
      //   // { id: '2', resourceId: 'c', start: '2018-04-07T05:00:00', end: '2018-04-07T22:00:00', title: 'event 2' },
      //   // { id: '3', resourceId: 'd', start: '2018-04-06', end: '2018-04-08', title: 'event 3' },
      //   // { id: '4', resourceId: 'e', start: '2018-04-07T03:00:00', end: '2018-04-07T08:00:00', title: 'event 4' },
      //   // { id: '5', resourceId: 'f', start: '2018-04-07T00:30:00', end: '2018-04-07T02:30:00', title: 'event 5' }
      //   // <?php endforeach; ?>
      // ]
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
        $('#times').val(data.time);
        $('#id_lapangan').val(data.id_lapangan);
        $('#nama_lapangan').val(data.nama_lapangan);
        // $('#description').val(data.event ? data.event.description : '');
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
                nama_lapangan: $('#nama_lapangan').val(),
                // description: $('#description').val(),
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

  });

</script>
<style>

  body {
    margin: 0;
    padding: 0;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
  }

  #calendar {
    /* max-width: 90%; */
    margin: 50px auto;
    max-width: 80vw;

    /* border: 5px solid rgba(0,0,0,.5);
    border-radius: 10px; */

      }
  }

</style>
<!-- </head> -->
<!-- <body> -->

  <div id='calendar'></div>





  <!-- ModalForm -->
  <div id="crud-jadwal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                          <h4 class="modal-title"></h4>
                      </div>
                      <div class="modal-body">
                          <div class="error"></div>
                          <form class="form-horizontal" id="crud-form">
                              <div class="form-group">
                                  <label class="col-md-4 control-label" for="nama_lapangan">Nama Lapangan</label>
                                  <div class="col-md-6">
                                      <input id="nama_lapangan" name="nama_lapangan" type="text" class="form-control input-md" disabled/>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-4 control-label" for="time">Tanggal Sewa</label>
                                  <div class="col-md-4 input-append bootstrap-timepicker">
                                      <input id="date" name="date" type="text" class="form-control input-md" disabled />
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-4 control-label" for="title">Durasi Main</label>
                                  <div class="col-md-4">
                                      <select class="form-control" name="duration_time">
                                        <option>Pilih Durasi Main</option>
                                        <?php for($no=1;$no<=10;$no++): ?>
                                        <option value="<?php echo $no; ?>"><?php echo $no; ?> Jam</option>
                                      <?php endfor; ?>

                                      </select>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-4 control-label" for="times">Jam Mulai</label>
                                  <div class="col-md-4 input-append bootstrap-timepicker">
                                      <input id="times" name="times" type="text" class="form-control input-md" disabled />
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label class="col-md-4 control-label" for="description">Description</label>
                                  <div class="col-md-4">
                                      <textarea class="form-control" id="description" name="description"></textarea>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-4 control-label" for="color">Color</label>
                                  <div class="col-md-4">
                                      <input id="color" name="color" type="text" class="form-control input-md" readonly="readonly" />
                                      <span class="help-block">Click to pick a color</span>
                                  </div>
                              </div>
                          </form>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      </div>
                  </div>
              </div>
          </div>
  <!-- /ModalForm -->
<!-- </body>
</html> -->
