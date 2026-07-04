<?php

session_start();

include("../config/database.php");

if(isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users
    WHERE email='$email'";

    $result = mysqli_query($conn,$query);

    $user = mysqli_fetch_assoc($result);

    if($user && password_verify(
        $password,
        $user['password']
    )) {

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['full_name'];

        header("Location: ../dashboard/dashboard.php");

    } else {

        echo "Invalid Credentials";
    }
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<div class="card p-4">

<h3>Login</h3>

<form method="POST">

<input type="email"
name="email"
class="form-control mb-3"
placeholder="Email"
required>

<input type="password"
name="password"
class="form-control mb-3"
placeholder="Password"
required>

<button
name="login"
class="btn btn-success">

Login

</button>

</form>

</div>

</div>

</body>
</html>
