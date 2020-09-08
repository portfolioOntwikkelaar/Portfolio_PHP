<?php
require_once("connection/db.php");
$sql = "DELETE FROM chat WHERE id='" . $_GET["id"] . "'";
mysqli_query($conn,$sql);
header("Location:skills.php");
?>
