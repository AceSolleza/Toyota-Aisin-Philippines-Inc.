<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Toyota Aisin Philippines, Inc.</title>
  <link rel="stylesheet" href="home.css" />
</head>
<body>

  <!-- Header -->
  <header>
    <div class="logo">
      <img src="images/aisin-logo.png" alt="Aisin Logo" />
      <span class="company-name">| TOYOTA AISIN PHILIPPINES, INC.</span>
    </div>
    <nav>
      <ul>
        <li><a href="home.php" class="active">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="projects.php">Projects</a></li>
      </ul>
    </nav>
  </header>

  <!-- Home Section -->
  <section class="home">
    <!-- Background Video -->
    <video class="bg-video" autoplay muted loop playsinline>
      <source src="videos/aisin.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>

    <div class="home-text">
      <h1>Welcome to Toyota AISIN Philippines, Inc.</h1>
      <p>Delivering world-class automotive parts with quality and innovation.</p>
      <a href="about.php" class="btn">Learn More</a>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; <?= date("Y"); ?> Toyota Aisin Philippines, Inc. All Rights Reserved.</p>
  </footer>

</body>
</html>
