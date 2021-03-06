<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PizzaBay - Register</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css" type="text/css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../favicon/favicon.ico" type="image/x-icon">

    <!-- JS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>

<body style="background-color: #422520; " id="top">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width: 93%; background-color: brown; margin-left: 2%; padding-inline: 1%">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#" style="font-family: 'Pacifico', cursive;">PizzaBay</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../../index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../pages/recipies/index.html">Recipies</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../../pages/contactus/index.html">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        More
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" style="color: grey;" href="../../pages/termsac/index.html">Terms and Conditions</a></li>
                            <li><a class="dropdown-item" style="color: grey;" href="../../pages/pripolicy/index.html">Privacy Policy</a></li>
                            <li><a class="dropdown-item" style="color: grey;" href="../../pages/about/index.html">About Us</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../../pages/login/index.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../../pages/register/index.html">Register/Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../pages/controlpanel/index.php">Control Panel</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->


    <div class="contactus">
                <div class="contactus-header"  style="width: 100%; height:100%">
                    User successfully registered
                </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="main.js">
    </script>
</body>
</html>
<?php

$servername = "localhost";
$username ="root";
$password = "";
$database_name="Pizzabay";

$conn = mysqli_connect($servername, $username, $password, $database_name);

$name = $_POST['fname'];
$uname = $_POST['username'];
$email = $_POST['email'];
$passcode = $_POST['password'];

$sql = "INSERT INTO REGISTER_tbl (full_name, username, email, passcode) VALUES ('$name', '$uname', '$email', '$passcode')";

mysqli_query($conn,$sql);
// if(mysqli_query($conn,$sql)){
//     echo "inserted value successfully<br>";
// }else {
//     echo "Error creating table ". mysqli_error($conn);
// }