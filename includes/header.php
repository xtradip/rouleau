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

  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "additionalType": "TreeService",
  "name": "Élagage Urbain TR",
  "url": "https://elagageurbaintr.ca",
  "image": "https://elagageurbaintr.ca/images/logo2.png",
  "telephone": "+18192128222",
  "description": "Arboriculteur certifié à Sherbrooke et en Estrie : abattage d'arbres sécuritaire, élagage professionnel, taillage de haies de cèdres, plantation, déboisement et haubanage. Soumission gratuite, intervention rapide, équipe assurée et respect des normes. Protégez votre propriété contre le verglas et les tempêtes.",
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
  "priceRange": "$$",
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
      "opens": "08:00",
      "closes": "19:00"
    },
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Saturday",
      "opens": "09:00",
      "closes": "12:00"
    }
  ],
  "areaServed": [
    {"@type": "City", "name": "Sherbrooke"},
    {"@type": "City", "name": "Magog"},
    {"@type": "City", "name": "Orford"},
    {"@type": "City", "name": "North Hatley"},
    {"@type": "City", "name": "Waterville"},
    {"@type": "City", "name": "Cookshire-Eaton"},
    {"@type": "City", "name": "East Angus"},
    {"@type": "City", "name": "Brompton"},
    {"@type": "City", "name": "Ayer's Cliff"},
    {"@type": "City", "name": "Coaticook"},
    {"@type": "City", "name": "Windsor"},
    {"@type": "City", "name": "Austin"}
  ],
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "17",
    "bestRating": "5",
    "worstRating": "4"
  },
  "review": [
    {
      "@type": "Review",
      "author": {"@type": "Person", "name": "Jean-Christophe Rouleau"},
      "datePublished": "2025-12-02",
      "reviewRating": {"@type": "Rating", "ratingValue": "5"},
      "reviewBody": "Fait une belle coupe de haie propre."
    },
    {
      "@type": "Review",
      "author": {"@type": "Person", "name": "Olivier Foisy"},
      "datePublished": "2025-12-17",
      "reviewRating": {"@type": "Rating", "ratingValue": "5"},
      "reviewBody": "Excellent service avec Élagage Urbain TR. Travail propre, professionnel et fiable. Très satisfait du résultat, mes haies de cèdres sont superbes !"
    },
    {
      "@type": "Review",
      "author": {"@type": "Person", "name": "Marilou Breton"},
      "datePublished": "2026-01-13",
      "reviewRating": {"@type": "Rating", "ratingValue": "5"},
      "reviewBody": "Bon prix. Bon service. L’équipe a abattu un arbre dangereux proche de ma maison. Merci d’être intervenu rapidement. Je recommande Élagage Urbain TR!"
    },
    {
      "@type": "Review",
      "author": {"@type": "Person", "name": "Jordi Audet"},
      "datePublished": "2026-01-15",
      "reviewRating": {"@type": "Rating", "ratingValue": "5"},
      "reviewBody": "J'ai reçu le meilleure service d'abattage, merci infiniment pour le service ! Je recommande a tous, vous ne serez pas déçu !"
    },
    {
      "@type": "Review",
      "author": {"@type": "Person", "name": "Mathieu Roberge"},
      "datePublished": "2026-02-04",
      "reviewRating": {"@type": "Rating", "ratingValue": "5"},
      "reviewBody": "Service impeccable, j’ai demandé une soumission pour trois arbres qui étaient tombés sur mes fils et en moins de 2h j’avais ma soumission et dans la même semaine Élagage Urbain TR sont venu couper les arbres. Ils ont été d’un professionalisme que je souhaite à tout le monde. Merci à vous."
    },
    {
      "@type": "Review",
      "author": {"@type": "Person", "name": "Dicaire Marek"},
      "datePublished": "2026-02-18",
      "reviewRating": {"@type": "Rating", "ratingValue": "5"},
      "reviewBody": "Ils ont fait l’abattage de mes arbres la perfection! Je les recommande à tout le monde pour leur professionnalisme!!! Mon terrain a été ramasser à la perfection, très propre."
    },
    {
      "@type": "Review",
      "author": {"@type": "Person", "name": "Yasser El Boudi"},
      "datePublished": "2026-02-26",
      "reviewRating": {"@type": "Rating", "ratingValue": "5"},
      "reviewBody": "Super service ! J’ai fait appel à Élagage Urbain TR pour un abattage d’arbre assez gros dans ma cour à Sherbrooke et aussi pour le taillage de haies de cèdres qui avait vraiment besoin d’être redressé. Je recommande à 100 % pour tout ce qui touche l’élagage, l’abattage d’arbres ou le taillage de haies en Estrie. Merci, boulot parfait !"
    }
  ],
  "offers": {
    "@type": "Offer",
    "priceCurrency": "CAD",
    "price": "0",
    "itemOffered": {
      "@type": "Service",
      "name": "Soumission gratuite d'élagage ou abattage"
    },
    "availability": "https://schema.org/InStock"
  },
  "service": [
    {"@type": "Service", "name": "Abattage d'arbres", "serviceType": "Abattage sécuritaire et démontage par sections"},
    {"@type": "Service", "name": "Élagage d'arbres", "serviceType": "Élagage de sécurité, assainissement et éclaircissage"},
    {"@type": "Service", "name": "Taillage de haies de cèdres", "serviceType": "Taille précise et ramassage des retailles"},
    {"@type": "Service", "name": "Plantation d'arbres", "serviceType": "Conseils et plantation adaptée au climat de l'Estrie"},
    {"@type": "Service", "name": "Déboisement de terrain", "serviceType": "Déboisement sélectif, essouchement et préparation de terrain"},
    {"@type": "Service", "name": "Haubanage d'arbres", "serviceType": "Consolidation pour arbres matures et prévention de chutes"}
  ],
  "sameAs": [
    "https://maps.app.goo.gl/uw1UcRu17q9qKFKd7",
    "https://www.instagram.com/elagage_urbain_tr"
  ],
  "@graph": [
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Combien coûte l'abattage ou l'élagage d'un arbre à Sherbrooke ?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Le prix varie selon la taille de l'arbre, l'accès, les risques et la complexité. Nous offrons toujours une soumission gratuite et détaillée sur place. Nos tarifs sont compétitifs et transparents pour l'Estrie."
          }
        },
        {
          "@type": "Question",
          "name": "Êtes-vous assurés et certifiés pour les travaux en hauteur ?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Oui, nous sommes pleinement assurés (responsabilité civile et travaux en hauteur) et notre équipe suit les normes arboricoles les plus strictes. Sécurité maximale pour votre propriété et nos grimpeurs."
          }
        },
        {
          "@type": "Question",
          "name": "Combien de temps faut-il pour une intervention à Sherbrooke ou Magog ?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Souvent dans les 24-72h selon l'urgence (ex. arbre dangereux). Interventions rapides et ponctuelles, même en urgence pour le verglas ou les tempêtes."
          }
        },
        {
          "@type": "Question",
          "name": "Faites-vous du haubanage pour sauver un arbre mature ?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Oui, nous réalisons du haubanage professionnel pour consolider les branches et prolonger la vie des arbres précieux, surtout dans les zones venteuses de l'Estrie."
          }
        }
      ]
    }
  ]
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
        <li><a href="<?php echo isset($base_path) ? $base_path : ''; ?>zone-intervention/">Zone Intervention</a></li>
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