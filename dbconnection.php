<?php
// if (isset($_POST['submit'])) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_form";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection is failed:" . $conn->connect_error);
}
?>
<!-- 
    if (isset($_POST['submit'])) {
    $id = $_get['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $sql = "INSERT INTO form (name, email, phone, address, password) VALUES
    ('$name','$email','$phone','$address','$password')";


    if ($conn->query($sql) == TRUE) {
    $_SESSION['Message'] = "New Record Create Successfully";

    } else {
    $_SESSION['Message'] = "Error: " . $conn->error;
    }
    }

    $conn->close();
    header("Location:form.php");
exit; -->