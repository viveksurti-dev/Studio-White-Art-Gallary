<?php // session_start();
require_once("Navbar.php"); ?>
<?php
// Database connection details
include 'config.php';

// Create table if not exists
$sql = "CREATE TABLE IF NOT EXISTS contact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(100) NOT NULL,
    description TEXT NOT NULL
)";

if ($conn->query($sql) === false) {
    echo "Error creating table: " . $conn->error;
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $topic = mysqli_real_escape_string($conn, $_POST['phone']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    // Insert data into the contact table
    $insert_query = "INSERT INTO contact (first_name, last_name, email, phone, description) 
                    VALUES ('$first_name', '$last_name', '$email', '$phone', '$description')";

    if ($conn->query($insert_query) === false) {
        echo "Error inserting data: " . $conn->error;
    } else {
        echo "Data submitted successfully!";
        header("LOCATION: contacts.php");
    }
}

// Close database connection
// $conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css" />
</head>

<body>

    <!-- Contact Page Start -->
    <div class="container-contact">
        <div class="contact-info">
            <div class="contact-text col-md-6">
                <h3 class="contact-info-head ">Get In Touch</h3>
                <br />
                <p class="contact-info-paragraph ">"Your thoughts, questions, and feedback are invaluable to
                    us. Our
                    dedicated team is always ready to assist you. Whether you're looking for information, have a
                    specific inquiry, or just want to say hello, feel free to reach out. We believe in fostering
                    meaningful connections and providing excellent customer support."</p>
            </div>
            <div>
                <img class="contact-info-image " src="Images\assets\metting.png" />
            </div>
        </div>


    </div>

    <!-- External Info -->
    <div class="container-fluid">
        <div class="exinfo">
            <div class="container-exinfo">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                    </svg>
                </div>
                <div>
                    <h3 class="mt-3">Talk To Sales</h3>
                </div>
                <div>
                    <p class="mt-3">Interested in StudioWhite's software? Just pick up the phone to chat with a
                        member of our sales team</p>
                </div>
            </div>

            <div class="container-exinfo">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                    </svg>
                </div>
                <div>
                    <h3 class="mt-3">Contact Customer Support</h3>
                </div>
                <div>
                    <p class="mt-2">Sometimes you need a little help from your friends. Or a
                        StudioWhite rep. Don't worry... we're here for you.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact Form -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 form-container">
                <h2 class="mb-1">
                    <center>Contact Form</center>
                </h2>
                <form method="post" action="">
                    <div class="form-group">

                        <input for="first_name" type="text" class="form-control" placeholder="First Name" name="first_name" required>
                    </div>

                    <div class="form-group">

                        <input for="last_name" type="text" class="form-control" placeholder="Last Name" name="last_name" required>
                    </div>

                    <div class="form-group">

                        <input for="email" type="email" class="form-control" name="email" placeholder="Gmail" required>
                    </div>

                    <div class="form-group">

                        <input for="topic" type="text" class="form-control" name="phone" placeholder="Phone" required>
                    </div>

                    <div class="form-group">

                        <textarea for="description" class="form-control" name="description" placeholder="What Will You Discuss?" rows="4" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-logout">Submit</button>
                </form>
            </div>
            <div class="col-md-3">
                <h4>
                    Let's Discuss About Your Spaces!
                </h4>
                <br />
                <p>
                    A descriptive paragraph that tells clients how good you are and proves that you are the best
                    choice that they’ve made.
                    <br />
                    <br />
                    This paragraph is also for those who are looking out for a reliable interior design firm.
                </p>
                <ul class="m-3">
                    <li> Free Consultation</li>
                    <li>Budget Quotations</li>
                    <li> Latest Technologies</li>
                    <li> Eco Friendly Constructions</li>
                </ul>
            </div>
            <div class="col-md-5 img-contact">
                <img src="Images\assets\contacts.png" height="500" class="ms-5" />
            </div>
        </div>
    </div>

    <!-- Contact Details -->

    <div class="container-fluid contact-details">
        <div>
            <h3>Contact Details</h3>
        </div>
        <div class="Social mt-2 mb-3">
            <div>Have a call-to-action to provide visitors with another action to take if they choose not to
                complete
                the form.</div>
            <div>
                <a href="#" class="mr-3"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook " viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                    </svg></a>
                <a href="#" class="mr-3"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram " viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                    </svg></a>
                <a href="#" class="mr-3"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-linkedin " viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                    </svg></a>
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-twitter-x " viewBox="0 0 16 16">
                        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                    </svg></a>
            </div>
        </div>
        <div class="contact-detail mt-5 mb-5">
            <div class="detail">
                <div><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                    </svg></div>
                <div class="details">
                    <h4>Address</h4>
                    <p>13 Shidhhi Vinayak Industrail B/h Nayara Petrol pump Kholvad, Ta. Kamrej SURAT</p>
                </div>
            </div>
            <div class="detail">
                <div><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                        <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671" />
                        <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791" />
                    </svg></div>
                <div class="details">
                    <h4>Email Us</h4>
                    <p>rd.sw918@gmail.com</p>
                </div>
            </div>
            <div class="detail">
                <div><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephone-forward-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zm10.761.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708" />
                    </svg></div>
                <div class="details">
                    <h4>Call Us </h4>
                    <p>0261 440 1253</p>
                </div>
            </div>
        </div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.18275234021!2d72.93041407472069!3d21.26423237965036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04796e884b3cb%3A0x43a7a434f2ec23d3!2sNayara%20petrol%20pump%20BESIDE%20DGVCL%20LASKANA%20SUB%20DIVISION!5e0!3m2!1sen!2sin!4v1704722938076!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mt-3 container-fluid"></iframe>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
<?php include 'footer.php'; ?>

</html>