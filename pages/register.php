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
            $activePage = 'register'; // Set this for the Register page
            $loggedIn = false; // Set this based on user authentication
            include 'navbar.php';
            ?>
        </header>
        <main>
            <div class="container register-container">
                <h2 class="text-center mb-4">Register</h2>
                <form id="registerForm" action="../backend/registration_inc.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div id="username-error" class="error"></div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div id="email-error" class="error"></div>
                    <div class="form-group">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" id="password-confirm" name="password-confirm" class="form-control" placeholder="Confirm Password" required>
                    </div>
                    <div id="password-error" class="error"></div>
                    <div class="form-group">
                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="firstname" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="lastname" required>
                    </div>
                    <div class="form-group">
                        <textarea id="bio" name="bio" class="form-control" placeholder="Bio" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="profile-picture">Profile Picture</label>
                        <input type="file" id="profile-picture" name="profile-picture" accept="image/*" required>
                    </div>
                    <button type="submit" name="submit"  class="btn btn-primary btn-block">Register</button>
                </form>
                <div class="text-center mt-3">
                    <p>Already have an account? <a href="login.php">Sign In</a></p>
                </div>
            </div>
        </main>
    </div>

    <!-- JavaScript for form validation (similar to the Sign In page) -->

    <script>
        document.getElementById('registerForm').addEventListener('submit', function(e) {

            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const passwordConfirm = document.getElementById('password-confirm').value;
            const bio = document.getElementById('bio').value;

            if (!isValidUsername(username)) {
                document.getElementById('username-error').textContent = 'Invalid username';
                e.preventDefault();
                return;
            }

            if (!isValidEmail(email)) {
                document.getElementById('email-error').textContent = 'Invalid email address';
                e.preventDefault();
                return;
            }

            if (!isValidPassword(password)) {
                document.getElementById('password-error').textContent = 'Invalid password';
                e.preventDefault();
                return;
            }
            
            if (password !== passwordConfirm) {
                document.getElementById('password-error').textContent = 'Passwords do not match';
                e.preventDefault();
                return;
            }

        });

        function isValidUsername(username) {
            // You can add validation rules for usernames here
            return true;
        }

        function isValidEmail(email) {
            const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return emailRegex.test(email);
        }

        function isValidPassword(password) {
            return password.length >= 6;
        }
    </script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>