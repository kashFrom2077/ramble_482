<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/profile.css">

</head>

<body class="bg-image" style="background-image: url(../background.png);">
    <div class="container-fluid">
        <header>
            <?php
            $activePage = 'profile'; // Set this for the Home page
            $loggedIn = true; // Set this based on user authentication
            include 'navbar.php';
            ?>

        </header>

        <main>
            <div class="container profile-container">
                <div class="profile-header text-center">
                    <div class="profile-picture">
                        <img src="../people/x5.jpg" alt="Profile Picture" class="img-fluid rounded-circle">
                    </div>
                    <h2 class="profile-name mt-3">John Doe</h2>
                    <p class="profile-username">@johndoe</p>
                    <div class="social-media">
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="container mt-5 mx-auto">
                <div class="row">
                    <div class="all-Articles">
                        <div class="col-lg-12 mx-auto">
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac dolor sit amet
                                        purus
                                        consequat.</p>
                                </div>
                                <div class="article-image">
                                    <img src="../articlePix/1.jpg" alt="Article 1">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac dolor sit amet
                                        purus
                                        consequat.</p>
                                </div>
                                <div class="article-image">
                                    <img src="../articlePix/2.jpg" alt="Article 1">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac dolor sit amet
                                        purus
                                        consequat.</p>
                                </div>
                                <div class="article-image">
                                    <img src="../articlePix/3.jpg" alt="Article 1">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="article-box">
                                <div class="article-description">
                                    <div class="author-date">
                                        <img src="../people/x5.jpg" alt="Profile Pic" class="profile-pic">
                                        <div>
                                            Author: John Doe<br>
                                            Date: August 31, 2023
                                        </div>
                                    </div>
                                    <a href="#" class="article-title">
                                        <h5><b>Article Title 1</b></h5>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac dolor sit amet
                                        purus
                                        consequat.</p>
                                </div>
                                <div class="article-image">
                                    <img src="../articlePix/3.jpg" alt="Article 1">
                                </div>
                            </div>
                        </div>

                    </div>




                </div>
            </div>
        </main>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>