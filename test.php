<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "students";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$usn=$_GET["usn"];
$sql = "SELECT * FROM table1 a,table2 b where a.usn=b.usn and a.usn='{$usn}'";
$result = $conn->query($sql);
echo "<html><head><link rel=\"stylesheet\" type=\"text/css\" href=\"stylesheet.css\"/></head><body>";

if ($result->num_rows > 0) {
    // output data of each row
      echo "<table><tr><th>USN</th><th>Name</th><th>Branch</th><th>College</th><th>Contact</th><th>Academics</th><th>Technical</th><th>Soft Skills</th></tr>";
    while($row = $result->fetch_assoc()) {
      // output data of each row
        echo "<tr><td>".$row["usn"]."</td><td>".$row["name"]."</td><td>".$row["branch"]."</td><td>".$row["college"]."</td><td>".$row["contact"]."</td><td>".$row["academics"]."</td><td>".$row["technical"]."</td><td>".$row["soft_skills"]."</td></tr>";
      }
      echo "</table>";
    }
else {
    echo "0 results";
}
echo "</body></html>";
$conn->close();
?>
