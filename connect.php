<?php
session_start();
// Get user data from the form
$userName = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Hash the password for security


// Database connection
$conn = new mysqli('localhost','root','','user_db',3306);
if($conn->connect_error){
  echo "$conn->connect_error";
  die("Connection Failed : ". $conn->connect_error);
} else {
  $stmt = $conn->prepare("SELECT id, userName, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    // Check if the user exists 
    if ($stmt->num_rows > 0) {
      echo "User already exisits";
      $stmt->close();
      $conn->close();
      die("");
    }
  // Prepare statement with password hashing
  $stmt = $conn->prepare("insert into users(userName, email, password) values(?, ?, ?)");
  $stmt->bind_param("sss", $userName, $email, $password);

  // Execute the statement
  $execval = $stmt->execute();

  // Handle execution result
  if (!$execval) {
    echo "Registration failed: " . mysqli_error($conn);
  } else {
        // Store variables in the session
        $_SESSION['username'] = $userName;
        $_SESSION['email'] = $email;
        header("Location:profile.php");
        exit();
      
  }

  // Close connections
  $stmt->close();
  $conn->close();
}
?>