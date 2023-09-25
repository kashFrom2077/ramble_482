<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/profile-info.css">


</head>

<body class="bg-image" style="background-image: url(../background.png);">
    <div class="container-fluid">
        <header>
            <?php
            $activePage = 'profile-info'; // Set this for the Home page
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
                <div class="profile-info mt-4">
                    <p class="profile-email"><strong>Email:</strong> johndoe@example.com</p>
                    <p class="profile-bio"><strong>Bio:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit.</p>
                    <p class="profile-join-date"><strong>Joining Date:</strong> January 15, 2022</p>
                    <p class="profile-post-count"><strong>Number of Posts:</strong> 10</p>
                    <p class="profile-location"><strong>Location:</strong> New York City</p>
                    <p class="profile-interests"><strong>Interests:</strong> Photography, Travel, Coding</p>
                    <p class="profile-achievements"><strong>Achievements:</strong> Web Developer of the Year (2021)</p>
                </div>
                <div class="profile-actions mt-4 text-center">
                    <a href="edit-profile.html" class="btn btn-primary">Edit Profile</a>
                    <a href="change-password.html" class="btn btn-secondary">Change Password</a>
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