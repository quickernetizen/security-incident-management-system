<?php

include("../config/database.php");

$id=$_GET['id'];

$sql="
DELETE FROM incidents
WHERE id='$id'
";

if(mysqli_query($conn,$sql))
{
    echo json_encode([
        "message"=>"Deleted"
    ]);
}

?>
