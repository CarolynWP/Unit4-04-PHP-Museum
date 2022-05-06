<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- CSS -->
    <link rel="stylesheet" href="./css/style.css" />

		<!-- Sweetgum Tree Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png" />
    <link rel="manifest" href="./favicon/site.webmanifest" />
		
		<!-- title -->
    <title>Museum Discounts</title>
	</head>
	
	<!-- Body -->
	<body>
		<div class="margin">
			<?php echo "<h1>Are you eligible for a discount at the museum?</h1>" ?>

			<!-- input box for your age -->
			<?php echo '<h2>Use this website to find out!</h2>' ?>
			<form method = "post">
				<?php echo '<p>Input your age:</p>' ?>
				<input type="number" name="age" min="0" step="1" max="120">  
				<br>
				
				<!-- drop down menu for the days of the week -->
				
			  <label for="cars"><p>Input the day of the week</p></label>
			  <select name="day" id="day">
			    <option value="mon">Monday</option>
			    <option value="tue">Tuesday</option>
			    <option value="wed">Wednesday</option>
			    <option value="thu">Thursday</option>
			    <option value="fri">Friday</option>
			    <option value="sat">Saturday</option>
			    <option value="sun">Sunday</option>
			  </select>
				<br>
				<br>
				<!-- button to sumbit your answer -->
				<input type = "submit" name = "submit" value="Enter">  

				<!-- calculation -->
				<?php   
					if (isset($_POST["submit"])) {   
						// variables
						$age= $_POST["age"]; 
						$day= $_POST["day"]; 
				
						// if statement for if you are under 5 or over 95
						if ($age < 5 || $age > 95) {
							echo '<h4>You can go to the museum for FREE!</h4>'; 
						}
						// if statement for if you are between 12 and 21 or it's tuesday or thursday
						else if ($age > 12 && $age < 21 || $day == "tue" || $day == "thu") {
							echo '<h4>You will get a discount at the museum!</h4';
						}
						// else statement
						else {
							echo '<h4>You will not get a discount and will have to pay the normal price.</h4>';
						}  
						}
					?>
				</form>	
		</div>
	</body>
</html>