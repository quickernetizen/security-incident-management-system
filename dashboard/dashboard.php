<?php

session_start();

if(!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
}

include("../config/database.php");

$total_incidents =
mysqli_num_rows(
mysqli_query(
$conn,
"SELECT * FROM incidents"
));

?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>
Welcome,
<?php echo $_SESSION['user_name']; ?>
</h2>

<hr>

<div class="row">

<div class="col-md-4">

<div class="card text-center">

<div class="card-body">

<h5>Total Incidents</h5>

<h1>
<?php echo $total_incidents; ?>
</h1>

</div>

</div>

</div>

</div>

</div>

</body>
</html>
