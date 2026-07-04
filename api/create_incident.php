<?php

include("../config/database.php");

$title=$_POST['title'];
$description=$_POST['description'];
$severity=$_POST['severity'];

$sql="INSERT INTO incidents
(title,description,severity)
VALUES
('$title','$description','$severity')";

if(mysqli_query($conn,$sql))
{
    echo json_encode([
        "status"=>"success",
        "message"=>"Incident Created"
    ]);
}
else
{
    echo json_encode([
        "status"=>"error"
    ]);
}

?>
