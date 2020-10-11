<?php
if(isset($_POST['submit'])){
 $name=$_POST["name"];
 $email=$_POST["email"];
 $phone=$_POST["phone"];
 $password=$_POST["password"];
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
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
    <section id="dimension">
    <div id="login-page">
        <h1> WELCOME</h1>
        <img src="home.ico" alt="home logo">        
        <form action="" method="POST">
        <div class="form-element">
                <label>Namw</label>
                <input type="text" name="name" placeholder="Name">
            </div>
            <div class="form-element">
                <label>Email</label>
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="form-element">
                <label>Phone</label>
                <input type="tel" name="phone" placeholder="Phone number">
            </div>
            <div class="form-element">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="form-button">
                <input type="submit" value="SignUp" name="submit">
            </div>
        </form>
        <div id="no-account-msg">
            <p>Already have an account?<a href="index.php">login</a></p>
        </div>
    </div>
</section>
</body>
</html>