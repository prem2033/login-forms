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
$sql = "INSERT INTO login_details (Name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')";

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }else{
// echo "Connected successfully";
// }
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Account exist with this emailid";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/signin.css">
    <script src="../js/signin.js"></script>
</head>
<body>
    <section id="dimension">
    <div id="login-page">
        <h1> WELCOME</h1>
        <img src="../images/home.ico" alt="home logo">        
        <form  name="myForm" action="" method="POST"  onsubmit="return validateForm()"> 
            <div class="form-element">
                <label>Name</label>
                <input id="name" type="text" name="name" placeholder="Name">
                <span class="error-msg" id=name-error></span>
            </div>
            <div class="form-element">
                <label>Email</label>
                <input id="mail" type="text" name="email" placeholder="Email">
            </div>
            <div class="form-element">
                <label>Phone</label>
                <input id="phone" type="text" name="phone" placeholder="Phone number">
            </div>
            <div class="form-element">
                <label>Password</label>
                <input id="password" type="password" name="password" placeholder="Password">
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