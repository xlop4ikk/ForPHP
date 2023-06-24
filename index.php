<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];

$host = "localhost";
$port = "5432";
$dbname = "postgres";
$user = "postgres";
$password = "postgres";

$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";

$conn = pg_connect($connection_string);
if($conn) {
    echo ("Connected to database!"); 
}
else {
    echo "Error in connecting to database...";
}

$sql = "INSERT INTO users (first_name, last_name, age) VALUES ('$first_name', '$last_name', '$age')";
$result = pg_query($conn, $sql);
if(!$result){
  echo pg_last_error($dbconn);
} else {
  echo "Inserted successfully";
}

?>