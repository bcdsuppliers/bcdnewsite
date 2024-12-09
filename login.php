<?php
// Start the session
session_start();

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bcd_suppliers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize user inputs
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    // Validate input
    if (empty($email) || empty($password)) {
        header('Location: login.php?error=missing_credentials');
        exit();
    }

    // Prepare and execute SQL query
    $sql = "SELECT * FROM admins WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user['password'])) {
            // Login successful
            $_SESSION['logged_in'] = true;
            $_SESSION['user_id'] = $user['id']; // Example: Store user ID in session
            header('Location: dashboard.php');
            exit();
        } else {
            // Invalid password
            header('Location: login.php?error=invalid_credentials');
            exit();
        }
    } else {
        // Invalid email
        header('Location: login.php?error=invalid_credentials');
        exit();
    }

    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <h1 class="h4 mb-4">Login</h1>
                <!-- Display error messages -->
                <?php if (isset($_GET['error'])): ?>
                    <div class="alert alert-danger">
                        <?php if ($_GET['error'] === 'invalid_credentials'): ?>
                            Invalid email or password. Please try again.
                        <?php elseif ($_GET['error'] === 'missing_credentials'): ?>
                            Please fill in both email and password fields.
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <form action="login.php" method="POST" class="border p-4 bg-white shadow rounded">
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
