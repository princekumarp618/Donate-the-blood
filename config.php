 <?php
 
$connect = mysqli_connect("localhost", "root", "", "donatetheblood");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

?>
