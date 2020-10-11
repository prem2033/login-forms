<?php
if(isset($_POST['submit'])){
 $user_mail=$_POST["email"];
 $user_password=$_POST["password"];
 echo $user_mail;echo $user_password;
 $dbservername = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "login";

// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword,$dbname);
//query
// $sql = "INSERT INTO login_details ('Name, email, phone, password) VALUES ($name, $email, $phone, $password)";
$sql = "SELECT password  FROM login_details WHERE email='premprakash2033@gmail.com'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$retrive_password=$row['password'];
echo $retrive_password;

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }else{
// echo "Connected successfully";
// }
if ($conn->query($sql) == TRUE and $retrive_password== $user_password  ) {
    echo "Login successsfully";
  } else {
    echo "Do create your account";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="dimension">
    <div id="login-page">
        <h1> WELCOME</h1>
        <img src="home.ico" alt="home logo">
        <form action="" method="POST">
            <div class="form-element">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter your mail">
            </div>
            <div class="form-element">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password">
            </div>
            <div class="form-button">
                <input type="submit" value="Login" name="submit">
            </div>
        </form>
        <div id="no-account-msg">
            <p>Don't have an account?<a href="signin.php">SignIn</a></p>
        </div>
    </div>
</section>
</body>
</html>