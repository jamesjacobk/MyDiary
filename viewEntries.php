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

<!DOCTYPE html>
<html>
<head>
    <title> MyDiary </title>
    <link rel="stylesheet" type="text/css" href="css/style_viewentries.css">
</head>
<body>
    <h1> MyDiary </h1>
    <?php
        require ('sqlConnect.php');
        $sql = "USE MyDiary";
        $conn->query($sql);
        $sql = "select year,month,day,entry from MyDiary";
        $result = $conn->query($sql);

        if ($result->num_rows > 0)
        {
            echo "<table class='memories'><th>Year</th><th>Month</th><th>Day</th><th>Content</th>";
        
            while($row = $result->fetch_assoc())
            {
                echo "<tr><td>". $row["year"]. "</td><td>".$row["month"]."</td><td>".$row["day"]."</td><td>". $row["entry"]. "</td></tr>";
            }
            echo "</table>";
        }
        else { echo "0 results"; }
    ?>
</body>
</html>

