<!DOCTYPE html>
<html lang="fr-CA">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php echo isset($page_title) ? $page_title : 'Elagage Urbain TR - Abattage et Élagage d\'Arbres à Sherbrooke'; ?>
  </title>
  <meta name="description"
    content="<?php echo isset($page_description) ? $page_description : 'Expert en abattage, élagage, taillage et plantation d\'arbres à Sherbrooke et en Estrie. Service professionnel et sécuritaire. Soumission gratuite au 819-212-8222.'; ?>">
  <meta name="keywords"
    content="<?php echo isset($page_keywords) ? $page_keywords : 'élagage Sherbrooke, abattage arbres Estrie, arboriculteur Sherbrooke, taillage haies, plantation arbres, déboisement, haubanage, service arboriculture Magog, Cantons-de-l\'Est'; ?>">
  <meta name="author" content="Elagage Urbain TR">
  <meta name="robots" content="index, follow">
  <meta name="theme-color" content="#2E7D32">
  <link rel="canonical"
    href="<?php echo isset($canonical_url) ? $canonical_url : 'https://elagageurbaintr.ca' . $_SERVER['REQUEST_URI']; ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo isset($page_title) ? $page_title : 'Elagage Urbain TR'; ?>">
  <meta property="og:description" content="<?php echo isset($page_description) ? $page_description : ''; ?>">
  <meta property="og:image"
    content="<?php echo isset($og_image) ? $og_image : (isset($base_path) ? $base_path : '') . 'images/logo2.png'; ?>">
  <meta property="og:url" content="<?php echo (isset($base_path) ? $base_path : '') . $_SERVER['REQUEST_URI']; ?>">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Elagage Urbain TR">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo isset($page_title) ? $page_title : 'Elagage Urbain TR'; ?>">
  <meta name="twitter:description" content="<?php echo isset($page_description) ? $page_description : ''; ?>">
  <meta name="twitter:image"
    content="<?php echo isset($og_image) ? $og_image : (isset($base_path) ? $base_path : '') . 'images/logo2.png'; ?>">

  <?php if (isset($hero_image)): ?>
    <!-- Preload hero image for better LCP -->
    <link rel="preload" as="image" href="<?php echo (isset($base_path) ? $base_path : '') . $hero_image; ?>"
      fetchpriority="high">
  <?php endif; ?>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo isset($css_path) ? $css_path : ''; ?>css/style.css">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?php echo isset($base_path) ? $base_path : ''; ?>images/favicon.ico">
  <link rel="icon" type="image/png" sizes="32x32"
    href="<?php echo isset($base_path) ? $base_path : ''; ?>images/logo-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16"
    href="<?php echo isset($base_path) ? $base_path : ''; ?>images/logo-16x16.png">
  <link rel="apple-touch-icon" sizes="180x180"
    href="<?php echo isset($base_path) ? $base_path : ''; ?>images/logo-180x180.png">

  <!-- Schema.org LocalBusiness -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "TreeService",
      "name": "Elagage Urbain TR",
      "image": "<?php echo isset($og_image) ? $og_image : (isset($base_path) ? $base_path : '') . 'images/logo2.png'; ?>",
      "telephone": "819-212-8222",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "4557 Rue Memphrémagog",
        "addressLocality": "Sherbrooke",
        "addressRegion": "QC",
        "postalCode": "J1L 2P2",
        "addressCountry": "CA"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 45.393956,
        "longitude": -71.977192
      },
      "url": "https://elagageurbaintr.ca",
      "priceRange": "$$",
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
        "opens": "08:00",
        "closes": "18:00"
      },
      "areaServed": ["Sherbrooke","Magog","Orford","North Hatley","Waterville","Cookshire-Eaton","East Angus","Brompton","Ayer's Cliff","Coaticook","Windsor","Austin"]
    }
  </script>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-M6Q0W5D0YS"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-M6Q0W5D0YS');
  </script>
</head>


<body>

  <!-- Header -->
  <header>
    <div class="container navbar">
      <a href="<?php echo isset($base_path) ? $base_path : ''; ?>" class="logo"
        style="display: flex; align-items: center; gap: 0.75rem;">
        <img src="<?php echo isset($base_path) ? $base_path : ''; ?>images/logo.webp" alt="Élagage Urbain TR Logo"
          style="height: 50px; width: auto;">
        Élagage Urbain TR
      </a>
      <ul class="nav-links">
        <li><a href="<?php echo isset($base_path) ? $base_path : ''; ?>">Accueil</a></li>
        <li class="dropdown">
          <a href="<?php echo isset($base_path) ? $base_path : ''; ?>index.php#services">Services</a>
          <div class="dropdown-content">
            <a href="<?php echo isset($base_path) ? $base_path : ''; ?>services/abattage.php">Abattage d'arbres</a>
            <a href="<?php echo isset($base_path) ? $base_path : ''; ?>services/elagage.php">Élagage d'arbres</a>
            <a href="<?php echo isset($base_path) ? $base_path : ''; ?>services/taillage.php">Taillage de haies</a>
            <a href="<?php echo isset($base_path) ? $base_path : ''; ?>services/plantation.php">Plantation d'arbres</a>
            <a href="<?php echo isset($base_path) ? $base_path : ''; ?>services/deboisement.php">Déboisement</a>
            <a href="<?php echo isset($base_path) ? $base_path : ''; ?>services/haubanage.php">Haubanage</a>
          </div>
        </li>
        <li><a href="<?php echo isset($base_path) ? $base_path : ''; ?>index.php#about">À Propos</a></li>
        <li><a href="tel:8192128222" class="btn btn-accent" style="display: flex; align-items: center; gap: 0.5rem;">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path
                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
              </path>
            </svg>
            819-212-8222
          </a></li>
      </ul>
      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </div>
  </header>