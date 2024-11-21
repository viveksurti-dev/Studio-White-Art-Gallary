<?php // session_start();
require_once("Navbar.php"); ?>
<?
// Database connection details
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio White - Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        <?php include 'index.css'; ?>
    </style>
</head>

<body>

    <!-- carousel start -->
    <?php include 'carousel.php'; ?>

    <!-- carousel end -->

    <!-- trending art work -->

    <div class="mt-5 mb-5 container Explorecollection">
        <div>
            <h2>Browse Trending Artwork</h2>
        </div>
        <div class="collection-container">

            <div class="trend-box">
                <div class="trend-image">
                    <a href="Gallary.php" class="">
                        <img src="Images/assets/trend-india-art.jpg" alt="Collection Image" loading="lazy" />
                    </a>
                </div>
                <div class="trend-text1">Floral Art - Vintage</div>
                <div class="trend-text2">Bharat</div>
            </div>
            <div class="trend-box">
                <div class="trend-image">
                    <a href="Gallary.php" class="">
                        <img src="Images/assets/trend-russia-art.jpg" alt="Collection Image" loading="lazy" />
                    </a>
                </div>
                <div class="trend-text1">Portrait - Art</div>
                <div class="trend-text2">Russia</div>
            </div>
            <div class="trend-box">
                <div class="trend-image">
                    <a href="Gallary.php" class="">
                        <img src="Images/assets/trend-cassicism-art.jpg" alt="Collection Image" loading="lazy" />
                    </a>
                </div>
                <div class="trend-text1">Classicism - Art</div>
                <div class="trend-text2">Rome</div>
            </div>
            <div class="trend-box">
                <div class="trend-image">
                    <a href="Gallary.php" class="">
                        <img src="Images/assets/trend-japan-art.jpg" alt="Collection Image" loading="lazy" />
                    </a>
                </div>
                <div class="trend-text1">Katsushika Hokusai</div>
                <div class="trend-text2">JAPAN</div>
            </div>

        </div>
        <div class="explore-btn mt-4">
            <a href="Gallary.php" class="btn btn-trend ">EXPLORE MORE</a>
        </div>
    </div>
    <!-- trending artwork end -->

    <!-- collection section start -->
    <div class="mt-5 container Explorecollection">
        <div>
            <h2>Explore By Collection</h2>
        </div>
        <div class="collection-container">
            <div class="container-box-text">
                <a href="Gallary.php#Radha-krishn" class=""><img src="Images\assets\rk-thumb.jpg" alt="Collection Image" loading="lazy" />
                    <div class="centered">RADHA KRISHNA</div>
                </a>
            </div>

            <div class="container-box-text">
                <a href="Gallary.php#indian-tradition" class=""><img src="Images\assets\indian-tred-thumb.jpg" alt="Collection Image" loading="lazy" />
                    <div class="centered">INDIAN TRADITIONAL</div>
                </a>
            </div>
            <div class="container-box-text">
                <a href="Gallary.php#cityscape" class=""><img src="Images\assets\city-scape-thumb.jpg" alt="Collection Image" loading="lazy" />
                    <div class="centered">CITY SCAPE</div>
                </a>
            </div>
            <div class="container-box-text">
                <a href="Gallary.php#landscape" class=""><img src="Images\assets\land-scape-thumb.jpg" alt="Collection Image" loading="lazy" />
                    <div class="centered">LAND SCAPE</div>
                </a>
            </div>
        </div>

        <div class="collection-container">
            <div class="container-box-text">
                <a href="Gallary.php#blackwhite" class=""><img src="Images\assets\black&white-thumb.jpg" alt="Collection Image" loading="lazy" />
                    <div class="centered">BLACK & WHITE</div>
                </a>
            </div>
            <div class="container-box-text">
                <a href="Gallary.php#asthetic" class=""><img src="Images\assets\asthetic-thumb.jpg" alt="Collection Image" loading="lazy" />
                    <div class="centered">ASTHETIC</div>
                </a>
            </div>
            <div class="container-box-text">
                <a href="Gallary.php#Abstract" class=""><img src="Images\assets\abstract-thumb.jpg" alt="Collection Image" loading="lazy" />
                    <div class="centered">ABSTRACT</div>
                </a>
            </div>
            <div class="container-box-text">
                <a href="Gallary.php#portrait" class=""><img src="Images\assets\portrait-thumb.jpg" alt="Collection Image" loading="lazy" />
                    <div class="centered">PORTRAIT</div>
                </a>
            </div>
        </div>
    </div>

    <!-- Portfolio -->
    <div class="container mt-5 mb-5">
        <div class="dash-sec1 row d-flex">
            <div class="port-img col-md-4">
                <div class="abt-image">

                    <img src="Images/assets/person1.png" alt="Collection Image" loading="lazy" />

                </div>
            </div>
            <div class="port-detail col-md-8">
                <div class="port-title">Vivek Surati</div>
                <div class="port-role ">&nbsp;( Founder / Co-Founder)</div>
                <div class="port-about mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur accusamus quas placeat tempore at distinctio eveniet aspernatur totam quaerat autem adipisci dignissimos deserunt, quibusdam natus nihil eligendi nostrum animi sint debitis corrupti tenetur eaque sunt, doloremque minus! Beatae, culpa doloribus cum perferendis impedit voluptas totam veritatis voluptatem laboriosam repellat, vero tempora? Minima ex quas repellat? Cupiditate molestiae impedit officiis exercitationem, iure labore numquam quisquam dicta sed aliquam adipisci. Illo hic animi, voluptates sunt modi ducimus vitae provident ratione nostrum minus distinctio debitis, necessitatibus error, autem maxime tempore dicta dolorum ab fugiat! Modi quasi quod dolores inventore eos! Quo, quia pariatur.</div>
                <div> <a href="about.php#team" class="btn btn-mot mt-3">Meet Our Team </a></div>
            </div>

        </div>
    </div>

    <!-- Testimonial Info -->
    <div class="container">
        <div class="home-test">
            <div class="container-home-test">
                <div class="home-test-user-image "></div>
                <div class=" home-test-info">
                    <p>@User Name</p>
                    <div>
                        <h3 class="mt-3 home-test-title animate-charcter">Contact Customer Support</h3>
                    </div>
                    <div>
                        <p class="mt-2 home-test-description">Sometimes you need a little help from your friends. Or a
                            StudioWhite rep. Don't worry... we're here for you.</p>
                    </div>
                    <a href="testimonials.php" class="btn">Button <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5" />
                        </svg></a>
                </div>

            </div>
            <div class="home-test">
                <div class="container-home-test">
                    <div class="home-test-user-image "></div>
                    <div class=" home-test-info">
                        <p>@User Name</p>
                        <div>
                            <h3 class="mt-3 home-test-title animate-charcter">Contact Customer Support</h3>
                        </div>
                        <div>
                            <p class="mt-2 home-test-description">Sometimes you need a little help from your friends. Or a
                                StudioWhite rep. Don't worry... we're here for you.</p>
                        </div>
                        <a href="testimonials.php" class="btn">Button <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5" />
                            </svg></a>

                    </div>

                </div>
                <div class="home-test">
                    <div class="container-home-test">
                        <div class="home-test-user-image "></div>
                        <div class=" home-test-info">
                            <p>@User Name</p>
                            <div>
                                <h3 class="mt-3 home-test-title animate-charcter">Contact Customer Support</h3>
                            </div>
                            <div>
                                <p class="mt-2 home-test-description">Sometimes you need a little help from your friends. Or a
                                    StudioWhite rep. Don't worry... we're here for you.</p>
                            </div>
                            <a href="testimonials.php" class="btn">Button <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5" />
                                </svg></a>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

</body>

<?php include 'footer.php'; ?>

</html>