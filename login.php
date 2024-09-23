<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$emailID = $_POST['emailID'];
$passWord = $_POST['passWord'];
$phoneNumber = $_POST['phoneNumber'];

$conn = new mysqli('localhost','root','','KD-CHEMISTRY');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into refistration(firstName, lastName, emailID, passWord, phoneNumber)values(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi",$firstName, $lastName, $emailID, $passWord, $phoneNumber);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();
}
?>