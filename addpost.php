<?php // session_start();
require_once("Navbar.php"); ?>
<?php

// Check user role, redirect to error page if the role is not admin
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location:" . BASE_URL . "error.php");
    exit();
}
// Database connection details
include 'config.php';

// Create 'advertise' table if not exists
$query = "CREATE TABLE IF NOT EXISTS posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    post_image VARCHAR(255) NOT NULL UNIQUE,
    post_description TEXT NOT NULL,
    created_date DATE NOT NULL,
    created_time TIME NOT NULL
)";

mysqli_query($conn, $query);
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adDescription = $_POST["post_description"];

    // Get the current date and time
    $currentDate = date("y-m-d");
    $currentTime = date("H:i");

    $targetDir = "Images/Posts/";
    $targetFile = $targetDir . basename($_FILES["post_image"]["name"]);

    // Create the directory if it doesn't exist
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    if (move_uploaded_file($_FILES["post_image"]["tmp_name"], $targetFile)) {
        $query = "INSERT INTO posts (post_image, post_description, created_date, created_time) 
                  VALUES ('$targetFile', '$adDescription', '$currentDate', '$currentTime')";
        mysqli_query($conn, $query);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Studio White - Create Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <div class="row mt-5 container-fluid">
        <div class="container col-md-6">
            <div>
                <div class="col-md-8 offset-md-3">
                    <h2 class="mb-4">Create Post</h2>
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="post_image">Post Image:</label>
                            <input type="file" class="form-control" id="post_image" name="post_image" accept="image/*" required>
                        </div>
                        <div class="form-group">
                            <label for="post_description">Post Caption:</label>
                            <textarea class="form-control" placeholder="Advertise Description" id="post_description" name="post_description" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Post</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 view-post">
            <center class="mt-3">
                <h3>Manage Posts</h3>
            </center>
            </tr>
            <!-- Wrap the table in a div with a fixed height and scrollable overflow -->
            <div class="all-post-container" style="max-height: 500px; overflow:hidden; overflow-y: auto;">
                <table class="table container mt-3">

                    <?php
                    $query = "SELECT * FROM posts";
                    $result = $conn->query($query);
                    ?>
                    <tr class="sticky-top">
                        <th>Post</th>
                        <th>Caption</th>
                        <th>Delete Post</th>
                    </tr>

                    <?php
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td><img src='" . $row['post_image'] . "' width='auto' height='100'></td>";
                        echo "<td>" . $row['post_description'] . "</td>";
                        echo "<td><a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>