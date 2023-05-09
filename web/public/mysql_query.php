<?php
require_once('mysql_con.php');  
$sql="SELECT * FROM CHARACTER_SETS";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "CHARACTER_SET_NAME: " . $row["CHARACTER_SET_NAME"]. " - Default_collate_name: " . $row["DEFAULT_COLLATE_NAME"]. " - DESCRIPTOIN: " . $row["DESCRIPTION"]. " " . $row["MAXLEN"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
echo "DB Connection Closed";
?>
