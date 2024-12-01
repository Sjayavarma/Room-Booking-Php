<?php

$conn = mysqli_connect('localhost:3307', 'root', '', 'fridayin_hotel');

$id = $_GET['id'];

$roomdeletesql = "DELETE FROM staff WHERE id = $id";

$result = mysqli_query($conn, $roomdeletesql);

header("Location:staff.php");

?>