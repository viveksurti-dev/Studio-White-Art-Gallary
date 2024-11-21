<?php

require_once("Navbar.php");

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Database connection details
include 'config.php';

// Check if the form is submitted for updating
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = isset($_POST['id']) ? $_POST['id'] : 0;
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $user_role = $_POST['user_role'];

    // Check if a new image is provided
    if ($_FILES['new_image']['name'] != '') {
        $newImageName = $_FILES['new_image']['name'];
        $newImageTemp = $_FILES['new_image']['tmp_name'];
        $uploadPath = 'Images/Auth/'; // Replace with your desired upload directory

        // Move the uploaded image to the desired directory
        move_uploaded_file($newImageTemp, $uploadPath . $newImageName);

        // Update data in the database with the new image
        $query = "UPDATE auth SET
            userimage='$uploadPath$newImageName',
            username='$username',
            firstname='$firstname',
            lastname='$lastname',
            phone='$phone',
            gender='$gender',
            email='$email',
            user_role='$user_role'
            WHERE id=$id";
    } else {
        // Update data in the database without changing the image
        $query = "UPDATE auth SET
            username='$username',
            firstname='$firstname',
            lastname='$lastname',
            phone='$phone',
            gender='$gender',
            email='$email',
            user_role='$user_role'
            WHERE id=$id";
    }

    if ($conn->query($query) === TRUE) {
        header("Location: Dashboard.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Fetch user data based on the ID from the URL
$id = isset($_GET['id']) ? $_GET['id'] : 0;

$query = "SELECT * FROM auth WHERE id=$id";
$result = $conn->query($query);

if (!$result) {
    die("Error: " . $conn->error);
}

$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- add icon link -->
    <style>
        <?php include 'index.css'; ?>
    </style>
</head>

<body>
    <div class="dash-sec1 container pt-3 col-md-6">
        <div class="container col-md-10">
            <div class="dash-about-title mb-3">
                <center>Edit Profile</center>
            </div>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="mb-3">
                    <label for="new_image" class="form-label">Current Image &nbsp;</label>
                    <img src="<?php echo $row['userimage']; ?>" alt="No Current Image" width="100" class="mb-2 rounded-2">
                    <br>
                    <label for="new_image" class="form-label">New Image:</label>
                    <input type="file" name="new_image" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" name="username" value="<?php echo $row['username']; ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="firstname" class="form-label">First Name:</label>
                    <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Last Name:</label>
                    <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone:</label>
                    <input type="text" name="phone" value="<?php echo $row['phone']; ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Gender:</label>
                    <select class="form-select" name="gender">
                        <option value="Male" <?php if ($row['gender'] == 'Male') echo 'selected'; ?>>Male</option>
                        <option value="Female" <?php if ($row['gender'] == 'Female') echo 'selected'; ?>>Female</option>
                        <option value="Other" <?php if ($row['gender'] == 'Other') echo 'selected'; ?>>Other</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control">
                </div>
                <input type="hidden" name="user_role" value="<?php echo $row['user_role']; ?>">
                <button type="submit" class="btn btn-logout mb-5 mt-2">Update</button>
            </form>
        </div>


        <!-- Bootstrap JS (optional) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <?php
        // Close the database connection
        $conn->close();
        ?>


    </div>
</body>
<?php include 'footer.php'; ?>

</html>