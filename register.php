<?php
require_once("Navbar.php");
// Database connection details
include 'config.php';

// Create the 'auth' table if it doesn't exist
$create_table_query = "CREATE TABLE IF NOT EXISTS auth (
    id INT AUTO_INCREMENT PRIMARY KEY,
    userimage VARCHAR(255),
    username VARCHAR(255) UNIQUE,
    firstname VARCHAR(255),
    lastname VARCHAR(255),
    phone VARCHAR(15) UNIQUE,
    gender VARCHAR(10),
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255),
    user_role VARCHAR(20) DEFAULT 'user',
    accept_terms BOOLEAN
)";

$conn->query($create_table_query);

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userimage = $_FILES["userimage"]["name"];
    $username = $_POST["username"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $user_role = "user"; // Default role
    $accept_terms = isset($_POST["accept_terms"]) ? 1 : 0;

    // Check if username and email are unique
    $check_username = "SELECT * FROM auth WHERE username = '$username'";
    $check_email = "SELECT * FROM auth WHERE email = '$email'";

    $result_username = $conn->query($check_username);
    $result_email = $conn->query($check_email);

    if ($result_username->num_rows > 0) {
        echo "Username already exists. Please choose a different one.";
    } elseif ($result_email->num_rows > 0) {
        echo "Email already exists. Please use a different one.";
    } else {
        $base_url = "/studiowhite/";
        $upload_dir = $_SERVER['DOCUMENT_ROOT'] . $base_url . "Images/Auth/"; // Adjust the path accordingly
        $target_file = $upload_dir . basename($_FILES["userimage"]["name"]);
        move_uploaded_file($_FILES["userimage"]["tmp_name"], $target_file);
        $uploadPath = 'Images/Auth/'; // Replace with your desired upload directory
        // Insert data into the database
        $insert_query = "INSERT INTO auth (userimage, username, firstname, lastname, phone, gender, email, password, user_role, accept_terms)
                        VALUES ('$userimage', '$username', '$firstname', '$lastname', '$phone', '$gender', '$email', '$password', '$user_role', '$accept_terms')";

        if ($conn->query($insert_query) === TRUE) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Registration Form</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="">
                    <div class="">
                        Registration Form
                    </div>
                    <div class="card-body">
                        <form action="register.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="file" class="form-control" placeholder="Select Profile Picture" name="userimage" accept="image/*">
                            </div>
                            <!-- Other form fields... -->
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="firstname">First Name:</label>
                                <input type="text" class="form-control" name="firstname" required>
                            </div>
                            <div class="form-group">
                                <label for="lastname">Last Name:</label>
                                <input type="text" class="form-control" name="lastname" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number:</label>
                                <input type="tel" class="form-control" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label>Gender:</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="gender" value="male" required>
                                    <label class="form-check-label">Male</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="gender" value="female" required>
                                    <label class="form-check-label">Female</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password:</label>
                                <input type="password" class="form-control" name="confirm_password" required>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="accept_terms" required>
                                <label class="form-check-label">I accept the terms and conditions</label>
                            </div>
                            <!-- End of other form fields... -->
                            <button type="submit" class="btn btn-primary mt-3">Register</button>
                            <br /><br />
                            have an account yet?<a href="<?php BASE_URL ?>login.php">Sign In Here</a>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>

</body>
<?php include 'footer.php'; ?>

</html>