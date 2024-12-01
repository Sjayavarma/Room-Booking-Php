<?php

$conn = mysqli_connect('localhost:3307', 'root', '', 'fridayin_hotel');

$id = $_GET['id'];

$deletesql = "DELETE FROM payment WHERE id = $id";

$result = mysqli_query($conn, $deletesql);

header("Location:payment.php");

?>