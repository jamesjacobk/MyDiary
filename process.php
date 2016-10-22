<!-- Copyright 2016 James Jacob Kurian

Contact me at: jamesjacobtech@gmail.com

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

   http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License. -->

<?php 
	require ('sqlConnect.php');
	$conn->query("USE MyDiary");
	date_default_timezone_set("Asia/Kolkata");
	$year=date("Y");
	$month=date("m");
	$day=date("d");
	$entry=mysqli_real_escape_string($conn,$_POST["entry"]);
	$sql = "SELECT entry from MyDiary where year=$year and month=$month and day=$day";
	if($conn->query($sql)->num_rows == 0)
	{
		if(!empty($entry))
		{
			$sql = "INSERT INTO MyDiary (year, month, day, entry)
				VALUES ('$year', '$month', '$day', '$entry')";
			if ( $conn->query($sql) === TRUE) { echo "<br /> entry successfully added"; }
			else { echo "Error : " . $conn->error ."<br />"; }
			$conn->close();	
			echo "<br />Go to <a href='main.html'>Main Page</a>";
		}
		else
		{
			echo "Please write some text!";
			$conn->close();	
			echo "<br />Go to <a href='main.html'>Main Page</a>";
		}
	}
	else
	{
		echo "You have already written down your memory for today!";
		$conn->close();	
		echo "<br />Go to <a href='main.html'>Main Page</a>";
	}
 ?>