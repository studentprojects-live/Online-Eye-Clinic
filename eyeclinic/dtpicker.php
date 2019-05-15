
	
	<link rel="stylesheet" type="text/css" href="calendar-eightysix-v1.1/css/page.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="calendar-eightysix-v1.1/css/calendar-eightysix-v1.1-default.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="calendar-eightysix-v1.1/css/calendar-eightysix-v1.1-vista.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="calendar-eightysix-v1.1/css/calendar-eightysix-v1.1-osx-dashboard.css" media="screen" />
	
	<script type="text/javascript" src="calendar-eightysix-v1.1/js/mootools-1.2.4-core.js"></script>
	<script type="text/javascript" src="calendar-eightysix-v1.1/js/mootools-1.2.4.4-more.js"></script>
	<script type="text/javascript" src="calendar-eightysix-v1.1/js/calendar-eightysix-v1.1.js"></script>
	
	<script type="text/javascript">
		window.addEvent('domready', function() {
			
			
			//Example II
			new CalendarEightysix('exampleII', { 'startMonday': true, 'slideTransition': Fx.Transitions.Back.easeOut, 'format': '%m-%d-%Y', 'draggable': true, 'offsetY': -4 });
		
			calendarXIII.render(); //Render again because while initializing and doing the first render it did not have the event set yet
		
		});	
	</script>
	

	<input id="exampleII" name="dateII" type="text" maxlength="10" />
