<?php
 $name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST,'email');
 $phno = filter_input(INPUT_POST,'phno');
 $message = filter_input(INPUT_POST, 'message');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO contact(name, email, phno, message)
values ('$name','$email','$phno','$message')";
if ($conn->query($sql)){
echo "New registration is inserted sucessfully";}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}

?>