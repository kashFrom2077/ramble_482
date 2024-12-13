# Ramble

Ramble is a web application built with raw PHP that allows users to log in, sign up, read and share reviews, and comment on different reviews of products and services. It functions as a social media platform specifically for reviews, enabling users to engage with a community of reviewers.

## Features

- **User Authentication:**
  - Secure user registration and login.
  - Password encryption for user security.

- **CRUD Operations:**
  - Users can create, read, update, and delete reviews.
  - Comments functionality to engage with reviews.

- **Review Sharing:**
  - Users can share reviews on products and services.
  - Easy-to-navigate interface for browsing reviews.

- **Community Engagement:**
  - Commenting system for discussions and feedback on reviews.

- **AJAX Integration:**
  - Asynchronous loading and updating of content for a smoother user experience.

## Technologies Used

- **Frontend:**
  - HTML5, CSS3, JavaScript, AJAX

- **Backend:**
  - PHP

- **Database:**
  - MySQL

## Installation

1. Clone the repository
   

2. Navigate to the project directory


3. Set up the database:
   - Import the `ramble.sql` file (provided in the repository) into your MySQL server.
   - Update the database credentials in `config.php` to match your MySQL setup.

4. Start a local PHP server:
  

5. Open your browser and visit:
   

## Usage

- **Sign Up:** Create a new account to access all features.
- **Log In:** Use your credentials to log in and start exploring.
- **Create Reviews:** Share your thoughts on products and services.
- **Comment:** Engage with other users by commenting on their reviews.
- **Update/Delete:** Manage your own reviews and comments.

## Folder Structure

```plaintext
.
├── css/            # Contains all CSS files for styling
│   ├── about.css
│   ├── explore.css
│   ├── home.css
│   ├── index.css
│   ├── profile-info.css
│   ├── profile.css
│   └── style.css
├── pages/          # Backend code for each page
│   ├── about.php
│   ├── dBconnect.php
│   ├── explore.php
│   ├── home.php
│   ├── login.php
│   ├── navbar.php
│   ├── profile-info.php
│   ├── profile.php
│   ├── register.php
│   └── write.php
├── backend/        # Login, registration, and authentication logic
│   ├── dBconnect.php
│   ├── login_inc.php
│   ├── registration_inc.php
│   └── functions/
│       └── validation.php  # Functions for authentication and validation
├── config.php      # Database configuration file
├── index.php       # Landing page
└── README.md       # Project documentation
```

