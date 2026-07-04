<?php

include("../config/database.php");

if(isset($_POST['register'])) {

    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = password_hash(
        $_POST['password'],
        PASSWORD_DEFAULT
    );

    $query = "INSERT INTO users
    (full_name,email,password)
    VALUES
    ('$name','$email','$password')";

    if(mysqli_query($conn,$query)){
        header("Location: login.php");
    } else {
        echo "Registration Failed";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

<div class="card p-4">

<h3>User Registration</h3>

<form method="POST">

<input type="text"
name="full_name"
class="form-control mb-3"
placeholder="Full Name"
required>

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
name="register"
class="btn btn-primary">

Register

</button>

</form>

</div>

</div>

</body>
</html>
