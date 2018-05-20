<?php
require "connect.php";
$store_query = "INSERT INTO `readings` (`Temperature`, `Turbidity`, `pH`, `Conductivity`, `PositionID`, `Date`, `Time`) VALUES ('".$_GET["temperature"]."', '".$_GET["turbidity"]."', '".$_GET["ph"]."', '".$_GET["conductivity"]."', '".$_GET["positionid"]."', '".$_GET["date"]."', '".$_GET["time"]."')";
$is_store_query_run = mysqli_query($connect,$store_query);
?>