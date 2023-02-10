
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
//database connection  (portfolio) 
$conn = new mysqli('localhost','root','','portfolio');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt =$conn->prepare("insert into contact(name, email, phone, message)
    values(?,?,?,?)");
    $stmt->bind_param("ssis", $name, $email, $phone, $message);
    $stmt->execute();
    echo " Thanks For Contact Us We Will Contact You As Soon As Possible";
    $stmt->close();
    $conn->close();
}
?>