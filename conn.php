<?php
	$conn = new mysqli("localhost:3306", "root","Root1234","tour");
	if ($conn -> connect_errno) {
		die("Error !!! ".$conn -> connect_errno);
        $conn -> close();
}
?>