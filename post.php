<?php // session_start();
require_once("Navbar.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio White - Posts</title>
    <style>
        <?php include 'index.css'; ?>
    </style>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid post-grid">
        <?php
        // Database connection details
        include 'config.php';

        $query = "SELECT * FROM posts";
        $result = $conn->query($query);
        while ($row = $result->fetch_assoc()) :
        ?>
            <div class="container-post m-2 col-md-3">
                <div class="post-head mb-2">
                    <div class="post-brand-image">
                        <img src="Images/Logo/brand-logo1.png" alt="Brand Image" loading="lazy" />
                    </div>
                    <div class="post-brand-name">
                        <p>STUDIO WHITE</p>
                    </div>
                    <div class="post-brand-name mb-3 ms-2">
                        <img src="Images/bluetick/icons8-instagram-verification-badge-48.svg" height="auto" width="25px" alt="">
                    </div>
                </div>
                <div class="post-image mt-2">
                    <img src='<?= $row['post_image'] ?>' class="img-fluid" />
                </div>
                <div class="post-foot mt-2">
                    <div class="post-date"><?= $row['created_date'] ?></div>
                    <div class="post-caption"><?= $row['post_description'] ?></div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        const allSkeleton = document.querySelectorAll(".skeleton");

        window.addEventListener("load", function() {
            setTimeout(function() {
                allSkeleton.forEach((item) => {
                    item.classList.remove("skeleton");
                });
            }, 1000); // 1000 milliseconds = 1 second
        });
    </script>
</body>

<?php include 'footer.php'; ?>

</html>