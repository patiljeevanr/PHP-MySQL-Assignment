 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "UPDATE Customer SET name = '$_POST[name]', branch_name = '$_POST[branch]', balance = $_POST[balance] where acc_no = $_POST[acc_no]";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

/*
$query = "select * from Customer limit 100;";
$queryResult = $conn->query($query);
echo "<table>";
while ($queryRow = $queryResult->fetch_row()) {
    echo "<tr>";
    for($i = 0; $i < $queryResult->field_count; $i++){
        echo "<td>$queryRow[$i]</td>";
    }
    echo "</tr>";
}
echo "</table>";
*/
$conn->close();
?>
