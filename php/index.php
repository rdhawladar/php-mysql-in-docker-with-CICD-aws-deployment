<!-- ./php/index.php -->

<html>
    <head>
        <title>Docker PHP-mysql project for beginner</title>
    </head>

    <body>
    	<h1 class="text-center"> My Docker PHP project</h1>
    </body>
</html>
<?php
    echo "Hello, World!";

	$servername = "db";
	$username = "root";
	$password = "root";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";

?>

<!-- http://blog.adnansiddiqi.me/create-your-first-php-mysql-application-in-docker/ -->