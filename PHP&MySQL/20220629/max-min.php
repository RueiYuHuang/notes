<?php
require("../db-connect.php");

$sqlMax="SELECT *FROM product
WHERE price=(SELECT MAX(price) FROM product)";

$result=$conn->query($sqlMax);
$rows=$result->fetch_all(MYSQLI_ASSOC);

var_dump($rows);

?>
<hr>
<?php
$sqlMin="SELECT *FROM product
WHERE price=(SELECT MIN(price) FROM product)";

$result=$conn->query($sqlMin);
$rows=$result->fetch_all(MYSQLI_ASSOC);

var_dump($rows);

?>
