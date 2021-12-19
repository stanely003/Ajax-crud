
<?php

$con =new mysqli('localhost','root','','ajax');


$getLists = "insert into crud (name, phone, email)
            values('".$_POST['name']."','".$_POST['phone']."','".$_POST['email']."')";
$sql = $con->query($getLists);


if($sql)
{
    $res = array(
         'msg'=>true
    );
} else {
    $res = array(
   'msg'=>false
    );
}
     echo json_encode($res);


?>