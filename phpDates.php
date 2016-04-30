<DOCTYPE! html>
<head>
	<title>PHP Dates</title>
</head>
<body>

	<?php
	//syntax => date(format, timestamp); format is the required but timestamp optional; in array form
	
	/*
	--DATES--
	d - day of the month (1-31)
	m - month of the year (1-12)
	y - year (four digits)
	l (lower case L) - day of the week

	if you insert "/" or "." or "-" in the format, it will show
	*/

	echo "The date is " . date("m-d-y"); //place the format in quotes
	echo "<br />";
	echo "The day is " . date("l");

	echo "<br />";
	echo "<br />";

	/*
	--TIME--
	h - hours (01-12)
	i - minutes (00-59)
	s - seconds (00-59)
	a - (am or pm)
	*/

	//format still needs to be in quotes
	echo "The time is " . date("h:i:sa"); //hours:minutes:seconds am or pm

	echo "<br />";
	echo "<br />";

	//strtotime() transfers text to time
	$str = strtotime("June 6, 2015");
	echo date("m-d-y", $str);

	echo "<br />";
	echo "<br />";

	//mktime() allows you to set a time (can not go past January 1, 1970 00:00:00)
	//syntax => $fakeDate = mktime(hour, minute, second, month, day, year);
	$fakeDate = mktime(1, 30, 57, 8, 6, 2010);
	echo "The fake date is " . date("m-d-y h:i:sa", $fakeDate);
	?>
</body>
</html>