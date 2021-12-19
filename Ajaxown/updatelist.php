<?php

$con =new mysqli('localhost','root','','ajax');

$updateList = "update crud set name = '".$_POST['name']."', phone=".$_POST['phone'].",
               email='".$_POST['email']."' where student_id =".$_POST['id']."";
$update = $con->query($updateList);

if($update)
{
    $resul = array(
         'msg'=>true
    );
} else {
    $resul = array(
   'msg'=>false
    );
}
     echo json_encode($resul);


?>