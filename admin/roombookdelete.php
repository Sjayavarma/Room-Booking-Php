<?php

$conn = mysqli_connect('localhost:3307', 'root', '', 'fridayin_hotel');

$id = $_GET['id'];

$deletesql = "DELETE FROM roombook WHERE id = $id";

$result = mysqli_query($conn, $deletesql);

header("Location:roombook.php");

?>