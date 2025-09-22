<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us - Toyota Aisin Philippines, Inc.</title>
  <link rel="stylesheet" href="about.css" />
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
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php" class="active">About Us</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="projects.php">Projects</a></li>
      </ul>
    </nav>
  </header>

  <!-- About Section -->
  <section class="about-section">
    <h1>About Us</h1>
    <p>
      Toyota Aisin Philippines Inc. is a trusted manufacturer of world-class automotive parts.  
      We are committed to quality, innovation, and excellence in the automotive industry, 
      supporting the needs of Toyota and other major automotive brands worldwide.
    </p>
  </section>

  <!-- Company Info Section -->
  <section class="company-info">
    <div class="company-info-text">
      <p>
        Toyota AISIN Philippines, Inc., is a joint venture of AISIN Corporation (AISIN), 
        Toyota Motor Corporation (TMC), and Toyota Motor Philippines Corporation. 
        On August 3, 1990, then known as Toyota Autoparts Philippines, Inc., 
        it was the first manual transmission manufacturing plant established outside TMC. 
        In May 2018, AISIN became a majority stockholder, thus, a change in name in January 2019. 
        Its products are exported to various Toyota vehicle plants and affiliates.
      </p>
    </div>
    <div class="company-info-image">
      <img src="images/company.jpg" alt="Toyota Aisin Philippines" />
    </div>
  </section>

  <!-- Icon Grid Section -->
  <section class="icon-grid">
    <div class="icon-card">
      <img src="images/home-capital.png" alt="Capital Icon" />
      <h3>Capital</h3>
      <p>₱1 Billion PHP</p>
    </div>
    <div class="icon-card">
      <img src="images/home-sales.png" alt="Sales Icon" />
      <h3>Sales</h3>
      <p>Driving consistent growth year after year.</p>
    </div>
    <div class="icon-card">
      <img src="images/home-employees.png" alt="Employees Icon" />
      <h3>Employees</h3>
      <p>935 people by March 2025</p>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; <?= date("Y"); ?> Toyota Aisin Philippines, Inc. All Rights Reserved.</p>
  </footer>

</body>
</html>
