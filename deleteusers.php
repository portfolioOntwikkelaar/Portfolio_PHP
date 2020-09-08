<?php
require_once("connection/db.php");
$sql = "DELETE FROM userss WHERE id='" . $_GET["id"] . "'";
mysqli_query($conn,$sql);
header("Location:listusers.php");
?>
