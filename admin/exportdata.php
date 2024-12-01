<?php

$conn = mysqli_connect('localhost:3307', 'root', '', 'fridayin_hotel');

$sqlq = "SELECT * FROM roombook";
$result = mysqli_query($conn,$sqlq);
$roombook_record = array();

while( $rows = mysqli_fetch_assoc($result)){
    $roombook_record[] = $rows;
}

if(isset($_POST["exportexcel"]))
{
    $filename = "Fridayinn_roombook_data_".date('Ymd') .".xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $show_coloumn = false;
    if(!empty($roombook_record)){
        foreach($roombook_record as $record){
            if(!$show_coloumn){
                echo implode("\t",array_keys($record)) . "\n";
                $show_coloumn = true;
            }
            echo implode("\t", array_values($record)) . "\n";
        }
    }
    exit;
}


?>