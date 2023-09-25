<?php

function isValidUsername($username) {
    // Implement your username validation rules here
    // For example, check if it meets length and character requirements
    return (strlen($username) >= 4 && strlen($username) <= 32 && preg_match('/^[a-zA-Z0-9_]+$/', $username));
}

function isValidEmail($email) {
    // Use PHP's built-in filter_var to validate email format
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function isValidPassword($password) {
    // Implement your password validation rules here
    // For example, check if it meets length and complexity requirements
    return (strlen($password) >= 6 && preg_match('/[A-Za-z]/', $password) && preg_match('/\d/', $password));
}

function isValidBio($bio) {
    // Implement your bio validation rules here
    // For example, check if it meets length requirements
    return (strlen($bio) <= 255); // Adjust the maximum length as needed
}

function isValidProfilePicture($fileInputName, $userID) {
    // Implement validation rules for the uploaded profile picture
    // For example, check file type, size, and other criteria
    $allowedExtensions = ["jpg", "jpeg", "png", "gif"];
    $maxFileSize = 500000; // Adjust as needed

    if (isset($_FILES[$fileInputName])) {
        $fileInfo = $_FILES[$fileInputName];
        $fileName = $fileInfo["name"];
        $fileSize = $fileInfo["size"];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $fileMimeType = mime_content_type($fileInfo["tmp_name"]); // Validate MIME type

        // Check if the file extension is allowed
        if (!in_array($fileExtension, $allowedExtensions)) {
            return false; // Invalid file extension
        }

        // Check if the file size exceeds the maximum allowed size
        if ($fileSize > $maxFileSize) {
            return false; // File size too large
        }

        // Additional checks based on MIME type, if needed
        // For example, you can check if it's an image file
        if (!strstr($fileMimeType, "image")) {
            return false; // Not an image file
        }

        // Optionally, sanitize the file name to prevent security issues
        $sanitizedFileName = preg_replace('/[^a-zA-Z0-9_.-]/', '', $fileName);

        // Generate a unique file name based on user ID and sanitized file name
        $uniqueFileName = $userID . '_' . $sanitizedFileName;

        return $uniqueFileName; // Return the unique file name
    } else {
        return false; // File not found
    }
}

function userExists($conn, $username, $email){
    $sql = "SELECT * FROM USERS WHERE userName = ? OR userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "stmt failed";
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $email,  $firstName, $lastName, $password, $bio, $profilePicturePath){
    $sql = "INSERT INTO users (userName, userEmail, userFName, userLName, userPass, userBio, userDP) VALUES (?, ?, ?, ?, ?, ?, ?) ;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "stmt failed";
        exit();
    }

    $hashedPass = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssssss", $username, $email, $firstName, $lastName, $password, $bio, $profilePicturePath);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../../pages/home.php?error=none");
    exit();
}

