<html>
<body>
<?php
 $name=$_POST["name"];
 $email=$_POST["email"];
 $phone=$_POST["phone"];
 $password=$_POST["password"];
 echo $name;echo $email;echo $phone; echo $password;
 $servername = "localhost";
 $username = "root";
 $dbpassword = "";
 $dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $dbpassword,$dbname);
//query
// $sql = "INSERT INTO login_details ('Name, email, phone, password) VALUES ($name, $email, $phone, $password)";
$sql = "INSERT INTO login_details (Name, email, phone, password) VALUES ('$servername', '$email', '$phone', '$password')";

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }else{
// echo "Connected successfully";
// }
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>
</body>
</html>