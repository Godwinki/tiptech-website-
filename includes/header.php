<?php 

?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TIP Healthtech - Leading healthcare technology solutions in Tanzania, offering telemedicine, AI diagnosis, and innovative healthcare delivery services.">
    <title>TIP Healthtech - Advanced Healthcare Solutions in Tanzania</title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/services.css">
    <link rel="stylesheet" href="assets/css/products.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/cookie-consent.css">
    <link rel="stylesheet" href="assets/css/service-details.css">
    
    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Before main.js -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/cookie-consent.js"></script>
    <script src="assets/js/main.js" defer></script>
    <script src="assets/js/service-details.js" defer></script>
</head>
<body>
    <!-- Cookie Consent -->
    <div class="cookie-consent" id="cookieConsent">
        <div class="cookie-content">
            <i class="fas fa-cookie-bite"></i>
            <p>We use cookies to enhance your experience. By continuing to visit this site you agree to our use of cookies.</p>
            <div class="cookie-buttons">
                <button class="btn btn--secondary" id="cookieSettings">Settings</button>
                <button class="btn btn--primary" id="acceptCookies">Accept All</button>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        <nav class="nav">
            <div class="nav__logo">
                <a href="index.php">
                    <i class="fas fa-heartbeat"></i>
                    <span> TIP Healthtech </span>
                </a>
            </div>
            
            <!-- Search Bar -->
            <div class="nav__search">
                <form class="search-form" action="search.php" method="GET">
                    <input type="search" name="q" placeholder="Search services, products..." aria-label="Search">
                    <button type="submit" aria-label="Submit Search">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>

            <div class="nav__menu">
            <a href="index.php" class="nav__link">Home</a>
                <a href="#services" class="nav__link">Services</a>
                <a href="#products" class="nav__link">Products</a>
                <a href="#about" class="nav__link">About</a>
                <a href="#contact" class="nav__link">Contact</a>
            </div>
            <a href="#download" class="btn btn--download">Download App</a>
            <button class="nav__toggle" aria-label="Toggle Menu">
                <i class="fas fa-bars"></i>
            </button>
           
        </nav>
    </header>
</body>
</html> 