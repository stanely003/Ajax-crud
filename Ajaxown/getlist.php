<?php

$con = new mysqli('localhost','root','','ajax');

$getList = "select * from crud";
$sql = $con->query($getList);
$result = $sql->fetch_all(MYSQLI_ASSOC);
//print_r($result);
 echo json_encode($result);

?>