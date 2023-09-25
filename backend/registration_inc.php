<?php
if (isset($_POST["submit"])) {
    // Get user input from the form
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $bio = $_POST["bio"];
    //echo "It works";

    // Include necessary files
    require_once 'dBconnect.php';
    require_once 'functions/validation.php';

    // Validate the inputs
    if (!isValidUsername($username)) {
        header("location: ../pages/register.php?error=invalidUserName");
        exit();
    } elseif (!isValidEmail($email)) {
        header("location: ../pages/register.php?error=invalidEmail");
        exit();
    } elseif (!isValidPassword($password)) {
        header("location: ../pages/register.php?error=invalidPassword");
        exit();
    } elseif (!isValidBio($bio)) {
        header("location: ../pages/register.php?error=invalidBio");
        exit();
    } elseif (userExists($conn, $username, $email)) {
        header("location: ../pages/register.php?error=userAlreadyExists");
        exit();
    } else {
        // Handle profile picture upload
        $profilePicture = $_FILES["profile-picture"];

        // Check if a profile picture was uploaded
        if ($profilePicture["error"] === 0) {
            // Define a folder to store uploaded profile pictures
            $uploadDirectory = "../people/";

            // Generate a unique file name based on the username
            $uniqueFileName = uniqid($username . "_") . "." . pathinfo($profilePicture["name"], PATHINFO_EXTENSION);

            // Set the destination path
            $destination = $uploadDirectory . $uniqueFileName;

            // Move the uploaded file to the destination
            if (move_uploaded_file($profilePicture["tmp_name"], $destination)) {
                // Profile picture upload successful
                $profilePicturePath = $destination;
            } else {
                // Handle profile picture upload error
                header("location: ../pages/register.php?error=profilePictureUploadError");
                exit();
            }
        } else {
            // No profile picture provided (optional)
            $profilePicturePath = null;
        }

        // Create the user
        createUser($conn, $username, $email, $password, $firstName, $lastName, $bio, $profilePicturePath);
    }

    
} else {
    header("location: ../pages/register.php");
}

