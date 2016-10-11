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

