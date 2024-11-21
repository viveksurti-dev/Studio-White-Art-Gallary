<?php
// session_start();
require_once("Navbar.php");

// Database connection details
include 'config.php';

// Get the username from the session
$username = $_SESSION['username'];

// Retrieve user details from the database
$sql = "SELECT * FROM auth WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

// Initialize $userDetails as an empty array
$userDetails = array();

if ($result && mysqli_num_rows($result) > 0) {
    // Fetch the user details
    $userDetails = mysqli_fetch_assoc($result);
}


// Define variables for user details
$firstname = isset($userDetails['firstname']) ? $userDetails['firstname'] : '';
$lastname = isset($userDetails['lastname']) ? $userDetails['lastname'] : '';
$phonenumber = isset($userDetails['phone']) ? $userDetails['phone'] : '';
$gender = isset($userDetails['gender']) ? $userDetails['gender'] : '';
$email = isset($userDetails['email']) ? $userDetails['email'] : '';
$role = isset($userDetails['user_role']) ? $userDetails['user_role'] : '';
$userimage = isset($userDetails['userimage']) ? $userDetails['userimage'] : '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Studio White - Dashboard</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- add icon link -->
    <style>
        <?php include 'index.css'; ?>
    </style>

</head>

<body>

    <!-- <div class="dash-welcome mt-2">
        <h2 class="dash-welcome">Welcome to the Dashboard,<span> <?php echo $username; ?></span> !</h2>
    </div> -->
    <div class="dash-main container-fluid">

        <div class="col-md-8">


            <div class="dash-sec1">
                <div class="user-background mt-2">
                    <img src="Images/assets/userback.png" alt="">
                </div>

                <div class="user-forground container">
                    <div class="dash-userimage col-md-4">
                        <?php if (!empty($userDetails)) { ?>
                            <?php if (!empty($userimage)) { ?>
                                <img src="<?php echo $userimage; ?>" alt="User Image" class="img-fluid user-image">
                            <?php } ?>
                            <?php if (empty($userimage)) { ?>
                                <img src="Images/assets/unkown.png" alt="User Image" style="max-width: 200px;" class="img-fluid">
                            <?php } ?>
                            <!-- <p class="skeleton"><strong>Phone Number:</strong> <?php echo $phonenumber; ?></p> -->

                            <!-- <a class="skeleton" href="editProfile.php?id=<?php echo $userDetails['id']; ?>">Edit
                        Profile</a> -->



                        <?php } else { ?>
                            <p>User details not found.</p>
                        <?php } ?>
                    </div>
                    <div class="dash-userdetails col-md-4">
                        <div class="dash-name">
                            <?php echo $firstname; ?> <?php echo $lastname; ?>
                        </div>
                        <div class="dash-role">
                            <?php echo $role; ?>
                        </div>


                    </div>
                    <div class="dash-social col-md-4">
                        <div class="fr1">
                            <a href="http://instagram.com/viveksurti_?igshid=ZDdkNTZiNTM="><img id="ig-logo1" src="Images/Logo/ig logo.png"></a>
                            &nbsp;
                            <a href="#"><img id="fb-logo1" src="Images/Logo/fb logo.png"></a>
                        </div>
                    </div>


                </div>
                <div class="dash-about col-md-12">
                    <div class="dash-about-title">
                        About Me
                    </div>
                    <div class="dash-about-description mt-1">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum voluptates accusantium amet harum eaque. Ullam quibusdam distinctio odit eius aut tenetur culpa nisi illum architecto asperiores dolorem, ipsa optio! Quos.
                    </div>
                </div>

            </div>


        </div>
        <div class="col-md-4">
            <div class="dash-sec1">
                <div class="dash-about-title">
                    <center>More Details</center>
                </div>
                <div class="dash-abt-info">
                    <div class="info">
                        <div class="info-title">User Name</div>
                        <div class="info-detail"><?php echo $username; ?></div>
                    </div>
                    <div class="info">
                        <div class="info-title">Email</div>
                        <div class="info-detail"><?php echo $email; ?></div>
                    </div>
                    <div class="info">
                        <div class="info-title">Phone</div>
                        <div class="info-detail"><?php echo $phonenumber; ?></div>
                    </div>
                    <div class="info">
                        <div class="info-title">Gender</div>
                        <div class="info-detail"><?php echo $gender; ?></div>
                    </div>
                    <div class="info">
                        <a class="btn  w-100 btn-logout" href="editProfile.php?id=<?php echo $userDetails['id']; ?>">Edit Profile</a>
                        <!-- <a href=" ?logout" class="btn btn-logout">Logout</a> -->
                    </div>
                </div>
            </div>
            <div class="dash-sec1">
                <div class="dash-about-title">
                    <center>More Details</center>
                </div>
                <div class="dash-abt-info">
                    <div class="info">
                        <div class="info-title">User Name</div>
                        <div class="info-detail"><?php echo $username; ?></div>
                    </div>
                    <div class="info">
                        <div class="info-title">Email</div>
                        <div class="info-detail"><?php echo $email; ?></div>
                    </div>
                    <div class="info">
                        <a href=" ?logout" class="btn btn-logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

<?php include 'footer.php'; ?>

</html>