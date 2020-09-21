<head>
<title>Test</title>
<link rel="stylesheet" href="main_stylesheet.css">
</head>
<body>
<div class="textbox">
	<h1>Top 50 best verkochte games</h1>
	
    <?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "top50";
		
		$con=mysqli_connect($servername, $username, $password, $database);
		
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  exit;
		}

		// Return name of current default database
		if ($result = mysqli_query($con, "SELECT DATABASE()")) {
		  $row = mysqli_fetch_row($result);
		  print("<p>Connected to database: <b>" . $row[0] . "</b></p>");
		  mysqli_free_result($result);
		}

		// Change db to "test" db
		mysqli_select_db($con, "top50");
		
		
		// Perform query
		$result = mysqli_query($con, "SELECT Name, BoxArt, Publisher, Sales, ReleaseDate, Genre, Platforms FROM top50");

		// Display
		for ($i = 0; $i < 50; $i++) {
			$number = $i + 1;
			$var = mysqli_fetch_row($result);
			
			print("<p><b>" . $number . ". " . $var[0] . "</b></p>");
			print("<p><img class=\"boxart\" src=\"img/box_art/" . $var[1]. ".png\"></p>");
			print("<div class=\"data\"><b>Published by</b> " . $var[2] . "<br>");
			print("<b>Genre:</b> " . $var[5] . "<br>");
			print("<i class=\"sales\">" . $var[3] . "</i> total sales <br>");
			print("<b>Released on</b> " . $var[4] . "<br>");
			print("<b>Platforms:</b> " . $var[6] . "</div>");
			print("<p>&nbsp;</p>");
		}	
		
		// Close connection
		mysqli_close($con);
    ?>

	</div>
</body>