<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ramble</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="../css/explore.css">
</head>



<body class="bg-image" style="background-image: url(../background.png);">
  <div class="container-fluid">
    <header>
      <?php
        $activePage = 'explore'; // Set this for the Home page
        $loggedIn = true; // Set this based on user authentication
        include 'navbar.php';
        ?>

    </header>



    <main>

      <div class="container mt-3">

        <div class="row">
          <div class="col-lg-12 mb-2 text-center custom-explore-header">
            <h3>Explore Articles</h3>
          </div>

          <div class="col-lg-12 search-container">
            <input type="text" class="search-bar mb-2 mb-lg-0" placeholder="Search any article">
            <button class="search-button" type="button"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </div>

      <div class="mt-3">

        <div class="trending-tags d-flex justify-content-center flex-wrap align-items-center py-2">
          <span class="mr-2 trending-header">Trending:</span>
          <a href="#" class="tag-link mr-2">Football</a>
          <a href="#" class="tag-link mr-2">Journaling</a>
          <a href="#" class="tag-link mr-2">Astrology</a>
          <a href="#" class="tag-link mr-2">Dating</a>
          <a href="#" class="tag-link mr-2">Starups</a>
          <a href="#" class="tag-link mr-2">Love</a>
          <a href="#" class="tag-link mr-2">Depression</a>
          <a href="#" class="tag-link mr-2">Freelancing</a>
          <a href="#" class="tag-link mr-2">TV-series</a>
          <a href="#" class="tag-link mr-2">Music</a>
        </div>

      </div>

      <div class="row justify-content-center align-items-center">
        <div class="col-lg-4 col-sm-12 p-4 mt-3 mt-lg-3 topics">
          <h4>Relationships</h4>
          <ul class="categories">
            <li>
              <a href="#" class="mr-2">Dating</a>
            </li>
            <li>
              <a href="#" class="mr-2">Marriage</a>
            </li>
            <li>
              <a href="#" class="mr-2">Divorce</a>
            </li>
            <li>
              <a href="#" class="mr-2">Friendship</a>
            </li>
            <li>
              <a href="#" class="mr-2">Love</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-12 p-4 mt-lg-3 topics">
          <h4>Sports</h4>
          <ul class="categories">
            <li>
              <a href="#" class="mr-2">Football</a>
            </li>
            <li>
              <a href="#" class="mr-2">Cricket</a>
            </li>
            <li>
              <a href="#" class="mr-2">BasketBall</a>
            </li>
            <li>
              <a href="#" class="mr-2">Tennis</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-12 p-4 topics">
          <h4>Self Development</h4>
          <ul class="categories">
            <li>
              <a href="#" class="mr-2">Journaling</a>
            </li>
            <li>
              <a href="#" class="mr-2">Mediation</a>
            </li>
            <li>
              <a href="#" class="mr-2">Morning Routine</a>
            </li>
            <li>
              <a href="#" class="mr-2">Life Lessons</a>
            </li>
            <li>
              <a href="#" class="mr-2">Self-awareness</a>
            </li>
            <li>
              <a href="#" class="mr-2">Goal Setting</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-12 p-4 topics">
          <h4>Cities</h4>
          <ul class="categories">
            <li>
              <a href="#" class="mr-2">Dhaka</a>
            </li>
            <li>
              <a href="#" class="mr-2">Chittagong</a>
            </li>
            <li>
              <a href="#" class="mr-2">Khulna</a>
            </li>
            <li>
              <a href="#" class="mr-2">Rajshahi</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-12 p-4 topics">
          <h4>Science & Technology</h4>
          <ul class="categories">
            <li>
              <a href="#" class="mr-2">Physics</a>
            </li>
            <li>
              <a href="#" class="mr-2">Biology</a>
            </li>
            <li>
              <a href="#" class="mr-2">Astrology</a>
            </li>
            <li>
              <a href="#" class="mr-2">Artifical Intelligence</a>
            </li>
            <li>
              <a href="#" class="mr-2">Hardware</a>
            </li>
            <li>
              <a href="#" class="mr-2">Software & Applications</a>
            </li>
            <li>
              <a href="#" class="mr-2">Neuroscience</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-12 p-4 topics">
          <h4>TV & Entertainment</h4>
          <ul class="categories">
            <li>
              <a href="#" class="mr-2">TV-series</a>
            </li>
            <li>
              <a href="#" class="mr-2">Movies</a>
            </li>
            <li>
              <a href="#" class="mr-2">Video Games</a>
            </li>
            <li>
              <a href="#" class="mr-2">Reality Shows</a>
            </li>
            <li>
              <a href="#" class="mr-2">Cartoons & Animes</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-12 p-4 topics">
          <h4>Business</h4>
          <ul class="categories">
            <li>
              <a href="#" class="mr-2">Starups</a>
            </li>
            <li>
              <a href="#" class="mr-2">Freelancing</a>
            </li>
            <li>
              <a href="#" class="mr-2">Entrepreneurship</a>
            </li>
            <li>
              <a href="#" class="mr-2">Small Business</a>
            </li>
            <li>
              <a href="#" class="mr-2">Venture Capital</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-12 p-4 topics">
          <h4>Mental Health</h4>
          <ul class="categories">
            <li>
              <a href="#" class="mr-2">Depression</a>
            </li>
            <li>
              <a href="#" class="mr-2">Anxiety</a>
            </li>
            <li>
              <a href="#" class="mr-2">Counseling</a>
            </li>
            <li>
              <a href="#" class="mr-2">Trauma</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-12 p-4 topics">
          <h4>Family</h4>
          <ul class="categories">
            <li>
              <a href="#" class="mr-2">Children</a>
            </li>
            <li>
              <a href="#" class="mr-2">Elder Care</a>
            </li>
            <li>
              <a href="#" class="mr-2">Fatherhood</a>
            </li>
            <li>
              <a href="#" class="mr-2">Motherhood</a>
            </li>
            <li>
              <a href="#" class="mr-2">Parenting</a>
            </li>
            <li>
              <a href="#" class="mr-2">Pregnancy</a>
            </li>
          </ul>
        </div>
      </div>
    </main>



  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>