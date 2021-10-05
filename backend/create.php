<?php
$servername = "localhost";
$username ="root";
$password = "";
$database_name="Pizzabay";

$conn = mysqli_connect($servername, $username, $password, $database_name);

// $sql = "CREATE TABLE REGISTER_tbl(
// id INT(4) UNSIGNED AUTO_INCREMENT,
// full_name VARCHAR(20),
// username VARCHAR(20),
// email VARCHAR(40), 
// passcode varchar(14),
// primary key(id, username, email, passcode)
// )";


// $sql = "CREATE TABLE LOGIN_tbl(
//     id INT(4) UNSIGNED AUTO_INCREMENT,
//     email VARCHAR(40),
//     passcode varchar(14),
//     primary key(id, email, passcode)
//     )";    


if(mysqli_query($conn,$sql)){
    echo "login table created successfully<br>";
}else {
    echo "Error creating table ". mysqli_error($conn);
}
