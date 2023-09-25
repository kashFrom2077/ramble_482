<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/signin.css">
</head>
<body class="bg-image" style="background-image: url(../background.png);">
    <div class="container-fluid">
        <header>
            <?php
            $activePage = 'signin'; // Set this for the Sign In page
            $loggedIn = false; // Set this based on user authentication
            include 'navbar.php';
            ?>
        </header>
        <main>
            <div class="container sign-in-container">
                <h2 class="text-center mb-4">Sign In</h2>
                <form id="signInForm" action="../backend/login_inc.php" method="POST">
                    <div class="form-group">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div id="email-error" class="error"></div>
                    <div class="form-group">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div id="password-error" class="error"></div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
                </form>
                <div class="text-center mt-3">
                    <p>Don't have an account? <a href="register.php">Register</a></p>
                </div>
            </div>
        </main>
    </div>


    <script>
        document.getElementById('signInForm').addEventListener('submit', function (e) {

            // Get user input
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
    

            // Basic email validation
            if (!isValidEmail(email)) {
                document.getElementById('email-error').textContent = 'Invalid email address';
                e.preventDefault();
                return;
            }

            // Basic password validation
            if (!isValidPassword(password)) {
                document.getElementById('password-error').textContent = 'Invalid password';
                e.preventDefault();
                return;
            }

            // If both email and password are valid, you can proceed with form submission or other actions
            // Example: Submit the form using AJAX or redirect to another page
            // For now, let's display a success message
            

        });

        // Function to validate email format
        function isValidEmail(email) {
            var emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return emailRegex.test(email);
        }

        // Function to validate password criteria (e.g., minimum length)
        function isValidPassword(password) {
            return password.length >= 6; // Password must be at least 6 characters
        }
    </script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
