<?php 
	require ('sqlConnect.php');
	$sql = "CREATE DATABASE MyDiary";
	if ($conn->query($sql) === TRUE) { header('Location: license.html'); }
	else { header('Location: main.html'); }
?>