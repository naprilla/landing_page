[11.49, 5/2/2025] +62 856-4208-5688: file proses_login.php

<?php 

session_start(); 

include("koneksi.php"); 

$username = $_POST['username']; 

$password = $_POST['password']; 

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'"; 

$result = $conn->query($sql); 

if ($result->num_rows > 0) { 

 $_SESSION['username'] = $username; 

 header("Location: welcome.php"); 

} else { 

 echo "Login gagal. <a href='index.php'>Coba lagi</a>"; 

} 

$conn->close(); 

?>
[11.50, 5/2/2025] +62 856-4208-5688: dashboard.php


<?php 

session_start(); 

if (!isset($_SESSION['username'])) { 

 header("Location: index.php"); 

} 

?> 

<!DOCTYPE html> 

<html lang="en"> 

<head> 

 <meta charset="UTF-8"> 

 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

 <title>Welcome</title> 

</head> 

<body> 

 <h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2> 

 <p><a href="logout.php">Logout</a></p> 

</body> 

</html>
[11.51, 5/2/2025] +62 856-4208-5688: logout.php

<?php 

session_start(); 

session_destroy(); 

header("Location: index.php"); 

?>