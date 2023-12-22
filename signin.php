<?php session_start();
if (isset($_POST['login'])) {

    // Connect to the database 
    $conn = new mysqli('localhost', 'root', '', 'user_db', 3306);

    // Check for errors 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the SQL statement 
    $stmt = $conn->prepare("SELECT id, userName, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);

    // Get the form data 
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Execute the SQL statement 
    $stmt->execute();
    $stmt->store_result();
    
    // Check if the user exists 
    if ($stmt->num_rows > 0) {

        // Bind the result to variables 
        $stmt->bind_result($id,$username, $user_password);

        // Fetch the result 
        $stmt->fetch();
        

        // Verify the password 
        if ($password == $user_password) {

            // Set the session variables 
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $username;

            // Redirect to the user's dashboard 
            header("Location:profile.php");
            exit;
        } else {
            echo "Incorrect password!";
        }
    } else {
        echo "User not found!";
    }

    // Close the connection 
    $stmt->close();
    $conn->close();
}

?>