<?php
include("connection.php");

$media = $_GET['pre'];


$query ="SELECT `name`, `media`, `comment`, `likke` FROM `status` WHERE media ='$media'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
$nam = $result['name'];
$medianame = $result['media'];
$oldlike = $result['likke'];
$oldcoment = $result['comment'];
$query ="DELETE FROM status WHERE media ='$medianame'";
$data = mysqli_query($conn,$query);
header('location:status.php');

?> 