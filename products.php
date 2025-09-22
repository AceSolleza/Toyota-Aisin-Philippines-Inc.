<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Toyota Aisin Philippines, Inc.</title>
    <link rel="stylesheet" href="products.css">
</head>
<body>

    <!-- Header -->
    <header>
        <div class="logo">
            <img src="images/aisin-logo.png" alt="Aisin Logo">
            <span class="company-name">| TOYOTA AISIN PHILIPPINES, INC.</span>
        </div>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="products.php" class="active">Products</a></li>
                <li><a href="projects.php">Projects</a></li>
            </ul>
        </nav>
    </header>

    <!-- Products Section -->
    <section class="products-section">
        <h1>Our Products</h1>
        <p class="section-intro">
            Engineered for performance, efficiency, and durability. Explore our range of transmission 
            systems and automotive components manufactured by Toyota AISIN Philippines, Inc.
        </p>

        <!-- Product 1 -->
        <article class="product">
            <div class="product-info">
                <h2>FR 5-Speed Manual Transmission (AR5)</h2>
                <p>
                    The 5-Speed Manual Transmission is designed for innovative multi-purpose vehicles. 
                    With a maximum input torque of <strong>353 Nm</strong>, it allows manual shifting 
                    through five gears for optimal performance and fuel efficiency.
                </p>
                <p><strong>Manufacturer & Sales:</strong> Toyota AISIN Philippines, Inc.</p>
                <div class="features">
                    <span class="badge">Torque: 353 Nm</span>
                    <span class="badge">5 Gears</span>
                    <span class="badge">Fuel Efficient</span>
                </div>
            </div>
            <div class="product-media">
                <video loop muted playsinline>
                    <source src="videos/five-speed.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </article>

        <!-- Product 2 -->
        <article class="product reverse">
            <div class="product-info">
                <h2>FR 6-Speed Manual Transmission (AC6)</h2>
                <p>
                    The 6-Speed Manual Transmission is ideal for light trucks and passenger cars. 
                    With a maximum input torque of <strong>450 Nm</strong>, its long gear ratios 
                    provide fuel efficiency and power for improved performance.
                </p>
                <p><strong>Manufacturer & Sales:</strong> Toyota AISIN Philippines, Inc.</p>
                <div class="features">
                    <span class="badge">Torque: 450 Nm</span>
                    <span class="badge">6 Gears</span>
                    <span class="badge">High Performance</span>
                </div>
            </div>
            <div class="product-media">
                <video loop muted playsinline>
                    <source src="videos/six-speed.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </article>

        <!-- Product 3 -->
        <article class="product">
            <div class="product-info">
                <h2>Rear Pinion Gears</h2>
                <p>
                    Rear Pinion Gears act as planetary gears in an Automatic Transmission, placed 
                    between the sun gear and ring gear, enabling smooth transfer of rotation and power.
                </p>
                <p><strong>Manufacturer & Sales:</strong> Toyota AISIN Philippines, Inc.</p>
                <div class="features">
                    <span class="badge">Durable</span>
                    <span class="badge">Smooth Power Transfer</span>
                    <span class="badge">High Precision</span>
                </div>
            </div>
            <div class="product-media">
                <video loop muted playsinline>
                    <source src="videos/pinion-gear.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </article>

        <!-- Product 4 -->
        <article class="product reverse">
            <div class="product-info">
                <h2>Front Axle</h2>
                <p>
                    The Front Axle is part of the suspension system, holding the wheel, brake, 
                    and shock absorber. It facilitates steering and braking, ensuring safety and 
                    stability on the road.
                </p>
                <p><strong>Manufacturer & Sales:</strong> Toyota AISIN Philippines, Inc.</p>
                <div class="features">
                    <span class="badge">Strong Build</span>
                    <span class="badge">Safety Focused</span>
                    <span class="badge">Reliable</span>
                </div>
            </div>
            <div class="product-media">
                <video loop muted playsinline>
                    <source src="videos/front-axle.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </article>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; <?= date("Y"); ?> Toyota Aisin Philippines, Inc. All Rights Reserved.</p>
    </footer>

    <!-- Hover-to-play Script -->
    <script>
        document.querySelectorAll('.product video').forEach(video => {
            const parent = video.closest('.product');
            parent.addEventListener('mouseenter', () => video.play());
            parent.addEventListener('mouseleave', () => {
                video.pause();
                video.currentTime = 0;
            });
        });
    </script>

</body>
</html>
