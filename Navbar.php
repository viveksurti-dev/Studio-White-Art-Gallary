<?php
session_start();

// In a config file or a common include file
define('BASE_URL', '/studiowhite/');
// error_reporting(0);
// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $loggedIn = true;
    $username = $_SESSION['username'];
    $userrole = $_SESSION['user_role'];
} else {
    $loggedIn = false;
}

// Handle logout
if (isset($_GET['logout'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page
    header('Location:' . BASE_URL . 'login.php');
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Virtual Mart - Welcome, <?php echo $username; ?></title> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="Images/Logo/brand-logo.png" type="image/x-icon" />
</head>
<?php
// Display the alert if there is a message
if (!empty($alertMessage)) {
    echo $alertMessage;
    echo '<script>
            setTimeout(function(){
                $("#errorAlert").alert("close");
            }, 5000);
          </script>';
}
?>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php BASE_URL; ?>">Studio White</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL; ?>">Home</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL; ?>post.php">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL; ?>Gallary.php">Gallary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL; ?>contacts.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL; ?>testimonials.php">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL; ?>about.php">About</a>
                    </li>

                </ul>
                <!-- <form class="d-flex" id="search_query" action="<?php BASE_URL ?>Funtions/search.php" method="GET">
                    <input class="form-control me-2" name="query" type="search" placeholder="Search" aria-label="Search">
                </form> -->
                <?php if ($loggedIn) { ?>
                    <p class="navbar-nav ms-2">Welcome, <?php echo $username; ?>!</p>
                <?php } else { ?>

                <?php } ?>
                <?php if ($loggedIn) { ?>
                    <?php if ($userrole == 'admin') { ?>
                        <div class="dropdown">
                            <a href="#" class="btn ms-3 dropdown-toggle" id="adminDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dashboard
                            </a>
                            <div class="dropdown-menu" aria-labelledby="adminDropdown">
                                <!-- Add links for admin actions in the dropdown -->
                                <a class="dropdown-item" href="Dashboard.php">Dashboard</a>
                                <a class="dropdown-item" href="addpost.php">Create Post</a>

                                <a href="?logout" class="dropdown-item">Logout</a>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="dropdown">
                            <a href="#" class="btn ms-3 dropdown-toggle" id="adminDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dashboard
                            </a>
                            <div class="dropdown-menu" aria-labelledby="adminDropdown">
                                <!-- Add links for admin actions in the dropdown -->
                                <a class="dropdown-item" href="Dashboard.php">Dashboard</a>
                                <a href="?logout" class="dropdown-item">Logout</a>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- <a href="?logout" class="btn btn-danger ms-3">Logout</a> -->
                <?php } else { ?>
                    <a href="<?php echo BASE_URL; ?>login.php" class="btn  ms-3">Login</a>
                <?php } ?>
            </div>



        </div>
    </nav>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>