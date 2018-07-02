

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="<?php echo base_url('assets/index/') ?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/index/') ?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/index/') ?>js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/index/') ?>js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/index/') ?>js/main.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/index/') ?>js/currencyFormatter.min.js"></script>

	<script src="<?php echo base_url('assets/adminlte2/'); ?>bower_components/moment/moment.js"></script>

	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
	<script src='<?php echo base_url('assets/fullcalendar'); ?>/js/bootstrap-colorpicker.min.js'></script>
	<script src='<?php echo base_url('assets/fullcalendar'); ?>/js/bootstrap-timepicker.min.js'></script>

	<script src='<?php echo base_url('assets/fullcalendar'); ?>/lib/fullcalendar.min.js'></script>
	<script src='<?php echo base_url('assets/fullcalendar'); ?>/js/scheduler.min.js'></script>

	<!-- <script src="<?php echo base_url('assets/fullcalendar/'); ?>js/main_fullcalendar.js"></script> -->


	<script type="text/javascript">

  $(document).ready(function() {
  	// get current URL path and assign 'active' class
  	var pathname = window.location.pathname;
  	$('li > a[href="'+pathname+'"]').parent().addClass('active');
  })

  $(function() {
     $("li").click(function() {
        // remove classes from all
        $("li").removeClass("active");
        // add class to the one we clicked
        $(this).addClass("active");
     });
  });
// 	$(function(){
//
//     var url = window.location.pathname,
//         urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
//         // now grab every link from the navigation
//         $('.menu a').each(function(){
//             // and test its normalized href against the url pathname regexp
//             if(urlRegExp.test(this.href.replace(/\/$/,''))){
//                 $(this).addClass('active');
//             }
//         });
//
// });

  </script>
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
				// buttons: {
				// 		add: {
				// 				id: 'add-event', // Buttons id
				// 				css: 'btn-success', // Buttons class
				// 				label: 'Adds' // Buttons label
				// 		}
				// },
				title: 'Add Event (' + date.format('MMMM DD YYYY HH:mm:ss') + ')',  // Modal title
				date: date.format('YYYY-MM-DD'),
				waktu_mulai: date.format('YYYY-MM-DD HH:mm:ss'),
				time: date.format('HH:mm'),
				id_lapangan: resource.id,
				// id_member: '<?php echo $this->session->userdata('id_member') ?>' ,
				nama_lapangan: resource.title,
				tarif: resource.tarif,
				tarif_nonrp: resource.tarif_nonrp

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
		resources: '<?php echo base_url('member/getResources') ?>',
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
		events: '<?php echo base_url('member/getEvents'); ?>'
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
			$('#waktu_mulai').val(data.waktu_mulai);
			$('#times').val(data.time);
			$('#id_lapangan').val(data.id_lapangan);
			$('#id_member').val(data.id_member);
			$('#nama_lapangan').val(data.nama_lapangan);
			$('#tarif').val(data.tarif);
			$('#tarif_nonrp').val(data.tarif_nonrp);


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
	// $('#crud-jadwal').on('click', '#add-event',  function(e){
	//     if(validator(['nama_lapangan', 'times'])) {
	//         $.post(base_url+'calendar/addEvent', {
	//             // nama_lapangan: $('#nama_lapangan').val(),
	//             // description: $('#description').val(),
	//             // color: $('#color').val(),
	//             // start: $('#date'+'#times').val(),
	//             end: $('#end').val()
	//         },
	//          function(result){
	//             $('.alert').addClass('alert-success').text('Event added successfuly');
	//             $('.modal').modal('hide');
	//             $('#calendar').fullCalendar("refetchEvents");
	//             hide_notify();
	//         });
	//     }
	// });

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


<!--
	<script type="text/javascript">
	OSREC.CurrencyFormatter.formatEach('.money');

	</script> -->



<embed src="m.mp3" autostart="true" loop="false" hidden="true">

</body>
</html>
