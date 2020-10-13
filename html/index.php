<?php
if(isset($_POST['submit'])){
 $user_mail=$_POST["email"];
 $user_password=$_POST["password"];
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
    <link rel="stylesheet" href="../css/indexlogin.css">
    <script src="../js/signin.js"></script>
</head>
<body>
    <section id="dimension">
    <div id="login-page">
        <h1> WELCOME</h1>
        <img src="../images/home.ico" alt="home logo">
        <form  name="myForm" action="" method="POST"  onsubmit="return validatebeforelogin()"> 
            <div class="form-element">
                <label>Email</label>
                <input id="mail" type="text" name="email" placeholder="Email">
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
            <p>Don't have an account?<a href="signin.php">SignIn</a></p>
        </div>
    </div>
</section>
</body>
</html>