<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramble</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
</head>


<body class="bg-image" style="background-image: url(../background.png);">
    <div class="container-fluid">
        <header>
            <?php
            $activePage = 'home'; // Set this for the Home page
            $loggedIn = true; // Set this based on user authentication
            include 'navbar.php';
            ?>
        </header>

        <main>
            <div class="caption">
                <h1>Unleash Your Thoughts!</h1>
                <img src="../c.png" alt="mp">
                <h3>Ramble on: Let your thoughts find their voice! </h3>
                <!-- <div class="layer">
                    <a href="#">Join us today!</a>
                </div> -->
            </div>

            <div class="container mt-5">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="article-box">
                            <div class="article-description">
                                <div class="author-date">
                                    <img src="../people/1.png" alt="Profile Pic" class="profile-pic">
                                    <div>
                                        Author: John Doe<br>
                                        Date: August 31, 2023
                                    </div>
                                </div>
                                <a href="#" class="article-title">
                                    <h5><b>The Magic Art of Saying More with Less</b></h5>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac dolor sit amet purus
                                    consequat.</p>
                            </div>
                            <div class="article-image">
                                <img src="../articlePix/1.jpg" alt="Article 1">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="article-box">
                            <div class="article-description">
                                <div class="author-date">
                                    <img src="../people/2.png" alt="Profile Pic" class="profile-pic">
                                    <div>
                                        Author: John Doe<br>
                                        Date: August 31, 2023
                                    </div>
                                </div>
                                <a href="#" class="article-title">
                                    <h5><b>Article Title 1</b></h5>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac dolor sit amet purus
                                    consequat.</p>
                            </div>
                            <div class="article-image">
                                <img src="../articlePix/test.jpg" alt="Article 1">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="article-box">
                            <div class="article-description">
                                <div class="author-date">
                                    <img src="../people/3.png" alt="Profile Pic" class="profile-pic">
                                    <div>
                                        Author: John Doe<br>
                                        Date: August 31, 2023
                                    </div>
                                </div>
                                <a href="#" class="article-title">
                                    <h5><b>Article Title 1</b></h5>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac dolor sit amet purus
                                    consequat.</p>
                            </div>
                            <div class="article-image">
                                <img src="../articlePix/3.jpg" alt="Article 1">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="article-box">
                            <div class="article-description">
                                <div class="author-date">
                                    <img src="../people/4.png" alt="Profile Pic" class="profile-pic">
                                    <div>
                                        Author: John Doe<br>
                                        Date: August 31, 2023
                                    </div>
                                </div>
                                <a href="#" class="article-title">
                                    <h5><b>Article Title 1</b></h5>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac dolor sit amet purus
                                    consequat.</p>
                            </div>
                            <div class="article-image">
                                <img src="../articlePix/4.jpg" alt="Article 1">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>