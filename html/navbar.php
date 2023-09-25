<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="../logoFinal.png" width="200px" alt="ad1"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php echo $activePage === 'home' ? 'active' : ''; ?>">
                <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?php echo $activePage === 'about' ? 'active' : ''; ?>">
                <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item <?php echo $activePage === 'explore' ? 'active' : ''; ?>">
                <a class="nav-link" href="explore.php">Explore</a>
            </li>
            <li class="nav-item <?php echo $activePage === 'write' ? 'active' : ''; ?>">
                <a class="nav-link" href="#">Write</a>
            </li>
            <?php if ($loggedIn) : ?>
                <!-- User is logged in -->
                <li class="nav-item <?php echo $activePage === 'profile' ? 'active' : ''; ?>">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item <?php echo $activePage === 'logout' ? 'active' : ''; ?>">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            <?php else : ?>
                <!-- User is not logged in -->
                <li class="nav-item <?php echo $activePage === 'signin' ? 'active' : ''; ?>">
                    <a class="nav-link" href="#">Sign In</a>
                </li>
                <li class="nav-item <?php echo $activePage === 'joinus' ? 'active' : ''; ?>">
                    <a class="nav-link" href="#">Join Us</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>