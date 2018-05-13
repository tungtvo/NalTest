<!-- https://www.jqueryscript.net/time-clock/Simple-Responsive-Availability-Calendar-Plugin-For-jQuery.html -->
<html>
<head>
    <link href="assets/availability-calendar.css" rel="stylesheet">
</head>
<body>
    <div>
        <a href="index.php">Homes</a>
    </div>
    <div id="calendar"></div>
</body>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="assets/availability-calendar.js"></script>
<script>
    var unavailableDates = [
        {start: "<?php echo $work['start_date']; ?>", end: "<?php echo $work['end_date']; ?>"}
    ];

    $('#calendar').availabilityCalendar(unavailableDates);
</script>
</html>