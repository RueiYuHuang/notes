<?php
echo time();
?>
<hr>
<?php
echo date_default_timezone_get();
echo "<br>";
ini_set("date.timezone", "Asia/Tokyo");
echo date("H:i:s");
echo "<br>";
date_default_timezone_set("Europe/London");
echo date("H:i:s");
?>
<hr>
<?php
date_default_timezone_set("Asia/Taipei");
echo date('d F')." of ".date('Y')." is a ".date('l')."<br>";
echo "Current time is ".date("h:i:s A");
?>
<hr>
<?php
echo date("H:i:s")."<br>";
echo gmdate("H:i:s")."<br>";
?>
<hr>
<?php
$timestamp=strtotime("3 April 2020");
echo date('d-F-y', $timestamp)."'s timestamp is ".$timestamp;

?>