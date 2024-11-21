<?php // session_start();
require_once("Navbar.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio White - About Us</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        <?php include 'index.css'; ?>
    </style>
</head>

<body>
    <!-- About Sec - Store Info -->
    <div class="about-sec1 container  mt-2">

        <div class="abt-image col-md-4">
            <img src="Images/assets/shop.png" />
        </div>
        <div class="abt-info col-md-8">
            <div class="abt-info-title mt-1">Lorem ipsum dolor, sit amet consectetur adipisicing elit!</div>
            <div class="abt-info-description mt-1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima quidem adipisci, perferendis quia eaque facere corporis earum alias itaque! Sed dicta quo dolores iusto hic nobis culpa! Temporibus dicta sit nobis possimus, reiciendis quia id culpa cum velit magnam consectetur odio dignissimos perferendis debitis ex architecto voluptates a ab esse. Quae, facere! Nihil velit quasi ab quod reprehenderit assumenda inventore dolore? Consectetur rerum pariatur necessitatibus laboriosam nulla facere natus eum maiores neque cum, earum eligendi error illo quae perspiciatis, illum mollitia nesciunt, temporibus corrupti. Dignissimos nisi est labore, delectus veniam consectetur error, sunt accusantium, cum fugiat corrupti atque ad vitae!</div>
            <div class="abt-info-button mt-1">
                <a href="#ourstory" class="btn story">Our Story </a>
            </div>
        </div>
    </div>

    <!-- Team -->

    <div id="team" class="mt-5 mb-5 container abt-box-container">
        <div>
            <h2>Meet Our Team</h2>
        </div>
        <div class="abt-container ">

            <div class="abt-box">
                <div class="abt-image">
                    <a href="#" class="">
                        <img src="Images/assets/emp1.png" alt="Collection Image" loading="lazy" />
                    </a>
                </div>
                <div class="abt-text1">Seo - yun </div>
                <div class="abt-text2">Artist</div>
            </div>
            <div class="abt-box">
                <div class="abt-image">
                    <a href="#" class="">
                        <img src="Images/assets/emp2.png" alt="Collection Image" loading="lazy" />
                    </a>
                </div>
                <div class="abt-text1">Aashvi Rajput</div>
                <div class="abt-text2">Designer</div>
            </div>
            <div class="abt-box">
                <div class="abt-image">
                    <a href="#" class="">
                        <img src="Images/assets/emp3.png" alt="Collection Image" loading="lazy" />
                    </a>
                </div>
                <div class="abt-text1">Ella Parker</div>
                <div class="abt-text2">Manager</div>
            </div>

        </div>
        <div class="explore-btn mt-4">
            <a href="#team" class="btn btn-abt ">See All</a>
        </div>
    </div>
    <!-- trending artwork end -->

    <!-- Our Story -->
    <center>
        <div id="ourstory" class="container ourstory">
            <h3>Our Story</h3>
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/25iX4DvkhGM?si=_6FKrxFx7zIYhmgF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen loading="lazy"></iframe>
        </div>
    </center>
    <!-- About Info Start -->

    <div class="about-info container mt-5 mb-3">
        <div class="about">
            <div class="about-content abt-content-1">
                <div class="content">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill mb-3" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                    </svg>
                    <div class="about-num mt-2">
                        <p>1000+</p>
                    </div>
                    <div class="about-title">
                        <P>Happy Customers</P>
                    </div>
                </div>
            </div>
        </div>
        <div class="about">
            <div class="about-content1 abt-content-2">
                <div class="content">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trophy-fill " viewBox="0 0 16 16">
                        <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5q0 .807-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33 33 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935m10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935" />
                    </svg>
                    <div class="about-num mt-2">
                        <p>7</p>
                    </div>
                    <div class="about-title ">
                        <P>Awards <br /> Recived!</P>
                    </div>
                </div>
            </div>
        </div>
        <div class="about">
            <div class="about-content1 abt-content-3">
                <div class="content">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-kanban-fill" viewBox="0 0 16 16">
                        <path d="M2.5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm5 2h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1m-5 1a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1zm9-1h1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1" />
                    </svg>
                    <div class="about-num mt-2">
                        <p>350+</p>
                    </div>
                    <div class="about-title">
                        <P>Project Completed!</P>
                    </div>
                </div>
            </div>
        </div>

        <div class="about">
            <div class="about-content abt-content-4">
                <div class="content">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                        <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5" />
                        <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85z" />
                    </svg>
                    </svg>
                    <div class="about-num mt-2">
                        <p>12</p>
                    </div>
                    <div class="about-title">
                        <P>Year Of Expiriance</P>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- About Info End -->


</body>
<?php include 'footer.php'; ?>

</html>