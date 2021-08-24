<html>
    <head>
    </head>
    <body style="background-color:rgb(17, 121, 121);">
        <h1 style="text-shadow: 2px 2px 5px;">Course Details</h1>
    <?php    
    $conn = mysqli_connect("localhost","root","","webdb");
    $sql = "SELECT * FROM coursedb;";
    $result = mysqli_query($conn,$sql);
    echo "<table border='1'class='center'>
    <tr>
    <th>Course name</th>
    <th>Course code</th>
    <th>Course description</th>
    <th>Semister</th>
    <th>Academic year</th>
    <th>Course Instructor</th>
    <th>Results</th>
    </tr>";
while($row=mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>".$row['csname']."</td>";
    echo "<td>".$row['cscode']."</td>";
    echo "<td>".$row['csdescription']."</td>";
    echo "<td>".$row['semister']."</td>";
    echo "<td>".$row['acyear']."</td>";
    echo "<td>".$row['csiname']."</td>";
    echo "<td>".$row['results']."</td>";
    echo "</tr>";
}
echo "</table>";
 ?>
    </body>
</html>