<?php
require_once("Navbar.php");
// Start the session
// session_start();
// Database connection details
include 'config.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the data (you can add more validation)
    if (empty($username) || empty($password)) {
        $error = "Username and password are required.";
    } else {
        // Check the credentials against the database
        $sql = "SELECT * FROM auth WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);


        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $hashedPassword = $row['password'];
            $userrole = $row['user_role'];

            // Verify the password
            if (password_verify($password, $hashedPassword)) {
                // Set session username and user role
                $_SESSION['username'] = $username;
                $_SESSION['user_role'] = $userrole;


                // Redirect based on user role
                if ($userrole == 'admin') {
                    header('Location: Dashboard.php');
                } else {
                    header('Location: index.php');
                }
                exit();
            } else {
                $error = "Invalid password.";
            }
        } else {
            $error = "Invalid username.";
        }
    }
}

?>

<!-- ... (HTML part remains unchanged) ... -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4">Login</h2>
                <?php if (isset($error)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error; ?>
                    </div>
                <?php } ?>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>
                    <br /><br />
                    Don't have an account yet?<a href="<?php BASE_URL ?>register.php">Sign Up</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
<?php include 'footer.php'; ?>

</html>