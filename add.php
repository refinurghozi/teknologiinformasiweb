<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$subject = $_POST['subject'];
		$komentar = $_POST['komentar'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(name,subject,komentar) VALUES('$name','$subject','$komentar')");
		
		// Show message when user added
		header("Refresh:0; url=index.php");
	}
	?>