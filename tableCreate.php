<?php 
	require ('sqlConnect.php');
	$sql = "USE MyDiary";
	if ($conn->query($sql) === TRUE)
	{
		$sql="CREATE TABLE MyDiary(
			year INT(4),
			month INT(2),
			day INT(2),
			entry VARCHAR(10000)
		)";
		if($conn->query($sql) === TRUE) { header('Location: main.html'); }
		else { echo "Error creating table: " . $conn->error; }
	}
	else { echo "Error accessing database: " . $conn->error; }
	$conn->close();
?>