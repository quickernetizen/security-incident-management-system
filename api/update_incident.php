<?php

include("../config/database.php");

$id=$_POST['id'];
$status=$_POST['status'];

$sql="
UPDATE incidents
SET status='$status'
WHERE id='$id'
";

if(mysqli_query($conn,$sql))
{
    echo json_encode([
        "message"=>"Updated"
    ]);
}

?>
