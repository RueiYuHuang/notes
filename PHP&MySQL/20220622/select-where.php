<?php
require("../db-connect.php");
$sql="SELECT * FROM users WHERE name='sue'";

$result = $conn->query($sql);
$userCount=$result->num_rows;

if($userCount>0){
    while($row = $result->fetch_assoc()):
        var_dump($row);
        echo "<br>";
    endwhile;
}


$conn->close();

?>